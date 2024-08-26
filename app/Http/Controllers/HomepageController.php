<?php
/**
 * Author : Frank Zohim
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\Api\Categories\CategoryService;
use Redirect;



class HomepageController extends Controller
{
    public function homepage(Request $request){

        return view('homepage');

    }

}
