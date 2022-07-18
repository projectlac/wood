<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class LibraryController extends Controller
{
    public function index()
    {
        $data = DB::table('library')->get();
        return view('admin/library/index', compact("data"));
    }

    public function create()
    {	
        return view('admin/library/create');
    }


    public function store(Request $request)
    {   

       //Them moi hoc sinh
        //Set timezone
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        
        
        $allRequest  = $request->all();

       	//dd($allRequest);
        $name  = $allRequest['name'];
        $sort  = $allRequest['sort'];
        $outlink  = $allRequest['outlink'];
        $new_img  = $allRequest['image'];
        
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
            'name'  => $name,
            'sort'  => $sort,
            'img'  => $fileName,
            'outlink'  => $outlink,
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );
        
        //Insert vào bảng tbl_hocsinh
        $insertData = DB::table('library')->insert($dataInsertToDatabase);
        
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới thành công!');
        }else {                        
            Session::flash('error', 'Thêm thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/library/create');
    }

    public function edit($id)
	{
		
		$data = DB::table('library')->where('id',$id)->get();
		
		
		return view('admin/library/edit', compact("data"));
	}

    public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");  

            

        $allRequest = $request->all();
        //dd($allRequest);
        $id =  $allRequest['id'];
        $name  = $allRequest['name'];
        $sort  = $allRequest['sort'];
        $outlink  = $allRequest['outlink'];
       
        if(count($allRequest) > 5)
        {
            $new_img  = $allRequest['image'];
                if ($new_img->isValid()) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $new_img->getClientOriginalExtension(); // Lấy . của file
                
                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                     
                // Thư mục upload
                $uploadPath = public_path('img/new'); // Thư mục upload
                 
                // Bắt đầu chuyển file vào thư mục
                $new_img->move($uploadPath, $fileName);
                
                $updateData = DB::table('library')->where('id', $id )->update([
                'name' => $name,
                'sort' => $sort,
                'outlink' => $outlink,
                'img' => $fileName,
                

                'updated_at' => date('Y-m-d H:i:s')
                ]);

                
            }
        }

        
        
        else
        {
            $updateData = DB::table('library')->where('id', $id )->update([
                'name' => $name,
                'sort' => $sort,
                'outlink' => $outlink,
                
                

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
        return redirect('admin/library/');
    }

    public function destroy($id)
    {
        $deleteData = DB::table('library')->where('id', '=', $id)->delete();
    
        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa tin thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('admin/library/');
    }

}
