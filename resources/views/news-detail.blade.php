<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $news->title }} - UMKM CIKOKOL</title>
    <meta name="description" content="{{ $news->excerpt }}"/>
    
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
                        "classic-gold-light": "#E5C889",
                        "classic-cream": "#FAF7F2",
                        "classic-sand": "#EFE8DE",
                        "classic-charcoal": "#232625",
                        "classic-border": "#E2D8C8",
                        "primary": "#0F4C36",
                        "secondary": "#C5A059",
                        "background": "#FAF7F2"
                    },
                    fontFamily: {
                        "serif-title": ["Cormorant Garamond", "serif"],
                        "sans-body": ["Plus Jakarta Sans", "sans-serif"],
                        "body-md": ["Plus Jakarta Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <style>
        .font-classic { font-family: 'Cormorant Garamond', serif; }
        .font-sans-body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .classic-glass {
            background: rgba(250, 247, 242, 0.94);
            backdrop-filter: blur(16px);
            border: 1px solid #E2D8C8;
            box-shadow: 0 12px 36px rgba(15, 76, 54, 0.05);
        }
        .gold-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, #C5A059 50%, transparent 100%);
        }
        /* Hide Scrollbar for Horizontal Swipe on Mobile */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-classic-cream text-classic-charcoal font-sans-body antialiased overflow-x-hidden pb-20 md:pb-0">

    <!-- TopNavBar -->
    <header class="fixed top-0 w-full z-50 bg-classic-cream/95 backdrop-blur-md shadow-sm border-b border-classic-border transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center h-20">
            <div class="flex items-center gap-4">
                <div class="w-11 h-11 bg-classic-green rounded-lg flex items-center justify-center text-classic-gold font-bold shadow-md border border-classic-gold/30">
                    <span class="material-symbols-outlined text-2xl">storefront</span>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="font-classic text-2xl md:text-3xl text-classic-green font-bold tracking-tight block leading-none">UMKM CIKOKOL</a>
                    <span class="text-xs text-classic-gold font-semibold uppercase tracking-wider">KKN Pemuda Wangsakara • Univ. Yatsi Madani</span>
                </div>
            </div>

            <nav class="hidden md:flex gap-8 items-center">
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('home') }}">Beranda</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('umkm.index') }}">UMKM Cikokol</a>
                <a class="text-sm font-semibold text-classic-green border-b-2 border-classic-gold pb-1 tracking-wide" href="{{ route('news.index') }}">Berita</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('tim-kkn.index') }}">Tim KKN</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="https://wa.me/6282371001161" target="_blank" class="bg-classic-green text-classic-cream px-6 py-2.5 rounded-lg text-sm font-semibold hover:bg-classic-dark transition-all duration-300 shadow-md hidden md:flex items-center gap-2 border border-classic-gold/40">
                    <span class="material-symbols-outlined text-base text-classic-gold">call</span>
                    Kontak Posko
                </a>
            </div>
        </div>
    </header>

    <main class="pt-28 pb-20">
        <div class="max-w-4xl mx-auto px-6">
            
            <!-- Back Button Styled -->
            <a href="{{ route('news.index') }}" class="inline-flex items-center gap-2 bg-white hover:bg-classic-sand text-classic-green border border-classic-border px-5 py-2.5 rounded-xl text-xs font-bold shadow-sm transition-all mb-8">
                <span class="material-symbols-outlined text-base text-classic-gold">arrow_back</span>
                <span>Kembali ke Daftar Berita</span>
            </a>

            <!-- Article Header Container -->
            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-classic-border shadow-xl space-y-8">
                
                <!-- Category & Meta Info Bar -->
                <div>
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="bg-classic-green text-classic-gold text-xs px-3.5 py-1 rounded-md font-bold uppercase tracking-wider border border-classic-gold/30 shadow-sm">
                            {{ $news->category }}
                        </span>
                        <span class="text-xs text-classic-gold font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">calendar_today</span>
                            {{ $news->date }}
                        </span>
                        <span class="text-xs text-classic-charcoal/40">•</span>
                        <span class="text-xs text-classic-charcoal/70 font-medium flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm text-classic-green">school</span>
                            Tim PDD KKN Pemuda Wangsakara UYM
                        </span>
                    </div>

                    <!-- Article Title -->
                    <h1 class="font-classic text-3xl sm:text-4xl md:text-5xl text-classic-green font-bold leading-tight tracking-tight">
                        {{ $news->title }}
                    </h1>
                </div>

                <!-- Cover Image Banner -->
                <div class="relative h-[360px] sm:h-[460px] rounded-2xl overflow-hidden border border-classic-border bg-classic-sand shadow-lg">
                    <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-full object-cover"/>
                    <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-classic-dark/80 via-classic-dark/20 to-transparent p-4 text-classic-cream text-xs font-light italic">
                        Kegiatan Pengabdian Masyarakat KKN Pemuda Wangsakara UYM di Kelurahan Cikokol
                    </div>
                </div>

                <!-- Excerpt Highlight Blockquote -->
                <div class="bg-classic-sand/60 border-l-4 border-classic-gold p-6 rounded-r-2xl">
                    <p class="font-classic text-lg sm:text-xl text-classic-green font-bold italic leading-relaxed">
                        "{{ $news->excerpt }}"
                    </p>
                </div>

                <!-- Article Main Content -->
                <div class="text-sm sm:text-base text-classic-charcoal/90 leading-relaxed font-light space-y-6 border-t border-b border-classic-sand py-8">
                    <p class="first-letter:text-4xl first-letter:font-bold first-letter:text-classic-green first-letter:font-classic first-letter:mr-2 first-letter:float-left">
                        {{ $news->content }}
                    </p>
                    
                    <p class="bg-white p-5 rounded-xl border border-classic-border text-xs text-classic-charcoal/80">
                        <strong>Catatan Posko KKN:</strong> Seluruh pendampingan perizinan NIB, pendaftaran Google Maps, dan pelatihan digitalisasi UMKM oleh mahasiswa Tim KKN Pemuda Wangsakara Universitas Yatsi Madani disediakan secara **100% Gratis** untuk seluruh pelaku usaha di Kelurahan Cikokol.
                    </p>
                </div>

                <!-- Share & Contact Footer CTA -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
                    <div class="text-xs text-classic-charcoal/70 font-semibold">
                        Bagikan berita ini atau hubungi Posko KKN jika ada pertanyaan:
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="https://wa.me/6282371001161?text=Halo%20Tim%20KKN,%20saya%20membaca%20berita%20{{ urlencode($news->title) }}" target="_blank" class="bg-classic-green hover:bg-classic-dark text-classic-cream px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 shadow-md border border-classic-gold/30 transition-colors">
                            <span class="material-symbols-outlined text-base text-classic-gold">chat</span>
                            <span>Tanya Posko WA</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer Modern Classic -->
    <footer class="bg-classic-green text-classic-cream py-12 border-t border-classic-gold/30">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-classic-cream text-classic-green rounded-lg flex items-center justify-center font-bold">
                        <span class="material-symbols-outlined">storefront</span>
                    </div>
                    <div>
                        <h3 class="font-classic text-2xl font-bold text-classic-cream">UMKM CIKOKOL</h3>
                        <span class="text-xs text-classic-gold font-semibold uppercase">Univ. Yatsi Madani</span>
                    </div>
                </div>
                <p class="text-sm text-classic-cream/80 leading-relaxed mb-3">
                    Website Resmi & Portal UMKM Binaan Tim KKN Pemuda Wangsakara Universitas Yatsi Madani.
                </p>
                <p class="text-xs text-classic-gold">
                    Jl. Cikokol Raya No. 45, Kecamatan Tangerang, Kota Tangerang, Banten 15117.
                </p>
            </div>
            <div>
                <h4 class="font-classic text-xl font-bold text-classic-gold mb-3">Tautan Navigasi</h4>
                <ul class="space-y-2 text-sm text-classic-cream/80">
                    <li><a href="{{ route('home') }}" class="hover:text-classic-gold transition-colors">Beranda</a></li>
                    <li><a href="{{ route('umkm.index') }}" class="hover:text-classic-gold transition-colors">UMKM Cikokol</a></li>
                    <li><a href="{{ route('news.index') }}" class="hover:text-classic-gold transition-colors">Berita</a></li>
                    <li><a href="{{ route('tim-kkn.index') }}" class="hover:text-classic-gold transition-colors">Tim KKN Pemuda Wangsakara</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-classic text-xl font-bold text-classic-gold mb-3">Kontak & Medsos Resmi</h4>
                <div class="space-y-2 text-sm text-classic-cream/80 mb-4">
                    <p class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-base text-classic-gold">chat</span>
                        WA Posko: 082371001161
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-base text-classic-gold">mail</span>
                        Email: kkn.wangsakara@uym.ac.id
                    </p>
                </div>
                <p class="text-xs text-classic-gold/90 font-medium leading-relaxed">
                    © 2026 Persembahan Tim KKN Pemuda Wangsakara - Universitas Yatsi Madani (UYM). Seluruh Hak Cipta Dilindungi.
                </p>
            </div>
        </div>
    </footer>

    @include('partials.mobile-nav', ['active' => 'news'])
</body>
</html>
