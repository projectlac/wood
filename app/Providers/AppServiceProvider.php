<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = DB::table('menu')->orderBy('menu_sort', 'asc')->get();
        //dd($menu);
        foreach ($menu as $key) {
            if ($key->menu_parent == '1') {
                $key->link = asset('/');
                $key->url = '/';
            }
            if ($key->menu_parent == '2') {
                $damu = DB::table('new_cat')->where('newcat_id', $key->newcat_id)->get();
                //dd($damu[0]->newcat_url);
                $key->link = asset('/danh-muc') . '/' . $damu[0]->newcat_url;
                $key->url = '/danh-muc/' . $damu[0]->newcat_url;
            }
            if ($key->menu_parent == '3') {
                $bv = DB::table('news')->where('new_id', $key->new_id)->get();
                $key->link = asset('/chi-tiet') . '/' . $bv[0]->new_url;
                $key->url = '/chi-tiet/' . $bv[0]->new_url;
            }
            if ($key->menu_parent == '4') {
                $key->link = $key->menu_url;
                $key->url = $key->menu_url;
            }
        }

        $config = DB::table('config')->get();
        $config = $config[0];

        $new5cs = DB::table('news')->where('newcat_id', 'like', '%5%')->limit(5)->orderBy('new_id', 'desc')->get();
        // $new5cs = $new5cs[0];
        // dd($new5cs);

        $library_left = DB::table('library')->orderBy('sort', 'asc')->get();
        // $library_left = $library_left[0];

        View::share('menu', compact('menu'));
        View::share('config1', compact('config'));
        View::share('new5cs', compact('new5cs'));
        View::share('library_left', compact('library_left'));
    }
}
