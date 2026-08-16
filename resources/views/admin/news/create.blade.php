<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tambah Berita Baru - Dashboard Admin Cikokol</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "classic-green": "#0F4C36",
                        "classic-dark": "#0A3324",
                        "classic-gold": "#C5A059",
                        "classic-cream": "#FAF7F2",
                        "classic-sand": "#EFE8DE",
                        "classic-charcoal": "#232625",
                        "classic-border": "#E2D8C8"
                    },
                    fontFamily: {
                        "serif-title": ["Cormorant Garamond", "serif"],
                        "sans-body": ["Plus Jakarta Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <style>
        .font-classic { font-family: 'Cormorant Garamond', serif; }
        .font-sans-body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-classic-sand/60 text-classic-charcoal font-sans-body antialiased min-h-screen py-10">

    <div class="max-w-3xl mx-auto px-6">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <a href="{{ route('admin.news.index') }}" class="inline-flex items-center gap-2 bg-white hover:bg-classic-sand text-classic-green border border-classic-border px-4 py-2 rounded-xl text-xs font-bold shadow-sm transition-all mb-3">
                    <span class="material-symbols-outlined text-sm text-classic-gold">arrow_back</span>
                    <span>Kembali ke Daftar Berita</span>
                </a>
                <h1 class="font-classic text-3xl font-bold text-classic-green">Tambah Berita Kegiatan KKN Baru</h1>
            </div>
        </div>

        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 text-xs p-4 rounded-xl mb-6 font-semibold">
                Mohon perbaiki kesalahan berikut:
                <ul class="list-disc list-inside mt-1">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl p-8 border border-classic-border shadow-xl space-y-6">
            @csrf
            
            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Judul Berita / Kegiatan</label>
                <input type="text" name="title" required placeholder="Contoh: Pendampingan NIB Bagi UMKM RW 01 Cikokol" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Tanggal Berita</label>
                    <input type="text" name="date" required placeholder="Contoh: 18 Agustus 2026" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Kategori Berita</label>
                    <select name="category" required class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm bg-white outline-none focus:ring-2 focus:ring-classic-green">
                        <option value="Legalitas Usaha">Legalitas Usaha</option>
                        <option value="Seminar & Workshop">Seminar & Workshop</option>
                        <option value="Digital Branding">Digital Branding</option>
                        <option value="Pengabdian Warga">Pengabdian Warga</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Upload Foto Cover Berita</label>
                <input type="file" name="image_file" accept="image/*" class="w-full px-4 py-2 rounded-xl border border-classic-border text-xs bg-classic-sand/30"/>
            </div>

            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Ringkasan Berita (Excerpt)</label>
                <textarea name="excerpt" rows="2" required placeholder="Ringkasan singkat berita untuk kartu beranda..." class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"></textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Isi Berita Lengkap</label>
                <textarea name="content" rows="6" required placeholder="Tuliskan berita secara lengkap di sini..." class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"></textarea>
            </div>

            <div class="pt-4 border-t border-classic-sand flex items-center gap-4">
                <button type="submit" class="bg-classic-green hover:bg-classic-dark text-classic-cream px-8 py-3 rounded-xl font-bold text-sm shadow-md border border-classic-gold/30">
                    Terbitkan Berita
                </button>
                <a href="{{ route('admin.news.index') }}" class="text-xs font-bold text-classic-charcoal/70 hover:underline">Batal</a>
            </div>
        </form>
    </div>

</body>
</html>
