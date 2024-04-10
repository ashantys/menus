<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="https://th.bing.com/th/id/OIP.RGtGX5-Ymw4z_TDSbS4CswHaHa?rs=1&pid=ImgDetMain" alt="leshasLogo" class="h-20 w-auto">
            </div>
            <!-- Menu items -->
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('pages.home') }}" class="text-black hover:text-cyan-700" >Lo Nuevo</a>
                <a href="{{ route('pages.about') }}" class="text-black hover:text-cyan-700">Sobre Nosotros</a>
                <a href="#" class="text-black hover:text-cyan-700">Fotos</a>
            </div>
            <!-- Icons -->
            <div class="flex space-x-4">
                <a><x-heroicon-o-magnifying-glass class="w-6 h-6 text-slate-900" /></a>
                <a><x-heroicon-o-user class="w-6 h-6 text-slate-900" /></a>
                <a><x-heroicon-o-heart class="w-6 h-6 text-slate-900" /></a>
                <a><x-heroicon-o-shopping-cart class="w-6 h-6 text-slate-900" /></a>
            </div>
        </div>
    </div>
</nav>

