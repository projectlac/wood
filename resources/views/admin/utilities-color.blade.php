@include('admin.header');

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                     @include('admin.nav-bar');
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Cấu hình menu</h1>
                    <p class="mb-4">Đây là nơi cài đặt thanh menu</p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg-12">
                            <p><a class="btn btn-primary" href="{{ url('admin/menu/create')}}">Thêm menu</a></p>
                            <!-- Custom Text Color Utilities -->
                            <table class="table">
                              <thead>
                                <tr>
                                 
                                  <th scope="col">Tên menu</th>
                                  <th scope="col" style="width: 15%">Thao tác</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $item)
                                  <tr>
                                 
                                    <td> {{ $item->menu_name }}</td>
                                    <td> <a href="menu/{{ $item->id }}/edit">Sửa</a> | <a href="menu/{{ $item->id }}/delete">Xóa</a> </td>
                                  
                                  </tr>
                                @endforeach
                                
                                
                              </tbody>
                            </table>

                        </div>

                        <!-- Second Column -->
                        

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          @include('admin.footer');