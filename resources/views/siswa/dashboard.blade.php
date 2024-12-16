<!DOCTYPE html>
<html>
<head>
    <title>Siswa Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center">Siswa Dashboard</h2>
            <p class="text-center">Anda login sebagai <strong>Siswa</strong>.</p>
            <a href="{{ route('logout') }}" class="block mt-4 text-center text-blue-500">Logout</a>
        </div>
    </div>
</body>
</html>