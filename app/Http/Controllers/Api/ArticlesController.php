<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Servers\ArticleServers as Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    protected $article;
    public function __construct()
    {
        $this->article = new Article();
    }

    public function index($id = null){
        return $this->article->get($id);
    }
    public function page( int $page){
        return$this->article->page($page);
    }
}
