<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $umkm->name }} - UMKM CIKOKOL (KKN UYM)</title>
    <meta name="description" content="Detail Usaha {{ $umkm->name }} di {{ $umkm->rw }} Cikokol. Pemilik: {{ $umkm->owner }}."/>
    
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
            </div>
        </div>
    </header>

    <main class="pt-28 pb-20">
        <div class="max-w-6xl mx-auto px-6 md:px-12">
            
            <a href="{{ route('umkm.index') }}" class="inline-flex items-center gap-2 bg-white hover:bg-classic-sand text-classic-green border border-classic-border px-5 py-2.5 rounded-xl text-xs font-bold shadow-sm transition-all mb-6">
                <span class="material-symbols-outlined text-base text-classic-gold">arrow_back</span>
                <span>Kembali ke Katalog UMKM</span>
            </a>

            <div class="bg-white rounded-3xl p-8 md:p-12 border border-classic-border shadow-xl grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Left: Multi-Image Interactive Slideshow Carousel (Max 5 Images) -->
                <div>
                    @php
                        $imageList = $umkm->images_list;
                        $totalImages = count($imageList);
                    @endphp

                    <!-- Main Active Image Container -->
                    <div class="relative h-[340px] sm:h-[420px] rounded-2xl overflow-hidden border border-classic-border bg-classic-sand shadow-lg group cursor-pointer" onclick="openLightbox()">
                        <img id="main-slideshow-img" src="{{ $imageList[0] }}" alt="{{ $umkm->name }}" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1558981403-c5f9899a28bc?auto=format&fit=crop&w=800&q=80';" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105"/>
                        
                        <!-- Zoom Hint Overlay -->
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white gap-2 font-bold text-xs">
                            <span class="material-symbols-outlined text-2xl">zoom_in</span> Klik untuk Perbesar Foto
                        </div>

                        <!-- Slide Counter Badge -->
                        <div class="absolute top-4 left-4 bg-classic-dark/80 backdrop-blur-md text-classic-cream text-xs px-3 py-1.5 rounded-full font-semibold border border-classic-gold/40 flex items-center gap-1.5 shadow-md">
                            <span class="material-symbols-outlined text-sm text-classic-gold">photo_library</span>
                            <span id="slide-counter">1 / {{ $totalImages }} Foto</span>
                        </div>

                        <!-- Previous & Next Navigation Arrows (Visible if > 1 Image) -->
                        @if($totalImages > 1)
                            <button onclick="event.stopPropagation(); prevSlide();" class="absolute left-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/80 hover:bg-white text-classic-green border border-classic-border flex items-center justify-center shadow-lg transition-all opacity-90 hover:scale-110">
                                <span class="material-symbols-outlined text-xl">chevron_left</span>
                            </button>
                            <button onclick="event.stopPropagation(); nextSlide();" class="absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/80 hover:bg-white text-classic-green border border-classic-border flex items-center justify-center shadow-lg transition-all opacity-90 hover:scale-110">
                                <span class="material-symbols-outlined text-xl">chevron_right</span>
                            </button>
                        @endif
                    </div>

                    <!-- Thumbnails Strip Selector (If > 1 Image) -->
                    @if($totalImages > 1)
                        <div class="flex items-center gap-3 mt-4 overflow-x-auto pb-2">
                            @foreach($imageList as $idx => $img)
                                <button onclick="setSlide({{ $idx }})" class="thumbnail-btn flex-shrink-0 w-20 h-16 rounded-xl overflow-hidden border-2 transition-all duration-300 {{ $idx === 0 ? 'border-classic-gold ring-2 ring-classic-gold/50 scale-105' : 'border-classic-border opacity-70 hover:opacity-100' }}" data-index="{{ $idx }}">
                                    <img src="{{ $img }}" alt="Thumb {{ $idx + 1 }}" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1558981403-c5f9899a28bc?auto=format&fit=crop&w=800&q=80';" class="w-full h-full object-cover"/>
                                </button>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Right: Details -->
                <div class="flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-3">
                            <span class="bg-classic-green text-classic-gold text-xs px-3.5 py-1 rounded-md font-bold uppercase border border-classic-gold/30 shadow-sm">
                                {{ $umkm->rw }} Cikokol
                            </span>
                            <span class="text-xs text-classic-charcoal/70 font-semibold uppercase">
                                {{ $umkm->category }}
                            </span>
                        </div>

                        <h1 class="font-classic text-3xl sm:text-4xl text-classic-green font-bold mb-4 leading-tight">
                            {{ $umkm->name }}
                        </h1>

                        <p class="text-sm text-classic-charcoal/80 mb-6 leading-relaxed font-light">
                            {{ $umkm->description }}
                        </p>

                        <!-- Usaha Information Box -->
                        <div class="bg-classic-sand/50 rounded-2xl p-5 border border-classic-border space-y-3 text-xs mb-6 shadow-sm">
                            <div class="flex items-center justify-between border-b border-classic-border/60 pb-2">
                                <span class="text-classic-charcoal/70 font-semibold">Pemilik Usaha:</span>
                                <span class="font-bold text-classic-green text-sm">{{ $umkm->owner }}</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-classic-border/60 pb-2">
                                <span class="text-classic-charcoal/70 font-semibold">RT / RW:</span>
                                <span class="font-bold text-classic-green">{{ $umkm->rt }} / {{ $umkm->rw }}</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-classic-border/60 pb-2">
                                <span class="text-classic-charcoal/70 font-semibold">Jam Operasional:</span>
                                <span class="font-bold text-classic-green">{{ $umkm->hours }}</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-classic-border/60 pb-2">
                                <span class="text-classic-charcoal/70 font-semibold">Rentang Harga:</span>
                                <span class="font-bold text-classic-gold text-sm">{{ $umkm->price }}</span>
                            </div>
                            <div class="flex items-start justify-between pt-1">
                                <span class="text-classic-charcoal/70 font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-classic-gold text-sm">location_on</span>
                                    Alamat Lengkap:
                                </span>
                                <a href="{{ $umkm->google_maps_url }}" target="_blank" rel="noopener noreferrer" title="Klik untuk membuka lokasi & petunjuk arah di Google Maps" class="font-bold text-classic-green text-right max-w-xs hover:text-classic-gold hover:underline flex items-start justify-end gap-1 group transition-all">
                                    <span>{{ $umkm->address }}</span>
                                    <span class="material-symbols-outlined text-xs text-classic-gold mt-0.5 group-hover:translate-x-0.5 transition-transform">open_in_new</span>
                                </a>
                            </div>
                        </div>

                        <!-- Direct Google Maps Direction Link -->
                        <a href="{{ $umkm->google_maps_url }}" target="_blank" rel="noopener noreferrer" class="w-full bg-white hover:bg-classic-sand/70 text-classic-green py-3 px-4 rounded-xl border border-classic-border font-bold text-xs flex items-center justify-between shadow-sm transition-all hover:border-classic-gold hover:shadow group mb-6">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-lg bg-classic-green/10 text-classic-green flex items-center justify-center group-hover:bg-classic-green group-hover:text-classic-cream transition-colors">
                                    <span class="material-symbols-outlined text-lg">map</span>
                                </div>
                                <div class="text-left">
                                    <span class="block text-classic-charcoal font-bold group-hover:text-classic-green">Petunjuk Arah Google Maps</span>
                                    <span class="block text-[10px] text-classic-charcoal/60 font-normal">Buka rute navigasi dan titik lokasi persis</span>
                                </div>
                            </div>
                            <span class="flex items-center gap-1 text-classic-gold text-xs font-bold bg-classic-sand/60 px-2.5 py-1 rounded-md border border-classic-border/80 group-hover:bg-classic-gold group-hover:text-classic-dark transition-all">
                                <span>Buka Maps</span>
                                <span class="material-symbols-outlined text-sm group-hover:translate-x-0.5 transition-transform">arrow_forward</span>
                            </span>
                        </a>

                        <!-- Product List Table/Grid -->
                        @if($umkm->products && count($umkm->products) > 0)
                            <div class="mb-6">
                                <h3 class="font-classic text-xl font-bold text-classic-green mb-3 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-classic-gold text-base">restaurant_menu</span>
                                    Daftar Produk & Harga Usaha
                                </h3>
                                <div class="space-y-2">
                                    @foreach($umkm->products as $p)
                                        <div class="flex items-center justify-between bg-white p-3.5 rounded-xl border border-classic-border text-xs shadow-sm hover:border-classic-gold transition-all">
                                            <span class="font-bold text-classic-charcoal">{{ $p['title'] ?? $p['name'] ?? '' }}</span>
                                            <span class="font-bold text-classic-green bg-classic-sand/60 px-3 py-1 rounded-md border border-classic-border">{{ $p['price'] ?? '' }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Direct WA Call to Action Button -->
                    <div>
                        <a href="https://wa.me/62{{ substr($umkm->phone, 1) }}?text=Halo%20{{ urlencode($umkm->owner) }},%20saya%20tertarik%20dengan%20produk%20{{ urlencode($umkm->name) }}" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-4 rounded-xl font-bold text-sm text-center flex items-center justify-center gap-2 shadow-xl border border-classic-gold/40 transition-all hover:scale-[1.02]">
                            <span class="material-symbols-outlined text-xl text-classic-gold">chat</span>
                            <span>Hubungi Pemilik Usaha via WhatsApp ({{ $umkm->phone }})</span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- Fullscreen Lightbox Modal -->
    <div id="lightbox-modal" class="hidden fixed inset-0 z-50 bg-black/90 backdrop-blur-md flex items-center justify-center p-4">
        <button onclick="closeLightbox()" class="absolute top-6 right-6 text-white hover:text-classic-gold p-2">
            <span class="material-symbols-outlined text-4xl">close</span>
        </button>
        <img id="lightbox-img" src="" class="max-w-full max-h-[85vh] rounded-2xl object-contain shadow-2xl border border-white/20"/>
    </div>

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

    <!-- Interactive Slideshow Carousel JavaScript Logic -->
    <script>
        const imageList = @json($imageList);
        let currentIndex = 0;

        function updateSlide() {
            const mainImg = document.getElementById('main-slideshow-img');
            const counter = document.getElementById('slide-counter');
            
            mainImg.src = imageList[currentIndex];
            counter.innerText = `${currentIndex + 1} / ${imageList.length} Foto`;

            document.querySelectorAll('.thumbnail-btn').forEach((btn, idx) => {
                if (idx === currentIndex) {
                    btn.className = "thumbnail-btn flex-shrink-0 w-20 h-16 rounded-xl overflow-hidden border-2 transition-all duration-300 border-classic-gold ring-2 ring-classic-gold/50 scale-105";
                } else {
                    btn.className = "thumbnail-btn flex-shrink-0 w-20 h-16 rounded-xl overflow-hidden border-2 transition-all duration-300 border-classic-border opacity-70 hover:opacity-100";
                }
            });
        }

        function setSlide(index) {
            currentIndex = index;
            updateSlide();
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % imageList.length;
            updateSlide();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + imageList.length) % imageList.length;
            updateSlide();
        }

        function openLightbox() {
            const lightbox = document.getElementById('lightbox-modal');
            const lightboxImg = document.getElementById('lightbox-img');
            lightboxImg.src = imageList[currentIndex];
            lightbox.classList.remove('hidden');
        }

        function closeLightbox() {
            document.getElementById('lightbox-modal').classList.add('hidden');
        }
    </script>
</body>
</html>
