<?php

namespace App\Services\Api\Stores;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class StoreService{

    public function stores(){
        
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/stores");
               
                $stores = json_decode((string) $response->getBody(), true);
                
                if($stores['data'] === null){
                    return [];
                }
                else{
                    return $stores['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getVendorStore(){
        
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $user = Session::get('currentUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/stores/vendor/".$user->id);
                //dd($response->body());
                $stores = json_decode((string) $response->getBody(), true);
                
                if($stores['data'] === null){
                    return [];
                }
                else{
                    return $stores['data'];
                }

            }catch(\Exception $e){

                return [];
            }

    }

    public function getStore($id){
        
        $url=(new UrlApiService())->getUrl();
            
            try{
                $token=Session::get('tokenUser');
                $response = Http::asForm()->withToken($token)->get($url."/api/v1/stores/".$id);
                //dd($response->body());
                $store = json_decode((string) $response->getBody(), true);

                if($store['data'] === null){
                    return null;
                }
                else{
                    return $store['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

   public function create($store){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $user = Session::get('currentUser');
            $response = Http::asForm()->withToken($token)->post($url."/api/v1/stores", [
                'name' => $store['name'],
                'email' => $store['email'],
                'phone_number' => $store['phone'],
                'description' => $store['description'],
                'state' => 0,
                'user_id' => $user->id
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
        
    }

    public function delete($store){

        $url=(new UrlApiService())->getUrl();

        try{
            $token=Session::get('tokenUser');
            $response = Http::asForm()->withToken($token)->delete($url."/api/v1/stores/".$store, [
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
