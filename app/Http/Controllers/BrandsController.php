<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function add_brand(){
        return view('pages_admin.add_brands');
    }

    public function all_brand(){
        $all_category_product = DB::table('brands')->get();
        $manager_category_product = view('pages_admin.all_brands')->with('all_brand',$all_brand);
        return view('layouts_admin')->with('pages_admin.all_brands',$manager_brand);
    }


    public function save_brand(Request $request){
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_desc'] = $request->brand_desc;
        $data['brand_status'] = $request->brand_status;

        DB::table('brands')->insert($data);
        return redirect()-> route('add-brand')->with('message','Thêm dữ liệu thành công!!');
    }

    public function unactive_brand($brand_id){
        DB::table('brands')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
        return redirect()-> route('all-brand')->with('message','Hiện danh mục thương hiệu');

    }

    public function active_brand($brand_id){
        DB::table('brands')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
        return redirect()-> route('all-brand')->with('message','Ẩn danh mục thương hiệu');
    }

    public function edit_brand($brand_id){
        $edit_category_product = DB::table('brands')->where('brand_id',$brand_id)->get();
        $manager_category_product = view('pages_admin.edit_brand')->with('edit_brand',$edit_brand);
        return view('layouts_admin')->with('pages_admin.edit_brand',$manager_brand);
    }

    public function delete_category_product($brand_id){
        DB::table('brands')->where('brand_id',$brand_id)->delete();
        return redirect()-> route('all-brand')->with('message','Xóa dữ liệu thành công!!');
    }

    public function update_category_product(Request $request, $brand_id){
        $data = array();
        $data['brand_name'] = $request->category_product_name;
        $data['brand_desc'] = $request->category_product_desc;

        DB::table('brands')->where('brand_id',$brand_id)->update($data);
        return redirect()-> route('all-brand')->with('message','Sửa dữ liệu thành công!!');
    }
}
