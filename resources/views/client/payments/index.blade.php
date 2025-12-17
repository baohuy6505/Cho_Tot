@extends('layouts.app') 

@section('content')

<style>
    /* BLOCK: payment-wrapper */
    .payment-wrapper {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        display: flex;
        justify-content: center;
        padding-top: 50px;
        padding-bottom: 50px;
        background-color: #f8f9fa;
    }

    /* BLOCK: payment-card */
    .payment-card {
        background-color: #ffffff;
        width: 100%;
        max-width: 600px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        margin: 0 15px;
    }

    /* ELEMENT: header */
    .payment-card__header {
        background-color: #262a14;
        color: white;
        text-align: center;
        padding: 15px;
    }

    /* ELEMENT: title (nằm trong header) */
    .payment-card__title {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 500;
    }

    /* ELEMENT: body */
    .payment-card__body {
        padding: 25px;
        text-align: center;
    }

    /* BLOCK: payment-info (dùng cho các text thông tin) */
    .payment-info__label {
        color: #6c757d;
        margin-bottom: 5px;
        font-size: 1rem;
    }

    .payment-info__balance {
        color: #198754;
        font-size: 2rem;
        font-weight: bold;
        margin-top: 0;
        margin-bottom: 20px;
    }

    /* BLOCK: payment-divider */
    .payment-divider {
        border: 0;
        border-top: 1px solid #dee2e6;
        margin: 20px 0;
    }

    /* BLOCK: payment-form (Khu vực nhập liệu) */
    .payment-form {
        margin-bottom: 20px;
        text-align: left;
    }

    .payment-form__label {
        font-weight: bold;
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    .payment-form__input {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
        transition: border-color 0.3s;
    }

    .payment-form__input:focus {
        border-color: #0d6efd;
    }

    .payment-form__helper {
        font-size: 0.9rem;
        color: #6c757d;
        margin-top: 5px;
        text-align: right;
    }

    /* BLOCK: payment-qr-section */
    .payment-qr-section__title {
        font-size: 1.25rem;
        margin-bottom: 15px;
        font-weight: 500;
        color: #212529;
    }

    .payment-qr-section__img {
        max-width: 100%;
        width: 300px;
        height: auto;
        border: 1px solid #dee2e6;
        padding: 8px;
        border-radius: 4px;
        margin-bottom: 20px;
    }

    /* BLOCK: payment-alert */
    .payment-alert {
        background-color: #fff3cd;
        color: #664d03;
        border: 1px solid #ffecb5;
        padding: 15px;
        border-radius: 5px;
        text-align: left;
    }

    .payment-alert__title {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .payment-alert__code {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1.2rem;
        color: #d63384;
        word-break: break-all;
        font-weight: bold;
    }

    /* RESPONSIVE */
    @media (max-width: 576px) {
        .payment-wrapper {
            padding-top: 20px;
        }
        .payment-info__balance {
            font-size: 1.5rem;
        }
        .payment-card__title {
            font-size: 1.2rem;
        }
    }
</style>

<div class="payment-wrapper">
    <div class="payment-card">
        <div class="payment-card__header">
            <h4 class="payment-card__title">NẠP TIỀN VÀO TÀI KHOẢN</h4>
        </div>

        <div class="payment-card__body">
            {{-- <p class="payment-info__label">Số dư hiện tại:</p>
            <h2 class="payment-info__balance">{{ number_format(Auth::user()->balance) }} đ</h2>
             --}}
            <hr class="payment-divider">

            <div class="payment-form">
                <label for="payment-amount" class="payment-form__label">Nhập số tiền muốn nạp (VNĐ):</label>
                <input type="number" 
                       id="payment-amount" 
                       class="payment-form__input" 
                       value="50000" 
                       min="10000" 
                       step="10000" 
                       placeholder="Ví dụ: 100000">
                <div class="payment-form__helper">Tối thiểu: 1.000 đ</div>
            </div>

            <h5 class="payment-qr-section__title">Quét mã để thanh toán</h5>
            
            <img id="payment-qr-img"
                 src="https://img.vietqr.io/image/MB-0987654321-compact.png?amount=50000&addInfo=NAPTIEN USER{{ Auth::id() }}" 
                 class="payment-qr-section__img" 
                 alt="QR Code">

            <div class="payment-alert">
                <strong class="payment-alert__title">Lưu ý quan trọng:</strong>
                Nội dung chuyển khoản không được thay đổi (Tự động điền):<br>
                <code class="payment-alert__code">NAPTIEN USER{{ Auth::id() }}</code>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // lấy các phần tử theo ID mới
        const amountInput = document.getElementById('payment-amount');
        const qrImage = document.getElementById('payment-qr-img');
        
        //cấu hình ngân hàng
        const bankInfo = "BIDV-8880413951-compact.png"; 
        const content = "NAPTIEN USER{{ Auth::id() }}";

        function updateQR() {
            let amount = amountInput.value;
            if (!amount || amount < 0) amount = 0;

            const newSrc = `https://img.vietqr.io/image/${bankInfo}?amount=${amount}&addInfo=${encodeURIComponent(content)}`;
            qrImage.src = newSrc;
        }

        amountInput.addEventListener('input', updateQR);
    });
</script>

@endsection