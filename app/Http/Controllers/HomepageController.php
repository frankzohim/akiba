<?php
/**
 * Author : Frank Zohim
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Redirect;



class HomepageController extends Controller
{



    public function homepage(Request $request){

        $user = Session::get('currentUser');
        if($user)
         return view('Homepage', compact('user'));
        else
            return view('Homepage');


    }

}
