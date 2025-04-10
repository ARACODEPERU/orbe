<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Modules\CMS\Entities\CmsSection;
use Modules\CMS\Entities\CmsSectionItem;
use Modules\Onlineshop\Entities\OnliItem;
use Modules\Academic\Entities\AcaCourse;
use Modules\Academic\Entities\AcaCategoryCourse;
use Modules\Onlineshop\Entities\OnliSale;
use Modules\Onlineshop\Entities\OnliSaleDetail;
use Modules\Sales\Entities\SaleProductCategory;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Client\Payment\PaymentClient;
use Illuminate\Support\Facades\Validator;
use App\Mail\StudentRegistrationMailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmPurchaseMail;
use Carbon\Carbon;
use Modules\Academic\Entities\AcaStudent;
use Modules\Academic\Entities\AcaCapRegistration;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class WebPageController extends Controller
{
    protected $listcard;

    public function __construct()
    {


    }


    public function index()
    {
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        $products = OnliItem::where('status', true)->latest()->take(25)->get();
        $products = $products->shuffle()->take(8);

        $servicios = CmsSection::where('component_id', 'servicios_area_4')
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $perfomance = CmsSectionItem::with('item.items')->where('section_id', 5)->get();


        // return view('pages.home', compact('categories', 'subcategories', 'products'));

        return view('pages.home', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'servicios' => $servicios,
            'perfomance' => $perfomance
        ]);
    }

    public function about()
    {
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        return view('pages.about', compact('categories', 'subcategories'));
    }

    public function nosotros()
    {

        $banner = CmsSection::where('component_id', 'nosotros_banner_area_11')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();


        $visions = CmsSection::where('component_id', 'nosotros_vision_area_12')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        $lider = CmsSection::where('component_id', 'nosotros_lider_area_13')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.nosotros', [
            'banner' => $banner,
            'visions' => $visions,
            'lider' => $lider
        ]);
    }

    public function categories()
    {
        return view('pages.categories');
    }

    public function products()
    {
        $products = OnliItem::where('status', true)->paginate(20);
        $count = $products->total();
        $category_id= 0;
        $categories = SaleProductCategory::where('category_id', null)->get();
        // Repetir la consulta 6 veces para obtener un total de 36 filas pruebas


        return view('pages.products',[
            'products' => $products,
            'count' => $count,
            'categories' => $categories
        ]);
    }

    public function products_category($category_id = null)
    {
        $ids_category = [];
        $count = null;

        if ($category_id == null) {
            $products = OnliItem::where('status', true)->paginate(20);
            $count = $products->total();
        } else {
            // $products = OnliItem::where('onli_items.status', true)
            // ->join('products', 'onli_items.item_id', 'products.id')
            // ->join('sale_product_categories', 'products.category_id', 'sale_product_categories.id')
            // ->where('sale_product_categories.id', $category_id)
            // ->get();
            $ids_category = [(int)$category_id];
            $ids_category = $this->get_categories($ids_category);

            $products = OnliItem::join('products', 'onli_items.item_id', 'products.id')
                                ->join('sale_product_categories', 'products.category_id', 'sale_product_categories.id')
                                ->whereIn('sale_product_categories.id', $ids_category)
                                ->where('onli_items.status', true)
                                ->select('onli_items.*')
                                ->paginate(20);
            $count = $products->total();
        }

        //$count = $products->total();
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        $category_name = $categories->where('id', $category_id)->first();
        if($category_name){
            $category_name = $category_name->description;
        }else{
            $category_name = "Todos los Productos";
        }

        return view('pages.products', [
            'products' => $products,
            'count' => $count,
            'categories' => $categories,
            'category_id' => $category_id == null? 0 : $category_id,
            'category_name' => $category_name,
            'subcategories' => $subcategories

        ]);
    }

    protected function get_categories($ids = []){
        $categories = $ids;
        foreach ($ids as $id) {
            $results = SaleProductCategory::where('category_id', $id)
                                          ->select('id')
                                          ->get()
                                          ->pluck('id')
                                          ->toArray();
            if($results){
                $categories = array_merge($categories, $results);
                if(count($results) > 0){
                    $results = $this->get_categories($results);
                    if($results){
                        $categories = array_merge($categories, $results);
                    }
                }
            }
        }

        return $categories;
    }

    public function prodescription($id)
    {
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        $product = OnliItem::find($id);
        return view('pages.product-description', compact('categories', 'subcategories', 'product'));
    }

    public function cursos()
    {
        $courses = OnliItem::with('course')->get();
        $courses = $courses->shuffle();
        $categories = AcaCategoryCourse::all();

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.cursos', [
            'courses' => $courses,
            'categories' => $categories,
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function servicios()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.servicios', [
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function capacitacion()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.capacitacion', [
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function suscripcion()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.suscripcion', [
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function automatizacion()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.automatizacion', [
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function agencia()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.agencia', [
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function imagenprofesional()
    {

        $banner = CmsSection::where('component_id', 'cursos_banner_area_14')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'cursos_titulo_area_15')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();

        return view('pages.imagen-profesional', [
            'banner' => $banner,
            'title' => $title
        ]);
    }

    public function cursodescripcion($id)
    {
        $item = OnliItem::find($id);

        $course = AcaCourse::with('category')
            ->with('modality')
            ->with('modules')
            ->with('teachers.teacher.person.resumes')
            ->with('brochure')
            ->with('agreements')
            ->where('id', $item->item_id)
            ->first();

        $latest_courses = OnliItem::with('course')
            ->orderBy('id', 'desc')
            ->where('id', '!=', $id)
            ->take(10)
            ->get()
            ->shuffle()
            ->take(3);

        return view('pages.curso-descripcion', [
            'course' => $course,
            'item' => $item,
            'latest_courses' => $latest_courses
        ]);
    }

    public function contact()
    {
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        return view('pages.contact', compact('categories', 'subcategories'));
    }

    public function contacto()
    {
        $banner = CmsSection::where('component_id', 'nosotros_banner_area_11')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->first();

        $title = CmsSection::where('component_id', 'header_area_1')  //siempre cambiar el id del componente
            ->join('cms_section_items', 'section_id', 'cms_sections.id')
            ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
            ->select(
                'cms_items.content',
                'cms_section_items.position'
            )
            ->orderBy('cms_section_items.position')
            ->get();


        return view('pages.contacto', [
            'banner' => $banner,
            'title' => $title
        ]);
    }


    public function privacy()
    {
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        return view('pages.privacy-policies', compact('categories', 'subcategories'));
    }

    public function claims()
    {
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }

        // $banner = CmsSection::where('component_id', 'banner_nosotros_6')  //siempre cambiar el id del componente
        //     ->join('cms_section_items', 'section_id', 'cms_sections.id')
        //     ->join('cms_items', 'cms_section_items.item_id', 'cms_items.id')
        //     ->select(
        //         'cms_items.content',
        //         'cms_section_items.position'
        //     )
        //     ->orderBy('cms_section_items.position')
        //     ->get();

        return view('pages.complaints-book', compact('categories', 'subcategories'));
    }

    public function eclaims()
    {
        return view('emails/e_complaints_book');
    }

    public function cart()
    {
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        return view('pages.cart', compact('categories', 'subcategories'));
    }

    public function pay(Request $request)
    {
        //dd($request->all());
        $names = $request->names;
        $phone = $request->phone;
        $product_id = $request->product_id;

        // Obtener los elementos de la base de datos
        $products = OnliItem::whereIn('id', $request->product_id)->orderBy('id')->get();
        $product_prices = $products->pluck('price')->toArray();
        $product_names = $products->pluck('name')->toArray();

        // Obtener la cantidad de productos del arreglo $request->product_quantity
        $product_quantity = $request->product_quantity;

        // Iterar sobre cada producto y agregar el atributo 'quantity' dinámicamente
        $x=0;
        $total=0;
        $products->each(function ($product) use ($product_quantity, &$x, &$total) {
            // Verificar si existe una cantidad para el producto en el arreglo
            if (isset($product_quantity[$x])) {
                // Agregar el atributo 'quantity' al modelo dinámicamente
                $product->setAttribute('quantity', $product_quantity[$x]);
                $total+=$product->price*$product->quantity;
            } else {
                // Puedes establecer un valor por defecto si no se encuentra la cantidad
                $product->setAttribute('quantity', 0);
            }
        $x++;
        });
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }
        return view('pages.pay', compact('categories', 'subcategories', 'products', 'total', 'names', 'product_id', 'product_quantity', 'phone', 'product_prices', 'product_names'));
    }

    public function pagar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'names' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        //dd($request->all());
        $product_id = $request->product_id;

        // Obtener los elementos de la base de datos
        $products = OnliItem::whereIn('id', $request->product_id)->orderBy('id')->get();
        $product_prices = $products->pluck('price')->toArray();
        $product_names = $products->pluck('name')->toArray();

        // Obtener la cantidad de productos del arreglo $request->product_quantity
        $product_quantity = $request->product_quantity;

        // Iterar sobre cada producto y agregar el atributo 'quantity' dinámicamente
        $x=0;
        $total=0;
        $products->each(function ($product) use ($product_quantity, &$x, &$total) {
            // Verificar si existe una cantidad para el producto en el arreglo
            if (isset($product_quantity[$x])) {
                // Agregar el atributo 'quantity' al modelo dinámicamente
                $product->setAttribute('quantity', $product_quantity[$x]);
                $total+=$product->price*$product->quantity;
            } else {
                // Puedes establecer un valor por defecto si no se encuentra la cantidad
                $product->setAttribute('quantity', 0);
            }
        $x++;
        });

        $productos = $products;
        $categories = SaleProductCategory::whereNull('category_id')->get();
        $subcategories = [];
        foreach ($categories as $key => $category) {
            $subcategories[$key] = SaleProductCategory::where('category_id', $category->id)->select('id', 'description')->get()->toArray();
        }

