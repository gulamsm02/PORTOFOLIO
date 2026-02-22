@extends('layouts.app')

@section('content')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class="bg-white" x-data="{ openModal: null }">
    <section class="py-20 bg-slate-50 border-b border-slate-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">
                    Mengenal <span class="text-indigo-600">Saya Lebih Dekat.</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed">
                    Saya adalah seorang <strong>Quality Assurance Engineer & Software Developer</strong> yang berdedikasi tinggi pada efisiensi sistem dan penjaminan mutu perangkat lunak. Saya percaya bahwa teknologi terbaik lahir dari kombinasi kode yang bersih dan pengujian yang tak kenal kompromi.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-indigo-500/10 rounded-[2.5rem] rotate-3 group-hover:rotate-6 group-hover:scale-105 transition-all duration-500"></div>
                    <div class="relative aspect-square bg-indigo-100 rounded-[2rem] overflow-hidden shadow-2xl shadow-indigo-100 transition-all duration-500 group-hover:-rotate-2 group-hover:scale-[1.02]">
                        <img src="{{ asset('images/saya.jpg') }}" alt="Gulam Syahrul Muharom" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl font-bold mb-6 italic text-slate-800">
                        "Ensuring Excellence, Delivering Quality, One Script at a Time."
                    </h2>
                    
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Berawal dari antusiasme terhadap pengembangan teknologi informasi dan analisis data, saya telah mendalami pengembangan web serta metode penjaminan kualitas aplikasi secara profesional. Saya mengkhususkan diri dalam membangun aplikasi web yang andal sekaligus mengoptimalkan alur kerja melalui otomatisasi.
                    </p>
                    
                    <div class="bg-indigo-50/50 p-8 rounded-3xl border border-indigo-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <p class="font-bold text-slate-900 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Fokus & Pengalaman Utama:
                        </p>
                        <ul class="space-y-4 text-sm text-slate-600">
                            <li>• Pengembangan <strong>Sistem Informasi Internal (HRIS)</strong> yang terintegrasi dengan ekosistem Cloud API untuk efisiensi SDM.</li>
                            <li>• Implementasi <strong>Otomatisasi Dokumentasi QA</strong> guna mempercepat siklus pengujian dan rilis produk.</li>
                            <li>• Riset mendalam pada bidang <strong>Machine Learning</strong> untuk analisis data kependudukan yang presisi.</li>
                        </ul>
                    </div>

                    <div class="grid grid-cols-3 gap-8 mt-12 border-t border-slate-100 pt-12 text-center">
                        <div class="group cursor-default">
                            <span class="block text-3xl font-extrabold text-indigo-600 group-hover:scale-110 transition-transform">10+</span>
                            <span class="text-xs text-slate-400 font-bold uppercase tracking-widest">Projects</span>
                        </div>
                        <div class="group cursor-default border-x border-slate-100">
                            <span class="block text-3xl font-extrabold text-indigo-600 group-hover:scale-110 transition-transform">3.91</span>
                            <span class="text-xs text-slate-400 font-bold uppercase tracking-widest">GPA Index</span>
                        </div>
                        <div class="group cursor-default">
                            <span class="block text-3xl font-extrabold text-indigo-600 group-hover:scale-110 transition-transform">1+</span>
                            <span class="text-xs text-slate-400 font-bold uppercase tracking-widest">Years Exp.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Sertifikasi & Lisensi</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto rounded-full"></div>
            </div>

            @php
                // Semua nama file image diubah ke huruf kecil agar sinkron dengan production
                $certs = [
                    [
                        'id' => 'mapres',
                        'title' => 'Student With Best Academic Achievement',
                        'org' => 'Univ. Gunadarma',
                        'year' => '2021',
                        'image' => 'mapres.png', 
                        'description' => 'Penghargaan atas pencapaian akademik terbaik di tingkat universitas pada semester kedua.',
                        'skills' => ['Academic Excellence', 'Public Speaking', 'Analytical Thinking']
                    ],
                    [
                        'id' => 'qa_sdlc',
                        'title' => 'QA in Software Development Life Cycle',
                        'org' => 'MySkill',
                        'year' => 'Jun 2025',
                        'image' => 'sdlc.png',
                        'description' => 'Sertifikasi profesional mengenai peran dan implementasi QA dalam setiap tahapan pengembangan software (SDLC).',
                        'skills' => ['Quality Assurance', 'SDLC', 'Test Planning']
                    ],
                    [
                        'id' => 'qa_fun',
                        'title' => 'Quality Assurance Fundamental',
                        'org' => 'MySkill',
                        'year' => 'Jun 2025',
                        'image' => 'fundamental.png',
                        'description' => 'Pemahaman mendasar mengenai metodologi pengujian, pelaporan bug, dan penjaminan kualitas produk digital.',
                        'skills' => ['Manual Testing', 'Bug Reporting', 'Test Case Design']
                    ],
                    [
                        'id' => 'revou',
                        'title' => 'Data & Software Engineering',
                        'org' => 'RevoU',
                        'year' => 'Des 2023',
                        'image' => 'revou.png',
                        'description' => 'Program intensif yang mencakup pengembangan software modern dan manajemen infrastruktur data.',
                        'skills' => ['HTML', 'CSS', 'Java']
                    ]
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($certs as $cert)
                <div class="group p-8 bg-white border border-slate-100 rounded-[2.5rem] shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
                    <div class="w-10 h-10 bg-indigo-50 rounded-xl flex items-center justify-center mb-6 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 leading-tight mb-2">{{ $cert['title'] }}</h3>
                    <p class="text-slate-500 text-sm mb-6">{{ $cert['org'] }} • {{ $cert['year'] }}</p>
                    
                    <button type="button" @click="openModal = '{{ $cert['id'] }}'" class="mt-auto text-indigo-600 font-bold text-sm flex items-center hover:gap-2 transition-all cursor-pointer">
                        Lihat Detail <span class="ml-2">→</span>
                    </button>
                </div>

                <div x-show="openModal === '{{ $cert['id'] }}'" 
                     class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-slate-900/80 backdrop-blur-md"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     x-cloak>
                    <div class="bg-white rounded-[2.5rem] max-w-4xl w-full overflow-hidden shadow-2xl relative flex flex-col md:flex-row"
                         @click.away="openModal = null">
                        
                        <div class="md:w-1/2 bg-slate-100 p-6 flex items-center justify-center border-b md:border-b-0 md:border-r border-slate-100">
                            <img src="{{ asset('images/' . $cert['image']) }}" 
                                 alt="{{ $cert['title'] }}" 
                                 class="max-w-full h-auto rounded-lg shadow-lg"
                                 onerror="this.src='https://via.placeholder.com/600x400?text=Image+Not+Found'">
                        </div>

                        <div class="md:w-1/2 p-10 relative">
                            <button @click="openModal = null" class="absolute top-6 right-6 text-slate-400 hover:text-indigo-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            </button>

                            <div class="mb-8">
                                <h2 class="text-2xl font-bold text-slate-900 leading-tight mb-2">{{ $cert['title'] }}</h2>
                                <p class="text-slate-500 font-medium">{{ $cert['org'] }} | {{ $cert['year'] }}</p>
                            </div>

                            <div class="space-y-6">
                                <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100">
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Deskripsi Singkat</p>
                                    <p class="text-sm text-slate-700 leading-relaxed italic">"{{ $cert['description'] }}"</p>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-900 mb-3 uppercase tracking-wider">Keahlian:</p>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($cert['skills'] as $skill)
                                            <span class="px-3 py-1 bg-indigo-50 text-indigo-700 text-[11px] font-bold rounded-lg">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <button @click="openModal = null" class="w-full py-4 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/20">
                                    Tutup Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Teknologi & Instrumen</h2>
                <div class="w-16 h-1 bg-indigo-600 mx-auto rounded-full"></div>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                @foreach(['PHP / Laravel', 'JavaScript', 'Python / ML', 'MySQL', 'QA Automation', 'Tailwind CSS', 'Git / GitHub'] as $tech)
                <div class="px-8 py-4 bg-white border border-slate-100 rounded-2xl font-bold text-slate-700 shadow-sm hover:border-indigo-200 hover:text-indigo-600 hover:shadow-md transition-all duration-300 cursor-default">
                    {{ $tech }}
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

<style>
    [x-cloak] { display: none !important; }
</style>
@endsection