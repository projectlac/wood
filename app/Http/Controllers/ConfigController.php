<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class ConfigController extends Controller
{
    public function edit()
	{
		
		$data = DB::table('config')->where('id',1)->get();
		// $datacat = DB::table('new_cat')->get();
		
		return view('admin/config/edit', compact("data"));
	}

	public function update(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");  

        

        $allRequest = $request->all();
        //dd(count($allRequest));
        $id =  '1';
        $gioithieu  = $allRequest['gioithieu'];
        $phone  = $allRequest['phone'];
        $diachi  = $allRequest['diachi'];
        $yt = $allRequest['yt'];
        $fb = $allRequest['fb'];
        $zl  = $allRequest['zl'];
        $email = $allRequest['email'];
        $link1 = $allRequest['link1'];
        $link2  = $allRequest['link2'];
        $link3 = $allRequest['link3'];
        

        
        if(count($allRequest) > 11)
        {
            $banner  = $allRequest['banner'];
                if ($banner->isValid()) {
                // File này có thực, bắt đầu đổi tên và move
                $fileExtension = $banner->getClientOriginalExtension(); // Lấy . của file
                
                // Filename cực shock để khỏi bị trùng
                $fileName = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension;
                     
                // Thư mục upload
                $uploadPath = public_path('img/new'); // Thư mục upload
                 
                // Bắt đầu chuyển file vào thư mục
                $banner->move($uploadPath, $fileName);
                
                $updateData = DB::table('config')->where('id',1 )->update([
                'gioithieu' => $gioithieu,
                'diachi' => $diachi,
                'phone' => $phone,
                'yt' => $yt,
                'zl' => $zl,
                'fb' => $fb,
                'email' => $email,
                'link1' => $link1,
                'link2' => $link2,
                'link3' => $link3,
                'banner' => $fileName,

                'updated_at' => date('Y-m-d H:i:s')
                ]);

                
            }
        }

        
        
        else
        {
            $updateData = DB::table('config')->where('id',1 )->update([
                'gioithieu' => $gioithieu,
                'diachi' => $diachi,
                'phone' => $phone,
                'yt' => $yt,
                'zl' => $zl,
                'fb' => $fb,
                'email' => $email,
                'link1' => $link1,
                'link2' => $link2,
                'link3' => $link3,
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
        return redirect('admin/config/edit');
    }
}
