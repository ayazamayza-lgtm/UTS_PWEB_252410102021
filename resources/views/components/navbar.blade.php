@props(['username' => 'someone'])


<nav class="bg-emerald-900/95 backdrop-blur-md text-white shadow-sm border-b border-emerald-800/50 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
           
            <!-- Logo dengan Ikon Pohon/Alam -->
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="flex items-center gap-2.5 font-bold text-xl tracking-tight text-white hover:opacity-90 transition">
                <div class="w-9 h-9 rounded-xl bg-white border border-emerald-500/30 flex items-center justify-center p-1 shadow-sm overflow-hidden">
                    <img src="{{ asset('images/tree.jpg') }}" alt="Logo Tree Outdoor" class="w-full h-full object-cover rounded-lg">
                </div>
                <span>Tree <span class="text-emerald-400 font-bold">Outdoor</span></span>
            </a>


            @if(!request()->is('/'))
            <div class="flex items-center gap-1.5 text-sm font-medium">
               
                <a href="{{ route('dashboard', ['username' => $username]) }}"
                   class="px-3.5 py-2 rounded-xl transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-white/15 text-white font-semibold shadow-inner' : 'text-emerald-100/80 hover:bg-white/10 hover:text-white' }}">
                   Dashboard
                </a>


                <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                   class="px-3.5 py-2 rounded-xl transition-all duration-200 {{ request()->routeIs('pengelolaan') ? 'bg-white/15 text-white font-semibold shadow-inner' : 'text-emerald-100/80 hover:bg-white/10 hover:text-white' }}">
                   Pengelolaan Alat
                </a>


                <a href="{{ route('profile', ['username' => $username]) }}"
                   class="px-3.5 py-2 rounded-xl transition-all duration-200 {{ request()->routeIs('profile') ? 'bg-white/15 text-white font-semibold shadow-inner' : 'text-emerald-100/80 hover:bg-white/10 hover:text-white' }}">
                   Profil
                </a>


                <!-- Garis Pemisah Tipis -->
                <div class="h-4 w-px bg-emerald-700/60 mx-2"></div>


                <!-- Tombol Logout yang Menyesuaikan Warna Tema -->
                <a href="{{ route('login') }}" class="px-3.5 py-1.5 rounded-xl bg-red-500/20 text-red-200 border border-red-500/30 hover:bg-red-600 hover:text-white hover:border-transparent text-xs font-semibold transition-all duration-200">
                   Logout
                </a>
            </div>
            @endif


        </div>
    </div>
</nav>

