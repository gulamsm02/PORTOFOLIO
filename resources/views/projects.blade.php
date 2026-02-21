@extends('layouts.app')

@section('content')
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">
                Karya Terbaik <span class="text-indigo-600">Terpilih.</span>
            </h1>
            <p class="text-lg text-slate-600">
                Berikut adalah beberapa proyek yang telah saya kerjakan, mulai dari sistem manajemen backend yang kompleks hingga antarmuka pengguna yang responsif.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <div class="group flex flex-col bg-slate-50 rounded-[2rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition duration-500">
                <div class="relative overflow-hidden aspect-video bg-slate-200">
                    <img src="/proyek-1.jpg" alt="E-Commerce System" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    <div class="absolute inset-0 bg-indigo-900/20 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                </div>
                <div class="p-8 md:p-10">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-[10px] font-bold uppercase tracking-widest rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-teal-100 text-teal-700 text-[10px] font-bold uppercase tracking-widest rounded-full">Midtrans API</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition">E-Commerce Architecture</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Pengembangan platform belanja online dengan integrasi gerbang pembayaran otomatis dan sistem manajemen stok real-time.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="text-sm font-bold text-slate-900 border-b-2 border-indigo-500 pb-1 hover:text-indigo-600 transition">Live Demo</a>
                        <a href="#" class="text-sm font-bold text-slate-400 hover:text-slate-600 transition">GitHub</a>
                    </div>
                </div>
            </div>

            <div class="group flex flex-col bg-slate-50 rounded-[2rem] overflow-hidden border border-slate-100 hover:shadow-2xl transition duration-500">
                <div class="relative overflow-hidden aspect-video bg-slate-200 text-center flex items-center justify-center">
                     <img src="/proyek-2.jpg" alt="SaaS Dashboard" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                </div>
                <div class="p-8 md:p-10">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-[10px] font-bold uppercase tracking-widest rounded-full">Tailwind</span>
                        <span class="px-3 py-1 bg-amber-100 text-amber-700 text-[10px] font-bold uppercase tracking-widest rounded-full">MySQL</span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition">SaaS Analytics Dashboard</h3>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Dasbor pemantauan data statistik untuk perusahaan rintisan dengan visualisasi grafik interaktif menggunakan Chart.js.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="text-sm font-bold text-slate-900 border-b-2 border-indigo-500 pb-1 hover:text-indigo-600 transition">Live Demo</a>
                        <a href="#" class="text-sm font-bold text-slate-400 hover:text-slate-600 transition">GitHub</a>
                    </div>
                </div>
            </div>

            </div>
    </div>
</section>
@endsection