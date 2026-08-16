<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Katalog UMKM Cikokol - UMKM CIKOKOL (KKN UYM)</title>
    <meta name="description" content="Katalog & Profil UMKM Unggulan Kelurahan Cikokol. Karya Pengabdian Tim KKN Pemuda Wangsakara Universitas Yatsi Madani."/>
    
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
        
        .card-hover-effect {
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover-effect:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(15, 76, 54, 0.15);
            border-color: #C5A059;
        }

        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(197, 160, 89, 0.4); }
            50% { box-shadow: 0 0 0 12px rgba(197, 160, 89, 0); }
        }
        .pulse-glow { animation: pulseGlow 2.5s infinite; }
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
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('home') }}">Beranda</a>
                <a class="text-sm font-semibold text-classic-green border-b-2 border-classic-gold pb-1 tracking-wide" href="{{ route('umkm.index') }}">UMKM Cikokol</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('news.index') }}">Berita</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('tim-kkn.index') }}">Tim KKN</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="https://wa.me/6282371001161" target="_blank" class="bg-classic-green text-classic-cream px-6 py-2.5 rounded-xl text-sm font-semibold hover:bg-classic-dark transition-all duration-300 shadow-md hidden md:flex items-center gap-2 border border-classic-gold/40">
                    <span class="material-symbols-outlined text-base text-classic-gold">call</span>
                    Kontak Posko
                </a>
                <button onclick="toggleMobileMenu()" class="md:hidden text-classic-green">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden md:hidden bg-classic-cream border-b border-classic-border px-6 py-4 flex flex-col gap-3 shadow-lg">
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('home') }}">Beranda</a>
            <a class="text-sm font-bold text-classic-green py-2 border-l-4 border-classic-gold pl-2" href="{{ route('umkm.index') }}">UMKM Cikokol</a>
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('news.index') }}">Berita</a>
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('tim-kkn.index') }}">Tim KKN</a>
        </div>
    </header>

    <main class="pt-20">
        <!-- Banner Header Modern Classic -->
        <section class="py-16 bg-classic-green text-classic-cream border-b border-classic-gold/30">
            <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
                <span class="text-xs text-classic-gold font-bold uppercase tracking-widest block mb-2">KKN Pemuda Wangsakara • Universitas Yatsi Madani</span>
                <h1 class="font-classic text-4xl md:text-5xl font-bold mb-4 text-classic-cream">Katalog UMKM Cikokol</h1>
                <p class="text-base text-classic-cream/80 max-w-xl mx-auto mb-8 font-light">Klik pada kartu usaha untuk melihat halaman detail lengkap, menu produk, dan lokasi per RW (RW 01 s/d RW 07).</p>
                
                <!-- Search & Filters -->
                <div class="max-w-3xl mx-auto bg-white p-4 rounded-2xl shadow-2xl text-classic-charcoal grid grid-cols-1 sm:grid-cols-3 gap-3 border border-classic-border">
                    <input id="search-kw" onkeyup="filterItems()" type="text" placeholder="🔍 Cari nama produk / usaha..." class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                    <select id="rw-select" onchange="filterItems()" class="px-4 py-2.5 rounded-xl border border-classic-border text-sm bg-white font-medium outline-none focus:ring-2 focus:ring-classic-green">
                        <option value="all">Semua RW</option>
                        <option value="RW 01">RW 01 (Fokus Binaan)</option>
                        <option value="RW 02">RW 02</option>
                        <option value="RW 03">RW 03</option>
                        <option value="RW 04">RW 04</option>
                        <option value="RW 05">RW 05</option>
                        <option value="RW 06">RW 06</option>
                        <option value="RW 07">RW 07 (Fokus Binaan)</option>
                    </select>
                    <select id="cat-select" onchange="filterItems()" class="px-4 py-2.5 rounded-xl border border-classic-border text-sm bg-white font-medium outline-none focus:ring-2 focus:ring-classic-green">
                        <option value="all">Semua Kategori</option>
                        <option value="Kuliner">Kuliner</option>
                        <option value="Jasa">Jasa</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Kerajinan">Kerajinan</option>
                    </select>
                </div>

                <div class="mt-4">
                    <span id="counter-badge" class="inline-block bg-classic-dark/70 text-classic-gold text-xs px-4 py-1.5 rounded-full border border-classic-gold/30 font-semibold">
                        Menampilkan {{ count($umkms) }} UMKM
                    </span>
                </div>
            </div>
        </section>

        <!-- Catalog Grid -->
        <section class="py-16 bg-classic-cream">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div id="grid-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($umkms as $item)
                    <!-- Clickable Card Redirecting to Detail Page -->
                    <div class="card-item card-hover-effect group bg-white rounded-2xl border border-classic-border shadow-sm overflow-hidden flex flex-col justify-between cursor-pointer" data-rw="{{ $item->rw }}" data-cat="{{ $item->category }}" data-name="{{ strtolower($item->name) }}" onclick="window.location.href='{{ route('umkm.show', ['id' => $item->id]) }}'">
                        <div>
                            <div class="relative h-52 overflow-hidden bg-classic-sand">
                                <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"/>
                                <span class="absolute top-3 left-3 bg-classic-green text-classic-cream text-xs px-3 py-1 rounded-md font-bold shadow-md border border-classic-gold/40">
                                    {{ $item->rw }}
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
                                <a href="{{ route('umkm.show', ['id' => $item->id]) }}" class="w-full bg-classic-sand hover:bg-classic-border text-classic-green py-2.5 rounded-xl text-center text-xs font-bold transition-colors">
                                    Lihat Detail
                                </a>
                                <a href="https://wa.me/62{{ substr($item->phone, 1) }}?text=Halo%20{{ urlencode($item->owner) }}" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-2.5 rounded-xl text-center text-xs font-bold flex items-center justify-center gap-1 border border-classic-gold/30 transition-colors">
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
    <div class="fixed bottom-6 right-6 z-50 flex items-center gap-3">
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
                </div>
                <p class="text-xs text-classic-gold/90 font-medium leading-relaxed">
                    © 2026 Persembahan Tim KKN Pemuda Wangsakara - Universitas Yatsi Madani (UYM). Seluruh Hak Cipta Dilindungi.
                </p>
            </div>
        </div>
    </footer>

    @include('partials.mobile-nav', ['active' => 'umkm'])

    <script>
        const toggleMobileMenu = () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        };

        const filterItems = () => {
            const kw = document.getElementById('search-kw').value.toLowerCase().trim();
            const rw = document.getElementById('rw-select').value;
            const cat = document.getElementById('cat-select').value;
            const counter = document.getElementById('counter-badge');

            let count = 0;
            document.querySelectorAll('.card-item').forEach(item => {
                const itemRw = item.getAttribute('data-rw');
                const itemCat = item.getAttribute('data-cat');
                const itemName = item.getAttribute('data-name');

                const mRw = rw === 'all' || itemRw === rw;
                const mCat = cat === 'all' || itemCat === cat;
                const mKw = itemName.includes(kw);

                if (mRw && mCat && mKw) {
                    item.classList.remove('hidden');
                    count++;
                } else {
                    item.classList.add('hidden');
                }
            });

            counter.innerText = `Menampilkan ${count} UMKM`;
        };
    </script>
</body>
</html>
