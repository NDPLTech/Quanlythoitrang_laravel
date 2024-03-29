<div class="main-content">
    @if (session('message'))
        <div class="alert alert-error icons-alert" role="alert">
            <li style="display: block; color:red; margin-top: 2rem;">{{ session('message') }}</li>
        </div>
    @endif

    <div class="table-agile-info">
        <div class="panel panel-default">
            <section class="section">
                <h1 class="section-header">
                    <div>Liệt kê danh mục sản phẩm</div>
                </h1>
            </section>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <?php
                // $message = Session::get('message');
                // if ($message) {
                //     echo '<span class="text-alert">' . $message . '</span>';
                //     Session::put('message', null);
                // }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên danh mục</th>
                            <th>Mô tả danh mục</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($all_category_product as $key => $cate_pro) --}}
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>fadcadsc</td>
                            <td>cadcdscsd</td>
                            {{-- <td>{{ $cate_pro->category_name }}</td>
                            <td>{{ $cate_pro->slug_category_product }}</td> --}}

                            <td>
                                <a href="" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa ion-android-create text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href=""
                                    class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
                <!-----import data---->
                <form action="{{ url('import-csv') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="file" name="file" accept=".xlsx"><br>

                    <input type="submit" value="Import file Excel" name="import_csv" class="btn btn-warning">
                </form>

                <!-----export data---->
                <form action="{{ url('export-csv') }}" method="POST">
                    @csrf
                    <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">
                </form>


            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            {{-- {!! $all_category_product->links() !!} --}}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