///////////////////////////////////// aqui abajo esta entacto

        $comprador_nombre = $request->names;
        $comprador_telefono = $request->phone;
        $email = $request->email;

        $preference_id = null;
        try {

            MercadoPagoConfig::setAccessToken(env('MERCADOPAGO_TOKEN'));
            $client = new PreferenceClient();
            $items = [];
            $products = [];
            $total = 0;

            $sale = OnliSale::create([
                'module_name'                   => 'Onlineshop',
                'person_id'                     => 1,
                'clie_full_name'                => $comprador_nombre,
                'phone'                         => $comprador_telefono,
                'email'                         => $email,
                'response_status'               => 'pendiente',
            ]);

            foreach ($product_id as $key => $id) {
                array_push($items, [
                    'id' => $id,
                    'title' => $product_names[$key],
                    'quantity'      => floatval($product_quantity[$key]),
                    'currency_id'   => 'PEN',
                    'unit_price'    => floatval($product_prices[$key])
                ]);

                $product = OnliItem::find($id);

                array_push($products, [
                    'image' => $product->image,
                    'name' => $product->name,
                    'price' => floatval($product_prices[$key]),
                    'quantity'      => floatval($product_quantity[$key]),
                    'total' => (floatval($product_quantity[$key]) * floatval($product_prices[$key]))
                ]);

                $total = $total + (floatval($product_quantity[$key]) * floatval($product_prices[$key]));

                OnliSaleDetail::create([
                    'sale_id'       => $sale->id,
                    'item_id'       => $product->item_id,
                    'entitie'       => $product->entitie,
                    'price'         => $product->price-$product->discount,
                    'quantity'      => floatval($product_quantity[$key]),
                    'onli_item_id'  => $id
                ]);
            }

            $preference = $client->create([
                "items" => $items,
            ]);

            // $preference->back_urls = array(
            //     "success" => route('web_gracias_por_comprar_tu_entrada', $sale->id),
            //     // "failure" => "http://www.tu-sitio/failure",
            //     // "pending" => "http://www.tu-sitio/pending"
            // );

            $preference_id =  $preference->id;
        } catch (\MercadoPago\Exceptions\MPApiException $e) {
            // Manejar la excepción

            $response = $e->getApiResponse();
            dd($response); // Mostrar la respuesta para obtener más detalles
        }

        return view('pages/pay', [
            'preference' => $preference_id,
            'products' => $productos,
            'total' => $total,
            'sale_id' => $sale->id,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'total' => $total,
            'names' => $comprador_nombre,
            'product_id' => $product_id,
            'product_quantity' => $product_quantity,
            'phone' => $request->phone,
            'product_prices' => $product_prices,
            'product_names' => $product_names,
        ]);
        //return view('pages.pay', compact('categories', 'subcategories', 'products', 'total', 'names', 'product_id', 'product_quantity', 'phone', 'product_prices', 'product_names'));

    }

    public function gracias()
    {
        return view('pages.gracias');
    }


    public function construction()
    {
        return view('pages.construction');
    }

    public function processPayment(Request $request, $id)
    {
        MercadoPagoConfig::setAccessToken(env('MERCADOPAGO_TOKEN'));

        $client = new PaymentClient();
        $sale = OnliSale::find($id);

        if ($sale->response_status == 'approved') {
            return response()->json(['error' => 'el pedido ya fue procesado, ya no puede volver a pagar'], 412);
        } else {
            try {

                $payment = $client->create([
                    "token" => $request->get('token'),
                    "issuer_id" => $request->get('issuer_id'),
                    "payment_method_id" => $request->get('payment_method_id'),
                    "transaction_amount" => (float) $request->get('transaction_amount'),
                    "installments" => $request->get('installments'),
                    "payer" => $request->get('payer')
                ]);

                if ($payment->status == 'approved') {

                    $sale->email = $request->get('payer')['email'];
                    $sale->total = $request->get('transaction_amount');
                    $sale->identification_type = $request->get('payer')['identification']['type'];
                    $sale->identification_number = $request->get('payer')['identification']['number'];
                    $sale->response_status = $payment->status;
                    $sale->response_id = $request->get('collection_id');
                    $sale->response_date_approved = Carbon::now()->format('Y-m-d');
                    $sale->response_payer = json_encode($request->all());
                    $sale->response_payment_method_id = $request->get('payment_type');
                    $sale->mercado_payment_id = $payment->id;
                    $sale->mercado_payment = json_encode($payment);

                    ///enviar correo
                    Mail::to($sale->email)
                        ->send(new ConfirmPurchaseMail(OnliSale::with('details.item')->where('id', $id)->first()));

                    $sale->save();
                    $this->enviar_correo_con_cursos($id);

                    return response()->json([
                        'status' => $payment->status,
                        'message' => $payment->status_detail,
                        'url' => route('web_gracias_por_cursos', $sale->id) // AQUI solo la ruta q muestre datos de la compra
                    ]);
                } else {

                    return response()->json([
                        'status' => $payment->status,
                        'message' => $payment->status_detail,
                        'url' => route('web_pagar')
                    ]);

                    $sale->delete();
                }
            } catch (\MercadoPago\Exceptions\MPApiException $e) {
                // Manejar la excepción
                $response = $e->getApiResponse();
                $content  = $response->getContent();

                $message = $content['message'];
                return response()->json(['error' => 'Error al procesar el pago: ' . $message], 412);
            }
        }
    }

    public function graciasCompra($id)
    {
        $sale = OnliSale::where('id', $id)->with('details.item')->first();
        $person = Person::where('id', $sale->person_id)->first();
        $details = $sale->details;
        $itemIds = $details->pluck('item_id')->toArray();
        $products = OnliItem::whereIn('item_id', $itemIds)->get();
        //$student = AcaStudent::where('person_id', $person->id)->first();

        $courses = [];
        foreach ($details as $k => $detail) {
            $item = OnliItem::find($detail->onli_item_id);
            $courses[$k] = [
                'image'       => $item->image,
                'name'        => $item->name,
                'description' => $item->description,
                'type'        => $item->additional,
                'modality'    => $item->additional1,
                'price'      => $item->price
            ];
        }

        return view('pages.gracias', [
            'products' => $products,
            'sale' => $sale,
            'person' => $person,
        ]);
    }




    private function enviar_correo_con_cursos($sale_id)
    {
        $sale = OnliSale::where('id', $sale_id)->with('details.item')->first();
        $person = Person::where('id', $sale->person_id)->first();
        $details = $sale->details;
        //$itemIds = $details->pluck('item_id')->toArray();
        //        $products = OnliItem::whereIn('item_id', $itemIds)->get();
        // $student = AcaStudent::where('person_id', $person->id)->first();

        $courses = [];
        foreach ($details as $k => $detail) {
            $item = OnliItem::find($detail->onli_item_id);
            $courses[$k] = [
                'image'       => $item->image,
                'name'        => $item->name,
                'description' => $item->description,
                'type'        => $item->additional,
                'modality'    => $item->additional1,
                'price'      => $item->price
            ];
        }

        //////////codigo enviar correo /////
        Mail::to($person->email)
            ->send(new StudentRegistrationMailable([
                'courses'   => $courses,
                'names'     => $person->names,
                'email'      => $person->email,
                'password'  => $person->number
            ]));
    }

    private function matricular_curso($producto, $student)
    {

        $course_id = $producto->item_id;

        $registration = AcaCapRegistration::create([
            'student_id' => $student->id,
            'course_id' => $course_id,
            'status' => true,
            'modality_id' => 3,
            'unlimited' => true
        ]);
    }
}
