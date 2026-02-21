@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden pt-40 pb-24 lg:pt-52 lg:pb-40 bg-slate-900">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/IT.PNG') }}" alt="IT Background" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/40 to-slate-100"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-indigo-400 uppercase bg-indigo-500/10 backdrop-blur-md rounded-full border border-indigo-500/20">
                    Available for Quality Testing
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8 text-white">
                    Memastikan Aplikasi Berjalan Tanpa <span class="text-indigo-400">Celah.</span>
                </h1>
                <p class="text-xl text-slate-300 leading-relaxed mb-10 max-w-2xl mx-auto">
                    Saya seorang <span class="text-white font-semibold">Quality Assurance Engineer</span> yang berfokus pada pengujian manual maupun otomatis untuk menjamin kualitas tinggi pada setiap produk digital.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/projects" class="px-8 py-4 bg-indigo-600 text-white rounded-xl font-bold shadow-xl shadow-indigo-500/20 hover:bg-indigo-700 transition transform hover:-translate-y-1">Lihat Testing Case</a>
                    <a href="/about" class="px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-xl font-bold hover:bg-white/20 transition">Metodologi Saya</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-24">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900">Project Testing History</h2>
                    <p class="text-slate-500 mt-2">Daftar aplikasi yang telah melewati proses pengujian ketat saya.</p>
                </div>
                <a href="/projects" class="text-indigo-600 font-bold hover:underline underline-offset-8">Semua Portofolio QA &rarr;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @php
                    $qa_projects = [
                        ['title' => 'E-Commerce Security Audit', 'tag' => 'Automation'],
                        ['title' => 'Banking App Regression', 'tag' => 'Manual'],
                        ['title' => 'SaaS API Performance Test', 'tag' => 'API Testing']
                    ];
                @endphp

                @foreach($qa_projects as $index => $project)
                <div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-2xl transition duration-500">
                    <div class="relative overflow-hidden aspect-video bg-slate-200">
                        <div class="absolute inset-0 flex items-center justify-center bg-indigo-900/5 group-hover:bg-indigo-900/10 transition">
                            <span class="text-indigo-600 font-mono text-lg font-bold opacity-40 uppercase tracking-widest">Test Case #{{$index + 1}}</span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                            <span class="text-white font-medium text-sm">Lihat Laporan Pengujian</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="text-[10px] font-bold tracking-tighter px-2 py-1 bg-indigo-50 rounded text-indigo-600 uppercase">{{ $project['tag'] }}</span>
                            <span class="text-[10px] font-bold tracking-tighter px-2 py-1 bg-green-50 rounded text-green-600 uppercase">Passed</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-indigo-600 transition text-slate-900">{{ $project['title'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Prosedur testing komprehensif untuk memastikan fungsionalitas sistem berjalan 100%.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection