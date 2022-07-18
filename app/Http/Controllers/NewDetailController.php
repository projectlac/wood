<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewDetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function index($id)
    {   $data = DB::table('news')->where('newcat_id','like', '%4%' )->limit(5)->orderBy('new_id','DESC')->get();
    	//dd($id);
    	$content = DB::table('news')->where('new_url', $id )->get();
        $tieudiem = DB::table('news')->where('newcat_id','like', '%7%')->limit(5)->orderBy('new_id','DESC')->get();
        return view('template/news-detail', compact('data','content','tieudiem'));
    }

    public function indexDM($id)
    {   $data = DB::table('news')->where('newcat_id','like', '%4%' )->limit(5)->orderBy('new_id','DESC')->get();
        //dd($id);
        $content = DB::table('new_cat')->where('newcat_url', $id )->get();
       
        $list_new = DB::table('news')->where('newcat_id','like', '%'.$content[0]->newcat_id.'%')->orderBy('new_id','DESC')->get();

        
        $tieudiem = DB::table('news')->where('newcat_id','like', '%7%')->limit(5)->orderBy('new_id','DESC')->get();

        return view('template/newcat', compact('data','content','tieudiem','list_new'));
    }

}
