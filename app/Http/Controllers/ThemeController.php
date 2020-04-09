<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\DomParser;

class ThemeController extends Controller
{
    public function words()
    {
        $dom = file_get_contents('http://www.boardgamizer.com/themes');
        $words = DomParser::get_string_between($dom, '</h2>', '</div>');
        return(view('words', ['words' => $words]));
    }

    public function theme()
    {
        $dom = file_get_contents('https://www.seventhsanctum.com/generate.php?Genname=writechallenge');
        $theme = DomParser::get_string_between($dom, '<div class="GeneratorResultPrimeBGPara">', '</div>');
        return(view('theme', ['theme' => str_replace('. ', '.<br><br>', $theme)]));
    }
}
