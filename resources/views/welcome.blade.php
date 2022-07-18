@extends('layouts.master')

@section('title', 'Tuổi Trẻ Phú Lương')

@section('content')
<div class=" container">
    <div class="content">
        <div class="col-md-12">
            <div class="w_tabsanpham">
                <div class="margin-auto">
                    <div class="thanh_tabsp">
                        <span class="click_tab active" id="tab_sp_new" onclick="changeStatus('sp_new')">Sản Phẩm Mới </span>
                        <span class="click_tab" id="tab_sp_km" onclick="changeStatus('sp_km')">Sản Phẩm Khuyến Mãi</span>
                        <!--<span class="click_tab" data-loai="sp_hot">Sản Phẩm Hot</span>-->
                    </div>
                    <div class="content_tabsp active" id="sp_new">
                        <div class="div_css">

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="trang-tho-treo-go-cam-xe-sp730" title="Trang Thờ Treo Gỗ Căm Xe - SP730">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/trang-tho-treo-go-cam-xe-sp730-7589_280x220.jpg" width="280" height="100%" alt="Trang Thờ Treo Gỗ Căm Xe - SP730"></div>
                                                <span class="giamgia">-20%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="trang-tho-treo-go-cam-xe-sp730" title="Trang Thờ Treo Gỗ Căm Xe - SP730">
                                            <h3>Trang Thờ Treo Gỗ Căm Xe - SP730</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>1.600.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>2.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="bo-sofa-chu-g-soi-nga-sp851" title="Bộ Sofa Chữ G Sồi Nga - SP851">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/bo-sofa-chu-g-soi-nga-sp851-5880_280x220.jpg" width="280" height="100%" alt="Bộ Sofa Chữ G Sồi Nga - SP851"></div>
                                                <span class="giamgia">-19%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="bo-sofa-chu-g-soi-nga-sp851" title="Bộ Sofa Chữ G Sồi Nga - SP851">
                                            <h3>Bộ Sofa Chữ G Sồi Nga - SP851</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>6.500.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>8.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="sofa-soi-nga-son-mau-la-me-sp810" title="Sofa Sồi Nga Sơn Màu Lá Me - SP810">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/sofa-soi-nga-son-mau-la-me-sp810-5673_280x220.jpg" width="280" height="100%" alt="Sofa Sồi Nga Sơn Màu Lá Me - SP810"></div>
                                                <span class="giamgia">-25%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="sofa-soi-nga-son-mau-la-me-sp810" title="Sofa Sồi Nga Sơn Màu Lá Me - SP810">
                                            <h3>Sofa Sồi Nga Sơn Màu Lá Me - SP810</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>9.000.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>12.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="ban-an-tron-8-ghe-go-do-sp846" title="Bàn Ăn Tròn 8 Ghế Gõ Đỏ - SP846">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/ban-an-tron-8-ghe-go-do-sp846-9760_280x220.jpg" width="280" height="100%" alt="Bàn Ăn Tròn 8 Ghế Gõ Đỏ - SP846"></div>
                                                <span class="giamgia">-17%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="ban-an-tron-8-ghe-go-do-sp846" title="Bàn Ăn Tròn 8 Ghế Gõ Đỏ - SP846">
                                            <h3>Bàn Ăn Tròn 8 Ghế Gõ Đỏ - SP846</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>25.000.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>30.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="bo-sofa-song-long-go-tram-tay-10-sp752" title="Bộ Sofa Song Long Gỗ Tràm Tay 10 - SP752">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/bo-sofa-song-long-go-tram-tay-10-sp752-9553_280x220.jpg" width="280" height="100%" alt="Bộ Sofa Song Long Gỗ Tràm Tay 10 - SP752"></div>
                                                <span class="giamgia">-23%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="bo-sofa-song-long-go-tram-tay-10-sp752" title="Bộ Sofa Song Long Gỗ Tràm Tay 10 - SP752">
                                            <h3>Bộ Sofa Song Long Gỗ Tràm Tay 10 - SP752</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>10.000.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>13.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="tu-quan-ao-go-soi-2-canh-sp627" title="Tủ Quần Áo Gỗ Sồi 2 Cánh - SP627">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/tu-quan-ao-go-soi-2-canh-sp627_280x220.jpg" width="280" height="100%" alt="Tủ Quần Áo Gỗ Sồi 2 Cánh - SP627"></div>
                                                <span class="giamgia">-21%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="tu-quan-ao-go-soi-2-canh-sp627" title="Tủ Quần Áo Gỗ Sồi 2 Cánh - SP627">
                                            <h3>Tủ Quần Áo Gỗ Sồi 2 Cánh - SP627</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>5.500.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>7.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="tap-dau-giuong-2h-po-mu-sp745" title="Táp Đầu Giường 2H Pơ Mu - SP745">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/tap-dau-giuong-2h-po-mu-sp745-1014_280x220.jpg" width="280" height="100%" alt="Táp Đầu Giường 2H Pơ Mu - SP745"></div>
                                                <span class="giamgia">-32%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="tap-dau-giuong-2h-po-mu-sp745" title="Táp Đầu Giường 2H Pơ Mu - SP745">
                                            <h3>Táp Đầu Giường 2H Pơ Mu - SP745</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>1.700.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>2.500.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="ban-tho-me-con-huong-da-sp816" title="Bàn Thờ Mẹ Con Gỗ Hương Đá - SP816">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/ban-tho-me-con-huong-da-sp816-9451_280x220.jpg" width="280" height="100%" alt="Bàn Thờ Mẹ Con Gỗ Hương Đá - SP816"></div>
                                                <span class="giamgia">-15%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="ban-tho-me-con-huong-da-sp816" title="Bàn Thờ Mẹ Con Gỗ Hương Đá - SP816">
                                            <h3>Bàn Thờ Mẹ Con Gỗ Hương Đá - SP816</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>17.000.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>20.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->
                        </div>
                    </div>
                    <div class="content_tabsp" id="sp_km">
                        <div class="div_css">

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="trang-tho-treo-go-tram-sp121" title="Trang Thờ Treo Gỗ Tràm - SP121">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/trang-tho-treo-go-tram-sp121_280x220.jpg" width="280" height="100%" alt="Trang Thờ Treo Gỗ Tràm - SP121"></div>
                                                <span class="giamgia">-38%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="trang-tho-treo-go-tram-sp121" title="Trang Thờ Treo Gỗ Tràm - SP121">
                                            <h3>Trang Thờ Treo Gỗ Tràm - SP121</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>800.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>1.300.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="ghe-gap-thanh-giuong-soi-trang-sp708" title="Ghế Gấp Thành Giường Sồi Trắng - SP708">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/ghe-gap-thanh-giuong-soi-trang-sp708_280x220.jpg" width="280" height="100%" alt="Ghế Gấp Thành Giường Sồi Trắng - SP708"></div>
                                                <span class="giamgia">-24%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="ghe-gap-thanh-giuong-soi-trang-sp708" title="Ghế Gấp Thành Giường Sồi Trắng - SP708">
                                            <h3>Ghế Gấp Thành Giường Sồi Trắng - SP708</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>3.800.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>5.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="ghe-gap-thanh-giuong-go-soi-sp257" title="Ghế Gấp Thành Giường Gỗ Sồi - SP257">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/ghe-gap-thanh-giuong-go-soi-sp257_280x220.jpg" width="280" height="100%" alt="Ghế Gấp Thành Giường Gỗ Sồi - SP257"></div>
                                                <span class="giamgia">-32%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="ghe-gap-thanh-giuong-go-soi-sp257" title="Ghế Gấp Thành Giường Gỗ Sồi - SP257">
                                            <h3>Ghế Gấp Thành Giường Gỗ Sồi - SP257</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>3.400.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>5.000.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="bo-ban-an-6-ghe-go-soi-sp25" title="Bàn Ăn 6 Ghế Sồi màu TLOV - SP25">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/bo-ban-an-6-ghe-go-soi-sp25_280x220.jpg" width="280" height="100%" alt="Bàn Ăn 6 Ghế Sồi màu TLOV - SP25"></div>
                                                <span class="giamgia">-25%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="bo-ban-an-6-ghe-go-soi-sp25" title="Bàn Ăn 6 Ghế Sồi màu TLOV - SP25">
                                            <h3>Bàn Ăn 6 Ghế Sồi màu TLOV - SP25</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>5.400.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>7.200.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="giuong-ngu-xoan-dao-tc-sp635" title="Giường Ngủ Xoan Đào TC - SP635">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/giuong-ngu-xoan-dao-tc-sp635_280x220.jpg" width="280" height="100%" alt="Giường Ngủ Xoan Đào TC - SP635"></div>
                                                <span class="giamgia">-37%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="giuong-ngu-xoan-dao-tc-sp635" title="Giường Ngủ Xoan Đào TC - SP635">
                                            <h3>Giường Ngủ Xoan Đào TC - SP635</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>2.200.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>3.500.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="bo-ban-an-8-ghe-sp209" title="Bàn Ăn 8 Ghế Căm Gõ Cổ Điển OV - SP209">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/bo-ban-an-8-ghe-sp209_280x220.jpg" width="280" height="100%" alt="Bàn Ăn 8 Ghế Căm Gõ Cổ Điển OV - SP209"></div>
                                                <span class="giamgia">-24%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="bo-ban-an-8-ghe-sp209" title="Bàn Ăn 8 Ghế Căm Gõ Cổ Điển OV - SP209">
                                            <h3>Bàn Ăn 8 Ghế Căm Gõ Cổ Điển OV - SP209</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>18.000.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>23.800.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="ban-tho-than-tai-mai-bang-sp122" title="Bàn Thờ Thần Tài Mái Bằng - SP122">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/ban-tho-than-tai-mai-bang-sp122_280x220.jpg" width="280" height="100%" alt="Bàn Thờ Thần Tài Mái Bằng - SP122"></div>
                                                <span class="giamgia">-39%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="ban-tho-than-tai-mai-bang-sp122" title="Bàn Thờ Thần Tài Mái Bằng - SP122">
                                            <h3>Bàn Thờ Thần Tài Mái Bằng - SP122</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>1.400.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>2.300.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->

                            <article class="item_index col-lg-3 col-md-3 col-sm-4 col-xx-4 col-xs-6 pa_rp">
                                <div class="bor_css">
                                    <div class="product_images">
                                        <a href="giuong-go-soi-kieu-quat-sp402" title="Giường gỗ sồi kiểu quạt - SP402">
                                            <div class="hidden_img">
                                                <div class="hover_img"><img class="lazyload" src="upload/product/giuong-go-soi-kieu-quat-sp402_280x220.jpg" width="280" height="100%" alt="Giường gỗ sồi kiểu quạt - SP402"></div>
                                                <span class="giamgia">-33%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="ten_item ten_itemindex">
                                        <a href="giuong-go-soi-kieu-quat-sp402" title="Giường gỗ sồi kiểu quạt - SP402">
                                            <h3>Giường gỗ sồi kiểu quạt - SP402</h3>
                                        </a>
                                        <p class="giakm">

                                            <span>3.000.000 vnđ</span>
                                        </p>
                                        <p class="giaban">

                                            <span>4.500.000 vnđ</span>
                                        </p>
                                    </div>

                                </div>
                            </article>
                            <!--end product-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="all-tieudiem">
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
                            <a href="{{ url('/chi-tiet') }}/{{ $element->new_url }}">{{ $element->new_name }} &nbsp;&nbsp;&nbsp;&nbsp; </a>
                            @endforeach
                        </marquee>
                    </div>
                </div>
            </div>
            <hr class="hr-tieudiem">

            <div class="hot-news">
                <div id="vk-owl-demo-singer-slider_banhatgiong" class="owl-carousel owl-theme">


                    @foreach ($noibat as $nb)
                    <div class="item">

                        <div class="hot-news-img">
                            <a href="{{ url('/chi-tiet') }}/{{ $nb->new_url }}"><img src="{{ asset('img/new') }}/{{ $nb->new_img }}" alt="" class="img-responsive"></a>
                        </div>
                        <div class="hot-news-title">
                            <h4>
                                <a href="{{ url('/chi-tiet') }}/{{ $nb->new_url }}">{{ $nb->new_name }}</a>
                            </h4>
                        </div>
                        <div class="hot-news-time">
                            <i>{{ $nb->created_at }}</i>
                        </div>
                        <div class="hot-news-des home-des">
                            ​​​​​​​{{ $nb->new_des }}
                        </div>
                    </div>
                    @endforeach





                </div>
            </div>

            <img src="http://doanthanhnien.vn/Content/uploads/images/132518834671374698_tainangtreweb.jpg" alt="" width="100%"> -->
            <!-- @include('template.congtacgiaoduc') -->

        </div>
        <!-- @include('left') -->


    </div>
</div>
<div style="clear:both"></div>
@stop
@section('scripts')
<script>
    const changeStatus = (val) => {
        $('.content_tabsp').removeClass('active')
        $('#' + val).addClass('active')
        $('.click_tab').removeClass('active')

        $('#tab_' + val).addClass('active')

    }
    // $(document).ready(function() {

    //     $('#vk-owl-demo-singer-slider_banhatgiong').owlCarousel({

    //         loop: true,

    //         margin: 0,

    //         nav: false,

    //         dots: false,

    //         autoplay: true,

    //         navText: [],


    //         responsive: {

    //             0: {

    //                 items: 1

    //             }

    //         }

    //     });

    // });
</script>
@stop
