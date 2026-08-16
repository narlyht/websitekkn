<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tambah UMKM Baru - Dashboard Admin Cikokol</title>
    
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

            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Alamat Lengkap Tempat Usaha</label>
                <textarea name="address" rows="2" required placeholder="Jl. Cikokol Raya No. 12, RT 02 / RW 01, Kelurahan Cikokol, Kota Tangerang" class="w-full px-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"></textarea>
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
                <button type="submit" class="bg-classic-green hover:bg-classic-dark text-classic-cream px-8 py-3 rounded-xl font-bold text-sm shadow-md border border-classic-gold/30">
                    Simpan Data UMKM
                </button>
                <a href="{{ route('admin.dashboard') }}" class="text-xs font-bold text-classic-charcoal/70 hover:underline">Batal</a>
            </div>
        </form>
    </div>

    <script>
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
