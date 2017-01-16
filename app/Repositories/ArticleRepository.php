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
     * Store a new article.
     * @param  array $data
     * @return Model
     */
    public function store($data)
    {
        $article = $this->model->create($data);
        return $article;
    }

    /**
     * Get the page of articles without draft scope.
     * 
     * @param  integer $number
     * @param  string  $sort
     * @param  string  $sortColumn
     * @return collection
     */
    public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        return $this->model->orderBy($sortColumn, $sort)->paginate($number);
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
