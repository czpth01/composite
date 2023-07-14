<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class HibajegyListaContoller extends Controller
{
    public function index(){
        $hibajegyek = DB::select('SELECT * FROM hibajegyek');
        return view('hibajegy_lista',['hibajegyek'=>$hibajegyek]);
    }
}