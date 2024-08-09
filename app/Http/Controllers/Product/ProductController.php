<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use App\Services\Api\Products\ProductService;
use App\Services\Api\Categories\CategoryService;
use App\Services\Api\Brands\BrandService;
use App\Services\Api\Stores\StoreService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Session;
use Redirect;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = (new StoreService())->getVendorStore();
        if($store != null){
            $store = $store[0];
            $products = $store['products'];
            $products = (new ProductService())->getProductStore($store['id']);
            //dd($products);
            //Delete directory on page refresh
            \Illuminate\Support\Facades\Storage::deleteDirectory('products');
            //dd($products);
            return view('dashboard.vendor.product.index', compact('store', 'products'));
        }
        else
         return redirect()->route('db.vendor.index');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //Delete directory on page refresh
        $user = Session::get('currentUser');

        //Loading products categories
        $categories = (new CategoryService())->categories();
        //Loading brand
        $brands = (new BrandService())->brands();

        //dd($categories);
        \Illuminate\Support\Facades\Storage::deleteDirectory('products./'.$user->id);
        return view('dashboard.vendor.product.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //Retrieve URL API
        $url=(new UrlApiService())->getUrl();

        //Processing with API storage
       
        //dd($request->reference);
        $product['name'] = $request->name;
        $product['reference'] = $request->reference;
        $product['summary'] = $request->summary;
        $product['description'] = $request->description;
        $product['price'] = $request->price;
        $product['sale_quantity'] = $request->sale_quantity;
        $product['sku'] = $request->sku;
        $product['stock'] = $request->stock;
        $product['category'] = $request->category;
        $product['brand'] = $request->brand;
        $product['state'] = $request->state;
        $product['video'] = $request->video;

        $product = (new ProductService)->create($product);
        //dd($product->body());
         if($product){

            if($product->status() == 201){

                //Now uploading Product's logo
                $id = json_decode((string) $product->getBody(), true)['data']['id'];
                $token=Session::get('tokenUser');
                $user = Session::get('currentUser');
                foreach (\Illuminate\Support\Facades\Storage::files('products/'.$user->id) as $filename) {
                    $logo = \Illuminate\Support\Facades\Storage::get($filename);
                    //dd($logo);
                    $responseImage = Http::attach(
                        'file', $logo, $filename
                    )->withToken($token)->post($url."/api/v1/product/image", [
                            'product_id' => $id,
                    ]);

                    //dd($responseImage->getBody());

                }
                $product =  (json_decode((string) $product->getBody(), true))['data'];
              
                return redirect()->route('product')->with('success',"Product has been successfully added");


            }
            elseif($product->status() == 400){
                return Redirect::back()->withInput()->withErrors(['msg' => json_decode((string) $product->getBody(), true)]);
            }
         }
         else{
            return Redirect::back()->withInput()->withErrors(['msg' => "An error occured"]);
         }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $product = (new ProductService())->getProduct($id);
        //dd($product);
         //Delete directory on page refresh
        \Illuminate\Support\Facades\Storage::deleteDirectory('products');

        //Loading products categories
        $categories = (new CategoryService())->categories();
        //Loading brand
        $brands = (new BrandService())->brands();
        if($product){
            return view('dashboard.vendor.product.edit', compact('product', 'categories','brands'));
        }

        else
            dd('error');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $Product)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($product)
    { 
       
       $response = (new ProductService)->delete($product);

       if($response->status() == 204){
        return Redirect::back()->with('success',"Product has been successfully deleted");
       }
       else{
       
            return Redirect::back()->withInput()->withErrors(['msg' => "An error occured why deleting"]);
       }
    }

    public function uploadImage(Request $request){
      
        $image = $request->file('file');
        $extension = $image->getClientOriginalExtension();

        $allowedfileExtension=['jpg','png','jpeg','JPG','PNG','JPEG'];

        $check = in_array($extension,$allowedfileExtension);

        

        if(!$check){

            return response('Extension invalide', 400);
        }
        else{

            
        //Storing file in disk
        // $image = Image::make($request->file('file'));
        $imageName = $request->file_id . '_'.$request->file('file')->getClientOriginalName();
              
        //Make directory on page refresh
        $user = Session::get('currentUser');
        \Illuminate\Support\Facades\Storage::makeDirectory('products/'.$user->id);
        //$request->file->move(public_path('images'), $imageName);
        $request->file->storeAs('products/'.$user->id, $imageName);
        // if($extension === 'jpg')
        //     $request->file->move(storage_path('app\Products',$imageName));
        // else
        //     $request->file->move(storage_path('app\Products',$imageName));

                
                return response('Image addedd successfuly', 200);
            }

    }

    public function productImage($id, $path)
    {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/productImage/'.$id.'/'.$path);
        return $response;

    }

    public function deleteImage(Request $request){

        //  return response($request->filename, 200)
        //           ->header('Content-Type', 'application/json');
        foreach (\Illuminate\Support\Facades\Storage::files('Products') as $filename) {
                       
              
                if(str_contains($filename, $request->filename)){
                     \Illuminate\Support\Facades\Storage::delete($filename);
                }
                        
                   

                }
        
       
          return response("deleted successfully", 200)
                  ->header('Content-Type', 'application/json');
    }
}
