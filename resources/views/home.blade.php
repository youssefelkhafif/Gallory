@extends('layouts.index')

@section('content')
    

<section class="min-h-[70vh] flex items-center justify-center px-6 py-20 bg-zinc-950 relative overflow-hidden">

    {{-- Background glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-amber-500/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative w-full max-w-md">
        {{-- Outer glow ring --}}
        <div class="absolute -inset-px bg-gradient-to-br from-amber-400/20 via-transparent to-amber-400/10 rounded-3xl blur-sm"></div>

        {{-- Card --}}
        <div class="relative bg-zinc-900 border border-zinc-800 rounded-3xl p-8 shadow-2xl">

            {{-- Header --}}
            <div class="mb-8 text-center">
                <div class="w-14 h-14 bg-amber-400/10 border border-amber-400/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5"/>
                    </svg>
                </div>
                <h2 class="text-white text-xl font-bold tracking-tight">Upload Image</h2>
                <p class="text-zinc-500 text-sm mt-1">Add a new image to your gallery</p>
            </div>

            <form class="flex flex-col gap-4" action="{{ route('gallory.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Name Input --}}
                <div class="relative group">
                    <input type="text" name="name" placeholder=" " required
                        class="peer w-full bg-zinc-800/60 border border-zinc-700 rounded-xl px-4 pt-5 pb-2 text-white text-sm outline-none
                        focus:border-amber-400/60 focus:ring-2 focus:ring-amber-400/10 transition-all placeholder-transparent"/>
                    <label class="absolute left-4 top-2 text-[10px] uppercase tracking-widest text-amber-400/70 font-semibold transition-all
                        peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-sm peer-placeholder-shown:text-zinc-500
                        peer-placeholder-shown:normal-case peer-placeholder-shown:tracking-normal peer-placeholder-shown:font-normal
                        peer-focus:top-2 peer-focus:text-[10px] peer-focus:uppercase peer-focus:tracking-widest peer-focus:text-amber-400/70 peer-focus:font-semibold">
                        Image Name
                    </label>
                </div>

                {{-- File Drop Zone --}}
                <label for="image-upload"
                    class="group flex flex-col items-center justify-center gap-3 w-full h-36
                    border-2 border-dashed border-zinc-700 rounded-xl cursor-pointer
                    hover:border-amber-400/40 hover:bg-amber-400/5 transition-all duration-300">
                    <div class="w-10 h-10 bg-zinc-800 rounded-xl flex items-center justify-center group-hover:bg-amber-400/10 transition-colors">
                        <svg class="w-5 h-5 text-zinc-500 group-hover:text-amber-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M13.5 12h.008v.008H13.5V12z"/>
                        </svg>
                    </div>
                    <div class="text-center">
                        <p class="text-sm text-zinc-400 group-hover:text-zinc-300 transition-colors">
                            <span class="text-amber-400 font-medium">Click to browse</span> or drag & drop
                        </p>
                        <p class="text-xs text-zinc-600 mt-0.5">PNG · JPG · WEBP up to 10MB</p>
                    </div>
                    <input id="image-upload" type="file" name="image" required class="hidden"/>
                </label>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full py-3 rounded-xl font-bold text-sm text-zinc-950
                    bg-amber-400 hover:bg-amber-300
                    shadow-lg shadow-amber-400/20 hover:shadow-amber-400/30
                    transition-all duration-200 hover:-translate-y-px active:translate-y-0">
                    Upload Image →
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
