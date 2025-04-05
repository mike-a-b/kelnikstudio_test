<?php

namespace App\Services;

use App\Repositories\ArticleRepository;

class ArticleService
{
    protected ArticleRepository $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function createArticle(array $data)
    {
        return $this->articleRepository->create($data);
    }

    public function getArticleById(int $id)
    {
        return $this->articleRepository->find($id);
    }

    public function getAllArticles()
    {
        return $this->articleRepository->all();
    }
}
