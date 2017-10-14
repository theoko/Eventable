<?php

namespace App\Events;

use App\Event;

class DB {
    
    public function getCategories() {
        $events = Event::all();
        $categories = [];
//        $cat_final = [];
        
        foreach($events as $e) {
            if(!empty($e)) $categories[] = unserialize($e->type);
        }
        
        return $categories;
        
    }
    
    public function getLocations() {
        return Event::all();
    }
    
}