@extends('admin.layouts.admin')
@section('content')
    <div class="hero mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <div class="text-uppercase small opacity-75">Bảng điều khiển</div>
                <h4 class="mb-3">Dashboard Admin</h4>
                <p class="mb-3">Tổng quan hệ thống và thống kê chi tiết</p>
            </div>
            <div class="text-end">
                <div class="small text-white-50 mt-1" id="current-time"></div>
            </div>
        </div>
    </div>

    <!-- Thống kê tổng quan -->
    <div class="row g-3 mb-4" id="stats-container">
        <!-- Stats sẽ được render bằng JavaScript từ JSON -->
    </div>

    <!-- Biểu đồ và bảng thống kê -->
    <div class="row g-3 mb-4">
        <div class="col-lg-8">
            <div class="card card-hover">
                <div class="card-header bg-white border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="fw-bold mb-0">Thống kê bài đăng theo tháng</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="postsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-hover">
                <div class="card-header bg-white border-bottom">
                    <h6 class="fw-bold mb-0">Phân bố trạng thái</h6>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="statusChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <script src="{{ asset('js/admin/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"
        onload="if(typeof initCharts === 'function') initCharts(dashboardData)"
        ></script>
@endsection
