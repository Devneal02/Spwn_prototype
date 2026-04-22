<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Spwn - Where games are discovered' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    
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
                <a href="/games" class="hover:text-white transition-colors">Games</a>
                <a href="/charts" class="hover:text-white transition-colors">Charts</a>
                <a href="/community" class="hover:text-white transition-colors">Community</a>
                <a href="/backlog" class="text-[#00A3FF] hover:text-white transition-colors">Backlog</a>
            </div>

            <div class="flex items-center gap-4 ml-auto w-full max-w-lg" x-data="{ isLoggedIn: localStorage.getItem('isLoggedIn') === 'true' }">
                
                <div class="flex-1 relative hidden sm:block">
                    <input type="text" placeholder="Search Spwn..." class="w-full bg-white/5 border border-white/10 rounded-full py-2.5 pl-12 pr-4 text-sm text-white focus:outline-none focus:border-[#00A3FF] focus:bg-white/10 transition-all backdrop-blur-md">
                    <svg class="w-5 h-5 text-slate-500 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    <template x-if="!isLoggedIn">
                        <div class="flex items-center gap-3">
                            <a href="/login" class="text-sm font-bold text-slate-300 hover:text-white transition-colors px-2">Log In</a>
                            <a href="/signup" class="inline-block text-sm font-bold text-[#05050A] bg-[#00A3FF] hover:bg-[#33b5ff] transition-colors px-5 py-2.5 rounded-full shadow-[0_0_15px_rgba(0,163,255,0.3)]">Sign Up</a>
                        </div>
                    </template>

                    <template x-if="isLoggedIn">
                        <div class="flex items-center gap-4">
                            <a href="/profile" class="flex items-center gap-2 group">
                                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-[#00A3FF] to-purple-600 flex items-center justify-center text-white font-bold text-sm shadow-[0_0_10px_rgba(0,163,255,0.3)] group-hover:shadow-[0_0_15px_rgba(0,163,255,0.5)] transition-all">
                                    N
                                </div>
                                <span class="text-sm font-bold text-white group-hover:text-[#00A3FF] transition-colors hidden md:block">Nelann</span>
                            </a>
                            <button @click="localStorage.setItem('isLoggedIn', 'false'); window.location.href='/login'" class="text-xs font-bold text-slate-400 hover:text-white transition-colors border border-white/10 rounded-full px-4 py-2 hover:bg-white/5 cursor-pointer">
                                Logout
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-1 relative w-full">
        {{ $slot }}
    </main>

    <footer class="w-full border-t border-white/10 bg-[#020205] pt-16 pb-8 z-20 relative mt-auto">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-12">
                
                <div class="lg:col-span-2">
                    <a href="/" class="text-2xl font-black text-white flex items-center gap-2 tracking-tighter mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="SPWN logo" class="w-10 h-10" />
                        <span>S<span class="text-[#00A3FF]">PW</span>N</span>
                    </a>
                    <p class="text-slate-400 text-sm leading-relaxed max-w-sm mb-6">
                        The ultimate database and community for gamers. Discover your next favorite game and share your experiences.
                    </p>
                    <div class="flex items-center gap-4">
                        <button class="w-10 h-10 rounded-full bg-white/5 hover:bg-[#00A3FF] text-white hover:text-[#05050A] flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </button>
                        <button class="w-10 h-10 rounded-full bg-white/5 hover:bg-[#00A3FF] text-white hover:text-[#05050A] flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </button>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Spwn</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">Press</a></li>
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Community</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="/community" class="hover:text-[#00A3FF] transition-colors">Guidelines</a></li>
                        <li><a href="/community" class="hover:text-[#00A3FF] transition-colors">Top Reviewers</a></li>
                        <li><a href="/discover" class="hover:text-[#00A3FF] transition-colors">Leaderboards</a></li>
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">Support</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-sm">Legal</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-[#00A3FF] transition-colors">Cookie Policy</a></li>
                    </ul>
                </div>

            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-slate-500 text-xs">
                    © 2026 Spwn Database. All rights reserved. Not affiliated with IGDB or Steam.
                </p>
                <div class="flex gap-4 text-xs font-bold text-slate-400 uppercase tracking-widest">
                    <span>Build: v1.0.0</span>
                    <span class="w-1 h-1 rounded-full bg-green-500 my-auto"></span>
                    <span>System Operational</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>