<?php
session_start();
require 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$query = "SELECT * FROM blogs ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 font-[Inter]">
    <div class="min-h-screen flex">
        <aside class="w-64 bg-white border-r border-gray-200 fixed h-full">
            <div class="flex items-center justify-between px-4 py-6 border-b border-gray-200">
                <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="Logo" class="h-8" />
                <button class="text-gray-500 hover:text-gray-600 !rounded-button">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <nav class="mt-6 px-4">
                <a href="test.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2">
                    <i class="fas fa-home w-5"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
                <a href="Add-blog.html"
                    class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2">
                    <i class="fas fa-plus-circle w-5"></i>
                    <span class="ml-3">New Post</span>
                </a>
                <a href="blog.html" class="flex items-center px-4 py-3 text-green-600 bg-green-50 rounded-lg mb-2">
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
                    <h1 class="text-2xl font-semibold text-gray-900">All Posts</h1>
                    <div class="flex items-center space-x-4">
                        <button class="relative text-gray-500 hover:text-gray-600 !rounded-button">
                            <i class="fas fa-bell"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-4 h-4 rounded-full flex items-center justify-center">3</span>
                        </button>
                        <div class="flex items-center">
                            <img src="https://creatie.ai/ai/api/search-image?query=A professional headshot of a young business person with a warm smile, wearing business attire, against a neutral background&width=40&height=40&orientation=squarish&flag=b052253e-65a0-4186-b916-40976739feb4&flag=30172a08-a150-47f3-8ad2-64a1c982cdfd&flag=5b4033c4-346a-4fbb-9c3f-730cf7908e2f"
                                alt="Profile" class="w-8 h-8 rounded-full" />
                            <span class="ml-2 text-sm font-medium text-gray-700">John Smith</span>
                        </div>
                    </div>
                </div>
            </header>
            <main class="p-6">
                <div class="mb-6 flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-900">All Posts</h2><button
                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg flex items-center"><i
                            class="fas fa-plus mr-2"></i>New Post</button>
                </div>
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50 border-b border-gray-200">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Last Updated</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                
                                <?php while ($blog = mysqli_fetch_assoc($result)): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($blog['title']) ?></div>
                                    </td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Published</span>
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500"><?= htmlspecialchars($blog['created_at']) ?></div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex space-x-3"><a href="edit-blog.php?id=<?= $blog['id'] ?>"
                                                class="text-green-600 hover:text-green-900"><i
                                                    class="fas fa-edit"></i></a><a href="delete_blog.php?id=<?= $blog['id'] ?>"
                                                class="text-red-600 hover:text-red-900"><i
                                                    class="fas fa-trash"></i></a></div>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-6 py-4 border-t border-gray-200">
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">Showing 1 to 3 of 50 entries</div>
                            <div class="flex space-x-2"><button
                                    class="px-3 py-1 border border-gray-300 rounded-lg text-sm hover:bg-green-50">Previous</button><button
                                    class="px-3 py-1 border border-gray-300 rounded-lg text-sm hover:bg-green-50">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        var chartDom = document.getElementById('activityChart');
        var myChart = echarts.init(chartDom);
        var option = {
            animation: false,
            tooltip: {
                trigger: 'axis'
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                boundaryGap: false
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [820, 932, 901, 934, 1290, 1330, 1320],
                type: 'line',
                areaStyle: {
                    color: {
                        type: 'linear',
                        x: 0,
                        y: 0,
                        x2: 0,
                        y2: 1,
                        colorStops: [{
                            offset: 0,
                            color: 'rgba(79, 70, 229, 0.2)'
                        }, {
                            offset: 1,
                            color: 'rgba(79, 70, 229, 0)'
                        }]
                    }
                },
                lineStyle: {
                    color: '#4F46E5'    
                },
                symbol: 'none',
                smooth: true
            }]
        };
        myChart.setOption(option);
        window.addEventListener('resize', function () {
            myChart.resize();
        });
    </script>