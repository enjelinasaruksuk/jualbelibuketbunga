<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Seller</title>
    <link href="{{ asset('styles/flowbite.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('styles/flowbite.min.js') }}"></script>
</head>

<body class="bg-gradient-to-b from-pink-50 to-purple-100 min-h-screen flex">

    <!-- Sidebar -->
    <!-- Sidebar -->
    <aside class="w-1/5 h-screen bg-gradient-to-b from-purple-100 to-white p-6">
        <div class="text-center mb-8">
            <img src="{{ asset('images/logo.png') }}" class="h-100">
        </div>
        <nav class="space-y-4 text-sm">
            <a href="#" class="block bg-pink-100 px-4 py-2 rounded-md">🏠 DASHBOARD</a>
            <a href="#" class="block bg-pink-100 px-4 py-2 rounded-md">📦 DAFTAR PRODUK</a>
            <a href="#" class="block bg-pink-100 px-4 py-2 rounded-md">📋 REKAP PENJUALAN</a>
            <a href="#" class="block bg-pink-100 px-4 py-2 rounded-md">🏷️ KATEGORI PRODUK</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <!-- Navbar -->
        <main class="w-4/5 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold flex items-center gap-2">🏷️ KATEGORI</h1>
                <div class="flex gap-4 text-xl">
                    <i class="fas fa-user"></i>
                    <i class="fas fa-sign-out-alt"></i>
                </div>
            </div>

            <div class="mb-4">
                <a href="#" class="bg-[#FBF0F0] text-black hover:bg-[#F2DADA] py-2 px-4 rounded-md">
                    ➕ TAMBAH KATEGORI
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="flex items-center px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>



</body>

</html>