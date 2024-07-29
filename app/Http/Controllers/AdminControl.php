<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Http\Requests\ProduitControl;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

class AdminControl extends Controller
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
    public function getUser(User $id){
        return view('edituser',['us'=>$id]);
    }

    public function BloquerUser(Request $request, User $id)
        {
            $user=$id;
           // dd($user);
            // Valider uniquement le champ 'etat'
            if($user->etat==1){
                $user->update(['etat' => 0]);
            }else{
                $user->update(['etat' => 1]);
            }
            
            return redirect()->route('edituser',['id'=>$user])->with('success', 'Post status updated successfully');
        }

    public function ProduitCreate(Produit $produit){
        
        return view("produit",['categorie'=>Categorie::select('id','nom')->get(),'produit'=>$produit]);
    }
    public function Produit(ProduitControl $controller){
       // dd("cococo");
        //dd($controller->validated());
        Produit::create($controller->validated());
        return redirect()->route("admin")->with('success', 'Produit créer avec succès');

    }
    public function editproduit(Produit $id){
        //    dd($id);
            return view('produit',['produit' =>$id,'categorie'=>Categorie::select('id','nom')->get()]);
        }

        public function editpro(ProduitControl $request, Produit $id){
           $id->update($request->validated());
    return redirect()->route('admin')->with('success', 'Le Produit '.$id->nom.' a été modifié avec succès');

        }
        public function creercategorie(CategorieRequest $request){
            //dd($request->validated());
            Categorie::create($request->validated());
            return redirect()->route('admin')->with('success', 'La catégorie '.$request->nom.' a été créée avec succès');
        }
}
