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

</body>
</html>