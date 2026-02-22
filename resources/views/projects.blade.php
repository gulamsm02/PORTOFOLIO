@extends('layouts.app')

@section('content')
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">
                Karya Terbaik <span class="text-indigo-600">Terpilih.</span>
            </h1>
            <p class="text-lg text-slate-600">
                Eksplorasi mendalam mengenai metodologi pengujian, otomatisasi sistem, dan analisis data yang saya terapkan secara profesional.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div onclick="openModal('bankdki')" class="group cursor-pointer p-8 bg-slate-50 rounded-[2.5rem] border border-slate-100 hover:border-indigo-500 hover:bg-white hover:shadow-2xl transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-[10px] font-bold uppercase rounded-full tracking-widest">Enterprise QA</span>
                    <svg class="w-6 h-6 text-slate-300 group-hover:text-indigo-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Apps Script QA Tools</h3>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed">Optimalisasi workflow dokumentasi pengujian perbankan melalui otomatisasi berbasis JavaScript.</p>
                <span class="text-xs font-bold text-indigo-600 uppercase tracking-widest border-b-2 border-indigo-100 pb-1">Review Technical Detail →</span>
            </div>

            <div onclick="openModal('ojk')" class="group cursor-pointer p-8 bg-slate-50 rounded-[2.5rem] border border-slate-100 hover:border-amber-500 hover:bg-white hover:shadow-xl transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <span class="px-3 py-1 bg-amber-100 text-amber-700 text-[10px] font-bold uppercase rounded-full tracking-widest">Internal System</span>
                    <svg class="w-6 h-6 text-slate-300 group-hover:text-amber-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Sistem HRD Otomatis</h3>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed">Transformasi digital administrasi SDM Dana Pensiun OJK menggunakan ekosistem Cloud API.</p>
                <span class="text-xs font-bold text-amber-600 uppercase tracking-widest border-b-2 border-amber-100 pb-1">Review Technical Detail →</span>
            </div>

            <div onclick="openModal('skripsi')" class="group cursor-pointer p-8 bg-slate-50 rounded-[2.5rem] border border-slate-100 hover:border-red-500 hover:bg-white hover:shadow-xl transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <span class="px-3 py-1 bg-red-100 text-red-700 text-[10px] font-bold uppercase rounded-full tracking-widest">Data Science</span>
                    <svg class="w-6 h-6 text-slate-300 group-hover:text-red-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Aplikasi Prediksi Kelahiran</h3>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed">Riset komparasi algoritma Machine Learning untuk analisis tren kependudukan nasional.</p>
                <span class="text-xs font-bold text-red-600 uppercase tracking-widest border-b-2 border-red-100 pb-1">Review Technical Detail →</span>
            </div>

            <div onclick="openModal('revou')" class="group cursor-pointer p-8 bg-slate-50 rounded-[2.5rem] border border-slate-100 hover:border-teal-500 hover:bg-white hover:shadow-xl transition-all duration-300">
                <div class="flex justify-between items-start mb-4">
                    <span class="px-3 py-1 bg-teal-100 text-teal-700 text-[10px] font-bold uppercase rounded-full tracking-widest">Web Development</span>
                    <svg class="w-6 h-6 text-slate-300 group-hover:text-teal-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-2">Shipping Landing Page</h3>
                <p class="text-slate-500 text-sm mb-6 leading-relaxed">Pengembangan interface responsif yang fokus pada performa dan pengalaman pengguna.</p>
                <span class="text-xs font-bold text-teal-600 uppercase tracking-widest border-b-2 border-teal-100 pb-1">Review Technical Detail →</span>
            </div>
        </div>
    </div>

    <div id="projectModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 bg-slate-900/90 backdrop-blur-sm">
        <div class="bg-white rounded-[3rem] max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl relative border border-slate-200">
            <button onclick="closeModal()" class="absolute top-6 right-6 z-10 bg-slate-100 text-slate-500 hover:bg-red-500 hover:text-white w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 text-2xl font-light">
                &times;
            </button>
            <div id="modalContent"></div>
        </div>
    </div>
