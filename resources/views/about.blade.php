@extends('layouts.app')

@section('content')
<div class="bg-white">
    <section class="py-20 bg-slate-50 border-b border-slate-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">
                    Mengenal <span class="text-indigo-600">Saya Lebih Dekat.</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed">
                    Saya adalah seorang Fullstack Developer yang berfokus pada ekosistem Laravel. Saya percaya bahwa kode yang baik adalah kode yang tidak hanya berjalan, tapi juga mudah dirawat dan memberikan solusi nyata bagi pengguna.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-square bg-indigo-100 rounded-[2rem] overflow-hidden rotate-3 hover:rotate-0 transition duration-500 shadow-2xl shadow-indigo-100">
                        <img src="/path-to-your-photo.jpg" alt="Your Name" class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-500">
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-yellow-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
                </div>

                <div>
                    <h2 class="text-3xl font-bold mb-8 italic">"Building the future, one line of code at a time."</h2>
                    <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                        <p>
                            Berawal dari rasa penasaran dengan cara kerja internet, saya kini telah mendalami pengembangan web selama lebih dari [X] tahun. Saya mengkhususkan diri dalam membangun aplikasi web yang kompleks namun tetap memiliki antarmuka yang intuitif.
                        </p>
                        <p>
                            Pengalaman saya mencakup pengembangan **Sistem Manajemen Inventaris**, **Aplikasi E-commerce**, hingga **Integrasi API pihak ketiga**. Saya selalu antusias mempelajari teknologi baru untuk meningkatkan kualitas produk yang saya bangun.
                        </p>
                    </div>

                    <div class="grid grid-cols-3 gap-8 mt-12 border-t border-slate-100 pt-12">
                        <div>
                            <span class="block text-3xl font-extrabold text-indigo-600">20+</span>
                            <span class="text-sm text-slate-400 font-bold uppercase tracking-widest">Projects</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-extrabold text-indigo-600">15+</span>
                            <span class="text-sm text-slate-400 font-bold uppercase tracking-widest">Clients</span>
                        </div>
                        <div>
                            <span class="block text-3xl font-extrabold text-indigo-600">3+</span>
                            <span class="text-sm text-slate-400 font-bold uppercase tracking-widest">Years</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-900 text-white rounded-[3rem] mx-6 mb-24">
        <div class="container mx-auto px-12">
            <h2 class="text-2xl font-bold mb-12 text-center tracking-widest uppercase">My Tech Stack</h2>
            <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-70">
                <span class="text-2xl font-bold">PHP</span>
                <span class="text-2xl font-bold">Laravel</span>
                <span class="text-2xl font-bold">Tailwind CSS</span>
                <span class="text-2xl font-bold">MySQL</span>
                <span class="text-2xl font-bold">JavaScript</span>
                <span class="text-2xl font-bold">Git</span>
            </div>
        </div>
    </section>
</div>
@endsection