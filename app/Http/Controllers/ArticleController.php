<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Il tuo array di dati (es. articoli del blog)
    private $articles = [
        [
            'id' => 1,
            'title' => 'Primo Articolo del Blog',
            'content' => 'Contenuto del primo articolo...',
        ],
        [
            'id' => 2,
            'title' => 'Secondo Articolo del Blog',
            'content' => 'Contenuto del secondo articolo...',
        ],
        [
            'id' => 3,
            'title' => 'Terzo Articolo del Blog',
            'content' => 'Contenuto del terzo articolo...',
        ],
    ];

    public function index() {
        return view('articles.index', ['articles' => $this->articles]);
    }

    public function show($id) {
        $article = null;
        foreach($this->articles as $item) {
            if($item['id'] == $id) {
                $article = $item;
                break;
            }
        }

        if (!is_null($article)) {
            return view('articles.show', ['article' => $article]);
        }

        abort(404);
    }
}