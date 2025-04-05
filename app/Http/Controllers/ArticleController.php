<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    protected ArticleService $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = $this->articleService->getAllArticles();
        return view('index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();
        $validated['published_at'] = date('Y-m-d H:i:s');
        $this->articleService->createArticle($validated);
        return back()->with('success', 'Статья успешно добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = $this->articleService->getArticleById($id);
        return view('show', compact('article'));
    }
}
