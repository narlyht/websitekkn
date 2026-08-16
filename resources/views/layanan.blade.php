<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Layanan Pemberdayaan UMKM KKN Pemuda Wangsakara UYM</title>
    <meta name="description" content="Layanan resmi pendampingan NIB, Sertifikasi Halal, Seminar Go Digital (23 Agustus di Aula Kelurahan Cikokol), foto produk, dan Google Maps oleh Tim KKN Wangsakara UYM."/>
    
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
                    <span class="material-symbols-outlined text-2xl">account_balance</span>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="font-classic text-2xl md:text-3xl text-classic-green font-bold tracking-tight block leading-none">Kelurahan Cikokol</a>
                    <span class="text-xs text-classic-gold font-semibold uppercase tracking-wider">KKN Pemuda Wangsakara • Univ. Yatsi Madani</span>
                </div>
            </div>

            <!-- Navbar Links -->
            <nav class="hidden md:flex gap-8 items-center">
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('home') }}">Beranda</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('umkm.index') }}">Profil UMKM</a>
                <a class="text-sm font-semibold text-classic-green border-b-2 border-classic-gold pb-1 tracking-wide" href="{{ route('layanan.index') }}">Layanan</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('home') }}#agenda-kkn">Agenda KKN</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('home') }}#statistik">Statistik</a>
                <a class="text-sm font-semibold text-classic-charcoal/80 hover:text-classic-green transition-colors tracking-wide" href="{{ route('home') }}#tim-kkn">Tim KKN</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="https://wa.me/6282371001161" target="_blank" class="bg-classic-green text-classic-cream px-6 py-2.5 rounded-lg text-sm font-semibold hover:bg-classic-dark transition-all duration-300 shadow-md hidden md:flex items-center gap-2 border border-classic-gold/40">
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
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('umkm.index') }}">Profil UMKM</a>
            <a class="text-sm font-bold text-classic-green py-2 border-l-4 border-classic-gold pl-2" href="{{ route('layanan.index') }}">Layanan</a>
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('home') }}#agenda-kkn">Agenda KKN</a>
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('home') }}#statistik">Statistik</a>
            <a class="text-sm font-medium text-classic-charcoal py-2" href="{{ route('home') }}#tim-kkn">Tim KKN</a>
        </div>
    </header>

    <main class="pt-20">
        <!-- Banner Header Modern Classic -->
        <section class="py-20 bg-classic-green text-classic-cream border-b border-classic-gold/30">
            <div class="max-w-7xl mx-auto px-6 md:px-12 text-center">
                <span class="inline-flex items-center gap-2 bg-classic-dark/80 border border-classic-gold/50 px-4 py-1 rounded-full text-xs font-semibold uppercase tracking-widest text-classic-gold-light mb-4">
                    <span class="material-symbols-outlined text-sm">school</span>
                    Tim KKN Pemuda Wangsakara • Universitas Yatsi Madani (Fokus Binaan RW 01 & RW 07)
                </span>
                <h1 class="font-classic text-4xl md:text-5xl font-bold mb-4 text-classic-cream">Layanan Pemberdayaan UMKM Cikokol</h1>
                <p class="text-base text-classic-cream/80 max-w-2xl mx-auto font-light leading-relaxed">
                    Fasilitas pendampingan legalitas usaha NIB (5-14 Agt), Sertifikasi Halal, foto produk, Google Maps, serta pendaftaran **Seminar UMKM Go Digital (23 Agt di Aula Kelurahan Cikokol)**.
                </p>
            </div>
        </section>

        <!-- Services Grid Section (5 Services Cards) -->
        <section class="py-20 bg-classic-cream">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Service 1: NIB (5-14 Agt) -->
                    <div class="bg-white rounded-2xl p-8 border border-classic-border shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 bg-classic-green text-classic-gold rounded-xl flex items-center justify-center border border-classic-gold/30 shadow-md">
                                    <span class="material-symbols-outlined text-3xl">assignment_turned_in</span>
                                </div>
                                <div>
                                    <span class="text-xs text-classic-gold font-bold uppercase tracking-wider block">RW 01 & RW 07 • 5-14 Agt</span>
                                    <h3 class="font-classic text-2xl font-bold text-classic-green">Pendampingan NIB Gratis</h3>
                                </div>
                            </div>

                            <p class="text-sm text-classic-charcoal/80 leading-relaxed mb-6">
                                Bantuan pendaftaran Nomor Induk Berusaha (NIB) resmi via OSS RBA bagi pelaku usaha mikro agar memiliki legalitas resmi tanpa dipungut biaya.
                            </p>

                            <div class="p-4 bg-classic-sand/50 rounded-xl border border-classic-border mb-6">
                                <h4 class="text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Persyaratan Dokumen:</h4>
                                <ul class="list-disc list-inside text-xs text-classic-charcoal/80 space-y-1">
                                    <li>Foto KTP Pemilik Usaha (Cikokol)</li>
                                    <li>Nomor WhatsApp & Email Aktif</li>
                                    <li>Alamat Usaha & Jenis Produk</li>
                                </ul>
                            </div>
                        </div>

                        <a href="https://wa.me/6282371001161?text=Halo%20Tim%20KKN%20Pemuda%20Wangsakara%20UYM,%20saya%20mau%20bantu%20dibuatkan%20NIB%20Gratis" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-3 rounded-xl font-bold text-sm text-center flex items-center justify-center gap-2 border border-classic-gold/40 shadow-md transition-colors">
                            <span class="material-symbols-outlined text-base text-classic-gold">chat</span>
                            Ajukan Pembuatan NIB
                        </a>
                    </div>

                    <!-- Service 2: Seminar UMKM Go Digital (23 Agt) -->
                    <div class="bg-white rounded-2xl p-8 border border-classic-gold/40 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                        <div>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 bg-classic-gold text-classic-green rounded-xl flex items-center justify-center border border-classic-gold/30 shadow-md">
                                    <span class="material-symbols-outlined text-3xl">groups</span>
                                </div>
                                <div>
                                    <span class="text-xs text-classic-green font-bold uppercase tracking-wider block">Aula Kelurahan • 23 Agt</span>
                                    <h3 class="font-classic text-2xl font-bold text-classic-green">Seminar UMKM Go Digital</h3>
                                </div>
                            </div>

                            <p class="text-sm text-classic-charcoal/80 leading-relaxed mb-6">
                                Penyelenggaraan Seminar & Workshop Digital Marketing UMKM Cikokol bersama Tim KKN Pemuda Wangsakara & Dinas Terkait di Aula Kelurahan.
                            </p>

                            <div class="p-4 bg-classic-sand/50 rounded-xl border border-classic-border mb-6">
                                <h4 class="text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Detail Acara:</h4>
                                <ul class="list-disc list-inside text-xs text-classic-charcoal/80 space-y-1">
                                    <li>Lokasi: Aula Kantor Kelurahan Cikokol</li>
                                    <li>Tanggal: Minggu, 23 Agustus 2026</li>
                                    <li>Fasilitas: Ilmu Digital, E-Sertifikat, Snack</li>
                                </ul>
                            </div>
                        </div>

                        <a href="https://wa.me/6282371001161?text=Halo%20Tim%20KKN,%20saya%20mau%20daftar%20Peserta%20Seminar%20UMKM%20Go%20Digital" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-3 rounded-xl font-bold text-sm text-center flex items-center justify-center gap-2 border border-classic-gold/40 shadow-md transition-colors">
                            <span class="material-symbols-outlined text-base text-classic-gold">event</span>
                            Daftar Seminar Sekarang
                        </a>
                    </div>

                    <!-- Service 3: Halal -->
                    <div class="bg-white rounded-2xl p-8 border border-classic-border shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 bg-classic-green text-classic-gold rounded-xl flex items-center justify-center border border-classic-gold/30 shadow-md">
                                    <span class="material-symbols-outlined text-3xl">verified</span>
                                </div>
                                <div>
                                    <span class="text-xs text-classic-gold font-bold uppercase tracking-wider block">Jaminan Produk</span>
                                    <h3 class="font-classic text-2xl font-bold text-classic-green">Sertifikasi Halal Gratis</h3>
                                </div>
                            </div>

                            <p class="text-sm text-classic-charcoal/80 leading-relaxed mb-6">
                                Pendampingan sertifikasi Halal Self-Declare gratis dari BPJPH Kementerian Agama untuk meningkatkan kepercayaan konsumen terhadap makanan/minuman warga.
                            </p>

                            <div class="p-4 bg-classic-sand/50 rounded-xl border border-classic-border mb-6">
                                <h4 class="text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Persyaratan Dokumen:</h4>
                                <ul class="list-disc list-inside text-xs text-classic-charcoal/80 space-y-1">
                                    <li>NIB Aktif (Jika belum ada, dibantu)</li>
                                    <li>Foto KTP Pemilik Usaha</li>
                                    <li>Daftar Komposisi Bahan Produk</li>
                                </ul>
                            </div>
                        </div>

                        <a href="https://wa.me/6282371001161?text=Halo%20Tim%20KKN,%20saya%20mau%20konsultasi%20Sertifikasi%20Halal%20Gratis" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-3 rounded-xl font-bold text-sm text-center flex items-center justify-center gap-2 border border-classic-gold/40 shadow-md transition-colors">
                            <span class="material-symbols-outlined text-base text-classic-gold">chat</span>
                            Konsultasi Halal
                        </a>
                    </div>

                    <!-- Service 4: Foto Produk & Desain -->
                    <div class="bg-white rounded-2xl p-8 border border-classic-border shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 bg-classic-green text-classic-gold rounded-xl flex items-center justify-center border border-classic-gold/30 shadow-md">
                                    <span class="material-symbols-outlined text-3xl">photo_camera</span>
                                </div>
                                <div>
                                    <span class="text-xs text-classic-gold font-bold uppercase tracking-wider block">Branding & Promosi</span>
                                    <h3 class="font-classic text-2xl font-bold text-classic-green">Klinik Foto & Desain Kemasan</h3>
                                </div>
                            </div>

                            <p class="text-sm text-classic-charcoal/80 leading-relaxed mb-6">
                                Studio foto produk portabel & pembuatan desain stiker/logo kemasan gratis oleh tim kreatif mahasiswa KKN Pemuda Wangsakara UYM.
                            </p>

                            <div class="p-4 bg-classic-sand/50 rounded-xl border border-classic-border mb-6">
                                <h4 class="text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Fasilitas yang Didapat:</h4>
                                <ul class="list-disc list-inside text-xs text-classic-charcoal/80 space-y-1">
                                    <li>Foto Produk High Resolution</li>
                                    <li>Desain Logo / Stiker Kemasan</li>
                                    <li>Flyer Promosi Digital</li>
                                </ul>
                            </div>
                        </div>

                        <a href="https://wa.me/6282371001161?text=Halo%20Tim%20KKN,%20saya%20mau%20booking%20Sesi%20Foto%20Produk%20/Desain" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-3 rounded-xl font-bold text-sm text-center flex items-center justify-center gap-2 border border-classic-gold/40 shadow-md transition-colors">
                            <span class="material-symbols-outlined text-base text-classic-gold">chat</span>
                            Booking Foto Produk
                        </a>
                    </div>

                    <!-- Service 5: Google Maps & Digitalization -->
                    <div class="bg-white rounded-2xl p-8 border border-classic-border shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-14 h-14 bg-classic-green text-classic-gold rounded-xl flex items-center justify-center border border-classic-gold/30 shadow-md">
                                    <span class="material-symbols-outlined text-3xl">add_location_alt</span>
                                </div>
                                <div>
                                    <span class="text-xs text-classic-gold font-bold uppercase tracking-wider block">RW 01 & RW 07 • 5-14 Agt</span>
                                    <h3 class="font-classic text-2xl font-bold text-classic-green">Google Maps & Toko Online</h3>
                                </div>
                            </div>

                            <p class="text-sm text-classic-charcoal/80 leading-relaxed mb-6">
                                Pendampingan pendaftaran titik lokasi bisnis di Google Maps (Google My Business) serta pembuatan akun e-commerce agar toko mudah dicari.
                            </p>

                            <div class="p-4 bg-classic-sand/50 rounded-xl border border-classic-border mb-6">
                                <h4 class="text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Fasilitas yang Didapat:</h4>
                                <ul class="list-disc list-inside text-xs text-classic-charcoal/80 space-y-1">
                                    <li>Pin Lokasi Toko di Google Maps</li>
                                    <li>Panduan Kelola Google Business</li>
                                    <li>Buka Toko Shopee / Tokopedia</li>
                                </ul>
                            </div>
                        </div>

                        <a href="https://wa.me/6282371001161?text=Halo%20Tim%20KKN,%20bantu%20daftarkan%20toko%20saya%20di%20Google%20Maps" target="_blank" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-3 rounded-xl font-bold text-sm text-center flex items-center justify-center gap-2 border border-classic-gold/40 shadow-md transition-colors">
                            <span class="material-symbols-outlined text-base text-classic-gold">chat</span>
                            Daftarkan Google Maps Toko
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Alur Pelayanan Timeline -->
        <section class="py-16 bg-classic-sand/60 border-t border-b border-classic-border">
            <div class="max-w-7xl mx-auto px-6 md:px-12">
                <div class="text-center mb-12">
                    <span class="text-xs text-classic-gold font-bold uppercase tracking-widest block mb-2">Langkah Mudah</span>
                    <h2 class="font-classic text-3xl md:text-4xl text-classic-green font-bold">Alur Pelayanan KKN Cikokol</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <div class="bg-white p-6 rounded-xl border border-classic-border shadow-sm">
                        <span class="w-10 h-10 bg-classic-green text-classic-gold rounded-full inline-flex items-center justify-center font-bold text-lg mb-3">1</span>
                        <h4 class="font-classic text-xl font-bold text-classic-green mb-2">Pilih Layanan</h4>
                        <p class="text-xs text-classic-charcoal/80">Pilih NIB, Halal, Seminar, Foto Produk, atau Google Maps.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl border border-classic-border shadow-sm">
                        <span class="w-10 h-10 bg-classic-green text-classic-gold rounded-full inline-flex items-center justify-center font-bold text-lg mb-3">2</span>
                        <h4 class="font-classic text-xl font-bold text-classic-green mb-2">Hubungi Posko WA</h4>
                        <p class="text-xs text-classic-charcoal/80">Klik tombol WhatsApp untuk menghubungi Tim KKN UYM dan kirim berkas syarat.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl border border-classic-border shadow-sm">
                        <span class="w-10 h-10 bg-classic-green text-classic-gold rounded-full inline-flex items-center justify-center font-bold text-lg mb-3">3</span>
                        <h4 class="font-classic text-xl font-bold text-classic-green mb-2">Proses Pendampingan</h4>
                        <p class="text-xs text-classic-charcoal/80">Tim KKN memproses berkas atau datang langsung ke lokasi usaha warga.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl border border-classic-border shadow-sm">
                        <span class="w-10 h-10 bg-classic-green text-classic-gold rounded-full inline-flex items-center justify-center font-bold text-lg mb-3">4</span>
                        <h4 class="font-classic text-xl font-bold text-classic-green mb-2">Selesai & Gratis</h4>
                        <p class="text-xs text-classic-charcoal/80">NIB / Halal / Foto / Google Maps resmi siap digunakan!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Modern Classic (Universitas Yatsi Madani) -->
    <footer class="bg-classic-green text-classic-cream py-12 border-t border-classic-gold/30">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-classic-cream text-classic-green rounded-lg flex items-center justify-center font-bold">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div>
                        <h3 class="font-classic text-2xl font-bold text-classic-cream">Kelurahan Cikokol</h3>
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
                    <li><a href="{{ route('umkm.index') }}" class="hover:text-classic-gold transition-colors">Profil UMKM</a></li>
                    <li><a href="{{ route('layanan.index') }}" class="hover:text-classic-gold transition-colors">Layanan</a></li>
                    <li><a href="{{ route('home') }}#agenda-kkn" class="hover:text-classic-gold transition-colors">Agenda KKN</a></li>
                    <li><a href="{{ route('home') }}#statistik" class="hover:text-classic-gold transition-colors">Statistik</a></li>
                    <li><a href="{{ route('home') }}#tim-kkn" class="hover:text-classic-gold transition-colors">Tim KKN Pemuda Wangsakara</a></li>
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

    @include('partials.mobile-nav', ['active' => ''])

    <script>
        const toggleMobileMenu = () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        };
    </script>
</body>
</html>
