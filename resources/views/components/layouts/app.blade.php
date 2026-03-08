<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Spwn - Where games are discovered' }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#05050A] text-slate-300 antialiased font-sans selection:bg-[#00A3FF]/30 flex flex-col min-h-screen">
    
    <nav class="sticky top-0 z-50 border-b border-white/5 bg-[#05050A]/80 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center gap-8">
            
            <a href="/" class="text-2xl font-black text-white flex items-center gap-2 tracking-tighter">
                <img src="{{ asset('images/logo.png') }}" alt="SPWN logo" class="w-16 h-16 pt-1" />
                <span>S<span class="text-[#00A3FF]">PW</span>N</span>
            </a>

            <div class="hidden md:flex items-center gap-6 text-sm font-bold uppercase tracking-wider text-slate-400">
                <a href="/" class="hover:text-white transition-colors">Home</a>
                <a href="/discover" class="hover:text-white transition-colors">Discover</a>
                <a href="/games" class="hover:text-white transition-colors">Games</a>
                <a href="/community" class="hover:text-white transition-colors">Community</a>
                <a href="/backlog" class="text-[#00A3FF] hover:text-white transition-colors">Backlog</a>
            </div>

            <div class="flex items-center gap-4 ml-auto w-full max-w-lg">
                <div class="flex-1 relative hidden sm:block">
                    <input type="text" placeholder="Search Spwn..." class="w-full bg-white/5 border border-white/10 rounded-full py-2.5 pl-12 pr-4 text-sm text-white focus:outline-none focus:border-[#00A3FF] focus:bg-white/10 transition-all backdrop-blur-md">
                    <svg class="w-5 h-5 text-slate-500 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    <a href="/login" class="text-sm font-bold text-slate-300 hover:text-white transition-colors px-2">Log In</a>
                    <a href="/signup" class="inline-block text-sm font-bold text-[#05050A] bg-[#00A3FF] hover:bg-[#33b5ff] transition-colors px-5 py-2.5 rounded-full shadow-[0_0_15px_rgba(0,163,255,0.3)]">Sign Up</a>
                </div>
            </div>
            
        </div>
    </nav>

    <main class="flex-1 relative w-full">
        {{ $slot }}
    </main>

</body>
</html>