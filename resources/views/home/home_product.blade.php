@extends('home.dasboard_home')
@section('js')
    <script src="{{asset('backend/js/main/home/home_product.js')}}" type="text/javascript "></script>
@endsection
@section('home_content')
<div id="wrapper" class="product">
    <div class="wp-container">
        <div class="top-content" id="bg_product">
            <div class="wp-content">
                <div class="box-title" id="title_content1">
                    {{-- <div  class="empty"></div>
                    <h1 class="title t-up fw-600 t-center fz-25rem">CÁC SẢN PHẨM TIÊU BIỂU</h1>
                    <p class="short-desc fw-400 fz-125rem t-center">Chúng tôi đã cung cấp hơn xxxx sản phẩm cho nhiều doanh nghiệp lớn và nhỏ bao gồm các sản phẩm túi nhựa, ly nhựa, tô nhựa,... đã được kiểm định chất lượng an toàn cho sức khỏe, thân thiện môi trường</p> --}}
                </div>
            </div>
        </div>
        <div class="bot-content">
            <div class="wp-content">
                <div class="box-content">
                    <div class="box-left" id="content2_left">

                        {{-- <div class="box-item w-100 px-0 py-0">
                            <div class="thumb-nail">
                                <img src="{{asset('ctp/images/product_1.png')}}" alt="">
                            </div>
                            <div class="item-content pd-2rem mg-t-1rem">
                                <h4 class="t-left fw-600 t-cap fz-2rem lh-2rem">Bao bì kem 2 dòng kem 2 dòng</h4>
                                <span class="t-left fw-400 t-cap fz-2rem lh-2rem">Bao bì nhựa</span>
                            </div>
                        </div> --}}

                    </div>
                    <div id="content2_right" class="box-right d-flex flex-wrap justify-content-space-between">


                        <div class="box-item px-0 py-0">
                            <div class="thumb-nail">
                                <img src="{{asset('ctp/images/product_2.png')}}" alt="">
                            </div>
                            <div class="item-content px-1rem py-05rem">
                                <h4 class="t-left fw-600 t-cap fz-125rem lh-125rem">Bao bì kem 2 dòng kem 2 dòng</h4>
                                <span class="t-left fw-400 t-cap fz-1rem lh-1rem">Bao bì nhựa</span>
                            </div>
                        </div>
                      
                      
                     
                          

                    </div>
                </div>

            </div>
        </div>
        <!-- contact box -->
        <div id="contact-box">
            <span class="box-contact-shadow"></span>
            <span class="box-contact-close"></span>
            <div class="box-contact">

                <div class="icon-contact ">
                    <div><img src="{{asset('ctp/images/phone_1.png')}} " alt=" "></div>
                    <p>Liên hệ</p>
                </div>

                <div class="menu-contact ">
                    <span class="triangle "></span>
                    <ul class="content-contact ">
                        <li class="item ">
                            <a href="# " class="item-icon "><img src="{{asset('ctp/images/icon-phone.png')}} " alt=" "></a>
                            <a href="# " class="item-title ">(+84) 932653789</a>
                        </li>
                        <li class="item ">
                            <a href="# " class="item-icon "><img src="{{asset('ctp/images/icon-mes.png')}} " alt=" "></a>
                            <a href="# " class="item-title ">Messager</a>
                        </li>
                        <li class="item ">
                            <a href="# " class="item-icon "><img src="{{asset('ctp/images/icon-viber.png')}} " alt=" "></a>
                            <a href="# " class="item-title ">Viber</a>
                        </li>
                        <li class="item ">
                            <a href="# " class="item-icon "><img src="{{asset('ctp/images/icon-zalo.png')}} " alt=" "></a>
                            <a href="# " class="item-title ">Zalo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOW IMG PRODUCT -->
<div class="show-thumb-nail modal">
    <div class="modal-box w-40">
        <span class="close"><img src="{{asset('ctp/images/x.png')}}" alt=""></span>
        <img src="{{asset('ctp/images/product_1.png')}}" alt="">
    </div>
</div>

<footer>
    <div class="wp-container">
        <div class="box-content">
            <div class="title">
                <a href="index.html" class="logo"><img src="{{asset('ctp/images/logo.png')}}" alt=""></a>
            </div>
            <div class="content">
                <p class="fw-600">Công ty Cổ Phần Cường Thịnh Phúc</p>
                <p class="fw-400">A5/6c Nguyễn Cữu Phú, Ấp 01, Tân Kiên Huyện Bình Chánh, TP. Hồ Chí Minh</p>
                <p class="fw-400">Email: cuongthinhphuc@gmail.com</p>
            </div>
        </div>
        <div class="box-content">
            <div class="title">
                <h4 class="fw-600 fz-2rem t-cap t-left">Về chúng tôi</h4>
            </div>
            <div class="content">
                <a href="#" class="fw-400">Giới thiệu</a>
                <a href="#" class="fw-400">Bảo hành</a>
                <a href="#" class="fw-400">Tuyển dụng</a>
            </div>
        </div>
        <div class="box-content">
            <div class="title">
                <h4 class="fw-600 fz-2rem t-cap t-left">Tải ứng dụng ABC</h4>
            </div>
            <div class="content">
                <a href="#" class="brand"><img src="{{asset('ctp/images/appstore.png')}}" alt=""></a>
                <a href="#" class="brand"><img src="{{asset('ctp/images/ggplay.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</footer>
@endsection