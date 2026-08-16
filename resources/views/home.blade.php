<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>UMKM CIKOKOL - KKN Pemuda Wangsakara Universitas Yatsi Madani</title>
    <meta name="description" content="Website Resmi & Pemetaan UMKM Cikokol. Hasil Karya Pengabdian Masyarakat Tim KKN Pemuda Wangsakara Universitas Yatsi Madani 2026/2027."/>
    
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
                        "sans-body": ["Plus Jakarta Sans", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <style>
        .font-classic { font-family: 'Cormorant Garamond', serif; }
        .font-sans-body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .classic-hero-gradient {
            background: linear-gradient(180deg, rgba(10,51,36,0.85) 0%, rgba(15,76,54,0.94) 100%);
        }
        
        .gold-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, #C5A059 50%, transparent 100%);
        }

        /* Micro Animations */
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        .animate-float { animation: floatSlow 4s ease-in-out infinite; }

        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(197, 160, 89, 0.4); }
            50% { box-shadow: 0 0 0 12px rgba(197, 160, 89, 0); }
        }
        .pulse-glow { animation: pulseGlow 2.5s infinite; }

        .card-hover-effect {
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover-effect:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(15, 76, 54, 0.15);
            border-color: #C5A059;
        }

        /* Shimmer Button Effect */
        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(60deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: rotate(30deg);
            transition: all 0.75s ease;
        }
        .btn-shimmer:hover::after {
            left: 100%;
        }
        /* Hide Scrollbar for Horizontal Swipe on Mobile */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-classic-cream text-classic-charcoal font-sans-body antialiased overflow-x-hidden pb-20 md:pb-0">

    <!-- TopNavBar with Dynamic Scroll Effect -->
    <header id="main-header" class="fixed top-0 w-full z-50 bg-classic-cream/95 backdrop-blur-md shadow-sm border-b border-classic-border transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex justify-between items-center h-20">
            <div class="flex items-center gap-4">
                <div class="w-11 h-11 bg-classic-green rounded-xl flex items-center justify-center text-classic-gold font-bold shadow-md border border-classic-gold/30 hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-2xl">storefront</span>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="font-classic text-2xl md:text-3xl text-classic-green font-bold tracking-tight block leading-none hover:text-classic-gold transition-colors">UMKM CIKOKOL</a>
                    <span class="text-xs text-classic-gold font-semibold uppercase tracking-wider">KKN Pemuda Wangsakara • Univ. Yatsi Madani</span>
                </div>
            </div>

            <!-- Navbar Links -->
            <nav class="hidden md:flex gap-8 items-center">
                <a class="text-sm font-semibold text-classic-green border-b-2 border-classic-gold pb-1 tracking-wide" href="{{ route('home') }}">Beranda</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('umkm.index') }}">UMKM Cikokol</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('news.index') }}">Berita</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('tim-kkn.index') }}">Tim KKN</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="https://wa.me/6282371001161" target="_blank" class="btn-shimmer bg-classic-green text-classic-cream px-6 py-2.5 rounded-xl text-sm font-semibold hover:bg-classic-dark transition-all duration-300 shadow-md hidden md:flex items-center gap-2 border border-classic-gold/40">
                    <span class="material-symbols-outlined text-base text-classic-gold">call</span>
                    Kontak Posko
                </a>
                <button onclick="toggleMobileMenu()" class="md:hidden text-classic-green focus:outline-none">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden md:hidden bg-classic-cream border-b border-classic-border px-6 py-4 flex flex-col gap-3 shadow-lg">
            <a class="text-sm font-bold text-classic-green py-2 border-l-4 border-classic-gold pl-2" href="{{ route('home') }}">Beranda</a>
            <a class="text-sm font-medium text-classic-charcoal py-2 hover:text-classic-green" href="{{ route('umkm.index') }}">UMKM Cikokol</a>
            <a class="text-sm font-medium text-classic-charcoal py-2 hover:text-classic-green" href="{{ route('news.index') }}">Berita</a>
            <a class="text-sm font-medium text-classic-charcoal py-2 hover:text-classic-green" href="{{ route('tim-kkn.index') }}">Tim KKN</a>
        </div>
    </header>

    <main class="pt-20">
        <!-- Hero Section with Animated Float Badge -->
        <section class="relative py-20 md:py-32 w-full flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="/images/umkm_hero.jpg" alt="Cikokol Banner" class="w-full h-full object-cover"/>
                <div class="absolute inset-0 classic-hero-gradient"></div>
            </div>

            <div class="relative z-10 max-w-5xl w-full mx-auto px-6 text-center text-classic-cream">
                <div class="animate-float mb-6">
                    <span class="inline-flex items-center gap-2 bg-classic-dark/80 border border-classic-gold/50 px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-widest text-classic-gold-light shadow-xl backdrop-blur-md">
                        <span class="material-symbols-outlined text-sm text-classic-gold">school</span>
                        Tim KKN Pemuda Wangsakara • Universitas Yatsi Madani (UYM)
                    </span>
                </div>

                <h1 class="font-classic text-4xl sm:text-5xl md:text-6xl text-classic-cream mb-6 font-bold leading-tight tracking-wide">
                    Website Resmi & Pemetaan <br/>
                    <span class="italic text-classic-gold">UMKM CIKOKOL</span>
                </h1>

                <p class="text-base sm:text-lg max-w-2xl mx-auto text-classic-cream/90 mb-10 leading-relaxed font-light">
                    Karya Pengabdian Masyarakat Tim KKN Pemuda Wangsakara Universitas Yatsi Madani (Fokus Binaan RW 01 & RW 07) dalam mendorong NIB, Sertifikasi Halal, dan Digitalisasi UMKM Cikokol.
                </p>

                <!-- RW Quick Filter Strip (RW 01 s/d RW 07) -->
                <div class="glass-card p-6 rounded-3xl max-w-4xl mx-auto shadow-2xl border border-classic-border backdrop-blur-md bg-white/90">
                    <div class="flex items-center justify-between flex-wrap gap-2 mb-4">
                        <p class="text-xs font-bold text-classic-green uppercase tracking-widest flex items-center gap-2">
                            <span class="material-symbols-outlined text-classic-gold text-base">map</span>
                            Filter Wilayah RW Kelurahan Cikokol:
                        </p>
                        <span id="filter-result-count" class="text-xs font-bold bg-classic-green/10 text-classic-green px-3 py-1 rounded-full border border-classic-green/20">
                            Menampilkan {{ count($umkms) }} UMKM
                        </span>
                    </div>

                    <div class="flex overflow-x-auto no-scrollbar sm:grid sm:grid-cols-8 gap-2 py-1 snap-x touch-pan-x">
                        <button onclick="filterRw('all', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-classic-green text-classic-cream py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all border border-classic-gold/40 shadow-sm hover:scale-105 active:scale-95">Semua</button>
                        <button onclick="filterRw('RW 01', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95">RW 01 ★</button>
                        <button onclick="filterRw('RW 02', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95">RW 02</button>
                        <button onclick="filterRw('RW 03', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95">RW 03</button>
                        <button onclick="filterRw('RW 04', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95">RW 04</button>
                        <button onclick="filterRw('RW 05', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95">RW 05</button>
                        <button onclick="filterRw('RW 06', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95">RW 06</button>
                        <button onclick="filterRw('RW 07', this)" class="rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95 text-classic-gold font-bold">RW 07 ★</button>
                    </div>
                </div>
            </div>
        </section>

        <div class="gold-divider"></div>

        <!-- Section Statistik Interaktif dengan Animation Counter -->
        <section id="statistik" class="py-12 bg-classic-sand/60 border-b border-classic-border">
            <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="p-6 bg-white rounded-2xl border border-classic-border shadow-sm hover:border-classic-gold transition-all hover:-translate-y-1 group">
                    <span class="material-symbols-outlined text-classic-gold text-4xl mb-2 group-hover:scale-110 transition-transform">location_city</span>
                    <h3 class="font-classic text-3xl md:text-4xl font-bold text-classic-green">7 RW</h3>
                    <p class="text-xs text-classic-charcoal/70 font-semibold uppercase tracking-wider mt-1">Wilayah Cikokol</p>
                </div>
                <div class="p-6 bg-white rounded-2xl border border-classic-border shadow-sm hover:border-classic-gold transition-all hover:-translate-y-1 group">
                    <span class="material-symbols-outlined text-classic-gold text-4xl mb-2 group-hover:scale-110 transition-transform">storefront</span>
                    <h3 class="font-classic text-3xl md:text-4xl font-bold text-classic-green">65+ Usaha</h3>
                    <p class="text-xs text-classic-charcoal/70 font-semibold uppercase tracking-wider mt-1">UMKM Terdaftar</p>
                </div>
                <div class="p-6 bg-white rounded-2xl border border-classic-border shadow-sm hover:border-classic-gold transition-all hover:-translate-y-1 group">
                    <span class="material-symbols-outlined text-classic-gold text-4xl mb-2 group-hover:scale-110 transition-transform">groups</span>
                    <h3 class="font-classic text-3xl md:text-4xl font-bold text-classic-green">22 Mahasiswa</h3>
                    <p class="text-xs text-classic-charcoal/70 font-semibold uppercase tracking-wider mt-1">Tim Wangsakara UYM</p>
                </div>
                <div class="p-6 bg-white rounded-2xl border border-classic-border shadow-sm hover:border-classic-gold transition-all hover:-translate-y-1 group">
                    <span class="material-symbols-outlined text-classic-gold text-4xl mb-2 group-hover:scale-110 transition-transform">school</span>
                    <h3 class="font-classic text-3xl md:text-4xl font-bold text-classic-green">31 Hari</h3>
                    <p class="text-xs text-classic-charcoal/70 font-semibold uppercase tracking-wider mt-1">1 - 31 Agustus 2026</p>
                </div>
            </div>
        </section>

        <!-- Section Katalog UMKM per RW -->
        <section class="py-20 bg-classic-cream">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="flex items-center justify-between flex-wrap gap-4 mb-12 border-b border-classic-border pb-6">
                    <div>
                        <span id="rw-badge-label" class="text-xs text-classic-gold font-bold uppercase tracking-widest block mb-1">Peta Wilayah Usaha</span>
                        <h2 id="rw-title-label" class="font-classic text-3xl md:text-4xl text-classic-green font-bold">Direktori UMKM Cikokol per RW</h2>
                    </div>

                    <a href="{{ route('umkm.index') }}" class="btn-shimmer inline-flex items-center gap-2 bg-classic-green text-classic-cream px-6 py-3 rounded-xl text-sm font-semibold hover:bg-classic-dark transition-all border border-classic-gold/30 shadow-md">
                        <span>Lihat Katalog Lengkap</span>
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </a>
                </div>

                <div id="umkm-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($umkms as $item)
                    <!-- Clickable Card Redirecting to Detail Page with Hover Animation -->
                    <div class="umkm-card card-hover-effect group bg-white rounded-2xl overflow-hidden border border-classic-border shadow-sm flex flex-col justify-between cursor-pointer" data-rw="{{ $item->rw }}" onclick="window.location.href='{{ route('umkm.show', ['id' => $item->id]) }}'">
                        <div>
                            <div class="relative h-56 overflow-hidden bg-classic-sand">
                                <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
                                <span class="absolute top-3 left-3 bg-classic-green text-classic-cream text-xs px-3 py-1 rounded-md font-bold shadow-md border border-classic-gold/40">
                                    {{ $item->rw }} Cikokol
                                </span>
                                <span class="absolute top-3 right-3 bg-white/95 text-classic-green text-xs px-3 py-1 rounded-md font-semibold border border-classic-border shadow-sm">
                                    {{ $item->category }}
                                </span>
                            </div>
                            <div class="p-6">
                                <span class="text-xs text-classic-gold font-bold block mb-1.5">{{ $item->rt }} • Pemilik: {{ $item->owner }}</span>
                                <h3 class="font-classic text-2xl font-bold text-classic-green mb-2 group-hover:text-classic-gold transition-colors">
                                    {{ $item->name }}
                                </h3>
                                <p class="text-sm text-classic-charcoal/80 mb-4 line-clamp-2 leading-relaxed font-light">{{ $item->description }}</p>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="flex items-center justify-between border-t border-b border-classic-sand py-2.5 text-xs mb-4">
                                <span class="text-classic-green font-bold text-sm">{{ $item->price }}</span>
                                <span class="text-classic-charcoal/70 font-medium">{{ $item->hours }}</span>
                            </div>
                            <div class="grid grid-cols-2 gap-2" onclick="event.stopPropagation()">
                                <a href="{{ route('umkm.show', ['id' => $item->id]) }}" class="w-full bg-classic-sand hover:bg-classic-border text-classic-green py-2.5 rounded-xl text-xs font-bold text-center transition-colors">
                                    Detail Usaha
                                </a>
                                <a href="https://wa.me/62{{ substr($item->phone, 1) }}?text=Halo%20{{ urlencode($item->owner) }}" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-2.5 rounded-xl text-xs font-bold text-center flex items-center justify-center gap-1 border border-classic-gold/30 transition-colors">
                                    <span class="material-symbols-outlined text-sm text-classic-gold">chat</span> WA
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- Floating Live WhatsApp Quick Contact Widget (Bottom Right) -->
    <div class="fixed bottom-20 right-4 sm:bottom-6 sm:right-6 z-40 flex items-center gap-3">
        <div id="wa-tooltip" class="hidden sm:block bg-classic-dark text-classic-cream text-xs px-3.5 py-2 rounded-xl border border-classic-gold/40 shadow-xl font-medium">
            👋 Ada Pertanyaan Posko? Chat Kami!
        </div>
        <a href="https://wa.me/6282371001161" target="_blank" class="pulse-glow w-14 h-14 bg-classic-green text-classic-gold rounded-full flex items-center justify-center shadow-2xl border-2 border-classic-gold hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-3xl">chat</span>
        </a>
    </div>

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
                    <p class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-base text-classic-gold">camera_alt</span>
                        Instagram: <a href="https://instagram.com/kkn_pemudawangsakara" target="_blank" class="hover:text-classic-gold underline">@kkn_pemudawangsakara</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-base text-classic-gold">movie</span>
                        TikTok: <a href="https://tiktok.com/@kkn_pemudawangsakara" target="_blank" class="hover:text-classic-gold underline">@kkn_pemudawangsakara</a>
                    </p>
                </div>
                <p class="text-xs text-classic-gold/90 font-medium leading-relaxed">
                    © 2026 Persembahan Tim KKN Pemuda Wangsakara - Universitas Yatsi Madani (UYM). Seluruh Hak Cipta Dilindungi.
                </p>
            </div>
        </div>
    </footer>

    @include('partials.mobile-nav', ['active' => 'home'])

    <script>
        const toggleMobileMenu = () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        };

        const filterRw = (rw, btn) => {
            document.querySelectorAll('.rw-tab').forEach(b => {
                b.className = 'rw-tab snap-start shrink-0 whitespace-nowrap bg-white border border-classic-border text-classic-charcoal hover:border-classic-green py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all hover:scale-105 active:scale-95';
            });
            btn.className = 'rw-tab snap-start shrink-0 whitespace-nowrap bg-classic-green text-classic-cream py-2.5 px-4 sm:px-2 rounded-xl font-bold text-xs transition-all border border-classic-gold/40 shadow-sm hover:scale-105 active:scale-95';

            const badge = document.getElementById('rw-badge-label');
            const title = document.getElementById('rw-title-label');
            const counter = document.getElementById('filter-result-count');

            let count = 0;
            document.querySelectorAll('.umkm-card').forEach(card => {
                const cardRw = card.getAttribute('data-rw');
                if (rw === 'all' || cardRw === rw) {
                    card.classList.remove('hidden');
                    count++;
                } else {
                    card.classList.add('hidden');
                }
            });

            if (rw === 'all') {
                badge.innerText = 'Peta Wilayah Usaha';
                title.innerText = 'Direktori UMKM Cikokol per RW';
            } else {
                badge.innerText = `Terpilih: ${rw}`;
                title.innerText = `Daftar Usaha UMKM di ${rw} Cikokol`;
            }
            counter.innerText = `Menampilkan ${count} UMKM`;
        };
    </script>
</body>
</html>