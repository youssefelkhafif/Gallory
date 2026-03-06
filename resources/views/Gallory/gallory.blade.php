@extends('layouts.index')

@section('content')

    <section class="bg-zinc-950 py-24 px-6 relative overflow-hidden">

        {{-- Ambient background glows --}}
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-amber-500/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-amber-500/5 rounded-full blur-[120px] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto relative">

            {{-- Section Header --}}
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.25em] text-amber-400 mb-4">
                    <span class="w-8 h-px bg-amber-400/50"></span>
                    Our Gallery
                    <span class="w-8 h-px bg-amber-400/50"></span>
                </span>
                <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-none">
                    Captured <span class="text-amber-400">Moments</span>
                </h2>
                <p class="max-w-xl mx-auto text-zinc-500 mt-5 text-base leading-relaxed">
                    A visual journey through our most memorable events and projects
                </p>
            </div>

            {{-- Gallery Grid --}}
            @if ($gallory->isEmpty())
                <div class="flex flex-col items-center justify-center py-32 gap-4">
                    <div class="w-20 h-20 rounded-2xl bg-zinc-900 border border-zinc-800 flex items-center justify-center">
                        <svg class="w-8 h-8 text-zinc-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M13.5 12h.008v.008H13.5V12z" />
                        </svg>
                    </div>
                    <p class="text-zinc-600 text-sm">No images yet — be the first to upload</p>
                </div>
            @else
                <div class="columns-2 md:columns-3 lg:columns-4 gap-3 space-y-3">
                    @foreach ($gallory as $image)
                        <div
                            class="group relative break-inside-avoid overflow-hidden rounded-2xl bg-zinc-900 cursor-pointer">

                            {{-- Image --}}
                            <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->name }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />

                            {{-- Hover Overlay --}}
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent
                            opacity-0 group-hover:opacity-100 transition-all duration-400
                            flex flex-col justify-end p-4">

                                <div class="translate-y-3 group-hover:translate-y-0 transition-transform duration-400">
                                    <h3 class="text-white font-bold text-sm leading-snug truncate">{{ $image->name }}</h3>
                                    <p class="text-zinc-400 text-xs mt-0.5">{{ $image->created_at->format('M d, Y') }}</p>

                                    {{-- Delete --}}
                                    <form action="{{ route('gallory.destroy', $image->id) }}" method="POST" class="mt-3">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold
                                        bg-white/10 border border-white/10 text-white backdrop-blur-sm
                                        hover:bg-red-500/30 hover:border-red-500/40 transition-all duration-200">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            Remove
                                        </button>
                                    </form>
                                </div>
                            </div>

                            {{-- Amber corner accent --}}
                            <div
                                class="absolute top-3 right-3 w-2 h-2 rounded-full bg-amber-400
                            opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-lg shadow-amber-400/50">
                            </div>

                        </div>
                    @endforeach
                </div>

                {{-- Load More --}}
                <div class="text-center mt-16">
                    <button
                        class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full font-bold text-sm
                    bg-amber-400 text-zinc-950 hover:bg-amber-300
                    shadow-lg shadow-amber-400/20 hover:shadow-amber-400/30
                    transition-all duration-200 hover:-translate-y-px active:translate-y-0">
                        Load More Photos
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            @endif

        </div>
    </section>

@endsection
