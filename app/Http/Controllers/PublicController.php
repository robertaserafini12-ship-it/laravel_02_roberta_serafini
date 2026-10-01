<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    private $articles = [
        [
            'id' => 1,
            'title' => 'I capolavori della fantascienza moderna',
            'content' => 'Un viaggio tra gli effetti speciali e le storie distopiche che hanno segnato il cinema degli ultimi anni.',
            'director' => 'Denis Villeneuve'
        ],
        [
            'id' => 2,
            'title' => 'La magia delle colonne sonore di Morricone',
            'content' => 'Come la musica è diventata protagonista assoluta e indimenticabile sul grande schermo.',
            'director' => 'Ennio Morricone'
        ],
        [
            'id' => 3,
            'title' => 'I segreti del dietro le quinte a Hollywood',
            'content' => 'Scopriamo come nasce un kolossal cinematografico, dalla sceneggiatura alla post-produzione.',
            'director' => 'Christopher Nolan'
        ],
    ];

    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function blogIndex() {
        return view('blog', ['articles' => $this->articles]);
    }

    public function blogShow($id) {
        $article = null;
        foreach($this->articles as $item) {
            if($item['id'] == $id) {
                $article = $item;
                break;
            }
        }

        if (!is_null($article)) {
            return view('article-detail', ['article' => $article]);
        }

        abort(404);
    }
}