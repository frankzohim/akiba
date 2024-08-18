<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\Api\Categories\CategoryService;
use App\Services\Api\Products\ProductService;
use App\Services\Api\Brands\BrandService;
use Illuminate\Support\Facades\Session;

class SharedViewDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Loading categories
        $categories = (new CategoryService())->getCategories();

        //Loading products
        $products = (new ProductService())->getProducts();

        //Loading brands
        $brands = (new BrandService())->brands();

        $user = Session::get('currentUser');
        View::share('categories', $categories);
        View::share('products', $products);
        View::share('brands', $brands);
        View::share('user', $user);
        
        return $next($request);
    }
}
