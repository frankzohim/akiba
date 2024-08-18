<?php

namespace App\Services\Api\Products;

use Exception;
use App\Services\Api\UrlApiService;
use App\Services\Api\Stores\StoreService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProductService{

    public function products(){
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/products");
                //dd($response->body());
                $Products = json_decode((string) $response->getBody(), true);
                
                if($Products['data'] === null){
                    return [];
                }
                else{
                    return $Products['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getProducts(){
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $response = Http::get($url."/api/productsList");
                //dd($response->body());
                $products = json_decode((string) $response->getBody(), true);
                //dd($products);
                if($products['data'] === null){
                    return [];
                }
                else{
                    return $products['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getVendorProduct(){
        
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $user = Session::get('currentUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/Products/vendor/".$user->id);
                //dd($response->body());
                $Products = json_decode((string) $response->getBody(), true);
                
                if($Products['data'] === null){
                    return [];
                }
                else{
                    return $Products['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getProductStore($storeId){

        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $user = Session::get('currentUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/products/store/".$storeId);
                //dd($response->body());
                $products = json_decode((string) $response->getBody(), true);
                //dd($products);
                if($products['data'] === null){
                    return [];
                }
                else{
                    return $products['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getProduct($id){
       
        //dd($id);
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::get($url."/api/getProduct/".$id);
                //dd($response->body());
                $product = json_decode((string) $response->getBody(), true);

                if($product['data'] === null){
                    return null;
                }
                else{
                    return $product['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

   public function create($product){

        $url=(new UrlApiService())->getUrl();
        $store = (new StoreService())->getVendorStore();
        try{
            $token=Session::get('tokenUser');
            $user = Session::get('currentUser');
            //dd($token);
            $response = Http::asForm()->withToken($token)->post($url."/api/v1/products", [
                'name' => $product['name'],
                'reference' => $product['reference'],
                'summary' => $product['summary'],
                'description' => $product['description'],
                'price' => $product['price'],
                'sale_quantity' => $product['sale_quantity'],
                'sku' => $product['sku'],
                'stock' =>  $product['stock'],
                'category' => $product['category'],
                'brand' => $product['brand'],
                'state' => $product['state'] ,
                'video' => $product['video'],
                'store' => $store[0]['id']
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
        
    }

    public function delete($product){

        
        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::asForm()->withToken($token)->delete($url."/api/v1/products/".$product, [
            ]);

            //dd($response->body());

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
