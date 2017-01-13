<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ArticleRepository;

class ArticleController extends Controller
{
    protected $article;

    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }


    /**
     * Display the article
     * 
     * @param  string
     * @return mixed
     */
    public function index()
    {
        //$article = $this->article->getById(1);
        //$article->content = collect(json_decode($article->content))->get('html');
        
        $article = new \App\Article();

        //var_dump($article);exit;
        return view('article.index', compact('article'));
    }


    /**
     * Display the article
     * 
     * @param  string
     * @return mixed
     */
    public function alist()
    {
        //$article = $this->article->getById(1);
        //$article->content = collect(json_decode($article->content))->get('html');
        
        $article = new \App\Article();

        //var_dump($article);exit;
        return view('article.list', compact('article'));
    }


    /**
     * Display the article
     * 
     * @param  string
     * @return mixed
     */
    public function detail()
    {
        //$article = $this->article->getById(1);
        //$article->content = collect(json_decode($article->content))->get('html');
        
        $article = new \App\Article();

        //var_dump($article);exit;
        return view('article.detail', compact('article'));
    }



    /**
     * Display the article
     * 
     * @param  string
     * @return mixed
     */
    public function create()
    {
        //$article = $this->article->getById(1);
        //$article->content = collect(json_decode($article->content))->get('html');
        
        $article = new \App\Article();

        //var_dump($article);exit;
        return view('article.create', compact('article'));
    }


    /**
     * Display the article
     * 
     * @param  string
     * @return mixed
     */
    public function edit()
    {
        //$article = $this->article->getById(1);
        //$article->content = collect(json_decode($article->content))->get('html');
        
        $article = new \App\Article();

        //var_dump($article);exit;
        return view('article.edit', compact('article'));
    }

    /**
     * Display the article
     * 
     * @param  string
     * @return mixed
     */
    public function delete()
    {
        //$article = $this->article->getById(1);
        //$article->content = collect(json_decode($article->content))->get('html');
        
        $article = new \App\Article();

        //var_dump($article);exit;
        return view('article.delete', compact('article'));
    }
}
