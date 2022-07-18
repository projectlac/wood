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
                    
                      
                        @if ( Session::has('success') )
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif

                        
                        @if ( Session::has('error') )
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>{{ Session::get('error') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        @endif

                        <p><a class="btn btn-primary" href="{{ url('admin/library') }}">Về danh sách</a></p>
                        <div class="col-xs-4 col-xs-offset-4">
                            <center><h4>Thêm ảnh</h4></center>
                            <form action="{{ url('/admin/library/create') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label for="tenhocsinh">Tên ảnh</label>
                                    <input type="text"  class="form-control" id="title1" name="name"  placeholder="Tên ảnh" required />
                                </div>
                                <div class="form-group">

                                    <label for="tenhocsinh">Ảnh đại diện</label>
                                    <input type="file" class="form-control" name="image" onchange="loadFile(event)" required />
                                    <img id="output" width="300" style="margin: 15px 0" />
                                </div>

                                <script>
                                  var loadFile = function(event) {
                                    var reader = new FileReader();
                                    reader.onload = function(){
                                      var output = document.getElementById('output');
                                      output.src = reader.result;
                                    };
                                    reader.readAsDataURL(event.target.files[0]);
                                  };
                                </script>

                               
                               <div class="form-group">
                                    <label for="vehicle1">Sắp xếp</label><br>
                                    <input type="number" name="sort"  class="form-control" placeholder="Thứ tự hiển thị" required>
                                    

                                </div>
                               
                               
                                <div class="form-group">
                                    <label for="vehicle1">Đường dẫn</label><br>
                                    <input type="text" name="outlink"  class="form-control" placeholder="Đường dẫn (Nếu có)" value="#">
                                    

                                </div>


                                <center><button type="submit" class="btn btn-primary">Thêm</button></center>
                            </form>
                        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            
            <!-- End of Main Content -->
{{-- 
<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> --}}
            
            <!-- Footer -->
            @include('admin.footer')