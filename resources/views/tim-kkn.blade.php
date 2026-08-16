<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Profil Tim KKN Pemuda Wangsakara - UMKM CIKOKOL</title>
    <meta name="description" content="Struktur Organisasi & Anggota Tim KKN Pemuda Wangsakara Universitas Yatsi Madani. Kelurahan Cikokol, Kota Tangerang 2026/2027."/>
    
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
            transform: translateY(-6px);
            box-shadow: 0 16px 32px -10px rgba(15, 76, 54, 0.15);
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
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('umkm.index') }}">UMKM Cikokol</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('news.index') }}">Berita</a>
                <a class="text-sm font-semibold text-classic-green border-b-2 border-classic-gold pb-1 tracking-wide" href="{{ route('tim-kkn.index') }}">Tim KKN</a>
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
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('umkm.index') }}">UMKM Cikokol</a>
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('news.index') }}">Berita</a>
            <a class="text-sm font-bold text-classic-green py-2 border-l-4 border-classic-gold pl-2" href="{{ route('tim-kkn.index') }}">Tim KKN</a>
        </div>
    </header>

    <main class="pt-20">
        <!-- Banner Header Modern Classic -->
        <section class="py-20 bg-classic-green text-classic-cream border-b border-classic-gold/30">
            <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
                <span class="inline-flex items-center gap-2 bg-classic-dark/80 border border-classic-gold/50 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-widest text-classic-gold-light mb-4 shadow-md">
                    <span class="material-symbols-outlined text-sm">school</span>
                    Universitas Yatsi Madani (UYM) • 31 Hari Pengabdian
                </span>
                <h1 class="font-classic text-4xl md:text-5xl font-bold mb-4 text-classic-cream">Tim KKN Pemuda Wangsakara</h1>
                <p class="text-base text-classic-cream/80 max-w-2xl mx-auto font-light leading-relaxed mb-8">
                    Struktur Organisasi & 22 Mahasiswa Pengabdian Masyarakat Universitas Yatsi Madani di Kelurahan Cikokol, Kota Tangerang (Tahun Akademik 2026/2027).
                </p>

                <!-- Search Input for Members -->
                <div class="max-w-xl mx-auto bg-white p-3 rounded-2xl shadow-xl text-classic-charcoal flex items-center gap-2 border border-classic-border">
                    <span class="material-symbols-outlined text-classic-green pl-2">search</span>
                    <input id="member-search-input" onkeyup="filterMembers()" type="text" placeholder="Cari nama anggota atau divisi KKN..." class="w-full px-2 py-1.5 rounded-xl border-none text-sm outline-none focus:ring-0"/>
                </div>
            </div>
        </section>

        <!-- Section Pimpinan KKN (DPL & Ketua) -->
        <section class="py-16 bg-classic-sand/40 border-b border-classic-border">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="text-center mb-10">
                    <span class="text-xs text-classic-gold font-bold uppercase tracking-widest block mb-1">Pimpinan Program</span>
                    <h2 class="font-classic text-3xl font-bold text-classic-green">DPL & Ketua KKN</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-2xl mx-auto">
                    <!-- DPL -->
                    <div class="card-hover-effect bg-white rounded-2xl overflow-hidden border border-classic-gold/40 shadow-lg text-center p-6 flex flex-col items-center">
                        <img src="https://pemuda-wangsakara.my.id/images/anggota/indrayana.png" alt="Indrayana, SE.MM" class="w-32 h-32 rounded-full object-cover border-4 border-classic-gold/40 shadow-md mb-4 bg-classic-sand hover:scale-105 transition-transform"/>
                        <span class="bg-classic-green text-classic-gold text-xs px-3 py-1 rounded-md font-bold uppercase mb-2">Dosen Pembimbing Lapangan</span>
                        <h3 class="font-classic text-2xl font-bold text-classic-green">Indrayana, SE.MM</h3>
                        <p class="text-xs text-classic-charcoal/70 font-medium">Pembimbing KKN Pemuda Wangsakara</p>
                    </div>

                    <!-- Ketua KKN -->
                    <div class="card-hover-effect bg-white rounded-2xl overflow-hidden border border-classic-gold/40 shadow-lg text-center p-6 flex flex-col items-center">
                        <img src="https://pemuda-wangsakara.my.id/images/anggota/retno.png" alt="Retno Diwanti" class="w-32 h-32 rounded-full object-cover border-4 border-classic-gold/40 shadow-md mb-4 bg-classic-sand hover:scale-105 transition-transform"/>
                        <span class="bg-classic-gold text-classic-green text-xs px-3 py-1 rounded-md font-bold uppercase mb-2">Ketua KKN</span>
                        <h3 class="font-classic text-2xl font-bold text-classic-green">Retno Diwanti</h3>
                        <p class="text-xs text-classic-charcoal/70 font-medium">Koordinator Utama Pengabdian Cikokol</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 Kelompok Kerja -->
        <section class="py-16 bg-classic-cream border-b border-classic-border">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="text-center mb-12">
                    <span class="text-xs text-classic-gold font-bold uppercase tracking-widest block mb-2">Fokus Eksekusi Program</span>
                    <h2 class="font-classic text-3xl md:text-4xl text-classic-green font-bold">Pembagian 3 Kelompok Kerja</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Kelompok 1 -->
                    <div class="card-hover-effect bg-white p-7 rounded-2xl border border-classic-border shadow-sm">
                        <span class="bg-classic-green text-classic-gold text-xs px-3 py-1 rounded-md font-bold uppercase block w-fit mb-3">Kelompok 01</span>
                        <h3 class="font-classic text-2xl font-bold text-classic-green mb-1">Legalitas & Perizinan NIB</h3>
                        <p class="text-xs text-classic-gold font-bold mb-4">Koordinator: Samratul Fu'adah</p>
                        <p class="text-xs text-classic-charcoal/80 leading-relaxed border-t border-classic-sand pt-3">
                            <strong>Anggota (6 Orang):</strong> Samratul Fu'adah, Beauty Zahrotul Aini, Denaya Putri, Samsul, Siti Fatimah, Tri Hartati Nengsih.
                        </p>
                    </div>

                    <!-- Kelompok 2 -->
                    <div class="card-hover-effect bg-white p-7 rounded-2xl border border-classic-gold/40 shadow-sm relative">
                        <span class="bg-classic-gold text-classic-green text-xs px-3 py-1 rounded-md font-bold uppercase block w-fit mb-3">Kelompok 02</span>
                        <h3 class="font-classic text-2xl font-bold text-classic-green mb-1">Google Maps & Website Portal</h3>
                        <p class="text-xs text-classic-green font-bold mb-4">Koordinator: Paturohman Abdul Aziz</p>
                        <p class="text-xs text-classic-charcoal/80 leading-relaxed border-t border-classic-sand pt-3">
                            <strong>Anggota (8 Orang):</strong> Paturohman Abdul Aziz, Anggi Permana, M. Holil, Nahrul Hayat, Affan Gunawan, Hasbi Ferdian Syach, Ahmad Dasuki, Nadha Nabillah.
                        </p>
                    </div>

                    <!-- Kelompok 3 -->
                    <div class="card-hover-effect bg-white p-7 rounded-2xl border border-classic-border shadow-sm">
                        <span class="bg-classic-green text-classic-gold text-xs px-3 py-1 rounded-md font-bold uppercase block w-fit mb-3">Kelompok 03</span>
                        <h3 class="font-classic text-2xl font-bold text-classic-green mb-1">Seminar & Acara Penutup</h3>
                        <p class="text-xs text-classic-gold font-bold mb-4">Koordinator: Retno Diwanti</p>
                        <p class="text-xs text-classic-charcoal/80 leading-relaxed border-t border-classic-sand pt-3">
                            <strong>Anggota (8 Orang):</strong> Retno Diwanti, Nesya Angelita, Ridha Achmal Hamdani, Silviana Dwi Yanti, Tri Amalia, Jennie Danella V., Rizki Reza Putra, Falah Syahrul R.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Anggota Tim KKN Grid (22 Mahasiswa) -->
        <section class="py-20 bg-classic-sand/30">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="text-center mb-14">
                    <span class="text-xs text-classic-gold font-bold uppercase tracking-widest block mb-2">22 Mahasiswa Pengabdi</span>
                    <h2 class="font-classic text-3xl md:text-4xl text-classic-green font-bold">Anggota Tim KKN Pemuda Wangsakara</h2>
                </div>

                <div id="members-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 text-center">
                    
                    @php
                    $members = [
                        ['name' => 'Retno Diwanti', 'role' => 'Ketua KKN', 'img' => 'retno.png'],
                        ['name' => 'Beauty Zahrotul Aini', 'role' => 'Sekretaris 1', 'img' => 'beauty.png'],
                        ['name' => 'Silviana Dwi Yanti', 'role' => 'Sekretaris 2', 'img' => 'silviana.png'],
                        ['name' => 'Nesya Angelita', 'role' => 'Bendahara', 'img' => 'nesya.png'],
                        ['name' => 'Samratul Fu\'adah', 'role' => 'Koord PDD & NIB', 'img' => 'samratul.png'],
                        ['name' => 'Paturohman Abdul A.', 'role' => 'Teknologi / Website', 'img' => 'paturohman.png'],
                        ['name' => 'Ridha Achmal Hamdani', 'role' => 'Humas', 'img' => 'ridha.png'],
                        ['name' => 'Samsul', 'role' => 'Humas', 'img' => 'samsul.png'],
                        ['name' => 'Hasbi Ferdian Syach', 'role' => 'Humas', 'img' => 'hasbi.png'],
                        ['name' => 'Nahrul Hayat', 'role' => 'Digital Branding', 'img' => 'nahrul.png'],
                        ['name' => 'Tri Hartati Nengsih', 'role' => 'Digital Branding', 'img' => 'tri_hartati.png'],
                        ['name' => 'Jennie Danella V.', 'role' => 'Digital Branding', 'img' => 'jenni.png'],
                        ['name' => 'Muhammad Holil', 'role' => 'Teknologi Digital', 'img' => 'holil.png'],
                        ['name' => 'Anggi Permana', 'role' => 'Teknologi Digital', 'img' => 'anggi.png'],
                        ['name' => 'Affan Gunawan', 'role' => 'Publikasi', 'img' => 'affan.png'],
                        ['name' => 'Falah Syahrul R.', 'role' => 'Publikasi', 'img' => 'falah.png'],
                        ['name' => 'Denaya Putri', 'role' => 'Publikasi', 'img' => 'denaya.png'],
                        ['name' => 'Rizki Reza Putra', 'role' => 'Dokumentasi', 'img' => 'rizki.png'],
                        ['name' => 'Nadha Nabillah', 'role' => 'Dokumentasi', 'img' => 'nahda.png'],
                        ['name' => 'Tri Amalia', 'role' => 'Logistik', 'img' => 'tri_amalia.png'],
                        ['name' => 'Ahmad Dasuki', 'role' => 'Logistik', 'img' => 'ahmad.png'],
                        ['name' => 'Siti Fatimah', 'role' => 'Logistik', 'img' => 'siti_fatimah.png'],
                    ];
                    @endphp

                    @foreach($members as $m)
                    <div class="member-card card-hover-effect bg-white p-4 rounded-xl border border-classic-border shadow-sm flex flex-col items-center" data-name="{{ strtolower($m['name']) }}" data-role="{{ strtolower($m['role']) }}">
                        <img src="https://pemuda-wangsakara.my.id/images/anggota/{{ $m['img'] }}" alt="{{ $m['name'] }}" class="w-20 h-20 rounded-full object-cover border-2 border-classic-gold/40 shadow-sm mb-3 bg-classic-sand hover:scale-105 transition-transform" onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80'"/>
                        <h4 class="font-classic font-bold text-sm text-classic-green leading-tight mb-1">{{ $m['name'] }}</h4>
                        <span class="text-[10px] text-classic-gold font-bold uppercase">{{ $m['role'] }}</span>
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

    @include('partials.mobile-nav', ['active' => 'tim-kkn'])

    <script>
        const toggleMobileMenu = () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        };

        const filterMembers = () => {
            const kw = document.getElementById('member-search-input').value.toLowerCase().trim();
            document.querySelectorAll('.member-card').forEach(card => {
                const name = card.getAttribute('data-name');
                const role = card.getAttribute('data-role');

                if (name.includes(kw) || role.includes(kw)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        };
    </script>
</body>
</html>
