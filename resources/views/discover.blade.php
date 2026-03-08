<x-layouts.app title="Discover - Spwn">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="max-w-[1400px] mx-auto px-6 py-10 flex flex-col lg:flex-row gap-10 items-start relative z-10">
        
        <aside class="w-full lg:w-64 shrink-0 space-y-8 sticky top-28 hidden lg:block">
            
            <div class="relative z-50" x-data="{ open: false, selected: 'Highest Rated' }">
                <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-white mb-4 border-b border-white/10 pb-2">Sort By</h3>
                
                <button @click="open = !open" @click.away="open = false" type="button" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-sm text-left text-white focus:outline-none focus:border-[#00A3FF] hover:bg-white/10 transition-all shadow-lg backdrop-blur-md flex items-center justify-between">
                    <span x-text="selected" class="font-bold text-slate-200">Highest Rated</span>
                    
                    <svg class="w-4 h-4 text-[#00A3FF] transition-transform duration-300" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-100" 
                     x-transition:enter-start="transform opacity-0 scale-95" 
                     x-transition:enter-end="transform opacity-100 scale-100" 
                     x-transition:leave="transition ease-in duration-75" 
                     x-transition:leave-start="transform opacity-100 scale-100" 
                     x-transition:leave-end="transform opacity-0 scale-95" 
                     class="absolute w-full mt-2 rounded-xl bg-[#0A0A0F] border border-white/10 shadow-2xl overflow-hidden z-50 py-2 backdrop-blur-xl" 
                     style="display: none;">
                    <button @click="selected = 'Highest Rated'; open = false" class="w-full text-left px-4 py-2 text-sm text-slate-300 hover:bg-[#00A3FF] hover:text-[#05050A] font-bold transition-colors">Highest Rated</button>
                    <button @click="selected = 'Most Popular'; open = false" class="w-full text-left px-4 py-2 text-sm text-slate-300 hover:bg-[#00A3FF] hover:text-[#05050A] font-bold transition-colors">Most Popular</button>
                    <button @click="selected = 'Newest Releases'; open = false" class="w-full text-left px-4 py-2 text-sm text-slate-300 hover:bg-[#00A3FF] hover:text-[#05050A] font-bold transition-colors">Newest Releases</button>
                    <button @click="selected = 'Coming Soon'; open = false" class="w-full text-left px-4 py-2 text-sm text-slate-300 hover:bg-[#00A3FF] hover:text-[#05050A] font-bold transition-colors">Coming Soon</button>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-white mb-4 border-b border-white/10 pb-2">Platforms</h3>
                <div class="space-y-3 text-sm text-slate-400">
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" checked class="accent-[#00A3FF] w-4 h-4 rounded bg-black border-white/20"> PC</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" checked class="accent-[#00A3FF] w-4 h-4 rounded bg-black border-white/20"> PlayStation 5</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" class="accent-[#00A3FF] w-4 h-4 rounded bg-black border-white/20"> Xbox Series X|S</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" class="accent-[#00A3FF] w-4 h-4 rounded bg-black border-white/20"> Nintendo Switch</label>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-white mb-4 border-b border-white/10 pb-2">Genres</h3>
                <div class="space-y-3 text-sm text-slate-400 max-h-48 overflow-y-auto pr-2 scrollbar-thin scrollbar-thumb-white/10 scrollbar-track-transparent">
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" checked class="accent-[#00A3FF] w-4 h-4"> Action RPG</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" class="accent-[#00A3FF] w-4 h-4"> Shooter</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" checked class="accent-[#00A3FF] w-4 h-4"> Open World</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" class="accent-[#00A3FF] w-4 h-4"> Platformer</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" class="accent-[#00A3FF] w-4 h-4"> Strategy</label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors"><input type="checkbox" class="accent-[#00A3FF] w-4 h-4"> Survival Horror</label>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-white mb-4 border-b border-white/10 pb-2">Spwn Rating</h3>
                <div class="space-y-3 text-sm text-slate-400">
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors">
                        <input type="radio" name="rating" class="accent-[#00A3FF] w-4 h-4"> 
                        <span class="flex items-center gap-1"><span class="text-green-400 font-bold">9.0</span> & up (Masterpiece)</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors">
                        <input type="radio" name="rating" class="accent-[#00A3FF] w-4 h-4"> 
                        <span class="flex items-center gap-1"><span class="text-green-400 font-bold">8.0</span> & up (Great)</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors">
                        <input type="radio" name="rating" checked class="accent-[#00A3FF] w-4 h-4"> 
                        <span class="flex items-center gap-1"><span class="text-amber-400 font-bold">7.0</span> & up (Good)</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer hover:text-white transition-colors">
                        <input type="radio" name="rating" class="accent-[#00A3FF] w-4 h-4"> Any Rating
                    </label>
                </div>
            </div>

            <button class="w-full py-3 bg-[#00A3FF]/10 border border-[#00A3FF]/30 hover:bg-[#00A3FF] hover:text-[#05050A] text-[#00A3FF] text-sm font-bold rounded-xl transition-all shadow-[0_0_15px_rgba(0,163,255,0.1)] hover:shadow-[0_0_20px_rgba(0,163,255,0.4)]">
                Apply Filters
            </button>
        </aside>

        <main class="flex-1 w-full">
            
            <div class="mb-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-black text-white mb-2 tracking-tight">Discover Games</h1>
                        <p class="text-slate-400 text-sm">Showing 2,104 results</p>
                    </div>
                    
                    <div class="flex items-center gap-2 bg-white/5 border border-white/10 p-1 rounded-lg backdrop-blur-md">
                        <button class="p-2 rounded bg-white/10 text-white shadow">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        </button>
                        <button class="p-2 rounded text-slate-500 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-2">
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider mr-2">Active Filters:</span>
                    <button class="flex items-center gap-2 px-3 py-1.5 bg-[#00A3FF]/10 border border-[#00A3FF]/30 text-[#00A3FF] rounded-full text-xs font-bold hover:bg-[#00A3FF]/20 transition-colors group">
                        Action RPG
                        <svg class="w-3 h-3 text-[#00A3FF] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <button class="flex items-center gap-2 px-3 py-1.5 bg-[#00A3FF]/10 border border-[#00A3FF]/30 text-[#00A3FF] rounded-full text-xs font-bold hover:bg-[#00A3FF]/20 transition-colors group">
                        Open World
                        <svg class="w-3 h-3 text-[#00A3FF] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <button class="flex items-center gap-2 px-3 py-1.5 bg-[#00A3FF]/10 border border-[#00A3FF]/30 text-[#00A3FF] rounded-full text-xs font-bold hover:bg-[#00A3FF]/20 transition-colors group">
                        PC
                        <svg class="w-3 h-3 text-[#00A3FF] group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <button class="text-xs text-slate-400 hover:text-white transition-colors underline ml-2">Clear All</button>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                
                <a href="/details" class="group block relative">
                    <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co4jni.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                            <span class="bg-[#00A3FF] text-[#05050A] px-3 py-1.5 rounded-lg text-xs font-bold">View Details</span>
                        </div>
                        <div class="absolute top-2 right-2 flex items-center gap-1 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 9.9
                        </div>
                    </div>
                    <h3 class="font-bold text-white text-sm leading-tight group-hover:text-[#00A3FF] transition-colors truncate">Elden Ring</h3>
                    <p class="text-xs text-slate-500 mt-1">2022 • FromSoftware</p>
                </a>

                <a href="/details" class="group block relative">
                    <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1wyy.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                            <span class="bg-[#00A3FF] text-[#05050A] px-3 py-1.5 rounded-lg text-xs font-bold">View Details</span>
                        </div>
                        <div class="absolute top-2 right-2 flex items-center gap-1 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 9.8
                        </div>
                    </div>
                    <h3 class="font-bold text-white text-sm leading-tight group-hover:text-[#00A3FF] transition-colors truncate">The Witcher 3: Wild Hunt</h3>
                    <p class="text-xs text-slate-500 mt-1">2015 • CD Projekt Red</p>
                </a>

                <a href="/details" class="group block relative">
                    <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2mvt.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                            <span class="bg-[#00A3FF] text-[#05050A] px-3 py-1.5 rounded-lg text-xs font-bold">View Details</span>
                        </div>
                        <div class="absolute top-2 right-2 flex items-center gap-1 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 8.8
                        </div>
                    </div>
                    <h3 class="font-bold text-white text-sm leading-tight group-hover:text-[#00A3FF] transition-colors truncate">Cyberpunk 2077</h3>
                    <p class="text-xs text-slate-500 mt-1">2020 • CD Projekt Red</p>
                </a>

                <a href="/details" class="group block relative">
                    <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co22l7.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                            <span class="bg-[#00A3FF] text-[#05050A] px-3 py-1.5 rounded-lg text-xs font-bold">View Details</span>
                        </div>
                        <div class="absolute top-2 right-2 flex items-center gap-1 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 9.4
                        </div>
                    </div>
                    <h3 class="font-bold text-white text-sm leading-tight group-hover:text-[#00A3FF] transition-colors truncate">Ghost of Tsushima</h3>
                    <p class="text-xs text-slate-500 mt-1">2020 • Sucker Punch</p>
                </a>

                <a href="/details" class="group block relative">
                    <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co670h.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                            <span class="bg-[#00A3FF] text-[#05050A] px-3 py-1.5 rounded-lg text-xs font-bold">View Details</span>
                        </div>
                        <div class="absolute top-2 right-2 flex items-center gap-1 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 9.7
                        </div>
                    </div>
                    <h3 class="font-bold text-white text-sm leading-tight group-hover:text-[#00A3FF] transition-colors truncate">Baldur's Gate 3</h3>
                    <p class="text-xs text-slate-500 mt-1">2023 • Larian Studios</p>
                </a>
                
            </div>

            <div class="mt-16 flex items-center justify-center gap-2">
                <button class="w-10 h-10 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-400 hover:text-white hover:bg-white/10 transition-colors disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                
                <button class="w-10 h-10 rounded-lg flex items-center justify-center bg-[#00A3FF] text-[#05050A] font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">1</button>
                <button class="w-10 h-10 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10 hover:text-white font-bold transition-colors">2</button>
                <button class="w-10 h-10 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10 hover:text-white font-bold transition-colors">3</button>
                <span class="text-slate-500 px-2">...</span>
                <button class="w-10 h-10 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10 hover:text-white font-bold transition-colors">24</button>
                
                <button class="w-10 h-10 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-400 hover:text-white hover:bg-white/10 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

        </main>

    </div>
</x-layouts.app>