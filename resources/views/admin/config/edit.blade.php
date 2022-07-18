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

                        
                        <div class="col-xs-4 col-xs-offset-4">
                            <center><h4>Cấu hình</h4></center>
                            <form action="{{ url('/admin/config/update') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label for="tenhocsinh">Giới thiệu</label>
                                    <input type="text" class="form-control" id="title1" name="gioithieu" placeholder="Giới thiệu" value="{{ $data[0]->gioithieu }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Số điện thoại</label>
                                    <input type="text" class="form-control" id="title1" name="phone" placeholder="Số điện thoại" value="{{ $data[0]->phone }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Địa chỉ</label>
                                    <input type="text" class="form-control" id="title1" name="diachi" placeholder="Địa chỉ" value="{{ $data[0]->diachi }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Link Facebook</label>
                                    <input type="text" class="form-control" id="title1" name="fb" placeholder="Link Facebook" value="{{ $data[0]->fb }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Link Youtube</label>
                                    <input type="text" class="form-control" id="title1" name="yt" placeholder="Link Youtube" value="{{ $data[0]->yt }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Link Zalo</label>
                                    <input type="text" class="form-control" id="title1" name="zl" placeholder="Link Zalo" value="{{ $data[0]->zl }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Email</label>
                                    <input type="text" class="form-control" id="title1" name="email" placeholder="Email" value="{{ $data[0]->email }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Link1</label>
                                    <input type="text" class="form-control" id="title1" name="link1" placeholder="Link1" value="{{ $data[0]->link1 }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Link2</label>
                                    <input type="text" class="form-control" id="title1" name="link2" placeholder="Link2" value="{{ $data[0]->link2 }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Link3</label>
                                    <input type="text" class="form-control" id="title1" name="link3" placeholder="Link3" value="{{ $data[0]->link3 }}" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Banner</label>
                                    <input type="file" class="form-control" id="title1" name="banner" />
                                    <img id="output" width="300" src="{{ asset('img/new/') }}/{{ $data[0]->banner }}" style="margin: 15px 0" />
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
                            
                               

                                <br>
                                <center><button type="submit" class="btn btn-primary">Sửa</button></center>
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