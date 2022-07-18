<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class MenuController extends Controller
{
    public function index()
    {
        $data = DB::table('menu')->orderBy('menu_sort','asc')->get();
        return view('admin/utilities-color', compact("data"));
    }

    public function create()
    {	$datacat = DB::table('new_cat')->get();
        $allnew = DB::table('news')->get();
        return view('admin/menu/create',compact("datacat","allnew"));
    }


    public function store(Request $request)
    {   

       //Them moi hoc sinh
        //Set timezone
        date_default_timezone_set("Asia/Ho_Chi_Minh");

        
        
        $allRequest  = $request->all();

       	

        $menu_name  = $allRequest['menu_name'];
        $menu_sort  = $allRequest['menu_sort'];
        $newcat_id  = $allRequest['newcat_id'];
        $new_id = $allRequest['new_id'];
        $menu_url = $allRequest['menu_url'];
        $menu_parent = $allRequest['controls'];
        //dd($allRequest);

        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'menu_name'  => $menu_name,
            'menu_url'  => $menu_url,
            'menu_sort'  => $menu_sort,
            'menu_parent' => $menu_parent,
            'new_id'  => $new_id,
            'newcat_id'  => $newcat_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        
        //Insert vào bảng tbl_hocsinh
        $insertData = DB::table('menu')->insert($dataInsertToDatabase);
        
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới thành công!');
        }else {                        
            Session::flash('error', 'Thêm thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/menu/create');
    }

    public function edit($id)
	{
		
		$data = DB::table('menu')->where('id',$id)->get();
		$datacat = DB::table('new_cat')->get();
        $allnew = DB::table('news')->get();
		
		return view('admin/menu/edit', compact("data","datacat","allnew"));
	}

    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");  


        $allRequest = $request->all();
        //dd($allRequest);
        $menu_name  = $allRequest['menu_name'];
        $menu_sort  = $allRequest['menu_sort'];
        $newcat_id  = $allRequest['newcat_id'];
        $new_id = $allRequest['new_id'];
        $menu_url = $allRequest['menu_url'];
        $menu_parent = $allRequest['controls'];
        $id = $allRequest['id'];
        
        $updateData = DB::table('menu')->where('id', $id)->update([
            'menu_name'  => $menu_name,
            'menu_url'  => $menu_url,
            'menu_sort'  => $menu_sort,
            'menu_parent' => $menu_parent,
            'new_id'  => $new_id,
            'newcat_id'  => $newcat_id,
            'updated_at' => date('Y-m-d H:i:s')
            ]);
        
        

        // dd($updateData);
        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa thành công!');
        }else {                        
            Session::flash('error', 'Sửa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/utilities-color');
    }

    public function destroy($id)
    {
        $deleteData = DB::table('menu')->where('id', '=', $id)->delete();
    
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa tin thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/utilities-color');
    }

}
