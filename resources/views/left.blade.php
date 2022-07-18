<div class="col-md-4">
            <div class="col-4 no-padding">
                <a href="{{ $config1['config']->link1 }}"><img class="img-responsive" src="http://doanthanhnien.vn//Content/FrontEnd/Theme2016_07_18/img/BannerLichCongTac.png"></a>
            </div>
            <div class="col-4 no-padding">
                <a href="{{ $config1['config']->link2 }}"><img class="img-responsive" src="http://doanthanhnien.vn//Content/FrontEnd/Theme2016_07_18/img/BannerVanBan.png"></a> 
            </div>
            <div class="col-4 no-padding">
                <a href="{{ $config1['config']->link3 }}" target="_blank"><img class="img-responsive" src="http://doanthanhnien.vn//Content/FrontEnd/Theme2016_07_18/img/BannerVanPhong.png"></a>
            </div>

            <div class="search">
                <form class="form-inline d-flex justify-content-center md-form form-md active-cyan active-cyan-2 mt-2" method="POST" id="header-search">
                  
                  <input class="form-control form-control-sm" type="text" placeholder="Tìm kiếm"
                    aria-label="Search" name="search">
                    {{ csrf_field() }}
                </form>
            </div>
           
            <div class="news-home">
                <ul>
                    <li class="liac active" onclick="fa('tcs4')">
                        <h2>Tin mới</h2>
                    </li>
                    <li class="liac" onclick="fa('tcs5')">
                        <h2>Tin cơ sở</h2>
                    </li>
                </ul>

                  
                <div class="news-home-content" id="tcs4">
                    @foreach ($data as $element)

                       <div class="group-news-home">
                        <div class="col-md-4">
                            <a href="{{ asset('chi-tiet') }}/{{ $element->new_url }}"><img src="{{ asset('img/new') }}/{{ $element->new_img }}" alt=""></a>
                        </div>
                        <div class="col-md-8">
                            <h4><a href="{{ asset('chi-tiet') }}/{{ $element->new_url }}">{{ $element->new_name }}</a></h4>
                            <p>
                            {{ date('d-m-Y', strtotime($element->created_at)) }}
                            </p>
                        </div>
                    </div>

                    @endforeach
                    
                    
                   
                   
                   
                </div>

                <div class="news-home-content" id="tcs5" style="display: none">
                    @foreach ($new5cs['new5cs'] as $element)

                       <div class="group-news-home">
                        <div class="col-md-4">
                            <a href="{{ asset('chi-tiet') }}/{{ $element->new_url }}"><img src="{{ asset('img/new') }}/{{ $element->new_img }}" alt=""></a>
                        </div>
                        <div class="col-md-8">
                            <h4><a href="{{ asset('chi-tiet') }}/{{ $element->new_url }}">{{ $element->new_name }}</a></h4>
                            <p>
                            {{ date('d-m-Y', strtotime($element->created_at)) }}
                            </p>
                        </div>
                    </div>

                    @endforeach
                    
                    
                   
                   
                   
                </div>
            </div>
            <div class="hihihi">
                @foreach ($library_left['library_left'] as $element)
                    <a href="{{ $element->outlink }}"><img src="{{ asset('img/new') }}/{{ $element->img }}" alt="{{ $element->name }}"></a>
                @endforeach
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(".liac").click(function () {
                    $(".liac").removeClass("active");
                    // $(".tab").addClass("active"); // instead of this do the below 
                    $(this).addClass("active");   
                });
                });

            function fa(x){
                var x = '#'+ x;
                $(".news-home-content").css("display",'none');
                $(x).css("display",'inline');
            }
        </script>       
