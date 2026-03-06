<nav class="sticky top-0 z-50 bg-zinc-950/80 backdrop-blur-xl border-b border-zinc-800/60">
    <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">

        {{-- Brand --}}
        <a href="" class="text-xl font-black tracking-tight text-white flex items-center gap-1">
            Gallery<span class="text-amber-400 text-2xl leading-none">.</span>
        </a>

        {{-- Desktop Links --}}
        <ul class="hidden md:flex items-center gap-1 text-sm font-medium">
            <li>
                <a href="{{ route('Home.index') }}"
                    class="relative px-4 py-2 text-zinc-400 hover:text-white transition-colors duration-200 rounded-lg hover:bg-white/5 group">
                    Home
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-px bg-amber-400 transition-all duration-300 group-hover:w-4"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('gallory.index') }}"
                    class="relative px-4 py-2 text-zinc-400 hover:text-white transition-colors duration-200 rounded-lg hover:bg-white/5 group">
                    Gallery
                    <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-0 h-px bg-amber-400 transition-all duration-300 group-hover:w-4"></span>
                </a>
            </li>
        </ul>

        {{-- CTA --}}
        <div class="hidden md:flex items-center gap-3">
            <a href="" class="text-sm text-zinc-400 hover:text-white transition-colors px-3 py-2 rounded-lg hover:bg-white/5">
                Log in
            </a>
            <a href="#"
                class="text-sm bg-amber-400 text-zinc-950 font-bold px-5 py-2 rounded-full hover:bg-amber-300 transition-all duration-200 hover:shadow-lg hover:shadow-amber-400/20 hover:-translate-y-px">
                Get started
            </a>
        </div>

        {{-- Hamburger --}}
        <button onclick="toggleMenu()" class="md:hidden text-zinc-400 hover:text-white focus:outline-none p-2 rounded-lg hover:bg-white/5 transition">
            <svg id="icon-open" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="icon-close" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden flex-col px-6 pb-5 gap-1 border-t border-zinc-800/60 bg-zinc-950/95">
        <a href="#" class="block pt-4 px-3 py-2 text-zinc-300 hover:text-amber-400 text-sm transition-colors rounded-lg hover:bg-white/5">Home</a>
        <a href="#" class="block px-3 py-2 text-zinc-300 hover:text-amber-400 text-sm transition-colors rounded-lg hover:bg-white/5">Gallery</a>
        <div class="pt-2 border-t border-zinc-800 mt-2">
            <a href="#"
                class="inline-block text-sm bg-amber-400 text-zinc-950 font-bold px-5 py-2 rounded-full hover:bg-amber-300 transition-colors">
                Get started
            </a>
        </div>
    </div>
</nav>