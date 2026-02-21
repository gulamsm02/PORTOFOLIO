<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portofolio QA') }}</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
    
    <link rel="icon" type="image/png" href="{{ asset('images/portofolio.png') }}">
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-indigo-100 selection:text-indigo-700">

    <header class="{{ Request::is('/') ? 'absolute bg-transparent' : 'relative bg-slate-900 shadow-lg' }} w-full top-0 left-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-6 h-24 flex justify-between items-center">
            
            <a href="/" class="text-2xl font-extrabold tracking-tighter text-white group">
                MYPORTO<span class="text-indigo-400">.</span>
            </a>

            <nav class="hidden md:block">
                <ul class="flex space-x-10 items-center font-medium text-sm uppercase tracking-widest text-slate-200">
                    <li><a href="/" class="hover:text-white transition {{ Request::is('/') ? 'text-white border-b-2 border-indigo-400 pb-1' : '' }}">Beranda</a></li>
                    <li><a href="/about" class="hover:text-white transition {{ Request::is('about') ? 'text-white border-b-2 border-indigo-400 pb-1' : '' }}">Tentang</a></li>
                    <li><a href="/projects" class="hover:text-white transition {{ Request::is('projects') ? 'text-white border-b-2 border-indigo-400 pb-1' : '' }}">Proyek</a></li>
                    <li>
                        <a href="/contact" class="px-6 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/20 active:scale-95">
                            Kontak
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="md:hidden flex items-center">
                <button id="hamburger" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="nav-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-slate-900/95 backdrop-blur-lg border-t border-slate-800 absolute w-full left-0 transition-all duration-300 shadow-2xl">
            <div class="flex flex-col px-6 py-8 space-y-6">
                <a href="/" class="text-lg font-medium text-slate-200 hover:text-white {{ Request::is('/') ? 'text-indigo-400' : '' }}">Beranda</a>
                <a href="/about" class="text-lg font-medium text-slate-200 hover:text-white {{ Request::is('about') ? 'text-indigo-400' : '' }}">Tentang</a>
                <a href="/projects" class="text-lg font-medium text-slate-200 hover:text-white {{ Request::is('projects') ? 'text-indigo-400' : '' }}">Proyek</a>
                <hr class="border-slate-800">
                <a href="/contact" class="w-full py-4 bg-indigo-600 text-white rounded-xl font-bold text-center shadow-lg shadow-indigo-500/20">
                    Kontak Saya
                </a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-slate-900 border-t border-slate-800 py-10">
        <div class="container mx-auto px-6 text-center">
            <div class="text-slate-400 text-sm tracking-wide">
                &copy; 2026 <span class="text-white font-semibold">MYPORTO.</span> 
                <span class="mx-2 text-slate-600">|</span> 
                Gulam Syahrul Muharom
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('hamburger');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('nav-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            
            // Logika ganti icon dari hamburger ke silang (X)
            if (menu.classList.contains('hidden')) {
                icon.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
            } else {
                icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        });
    </script>

</body>
</html>