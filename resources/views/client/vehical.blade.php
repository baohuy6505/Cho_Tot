@extends('layouts.car') 
@section('title', 'Trang Xe cộ')
@section('content')
<section class="vehicle-category">
      <div class="container">
        <ul class="vehicle-category__list">
          <li class="vehicle-category__item">
            <a href="#" class="vehicle-category__link">
              <img
                src="{{ asset('images/client/Icon-xeCo/oto.png') }}"
                alt="Ô tô"
                class="vehicle-category__img"
              />
              <span class="vehicle-category__text">Ô tô</span>
            </a>
          </li>
          <li class="vehicle-category__item">
            <a href="#" class="vehicle-category__link">
              <img
                src="{{ asset('images/client/Icon-xeCo/xeMay.png') }}"
                alt="Xe máy"
                class="vehicle-category__img"
              />
              <span class="vehicle-category__text">Xe máy</span>
            </a>
          </li>
          <li class="vehicle-category__item">
            <a href="#" class="vehicle-category__link">
              <img
                src="{{ asset('images/client/Icon-xeCo/xeTai.png') }}"
                alt="Xe tải"
                class="vehicle-category__img"
              />
              <span class="vehicle-category__text">Xe tải, xe ben</span>
            </a>
          </li>
          <li class="vehicle-category__item">
            <a href="#" class="vehicle-category__link">
              <img
                src="{{ asset('images/client/Icon-xeCo/xeDien.png') }}"
                alt="Xe điện"
                class="vehicle-category__img"
              />
              <span class="vehicle-category__text">Xe điện</span>
            </a>
          </li>
          <li class="vehicle-category__item">
            <a href="#" class="vehicle-category__link">
              <img
                src="{{ asset('images/client/Icon-xeCo/xeDap.png') }}"
                alt="Xe đạp"
                class="vehicle-category__img"
              />
              <span class="vehicle-category__text">Xe đạp</span>
            </a>
          </li>
          <li class="vehicle-category__item">
            <a href="#" class="vehicle-category__link">
              <img
                src="{{ asset('images/client/Icon-xeCo/phuongTienKhac.png') }}"
                alt="Phương tiện khác"
                class="vehicle-category__img"
              />
              <span class="vehicle-category__text">Phương tiện khác</span>
            </a>
          </li>
          <li class="vehicle-category__item">
            <a href="#" class="vehicle-category__link">
              <img
                src="{{ asset('images/client/Icon-xeCo/phuTungXe.png') }}"
                alt="Phụ tùng xe"
                class="vehicle-category__img"
              />
              <span class="vehicle-category__text">Phụ tùng xe</span>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="products">
      <div class="container">
        <div class="products__top">
          <a href="" class="products__top-link">Dành cho bạn</a>
          <a href="" class="products__top-link">Mới nhất</a>
          <a href="" class="products__top-link">Video</a>
        </div>
        <div class="products__list">
          <!-- Item 1 -->
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>

          <!-- Item 1 -->
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>

          <!-- Item 1 -->
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>

          <!-- Item 1 -->
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
               src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe</h2>
              <div class="products__content-body">
                <p class="products__desc">XIn chao cac ban</p>
                <p class="products__price">30000</p>
                <div class="products__adress-options">
                  <span class="products__address"
                    >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                  >
                  <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 1 -->
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <p class="products__desc">XIn chao cac ban</p>
              <p class="products__price">30000</p>
              <div class="products__adress-options">
                <span class="products__address"
                  >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                >
                <i class="fa-solid fa-ellipsis-vertical"></i>
              </div>
            </div>
          </div>
          <!-- Item 1 -->
          <div class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="{{ asset('images/client/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg') }}"
                alt=""
                class="products__image"
              />
              <div class="products__img-bottom">
                <span class="products__img-bottom-title">Hôm qua</span>
                <span class="products__img-quantity"
                  >4 <i class="fa-solid fa-image"></i>
                </span>
              </div>
            </div>
            <div class="products__content">
              <h2 class="products__title">Hehehehe xin caho tat cac ban nhe</h2>
              <div class="products__content-body">
                <p class="products__desc">XIn chao cac ban</p>
                <p class="products__price">30000</p>
                <div class="products__adress-options">
                  <span class="products__address"
                    >Tam Ky Tam Ky Tam Ky Tam KyTam Ky</span
                  >
                  <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="products__continute">Xem thêm</div>
      </div>
    </section>
    <section class="official-stores">
      <div class="container">
        <div class="official-stores__header">
          <h2 class="official-stores__heading">
            Đặt Xe Online <span class="text-red">CHÍNH HÃNG</span>
          </h2>
          <ul class="official-stores__benefits">
            <li class="official-stores__benefit-item">
              <i class="fa-solid fa-circle-check"></i> Đổi trả miễn phí
            </li>
            <li class="official-stores__benefit-item">
              <i class="fa-solid fa-circle-check"></i> Hàng chính hãng 100%
            </li>
            <li class="official-stores__benefit-item">
              <i class="fa-solid fa-circle-check"></i> Hỗ trợ mua trả góp
            </li>
          </ul>
        </div>

        <div class="official-stores__list">
          <div class="store-card">
            <div class="store-card__header">
              <div class="store-card__info">
                <img
                  img src="{{ asset('images/client/Icon-xeCo/logo-vinfast.png') }}"
                  alt="Logo"
                  class="store-card__logo"
                />
                <span class="store-card__name">VinFast Official Store</span>
                <i class="fa-solid fa-circle-check store-card__verify"></i>
              </div>
              <i class="fa-solid fa-chevron-right store-card__arrow"></i>
            </div>

            <div class="store-card__banner">
              <img
               img src="{{ asset('images/client/Icon-xeCo/datXeOline1.jpg') }}"
                alt="VinFast Banner"
              />
            </div>

            <div class="store-card__sub-list">
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Vinfast-hong') }}"
                  alt="VinFast Moto"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">VinFast Motio</h4>
                <div class="store-card__sub-price">10.560.000 đ</div>
              </div>
              <div class="store-card__sub-item">
                <img
                 src="{{ asset('images/client/Icon-xeCo/Vinfast-xam') }}"
                  alt="VinFast Feliz"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">VinFast Feliz S</h4>
                <div class="store-card__sub-price">19.712.000 đ</div>
              </div>
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Vinfast-den') }}"
                  alt="VinFast Evo"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">VinFast Evo 200</h4>
                <div class="store-card__sub-price">15.664.000 đ</div>
              </div>
            </div>
          </div>

          <div class="store-card">
            <div class="store-card__header">
              <div class="store-card__info">
                <img
                  img src="{{ asset('images/client/Icon-xeCo/logo-honda.jpg') }}"
                  alt="Logo"
                  class="store-card__logo"
                />
                <span class="store-card__name">Head Phát Tiến</span>
                <i class="fa-solid fa-circle-check store-card__verify"></i>
              </div>
              <i class="fa-solid fa-chevron-right store-card__arrow"></i>
            </div>

            <div class="store-card__banner">
              <img
                src="{{ asset('images/client/Icon-xeCo/datXeonline2.jpg') }}"
                alt="Honda Banner"
              />
            </div>

            <div class="store-card__sub-list">
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Honda-trang') }}"
                  alt="Honda"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">Xe máy Honda...</h4>
                <div class="store-card__sub-price">20.050.000 đ</div>
              </div>
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Honda-den') }}"
                  alt="Honda"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">Xe máy Honda...</h4>
                <div class="store-card__sub-price">20.440.000 đ</div>
              </div>
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Honda-trangden') }}"
                  alt="Honda"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">Xe máy Honda...</h4>
                <div class="store-card__sub-price">19.640.000 đ</div>
              </div>
            </div>
          </div>

          <div class="store-card">
            <div class="store-card__header">
              <div class="store-card__info">
                <img
                  src="{{ asset('images/client/Icon-xeCo/logo-selexMoto.png') }}"
                  alt="Logo"
                  class="store-card__logo"
                />
                <span class="store-card__name">Selex Motors</span>
                <i class="fa-solid fa-circle-check store-card__verify"></i>
              </div>
              <i class="fa-solid fa-chevron-right store-card__arrow"></i>
            </div>

            <div class="store-card__banner">
              <img
                src="{{ asset('images/client/Icon-xeCo/datXeOnline3.jpg') }}"
                alt="Selex Banner"
              />
            </div>

            <div class="store-card__sub-list">
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Selex-xanh') }}"
                  alt="Selex"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">Xe điện Selex...</h4>
                <div class="store-card__sub-price">32.890.000 đ</div>
              </div>
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Selex-dien') }}"
                  alt="Selex"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">Xe điện Selex...</h4>
                <div class="store-card__sub-price">30.140.000 đ</div>
              </div>
              <div class="store-card__sub-item">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Selex-dien2') }}"
                  alt="Selex"
                  class="store-card__sub-img"
                />
                <h4 class="store-card__sub-name">Xe điện Selex...</h4>
                <div class="store-card__sub-price">27.800.000 đ</div>
              </div>
            </div>
          </div>
        </div>
        <div class="official-stores__footer">
          <button class="official-stores__btn">Xem thêm cửa hàng</button>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="img-introduce">
          <div id="image-container">
            <div id="image-slider">
              <img src="{{ asset('images/client/Icon-xeCo/gioithieu1.webp') }}" alt="" />
              <img src="{{ asset('images/client/Icon-xeCo/gioithieu2.webp') }}" alt="" />
              <img src="{{ asset('images/client/Icon-xeCo/gioithieu3.webp') }}" alt="" />
              <img src="{{ asset('images/client/Icon-xeCo/gioithieu4.webp') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="featured-stores">
      <div class="container">
        <div class="featured-stores__header">
          <h2 class="featured-stores__heading">Cửa hàng xe nổi bật</h2>

          <div class="featured-stores__filters">
            <button
              class="featured-stores__filter-btn featured-stores__filter-btn--active"
            >
              Tất cả
            </button>
            <button class="featured-stores__filter-btn">Ô tô</button>
            <button class="featured-stores__filter-btn">Xe máy</button>
            <button class="featured-stores__filter-btn">Xe tải, xe ben</button>
            <button class="featured-stores__filter-btn">Xe điện</button>
            <button class="featured-stores__filter-btn">Xe đạp</button>
            <button class="featured-stores__filter-btn">Phụ tùng</button>
          </div>
        </div>

        <div class="featured-stores__list-wrapper">
          <div class="featured-stores__list">
            <article class="featured-card">
              <div class="featured-card__cover">
                <img
                src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-B1.webp') }}"
                  alt="Cover"
                  class="featured-card__cover-img"
                />
                <div class="featured-card__logo-box">
                  <img
                    src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-A1.webp') }}"
                    alt="Logo"
                    class="featured-card__logo-img"
                  />
                </div>
              </div>

              <div class="featured-card__info">
                <h3 class="featured-card__name">
                  TONG MOTOR
                  <i
                    class="fa-solid fa-circle-check featured-card__verified"
                  ></i>
                </h3>

                <div class="featured-card__rating">
                  <i class="fa-solid fa-star featured-card__star"></i>
                  <span class="featured-card__score">3.7</span>
                  <span class="featured-card__review-count">(61 đánh giá)</span>
                </div>

                <div class="featured-card__stats">
                  <span class="featured-card__stat-item">Đang bán: 452</span>
                  <span class="featured-card__divider">|</span>
                  <span class="featured-card__stat-item">Đã bán: 1</span>
                </div>

                <div class="featured-card__address">
                  <i class="fa-solid fa-location-dot"></i> Quận Cầu Giấy, Hà Nội
                </div>

                <button class="featured-card__follow-btn">Theo dõi</button>
              </div>
            </article>

            <article class="featured-card">
              <div class="featured-card__cover">
                <img
                  src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-B2.webp') }}"
                  alt="Cover"
                  class="featured-card__cover-img"
                />
                <div class="featured-card__logo-box">
                  <img
                    src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-A2.webp') }}"
                    alt="Logo"
                    class="featured-card__logo-img"
                  />
                </div>
              </div>
              <div class="featured-card__info">
                <h3 class="featured-card__name">
                  TÂN TỨ QUÝ
                  <i
                    class="fa-solid fa-circle-check featured-card__verified"
                  ></i>
                </h3>
                <div class="featured-card__rating">
                  <i class="fa-solid fa-star featured-card__star"></i>
                  <span class="featured-card__score">5.0</span>
                  <span class="featured-card__review-count">(4 đánh giá)</span>
                </div>
                <div class="featured-card__stats">
                  <span class="featured-card__stat-item">Đang bán: 408</span>
                  <span class="featured-card__divider">|</span>
                  <span class="featured-card__stat-item">Đã bán: 221</span>
                </div>
                <div class="featured-card__address">
                  <i class="fa-solid fa-location-dot"></i> Quận 1, Tp Hồ Chí
                  Minh
                </div>
                <button class="featured-card__follow-btn">Theo dõi</button>
              </div>
            </article>

            <article class="featured-card">
              <div class="featured-card__cover">
                <img
                  src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-B3.webp') }}"
                  alt="Cover"
                  class="featured-card__cover-img"
                />
                <div class="featured-card__logo-box">
                  <img
                    src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-A3.webp') }}"
                    alt="Logo"
                    class="featured-card__logo-img"
                  />
                </div>
              </div>
              <div class="featured-card__info">
                <h3 class="featured-card__name">
                  Cửa hàng Tuanduy
                  <i
                    class="fa-solid fa-circle-check featured-card__verified"
                  ></i>
                </h3>
                <div class="featured-card__rating">
                  <i class="fa-solid fa-star featured-card__star"></i>
                  <span class="featured-card__score">4.6</span>
                  <span class="featured-card__review-count"
                    >(284 đánh giá)</span
                  >
                </div>
                <div class="featured-card__stats">
                  <span class="featured-card__stat-item">Đang bán: 394</span>
                  <span class="featured-card__divider">|</span>
                  <span class="featured-card__stat-item">Đã bán: 9774</span>
                </div>
                <div class="featured-card__address">
                  <i class="fa-solid fa-location-dot"></i> Quận Tân Phú, Tp Hồ
                  Chí Minh
                </div>
                <button class="featured-card__follow-btn">Theo dõi</button>
              </div>
            </article>

            <article class="featured-card">
              <div class="featured-card__cover">
                <img
                  src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-B4.webp') }}"
                  alt="Cover"
                  class="featured-card__cover-img"
                />
                <div class="featured-card__logo-box">
                  <img
                    src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-A4.webp') }}"
                    alt="Logo"
                    class="featured-card__logo-img"
                  />
                </div>
              </div>
              <div class="featured-card__info">
                <h3 class="featured-card__name">
                  Xe Máy Hưng Từ
                  <i
                    class="fa-solid fa-circle-check featured-card__verified"
                  ></i>
                </h3>
                <div class="featured-card__rating">
                  <i class="fa-solid fa-star featured-card__star"></i>
                  <span class="featured-card__score">4.3</span>
                  <span class="featured-card__review-count"
                    >(271 đánh giá)</span
                  >
                </div>
                <div class="featured-card__stats">
                  <span class="featured-card__stat-item">Đang bán: 285</span>
                  <span class="featured-card__divider">|</span>
                  <span class="featured-card__stat-item">Đã bán: 40</span>
                </div>
                <div class="featured-card__address">
                  <i class="fa-solid fa-location-dot"></i> Quận 11, Tp Hồ Chí
                  Minh
                </div>
                <button class="featured-card__follow-btn">Theo dõi</button>
              </div>
            </article>
            <article class="featured-card">
              <div class="featured-card__cover">
                <img
                  src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-B5.webp') }}"
                  alt="Cover"
                  class="featured-card__cover-img"
                />
                <div class="featured-card__logo-box">
                  <img
                    src="{{ asset('images/client/Icon-xeCo/CuaHangXeNoiBat-A5.webp') }}"
                    alt="Logo"
                    class="featured-card__logo-img"
                  />
                </div>
              </div>
              <div class="featured-card__info">
                <h3 class="featured-card__name">
                  Xe Máy Hưng Từ
                  <i
                    class="fa-solid fa-circle-check featured-card__verified"
                  ></i>
                </h3>
                <div class="featured-card__rating">
                  <i class="fa-solid fa-star featured-card__star"></i>
                  <span class="featured-card__score">4.3</span>
                  <span class="featured-card__review-count"
                    >(271 đánh giá)</span
                  >
                </div>
                <div class="featured-card__stats">
                  <span class="featured-card__stat-item">Đang bán: 285</span>
                  <span class="featured-card__divider">|</span>
                  <span class="featured-card__stat-item">Đã bán: 40</span>
                </div>
                <div class="featured-card__address">
                  <i class="fa-solid fa-location-dot"></i> Quận 11, Tp Hồ Chí
                  Minh
                </div>
                <button class="featured-card__follow-btn">Theo dõi</button>
              </div>
            </article>
          </div>
          <button class="featured-stores__nav-btn">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <div class="featured-stores__footer">
          <button class="featured-stores__view-more">
            Xem thêm cửa hàng xe
          </button>
        </div>
      </div>
    </section>
    <section class="vehicle-info">
      <div class="container">
        <div class="vehicle-info__header">
          <h2 class="vehicle-info__heading">Thông tin các dòng xe</h2>
          <div class="vehicle-info__tabs">
            <button class="vehicle-info__tab vehicle-info__tab--active">
              Ô tô
            </button>
            <button class="vehicle-info__tab">Xe máy</button>
          </div>
        </div>

        <div class="vehicle-info__list-wrapper">
          <div class="vehicle-info__list">
            <article class="model-card">
              <div class="model-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Vinfast-F3.webp') }}"
                  alt="VinFast VF3"
                  class="model-card__img"
                />
              </div>
              <div class="model-card__body">
                <h3 class="model-card__name">VinFast VF3</h3>
                <span class="model-card__label">Giá xe mới</span>
                <div class="model-card__price">299 triệu</div>
              </div>
              <div class="model-card__footer">
                <a href="#" class="model-card__link">Xem 430+ Tin đăng</a>
              </div>
            </article>

            <article class="model-card">
              <div class="model-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Vinfast-VF5.webp') }}"
                  alt="VinFast VF5"
                  class="model-card__img"
                />
              </div>
              <div class="model-card__body">
                <h3 class="model-card__name">VinFast VF5</h3>
                <span class="model-card__label">Giá xe mới</span>
                <div class="model-card__price">529 triệu</div>
              </div>
              <div class="model-card__footer">
                <a href="#" class="model-card__link">Xem 260+ Tin đăng</a>
              </div>
            </article>

            <article class="model-card">
              <div class="model-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Vinfast-VF6.webp') }}"
                  alt="VinFast VF6"
                  class="model-card__img"
                />
              </div>
              <div class="model-card__body">
                <h3 class="model-card__name">VinFast VF6</h3>
                <span class="model-card__label">Giá xe mới</span>
                <div class="model-card__price">689 triệu - 749 triệu</div>
              </div>
              <div class="model-card__footer">
                <a href="#" class="model-card__link">Xem 200+ Tin đăng</a>
              </div>
            </article>

            <article class="model-card">
              <div class="model-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/Vinfast-Sealion.webp') }}"
                  alt="BYD Sealion 6"
                  class="model-card__img"
                />
              </div>
              <div class="model-card__body">
                <h3 class="model-card__name">BYD Sealion 6</h3>
                <span class="model-card__label">Giá xe mới</span>
                <div class="model-card__price">799 triệu - 899 triệu</div>
              </div>
              <div class="model-card__footer">
                <a href="#" class="model-card__link">Xem 25+ Tin đăng</a>
              </div>
            </article>

            <article class="model-card">
              <div class="model-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/BYD-M6.webp') }}"
                  alt="BYD M6"
                  class="model-card__img"
                />
              </div>
              <div class="model-card__body">
                <h3 class="model-card__name">BYD M6</h3>
                <span class="model-card__label">Giá xe mới</span>
                <div class="model-card__price">756 triệu</div>
              </div>
              <div class="model-card__footer">
                <a href="#" class="model-card__link">Xem 20+ Tin đăng</a>
              </div>
            </article>
          </div>

          <button class="vehicle-info__nav-btn">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </section>
    <section class="qa-section">
      <div class="container">
        <div class="qa-section__header">
          <h2 class="qa-section__heading">Hỏi đáp mua xe</h2>

          <div class="qa-section__tags">
            <button class="qa-section__tag qa-section__tag--active">
              Bài viết nổi bật
            </button>
            <button class="qa-section__tag">Tư vấn kinh nghiệm</button>
            <button class="qa-section__tag">Chọn Xe</button>
            <button class="qa-section__tag">Hiểu Về Xe</button>
          </div>
        </div>

        <div class="qa-section__list-wrapper">
          <div class="qa-section__list">
            <article class="qa-card">
              <div class="qa-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/HoiDap1.webp') }}"
                  alt="VinFast Scooter"
                  class="qa-card__img"
                />
              </div>
              <div class="qa-card__body">
                <h3 class="qa-card__title">
                  2 mẫu xe máy điện VinFast mới nhất không cần bằng lái
                </h3>
                <p class="qa-card__desc">
                  VinFast vừa khuấy động thị trường với hai mẫu xe máy điện
                  VinFast mới nhất. Khám phá ngay...
                </p>
              </div>
            </article>

            <article class="qa-card">
              <div class="qa-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/HoiDap2.webp') }}"
                  alt="Tiet kiem xang"
                  class="qa-card__img"
                />
              </div>
              <div class="qa-card__body">
                <h3 class="qa-card__title">
                  Top các mẫu xe ô tô tiết kiệm xăng nhất 2025
                </h3>
                <p class="qa-card__desc">
                  Tiêu chí tiết kiệm nhiên liệu ngày càng được quan tâm. Xem
                  ngay top mẫu ô tô tiết kiệm...
                </p>
              </div>
            </article>

            <article class="qa-card">
              <div class="qa-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/HoiDap3.webp') }}"
                  alt="Xe ngap nuoc"
                  class="qa-card__img"
                />
              </div>
              <div class="qa-card__body">
                <h3 class="qa-card__title">
                  Xe ô tô ngập nước: Cách xử lý hiệu quả cho từng...
                </h3>
                <p class="qa-card__desc">
                  Xe ô tô ngập nước phải làm sao? Tìm hiểu các mức độ ngập và
                  cách xử lý oto ngập nước...
                </p>
              </div>
            </article>

            <article class="qa-card">
              <div class="qa-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/HoiDap4.webp') }}"
                  alt="iPhone vs Car"
                  class="qa-card__img"
                />
              </div>
              <div class="qa-card__body">
                <h3 class="qa-card__title">
                  So sánh giá iPhone 17 và xe máy điện cùng tầm
                </h3>
                <p class="qa-card__desc">
                  So sánh giá iPhone 17 với các mẫu xe máy điện cùng tầm giá.
                  Khám phá giá trị thực tế của...
                </p>
              </div>
            </article>

            <article class="qa-card">
              <div class="qa-card__img-box">
                <img
                  src="{{ asset('images/client/Icon-xeCo/HoiDap5.webp') }}"
                  alt="SUV 5 cho"
                  class="qa-card__img"
                />
              </div>
              <div class="qa-card__body">
                <h3 class="qa-card__title">
                  Top 15 dòng xe SUV 5 chỗ đáng mua nhất 2025
                </h3>
                <p class="qa-card__desc">
                  Cập nhật top xe SUV 5 chỗ đáng mua nhất 2025. Xem 15 mẫu
                  SUV/CUV 5 chỗ gầm cao...
                </p>
              </div>
            </article>
          </div>

          <button class="qa-section__nav-btn">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>

        <div class="qa-section__footer">
          <button class="qa-section__btn">Xem thêm</button>
        </div>
      </div>
    </section>
    <section class="seo-intro">
      <div class="container">
        <h2 class="seo-intro__heading">
          Chợ Tốt Xe - Chuyên trang mua bán xe trực tuyến hàng đầu Việt Nam
        </h2>
        <div class="seo-intro__content">
          <p class="seo-intro__text">
            Ra mắt năm 2017 với khởi điểm là chuyên trang mua bán xe cũ trực
            tuyến, Chợ Tốt Xe đã phát triển thành nền tảng giao dịch xe uy tín,
            là cầu nối tin cậy giữa người mua và người bán trên toàn quốc. Với
            lợi thế “Dễ tìm – Dễ mua”, Chợ Tốt Xe không ngừng hoàn thiện dịch vụ
            với thông tin minh bạch, quy trình đăng tin đơn giản và khả năng tìm
            xe nhanh chóng, đúng nhu cầu. Chợ Tốt Xe sở hữu hơn 16 triệu lượt
            truy cập và 120.000 tin đăng mỗi tháng trên toàn quốc với đa dạng
            danh mục: ô tô, xe máy, xe điện, xe tải, xe đạp, phụ tùng và nhiều
            loại phương tiện khác, đáp ứng nhu cầu mua bán xe của người dùng.
          </p>

          <ul class="seo-intro__list">
            <li class="seo-intro__item">
              <strong>Xe ô tô:</strong> Trên Chợ Tốt Xe, tin đăng xe ô tô mới và
              cũ ngày càng tăng trưởng về số lượng và chất lượng. Người dùng dễ
              dàng tìm thấy mẫu xe ưng ý đến từ các hãng nổi tiếng như Toyota,
              Kia, Ford, Hyundai, Mazda, Mitsubishi,... Các mẫu xe gầm cao như
              xe SUV, CUV, xe MPV ngày càng thống trị thị trường ô tô Việt Nam.
              Xu hướng mua bán <a href="#">ô tô điện</a> hay hybrid cũng là một
              xu hướng tiêu dùng nổi bật đang dần lên ngôi trong những năm gần
              đây.
            </li>
            <li class="seo-intro__item">
              <strong>Xe máy:</strong> Thị trường xe máy tại Việt Nam đang phát
              triển mạnh mẽ với sự đa dạng về mẫu mã, phân khúc và thương hiệu,
              đáp ứng nhu cầu di chuyển ngày càng cao của người tiêu dùng.
            </li>
          </ul>
        </div>

        <button class="seo-intro__btn">Xem thêm</button>
      </div>
    </section>
    <section class="popular-keywords">
      <div class="container">
        <h2 class="popular-keywords__heading">Các từ khoá phổ biến</h2>

        <div class="popular-keywords__content">
          <ul class="popular-keywords__list">
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Vios</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe VF5</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe CX5</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Honda City</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link"
                >Giá xe Hyundai Accent</a
              >
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Ford Ranger</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Kia Sonet</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Vision</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Future</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Air Blade</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Vinfast Evo 200</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Dat Bike Quantum</a>
            </li>
          </ul>

          <ul class="popular-keywords__list">
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Innova</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe VF3</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe CX8</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Honda Civic</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link"
                >Giá xe Hyundai Creta</a
              >
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link"
                >Giá xe Ford Territory</a
              >
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Kia Morning</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe SH</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Wave</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Sirius</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Vinfast Motio</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Honda Icon e</a>
            </li>
          </ul>

          <ul class="popular-keywords__list">
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Fortuner</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe VF6</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Mazda 3</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe CRV</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe i10</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Xpander</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Kia Carens</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe SH Mode</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Lead</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Exciter</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Vinfast Klara S</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Yadea i8</a>
            </li>
          </ul>

          <ul class="popular-keywords__list">
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Yaris Cross</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe VF7</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Mazda 2</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe HRV</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Ford Everest</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Xforce</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Kia Carnival</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Vario</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Vespa</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Giá xe Grande</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Vinfast Theon S</a>
            </li>
            <li class="popular-keywords__item">
              <a href="#" class="popular-keywords__link">Yadea XBull</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="banner-download">
      <div class="banner-content">
        <div class="banner-download__content">
          <h2 class="banner-download__title">Mua thì hời, bán thì lời</h2>
          <p class="banner-download__desc">Tải app ngay!</p>

          <div class="banner-download__action">
            <a href="" class="banner-download__action-link">
              <img
                src="{{ asset('images/client/appstore-dowload.webp') }}"
                alt=""
                class="banner-download__action-img"
              />
            </a>
            <a href="" class="banner-download__action-link">
              <img
                src="{{ asset('images/client/googleplay-dowload.webp') }}"
                alt=""
                class="banner-download__action-img"
              />
            </a>
          </div>
        </div>
      </div>
    </section>
    @endsection