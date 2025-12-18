    // --- KHAI BÁO BIẾN CHO GALLERY ---
    const mainImage = document.querySelector('.image__image'); // Ảnh lớn
    const thumbItems = document.querySelectorAll('.image__thumb-item'); // Danh sách khung ảnh nhỏ
    const prevBtn = document.querySelector('.image__nav-btn-prev'); // Nút lùi
    const nextBtn = document.querySelector('.image__nav-btn-next'); // Nút tiến
    const countDisplay = document.querySelector('.image__count'); // Bộ đếm 1/7

    let currentIndex = 0; // Vị trí ảnh hiện tại
    const totalImages = thumbItems.length;

    // --- HÀM CẬP NHẬT GALLERY ---
    function updateGallery(index) {
        // 1. Lấy nguồn ảnh từ thumbnail tương ứng
        const newSrc = thumbItems[index].querySelector('img').src;
        
        // 2. Cập nhật ảnh lớn (Thêm hiệu ứng fade nhẹ nếu muốn)
        mainImage.style.opacity = '0';
        setTimeout(() => {
            mainImage.src = newSrc;
            mainImage.style.opacity = '1';
        }, 100); // Thời gian khớp với transition CSS (nếu có)

        // 3. Cập nhật trạng thái active cho thumbnail
        document.querySelector('.image__thumb-item-active').classList.remove('image__thumb-item-active');
        thumbItems[index].classList.add('image__thumb-item-active');

        // 4. Cuộn thumbnail active ra giữa tầm nhìn (nếu list dài)
        thumbItems[index].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });

        // 5. Cập nhật bộ đếm
        if (countDisplay) {
            countDisplay.innerText = `${index + 1} / ${totalImages}`;
        }

        // Cập nhật lại index hiện tại
        currentIndex = index;
    }

    // --- SỰ KIỆN CLICK VÀO THUMBNAIL ---
    thumbItems.forEach((item, index) => {
        item.addEventListener('click', function () {
            updateGallery(index);
        });
    });

    // --- SỰ KIỆN CLICK NÚT NEXT/PREV ---
    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            let newIndex = currentIndex + 1;
            if (newIndex >= totalImages) newIndex = 0; // Quay vòng về đầu
            updateGallery(newIndex);
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = totalImages - 1; // Quay vòng về cuối
            updateGallery(newIndex);
        });
    }
    
    const shareBtn = document.getElementById('share-toggle-btn');
    const shareDropdown = document.getElementById('share-dropdown');
    const menuBtn = document.getElementById('menu-toggle-btn');
    const menuDropdown = document.getElementById('dropdown-menu');

    // --- HÀM XỬ LÝ CLICK SHARE ---
    if (shareBtn && shareDropdown) {
        shareBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            // Đóng menu kia nếu đang mở
            if(menuDropdown) menuDropdown.classList.remove('active');
            // Toggle menu này
            shareDropdown.classList.toggle('active');
        });
    }

    // --- HÀM XỬ LÝ CLICK MENU (3 CHẤM) ---
    if (menuBtn && menuDropdown) {
        menuBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            // Đóng share kia nếu đang mở
            if(shareDropdown) shareDropdown.classList.remove('active');
            // Toggle menu này
            menuDropdown.classList.toggle('active');
        });
    }

// Tự động cuộn xuống cuối danh sách bình luận
    const commentList = document.querySelector('.comment-list');
    if (commentList) {
        commentList.scrollTop = commentList.scrollHeight;
    }