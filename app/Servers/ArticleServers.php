<?php


namespace App\Servers;
use App\ArticleModel as Article;

class ArticleServers
{
    public $data;
//    public $article;
//    public function __construct($data = null)
//    {
//        $this->data = $data;
//        $this->article = new ArticleModel();
//    }
    public function all(){
        return Article::all();
    }
    public  function get( int $key){
        return Article::find($key);
    }
    public function select( $key,$val){
        return Article::where($key,$val)->get();
    }
    public function page(int $page){
        return Article::skip($page)->take(2)->get();
    }
}
