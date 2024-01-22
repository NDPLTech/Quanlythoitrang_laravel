<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
// session_start();

class CategoryProductController extends Controller
{
    public function add_category_product(){
        return view('pages_admin.add_category_product');
    }

    public function all_category_product(){
        $all_category_product = DB::table('product_category')->get();
        $manager_category_product = view('pages_admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('layouts_admin')->with('pages_admin.all_category_product',$manager_category_product);
    }

    public function save_category_product(Request $request){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('product_category')->insert($data);
        return redirect()-> route('add-category-product')->with('message','Thêm dữ liệu thành công!!');
    }


    public function unactive_category_product($category_product_id){
        DB::table('product_category')->where('product_category_id',$category_product_id)->update(['category_status'=>1]);
        return redirect()-> route('all-category-product')->with('message','Hiện danh mục sản phẩm');

    }

    public function active_category_product($category_product_id){
        DB::table('product_category')->where('product_category_id',$category_product_id)->update(['category_status'=>0]);
        return redirect()-> route('all-category-product')->with('message','Ẩn danh mục sản phẩm');
    }

    public function edit_category_product($category_product_id){
        $edit_category_product = DB::table('product_category')->where('product_category_id',$category_product_id)->get();
        $manager_category_product = view('pages_admin.edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('layouts_admin')->with('pages_admin.edit_category_product',$manager_category_product);
    }

    public function delete_category_product($category_product_id){
        DB::table('product_category')->where('product_category_id',$category_product_id)->delete();
        return redirect()-> route('all-category-product')->with('message','Xóa dữ liệu thành công!!');
    }

    public function update_category_product(Request $request, $category_product_id){
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;

        DB::table('product_category')->where('product_category_id',$category_product_id)->update($data);
        return redirect()-> route('all-category-product')->with('message','Sửa dữ liệu thành công!!');
    }
}
