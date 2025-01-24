<?php
session_start();
require 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    $query = "SELECT password FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if (password_verify($current_password, $user['password'])) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_query = "UPDATE users SET password = '$hashed_password' WHERE id = $user_id";
        mysqli_query($conn, $update_query);
        $success = "Password updated successfully";
    } else {
        $error = "Current password incorrect";
    }
}
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
        <a href="test.html" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2">
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
        <a href="profile.html" class=" active flex items-center px-4 py-3 text-green-600 bg-green-50 rounded-lg">
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
              <span
                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-4 h-4 rounded-full flex items-center justify-center">3</span>
            </button>
            <div class="flex items-center">
              <img
                src="https://creatie.ai/ai/api/search-image?query=A professional headshot of a young business person with a warm smile, wearing business attire, against a neutral background&width=40&height=40&orientation=squarish&flag=b052253e-65a0-4186-b916-40976739feb4&flag=c65d5c32-809c-4ab2-a8e6-462edb732ed1&flag=a26c80b1-9a8b-435b-b25c-4f0bf4ebb113&flag=560cb181-2760-4b77-a907-2b71c487944a"
                alt="Profile" class="w-8 h-8 rounded-full" />
              <span class="ml-2 text-sm font-medium text-gray-700">John Smith</span>
            </div>
          </div>
        </div>
      </header>
      <main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <form  method="post">
        <div id="notification" class="hidden mb-8 p-4 rounded-md bg-green-50 border border-green-200">
          <div class="flex">
            <div class="flex-shrink-0">
              <i class="fas fa-check-circle text-green-400"></i>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-green-800">Successfully saved changes</p>
            </div>
          </div>
        </div>

        <div class="bg-white shadow rounded-lg overflow-hidden">
          <div class="px-4 py-5 sm:p-6 border-b border-gray-200">
            <div class="flex items-center space-x-5">
              <div class="flex-shrink-0">
                
              </div>
              <div>
                <h1 class="text-2xl font-bold text-gray-900">Admin</h1>
              </div>
            </div>
          </div>

          <div class="px-4 py-5 sm:p-6 space-y-6">
            <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label class="block text-sm font-medium text-gray-700">Current Password</label>
                <div class="mt-1">
                  <input type="text" name="current_password" placeholder="Current Password" 
                    class="bg-gray-50 block w-full border-gray-300 rounded-md shadow-sm  focus:ring-green-500 focus:border-green-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:col-span-3">
                <label class="block text-sm font-medium text-gray-700">New Password</label>
                <div class="mt-1">
                  <input type="text"  name="new_password" placeholder="New Password" required
                    class="block w-full border-green-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:col-span-6">
                <label class="block text-sm font-medium text-gray-700">About</label>
                <div class="mt-1">
                  <textarea rows="4"
                    class="block w-full border-gray-300 rounded-md shadow-sm  focus:ring-green-500 focus:border-green-500 sm:text-sm">Passionate about creating engaging content and sharing knowledge. With over 5 years of experience in digital content creation, I focus on technology, lifestyle, and personal development topics.</textarea>
                </div>
              </div>

              

              <div class="sm:col-span-6">
                

                  
              </div>
            </div>
          </div>

      
          <div class="px-4 py-3 bg-white text-right sm:px-6 border-t border-gray-200">
            <button type="submit"
              class="bg-custom text-white !rounded-button py-2 px-4 text-sm font-medium shadow-sm hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
              Save Changes
            </button>
          </div>
        </div>
      </form>
      </main>
      
          
    </div>
  </div>
  <script>var chartDom = document.getElementById('activityChart'); var myChart = echarts.init(chartDom); var option = { animation: false, tooltip: { trigger: 'axis' }, grid: { left: '3%', right: '4%', bottom: '3%', containLabel: true }, xAxis: { type: 'category', data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], boundaryGap: false }, yAxis: { type: 'value' }, series: [{ data: [820, 932, 901, 934, 1290, 1330, 1320], type: 'line', areaStyle: { color: { type: 'linear', x: 0, y: 0, x2: 0, y2: 1, colorStops: [{ offset: 0, color: 'rgba(34, 197, 94, 0.2)' }, { offset: 1, color: 'rgba(34, 197, 94, 0)' }] } }, lineStyle: { color: '#16a34a' }, symbol: 'none', smooth: true }] }; myChart.setOption(option); window.addEventListener('resize', function () { myChart.resize(); });</script>