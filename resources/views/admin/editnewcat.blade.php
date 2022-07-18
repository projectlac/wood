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

                        <p><a class="btn btn-primary" href="{{ url('admin/danhmuctintuc') }}">Về danh sách</a></p>
                        <div class="col-xs-4 col-xs-offset-4">
                            <center><h4>Sửa danh mục tin tức</h4></center>
                            <form action="{{ url('/admin/editnewcat/update') }}" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}"/>
                                <input type="hidden" id="id" name="id" value="{!! $data[0]->newcat_id !!}" />
                                <div class="form-group">

                                    <label for="tenhocsinh">Tên danh mục</label>
                                    <input type="text" class="form-control" id="title" name="newcat_name" onkeyup="ChangeToSlug()" value="{!! $data[0]->newcat_name !!}" required />
                                </div>
                                <div class="form-group">

                                    <label for="tenhocsinh">Ảnh đại diện</label>
                                    <input type="file" class="form-control" name="newcat_img" onchange="loadFile(event)" />
                                    <img id="output" width="300" src="{{ asset('img/newcat/') }}/{{ $data[0]->newcat_img }}" style="margin: 15px 0" />
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

                               {{--  <div class="form-group">
                                    
                                    <input type="file" class="form-control" name="newcat_img" />
                                </div> --}}
                                <div class="form-group">
                                    <label for="sodienthoai">Mô tả danh mục</label>
                                    <textarea  id="" cols="30" rows="10" class="form-control" name="newcat_des"> {{ $data[0]->newcat_des }} </textarea>
                                </div> 
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="newcat_url" id="slug" value="{{ $data[0]->newcat_url }}" />
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" id="hide" name="hide" value="1" {{ $data[0]->hide == '1' ? 'checked': "" }}>
                                    <label for="vehicle1"> Hiển thị</label><br>

                                </div>


                                <center><button type="submit" class="btn btn-primary">Sửa</button></center>
                            </form>
                        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <script>
                function ChangeToSlug()
                    {
                        var title, slug;
                     
                        //Lấy text từ thẻ input title 
                        title = document.getElementById("title").value;
                     
                        //Đổi chữ hoa thành chữ thường
                        slug = title.toLowerCase();
                     
                        //Đổi ký tự có dấu thành không dấu
                        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                        slug = slug.replace(/đ/gi, 'd');
                        //Xóa các ký tự đặt biệt
                        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                        //Đổi khoảng trắng thành ký tự gạch ngang
                        slug = slug.replace(/ /gi, "-");
                        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                        slug = slug.replace(/\-\-\-\-\-/gi, '-');
                        slug = slug.replace(/\-\-\-\-/gi, '-');
                        slug = slug.replace(/\-\-\-/gi, '-');
                        slug = slug.replace(/\-\-/gi, '-');
                        //Xóa các ký tự gạch ngang ở đầu và cuối
                        slug = '@' + slug + '@';
                        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                        //In slug ra textbox có id “slug”
                        document.getElementById('slug').value = slug;
                    }
            </script>   
            <!-- End of Main Content -->
{{-- 
<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> --}}
            
            <!-- Footer -->
            @include('admin.footer');