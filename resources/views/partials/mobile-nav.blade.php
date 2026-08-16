@props(['active' => ''])

<!-- Mobile Bottom Navigation Bar (App-Style for Android & iOS) -->
<nav class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-xl border-t border-classic-border shadow-[0_-5px_25px_rgba(15,76,54,0.12)] px-2 py-1.5 flex justify-around items-center rounded-t-2xl">
    <!-- Home -->
    <a href="{{ route('home') }}" class="flex flex-col items-center justify-center py-1 px-3 rounded-xl transition-all duration-200 active:scale-90 {{ $active === 'home' ? 'text-classic-green font-bold' : 'text-classic-charcoal/60 font-medium hover:text-classic-green' }}">
        <div class="relative flex items-center justify-center">
            <span class="material-symbols-outlined text-2xl {{ $active === 'home' ? 'scale-110 text-classic-green' : '' }}">home</span>
            @if($active === 'home')
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full animate-ping"></span>
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full"></span>
            @endif
        </div>
        <span class="text-[10px] mt-0.5 tracking-tight {{ $active === 'home' ? 'text-classic-green font-bold' : '' }}">Beranda</span>
    </a>

    <!-- UMKM -->
    <a href="{{ route('umkm.index') }}" class="flex flex-col items-center justify-center py-1 px-3 rounded-xl transition-all duration-200 active:scale-90 {{ $active === 'umkm' ? 'text-classic-green font-bold' : 'text-classic-charcoal/60 font-medium hover:text-classic-green' }}">
        <div class="relative flex items-center justify-center">
            <span class="material-symbols-outlined text-2xl {{ $active === 'umkm' ? 'scale-110 text-classic-green' : '' }}">storefront</span>
            @if($active === 'umkm')
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full animate-ping"></span>
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full"></span>
            @endif
        </div>
        <span class="text-[10px] mt-0.5 tracking-tight {{ $active === 'umkm' ? 'text-classic-green font-bold' : '' }}">UMKM</span>
    </a>

    <!-- Berita -->
    <a href="{{ route('news.index') }}" class="flex flex-col items-center justify-center py-1 px-3 rounded-xl transition-all duration-200 active:scale-90 {{ $active === 'news' ? 'text-classic-green font-bold' : 'text-classic-charcoal/60 font-medium hover:text-classic-green' }}">
        <div class="relative flex items-center justify-center">
            <span class="material-symbols-outlined text-2xl {{ $active === 'news' ? 'scale-110 text-classic-green' : '' }}">newspaper</span>
            @if($active === 'news')
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full animate-ping"></span>
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full"></span>
            @endif
        </div>
        <span class="text-[10px] mt-0.5 tracking-tight {{ $active === 'news' ? 'text-classic-green font-bold' : '' }}">Berita</span>
    </a>

    <!-- Tim KKN -->
    <a href="{{ route('tim-kkn.index') }}" class="flex flex-col items-center justify-center py-1 px-3 rounded-xl transition-all duration-200 active:scale-90 {{ $active === 'tim-kkn' ? 'text-classic-green font-bold' : 'text-classic-charcoal/60 font-medium hover:text-classic-green' }}">
        <div class="relative flex items-center justify-center">
            <span class="material-symbols-outlined text-2xl {{ $active === 'tim-kkn' ? 'scale-110 text-classic-green' : '' }}">groups</span>
            @if($active === 'tim-kkn')
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full animate-ping"></span>
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-classic-gold rounded-full"></span>
            @endif
        </div>
        <span class="text-[10px] mt-0.5 tracking-tight {{ $active === 'tim-kkn' ? 'text-classic-green font-bold' : '' }}">Tim KKN</span>
    </a>

    <!-- WhatsApp Posko -->
    <a href="https://wa.me/6282371001161" target="_blank" class="flex flex-col items-center justify-center py-1 px-3 rounded-xl text-classic-green hover:text-classic-dark transition-all duration-200 active:scale-90">
        <div class="w-8 h-8 bg-classic-green text-classic-gold rounded-full flex items-center justify-center shadow-md border border-classic-gold/40">
            <span class="material-symbols-outlined text-lg">chat</span>
        </div>
        <span class="text-[10px] font-bold mt-0.5 text-classic-green tracking-tight">Posko WA</span>
    </a>
</nav>
