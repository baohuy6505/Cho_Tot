        const dashboardData = {
            chartData: {
                postsByMonth: {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                    data: [15, 19, 20, 18, 25, 28, 10, 20, 30, 40, 50, 60]
                },
                statusDistribution: {
                    labels: ['Hoạt động', 'Chờ duyệt', 'Bị khóa'],
                    data: [200, 23, 87],
                    colors: ['#28a745', '#ffc107', '#dc3545']
                }
            },
            recentPosts: [{
                    id: 1,
                    title: 'Bán iPhone 15 Pro Max 256GB chính hãng',
                    user: 'Nguyễn Văn A',
                    status: 'pending',
                    price: 25000000,
                    created_at: '2024-01-15 10:30:00'
                },
                {
                    id: 2,
                    title: 'Bán Laptop Dell XPS 13 mới 100%',
                    user: 'Trần Thị B',
                    status: 'active',
                    price: 18000000,
                    created_at: '2024-01-15 09:15:00'
                },
                {
                    id: 3,
                    title: 'Xe máy Honda Vision 2023',
                    user: 'Lê Văn C',
                    status: 'active',
                    price: 32000000,
                    created_at: '2024-01-14 16:45:00'
                },
                {
                    id: 4,
                    title: 'Bán Samsung Galaxy S24 Ultra',
                    user: 'Phạm Thị D',
                    status: 'pending',
                    price: 28000000,
                    created_at: '2024-01-14 14:20:00'
                },
                {
                    id: 5,
                    title: 'Máy tính bảng iPad Pro 12.9 inch',
                    user: 'Hoàng Văn E',
                    status: 'active',
                    price: 22000000,
                    created_at: '2024-01-14 11:00:00'
                }
            ],
            recentUsers: [{
                    id: 1,
                    name: 'Nguyễn Thị F',
                    email: 'nguyenthif@example.com',
                    reputation: 85,
                    posts_count: 12,
                    created_at: '2024-01-15 08:00:00'
                },
                {
                    id: 2,
                    name: 'Trần Văn G',
                    email: 'tranvang@example.com',
                    reputation: 92,
                    posts_count: 8,
                    created_at: '2024-01-14 20:30:00'
                },
                {
                    id: 3,
                    name: 'Lê Thị H',
                    email: 'lethih@example.com',
                    reputation: 75,
                    posts_count: 5,
                    created_at: '2024-01-14 18:15:00'
                },
                {
                    id: 4,
                    name: 'Phạm Văn I',
                    email: 'phamvani@example.com',
                    reputation: 60,
                    posts_count: 3,
                    created_at: '2024-01-14 15:45:00'
                },
                {
                    id: 5,
                    name: 'Hoàng Thị K',
                    email: 'hoangthik@example.com',
                    reputation: 98,
                    posts_count: 15,
                    created_at: '2024-01-14 12:20:00'
                }
            ]
        };

        // Initialize charts
        function initCharts(data) {
            // Đợi Chart.js load xong
            if (typeof Chart === 'undefined') {
                setTimeout(() => initCharts(data), 100);
                return;
            }
            createCharts(data);
        }

        function createCharts(data) {
            // Posts by month chart - Bar Chart
            const postsCtx = document.getElementById('postsChart');
            if (postsCtx) {
                // Tạo gradient cho bar chart
                const gradient = postsCtx.getContext('2d').createLinearGradient(0, 0, 0, 400);
                gradient.addColorStop(0, '#667eea');
                gradient.addColorStop(1, '#764ba2');

                new Chart(postsCtx, {
                    type: 'bar',
                    data: {
                        labels: data.chartData.postsByMonth.labels,
                        datasets: [{
                            label: 'Số bài đăng',
                            data: data.chartData.postsByMonth.data,
                            backgroundColor: gradient,
                            borderRadius: 10,
                            borderSkipped: false,
                            maxBarThickness: 60,
                        }]
                    },
                    options: {
                        responsive: true, //chinh theo kich thuoc div
                        maintainAspectRatio: false, //cho phepp lap day vung chua
                        scales: {
                            y: {
                                beginAtZero: true, //luon bat dau tu 0
                            }
                        }
                    },
                });
            }

            // Status distribution chart
            const statusCtx = document.getElementById('statusChart');
            if (statusCtx) {
                new Chart(statusCtx, {
                    type: 'doughnut',
                    data: {
                        labels: data.chartData.statusDistribution.labels,
                        datasets: [{
                            data: data.chartData.statusDistribution.data,
                            backgroundColor: data.chartData.statusDistribution.colors,
                            borderWidth: 2,
                            borderColor: '#fff'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    padding: 10,
                                    usePointStyle: true
                                }
                            }
                        }
                    }
                });
            }
        }
        // Initialize dashboard
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Chart !== 'undefined') {
                initCharts(dashboardData);
            }
        });

        // Export data for testing (có thể xóa sau khi đã tích hợp controller)
        // console.log('Dashboard Data:', dashboardData);
