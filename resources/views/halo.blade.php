<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    <nav class="bg-blue-600 text-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold">Halo Laravel 🚀</h1>
            <ul class="flex space-x-6">
                <li><a href="#" class="hover:text-gray-200">Home</a></li>
                <li><a href="#" class="hover:text-gray-200">About</a></li>
                <li><a href="#" class="hover:text-gray-200">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Halo, {{ $nama }} 👋</h2>
            <p class="text-lg mb-6">Selamat datang di halaman Laravel sederhana dengan desain modern.</p>
            <a href="#features" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100">
                Lihat Fitur
            </a>
        </div>
    </section>

    <section id="features" class="py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h3 class="text-xl font-bold mb-2">⚡ Cepat</h3>
                <p>Laravel membuat pengembangan web lebih cepat dengan Artisan CLI.</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h3 class="text-xl font-bold mb-2">🎨 Modern</h3>
                <p>Didesain dengan TailwindCSS agar tampilan rapi dan responsif.</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h3 class="text-xl font-bold mb-2">🛡️ Aman</h3>
                <p>Laravel punya fitur keamanan bawaan seperti CSRF Protection & Auth.</p>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white text-center py-6">
        <p>&copy; {{ date('Y') }} Dibuat dengan ❤️ pakai Laravel.</p>
    </footer>

</body>
</html>