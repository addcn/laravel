<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ArticleRepository;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    protected $article;

    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }

    /**
     * 文章首頁
     * 
     * @param  string
     * @return mixed
     */
    public function index()
    {
        $article = new \App\Article();
        //$article = $this->article->getById(1);        
        return view('article.index', compact('article'));
    }

    /**
     * 文章列表
     * 
     * @param  string
     * @return mixed
     */
    public function alist()
    {
        $article = new \App\Article();
        $articles = DB::table('articles')->simplePaginate(3);
        $articles = $this->article->page(3);
        return view('article.list', compact('articles'));
    }

    /**
     * 文章詳細
     * 
     * @param  string
     * @return mixed
     */
    public function detail($id)
    {
        $article = new \App\Article();
        $article = $this->article->getById($id);

        var_dump($article);

        $content = file_get_contents("./files/markdown/article/README.md");


        $data = [
            'raw'  => $content//,
            //'html' => (new Markdowner)->convertMarkdownToHtml($content)
        ];

        //echo $content;
        $article->content = json_encode($data);
        return view('article.detail', compact('article'));
    }

    /**
     * 文章新建
     * 
     * @param  string
     * @return mixed
     */
    public function create()
    {
        $article = new \App\Article();
        //var_dump($article);exit;
        return view('article.create', compact('article'));
    }

    /**
     * 文章發布
     * 
     * @param  string
     * @return mixed
     */
    public function store(Request $request)
    {
        $article = new \App\Article();
        $data = array_merge($request->all(), [
            'user_id'      => \Auth::id(),
            'last_user_id' => \Auth::id(),
            'status'       => true
        ]);

        $data = array_merge($request->all(), [
            'user_id'      => "1001",
            'last_user_id' => "1002",
            'category_id'  => "1",
            'subtitle'     => "subtitle"
        ]);

        $result = $this->article->store($data);
        //print_r($result->id);exit;
        return redirect()->to('article/detail/'.$result->id);
    }

    /**
     * 文章編輯
     * 
     * @param  string
     * @return mixed
     */
    public function edit()
    {
        $article = new \App\Article();
        //var_dump($article);exit;
        return view('article.edit', compact('article'));
    }

    /**
     * 文章刪除
     * 
     * @param  string
     * @return mixed
     */
    public function delete()
    {
        $article = new \App\Article();
        //var_dump($article);exit;
        return view('article.delete', compact('article'));
    }
}
