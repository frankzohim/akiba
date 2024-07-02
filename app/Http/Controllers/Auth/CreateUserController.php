<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Services\Api\UrlApiService;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function create(){

       
        return view('auth.register');
    }

    public function store(Request $request){

        $url=(new UrlApiService())->getUrl();
        $u=$url."/api/user";

        try{

            $response = Http::asForm()->post($u, [
                'username' => $request->username,
                'role_id' => $request->role_id,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => $request->password,
            ]);
          
            $dataResponse = json_decode($response);
            $code = $dataResponse->code ?? null;
            $message = $dataResponse->message ?? null;
            if(isset($response['error'])){
                
                return back()->with('error',"Numéro de téléphone ou mot de passe invalide");

            }else if($code===203){

                return back()->with('error',$message);
            }else{

                if($request->session()->has('tokenUser')){
                    $request->session()->forget('tokenUser');
                }
                if(Session::has('currentUser')){
                    Session::forget('currentUser');
                }
                $access_token = json_decode((string) $response->getBody(), true)['access_token'];
                Session::put('tokenUser', $access_token);
                Session::save();

                $currentUser=(new CurrentUserService())->currentUser();
                Session::put('currentUser', $currentUser);
                Session::save();

                $userType=(new UserTypeService())->checkRole($currentUser->role_id);
                return $userType;
             
            }
        }catch(\Exception $e){
            //return view('error');
            dd($e);
        }
    }
}
