<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class NewController extends Controller
{
    public function index()
    {
        $data = DB::table('news')->get();
        return view('admin/news/index', compact("data"));
    }

    public function create()
    {	$datacat = DB::table('new_cat')->get();
        return view('admin/news/create',compact("datacat"));
    }


    public function store(Request $request)
    {   

       //Them moi hoc sinh
        //Set timezone
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        if(isset($_POST['hide'])){
              $hide ='1';
            }  else {
              $hide ='0';
            }
        
        $allRequest  = $request->all();
        $arr  = $allRequest['newcat_id'];
        $newcat_id = json_encode($arr);
       	
        $new_name  = $allRequest['new_name'];
        $new_des  = $allRequest['new_des'];
        
        $new_content = $allRequest['new_content'];
        $new_url = $allRequest['new_url'];
        $new_img  = $allRequest['new_img'];
        
        if ($new_img->isValid()) {
           
            $fileExtension = $new_img->getClientOriginalExtension(); // Lấy . của file
            
           
            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                 
            
            $uploadPath = public_path('img/new'); // Thư mục upload
             
           
            $new_img->move($uploadPath, $fileName);
            
            // Thành công, show thành công
            
        }
        // dd($fileName);

        //$hide = $allRequest['hide'];
        
     

        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'new_name'  => $new_name,
            'new_url'  => $new_url,
            'new_img'  => $fileName,
            'hide'  => $hide,
            'new_des'  => $new_des,
            'new_content'  => $new_content,
            'newcat_id'  => $newcat_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        
        //Insert vào bảng tbl_hocsinh
        $insertData = DB::table('news')->insert($dataInsertToDatabase);
        
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới thành công!');
        }else {                        
            Session::flash('error', 'Thêm thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/news/create');
    }

    public function edit($id)
	{
		
		$data = DB::table('news')->where('new_id',$id)->get();
		$datacat = DB::table('new_cat')->get();
        // dd($data[0]->newcat_id);
		$arr = $data[0]->newcat_id;
        $arr1[] = json_decode($arr,true);

        // dd($arr1);
		return view('admin/news/edit', compact("data","datacat","arr1"));
	}

    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");  

            if(isset($_POST['hide'])){
              $hide ='1';
            }  else {
              $hide ='0';
            }

        $allRequest = $request->all();
        //dd($allRequest);
        $new_id =  $allRequest['id'];
        $new_name  = $allRequest['new_name'];
        $new_des  = $allRequest['new_des'];
        $arr  = $allRequest['newcat_id'];
        $newcat_id = json_encode($arr);
        $new_content = $allRequest['new_content'];
        $new_url = $allRequest['new_url'];
        
        if(count($allRequest) > 8)
        {
            $new_img  = $allRequest['new_img'];
                if ($new_img->isValid()) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $new_img->getClientOriginalExtension(); // Lấy . của file
                
                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                     
                // Thư mục upload
                $uploadPath = public_path('img/new'); // Thư mục upload
                 
                // Bắt đầu chuyển file vào thư mục
                $new_img->move($uploadPath, $fileName);
                
                $updateData = DB::table('news')->where('new_id', $new_id )->update([
                'new_name' => $new_name,
                'new_url' => $new_url,
                'hide' => $hide,
                'new_des' => $new_des,
                'new_content' => $new_content,
                'newcat_id' => $newcat_id,
                'new_img' => $fileName,

                'updated_at' => date('Y-m-d H:i:s')
                ]);

                
            }
        }

        
        
        else
        {
            $updateData = DB::table('news')->where('new_id', $new_id)->update([
            'new_name' => $new_name,
            'new_url' => $new_url,
            'hide' => $hide,
            'new_des' => $new_des,
            'new_content' => $new_content,
            'newcat_id' => $newcat_id,
            'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        

        // dd($updateData);
        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa thành công!');
        }else {                        
            Session::flash('error', 'Sửa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/news/');
    }

    public function destroy($id)
    {
        $deleteData = DB::table('news')->where('new_id', '=', $id)->delete();
    
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa tin thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/news/');
    }

}
