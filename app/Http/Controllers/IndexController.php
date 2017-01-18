<?php

namespace App\Http\Controllers;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $article;

    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }


    /**
     * vue單頁面項目
     * 
     * @return mixed
     */
    public function spa()
    {
        return view('index.spa');
    }
    

    /**
     * vue組件顯示markdown
     * 
     * @param  string
     * @return mixed
     */
    public function markdown()
    {
        $article = new \App\Article();
        $content = file_get_contents("./files/markdown/article/README.md");
        $data = ['raw'  => $content];
        $article->content = json_encode($data);
        return view('index.markdown', compact('article'));
    }

    /**
     * 聯繫我們
     * 
     * @return mixed
     */
    public function contact()
    {
        return view('index.contact');
    }

    /**
     * 關於我們
     * 
     * @return mixed
     */
    public function about()
    {
        return view('index.about');
    }
}
