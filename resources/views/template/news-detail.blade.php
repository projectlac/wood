@extends('layouts.master')

@section('title',  $content[0]->new_name)

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

            <div class="news-detail">
                {{-- {{ dd($content) }} --}}
                <div class="hot-news-title">
                                <h4>
                                    {{ $content[0]->new_name }}
                                </h4>
                            </div>
                            <div class="hot-news-time">
                                <i>{{ date('H:i - d-m-Y', strtotime($content[0]->created_at)) }}</i>
                            </div>
                            <div class="hot-news-des" style="color: #000;">
                                ​​​​​​​{{ $content[0]->new_des }}
                            </div>
                            <div class="content-new-detail">
                                {!! $content[0]->new_content !!}
                            </div>

                
            </div>
            <hr class="hr-tieudiem">

            <div class="fb-comments" data-href="{{ asset('/chi-tiet')}}/{{$content[0]->new_url}}" data-width="" data-numposts="5" style="width: 100%"></div>
        </div> 
        @include('left')

        
    </div>   
</div>

<div style="clear:both"></div>
@stop
@section('scripts')