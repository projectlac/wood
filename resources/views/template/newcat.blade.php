@extends('layouts.master')

@section('title', $content[0]->newcat_name)

@section('content')

<div class=" container">
    <div class="content">
        <div class="col-md-8">
            <div class="all-tieudiem">
                <div class="tieudiem">
                    <img src="http://doanthanhnien.vn/Content/FrontEnd/Theme2016_07_18/img/TieuDiem.png" alt="">
                </div>
                <div class="group-tieudiem">
                    <div class="tieudiem-title">
                        Tiêu điểm
                    </div>
                    <div class="content-title">
                        <marquee behavior="" direction=""> 
                            @foreach ($tieudiem as $element)
                                <a href="{{ url('/chi-tiet') }}/{{ $element->new_url }}">{{ $element->new_name }}</a>
                            @endforeach
                         </marquee>
                    </div>
                </div>
            </div>
            <hr class="hr-tieudiem">

            <div class="congtacgiaoduc">
            
            <div style="clear: both;"></div>
                <div class="not-new">
                    <div class="row" style="margin-right: -7px; margin-left: -7px;">
                        @foreach ($list_new as $news)
                            
                        
                        <div class="col-md-4">
                            <img src="{{ asset('img/new') }}/{{ $news->new_img }}" alt="" >
                            <div class="hot-news-title">
                                <h4>
                                    <a href="{{ asset('/chi-tiet') }}/{{ $news->new_url }}">{{ $news->new_name }}</a>
                                </h4>
                            </div>
                            <div class="hot-news-time">
                                <i>{{ $news->created_at }}</i>
                            </div>
                            
                        </div>
                        @endforeach
                        
                    </div>

                </div>
            </div>
        </div> 
        @include('left')

        
    </div>   
</div>

<div style="clear:both"></div>
@stop