<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Management Berita - Dashboard Admin KKN Cikokol</title>
    
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
<body class="bg-classic-cream text-classic-charcoal font-sans-body antialiased min-h-screen">

    <!-- Top Admin Header -->
    <header class="bg-classic-green text-classic-cream border-b border-classic-gold/30 sticky top-0 z-40 shadow-md">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center h-20">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-classic-cream text-classic-green rounded-lg flex items-center justify-center font-bold">
                    <span class="material-symbols-outlined">admin_panel_settings</span>
                </div>
                <div>
                    <h1 class="font-classic text-2xl font-bold leading-none">Panel Admin Cikokol</h1>
                    <span class="text-xs text-classic-gold font-semibold uppercase">KKN Pemuda Wangsakara • Univ. Yatsi Madani</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" target="_blank" class="text-xs font-semibold bg-white/10 hover:bg-white/20 text-classic-cream px-3.5 py-2 rounded-xl flex items-center gap-1.5 border border-classic-cream/20 transition-all">
                    <span class="material-symbols-outlined text-base text-classic-gold">open_in_new</span>
                    <span class="hidden sm:inline">Web Publik</span>
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-700/80 hover:bg-red-700 text-white px-3.5 py-2 rounded-xl text-xs font-bold transition-all border border-red-500/40 flex items-center gap-1">
                        <span class="material-symbols-outlined text-base">logout</span>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 md:px-12 py-8">
        
        <!-- Main Navigation Tabs -->
        <div class="flex items-center gap-2 mb-6 border-b border-classic-border pb-3">
            <a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 rounded-xl text-xs font-bold text-classic-charcoal/70 hover:text-classic-green hover:bg-white transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-base">storefront</span>
                <span>Data UMKM</span>
            </a>
            <a href="{{ route('admin.news.index') }}" class="px-5 py-2.5 rounded-xl text-xs font-bold text-classic-cream bg-classic-green shadow-sm border border-classic-gold/40 flex items-center gap-2">
                <span class="material-symbols-outlined text-base text-classic-gold">newspaper</span>
                <span>Berita KKN</span>
            </a>
        </div>

        <!-- Alerts -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-300 text-green-800 text-sm p-4 rounded-xl mb-6 font-semibold flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">check_circle</span>
                {{ session('success') }}
            </div>
        @endif

        <!-- Action & Search Bar -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8 bg-white p-5 rounded-2xl border border-classic-border shadow-sm">
            <div>
                <h2 class="font-classic text-2xl font-bold text-classic-green">Daftar Berita & Artikel Kegiatan</h2>
                <p class="text-xs text-classic-charcoal/70">Total: <strong>{{ count($newsList) }} Berita Diterbitkan</strong></p>
            </div>

            <a href="{{ route('admin.news.create') }}" class="bg-classic-green hover:bg-classic-dark text-classic-cream px-5 py-2.5 rounded-xl text-xs font-bold transition-all shadow-md border border-classic-gold/30 flex items-center gap-1.5 whitespace-nowrap">
                <span class="material-symbols-outlined text-base text-classic-gold">add</span>
                Tambah Berita Baru
            </a>
        </div>

        <!-- News Table -->
        <div class="bg-white rounded-2xl border border-classic-border shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-classic-sand/60 text-classic-green font-bold text-xs uppercase tracking-wider border-b border-classic-border">
                            <th class="p-4">Berita & Judul</th>
                            <th class="p-4">Tanggal & Kategori</th>
                            <th class="p-4">Ringkasan (Excerpt)</th>
                            <th class="p-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-classic-sand text-sm">
                        @forelse($newsList as $item)
                        <tr class="hover:bg-classic-cream/50 transition-colors">
                            <td class="p-4">
                                <div class="flex items-center gap-3">
                                    <img src="{{ $item->image }}" alt="{{ $item->title }}" class="w-14 h-14 rounded-lg object-cover border border-classic-border bg-classic-sand"/>
                                    <div class="max-w-xs sm:max-w-md">
                                        <h3 class="font-classic text-lg font-bold text-classic-green leading-tight">
                                            {{ $item->title }}
                                        </h3>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4">
                                <span class="font-bold text-xs text-classic-gold block">{{ $item->date }}</span>
                                <span class="bg-classic-green/10 text-classic-green text-[10px] px-2 py-0.5 rounded font-bold uppercase">
                                    {{ $item->category }}
                                </span>
                            </td>
                            <td class="p-4 text-xs text-classic-charcoal/80 max-w-sm">
                                <p class="line-clamp-2">{{ $item->excerpt }}</p>
                            </td>
                            <td class="p-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.news.edit', ['id' => $item->id]) }}" class="bg-classic-sand hover:bg-classic-border text-classic-green p-2 rounded-lg transition-colors" title="Edit Berita">
                                        <span class="material-symbols-outlined text-base">edit</span>
                                    </a>
                                    <form action="{{ route('admin.news.destroy', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita {{ $item->title }}?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-50 hover:bg-red-100 text-red-700 p-2 rounded-lg transition-colors" title="Hapus Berita">
                                            <span class="material-symbols-outlined text-base">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-8 text-center text-xs text-classic-charcoal/60">
                                Belum ada berita kegiatan KKN terdaftar di database.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>
</html>
