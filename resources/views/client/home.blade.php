@extends('layouts.app')
@section('title', 'Trang Chủ Client')
@section('content')
    <section class="options">
      <div class="container">
        <ul class="options__list">
          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/1000.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Bất động sản
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op2.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Xe cộ
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op3.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Thú cưng
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op4.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Đồ gia dụng, nội thất, cây cảnh
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op5.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Giải trí, Thể thao, Sở thích
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op6.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Mẹ và bé
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op7.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Dịch vụ, Du lịch
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op8.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Cho tặng miễn phí
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op9.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Việc làm
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op10.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Đồ điện tử
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op11.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Tủ lanh, máy lạnh, máy giặt
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op12.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Đồ dùng văn phòng, công nông nghiệp
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op13.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Thời trang , đồ dùng cá nhân
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op14.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Đồ ăn, thực phẩm và các loại khác
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op15.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Dịch vụ chăm sóc nhà cửa
            </a>
          </li>

          <li class="options__item">
            <a href="" class="options__link">
              <div class="option__img-wrap">
                <img
                  src="{{ asset('images/client/options/op16.webp') }}"
                  alt=""
                  class="option__item-img"
                />
              </div>
              Tất cả danh mục
            </a>
          </li>
        </ul>

        <div class="option__bottom-list">
          <div class="option__bottom-item">
            <p>Tin đã lưu</p>
          </div>
          <div class="option__bottom-item">
            <p>Tìm kiếm đã lưu</p>
          </div>
          <div class="option__bottom-item">
            <p>Tin đã xem</p>
          </div>
          <div class="option__bottom-item">
            <p>Tin đăng của bạn</p>
          </div>
          <div class="option__bottom-item affter">
            <p>Tin nhắn</p>
          </div>
        </div>
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
          <a href="./details.html" class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="./assets/img/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg"
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
          </a>

          <!-- Item 1 -->
          <a href="./details.html" class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="./assets/img/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg"
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
          </a>

          <!-- Item 1 -->
          <a href="./details.html" class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="./assets/img/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg"
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
          </a>

          <!-- Item 1 -->
          <a href="./details.html" class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="./assets/img/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg"
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
          </a>

          <!-- Item 1 -->
          <a href="./details.html" class="products__item">
            <i class="fa-regular fa-heart"></i>
            <div class="products__img">
              <img
                src="./assets/img/04cba6c3b5fca452053febc85c22ef2e-2961015904166203709.jpg"
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
          </a>
        </div>
        <div class="products__continute">Xem thêm</div>
      </div>
    </section>
    <section class="news">
      <div class="container">
        <ul class="news__list">
          <h4 class="new__title">
            Chợ Tốt - Chợ Mua Bán, Rao Vặt Trực Tuyến Hàng Đầu Của Người Việt
          </h4>
          <li class="new__item">
            Chợ Tốt chính thức gia nhập thị trường Việt Nam vào đầu năm 2012,
            với mục đích tạo ra cho bạn một kênh rao vặt trung gian, kết nối
            người mua với người bán lại với nhau bằng những giao dịch cực kỳ đơn
            giản, tiện lợi, nhanh chóng, an toàn, mang đến hiệu quả bất ngờ.
          </li>
          <li class="new__item">
            Đến nay, Chợ Tốt tự hào là Website rao vặt được ưa chuộng hàng đầu
            Việt Nam. Hàng ngàn món hời từ Bất động sản, Nhà cửa, Xe cộ, Đồ điện
            tử, Thú cưng, Vật dụng cá nhân... đến tìm việc làm, thông tin tuyển
            dụng, các dịch vụ - du lịch được đăng tin, rao bán trên Chợ Tốt.
          </li>
          <li class="new__item">
            Với Chợ Tốt, bạn có thể dễ dàng mua bán, trao đổi bất cứ một loại
            mặt hàng nào, dù đó là đồ cũ hay đồ mới với nhiều lĩnh vực:
          </li>
          <li class="new__item">
            Bất động sản: Cho thuê, Mua bán nhà đất, căn hộ chung cư, văn phòng
            mặt bằng kinh doanh, phòng trọ đa dạng về diện tích, vị trí
          </li>
          <li class="new__item">
            Phương tiện đi lại: Mua bán ô tô, xe máy có độ bền cao, giá cả hợp
            lý, giấy tờ đầy đủ.
          </li>
          <li class="new__item">
            Đồ dùng cá nhân: Quần áo, giày dép, túi xách, đồng hồ... đa phong
            cách, hợp thời trang.
          </li>
          <li class="new__item">
            Đồ điện tử: Điện thoại di động, máy tính bảng, laptop, tivi, loa,
            amply...; đồ điện gia dụng: máy giặt, tủ lạnh, máy lạnh điều hòa...
            với rất nhiều nhãn hiệu, kích thước khác nhau.
          </li>
          <li class="new__item">
            Vật nuôi, thú cưng đa chủng loại: Gà, chó (chó phốc sóc, chó pug,
            chó poodle...), chim, mèo (mèo anh lông ngắn, mèo munchkin...), cá,
            hamster,... giá cực tốt.
          </li>
          <li class="new__item">
            Tuyển dụng, việc làm: Hàng triệu công việc hấp dẫn, phù hợp tại Việc
            Làm Tốt - Kênh tuyển dụng hiệu quả, uy tín được phát triển bởi Chợ
            Tốt.
          </li>
          <li class="new__item">
            Dịch vụ, du lịch: Khách sạn, vé máy bay, vé tàu, vé xe, tour du lịch
            và các voucher du lịch... uy tín, chất lượng.
          </li>
          <li class="new__item">
            Đồ ăn, thực phẩm: Các món ăn được chế biến thơm ngon, hấp dẫn, thực
            phẩm tươi sống, an toàn & giá cả hợp lý.
          </li>
          <li class="new__item">
            Và còn rất nhiều mặt hàng khác nữa đã và đang được rao bán tại Chợ
            Tốt.
          </li>
          <li class="new__item">
            Mỗi người trong chúng ta đều có những sản phẩm đã qua sử dụng và
            không cần dùng tới nữa. Vậy còn chần chừ gì nữa mà không để nó trở
            nên giá trị hơn với người khác. Rất đơn giản, bạn chỉ cần chụp hình
            lại, mô tả cụ thể về sản phẩm và sử dụng ứng dụng Đăng tin miễn phí
            của Chợ Tốt là đã có thể đến gần hơn với người cần nó.
          </li>
          <li class="new__item">
            Không những thế, website chotot.com còn cung cấp cho bạn thông tin
            về giá cả các mặt hàng để bạn có thể tham khảo. Đồng thời, thông qua
            Blog kinh nghiệm, Chợ Tốt sẽ tư vấn, chia sẻ cho bạn những thông tin
            bổ ích, bí quyết, mẹo vặt giúp bạn có những giao dịch mua bán an
            toàn, đảm bảo. Chợ Tốt cũng sẵn sàng hỗ trợ bạn trong mọi trường hợp
            cần thiết.
          </li>
          <li class="new__item">
            Chúc các bạn có những trải nghiệm mua bán tuyệt vời trên Chợ Tốt.
          </li>
        </ul>
        <span class="new__action">Mở rộng</span>
      </div>
    </section>
    <section class="key">
      <div class="container">
        <h4 class="key__title">Các từ khóa phổ biến</h4>
        <div class="key__lists">
          <ul class="key__list">
            <li class="key__item">iPhone 12</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
          </ul>

          <ul class="key__list">
            <li class="key__item">iPhone 12</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
          </ul>

          <ul class="key__list">
            <li class="key__item">iPhone 12</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
          </ul>

          <ul class="key__list">
            <li class="key__item">iPhone 12</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
            <li class="key__item">iPhone 14 Pro Max</li>
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
                src="./assets/img/appstore-dowload.webp"
                alt=""
                class="banner-download__action-img"
              />
            </a>

            <a href="" class="banner-download__action-link">
              <img
                src="./assets/img/googleplay-dowload.webp"
                alt=""
                class="banner-download__action-img"
              />
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection