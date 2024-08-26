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
       // Update a product's quantity

       //return $request->add;

       //if add is true we add
       if($request->add === true){
             Cart::update($id, array(
                'quantity' => 1, // so if the current product has a quantity of 4, another 1 will be added so this will result to 5
            ));

             return 'Quantity plus';
       }

         //if add is false we minus
       else{
             Cart::update($id, array(
            'quantity' => -1, // so if the current product has a quantity of 4, 1 will be subtracted so this will result to 4
            ));

             return 'Quantity minus';
       }

       

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cart::remove($id);
        return redirect(route('viewCart'))->with('cart_delete', 'Produit retiré du panier avec succès');
    }
}
