<?php
/**
 * Author : Frank Zohim
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\Api\Categories\CategoryService;
use Redirect;



class ShopController extends Controller
{



    public function index(Request $request){

       return view('shop');


    }

}
