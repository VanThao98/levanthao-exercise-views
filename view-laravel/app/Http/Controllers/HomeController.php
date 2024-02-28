<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index(){
        $title = 'học lập trình web cơ bản';
        $content = 'học lập trình cùng LV Thảo';

        // CÁCH 1: Tạo ARRAY và dùng nó
        // $dataView = [
        //     'titleData' => $title,
        //     'contentData' => $content
        // ];

        // return view('home', $dataView); //load view home.php

        // CÁCH 2: DÙNG COMPACT
        //* [
            // 'title' => $title,
        //     'content' => $content
        //*]
        return view('home', compact('title', 'content'));

        //CÁCH 3: DÙNG with()
        // return view('home') -> with (['title' => $title, 'content' => $content]);
        
        //CÁCH RETURN dùng view make : view phải viết hoa View
        // return View::make('home' , compact('title', 'content'));

        //Dùng render để lấy html thô - giống dạng PDF hoặc xử lý xuất excel
        // $contentView = View('home');
        // $contentView = $contentView -> render();
        // // có thể viết tắt thành như sau: 
        // // $contentView = View('home') -> render();
        // dd($contentView);
    }

    public function getProductDetail($id){
        // return $id;
        // return view('client/products/detail', compact('id'));
        
        // CHÚ  Ý
        //theo tài liệu laravel thì nên dùng  dấu . thay vì /
        return view('client.products.detail', compact('id'));

    }
}
