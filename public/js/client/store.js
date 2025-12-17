const headerUser = document.querySelector(".header__user");
const headerUserModalAction = document.querySelector(
    ".header__action-btn-modal"
);

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


const headerLeftBtn = document.querySelector(".header__left-btn");
const headerBigModal = document.querySelector(".header__left-modal");
const listSubModal = document.querySelectorAll(".header__left-sub-modal");
const listLink = document.querySelectorAll(".header__left-modal-item");


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

