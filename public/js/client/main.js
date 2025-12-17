const header = document.getElementById("header");
const headerBigModal = document.querySelector(".header__left-modal");
const headerLeftBtn = document.querySelector(".header__left-btn");
const listLink = document.querySelectorAll(".header__left-modal-item");
const listSubModal = document.querySelectorAll(".header__left-sub-modal");
const titleUser = document.querySelector(".header__left-title");
const headerAddress = document.querySelector(".header__address");
const navBar = document.querySelector(".navbar");
const headerInput = document.querySelector(".header__input");
const close = document.querySelector(".close");
const headerInp = document.querySelector(".header__inp");
const headerLogin = document.querySelector(".header__login");
const headerUp = document.querySelector(".header__up");
const headerUser = document.querySelector(".header__user");
const headerLeftTitleBtn = document.querySelector(".header__left-title");
const headerLeftTitleModal = document.querySelector(
    ".header__left-title-modal"
);
const bannerFormCategory = document.querySelector(".banner__form-category");
const bannerFormCategoryModal = document.querySelector(
    ".banner__form-category-modal"
);
const formAddress = document.querySelector(".banner__form-adress");
const formAddressModal = document.querySelector(".banner__form-adress-modal");
const formAddressModalHeader = document.querySelector(
    ".header__form-adress-modal"
);
const formConscious = document.querySelector(
    ".banner__form-adress-modal-conscious"
);
const formDistrict = document.querySelector(
    ".banner__form-adress-modal-district"
);
const formConsciousHeader = document.querySelector(
    ".header__form-adress-modal-conscious"
);
const formDistrictHeader = document.querySelector(
    ".header__form-adress-modal-district"
);
const formSubModalConscious = document.querySelector(
    ".banner__form-adress-sub-modal-conscious"
);
const formSubModalDistrict = document.querySelector(
    ".banner__form-adress-sub-modal-district"
);
const formSubModalConsciousHeader = document.querySelector(
    ".header__form-adress-sub-modal-conscious"
);
const formSubModalDistrictHeader = document.querySelector(
    ".header__form-adress-sub-modal-district"
);
const iconSubModalConscious = document.querySelector(".icon-conscious");
const iconSubModalDistrict = document.querySelector(".icon-district");
const iconSubModalConsciousHeader = document.querySelector(
    ".icon-conscious-header"
);
const iconSubModalDistrictHeader = document.querySelector(
    ".icon-district-header"
);
const headerUserModalAction = document.querySelector(
    ".header__action-btn-modal"
);
const newAction = document.querySelector(".new__action");
const newList = document.querySelector(".news__list");
const loginBox = document.querySelector(".login-box");
const closeBox = document.querySelector(".close-login");
const advertisement = document.querySelector(".advertisement");
const advertisementIcon = document.querySelector(".advertisement__icon");

console.log(headerLeftTitleBtn);
console.log(listLink, listSubModal);

// Thay đổi thanh header
function handleNavbar() {
    if (window.scrollY > 200) {
        if (!header.classList.contains("fixed")) {
            header.classList.add("fixed");
            titleUser.classList.add("none");
            headerAddress.classList.add("block");
            navBar.classList.add("navbarNone");
            headerInput.classList.add("header__input-block");
            headerUp.classList.add("custom__up");
            headerUser.classList.add("custom__user");
            headerLogin.classList.add("custom");
            setTimeout(() => {
                header.classList.add("slide-down");
            }, 10);
        }
    } else {
        header.classList.remove("slide-down");
        header.classList.remove("fixed");
        titleUser.classList.remove("none");
        headerAddress.classList.remove("block");
        headerUser.classList.remove("custom__user");
        navBar.classList.remove("navbarNone");
        headerUp.classList.remove("custom__up");
        headerLogin.classList.remove("custom");
        headerInput.classList.remove("header__input-block");
    }
}
window.addEventListener("scroll", handleNavbar);
handleNavbar();

// header__left-title
headerLeftTitleBtn.addEventListener("click", () => {
    headerLeftTitleBtn.classList.toggle("hover");
    headerLeftTitleModal.classList.toggle("show");
});

document.addEventListener("click", (e) => {
    const clickInsideTitle = headerLeftTitleBtn.contains(e.target);
    const clickInsideModal = headerLeftTitleModal.contains(e.target);

    if (!clickInsideTitle && !clickInsideModal) {
        headerLeftTitleModal.classList.remove("show");
        headerLeftTitleBtn.classList.remove("hover");
    }
});

// Ẩn hiện input header
headerInp.addEventListener("input", () => {
    if (headerInp.value) {
        close.style.display = "flex";
    } else {
        close.style.display = "none";
    }
});

