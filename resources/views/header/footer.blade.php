<footer>
	<div class="container">
		<div class="col-md-6">
			<div class="ft-contact-l">
				<p>{{ $config1['config']->gioithieu }}</p>
				<p>Địa chỉ: {{ $config1['config']->diachi }}</p>
				<p>Điện thoại: {{ $config1['config']->phone }}</p>
				<p>Email : {{ $config1['config']->email }}</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="ft-contact-r">
				<p>Thông tin liên hệ Cổng Thông tin Điện tử Trung ương Đoàn</p>
				<p>Địa chỉ: 62 Bà Triệu, Hoàn Kiếm, Hà Nội</p>
				<p>Điện thoại: 04-62631871 Fax: 04-62631875</p>
				<p>Email : web.dtn@gmail.com</p>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div class="connect">
			<h2>Kết nối với chúng tôi: 

				<a href="http://{{ $config1['config']->fb }}"><i class="fa fa-facebook-official" aria-hidden="true" style="color: #3b5998"></i></a>
				<a href="http://{{ $config1['config']->email }}"><i class="fa fa-google-plus-official" aria-hidden="true" style="color: #dc4e41"></i></a>
				<a href="http://{{ $config1['config']->yt }}"><i class="fa fa-youtube" aria-hidden="true" style="color: #c4302b"></i></a>
			</h2>
		</div>
	</div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/owl-carouse/owl.carousel.min.js') }}"></script>
{{--     </body>
</html> --}}
