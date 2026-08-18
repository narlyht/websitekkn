<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tambah UMKM Baru - Dashboard Admin Cikokol</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    
    <!-- Leaflet CSS & JS for OpenStreetMap -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

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
        #osm-map { z-index: 1; }
    </style>
</head>
<body class="bg-classic-sand/60 text-classic-charcoal font-sans-body antialiased min-h-screen py-10">

    <div class="max-w-4xl mx-auto px-6">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 bg-white hover:bg-classic-sand text-classic-green border border-classic-border px-4 py-2 rounded-xl text-xs font-bold shadow-sm transition-all mb-3">
                    <span class="material-symbols-outlined text-sm text-classic-gold">arrow_back</span>
                    <span>Kembali ke Dashboard</span>
                </a>
                <h1 class="font-classic text-3xl font-bold text-classic-green">Tambah Usaha UMKM Baru</h1>
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

        <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl p-8 border border-classic-border shadow-xl space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Nama Usaha / Produk</label>
                    <input type="text" name="name" required placeholder="Contoh: Nasi Uduk Mang Udin" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Nama Pemilik Usaha</label>
                    <input type="text" name="owner" required placeholder="Contoh: Mang Udin" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Pilih Wilayah RW</label>
                    <select name="rw" required class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm bg-white outline-none focus:ring-2 focus:ring-classic-green">
                        <option value="RW 01">RW 01 (Fokus Binaan)</option>
                        <option value="RW 02">RW 02</option>
                        <option value="RW 03">RW 03</option>
                        <option value="RW 04">RW 04</option>
                        <option value="RW 05">RW 05</option>
                        <option value="RW 06">RW 06</option>
                        <option value="RW 07">RW 07 (Fokus Binaan)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Detail RT / RW</label>
                    <input type="text" name="rt" required placeholder="Contoh: RT 02 / RW 01" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Kategori Usaha</label>
                    <select name="category" required class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm bg-white outline-none focus:ring-2 focus:ring-classic-green">
                        <option value="Kuliner">Kuliner</option>
                        <option value="Jasa">Jasa</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Kerajinan">Kerajinan</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Kisaran Harga</label>
                    <input type="text" name="price" required placeholder="Contoh: Rp 12.000 - Rp 25.000" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">No. WhatsApp Active</label>
                    <input type="text" name="phone" required placeholder="Contoh: 082371001161" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>

                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Jam Operasional</label>
                    <input type="text" name="hours" required placeholder="Contoh: 06.00 - 21.00 WIB" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>
            </div>

            <!-- Upload Multi Gambar (Maksimal 5 Gambar) -->
            <div class="border-t border-classic-sand pt-6">
                <div class="flex items-center justify-between mb-2">
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider">
                        Upload Foto Usaha (Maksimal 5 Gambar)
                    </label>
                    <span class="text-xs text-classic-gold font-bold">Maks 5 File • Format: JPG, PNG, WEBP</span>
                </div>

                <div class="relative border-2 border-dashed border-classic-border hover:border-classic-green bg-classic-sand/30 rounded-2xl p-6 text-center transition-all">
                    <input type="file" name="image_files[]" id="image_files" multiple accept="image/*" onchange="previewImages(this)" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"/>
                    <div class="flex flex-col items-center justify-center gap-2">
                        <div class="w-12 h-12 bg-classic-green/10 text-classic-green rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined text-2xl">cloud_upload</span>
                        </div>
                        <p class="text-xs font-bold text-classic-green">Klik atau Seret 1-5 File Gambar ke Sini</p>
                        <p class="text-[11px] text-classic-charcoal/60">Pilih hingga 5 gambar sekaligus dari komputer Anda</p>
                    </div>
                </div>

                <!-- Live Preview Grid -->
                <div id="preview-container" class="mt-4 hidden">
                    <span class="text-xs font-bold text-classic-green uppercase tracking-wider block mb-2">Preview Gambar Terpilih:</span>
                    <div id="preview-grid" class="grid grid-cols-2 sm:grid-cols-5 gap-3"></div>
                </div>
            </div>

            <!-- Bagian OpenStreetMap API & Titik Lokasi Peta -->
            <div class="border-t border-classic-sand pt-6 space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <label class="block text-xs font-bold text-classic-green uppercase tracking-wider">
                            Pencarian & Penentuan Lokasi (OpenStreetMap API)
                        </label>
                        <p class="text-xs text-classic-charcoal/70">
                            Cari alamat atau geser pin marker pada peta OpenStreetMap untuk mendapatkan alamat lengkap dan koordinat otomatis.
                        </p>
                    </div>
                    <button type="button" onclick="getCurrentLocation()" class="inline-flex items-center gap-1.5 bg-classic-sand hover:bg-classic-border text-classic-green px-3 py-1.5 rounded-lg text-xs font-bold transition-all shadow-sm">
                        <span class="material-symbols-outlined text-sm text-classic-gold">my_location</span>
                        <span>Lokasi Saya</span>
                    </button>
                </div>

                <!-- Search Input with Autocomplete Dropdown -->
                <div class="relative">
                    <div class="relative flex items-center">
                        <span class="material-symbols-outlined absolute left-3 text-classic-charcoal/40 text-lg">search</span>
                        <input type="text" id="osm-search-input" placeholder="Ketik nama jalan / gedung / kelurahan (Contoh: Jl. Cikokol, Tangerang)..." oninput="handleOsmSearch(this.value)" class="w-full pl-10 pr-10 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                        <div id="osm-search-loading" class="hidden absolute right-3 text-classic-gold">
                            <span class="material-symbols-outlined animate-spin text-lg">progress_activity</span>
                        </div>
                    </div>

                    <!-- Autocomplete Dropdown Result List -->
                    <div id="osm-search-results" class="hidden absolute left-0 right-0 top-full mt-1.5 bg-white border border-classic-border rounded-xl shadow-2xl z-30 max-h-56 overflow-y-auto divide-y divide-classic-border/40"></div>
                </div>

                <!-- Interactive Leaflet Map Container -->
                <div class="rounded-2xl overflow-hidden border border-classic-border shadow-inner">
                    <div id="osm-map" class="w-full h-64 sm:h-72"></div>
                </div>
                <div class="flex items-center justify-between text-[11px] text-classic-charcoal/60 bg-classic-sand/40 px-3 py-2 rounded-lg border border-classic-border">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-classic-green text-sm">touch_app</span>
                        Klik pada peta atau geser pin merah untuk mengubah lokasi presisi.
                    </span>
                    <span id="coords-display" class="font-mono text-classic-green font-semibold">Lat: -6.1783, Lon: 106.6319</span>
                </div>

                <!-- Hidden inputs for coordinates & maps_url -->
                <input type="hidden" name="latitude" id="latitude" value="-6.1783000"/>
                <input type="hidden" name="longitude" id="longitude" value="106.6319000"/>
                <input type="hidden" name="maps_url" id="maps_url" value=""/>

                <!-- Alamat Lengkap Field (Auto-filled by OpenStreetMap) -->
                <div>
                    <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">
                        Alamat Lengkap Tempat Usaha (Hasil OpenStreetMap / Tambahkan Detail):
                    </label>
                    <textarea name="address" id="address" rows="2" required placeholder="Alamat akan terisi otomatis dari OpenStreetMap atau bisa disesuaikan manual..." class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green bg-white"></textarea>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Deskripsi Lengkap Usaha</label>
                <textarea name="description" rows="4" required placeholder="Jelaskan keunggulan produk dan cerita usaha..." class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"></textarea>
            </div>

            <!-- Dynamic Product Menu List -->
            <div class="border-t border-classic-sand pt-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-classic text-xl font-bold text-classic-green">Daftar Menu / Produk Unggulan</h3>
                    <button type="button" onclick="addProductRow()" class="bg-classic-sand hover:bg-classic-border text-classic-green text-xs px-3 py-1.5 rounded-lg font-bold flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">add</span> Tambah Baris
                    </button>
                </div>
                
                <div id="product-rows-container" class="space-y-3">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 p-3 bg-classic-sand/30 rounded-xl border border-classic-border">
                        <input type="text" name="product_title[]" placeholder="Nama Menu (Contoh: Nasi Uduk Komplit)" class="px-3 py-2 rounded-lg border border-classic-border text-xs outline-none focus:ring-2 focus:ring-classic-green"/>
                        <input type="text" name="product_price[]" placeholder="Harga (Contoh: Rp 22.000)" class="px-3 py-2 rounded-lg border border-classic-border text-xs outline-none focus:ring-2 focus:ring-classic-green"/>
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-classic-sand flex items-center gap-4">
                <button type="submit" class="bg-classic-green hover:bg-classic-dark text-classic-cream px-8 py-3 rounded-xl font-bold text-sm shadow-md border border-classic-gold/30 transition-all hover:scale-[1.02]">
                    Simpan Data UMKM
                </button>
                <a href="{{ route('admin.dashboard') }}" class="text-xs font-bold text-classic-charcoal/70 hover:underline">Batal</a>
            </div>
        </form>
    </div>

    <script>
        // --- OpenStreetMap Leaflet & Nominatim API Integration ---
        const defaultLat = -6.1783;
        const defaultLng = 106.6319; // Cikokol, Tangerang

        const map = L.map('osm-map').setView([defaultLat, defaultLng], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© <a href="https://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a> contributors'
        }).addTo(map);

        const marker = L.marker([defaultLat, defaultLng], {
            draggable: true
        }).addTo(map);

        const updateInputs = (lat, lng, addressText) => {
            document.getElementById('latitude').value = parseFloat(lat).toFixed(7);
            document.getElementById('longitude').value = parseFloat(lng).toFixed(7);
            document.getElementById('maps_url').value = `https://www.google.com/maps?q=${lat},${lng}`;
            document.getElementById('coords-display').innerText = `Lat: ${parseFloat(lat).toFixed(4)}, Lon: ${parseFloat(lng).toFixed(4)}`;
            
            if (addressText) {
                document.getElementById('address').value = addressText;
            }
        };

        const reverseGeocode = async (lat, lng) => {
            const loading = document.getElementById('osm-search-loading');
            loading.classList.remove('hidden');
            try {
                const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}&addressdetails=1`, {
                    headers: { 'Accept-Language': 'id' }
                });
                const data = await response.json();
                if (data && data.display_name) {
                    updateInputs(lat, lng, data.display_name);
                    marker.bindPopup(`<b>Lokasi Terpilih:</b><br><small>${data.display_name}</small>`).openPopup();
                } else {
                    updateInputs(lat, lng, null);
                }
            } catch (err) {
                console.error('Reverse geocoding error:', err);
                updateInputs(lat, lng, null);
            } finally {
                loading.classList.add('hidden');
            }
        };

        marker.on('dragend', function (e) {
            const pos = marker.getLatLng();
            reverseGeocode(pos.lat, pos.lng);
        });

        map.on('click', function (e) {
            marker.setLatLng(e.latlng);
            reverseGeocode(e.latlng.lat, e.latlng.lng);
        });

        // Search Autocomplete with Nominatim API
        let searchTimeout = null;
        const handleOsmSearch = (query) => {
            clearTimeout(searchTimeout);
            const resultsBox = document.getElementById('osm-search-results');
            const loading = document.getElementById('osm-search-loading');

            if (!query || query.trim().length < 3) {
                resultsBox.classList.add('hidden');
                resultsBox.innerHTML = '';
                return;
            }

            loading.classList.remove('hidden');
            searchTimeout = setTimeout(async () => {
                try {
                    const encodedQuery = encodeURIComponent(query.trim());
                    const response = await fetch(`https://nominatim.openstreetmap.org/search?format=jsonv2&q=${encodedQuery}&countrycodes=id&limit=5&addressdetails=1`, {
                        headers: { 'Accept-Language': 'id' }
                    });
                    const results = await response.json();
                    
                    resultsBox.innerHTML = '';
                    if (results && results.length > 0) {
                        results.forEach((item) => {
                            const btn = document.createElement('button');
                            btn.type = 'button';
                            btn.className = 'w-full text-left px-4 py-2.5 hover:bg-classic-sand/50 text-xs text-classic-charcoal transition-all flex items-start gap-2';
                            btn.innerHTML = `
                                <span class="material-symbols-outlined text-classic-gold text-base mt-0.5">location_on</span>
                                <div>
                                    <span class="font-bold text-classic-green block">${item.name || item.display_name.split(',')[0]}</span>
                                    <span class="text-[11px] text-classic-charcoal/70 line-clamp-1">${item.display_name}</span>
                                </div>
                            `;
                            btn.onclick = () => {
                                const lat = parseFloat(item.lat);
                                const lon = parseFloat(item.lon);
                                map.setView([lat, lon], 16);
                                marker.setLatLng([lat, lon]);
                                updateInputs(lat, lon, item.display_name);
                                marker.bindPopup(`<b>${item.name || 'Lokasi'}</b><br><small>${item.display_name}</small>`).openPopup();
                                resultsBox.classList.add('hidden');
                                document.getElementById('osm-search-input').value = item.display_name;
                            };
                            resultsBox.appendChild(btn);
                        });
                        resultsBox.classList.remove('hidden');
                    } else {
                        resultsBox.innerHTML = '<div class="px-4 py-3 text-xs text-classic-charcoal/60 text-center">Lokasi tidak ditemukan. Coba gunakan kata kunci jalan / daerah lain.</div>';
                        resultsBox.classList.remove('hidden');
                    }
                } catch (err) {
                    console.error('Nominatim search error:', err);
                } finally {
                    loading.classList.add('hidden');
                }
            }, 400);
        };

        // Get Current Device Location
        const getCurrentLocation = () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        map.setView([lat, lng], 16);
                        marker.setLatLng([lat, lng]);
                        reverseGeocode(lat, lng);
                    },
                    (error) => {
                        alert('Tidak dapat mendeteksi lokasi GPS perangkat: ' + error.message);
                    }
                );
            } else {
                alert('Browser Anda tidak mendukung geolokasi GPS.');
            }
        };

        // Close search results when clicking outside
        document.addEventListener('click', (e) => {
            const searchContainer = document.getElementById('osm-search-input');
            const resultsBox = document.getElementById('osm-search-results');
            if (!searchContainer.contains(e.target) && !resultsBox.contains(e.target)) {
                resultsBox.classList.add('hidden');
            }
        });

        // Trigger initial reverse geocode for default Cikokol location if address is empty
        window.addEventListener('DOMContentLoaded', () => {
            if (!document.getElementById('address').value) {
                reverseGeocode(defaultLat, defaultLng);
            }
        });

        // --- Image Preview Logic ---
        const previewImages = (input) => {
            const container = document.getElementById('preview-container');
            const grid = document.getElementById('preview-grid');
            grid.innerHTML = '';

            if (input.files && input.files.length > 0) {
                if (input.files.length > 5) {
                    alert('Maksimal 5 gambar yang diperbolehkan! Hanya 5 gambar pertama yang akan diproses.');
                }

                container.classList.remove('hidden');
                const count = Math.min(input.files.length, 5);

                for (let i = 0; i < count; i++) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const div = document.createElement('div');
                        div.className = 'relative h-24 rounded-xl overflow-hidden border border-classic-gold shadow-md bg-classic-sand';
                        div.innerHTML = `
                            <img src="${e.target.result}" class="w-full h-full object-cover"/>
                            <span class="absolute top-1 left-1 bg-classic-green text-classic-cream text-[10px] px-1.5 py-0.5 rounded font-bold">Gambar ${i+1}</span>
                        `;
                        grid.appendChild(div);
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            } else {
                container.classList.add('hidden');
            }
        };

        // --- Dynamic Product Row Logic ---
        const addProductRow = () => {
            const container = document.getElementById('product-rows-container');
            const div = document.createElement('div');
            div.className = 'grid grid-cols-1 sm:grid-cols-2 gap-3 p-3 bg-classic-sand/30 rounded-xl border border-classic-border';
            div.innerHTML = `
                <input type="text" name="product_title[]" placeholder="Nama Menu / Produk" class="px-3 py-2 rounded-lg border border-classic-border text-xs outline-none focus:ring-2 focus:ring-classic-green"/>
                <input type="text" name="product_price[]" placeholder="Harga" class="px-3 py-2 rounded-lg border border-classic-border text-xs outline-none focus:ring-2 focus:ring-classic-green"/>
            `;
            container.appendChild(div);
        };
    </script>
</body>
</html>