close.addEventListener("click", () => {
    headerInp.value = "";
    close.style.display = "none";
    headerInp.focus();
});

// Action modal menu
headerLeftBtn.addEventListener("mouseenter", () => {
    headerBigModal.classList.add("open");
});

document.addEventListener("click", (e) => {
    const clickInsideIcon = headerLeftBtn.contains(e.target);
    const clickInsideBox = headerBigModal.contains(e.target);

    if (!clickInsideIcon && !clickInsideBox) {
        headerBigModal.classList.remove("open");
    }
});

listLink.forEach((a) => {
    a.addEventListener("mouseenter", () => {
        listLink.forEach((a) => {
            a.classList.remove("hover");
        });
        listSubModal.forEach((modal) => {
            modal.classList.remove("open");
        });

        a.classList.add("hover");

        const id = a.dataset.sub;
        document.getElementById(id).classList.add("open");
    });
});

headerBigModal.addEventListener("mouseleave", () => {
    listLink.forEach((a) => {
        a.classList.remove("hover");
    });
    listSubModal.forEach((modal) => {
        modal.classList.remove("open");
    });
});

// Banner danh mục
console.log(bannerFormCategoryModal);

bannerFormCategory.addEventListener("click", (e) => {
    // bannerFormCategoryModal.classList.toggle("show");
    if (!bannerFormCategoryModal.classList.contains("show")) {
        bannerFormCategoryModal.classList.add("show");
    } else {
        bannerFormCategoryModal.classList.remove("show");
    }
});

bannerFormCategoryModal.addEventListener("click", () => {
    bannerFormCategoryModal.classList.remove("show");
});

document.addEventListener("click", (e) => {
    const clickInsideIcon = bannerFormCategory.contains(e.target);
    const clickInsideBox = bannerFormCategoryModal.contains(e.target);

    if (!clickInsideIcon && !clickInsideBox) {
        bannerFormCategoryModal.classList.remove("show");
    }
});

// Đóng mở modal khu vực và modal phụ ở banner
console.log(formAddress);
formAddress.addEventListener("click", (e) => {
    formAddressModal.style.display = "block";
});

document.addEventListener("click", (e) => {
    const clickInsideIcon = formAddress.contains(e.target);
    const clickInsideBox = formAddressModal.contains(e.target);

    if (!clickInsideIcon && !clickInsideBox) {
        formAddressModal.style.display = "none";
    }
});

formConscious.addEventListener("click", () => {
    formSubModalConscious.style.display = "block";
});

iconSubModalConscious.addEventListener("click", () => {
    formSubModalConscious.style.display = "none";
});

formDistrict.addEventListener("click", () => {
    formSubModalDistrict.style.display = "block";
});

iconSubModalDistrict.addEventListener("click", () => {
    formSubModalDistrict.style.display = "none";
});

// ACtion modal user
headerUser.addEventListener("click", () => {
    headerUserModalAction.style.display = "block";
});

document.addEventListener("click", (e) => {
    const clickInsideIcon = headerUser.contains(e.target);
    const clickInsideBox = headerUserModalAction.contains(e.target);

    if (!clickInsideIcon && !clickInsideBox) {
        headerUserModalAction.style.display = "none";
    }
});

// Mở modal khu vực header
headerAddress.addEventListener("click", (e) => {
    formAddressModalHeader.style.display = "block";
});

document.addEventListener("click", (e) => {
    const clickInsideIcon = headerAddress.contains(e.target);
    const clickInsideBox = formAddressModalHeader.contains(e.target);

    if (!clickInsideIcon && !clickInsideBox) {
        formAddressModalHeader.style.display = "none";
    }
});

console.log(formConsciousHeader, formDistrictHeader);

// Đóng mở modal khu vực ở header
formConsciousHeader.addEventListener("click", () => {
    formSubModalConsciousHeader.style.display = "block";
});

iconSubModalConsciousHeader.addEventListener("click", () => {
    formSubModalConsciousHeader.style.display = "none";
});

formDistrictHeader.addEventListener("click", () => {
    formSubModalDistrictHeader.style.display = "block";
});

iconSubModalDistrictHeader.addEventListener("click", () => {
    formSubModalDistrictHeader.style.display = "none";
});

// thu gon mở rộng nội dung
newAction.addEventListener("click", () => {
    // Bật / tắt class elastic
    newList.classList.toggle("elastic");

    if (newList.classList.contains("elastic")) {
        newAction.textContent = "Thu gọn";
    } else {
        newAction.textContent = "Mở rộng";
    }
});

// Tắt Ô Login và ADS
closeBox.addEventListener("click", () => {
    loginBox.classList.add("none");
});

advertisementIcon.addEventListener("click", () => {
    advertisement.classList.add("none");
});
