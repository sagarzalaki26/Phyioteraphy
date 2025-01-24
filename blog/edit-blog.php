<?php
session_start();
require 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$blog_id = intval($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Image upload logic
    $featured_image = '';
    if (isset($_FILES['featured_image']) && $_FILES['featured_image']['error'] == 0) {
        $upload_dir = 'uploads/';
        $filename = uniqid() . '_' . basename($_FILES['featured_image']['name']);
        $upload_path = $upload_dir . $filename;
        
        if (move_uploaded_file($_FILES['featured_image']['tmp_name'], $upload_path)) {
            $featured_image = mysqli_real_escape_string($conn, $upload_path);
            
            // Delete old image if exists
            $old_image_query = "SELECT featured_image FROM blogs WHERE id = $blog_id";
            $old_image_result = mysqli_query($conn, $old_image_query);
            $old_image = mysqli_fetch_assoc($old_image_result);
            if (!empty($old_image['featured_image']) && file_exists($old_image['featured_image'])) {
                unlink($old_image['featured_image']);
            }

            // Update query with new image
            $query = "UPDATE blogs SET title='$title', content='$content', featured_image='$featured_image' WHERE id=$blog_id";
        }
    } else {
        // Update query without changing image
        $query = "UPDATE blogs SET title='$title', content='$content' WHERE id=$blog_id";
    }

    mysqli_query($conn, $query);
    header("Location: blog.php");
    exit();
}

$query = "SELECT * FROM blogs WHERE id = $blog_id";
$result = mysqli_query($conn, $query);
$blog = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
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
        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2">
          <i class="fas fa-home w-5"></i>
          <span class="ml-3">Dashboard</span>
        </a>
        <a href="Add-blog.html" class="  active flex items-center px-4 py-3 text-green-600 bg-green-50 rounded-lg mb-2">
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
          <h1 class="text-2xl font-semibold text-gray-900">New Post</h1>
          <div class="flex items-center space-x-4">
            <button class="relative text-gray-500 hover:text-gray-600 !rounded-button">
              <i class="fas fa-bell"></i>
              <span
                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-4 h-4 rounded-full flex items-center justify-center">3</span>
            </button>
            <div class="flex items-center">
              <img  
                src="https://creatie.ai/ai/api/search-image?query=A professional headshot of a young business person with a warm smile, wearing business attire, against a neutral background&width=40&height=40&orientation=squarish&flag=b052253e-65a0-4186-b916-40976739feb4&flag=0bfeb957-0588-4149-acd4-82b9be318801"
                alt="Profile" class="w-8 h-8 rounded-full" />
              <span class="ml-2 text-sm font-medium text-gray-700">John Smith</span>
            </div>
          </div>
        </div>
      </header>
      <main class="p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-sm border border-gray-200">
          <form class="space-y-6" method="post" enctype="multipart/form-data">
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Blog Title</label><input type="text" value="<?= htmlspecialchars($blog['title']) ?>"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-green-500 focus:border-green-500" name="title" />
            </div>
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Blog Image</label>
              <input type="file" name="featured_image"
              class="w-full border border-gray-300 rounded-lg p-3 focus:ring-green-500 focus:border-green-500" />
            </div>
            <?php if(!empty($blog['featured_image'])): ?>
            <img src="<?= htmlspecialchars($blog['featured_image']) ?>" width="200">
        <?php endif; ?>
            <div><label class="block text-sm font-medium text-gray-700 mb-2">Blog Content</label><textarea name="content" id="editor"
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-green-500 focus:border-green-500"><?= $blog['content'] ?></textarea>
            </div>
            <div class="flex justify-end"><button type="submit"
                class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">Publish Post</button></div>
          </form>
          <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
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