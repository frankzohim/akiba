<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Parametre;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Driver;
use App\Models\Ride;
use App\Models\Path;
use Cart;
use Session;
use App\Services\Api\Products\ProductService;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
			$product = (new ProductService())->getProduct($request->productId);
			//dd($request->quantity);	
			  
			Cart::add([
				'id' => $product['id'],
				'name' => $product['name'],
				'price' => $product['price'],
				'quantity' => $request->quantity,
				'attributes' => [],
				'associatedModel' => $product,
			  ]
			);
			return redirect()->back()->with('cart', $product['name'].' ajouter au panier avec succès');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function viewCart()
    {
        return view('cart.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
