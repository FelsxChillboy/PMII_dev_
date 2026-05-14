<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Organisasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-white font-['Instrument_Sans']">
    <nav class="p-6 border-b border-white/5 bg-black/50 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <a href="{{ route('berita.show', $berita->id) }}" class="text-sm font-bold tracking-widest uppercase">← Kembali</a>
            <div class="text-[10px] uppercase tracking-[0.2em] text-gray-500">Pusat Informasi</div>
        </div>
    </nav>

    <article class="max-w-3xl mx-auto px-6 py-20">
        <div class="inline-block px-3 py-1 rounded-full border border-gray-800 text-[10px] uppercase tracking-widest text-gray-400 mb-6">
            {{ $berita->kategori }}
        </div>

        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight tracking-tight">
            {{ $berita->judul }}
        </h1>

        <p class="text-gray-500 text-sm mb-10">
            Diterbitkan pada {{ \Carbon\Carbon::parse($b->tanggal_publikasi)->translatedFormat('d F Y') }}
        </p>

        <div class="aspect-video w-full rounded-2xl overflow-hidden mb-12 border border-white/10">
            <img src="{{ $berita->foto_url }}" class="w-full h-full object-cover" alt="{{ $berita->judul }}">
        </div>

        <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed text-lg">
            {!! nl2br(e($berita->ringkasan)) !!}
            <!-- Nantinya Anda bisa menambah kolom 'konten_lengkap' di database untuk isi yang lebih panjang -->
        </div>
    </article>

    <footer class="py-20 border-t border-white/5 text-center text-xs text-gray-600">
        &copy; 2026 Organisasi Profesional.
    </footer>
</body>
</html>
