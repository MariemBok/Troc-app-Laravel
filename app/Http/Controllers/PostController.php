<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class PostController extends Controller
{

    public function index(){



        return view('articles', ['articles' => Produit::all()]);
    }

    public function show($id){

        if(Produit::find( $id ) === null){abort(404);}

        return view('article',['article' => Produit::find($id)]);

    }

}
