<?php

namespace App\Services\Api\Brands;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class BrandService{

     public function brands(){
        
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/brands");
               
                $brands = json_decode((string) $response->getBody(), true);
                
                if($brands['data'] === null){
                    return [];
                }
                else{
                    return $brands['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getbrand($id){
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/brands/".$id);
                $brand = json_decode((string) $response->getBody(), true);

                if($brand['data'] === null){
                    return null;
                }
                else{
                    return $brand['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

   public function create($brand){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::asForm()->withToken($token)->post($url."/api/v1/brands", [
                'name' => $brand['name'],
                'state' => $brand['state'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
        
    }

    public function delete($brand){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::asForm()->withToken($token)->delete($url."/api/v1/brands/".$brand, [
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
