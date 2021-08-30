<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function store(Request $request)
    {
        $parts = explode(',', $request->input('text')); // split by comma
        $used = []; // array to count the number of occurrences
        $result = []; // array to take the "new" elements

        foreach($parts as $part) {
              if(isset($used[$part])) { // if there is an entry in the counter array already,
                                        // increment it by one,
                $used[$part]++;
              }
              else {                    // else initialize with 0
                $used[$part] = 0;
              }
              // put part into new array, append -(counter) if counter > 0
              $result[] = $part . ($used[$part] ? '-'.$used[$part] : '');
        }
        return view('text',[
                'result' => implode(',', $result)
        ]);
    }
}
