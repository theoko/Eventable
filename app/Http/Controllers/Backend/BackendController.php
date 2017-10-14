<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Event;

class BackendController extends Controller
{
    public function submitEvent(Request $request) {
        $request->validate([
            'ename' => 'required|max:255',
            'eorg' => 'required|max:255',
            'eaddress' => 'required|max:255',
            'edate' => 'required|date',
            'edesc' => 'required',
        ]);
        
        if($request->input('submit') == 'Add Event') {
            $event = new Event;
            
            $event->name = $request->input('ename');
            $event->orgname = $request->input('eorg');
            $event->address = $request->input('eaddress');
            $event->date = str_replace('/', '-', 
                                      $request->input('edate'));
            $event->description = $request->input('edesc');
            
            $event_categories = [];
            foreach($request->input() as $x => $value) {
                if(stristr($x, 'cat_')) {
                    $event_categories[] = $x;
                }
            }
            $event_categories = serialize($event_categories);
            
            $event->type = $event_categories;
            
            $event->save();
            
            return redirect()->route('add.event')->with('status', 'Event added!');
        } else {
            return redirect()->route('add.event');
        }
    }
}
