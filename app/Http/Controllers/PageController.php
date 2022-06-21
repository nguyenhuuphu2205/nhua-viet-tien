<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThongTinCty;

class PageController extends Controller
{
    //
    function __construct(){
        $thong_tin_cty = ThongTinCty::first();
        view()->share('thongtincty',$thong_tin_cty);
    }
    public function trangchu(){
        return view('pages.trangchu');
    }
}
