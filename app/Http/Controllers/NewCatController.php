<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class NewCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('new_cat')->get();
        return view('admin.danhmuctintuc', compact("data"));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createnewcat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        //Lấy giá trị học sinh đã nhập
        $allRequest  = $request->all();

       
        $newcat_name  = $allRequest['newcat_name'];
        $newcat_des  = $allRequest['newcat_des'];
        
        $newcat_url = $allRequest['newcat_url'];
        $newcat_img  = $allRequest['newcat_img'];
        // dd($newcat_img->isValid());
        if ($newcat_img->isValid()) {
            // File này có thực, bắt đầu đổi tên và move
            $fileExtension = $newcat_img->getClientOriginalExtension(); // Lấy . của file
            
            // Filename cực shock để khỏi bị trùng
            $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                 
            // Thư mục upload
            $uploadPath = public_path('img/newcat'); // Thư mục upload
             
            // Bắt đầu chuyển file vào thư mục
            $newcat_img->move($uploadPath, $fileName);
            
            // Thành công, show thành công
            
        }
        // dd($fileName);

        //$hide = $allRequest['hide'];
        
     

        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'newcat_name'  => $newcat_name,
            'newcat_url'  => $newcat_url,
            'newcat_img'  => $fileName,
            'hide'  => $hide,
            'newcat_des'  => $newcat_des,
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        
        //Insert vào bảng tbl_hocsinh
        $insertData = DB::table('new_cat')->insert($dataInsertToDatabase);
        
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới thành công!');
        }else {                        
            Session::flash('error', 'Thêm thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/createnewcat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getData = DB::table('new_cat')->select('newcat_id','newcat_name','newcat_url','newcat_img','hide','newcat_des')->where('newcat_id',$id)->get();
    
        //Gọi đến file edit.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên getHocSinhById = $getData
        return view('admin.editnewcat')->with('data',$getData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");  

            if(isset($_POST['hide'])){
              $hide ='1';
            }  else {
              $hide ='0';
            }

        $request = $request->all();
        // dd();
        $newcat_id  = $request['id'];
        $newcat_name  = $request['newcat_name'];
        $newcat_des  = $request['newcat_des'];
        
        $newcat_url = $request['newcat_url'];
        if(count($request) > 6)
        {
            $newcat_img  = $request['newcat_img'];
                if ($newcat_img->isValid()) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $newcat_img->getClientOriginalExtension(); // Lấy . của file
                
                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                     
                // Thư mục upload
                $uploadPath = public_path('img/newcat'); // Thư mục upload
                 
                // Bắt đầu chuyển file vào thư mục
                $newcat_img->move($uploadPath, $fileName);
                
                $updateData = DB::table('new_cat')->where('newcat_id', $newcat_id )->update([
                'newcat_name' => $newcat_name,
                'newcat_url' => $newcat_url,
                'hide' => $hide,
                'newcat_des' => $newcat_des,
                'newcat_img' => $fileName,

                'updated_at' => date('Y-m-d H:i:s')
                ]);

                
            }
        }

        
        
        else
        {
            $updateData = DB::table('new_cat')->where('newcat_id', $newcat_id)->update([
            'newcat_name' => $newcat_name,
            'newcat_url' => $newcat_url,
            'hide' => $hide,
            'newcat_des' => $newcat_des,
            'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        

        // dd($updateData);
        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa học sinh thành công!');
        }else {                        
            Session::flash('error', 'Sửa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/danhmuctintuc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = DB::table('new_cat')->where('newcat_id', '=', $id)->delete();
    
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa danh mục thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/danhmuctintuc');
    }
}
