<!-- app/Views/user/landing.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md mx-auto bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-6 text-center">Welcome</h2>
        <div class="mb-8">
            <form action="/login" method="post" class="space-y-4">
                <h3 class="text-lg font-semibold mb-2">Login</h3>
                <div>
                    <label for="login_email" class="block text-sm font-medium">Email</label>
                    <input type="email" id="login_email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="login_password" class="block text-sm font-medium">Password</label>
                    <input type="password" id="login_password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded hover:bg-blue-700">Login</button>
            </form>
        </div>
        <hr class="my-6">
        <div>
            <form action="/signup" method="post" class="space-y-4">
                <h3 class="text-lg font-semibold mb-2">Sign Up</h3>
                <div>
                    <label for="signup_name" class="block text-sm font-medium">Name</label>
                    <input type="text" id="signup_name" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                </div>
                <div>
                    <label for="signup_email" class="block text-sm font-medium">Email</label>
                    <input type="email" id="signup_email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                </div>
                <div>
                    <label for="signup_password" class="block text-sm font-medium">Password</label>
                    <input type="password" id="signup_password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-green-600 text-white rounded hover:bg-green-700">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>