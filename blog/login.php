<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check username and plain password
    $result = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

    if ($result->num_rows > 0) {
        $_SESSION['user_id'] = $result->fetch_assoc()['id'];
        header("Location: dashboard.php");
    } else {
        $error = "Invalid username or password!";
    }
}
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

<body class="bg-gray-50 font-[Inter] antialiased">
    <div class="min-h-screen flex justify-center  ">
        <div class="min-h-screen flex items-center justify-center bg-gray-50">
            <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-lg shadow-lg">
                <div class="text-center"><img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                        alt="Logo" class="mx-auto h-12 w-auto" />
                    <h2 class="mt-6 text-3xl font-bold text-gray-900">Welcome </h2>
                    <p class="mt-2 text-sm text-gray-600">Please sign in to your account</p>
                </div>
                <form class="mt-8 space-y-6" method="POST">
                    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
                    <div class="rounded-md shadow-sm space-y-4">
                        <div><label for="email" class="block text-sm font-medium text-gray-700">Email
                                address</label><input id="email" name="username" type="text" placeholder="Username"
                                required=""
                                class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm"
                                placeholder="Enter your email" /></div>
                        <div><label for="password"
                                class="block text-sm font-medium text-gray-700">Password</label><input id="password"
                                name="password" type="password" placeholder="Password" required=""
                                class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm"
                                placeholder="Enter your password" /></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center"><input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" />
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-green-600 hover:text-green-500">Forgot your
                            password?</a>
                    </div>
                    <div><button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Sign
                            in</button></div>
                    <div class="text-center">
                        <p class="text-sm text-gray-600">Don&#39;t have an account? <a href="#"
                                class="font-medium text-green-600 hover:text-green-500">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>