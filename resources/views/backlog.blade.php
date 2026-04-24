<x-layouts.app title="My Backlog - Spwn">
    
    <div x-data="{ tab: 'want' }">
        
        <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
        <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-[#00A3FF]/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

        <div class="max-w-[1400px] mx-auto px-6 py-12 relative z-10">

            <div class="flex items-center gap-8 mb-8 border-b border-white/5 text-sm font-bold tracking-wider uppercase overflow-x-auto scrollbar-hide">
                <button @click="tab = 'want'" 
                        :class="tab === 'want' ? 'border-[#00A3FF] text-white' : 'border-transparent text-slate-500 hover:text-slate-300'" 
                        class="pb-3 border-b-2 transition-colors flex items-center gap-2 whitespace-nowrap focus:outline-none">
                    Want to Play
                    <span class="bg-white/10 px-2 py-0.5 rounded text-[10px]">12</span>
                </button>
                <button @click="tab = 'playing'" 
                        :class="tab === 'playing' ? 'border-[#00A3FF] text-white' : 'border-transparent text-slate-500 hover:text-slate-300'" 
                        class="pb-3 border-b-2 transition-colors flex items-center gap-2 whitespace-nowrap focus:outline-none">
                    Currently Playing
                    <span class="bg-[#00A3FF]/20 text-[#00A3FF] px-2 py-0.5 rounded text-[10px]">2</span>
                </button>
                <button @click="tab = 'finished'" 
                        :class="tab === 'finished' ? 'border-[#00A3FF] text-white' : 'border-transparent text-slate-500 hover:text-slate-300'" 
                        class="pb-3 border-b-2 transition-colors flex items-center gap-2 whitespace-nowrap focus:outline-none">
                    Finished
                    <span class="bg-emerald-500/20 text-emerald-400 px-2 py-0.5 rounded text-[10px]">24</span>
                </button>
            </div>

            <div x-show="tab === 'want'" x-transition.opacity.duration.300ms class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
                
                <div class="bg-white/5 border border-white/10 rounded-2xl p-4 backdrop-blur-md hover:bg-white/10 transition-colors group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden mb-3">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2050650/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <button class="absolute top-2 right-2 w-8 h-8 rounded-full bg-black/60 backdrop-blur-md flex items-center justify-center text-slate-300 hover:bg-rose-500 hover:text-white transition-colors border border-white/10 z-20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate mb-3">Resident Evil 4</h3>
                    <button class="w-full bg-[#00A3FF]/10 text-[#00A3FF] border border-[#00A3FF]/30 hover:bg-[#00A3FF] hover:text-[#05050A] py-2 rounded-lg text-xs font-bold transition-all flex items-center justify-center gap-2">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Start Playing
                    </button>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-4 backdrop-blur-md hover:bg-white/10 transition-colors group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden mb-3">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2215430/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <button class="absolute top-2 right-2 w-8 h-8 rounded-full bg-black/60 backdrop-blur-md flex items-center justify-center text-slate-300 hover:bg-rose-500 hover:text-white transition-colors border border-white/10 z-20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate mb-3">Ghost of Tsushima</h3>
                    <button class="w-full bg-[#00A3FF]/10 text-[#00A3FF] border border-[#00A3FF]/30 hover:bg-[#00A3FF] hover:text-[#05050A] py-2 rounded-lg text-xs font-bold transition-all flex items-center justify-center gap-2">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Start Playing
                    </button>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-4 backdrop-blur-md hover:bg-white/10 transition-colors group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden mb-3">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/367520/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <button class="absolute top-2 right-2 w-8 h-8 rounded-full bg-black/60 backdrop-blur-md flex items-center justify-center text-slate-300 hover:bg-rose-500 hover:text-white transition-colors border border-white/10 z-20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate mb-3">Hollow Knight</h3>
                    <button class="w-full bg-[#00A3FF]/10 text-[#00A3FF] border border-[#00A3FF]/30 hover:bg-[#00A3FF] hover:text-[#05050A] py-2 rounded-lg text-xs font-bold transition-all flex items-center justify-center gap-2">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg> Start Playing
                    </button>
                </div>
            </div>

            <div x-show="tab === 'playing'" style="display: none;" x-transition.opacity.duration.300ms class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
                
                <div class="bg-white/5 border border-[#00A3FF]/30 rounded-2xl p-4 backdrop-blur-md hover:bg-white/10 transition-colors group shadow-[0_0_20px_rgba(0,163,255,0.1)]">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden mb-3">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/601150/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-100">
                        <div class="absolute top-2 left-2 bg-[#00A3FF] text-[#05050A] px-2 py-0.5 rounded text-[10px] font-bold">Playing</div>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate mb-3">Devil May Cry 5</h3>
                    <div class="grid grid-cols-2 gap-2">
                        <button class="w-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 hover:bg-emerald-500 hover:text-[#05050A] py-2 rounded-lg text-xs font-bold transition-all flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </button>
                        <button class="w-full bg-white/5 text-slate-300 border border-white/10 hover:bg-white/10 py-2 rounded-lg text-xs font-bold transition-all flex items-center justify-center">
                            Pause
                        </button>
                    </div>
                </div>

                <div class="bg-white/5 border border-[#00A3FF]/30 rounded-2xl p-4 backdrop-blur-md hover:bg-white/10 transition-colors group shadow-[0_0_20px_rgba(0,163,255,0.1)]">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden mb-3">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1091500/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-100">
                        <div class="absolute top-2 left-2 bg-[#00A3FF] text-[#05050A] px-2 py-0.5 rounded text-[10px] font-bold">Playing</div>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate mb-3">Cyberpunk 2077</h3>
                    <div class="grid grid-cols-2 gap-2">
                        <button class="w-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 hover:bg-emerald-500 hover:text-[#05050A] py-2 rounded-lg text-xs font-bold transition-all flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </button>
                        <button class="w-full bg-white/5 text-slate-300 border border-white/10 hover:bg-white/10 py-2 rounded-lg text-xs font-bold transition-all flex items-center justify-center">
                            Pause
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="tab === 'finished'" style="display: none;" x-transition.opacity.duration.300ms class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
                
                <div class="bg-white/5 border border-white/10 rounded-2xl p-4 backdrop-blur-md hover:bg-white/10 transition-colors group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden mb-3">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1245620/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-60">
                        <div class="absolute top-2 left-2 bg-emerald-500 text-[#05050A] px-2 py-0.5 rounded text-[10px] font-bold flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg> Beaten
                        </div>
                    </a>
                    <h3 class="font-bold text-slate-400 text-sm leading-tight group-hover:text-white cursor-pointer truncate mb-3">Elden Ring</h3>
                    <button class="w-full bg-white/5 text-slate-300 border border-white/10 hover:bg-white/10 hover:text-white py-2 rounded-lg text-xs font-bold transition-all">
                        Write Review
                    </button>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-4 backdrop-blur-md hover:bg-white/10 transition-colors group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden mb-3">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/292030/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-60">
                        <div class="absolute top-2 left-2 bg-emerald-500 text-[#05050A] px-2 py-0.5 rounded text-[10px] font-bold flex items-center gap-1">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg> Beaten
                        </div>
                    </a>
                    <h3 class="font-bold text-slate-400 text-sm leading-tight group-hover:text-white cursor-pointer truncate mb-3">The Witcher 3</h3>
                    <button class="w-full bg-[#00A3FF]/10 text-[#00A3FF] border border-[#00A3FF]/30 hover:bg-[#00A3FF] hover:text-[#05050A] py-2 rounded-lg text-xs font-bold transition-all">
                        Edit Review
                    </button>
                </div>
            </div>

            <section class="mt-24 pt-12 border-t border-white/10">
                <div class="flex items-end justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">Recommendations</h2>
                    </div>
                </div>

                <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
                    
                    <div class="w-48 shrink-0 snap-start group">
                        <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1174180/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="RDR2">
                        </a>
                        <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Red Dead Redemption 2</h3>
                        <p class="text-xs text-slate-500 mt-1">Because you played Cyberpunk</p>
                    </div>

                    <div class="w-48 shrink-0 snap-start group">
                        <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1086940/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="BG3">
                        </a>
                        <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Baldur's Gate 3</h3>
                        <p class="text-xs text-slate-500 mt-1">Because you played The Witcher 3</p>
                    </div>

                    <div class="w-48 shrink-0 snap-start group">
                        <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2144740/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Ghostrunner 2">
                        </a>
                        <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Ghostrunner 2</h3>
                        <p class="text-xs text-slate-500 mt-1">Because you play Fast Action</p>
                    </div>
                    
                    <div class="w-48 shrink-0 snap-start group">
                        <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2420110/library_600x900.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Horizon Forbidden West">
                        </a>
                        <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Horizon Forbidden West</h3>
                        <p class="text-xs text-slate-500 mt-1">Because you added Ghost of Tsushima</p>
                    </div>

                </div>
            </section>

        </div>
    </div>
</x-layouts.app>