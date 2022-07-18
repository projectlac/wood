@foreach ($new_cat as $item)
	

<div class="congtacgiaoduc">
	<div class="newest">
		<div class="col-md-8">
			<div class="row">
				<a href="{{ asset('/chi-tiet') }}/{{ ($item->new1[0]->new_url) }}"><img src="{{ asset('img/new') }}/{{ $item->new1[0]->new_img }}" alt=""></a>
				<div class="danhmuc-tintuc">
					<h2 class="subtitle">

						<a href="{{ asset('/danh-muc') }}/{{ $item->newcat_url }}">
							{{ $item->newcat_name }}
						</a>
					</h2>
				</div>
			</div>

		</div>

		<div class="col-md-4">
			<div class="hot-news-title x-tlie">
	            <h4>
	                <a href="{{ asset('/chi-tiet') }}/{{ ($item->new1[0]->new_url) }}">{{ ($item->new1[0]->new_name) }}</a>
	            </h4>
	        </div>
	        <div class="hot-news-time">
	            <i>{{ ($item->new1[0]->created_at) }}</i>
	        </div>
	        <div class="hot-news-des">
	            {{ ($item->new1[0]->new_des) }}
	        </div>
		</div>
	</div>
<div style="clear: both;"></div>
	<div class="not-new">
		<div class="row" style="margin-right: -7px; margin-left: -7px;">
			@foreach ($item->list_new as $news)
				
			
			<div class="col-md-3">
				<a href="{{ asset('/chi-tiet') }}/{{ $news->new_url }}"><img src="{{ asset('img/new') }}/{{ $news->new_img }}" alt="" ></a>
				<div class="hot-news-title">
		            <h4 class="sub-tle">
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
@endforeach