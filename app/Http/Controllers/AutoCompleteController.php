<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Question;

class AutoCompleteController extends Controller
{
 
    public function search(Request $request)
    {
          $search = $request->get('term');
      
          $result = Question::where('question', 'LIKE', '%'. $search. '%')->get();
 
          return response()->json($result);
            
    } 
}
