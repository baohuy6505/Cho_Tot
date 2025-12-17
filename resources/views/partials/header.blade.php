<header class="header" id="header">

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

        <!-- Logo -->
        <img src="{{ asset('images/client/logo.png')}}" alt="" class="header__left-img" />

        <!-- Dành cho người bán hàng -->
        <div class="header__left-title"
          >Dành cho người bán <i class="fa-solid fa-angle-down"></i>
          <div class="header__left-title-modal">
            <ul class="header__left-title-modal-list">
              <li class="header__left-title-modal-item">
                <img src="{{ asset('images/client/QuanlyTin/qly-tin.svg')}}" alt="" class="header__left-title-modal-img">
                <a href="" class="header__left-title-modal-link">Quản lí tin</a>
              </li>
              <li class="header__left-title-modal-item">
                <img src="{{ asset('images/client/QuanlyTin/goi-pro.svg')}}" alt="" class="header__left-title-modal-img">
                <a href="" class="header__left-title-modal-link">Gói Pro</a>
              </li>
              <li class="header__left-title-modal-item">
                <img src="{{ asset('images/client/QuanlyTin/shield-check.svg')}}" alt="" class="header__left-title-modal-img">
                <a href="" class="header__left-title-modal-link"
                  >Dành cho đối tác</a
                >
              </li>
            </ul>
          </div>
        </div>

        <!-- Chọn khu vực hiện ra khi cuộn trang -->
        <div class="header__address">
          <i class="fa-solid fa-location-dot"></i><span>Đà Nẵng</span
          ><i class="fa-solid fa-sort-down"></i>
          <!-- Modal Khu vực -->
          <div class="header__form-adress-modal">
            <h4 class="header__form-adress-modal-title">Khu vực</h4>
            <div class="header__form-adress-modal-address">
              <div class="header__form-adress-modal-conscious">
                <div class="header__form-adress-modal-conscious-content">
                  <p class="header__form-adress-modal-conscious-title">
                    Chọn tỉnh thành
                  </p>
                  <p class="header__form-adress-modal-conscious-desc">Hà Nội</p>
                </div>

                <i class="fa-solid fa-sort-down"></i>
              </div>
              <div class="header__form-adress-modal-district">
                <p class="header__form-adress-modal-district-title">
                  Chọn quận huyện
                </p>
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <button class="header__form-adress-modal-action">Áp dụng</button>

            <!-- Modal phụ cho khu vực -->
            <div class="header__form-adress-sub-modal-conscious">
              <i class="fa-solid fa-arrow-left icon-conscious-header"></i>
              <h5 class="header__form-adress-sub-modal-conscious-title">
                Tỉnh thành
              </h5>
              <div class="header__form-adress-sub-modal-conscious-input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input
                  type="text"
                  placeholder="Tìm tỉnh thành"
                  class="header__form-adress-sub-modal-conscious-inp"
                />
              </div>
              <div
                class="header__form-adress-sub-modal-conscious-container-list"
              >
                <ul class="header__form-adress-sub-modal-conscious-list">
                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text">Tất cả danh mục</span>
                      <input id="category" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-header-address"
                        >Tp Hồ Chí Minh</span
                      >
                      <input id="category1" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-header-address"
                        >Hà Nội</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-header-address"
                        >Đà Nẵng</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-header-address"
                        >Cần Thơ</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-header-address"
                        >Bình Dương</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-header-address"
                        >An Giang</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-header-address"
                        >Bà Rịa - Vũng Tàu</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Modal phụ cho khu vực -->
            <div class="header__form-adress-sub-modal-district">
              <i class="fa-solid fa-arrow-left icon-district-header"></i>
              <h5 class="header__form-adress-sub-modal-district-title">
                Quận huyện
              </h5>
              <div class="header__form-adress-sub-modal-district-input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input
                  type="text"
                  placeholder="Tìm tỉnh thành"
                  class="header__form-adress-sub-modal-district-inp"
                />
              </div>
              <div
                class="header__form-adress-sub-modal-district-container-list"
              >
                <ul class="header__form-adress-sub-modal-district-list">
                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text">Tất cả</span>
                      <input id="category" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-header-address"
                        >Quận Cẩm Lệ</span
                      >
                      <input id="category1" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-header-address"
                        >Quận Hải Châu</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-header-address"
                        >Quận Liên Chiểu</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-header-address"
                        >Quận Ngũ Hành Sơn</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-header-address"
                        >Quận Sơn Trà</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-header-address"
                        >Quận Thanh Khê</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="header__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-header-address"
                        >Quận Hòa Vang</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        
      </div>

      <!-- Thanh NavBar -->
      <nav class="navbar">
        <ul class="navbar__list">
            <li class="navbar__item">
                <a href="./index.html" class="navbar__item-link">Chợ tốt</a>
            </li>
            <li class="navbar__item">
                <a href="" class="navbar__item-link">Xem cộ</a>
            </li>
            <li class="navbar__item">
                <a href="" class="navbar__item-link">Bất động sản</a>
            </li>
            <li class="navbar__item">
                <a href="" class="navbar__item-link">Việc làm</a>
            </li>
        </ul>
    </nav>

      <!-- Ô nhập liệu hiện khi cuộn -->
      <div class="header__input">
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
                <i class="fa-regular fa-heart"></i>
              </button>
              <button class="header__action-item">
                <i class="fa-regular fa-message"></i>
              </button>
              <button class="header__action-item">
                <i class="fa-regular fa-bell"></i>
              </button>
            </div>

    <div class="header__action-btn">
        @if (Auth::check())
                        <a href="{{ route('client.posts.list') }}" class="header__login">
                            Quản lí tin
                        </a>
                        <a href="{{ route('client.posts.create') }}" class="header__up">Đăng tin</a>
                        @else
                        <a href="{{ route('login') }}" class="header__login">
                            Đăng nhập
                        </a>
                        <a href="{{ route('login') }}" class="header__up">Đăng tin</a>
                        @endif

          <button class="header__user">
            <i class="fa-regular fa-user"></i>
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

                <a href="{{ route('login') }}" class="header__action-btn-modal-top-action-login">
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
    <section class="banner">
      <h1 class="banner__title">Giá tốt, Gần bạn, Chốt nhanh!</h1>

    <form action="" class="banner__form">
        <div class="banner__form-category">
            <span class="banner__category-text">Danh mục</span><i class="fa-solid fa-sort-down"></i>
        </div>
          <!-- Modal danh mục -->
        <div class="banner__form-category-modal">
            <ul class="banner__form-category-modal-list">
                <li class="banner__form-category-modal-item">
                    <label><span class="label-text">Tất cả danh mục</span>
                        <input id="category" type="radio" name="category" />
                        <span class="custom__radaio">
                            <i class="fas fa-check"></i>
                        </span>
                    </label>
                </li>

            <li class="banner__form-category-modal-item">
              <label for="category1"
                ><span class="label-text">Bất động sản - Mua bán</span>
                <input id="category1" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category2"
                ><span class="label-text">Xe cộ</span>
                <input id="category2" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category3"
                ><span class="label-text">Thời trang, Đồ dùng cá nhân</span>
                <input id="category3" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category4"
                ><span class="label-text">Giải trí, Thể thao, Sở thích</span>
                <input id="category4" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category5"
                ><span class="label-text">Đồ điện tử</span>
                <input id="category5" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category6"
                ><span class="label-text">Dịch vụ, Du lịch</span>
                <input id="category6" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category7"
                ><span class="label-text">Đồ ăn, Thực phẩm và các loại khác</span>
                <input id="category7" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category8"
                ><span class="label-text">Đồ dùng văn phòng, công nông nghiệp</span>
                <input id="category8" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category9"
                ><span class="label-text">Tủ lạnh, máy lạnh, máy giặt</span>
                <input id="category9" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category10"
                ><span class="label-text">Mẹ và bé</span>
                <input id="category10" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category11"
                ><span class="label-text">Thú cưng</span>
                <input id="category11" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category12"
                ><span class="label-text">Việc làm</span>
                <input id="category12" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category13"
                ><span class="label-text">Đồ gia dụng, nội thất, cây cảnh</span>
                <input id="category13" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>

            <li class="banner__form-category-modal-item">
              <label for="category14"
                ><span class="label-text">Dịch vụ chăm sóc nhà cửa</span>
                <input id="category14" type="radio" name="category" />
                <span class="custom__radaio">
                  <i class="fas fa-check"></i>
                </span>
              </label>
            </li>
          </ul>
        </div>

        <div class="banner__input">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="banner__form-inp" placeholder="Tim sản phẩm..." />
        </div>

        <div class="banner__form-adress">
          <i class="fa-solid fa-location-dot"></i><span>Đà Nẵng</span
          ><i class="fa-solid fa-sort-down"></i>
            <!-- Modal vị trí khu vực Banner -->
          <div class="banner__form-adress-modal">
            <h4 class="banner__form-adress-modal-title">Khu vực</h4>
            <div class="banner__form-adress-modal-address">
              <!-- Nút nhấn mở modal -->
              <div class="banner__form-adress-modal-conscious">
                <div class="banner__form-adress-modal-conscious-content">
                  <p class="banner__form-adress-modal-conscious-title">
                    Chọn tỉnh thành
                  </p>
                  <p class="banner__form-adress-modal-conscious-desc">Hà Nội</p>
                </div>

                <i class="fa-solid fa-sort-down"></i>
              </div>
              <!-- Nút nhấn mở modal -->
              <div class="banner__form-adress-modal-district">
                <p class="banner__form-adress-modal-district-title">
                  Chọn quận huyện
                </p>
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <button class="banner__form-adress-modal-action">Áp dụng</button>
              <!-- Modal phụ -->
            <div class="banner__form-adress-sub-modal-conscious">
              <i class="fa-solid fa-arrow-left icon-conscious"></i>
              <h5 class="banner__form-adress-sub-modal-conscious-title">
                Tỉnh thành
              </h5>
              <div class="banner__form-adress-sub-modal-conscious-input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input
                  type="text"
                  placeholder="Tìm tỉnh thành"
                  class="banner__form-adress-sub-modal-conscious-inp"
                />
              </div>
              <div
                class="banner__form-adress-sub-modal-conscious-container-list"
              >
                <ul class="banner__form-adress-sub-modal-conscious-list">
                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text">Tất cả danh mục</span>
                      <input id="category" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input id="category1" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-conscious-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
              <!-- Modal phụ -->
            <div class="banner__form-adress-sub-modal-district">
              <i class="fa-solid fa-arrow-left icon-district"></i>
              <h5 class="banner__form-adress-sub-modal-district-title">
                Quận huyện
              </h5>
              <div class="banner__form-adress-sub-modal-district-input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input
                  type="text"
                  placeholder="Tìm tỉnh thành"
                  class="banner__form-adress-sub-modal-district-inp"
                />
              </div>
              <div
                class="banner__form-adress-sub-modal-district-container-list"
              >
                <ul class="banner__form-adress-sub-modal-district-list">
                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text">Tất cả danh mục</span>
                      <input id="category" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input id="category1" type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>

                  <li class="banner__form-adress-sub-modal-district-item">
                    <label
                      ><span class="label-text-banner-address"
                        >Tất cả danh mục</span
                      >
                      <input type="radio" name="category" />
                      <span class="custom__radaio">
                        <i class="fas fa-check"></i>
                      </span>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <button class="banner__form-search">Tìm kiếm</button>
    </form>
</section>
