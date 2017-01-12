<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository
{
    use BaseRepository;

    protected $model;


    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    /**
     * Get the article record without draft scope.
     * 
     * @param  int $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }


    /**
     * Delete the draft article.
     *
     * @param int $id
     * @return boolean
     */
    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }

}
