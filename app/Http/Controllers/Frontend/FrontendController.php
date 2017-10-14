<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\DB;

class FrontendController extends Controller
{
    public function home() {
//        $db = new DB;
        
//        var_dump($db->getCategories());
        
        return view('index');
    }
    
    public function addEvent() {
        return view('add');
    }
}
