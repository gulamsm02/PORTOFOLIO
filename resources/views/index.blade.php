@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden py-24 lg:py-32">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <span class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest text-indigo-600 uppercase bg-indigo-50 rounded-full">Available for Quality Testing</span>
                <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8">
                    Memastikan Aplikasi Berjalan Tanpa <span class="text-indigo-600">Celah.</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed mb-10 max-w-2xl mx-auto">
                    Saya seorang "Quality Assurance" yang berfokus pada pengujian manual maupun otomatis untuk menjamin standar kualitas tinggi pada setiap produk digital.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/projects" class="px-8 py-4 bg-indigo-600 text-white rounded-xl font-bold shadow-xl shadow-indigo-200 hover:bg-indigo-700 transition transform hover:-translate-y-1">Lihat Testing Case</a>
                    <a href="/about" class="px-8 py-4 bg-white border border-slate-200 rounded-xl font-bold hover:bg-slate-50 transition">Metodologi Saya</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100 py-24">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight">Project Testing History</h2>
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
                            <span class="text-white font-medium text-sm">Lihat Laporan Pengujian & Bug Report</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="text-[10px] font-bold tracking-tighter px-2 py-1 bg-indigo-50 rounded text-indigo-600 uppercase">{{ $project['tag'] }}</span>
                            <span class="text-[10px] font-bold tracking-tighter px-2 py-1 bg-green-50 rounded text-green-600 uppercase">Passed</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 group-hover:text-indigo-600 transition">{{ $project['title'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">Menerapkan skenario pengujian menyeluruh untuk meminimalkan bug produksi hingga 95%.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection