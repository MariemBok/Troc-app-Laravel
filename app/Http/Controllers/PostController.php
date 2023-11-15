<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $articles = [
            [
                'title' => 'Mon premier article',
                'content' => 'Lorem ipsum'
            ],
            [
                'title' => 'Mon deuxieme article',
                'content' => 'Lorem ipsum'
            ],
            [
                'title' => 'Mon troisieme article',
                'content' => 'Lorem ipsum'
            ],
            [
                'title' => 'Mon quatrieme article',
                'content' => 'Lorem ipsum'
            ],
            [
                'title' => 'Mon cinquieme article',
                'content' => 'Lorem ipsum'
            ]
        ];

        return view('articles', ['articles' => $articles]);
    }
}
