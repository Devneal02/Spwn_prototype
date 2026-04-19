<x-layouts.app title="Home - Spwn">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="w-full relative z-10 pb-12">
        
        <main class="max-w-7xl mx-auto px-6 pt-8 space-y-16">

            <section class="relative h-[65vh] min-h-[500px] w-full rounded-2xl overflow-hidden border border-white/10 group cursor-pointer shadow-2xl">
                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/292030/library_hero.jpg" alt="The Witcher 3" class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-1000 group-hover:scale-105">
                
                <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/60 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#05050A]/90 via-[#05050A]/40 to-transparent"></div>

                <div class="absolute bottom-0 left-0 p-10 lg:p-16 w-full lg:w-2/3">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-[#00A3FF] text-[#05050A]">Featured</span>
                        <span class="text-slate-300 text-sm font-medium">RPG • Action</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-4 tracking-tight leading-tight drop-shadow-lg">
                        The Witcher 3: Wild Hunt
                    </h1>
                    <p class="text-slate-300 text-sm md:text-base line-clamp-2 max-w-xl mb-8">
                        As Geralt of Rivia, a monster slayer for hire, you must track down the Child of Prophecy in a vast, war-torn landscape.
                    </p>
                    <a href="/details" class="inline-flex items-center justify-center px-8 py-3.5 rounded-full bg-white text-black text-sm font-bold tracking-wide hover:bg-slate-200 transition-colors gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        View Game Details
                    </a>
                </div>
            </section>

            <section>
                <div class="flex items-end justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">Trending This Week</h2>
                        <p class="text-slate-400 text-sm mt-1 pl-4">The most anticipated and played games right now.</p>
                    </div>
                    <a href="/discover" class="text-[#00A3FF] text-sm font-bold hover:text-white transition-colors uppercase tracking-wider">See all</a>
                </div>

                <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
                    
                    <div class="w-48 shrink-0 snap-start group">
                        <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1qkx.jpg" alt="DMC 5" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-0 left-0 bg-black/60 backdrop-blur-md p-2 rounded-br-xl text-white/50 hover:text-white hover:bg-black/80 cursor-pointer transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 text-sm font-bold text-slate-300 mb-1">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            9.2
                        </div>
                        <h3 class="font-bold text-white text-base leading-tight hover:text-[#00A3FF] cursor-pointer transition-colors">Devil May Cry 5</h3>
                        <button class="w-full mt-3 py-2 rounded-lg bg-[#00A3FF]/10 hover:bg-[#00A3FF]/20 border border-[#00A3FF]/30 text-[#00A3FF] text-xs font-bold transition-colors">
                            + Add to Backlog
                        </button>
                    </div>

                    <div class="w-48 shrink-0 snap-start group">
                        <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co4jni.jpg" alt="Elden Ring" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-0 left-0 bg-black/60 backdrop-blur-md p-2 rounded-br-xl text-white/50 hover:text-white hover:bg-black/80 cursor-pointer transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 text-sm font-bold text-slate-300 mb-1">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            9.9
                        </div>
                        <h3 class="font-bold text-white text-base leading-tight hover:text-[#00A3FF] cursor-pointer transition-colors">Elden Ring</h3>
                        <button class="w-full mt-3 py-2 rounded-lg bg-[#00A3FF]/10 hover:bg-[#00A3FF]/20 border border-[#00A3FF]/30 text-[#00A3FF] text-xs font-bold transition-colors">
                            + Add to Backlog
                        </button>
                    </div>

                    <div class="w-48 shrink-0 snap-start group">
                        <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2mvt.jpg" alt="Cyberpunk 2077" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-0 left-0 bg-black/60 backdrop-blur-md p-2 rounded-br-xl text-white/50 hover:text-white hover:bg-black/80 cursor-pointer transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 text-sm font-bold text-slate-300 mb-1">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            8.8
                        </div>
                        <h3 class="font-bold text-white text-base leading-tight hover:text-[#00A3FF] cursor-pointer transition-colors">Cyberpunk 2077</h3>
                        <button class="w-full mt-3 py-2 rounded-lg bg-[#00A3FF]/10 hover:bg-[#00A3FF]/20 border border-[#00A3FF]/30 text-[#00A3FF] text-xs font-bold transition-colors">
                            + Add to Backlog
                        </button>
                    </div>

                    <div class="w-48 shrink-0 snap-start group">
                        <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co670h.jpg" alt="Baldur's Gate 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-0 left-0 bg-black/60 backdrop-blur-md p-2 rounded-br-xl text-white/50 hover:text-white hover:bg-black/80 cursor-pointer transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 text-sm font-bold text-slate-300 mb-1">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            9.7
                        </div>
                        <h3 class="font-bold text-white text-base leading-tight hover:text-[#00A3FF] cursor-pointer transition-colors">Baldur's Gate 3</h3>
                        <button class="w-full mt-3 py-2 rounded-lg bg-[#00A3FF]/10 hover:bg-[#00A3FF]/20 border border-[#00A3FF]/30 text-[#00A3FF] text-xs font-bold transition-colors">
                            + Add to Backlog
                        </button>
                    </div>

                    <div class="w-48 shrink-0 snap-start group">
                        <div class="relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co22l7.jpg" alt="Ghost of Tsushima" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-0 left-0 bg-black/60 backdrop-blur-md p-2 rounded-br-xl text-white/50 hover:text-white hover:bg-black/80 cursor-pointer transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 text-sm font-bold text-slate-300 mb-1">
                            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            9.4
                        </div>
                        <h3 class="font-bold text-white text-base leading-tight hover:text-[#00A3FF] cursor-pointer transition-colors">Ghost of Tsushima</h3>
                        <button class="w-full mt-3 py-2 rounded-lg bg-[#00A3FF]/10 hover:bg-[#00A3FF]/20 border border-[#00A3FF]/30 text-[#00A3FF] text-xs font-bold transition-colors">
                            + Add to Backlog
                        </button>
                    </div>

                </div>
            </section>

            <section>
                <div class="flex items-end justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">Spwn Top 100</h2>
                        <p class="text-slate-400 text-sm mt-1 pl-4">The highest-rated masterpeices of all time according to players.</p>
                    </div>
                    <a href="/discover" class="text-[#00A3FF] text-sm font-bold hover:text-white transition-colors uppercase tracking-wider">View Chart</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <a href="/details" class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-xl p-4 hover:bg-white/10 transition-colors group">
                        <span class="text-2xl font-black text-white/20 w-8 text-center group-hover:text-[#00A3FF] transition-colors">1</span>
                        <div class="w-16 h-20 rounded-md overflow-hidden shrink-0">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co4jni.jpg" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Elden Ring</h3>
                            <p class="text-xs text-slate-400 mb-1">FromSoftware • 2022</p>
                            <span class="text-xs font-bold text-green-400 bg-green-400/10 px-2 py-0.5 rounded border border-green-400/20">★ 9.9</span>
                        </div>
                    </a>

                    <a href="/details" class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-xl p-4 hover:bg-white/10 transition-colors group">
                        <span class="text-2xl font-black text-white/20 w-8 text-center group-hover:text-[#00A3FF] transition-colors">2</span>
                        <div class="w-16 h-20 rounded-md overflow-hidden shrink-0">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1wyy.jpg" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">The Witcher 3</h3>
                            <p class="text-xs text-slate-400 mb-1">CD Projekt Red • 2015</p>
                            <span class="text-xs font-bold text-green-400 bg-green-400/10 px-2 py-0.5 rounded border border-green-400/20">★ 9.8</span>
                        </div>
                    </a>

                    <a href="/details" class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-xl p-4 hover:bg-white/10 transition-colors group">
                        <span class="text-2xl font-black text-white/20 w-8 text-center group-hover:text-[#00A3FF] transition-colors">3</span>
                        <div class="w-16 h-20 rounded-md overflow-hidden shrink-0">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co670h.jpg" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Baldur's Gate 3</h3>
                            <p class="text-xs text-slate-400 mb-1">Larian Studios • 2023</p>
                            <span class="text-xs font-bold text-green-400 bg-green-400/10 px-2 py-0.5 rounded border border-green-400/20">★ 9.7</span>
                        </div>
                    </a>

                </div>
            </section>

            <section>
                <div class="flex items-end justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">Spwn Original Content</h2>
                        <p class="text-slate-400 text-sm mt-1 pl-4">Editorials, reviews, and community highlights.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <a href="/community" class="group block relative overflow-hidden rounded-2xl border border-white/10 aspect-video md:aspect-[16/7]">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1086940/library_hero.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-60 group-hover:opacity-80">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <span class="text-[#00A3FF] text-xs font-bold uppercase tracking-widest mb-2 block">Deep Dive</span>
                            <h3 class="text-xl md:text-2xl font-bold text-white mb-2 group-hover:underline">Why the combat in Baldur's Gate 3 redefines the CRPG genre</h3>
                            <p class="text-sm text-slate-300 line-clamp-2">Our editorial team breaks down the mechanics and dice-rolls that make every encounter feel completely unique.</p>
                        </div>
                    </a>

                    <a href="/community" class="group block relative overflow-hidden rounded-2xl border border-white/10 aspect-video md:aspect-[16/7]">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1091500/library_hero.jpg" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-60 group-hover:opacity-80">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <span class="text-[#00A3FF] text-xs font-bold uppercase tracking-widest mb-2 block">Community Spotlight</span>
                            <h3 class="text-xl md:text-2xl font-bold text-white mb-2 group-hover:underline">The hidden mechanics of Cyberpunk 2077 you probably missed</h3>
                            <p class="text-sm text-slate-300 line-clamp-2">Top reviewer RPG_Master shares a 500-hour perspective on Night City's most easily overlooked systems.</p>
                        </div>
                    </a>
                </div>
            </section>

        </main>
    </div>

</x-layouts.app>