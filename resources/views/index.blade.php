@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden py-24 lg:py-32">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-indigo-600 uppercase bg-indigo-50 rounded-full">Available for Work</span>
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8">
                    Membangun Pengalaman Digital yang <span class="text-indigo-600">Bermakna.</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed mb-10 max-w-2xl mx-auto">
                    Saya seorang Web Developer yang berspesialisasi dalam ekosistem PHP & Laravel untuk menciptakan aplikasi web yang cepat, aman, dan estetik.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/projects" class="px-8 py-4 bg-indigo-600 text-white rounded-xl font-bold shadow-xl shadow-indigo-200 hover:bg-indigo-700 transition transform hover:-translate-y-1">Lihat Proyek</a>
                    <a href="/about" class="px-8 py-4 bg-white border border-slate-200 rounded-xl font-bold hover:bg-slate-50 transition">Kenali Saya</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-24">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">Proyek Terbaru</h2>
                    <p class="text-slate-500 mt-2">Kumpulan karya terbaik yang pernah saya kerjakan.</p>
                </div>
                <a href="/projects" class="text-indigo-600 font-bold hover:underline underline-offset-8">Semua Proyek &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach([1, 2, 3] as $item)
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl transition duration-500">
                    <div class="relative overflow-hidden aspect-video">
                        <img src="proyek-{{$item}}.jpg" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                            <span class="text-white font-medium">Lihat Detail Case Study</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="text-[10px] font-bold tracking-tighter px-2 py-1 bg-slate-100 rounded text-slate-600 uppercase">Laravel</span>
                            <span class="text-[10px] font-bold tracking-tighter px-2 py-1 bg-indigo-50 rounded text-indigo-600 uppercase">Tailwind</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-indigo-600 transition">Nama Proyek Kece #{{$item}}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Penjelasan singkat solusi yang diberikan untuk masalah client dengan teknologi modern.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection