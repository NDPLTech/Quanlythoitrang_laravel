@extends('layouts_admin')

@section('content')
    <div class="main-content">
        @if (session('message'))
            <div class="alert alert-error icons-alert" role="alert">
                <li style="display: block; color:red; margin-top: 2rem;">{{ session('message') }}</li>
            </div>
        @endif
        <section class="section">
            <h1 class="section-header">
                <div>Liệt kê danh mục sản phẩm</div>
            </h1>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên danh mục</th>
                                            <th>Mô tả danh mục</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        @php
                                            $stt = 1;
                                        @endphp
                                        @foreach ($all_category_product as $cate_pro)
                                            <tr>
                                                <td> <?php echo $stt++; ?></td>
                                                <td>{{ $cate_pro->category_name }}</td>
                                                <td>{{ $cate_pro->category_desc }}</td>
                                                <td>
                                                    <?php
                                                    if($cate_pro->category_status == 0){
                                                ?>
                                                    <a
                                                        href="{{ URL::to('/unactive-category-product/' . $cate_pro->product_category_id) }}"><span
                                                            class="badge badge-danger">No Active</span></a>
                                                    <?php
                                                    }else {
                                                ?>
                                                    <a
                                                        href="{{ URL::to('/active-category-product/'.$cate_pro->product_category_id) }}"><span
                                                            class="badge badge-success">Active</span></a>
                                                    <?php
                                                    }
                                                ?>
                                                    <a href=""><span></span></a>
                                                </td>
                                                <td>
                                                    <a href="{{ URL::to('/edit-category-product/'.$cate_pro->product_category_id)}}" class="active styling-edit"
                                                        style="padding-right: 13px; font-size:20px" ui-toggle-class="">
                                                        <i class="fa ion-android-create text-success text-active"></i></a>
                                                    <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')"
                                                        href="{{ URL::to('/delete-category-product/'.$cate_pro->product_category_id)}}" class="active styling-edit" style="font-size:20px" ui-toggle-class="">
                                                        <i class="fa fa-times text-danger text"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"> <a class="page-link" href="#"
                                                tabindex="-1"><i class="ion ion-chevron-left"></i></a> </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"> <a class="page-link" href="#"><i
                                                    class="ion ion-chevron-right"></i></a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
