<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository
{
    public function all()
    {
        return Article::orderBy('published_at', 'desc')->paginate(5);
    }

    public function find($id) : Article
    {
        return Article::find($id);
    }

    public function create(array $data) : Article
    {
        return Article::create($data);
    }
}
