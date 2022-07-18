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

                        <p><a class="btn btn-primary" href="{{ url('admin/utilities-color') }}">Về danh sách</a></p>
                        <div class="col-xs-4 col-xs-offset-4">
                            <center><h4>Thêm Menu</h4></center>
                            <form action="{{ url('/admin/menu/create') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label for="tenhocsinh">Tên Menu</label>
                                    <input type="text" class="form-control" id="title1" name="menu_name" placeholder="Tên menu" required />
                                </div>
                                <div class="form-group">
                                    <label for="tenhocsinh">Thứ tự</label>
                                    <input type="number" class="form-control" id="title1" name="menu_sort" value="0" />
                                </div>
                                <div class="form-group">
                                    <label for="sodienthoai">Điều hướng</label>

                                    <select id="select1" name="controls" class="form-control">
                                      <option value="1">Trang chủ</option>
                                      <option value="2">Danh mục tin tức</option>
                                      <option value="3">Bài viết</option> 
                                      <option value="4">Đường dẫn</option> 
                                    </select>
                                </div>

                                <div class="form-group menu-danhmuc-an" id="dmtt">
                                
                                    <label for="sodienthoai">Danh mục tin tức</label>
                                    <select name="newcat_id"   class="form-control" >
                                        <option value="0">---Chọn danh mục---</option>
                                        @foreach ($datacat as $element)
                                            <option value="{{ $element->newcat_id }}" > {{ $element->newcat_name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group menu-danhmuc-an" id="tt">
                                
                                    <label for="sodienthoai">Danh sách bài viết</label>
                                    <select name="new_id"   class="form-control" >
                                        <option value="0">---Chọn bài viết---</option>
                                        @foreach ($allnew as $element)
                                            <option value="{{ $element->new_id }}" > {{ $element->new_name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group menu-danhmuc-an" id="link">

                                    <label for="tenhocsinh">Đường dẫn</label>
                                    <input type="text" class="form-control" name="menu_url"  value="#" />
                                   
                                </div>

                                <script>
                                   $("#select1").change(function(){
                                        if($(this).val() == 2){
                                          $("#dmtt").show();
                                        }else{
                                          $("#dmtt").hide();
                                        }
                                        if($(this).val() == 3){
                                          $("#tt").show();
                                        }else{
                                          $("#tt").hide();
                                        }
                                        if($(this).val() == 4){
                                          $("#link").show();
                                        }else{
                                          $("#link").hide();
                                        }



                                    }); 
                                </script>       
                                
                               


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