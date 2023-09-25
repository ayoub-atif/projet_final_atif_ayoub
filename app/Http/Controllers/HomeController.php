<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produits = Produit::all();
        $fourProduits = Produit::latest()->limit(4)->get();
        $randomProduits = $produits->shuffle()->take(3);
        $lastproduit = Produit::latest()->limit(1)->get();
        $eightrProduits = Produit::latest()->limit(8)->get();
        return view('frontend.home',compact('produits','randomProduits','fourProduits' , 'eightrProduits' , 'lastproduit'));
       } 
}