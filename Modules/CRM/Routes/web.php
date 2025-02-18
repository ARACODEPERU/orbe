<?php

use Illuminate\Support\Facades\Route;
use Modules\CRM\Http\Controllers\CrmChatController;
use Modules\CRM\Http\Controllers\CrmContactsController;
use Modules\CRM\Http\Controllers\CRMController;
use Modules\CRM\Http\Controllers\CrmConversationController;
use Modules\CRM\Http\Controllers\CrmMessagesController;
use Modules\CRM\Http\Controllers\CrmMailboxController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->prefix('crm')->group(function () {
    Route::middleware(['middleware' => 'permission:crm_dashboard'])
        ->get('dashboard', [CRMController::class, 'index'])
        ->name('crm_dashboard');

    Route::middleware(['middleware' => 'permission:crm_contactos_listado'])
        ->get('contacts/list', [CrmContactsController::class, 'index'])
        ->name('crm_contacts_list');

    Route::middleware(['middleware' => 'permission:crm_contactos_listado'])
        ->get('contacts/list/data', [CrmContactsController::class, 'getData'])
        ->name('crm_contacts_list_data');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->get('chat/dashboard', [CrmChatController::class, 'index'])
        ->name('crm_chat_dashboard');

    Route::middleware(['middleware' => 'permission:crm_chat_notifications'])
        ->get('chat/notifications', [CrmConversationController::class, 'getConversations'])
        ->name('crm_chat_notifications');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->get('chat/contacts', [CrmChatController::class, 'getContacts'])
        ->name('crm_chat_contacts_data');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->get('chat/conversation/{id}/status', [CrmConversationController::class, 'updateConversationStatus'])
        ->name('crm_chat_conveersation_status');


    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->post('conversations/messages', [CrmMessagesController::class, 'sendMessage'])
        ->name('crm_send_message');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->post('conversations/email/messages', [CrmMessagesController::class, 'sendMessageEmail'])
        ->name('crm_send_message_email');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->post('conversations/messages/list', [CrmMessagesController::class, 'getMessages'])
        ->name('crm_list_message');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->post('conversations/messages/upload/audio', [CrmMessagesController::class, 'uploadMessagesAudio'])
        ->name('crm_upload_message_audio');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->post('conversations/messages/delete/file', [CrmMessagesController::class, 'deleteFile'])
        ->name('crm_delete_message_file');

    Route::middleware(['middleware' => 'permission:crm_chat_dashboard'])
        ->post('conversations/messages/upload/file', [CrmMessagesController::class, 'uploadMessagesFile'])
        ->name('crm_upload_message_file');

    Route::get('download-file/{message_id}', [CrmMessagesController::class, 'downloadMessageFile'])->name('crm_download_message_file');

    Route::middleware(['middleware' => 'permission:crm_mailbox_dashboard'])
        ->get('mailbox/dashboard', [CrmMailboxController::class, 'index'])
        ->name('crm_mailbox_dashboard');

    Route::middleware(['middleware' => 'permission:crm_envio_correo_masivo'])
        ->get('contacts/mass/mailing', [CrmContactsController::class, 'massMailing'])
        ->name('crm_send_mass_mailing');


    Route::middleware(['middleware' => 'permission:crm_envio_correo_masivo'])
        ->post('contacts/list/pagination', [CrmContactsController::class, 'getContactsPagination'])
        ->name('crm_contacts_list_pagination');

    Route::middleware(['middleware' => 'permission:crm_empresas_listado'])
        ->get('companies/list', [CrmContactsController::class, 'companies'])
        ->name('crm_companies_list');

    Route::middleware(['middleware' => 'permission:crm_empresas_listado'])
        ->get('companies/list/pagination', [CrmContactsController::class, 'getCompanies'])
        ->name('crm_companies_list_pagination');

    Route::middleware(['middleware' => 'permission:crm_empresas_nuevo'])
        ->get('companies/create', [CrmContactsController::class, 'companiesCreate'])
        ->name('crm_companies_create');

    Route::middleware(['middleware' => 'permission:crm_empresas_nuevo'])
        ->post('companies/store', [CrmContactsController::class, 'companiesStore'])
        ->name('crm_companies_store');

    Route::middleware(['middleware' => 'permission:crm_empresas_editar'])
        ->get('contacts/{id}/edit', [CrmContactsController::class, 'companiesEdit'])
        ->name('crm_companies_edit');

    Route::middleware(['middleware' => 'permission:crm_empresas_editar'])
        ->post('companies/update', [CrmContactsController::class, 'companiesUpdate'])
        ->name('crm_companies_update');

    Route::middleware(['middleware' => 'permission:crm_empresas_eliminar'])
        ->delete('companies/destroy/{id}', [CrmContactsController::class, 'companiesDestroy'])
        ->name('crm_companies_destroy');

    Route::middleware(['middleware' => 'permission:crm_empresas_empleados'])
        ->get('companies/{id}/employees', [CrmContactsController::class, 'companiesEmployees'])
        ->name('crm_companies_employees');

    Route::middleware(['middleware' => 'permission:crm_empresas_empleados'])
        ->post('employees/list/search', [CrmContactsController::class, 'getEmployeesSearch'])
        ->name('crm_companies_employees_search');
    Route::middleware(['middleware' => 'permission:crm_empresas_agregar_empleados'])
        ->post('employees/list/search', [CrmContactsController::class, 'companiesEmployeesAdd'])
        ->name('crm_companies_employees_add');
});
