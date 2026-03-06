<footer class="bg-zinc-950 border-t border-zinc-800/60">
    <div class="max-w-6xl mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">

        {{-- Brand --}}
        <div class="md:col-span-1 space-y-4">
            <p class="text-xl font-black text-white tracking-tight">
                Tailwind<span class="text-amber-400">.</span>
            </p>
            <p class="text-zinc-500 text-sm leading-relaxed">
                Thoughtful design for brands that want to leave a mark.
            </p>
            <div class="flex gap-2 pt-1">
                <a href="#" class="w-8 h-8 rounded-full bg-zinc-800 hover:bg-amber-400 hover:text-zinc-950 flex items-center justify-center text-zinc-400 transition-all duration-200 hover:-translate-y-px">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.74l7.73-8.835L1.254 2.25H8.08l4.259 5.63 5.905-5.63Zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-zinc-800 hover:bg-amber-400 hover:text-zinc-950 flex items-center justify-center text-zinc-400 transition-all duration-200 hover:-translate-y-px">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-zinc-800 hover:bg-amber-400 hover:text-zinc-950 flex items-center justify-center text-zinc-400 transition-all duration-200 hover:-translate-y-px">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
            </div>
        </div>

        {{-- Company Links --}}
        <div class="space-y-4">
            <p class="text-xs uppercase tracking-widest text-zinc-600 font-semibold">Company</p>
            <ul class="space-y-2.5 text-sm text-zinc-400">
                <li><a href="#" class="hover:text-amber-400 transition-colors hover:translate-x-0.5 inline-block transition-transform">Home</a></li>
                <li><a href="#" class="hover:text-amber-400 transition-colors hover:translate-x-0.5 inline-block transition-transform">Gallery</a></li>
            </ul>
        </div>

        {{-- Resources Links --}}
        <div class="space-y-4">
            <p class="text-xs uppercase tracking-widest text-zinc-600 font-semibold">Resources</p>
            <ul class="space-y-2.5 text-sm text-zinc-400">
                <li><a href="#" class="hover:text-amber-400 transition-colors hover:translate-x-0.5 inline-block transition-transform">Documentation</a></li>
                <li><a href="#" class="hover:text-amber-400 transition-colors hover:translate-x-0.5 inline-block transition-transform">Blog</a></li>
                <li><a href="#" class="hover:text-amber-400 transition-colors hover:translate-x-0.5 inline-block transition-transform">Case Studies</a></li>
                <li><a href="#" class="hover:text-amber-400 transition-colors hover:translate-x-0.5 inline-block transition-transform">Status</a></li>
            </ul>
        </div>

        {{-- Newsletter --}}
        <div class="space-y-4">
            <p class="text-xs uppercase tracking-widest text-zinc-600 font-semibold">Newsletter</p>
            <p class="text-sm text-zinc-500 leading-relaxed">Get design insights delivered weekly.</p>
            <form onsubmit="return false" class="flex gap-2 mt-1">
                <input type="email" placeholder="your@email.com"
                    class="flex-1 bg-zinc-800/80 border border-zinc-700 rounded-full px-4 py-2 text-sm text-zinc-300 placeholder-zinc-600
                    focus:outline-none focus:border-amber-400/50 focus:ring-2 focus:ring-amber-400/10 transition-all"/>
                <button type="submit"
                    class="bg-amber-400 text-zinc-950 font-bold text-sm px-4 py-2 rounded-full hover:bg-amber-300 transition-all hover:shadow-lg hover:shadow-amber-400/20 whitespace-nowrap">
                    Join
                </button>
            </form>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-zinc-800/60">
        <div class="max-w-6xl mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-zinc-600">
            <p>© 2025 Arkive Studio. All rights reserved.</p>
            <div class="flex gap-5">
                <a href="#" class="hover:text-zinc-400 transition-colors">Privacy</a>
                <a href="#" class="hover:text-zinc-400 transition-colors">Terms</a>
                <a href="#" class="hover:text-zinc-400 transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>