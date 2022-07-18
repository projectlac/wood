<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function search() { return view('template.search'); }
   public function searchFullText(Request $request)
   {
       dd($request->search);
   }
}