</section>

<script>
    const projectData = {
        bankdki: {
            title: "QA Automation & Workflow Optimization (Bank DKI)",
            img: "https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200",
            content: `
                <div class="space-y-4 text-slate-600 text-sm leading-relaxed">
                    <p><strong>The Challenge:</strong> Tim Quality Assurance seringkali terhambat oleh proses dokumentasi manual yang repetitif.</p>
                    <p><strong>Technical Solution:</strong> Pengembangan Custom QA Tools berbasis Google Apps Script dan JavaScript untuk sinkronisasi data real-time.</p>
                    <p><strong>Result:</strong> Memangkas waktu kerja dokumentasi sebesar 40% dan eliminasi risiko human error.</p>
                </div>`
        },
        ojk: {
            title: "Digital Transformation: HRD Internal System (Dapen OJK)",
            // SUDAH DIBUNGKUS ASSET & HURUF KECIL
            img: "{{ asset('images/hrd.png') }}", 
            content: `
                <div class="space-y-4 text-slate-600 text-sm leading-relaxed">
                    <p><strong>The Challenge:</strong> Modernisasi sistem administrasi SDM dari konvensional ke platform terintegrasi.</p>
                    <p><strong>Technical Solution:</strong> Membangun HRIS memanfaatkan Cloud Workspace API dan otomatisasi PDF Generator.</p>
                    <p><strong>Result:</strong> Mewujudkan paperless environment dan meningkatkan efisiensi operasional hingga 50%.</p>
                </div>`
        },
        skripsi: {
            title: "Predictive Analytics: Machine Learning Comparison Study",
            img: "https://images.unsplash.com/photo-1527474305487-b87b222841cc?q=80&w=1200",
            content: `
                <div class="space-y-4 text-slate-600 text-sm leading-relaxed">
                    <p><strong>The Challenge:</strong> Menemukan algoritma presisi untuk menangani fluktuasi data statistik kependudukan.</p>
                    <p><strong>Technical Solution:</strong> Riset komparasi Linear Regression dan Facebook Prophet menggunakan Python.</p>
                    <p><strong>Result:</strong> Memberikan wawasan mendalam untuk kebijakan publik dan pencapaian akademik IPK 3.91.</p>
                </div>`
        },
        revou: {
            title: "Full-stack Web Dev: Responsive Shipping Platform",
            // SUDAH DIBUNGKUS ASSET & HURUF KECIL
            img: "{{ asset('images/ship.png') }}", 
            content: `
                <div class="space-y-4 text-slate-600 text-sm leading-relaxed">
                    <p><strong>The Challenge:</strong> Membangun platform logistik digital yang responsif dan ringan.</p>
                    <p><strong>Technical Solution:</strong> Pengembangan antarmuka menggunakan HTML5, CSS3, dan Vanilla JavaScript selama RevoU Tech Academy.</p>
                    <p><strong>Result:</strong> Simulasi kalkulator ongkos kirim dan sistem validasi formulir yang interaktif.</p>
                </div>`
        }
    };

    function openModal(id) {
        const modal = document.getElementById('projectModal');
        const content = document.getElementById('modalContent');
        const data = projectData[id];

        content.innerHTML = `
            <div class="relative h-72 overflow-hidden shadow-inner bg-slate-100">
                <img src="${data.img}" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/800x450?text=Image+Not+Found'">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>
            <div class="p-10 md:p-14">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-6 leading-tight">${data.title}</h2>
                <div class="prose prose-slate max-w-none">
                    ${data.content}
                </div>
                <div class="mt-10 pt-8 border-t border-slate-100">
                    <button onclick="closeModal()" class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition-all duration-300">
                        Tutup Detail Proyek
                    </button>
                </div>
            </div>
        `;
        
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('projectModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>
@endsection