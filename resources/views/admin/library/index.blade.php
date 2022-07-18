@include('admin.header')
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
                    <p><a class="btn btn-primary" href="{{ url('admin/library/create')}}">Thêm ảnh</a></p>
                                     {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> --}}
                    <table id="new-cat">
                          <thead>
                              <tr>
                                <th style="width: 10%">STT</th>
                                <th>Tên ảnh</th>
                                <th>Sắp xếp</th>
                                <th>Thao tác</th>
                              </tr>
                          </thead>
                        <tbody>
                            <?php $d = 0;?>
                            @foreach ($data as $item)
                                
                            <tr>
                                <td>{{ ++$d }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->sort }}</td>
                                <td> <a href="library/{{ $item->id }}/edit">Sửa</a> | <a href="library/{{ $item->id }}/delete">Xóa</a></td>
                            </tr>
                            @endforeach
                            
                             
                        </tbody>
                    </table>
                    
                      

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
{{-- 
<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> --}}
            
            <!-- Footer -->
            @include('admin.footer')