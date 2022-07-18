<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function index()
    {   $data = DB::table('news')->where('newcat_id','like','%4%')->limit(5)->orderBy('new_id','DESC')->get();
        $new_cat = DB::table('new_cat')->where('hide',1 )->get();
        
        foreach ($new_cat as $item) {
            $news1 = DB::table('news')->where('newcat_id','like','%'.$item->newcat_id.'%' )->limit(1)->orderBy('new_id','DESC')->get();
            $news = DB::table('news')->where('newcat_id','like','%'.$item->newcat_id.'%' )->skip(1)->take(4)->orderBy('new_id','DESC')->get();

            $item->new1 = $news1;
            $item->list_new = $news;

            
           
        }
        //dd($new_cat);
        $tieudiem = DB::table('news')->where('newcat_id','like','%7%')->limit(5)->orderBy('new_id','DESC')->get();
        $noibat = DB::table('news')->where('newcat_id','like','%6%')->limit(5)->orderBy('new_id','DESC')->get();
        
        return view('welcome', compact('data','new_cat','tieudiem','noibat'));
    }

    
       public function searchFullText(Request $request)
        {    
            $allRequest  = $request->all();

        
            $search  = $allRequest['search'];
            
            $data_search = DB::table('news')->where('new_name','like','%'.$search.'%')->orderBy('new_id','DESC')->get();
            
            $data = DB::table('news')->where('newcat_id','like', '%4%' )->limit(5)->orderBy('new_id','DESC')->get();
            $tieudiem = DB::table('news')->where('newcat_id','like', '%7%')->limit(5)->orderBy('new_id','DESC')->get();
               
            return view('template.search', compact('data_search','data','tieudiem','search'));
        }
       
        
        
    
   
}
