<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-gray-900/90 p-8 rounded-xl shadow-2xl border border-gray-800">
        <h1 class="text-3xl font-extrabold mb-6 text-center text-white drop-shadow">Sign Up</h1>
        <form class="flex flex-col space-y-5">
            <input type="text" placeholder="Full Name" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <input type="email" placeholder="Email" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <input type="password" placeholder="Password" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <input type="password" placeholder="Confirm Password" class="p-3 rounded-lg bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white font-bold py-2 rounded-lg hover:from-blue-600 hover:to-cyan-500 transition shadow-lg">Sign Up</button>
        </form>
        <div class="mt-6 text-center text-gray-400">
            Already have an account?
            <a href="/login" class="text-blue-400 hover:underline font-semibold">Login</a>
        </div>
    </div>
</body>
</html>
