<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Organisasi Profesional') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body class="bg-[#050505] text-white min-h-screen overflow-x-hidden font-['Instrument_Sans']">

    <!-- NAVBAR -->
    @if (Route::has('login'))
        <header
            class="absolute inset-x-0 top-0 z-20 px-6 py-5 sm:px-8 border-b border-white/5 bg-black/20 backdrop-blur-md">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <!-- Logo / Brand Name -->
                <div class="font-bold text-lg tracking-widest uppercase">
                    ORG<span class="text-gray-500">PRO.</span>
                </div>

                <nav class="flex items-center gap-4 text-sm text-white/70">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-full border border-white/10 bg-white/5 px-5 py-2 transition hover:border-white/20 hover:bg-white/10 hover:text-white">
                            Dashboard Anggota
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-white transition-colors px-2">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-full border border-white/10 bg-white/5 px-5 py-2 transition hover:border-white/20 hover:bg-white/10 hover:text-white">
                                Daftar Anggota
                            </a>
                        @endif
                    @endauth
                </nav>
            </div>
        </header>
    @endif

    <main class="relative min-h-screen">
        <!-- HERO SECTION -->
        <section class="hero__section relative min-h-screen overflow-hidden bg-[#050505] text-white">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(255,255,255,0.12),transparent_24%),radial-gradient(circle_at_80%_20%,rgba(255,255,255,0.08),transparent_12%),linear-gradient(135deg,#050505,#0a0a0a)] opacity-90">
            </div>

            <div
                class="relative z-10 mx-auto flex min-h-screen max-w-7xl flex-col justify-center gap-10 px-6 py-24 sm:px-8 lg:px-14">
                <p
                    class="hero__eyebrow max-w-max rounded-full border border-white/10 bg-white/5 px-4 py-2 text-[11px] uppercase tracking-[0.32em] text-white/70">
                    Organisasi Profesional
                </p>

                <h1
                    class="hero__title text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-semibold leading-[0.95] tracking-[-0.04em] text-white">
                    Membangun identitas organisasi<br class="hidden sm:block" />
                    dengan pengalaman digital yang memukau.
                </h1>

                <p class="hero__description max-w-2xl text-base sm:text-lg leading-8 text-white/70">
                    Desain antarmuka, animasi interaksi, dan storytelling visual yang dirancang untuk meningkatkan
                    kredibilitas, keterlibatan, dan momentum digital organisasi Anda.
                </p>

                <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                    <a href="#program"
                        class="hero__cta group inline-flex items-center justify-center rounded-full border border-white/20 bg-white/5 px-7 py-4 text-sm font-semibold tracking-[0.02em] text-white transition-all duration-300 hover:-translate-y-1 hover:border-white/40 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/20">
                        Jelajahi Program
                        <span
                            class="ml-3 inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition duration-300 group-hover:bg-white/20">
                            →
                        </span>
                    </a>

                    <a href="#about"
                        class="inline-flex items-center justify-center rounded-full border border-transparent px-7 py-4 text-sm font-medium text-white/70 transition duration-300 hover:text-white hover:underline underline-offset-4">
                        Laporan Dampak 2026
                    </a>
                </div>
            </div>
        </section>

        <!-- SECTION: TRUST SIGNALS (Legalitas & Mitra) -->
        <section class="py-10 border-y border-white/5 bg-[#0a0a0a]">
            <div class="container mx-auto px-6 text-center">
                <p class="text-xs text-gray-500 mb-6 uppercase tracking-[0.2em]">Terdaftar Resmi & Berkolaborasi Dengan
                </p>
                <div
                    class="flex flex-wrap justify-center items-center gap-10 md:gap-20 opacity-50 grayscale transition-all duration-500 hover:grayscale-0 hover:opacity-100">
                    <h3 class="text-xl font-bold font-serif">KEMENKUMHAM</h3>
                    <h3 class="text-xl font-extrabold tracking-tighter">UNIVERSITAS INDONESIA</h3>
                    <h3
                        class="text-xl font-bold text-transparent bg-clip-text bg-linear-to-r from-gray-200 to-gray-500">
                        KEMENDIKBUD</h3>
                    <h3 class="text-xl font-medium tracking-widest">TechCorp.</h3>
                </div>
            </div>
        </section>

        <!-- SECTION: PROGRAM UNGGULAN -->
        <section id="program" class="py-24 bg-[#050505] text-white relative">
            <div class="container mx-auto px-6 lg:px-12 max-w-7xl">
                <div class="mb-16 md:w-2/3 scroll-anim opacity-0 translate-y-10">
                    <h2 class="text-sm font-bold tracking-widest text-gray-400 uppercase mb-4">Program Kami</h2>
                    <h3 class="text-3xl md:text-5xl font-extrabold tracking-tight">
                        Menciptakan dampak melalui inisiatif terarah.
                    </h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div
                        class="scroll-anim opacity-0 translate-y-10 group p-8 rounded-2xl bg-[#0a0a0a] border border-gray-800 hover:border-gray-500 transition-all duration-500 hover:-translate-y-2">
                        <div
                            class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-black transition-colors duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Akselerasi Digital</h4>
                        <p class="text-gray-400 leading-relaxed text-sm">Membantu transformasi digital dengan teknologi
                            terbaru dan efisien untuk mencapai target organisasi.</p>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="scroll-anim opacity-0 translate-y-10 group p-8 rounded-2xl bg-[#0a0a0a] border border-gray-800 hover:border-gray-500 transition-all duration-500 hover:-translate-y-2 delay-100">
                        <div
                            class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-black transition-colors duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Kolaborasi Komunitas</h4>
                        <p class="text-gray-400 leading-relaxed text-sm">Membangun ekosistem yang solid melalui kegiatan
                            jejaring dan forum diskusi rutin.</p>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="scroll-anim opacity-0 translate-y-10 group p-8 rounded-2xl bg-[#0a0a0a] border border-gray-800 hover:border-gray-500 transition-all duration-500 hover:-translate-y-2 delay-200">
                        <div
                            class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center mb-6 group-hover:bg-white group-hover:text-black transition-colors duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold mb-3">Advokasi & Kebijakan</h4>
                        <p class="text-gray-400 leading-relaxed text-sm">Menjadi suara utama dalam merumuskan kebijakan
                            yang berpihak pada kemajuan anggota.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: TIM / PENGURUS DENGAN HOVER SOSMED -->
        <!-- SECTION: TIM / PENGURUS DENGAN HOVER SOSMED -->
        <section id="tim" class="py-24 bg-black text-white">
            <div class="container mx-auto px-6 lg:px-12 max-w-7xl text-center">
                <div class="mb-16 scroll-anim opacity-0 scale-95">
                    <h2 class="text-sm font-bold tracking-widest text-gray-400 uppercase mb-4">Pengurus Inti</h2>
                    <h3 class="text-3xl md:text-5xl font-extrabold tracking-tight">Orang-orang di balik layar.</h3>
                </div>

                <!-- AWAL GRID 4 KOLOM -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    @foreach ($tim as $index => $p)
                        <!-- Kartu Profil Dinamis dari Database -->
                        <div class="scroll-anim opacity-0 translate-y-10 text-left"
                            style="transition-delay: {{ $index * 150 }}ms;">
                            <div class="w-full aspect-[3/4] bg-[#111] rounded-xl mb-4 overflow-hidden relative group">
                                <!-- Foto Pengurus -->
                                <img src="{{ $p->foto_url ?? 'https://via.placeholder.com/400x500' }}"
                                    alt="{{ $p->nama_lengkap }}"
                                    class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105">

                                <!-- Overlay Interaktif -->
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-6 gap-3">
                                    @if($p->linkedin_url)
                                        <a href="{{ $p->linkedin_url }}" target="_blank"
                                            class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-gray-300 transition-colors transform translate-y-4 group-hover:translate-y-0 duration-500 font-bold">in</a>
                                    @endif
                                    @if($p->email)
                                        <a href="mailto:{{ $p->email }}"
                                            class="w-10 h-10 rounded-full bg-white text-black flex items-center justify-center hover:bg-gray-300 transition-colors transform translate-y-4 group-hover:translate-y-0 duration-500 delay-75 font-bold">@</a>
                                    @endif
                                </div>
                            </div>
                            <!-- Nama dan Jabatan -->
                            <h4 class="text-lg font-bold">{{ $p->nama_lengkap }}</h4>
                            <p class="text-sm text-gray-500 uppercase tracking-wide">{{ $p->jabatan }}</p>
                        </div>
                    @endforeach
                </div> <!-- PENUTUP GRID 4 KOLOM (Ini yang sebelumnya terhapus) -->

            </div> <!-- PENUTUP CONTAINER -->
        </section> <!-- PENUTUP SECTION TIM -->



        <!-- SECTION: BERITA & PUSAT INFORMASI (BARU) -->
        <section id="berita" class="py-24 bg-[#050505] text-white relative border-t border-white/5">
            <div class="container mx-auto px-6 lg:px-12 max-w-7xl">
                <div
                    class="flex flex-col md:flex-row justify-between items-end mb-12 scroll-anim opacity-0 translate-y-10">
                    <div class="md:w-2/3">
                        <h2 class="text-sm font-bold tracking-widest text-gray-400 uppercase mb-4">Pusat
                            Informasi</h2>
                        <h3 class="text-3xl md:text-5xl font-extrabold tracking-tight">Kabar & Kegiatan
                            Terbaru.</h3>
                    </div>
                    <a href="#"
                        class="mt-6 md:mt-0 inline-flex items-center text-sm font-semibold text-white/70 hover:text-white transition-colors border-b border-transparent hover:border-white pb-1">
                        Lihat Semua Berita <span class="ml-2">→</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Artikel 1 -->
                    <a href="#"
                        class="scroll-anim opacity-0 translate-y-10 block group rounded-2xl overflow-hidden bg-[#0a0a0a] border border-gray-800 hover:border-gray-500 transition-all duration-500">
                        <div class="aspect-video w-full bg-gray-800 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=800"
                                class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700"
                                alt="Berita">
                            <div
                                class="absolute top-4 left-4 bg-white text-black text-[10px] uppercase tracking-widest font-bold px-3 py-1 rounded-full">
                                Kegiatan</div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs text-gray-500 mb-3">14 Mei 2026</p>
                            <h4 class="text-xl font-bold mb-3 group-hover:text-gray-300 transition-colors">
                                Rapat Umum Anggota Tahunan 2026</h4>
                            <p class="text-gray-400 text-sm line-clamp-2">Diskusi strategi kuartal ketiga
                                dan pemilihan struktur panitia kerja baru untuk program akselerasi digital.
                            </p>
                        </div>
                    </a>

                    <!-- Artikel 2 -->
                    <a href="#"
                        class="scroll-anim opacity-0 translate-y-10 block group rounded-2xl overflow-hidden bg-[#0a0a0a] border border-gray-800 hover:border-gray-500 transition-all duration-500 delay-100">
                        <div class="aspect-video w-full bg-gray-800 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                                class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700"
                                alt="Berita">
                            <div
                                class="absolute top-4 left-4 bg-white text-black text-[10px] uppercase tracking-widest font-bold px-3 py-1 rounded-full">
                                Pengumuman</div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs text-gray-500 mb-3">10 Mei 2026</p>
                            <h4 class="text-xl font-bold mb-3 group-hover:text-gray-300 transition-colors">
                                Perilisan Platform Database Anggota</h4>
                            <p class="text-gray-400 text-sm line-clamp-2">Sistem registrasi ulang
                                menggunakan framework terbaru untuk memudahkan pendataan anggota secara
                                nasional.</p>
                        </div>
                    </a>

                    <!-- Artikel 3 -->
                    <a href="#"
                        class="scroll-anim opacity-0 translate-y-10 block group rounded-2xl overflow-hidden bg-[#0a0a0a] border border-gray-800 hover:border-gray-500 transition-all duration-500 delay-200">
                        <div class="aspect-video w-full bg-gray-800 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&q=80&w=800"
                                class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-700"
                                alt="Berita">
                            <div
                                class="absolute top-4 left-4 bg-white text-black text-[10px] uppercase tracking-widest font-bold px-3 py-1 rounded-full">
                                Seminar</div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs text-gray-500 mb-3">02 Mei 2026</p>
                            <h4 class="text-xl font-bold mb-3 group-hover:text-gray-300 transition-colors">
                                Workshop Prompt Engineering AI</h4>
                            <p class="text-gray-400 text-sm line-clamp-2">Pelatihan intensif penggunaan AI
                                untuk menunjang produktivitas desain visual dan penulisan laporan.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- SECTION: CALL TO ACTION -->
        <section id="cta" class="py-24 relative overflow-hidden">
            <div class="absolute inset-0 bg-linear-to-b from-[#050505] to-[#111] z-0"></div>
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-75 h-75 bg-white/5 blur-[120px] rounded-full pointer-events-none z-0">
            </div>

            <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center max-w-4xl">
                <h2
                    class="scroll-anim opacity-0 translate-y-10 text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">
                    Siap Membawa Organisasi<br>Anda ke Level Berikutnya?
                </h2>
                <p class="scroll-anim opacity-0 translate-y-10 text-gray-400 text-lg mb-10 mx-auto">
                    Mari berkolaborasi membangun ekosistem digital yang kuat, profesional, dan berdampak
                    nyata bagi seluruh anggota.
                </p>
                <div class="scroll-anim opacity-0 scale-95">
                    <a href="/register"
                        class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-black bg-white rounded-full hover:bg-gray-200 transition-colors duration-300 shadow-[0_0_30px_rgba(255,255,255,0.1)] hover:shadow-[0_0_40px_rgba(255,255,255,0.2)] group">
                        Bergabung Bersama Kami Sekarang
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                    <p class="text-xs text-gray-500 mt-6">Atau <a href="#" class="underline hover:text-white">unduh
                            formulir offline (PDF)</a>.</p>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-black text-white border-t border-white/10 pt-16 pb-8 relative z-10">
            <div class="container mx-auto px-6 lg:px-12 max-w-7xl">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12 scroll-anim opacity-0 translate-y-5">
                    <div class="md:col-span-2">
                        <div class="font-bold text-lg tracking-widest uppercase mb-4">
                            ORG<span class="text-gray-500">PRO.</span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
                            Membangun identitas dan mewujudkan visi melalui kolaborasi digital yang
                            inovatif, responsif, dan terukur sejak 2026.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4 tracking-wide text-sm uppercase">Tautan
                            Cepat</h4>
                        <ul class="space-y-3 text-sm text-gray-500">
                            <li><a href="#about" class="hover:text-white transition-colors">Profil
                                    Organisasi</a></li>
                            <li><a href="#program" class="hover:text-white transition-colors">Program
                                    Utama</a></li>
                            <li><a href="#tim" class="hover:text-white transition-colors">Susunan
                                    Pengurus</a></li>
                            <li><a href="#berita" class="hover:text-white transition-colors">Berita &
                                    Laporan</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4 tracking-wide text-sm uppercase">Hubungi
                            Kami</h4>
                        <ul class="space-y-3 text-sm text-gray-500">
                            <li>halo@organisasi.com</li>
                            <li>+62 812 3456 7890</li>
                            <li class="leading-relaxed">Gedung Sekretariat Bersama,<br>DKI Jakarta,
                                Indonesia</li>
                        </ul>
                    </div>
                </div>
                <div
                    class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-600 scroll-anim opacity-0">
                    <p>&copy; 2026 Organisasi Profesional. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="hover:text-white transition-colors">Instagram</a>
                        <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                        <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- SCRIPT ANIMASI -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.15 };
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        el.classList.remove('opacity-0', 'translate-y-10', 'translate-y-5', 'scale-95');
                        el.classList.add('opacity-100', 'translate-y-0', 'scale-100');
                        observer.unobserve(el);
                    }
                });
            }, observerOptions);

            // Saya mengubah class trigger menjadi lebih rapi menggunakan '.scroll-anim'
            document.querySelectorAll('.scroll-anim').forEach((el) => {
                el.classList.add('transition-all', 'duration-700', 'ease-out');
                observer.observe(el);
            });
        });
    </script>
</body>

</html>
