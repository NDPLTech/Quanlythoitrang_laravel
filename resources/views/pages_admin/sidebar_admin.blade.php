{{-- Sidebar --}}
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand"> <a href="index.html">ADMIN</a> </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture"> <img alt="image"
                    src="{{ asset('public/admin/img/avatar/avatar_admin.jpg') }}"> </div>
            <div class="sidebar-user-details">
                <div class="user-name">PhucLoc</div>
                <div class="user-role"> Administrator </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"> <a href="{{ route('admin') }}"><i
                        class="ion ion-speedometer"></i><span>Dashboard</span></a> </li>

            <li> <a href="#" class="has-dropdown"><i class="ion ion-ios-albums-outline"></i><span>Danh mục sản phẩm</span></a>
                <ul class="menu-dropdown">
                    <li><a href="{{route('add-category-product')}}"><i class="ion ion-ios-circle-outline"></i> Thêm danh mục</a></li>
                    <li><a href="{{route('all-category-product')}}"><i class="ion ion-ios-circle-outline"></i> Liệt kê danh mục</a></li>
                </ul>
            </li>


            <li> <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>Thương hiệu</span></a>
                <ul class="menu-dropdown">
                    <li><a href="{{route('add-brand')}}"><i class="ion ion-ios-circle-outline"></i> Thêm thương hiệu</a></li>
                    <li><a href="{{route('all-brand')}}"><i class="ion ion-ios-circle-outline"></i> Liệt kê thương hiệu</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
