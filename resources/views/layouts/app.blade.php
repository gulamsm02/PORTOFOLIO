<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portofolio Saya') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>body { font-family: 'Inter', sans-serif; }</style>
    <link rel="icon" type="image/png" href="{{ asset('images/portofolio.png') }}">
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-indigo-100 selection:text-indigo-700">

    <header class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-lg border-b border-slate-200/50">
        <div class="container mx-auto px-6 h-20 flex justify-between items-center">
            <a href="/" class="text-2xl font-extrabold tracking-tighter bg-gradient-to-r from-indigo-600 to-violet-600 bg-clip-text text-transparent">
                MYPORTO.
            </a>
            <nav class="hidden md:block">
                <ul class="flex space-x-10 font-medium text-sm uppercase tracking-widest text-slate-600">
                    <li><a href="/" class="hover:text-indigo-600 transition">Beranda</a></li>
                    <li><a href="/about" class="hover:text-indigo-600 transition">Tentang</a></li>
                    <li><a href="/projects" class="hover:text-indigo-600 transition">Proyek</a></li>
                    <li><a href="/contact" class="px-5 py-2.5 bg-slate-900 text-white rounded-full hover:bg-indigo-600 transition duration-300">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="bg-white border-t border-slate-200 py-12">
        <div class="container mx-auto px-6 text-center">
            <p class="text-slate-500 font-medium tracking-tight">
                &copy; {{ date('Y') }} — Didesain dengan penuh dedikasi.
            </p>
        </div>
    </footer>

</body>
</html>