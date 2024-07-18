<?php

namespace App\Services\Api\Products;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProductService{

    public function Products(){
        
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/products");
               
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

    public function getProduct($id){
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/Products/".$id);
                //dd($response->body());
                $Product = json_decode((string) $response->getBody(), true);

                if($Product['data'] === null){
                    return null;
                }
                else{
                    return $Product['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

   public function create($Product){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $user = Session::get('currentUser');
            $response = Http::asForm()->withToken($token)->post($url."/api/v1/Products", [
                'name' => $Product['name'],
                'email' => $Product['email'],
                'phone_number' => $Product['phone'],
                'description' => $Product['description'],
                'state' => 0,
                'user_id' => $user->id
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
        
    }

    public function delete($Product){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::asForm()->withToken($token)->delete($url."/api/v1/Products/".$Product, [
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
