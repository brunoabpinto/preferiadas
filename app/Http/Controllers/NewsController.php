<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class NewsController extends Controller
{
    public function index() {
        $pageNumber = rand(0,20);
        $articleNumber = rand(0,19);
        $page = file_get_contents('https://caras.sapo.pt/wp-admin/admin-ajax.php?post_type=post&cat=7&chain=641759&paged=' . $pageNumber . '&action=category_results');
        $dom = new Dom;
        $dom->loadStr($page);
        $articleDom = $dom->find('.dip-article-block')[$articleNumber];
        $article = [
            'link' =>  $articleDom->find('a')[0]->getAttribute('href'),
            'image' => $articleDom->find('img')[0]->getAttribute('src'),
            'title' => $articleDom->find('h4')[0]->find('span')->text,
            'lead' => $articleDom->find('.article-block-excerpt')[0]->text
        ];
        return(view('news', ['article' => $article]));
    }
}
