<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Chợ Tốt Clone')</title>

    @vite(['resources/scss/main-store.scss'])
    <link rel="stylesheet" href="{{ asset('css/notify.css') }}">    

    @yield('styles') 
    @stack('styles')
</head>
 
{{-- @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}
<body>

<body class="bg-light">
    <div class="custom-toast-container">
          @if (session('error'))
                    <div class="toast align-items-center text-white bg-danger border-0" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
                        <div class="d-flex">
                            <div class="toast-body">
                                Lỗi: {{ session('error') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if (session('success'))
                    <div class="toast align-items-center text-white bg-success border-0" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-delay="4000">
                        <div class="d-flex">
                            <div class="toast-body">
                                Thành công: {{ session('success') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
    </div>
    
    <header class="header" id="header">
      
        <!-- Logo -->
        <a href="/">
            <img src="{{ asset('images/client/logo.png')}}" alt="" class="header__left-img" />
        </a>

      <!-- Nút menu trái -->
      <div class="header__left">
        <button class="header__left-btn">
            <i class="fa-solid fa-list"></i>
        </button>

        <!-- Modal cho menu trái -->
        <div class="header__left-modal">
          <h4 class="header__left-modal-title">Danh mục</h4>
          <!-- Modal lớn -->
          <div class="header__left-modal-box">
            <ul class="header__left-modal-list">
              <li data-sub="sub1" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img1.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Bất động sản</span>
                </a>
              </li>
              <li data-sub="sub2" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img2.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Xe cộ</span>
                </a>
              </li>
              <li data-sub="sub3" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img3.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Đồ điện tử</span>
                </a>
              </li>
              <li data-sub="sub4" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img4.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Việc làm</span>
                </a>
              </li>
              <li data-sub="sub5" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img5.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Dịch vụ chăm sóc nhà cửa</span>
                </a>
              </li>
              <li data-sub="sub6" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img6.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Thú cưng</span>
                </a>
              </li>
              <li data-sub="sub7" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img7.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Đồ ăn, thực phẩm, và các loại khác</span>
                </a>
              </li>
              <li data-sub="sub8" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img8.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Tủ lạnh, máy lạnh, máy giặt</span>
                </a>
              </li>
              <li data-sub="sub9" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img9.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Đồ gia dụng, nội thất, cây cảnh</span>
                </a>
              </li>
              <li data-sub="sub10" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img10.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Mẹ và bé</span>
                </a>
              </li>
              <li data-sub="sub11" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img11.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Thời trang, đồ dùng cá nhân</span>
                </a>
              </li>
              <li data-sub="sub12" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img12.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Giải trí, Thể thao, Sở thích</span>
                </a>
              </li>
              <li data-sub="sub13" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img13.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Đồ dùng văn phòng, công nông nghiệp</span>
                </a>
              </li>
              <li data-sub="sub14" class="header__left-modal-item">
                <a href="" class="header__left-modal-link">
                  <img
                    src="{{ asset('images/client/submodalheader/img14.png')}}"
                    alt=""
                    class="header__left-modal-link-img"
                  />
                  <span>Dịch vụ, du lịch</span>
                </a>
              </li>
            </ul>

            <!-- Các Modal phụ -->
            <div id="sub1" class="header__left-sub-modal">
              <ul class="header__left-sub-modal-list">
                <li class="header__left-sub-modal-item">
                  <a href="" class="header__left-sub-modal-link">Mua bán</a>
                </li>
                <li class="header__left-sub-modal-item">
                  <a href="" class="header__left-sub-modal-link">Cho thuê</a>
                </li>
                <li class="header__left-sub-modal-item">
                  <a href="" class="header__left-sub-modal-link">Dự án</a>
                </li>
              </ul>
            </div>
            <div id="sub2" class="header__left-sub-modal">
              <ul class="header__left-sub-modal-list">
                <li class="header__left-sub-modal-item">
                  <a href="" class="header__left-sub-modal-link">Ô tô</a>
                </li>
                <li class="header__left-sub-modal-item">
                  <a href="" class="header__left-sub-modal-link">Xe máy</a>
                </li>
                <li class="header__left-sub-modal-item">
                  <a href="" class="header__left-sub-modal-link"
                    >Xe tải, Xe ben</a
                  >
                </li>

                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">Xe điện</a>
                        </li>

                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">Xe đạp</a>
                        </li>

                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">Phương tiện khác</a>
                        </li>

                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">Phụ tùng xe</a>
                        </li>
                    </ul>
                </div>
                <div id="sub3" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao 3</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub4" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao 4</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub5" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao 5</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub6" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao 6</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub7" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub8" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub9" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub10" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub11" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub12" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub13" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
                <div id="sub14" class="header__left-sub-modal">
                    <ul class="header__left-sub-modal-list">
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                        <li class="header__left-sub-modal-item">
                            <a href="" class="header__left-sub-modal-link">xin chao</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


      </div>

      <div class="header__input" style="display: block;">
        <div class="icon-1"><i class="fa-solid fa-magnifying-glass"></i></div>
        <input type="text" class="header__inp" placeholder="Tìm kiếm" />
        <span class="close">X</span>
        <div class="icon">
          <i class="fa-solid fa-magnifying-glass search"></i>
        </div>
      </div>

      <div class="header__right">
        <div class="header__action">
          <button class="header__action-item">
            <i class="fa-regular fa-bell"></i>
          </button>
          <button class="header__action-item">
            <i class="fa-regular fa-message"></i>
          </button>
          <button class="header__action-item">
            <i class="fa-regular fa-heart"></i>
          </button>
        </div>
        <div class="header__action-btn">
          <a href="{{route('client.posts.list')}}" class="header__login">Quản lý tin</a>
          <a href="{{route('client.posts.create')}}" class="header__up">Đăng tin</a>
          <button class="header__user">
            <i class="fa-regular fa-user"></i>
            {{-- Kiểm tra xem người dùng đã đăng nhập chưa --}}
            @if(Auth::check()) 
                <p class="user-info">   
                    {{-- Hiển thị tên người dùng đang đăng nhập --}}
                    {{ Auth::user()->name }}
                    {{-- <i class="fas fa-caret-down"></i> --}}
                </p>
            @else
                {{-- Nếu chưa đăng nhập thì hiện nút này --}}
                <div class="user-actions">
                    <a href="{{ route('login') }}" style="text-decoration: none; color: #333; font-weight: 600;">
                        Đăng nhập
                    </a>
                    <span style="margin: 0 5px;">/</span>
                    <a href="{{ route('register') }}" style="text-decoration: none; color: #333; font-weight: 600;">
                        Đăng ký
                    </a>
                </div>
            @endif
            <i class="fa-solid fa-angle-down"></i>


          </button>
          <div class="header__action-btn-modal">
                <!-- Before Login -->
                <div  class="header__action-btn-modal-top">
                <div class="header__action-btn-modal-top-content">
                    <h4 class="header__action-btn-modal-top-title">
                    Mua thì hời, bán thì lời
                    </h4>
                    <p class="header__action-btn-modal-top-desc">
                    Đăng nhập cái đã!
                    </p>
                </div>
                <div class="header__action-btn-modal-top-image">
                    <img
                    src="{{ asset('images/client/happy_right.webp') }}"
                    alt=""
                    class="header__action-btn-modal-top-img"
                    />
                </div>
                <div class="header__action-btn-modal-top-action">
                    <a href="" class="header__action-btn-modal-top-action-register">
                    Đăng kí
                    </a>

                    <a href="" class="header__action-btn-modal-top-action-login">
                    Đăng nhập
                    </a>
                </div>
                </div>
                <!-- After Login -->
                <div style="display: none;" class="header__action-btn-modal-top-after">
                    <div class="header__action-btn-modal-top-after-image">
                    <img
                        src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                        alt=""
                        class="header__action-btn-modal-top-after-img"
                    />
                    <i class="fa-solid fa-pen"></i>
                    </div>
                    <h3 class="header__action-btn-modal-top-after-name">
                        Xuan Trung
                    </h3>
                    <div class="header__action-btn-modal-top-after-desc">
                        <span class="header__action-btn-modal-top-after-desc-1">
                        Người theo dõi 0
                        </span>
                        <span class="header__action-btn-modal-top-after-desc-2">
                        Đang theo dõi 0
                        </span>
                    </div>

                <div class="header__action-btn-top-after">
                    <div class="header__action-btn-top-after-list">
                        <div class="header__action-btn-top-after-item-1">
                        <span>TK Định danh</span>
                        <span>V000000000000000 <i class="fa-solid fa-copy"></i></span>
                        </div>
                        <div class="header__action-btn-top-after-item-2">
                        <span>Đồng Tốt</span>
                        <span>0</span>
                        </div>
                        <a href="" class="header__action-btn-top-after-item-action">Nạp ngay</a>
                    </div>
                </div>
                </div>

                
                <h5 class="header__action-btn-modal-title">Tiện ích</h5>
                <div class="header__action-btn-modal-extensions">
                <ul class="header__action-btn-modal-extensions-list">
                    <li class="header__action-btn-modal-extensions-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/1.svg')}}" alt="" class="header__action-btn-modal-extensions-item-img">
                        <a href="" class="header__action-btn-modal-extensions-link">
                        Tin đăng đã lưu
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-extensions-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/2.svg')}}" alt="" class="header__action-btn-modal-extensions-item-img">
                        <a href="" class="header__action-btn-modal-extensions-link">
                        Tìm kiếm đã lưu
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-extensions-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/3.svg')}}" alt="" class="header__action-btn-modal-extensions-item-img">
                        <a href="" class="header__action-btn-modal-extensions-link">
                        Lịch sử xem tin
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-extensions-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/4.svg')}}" alt="" class="header__action-btn-modal-extensions-item-img">
                        <a href="" class="header__action-btn-modal-extensions-link">
                        Đánh giá từ tôi
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                </ul>
                </div>

                <h5 class="header__action-btn-modal-title">Dịch vụ trả phí</h5>
                <div class="header__action-btn-modal-service">
                <ul class="header__action-btn-modal-service-list">
                    <li class="header__action-btn-modal-service-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/5.svg')}}" alt="" class="header__action-btn-modal-service-item-img">
                        <a href="" class="header__action-btn-modal-service-link">
                        Đồng tốt
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-service-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/6.svg')}}" alt="" class="header__action-btn-modal-service-item-img">
                        <a href="" class="header__action-btn-modal-service-link">
                        Gói PRO
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-service-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/7.svg')}}" alt="" class="header__action-btn-modal-service-item-img">
                        <a href="" class="header__action-btn-modal-service-link">
                        Kênh đối tác
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-service-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/8.svg')}}" alt="" class="header__action-btn-modal-service-item-img">
                        <a href="" class="header__action-btn-modal-service-link">
                        Lịch sử giao dịch
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-service-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/9.svg')}}" alt="" class="header__action-btn-modal-service-item-img">
                        <a href="" class="header__action-btn-modal-service-link">
                        Cửa hàng/ chuyên trang
                        </a>
                    </div>
                    <a
                        href=""
                        class="header__action-btn-modal-service-create-now"
                    >
                        Tạo ngay
                    </a>
                    </li>
                </ul>
                </div>

                <h5 class="header__action-btn-modal-title">Ưu đãi, khuyến mãi</h5>
                <div class="header__action-btn-modal-sale">
                <ul class="header__action-btn-modal-sale-list">
                    <li class="header__action-btn-modal-sale-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/10.svg')}}" alt="" class="header__action-btn-modal-sale-item-img">
                        <a href="" class="header__action-btn-modal-sale-link">
                        Chợ tốt ưu đãi 
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-sale-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/11.svg')}}" alt="" class="header__action-btn-modal-sale-item-img">
                        <a href="" class="header__action-btn-modal-sale-link">
                        Ưu đãi của tôi
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                </ul>
                </div>

                <h5 class="header__action-btn-modal-title">Khác</h5>
                <div class="header__action-btn-modal-other">
                <ul class="header__action-btn-modal-other-list">
                    <li class="header__action-btn-modal-other-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/12.svg')}}" alt="" class="header__action-btn-modal-sale-item-img">
                        <a href="" class="header__action-btn-modal-sale-link">
                        Cài đặt tài khoản 
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-other-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/13.svg')}}" alt="" class="header__action-btn-modal-sale-item-img">
                        <a href="" class="header__action-btn-modal-sale-link">
                        Trợ giúp
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="header__action-btn-modal-other-item">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/14.svg')}}" alt="" class="header__action-btn-modal-sale-item-img">
                        <a href="" class="header__action-btn-modal-sale-link">
                        Đóng góp ý kiến 
                        </a>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <form class="header__action-btn-modal-other-item-action">
                    <div class="wrapper">
                        <img src="{{ asset('images/client/usersIcon/15.svg')}}" alt="" class="header__action-btn-modal-sale-item-img">
                        <button class="header__action-btn-modal-other-logout">
                        Đăng xuất
                        </button>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                    </form>
                </ul>
                </div>
        </div>
        </div>
      </div>
    </header>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/client/store.js') }}"></script>
    </body>
</html>
