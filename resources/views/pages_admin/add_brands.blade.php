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
                        <div>Thêm Thương Hiệu Sản Phẩm</div>
                    </h1>
                    <div class="panel-body">

                        <div class="position-center mt-1">
                            <form action="{{route('save-brand')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu</label>
                                    <input type="text" class="form-control" onkeyup="ChangeToSlug();"
                                        name="brand_name" id="slug" placeholder="Tên thương hiệu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="brand_desc"
                                        id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="brand_status" class="form-control input-sm m-bot15">
                                           <option value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>

                                    </select>
                                </div>
                                <button type="submit" name="add_brand" class="btn btn-info">Thêm thương hiệu</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
