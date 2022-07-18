<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="DisBB9cM"></script>
<div class="container">
    <div id="header">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('/img/new') }}/{{ $config1['config']->banner }}" alt=""></a>
        </div>

        <div class="manu-header">
            <div class="top_head">
                <div id="timkiem">
                    <input type="text" name="keyword1" id="keyword1" class="input" onkeypress="doEnter1(event,'keyword1');" placeholder="Tìm mã hoặc tên sản phẩm...Vd: sp700">
                    <button type="submit" value="" class="nut_tim ">Tìm Kiếm</button>
                </div>
                <div class="hotline">
                    0962 644 171 </div>
            </div>

            <div class="menu-bar">
                <div class="container">
                    <ul class="main-menu ">

                        @foreach ($menu as $element )

                        @foreach ($element as $i)

                        <li class="{{ Request::is($i->url) ? 'active' : '' }}">
                            <a class="" href="{{ $i->link }}"> {{ $i->menu_name }} </a>
                        </li>
                        @endforeach

                        @endforeach



                    </ul>
                </div>

                </dic>
            </div>
        </div>
    </div>
</div>
<div class="slide">
    <img src="{{ asset('/img/banner') }}/testbanner.jpg" alt="">
</div>
