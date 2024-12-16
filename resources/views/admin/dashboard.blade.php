<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800">
            <div class="flex items-center pl-2.5 mb-5">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">TailAdmin</span>
            </div>
            
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700 group">
                        <i class="fas fa-home w-5 h-5 transition duration-75"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-700 group">
                        <i class="fas fa-users w-5 h-5 transition duration-75"></i>
                        <span class="ml-3">Siswa</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="p-4 sm:ml-64">
        <!-- Top Header -->
        <nav class="flex justify-between items-center mb-4 bg-white p-4 rounded-lg shadow-sm">
            <div>
                <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-bell text-gray-500"></i>
                </button>
                <div class="flex items-center gap-2">
                    <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin" alt="user photo">
                    <span class="text-sm text-gray-600">Admin</span>
                </div>
            </div>
        </nav>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            <div class="p-4 bg-white rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-blue-600 bg-blue-100 rounded-lg">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-base font-normal text-gray-500">Total Siswa</h3>
                        <span class="text-2xl font-bold text-gray-900">{{ $jumlahSiswa }}</span>
                    </div>
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-lg">
                        <i class="fas fa-user-check text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-base font-normal text-gray-500">Siswa Aktif</h3>
                        <span class="text-2xl font-bold text-gray-900">{{ $jumlahSiswa }}</span>
                    </div>
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-lg">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-base font-normal text-gray-500">Login Terakhir</h3>
                        <span class="text-2xl font-bold text-gray-900">{{ date('H:i') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Table -->
        <div class="bg-white rounded-lg shadow-sm">
            <div class="p-4 border-b">
                <h2 class="text-lg font-semibold text-gray-900">Aktivitas Terbaru</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Aktivitas</th>
                            <th scope="col" class="px-6 py-3">Waktu</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">Siswa baru terdaftar</td>
                            <td class="px-6 py-4">2 menit yang lalu</td>
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Selesai</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>