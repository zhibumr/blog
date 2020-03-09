<?php

namespace App\Http\Controllers\Api;

use App\ArticleModel;
use App\Http\Controllers\Controller;
use App\Servers\ArticleServers;
use http\QueryString;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
       $list = new ArticleServers();
       return $list->select('title',23);
//       return $list->get(1);

    }
}
