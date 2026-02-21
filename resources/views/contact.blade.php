@extends('layouts.app')

@section('content')
    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto bg-white rounded-[2rem] shadow-2xl shadow-indigo-100 border border-slate-100 overflow-hidden flex flex-col md:flex-row">
                <div class="bg-indigo-600 p-12 text-white md:w-2/5">
                    <h2 class="text-3xl font-bold mb-6">Mari berdiskusi tentang ide Anda.</h2>
                    <p class="text-indigo-100 mb-12">Saya selalu terbuka untuk kolaborasi proyek menarik atau sekadar minum kopi secara virtual.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center gap-4 text-sm">
                            <div class="w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">📧</div>
                            <span>halo@emailanda.com</span>
                        </div>
                        <div class="flex items-center gap-4 text-sm">
                            <div class="w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">📍</div>
                            <span>Jakarta, Indonesia</span>
                        </div>
                    </div>
                </div>

                <div class="p-12 md:w-3/5">
                    <form action="/submit-contact" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition" placeholder="John Doe" required>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Email</label>
                                <input type="email" name="email" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition" placeholder="john@example.com" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-400 mb-2">Pesan</label>
                            <textarea name="message" rows="5" class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition" placeholder="Apa yang bisa saya bantu?" required></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">Kirim Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection