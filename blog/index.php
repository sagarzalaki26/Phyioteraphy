<?php
session_start();
require 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000" data-border-radius="small"></script>
</head>
<body class="bg-gray-50 font-[Inter]">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-white border-r border-gray-200 fixed h-full">
            <div class="flex items-center justify-between px-4 py-6 border-b border-gray-200">
                <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo" class="h-8"/>
                <button class="text-gray-500 hover:text-gray-600 !rounded-button">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <nav class="mt-6 px-4">
                <a href="#" class="flex items-center px-4 py-3 text-green-600 bg-green-50 rounded-lg mb-2">
                    <i class="fas fa-home w-5"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
                <a href="Add-blog.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2">
                    <i class="fas fa-plus-circle w-5"></i>
                    <span class="ml-3">New Post</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2">
                    <i class="fas fa-list w-5"></i>
                    <span class="ml-3">All Posts</span>
                </a>
                <a href="profile.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg">
                    <i class="fas fa-user w-5"></i>
                    <span class="ml-3">Profile</span>
                </a>
            </nav>
        </aside>
        <div class="flex-1 ml-64">
            <header class="bg-white border-b border-gray-200">
                <div class="px-6 py-4 flex items-center justify-between">
                    <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                    <div class="flex items-center space-x-4">
                        <button class="relative text-gray-500 hover:text-gray-600 !rounded-button">
                            <i class="fas fa-bell"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-4 h-4 rounded-full flex items-center justify-center">3</span>
                        </button>
                        <div class="flex items-center">
                            <img src="https://creatie.ai/ai/api/search-image?query=A professional headshot of a young business person with a warm smile, wearing business attire, against a neutral background&width=40&height=40&orientation=squarish&flag=b052253e-65a0-4186-b916-40976739feb4&flag=c65d5c32-809c-4ab2-a8e6-462edb732ed1&flag=a26c80b1-9a8b-435b-b25c-4f0bf4ebb113" alt="Profile" class="w-8 h-8 rounded-full"/>
                            <span class="ml-2 text-sm font-medium text-gray-700">John Smith</span>
                        </div>
                    </div>
                </div>
            </header>
            <main class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-green-100">
                                <i class="fas fa-file-alt text-green-600"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-sm font-medium text-gray-500">Total Posts</h3>
                                <p class="text-2xl font-semibold text-gray-900">2,847</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-green-100">
                                <i class="fas fa-eye text-green-600"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-sm font-medium text-gray-500">Total Views</h3>
                                <p class="text-2xl font-semibold text-gray-900">1.2M</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-yellow-100">
                                <i class="fas fa-star text-yellow-600"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-sm font-medium text-gray-500">Engagement</h3>
                                <p class="text-2xl font-semibold text-gray-900">87%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-2 bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-semibold text-gray-900">Activity Overview</h2>
                            <select class="border-gray-200 rounded-lg text-sm !rounded-button">
                                <option>Last 7 days</option>
                                <option>Last 30 days</option>
                                <option>Last 90 days</option>
                            </select>
                        </div>
                        <div id="activityChart" style="height: 300px;"></div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="p-2 rounded-lg bg-blue-100">
                                    <i class="fas fa-comment text-blue-600"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">New comment on &#34;Getting Started with React&#34;</p>
                                    <p class="text-sm text-gray-500">2 minutes ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-2 rounded-lg bg-green-100">
                                    <i class="fas fa-heart text-green-600"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">Your post was featured</p>
                                    <p class="text-sm text-gray-500">1 hour ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="p-2 rounded-lg bg-purple-100">
                                    <i class="fas fa-user-plus text-purple-600"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-900">New follower: Sarah Chen</p>
                                    <p class="text-sm text-gray-500">3 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <div id="profile-page" class="hidden"><div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 m-6"><div class="flex items-center mb-6"><img src="https://creatie.ai/ai/api/search-image?query=A professional headshot of a young business person with a warm smile, wearing business attire, against a neutral background&width=120&height=120&orientation=squarish&flag=0bea7f6a-6203-4f14-927f-805f24877b6d" alt="Profile" class="w-24 h-24 rounded-full mr-6"/><div><h2 class="text-2xl font-semibold text-gray-900">John Smith</h2><p class="text-gray-600">Senior Content Creator</p><p class="text-gray-500">john.smith@example.com</p></div></div><div class="grid grid-cols-1 md:grid-cols-2 gap-6"><div class="space-y-4"><h3 class="text-lg font-semibold text-gray-900">Personal Information</h3><div><p class="text-sm text-gray-500">Location</p><p class="text-gray-900">San Francisco, CA</p></div><div><p class="text-sm text-gray-500">Phone</p><p class="text-gray-900">+1 (555) 123-4567</p></div><div><p class="text-sm text-gray-500">Member Since</p><p class="text-gray-900">January 2022</p></div></div><div class="space-y-4"><h3 class="text-lg font-semibold text-gray-900">Account Statistics</h3><div><p class="text-sm text-gray-500">Total Posts</p><p class="text-gray-900">156</p></div><div><p class="text-sm text-gray-500">Followers</p><p class="text-gray-900">2,847</p></div><div><p class="text-sm text-gray-500">Average Engagement</p><p class="text-gray-900">87%</p></div></div></div></div></div></div>
    </div>
    <script>var chartDom = document.getElementById('activityChart'); var myChart = echarts.init(chartDom); var option = { animation: false, tooltip: { trigger: 'axis' }, grid: { left: '3%', right: '4%', bottom: '3%', containLabel: true }, xAxis: { type: 'category', data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], boundaryGap: false }, yAxis: { type: 'value' }, series: [{ data: [820, 932, 901, 934, 1290, 1330, 1320], type: 'line', areaStyle: { color: { type: 'linear', x: 0, y: 0, x2: 0, y2: 1, colorStops: [{ offset: 0, color: 'rgba(34, 197, 94, 0.2)' }, { offset: 1, color: 'rgba(34, 197, 94, 0)' }] } }, lineStyle: { color: '#16a34a' }, symbol: 'none', smooth: true }] }; myChart.setOption(option); window.addEventListener('resize', function() { myChart.resize(); });</script>
