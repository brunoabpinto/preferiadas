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
        $paragraphs = str_replace('<br>', '</span></p><p><span class="line">', '<p><span class="line">' . $words . '</span></p>');
        return(view('words', ['words' => $paragraphs]));
    }

    public function theme()
    {
        $dom = file_get_contents('https://www.seventhsanctum.com/generate.php?Genname=writechallenge');
        $theme = DomParser::get_string_between($dom, '<div class="GeneratorResultPrimeBGPara">', '</div>');
        $paragraphs = str_replace('.', '.</span></p><p><span class="line">', '<p><span class="line">' . $theme . '</span></p>');
        return(view('theme', ['theme' => $paragraphs]));
    }
}
