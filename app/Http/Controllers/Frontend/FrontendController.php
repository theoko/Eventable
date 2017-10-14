<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\DB;

class FrontendController extends Controller
{
    public function __construct() {
        $this->db = new DB;
    }
    
    public function home() {
        
//        var_dump($db->getCategories());
        
        $locations = $this->db->getLocations();
        
        return view('index', ['locations' => $locations]);
    }
    
    public function addEvent() {
        return view('add');
    }
}
