@extends('layouts_admin')

@section('content')
    <div class="main-content">
        @if (session('message'))
            <div class="alert alert-error icons-alert" role="alert">
                <li style="display: block; color:red; margin-top: 2rem;">{{ session('message') }}</li>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <section class="section">
                    <h1 class="section-header">
                        <div>Sửa danh mục sản phẩm</div>
                    </h1>
                    <div class="panel-body">
                        @foreach ($edit_category_product as $edit_value)
                        <div class="position-center mt-1">
                            <form action="{{ URL::to('/update-category-product/' . $edit_value->product_category_id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" onkeyup="ChangeToSlug();"
                                       value="{{$edit_value->category_name}}" name="category_product_name" id="slug" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc"
                                    id="exampleInputPassword1" >{{$edit_value->category_desc}}</textarea>
                                </div>

                                <button type="submit" name="edit_category_product" class="btn btn-info">Sửa danh
                                    mục</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
