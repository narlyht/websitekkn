<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login Admin - Portal UMKM Cikokol</title>
    
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
<body class="bg-classic-sand/60 text-classic-charcoal font-sans-body antialiased min-h-screen flex items-center justify-center p-6">

    <div class="bg-white rounded-3xl p-8 sm:p-10 border border-classic-border shadow-2xl max-w-md w-full relative">
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-classic-green text-classic-gold rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-md border border-classic-gold/30">
                <span class="material-symbols-outlined text-4xl">admin_panel_settings</span>
            </div>
            <span class="text-xs text-classic-gold font-bold uppercase tracking-widest block mb-1">KKN Pemuda Wangsakara UYM</span>
            <h1 class="font-classic text-3xl font-bold text-classic-green">Login Admin UMKM</h1>
            <p class="text-xs text-classic-charcoal/70 mt-1">Masukkan kredensial admin untuk mengelola data usaha Cikokol</p>
        </div>

        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-800 text-xs p-3.5 rounded-xl mb-4 font-semibold">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-800 text-xs p-3.5 rounded-xl mb-4 font-semibold">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Username</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3.5 top-2.5 text-classic-charcoal/40 text-xl">person</span>
                    <input type="text" name="username" required value="admin" class="w-full pl-11 pr-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-classic-green uppercase tracking-wider mb-2">Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3.5 top-2.5 text-classic-charcoal/40 text-xl">lock</span>
                    <input type="password" name="password" required value="password" class="w-full pl-11 pr-4 py-2.5 rounded-xl border border-classic-border text-sm outline-none focus:ring-2 focus:ring-classic-green"/>
                </div>
            </div>

            <button type="submit" class="w-full bg-classic-green hover:bg-classic-dark text-classic-cream py-3 rounded-xl font-bold text-sm shadow-md border border-classic-gold/30 transition-all">
                Masuk ke Dashboard
            </button>
        </form>

        <div class="mt-8 text-center border-t border-classic-sand pt-4">
            <a href="{{ route('home') }}" class="text-xs text-classic-gold font-bold hover:underline flex items-center justify-center gap-1">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                Kembali ke Website Utama
            </a>
        </div>
    </div>

</body>
</html>
