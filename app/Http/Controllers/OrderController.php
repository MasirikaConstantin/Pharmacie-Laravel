<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class OrderController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function addBooktoCart($id)
    {
        $book = Produit::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantite']++;
        } else {
            $cart[$id] = [
                "nom" => $book->nom,
                "quantite" => 1,
                "prix" => $book->prix,
                "image" => $book->image
            ];
        }
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Book has been added to cart!');
    }
    public function panierv(){
        return view('panier');
    }
}
