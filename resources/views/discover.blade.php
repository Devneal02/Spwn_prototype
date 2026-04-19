<x-layouts.app title="Discover - Spwn">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed top-1/2 left-1/4 w-[500px] h-[500px] bg-[#00A3FF]/5 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="max-w-[1400px] mx-auto px-6 py-10 relative z-10 space-y-20">
        
        <div class="text-center max-w-2xl mx-auto mb-12 mt-8">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tight">Discover Something New</h1>
            <p class="text-slate-400 text-lg">Curated collections, upcoming releases, and hidden gems hand-picked by the Spwn community.</p>
        </div>

        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">Staff Picks</h2>
                    <p class="text-slate-400 text-sm mt-1 pl-4">Games we literally cannot stop thinking about.</p>
                </div>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
                
                <div class="w-80 md:w-96 shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1086940/library_hero.jpg" class="w-full h-48 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-5 w-full">
                        <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-[#00A3FF] text-[#05050A] mb-2 inline-block">Must Play</span>
                        <h3 class="font-bold text-white text-xl leading-tight hover:underline cursor-pointer"><a href="/details">Baldur's Gate 3</a></h3>
                        <p class="text-xs text-slate-300 mt-2 line-clamp-2">"The closest a video game has ever come to replicating the freedom of tabletop D&D."</p>
                    </div>
                </div>

                <div class="w-80 md:w-96 shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1145360/library_hero.jpg" class="w-full h-48 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-5 w-full">
                        <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-indigo-600 text-white mb-2 inline-block">Action Roguelike</span>
                        <h3 class="font-bold text-white text-xl leading-tight hover:underline cursor-pointer"><a href="/details">Hades</a></h3>
                        <p class="text-xs text-slate-300 mt-2 line-clamp-2">"Flawless combat loop tied together with an incredible narrative that rewards dying."</p>
                    </div>
                </div>

                <div class="w-80 md:w-96 shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/367520/library_hero.jpg" class="w-full h-48 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-5 w-full">
                        <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-purple-600 text-white mb-2 inline-block">Metroidvania</span>
                        <h3 class="font-bold text-white text-xl leading-tight hover:underline cursor-pointer"><a href="/details">Hollow Knight</a></h3>
                        <p class="text-xs text-slate-300 mt-2 line-clamp-2">"Beautiful, melancholic, and punishingly difficult in the best way possible."</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-emerald-500 pl-3">Trending This Month</h2>
                    <p class="text-slate-400 text-sm mt-1 pl-4">The games everyone is talking about right now.</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co7qeb.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Helldivers 2">
                        <div class="absolute top-2 right-2 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 8.9
                        </div>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-emerald-400 cursor-pointer truncate">Helldivers 2</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Arrowhead Game Studios</p>
                </div>

                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co5z8t.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Dragon's Dogma 2">
                        <div class="absolute top-2 right-2 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 8.3
                        </div>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-emerald-400 cursor-pointer truncate">Dragon's Dogma 2</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Capcom</p>
                </div>

                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co6tnt.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Tekken 8">
                        <div class="absolute top-2 right-2 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 9.0
                        </div>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-emerald-400 cursor-pointer truncate">Tekken 8</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Bandai Namco</p>
                </div>

                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co6jz5.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Palworld">
                        <div class="absolute top-2 right-2 bg-black/80 backdrop-blur-md px-2 py-1 rounded-md text-xs font-bold text-white border border-white/10 shadow-lg">
                            <span class="text-green-400">★</span> 8.5
                        </div>
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-emerald-400 cursor-pointer truncate">Palworld</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Pocketpair</p>
                </div>
            </div>
        </section>

        <section>
            <div class="relative w-full rounded-2xl overflow-hidden border border-[#00A3FF]/30 bg-[#00A3FF]/5 shadow-[0_0_30px_rgba(0,163,255,0.1)] group">
                <div class="absolute inset-0 bg-[url('https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1174180/library_hero.jpg')] bg-cover bg-center opacity-30 mix-blend-luminosity"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#05050A] via-[#05050A]/80 to-transparent"></div>
                
                <div class="relative z-10 p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="max-w-xl text-center md:text-left">
                        <span class="text-[#00A3FF] text-xs font-bold uppercase tracking-widest mb-2 block">Just Released</span>
                        <h2 class="text-3xl md:text-4xl font-black text-white tracking-tight mb-4">Red Dead Redemption 2</h2>
                        <p class="text-slate-300 leading-relaxed">Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive.</p>
                    </div>
                    <a href="/details" class="shrink-0 rounded-xl bg-[#00A3FF] hover:bg-[#33b5ff] px-8 py-4 text-sm font-bold tracking-wide text-[#05050A] transition-all shadow-[0_0_20px_rgba(0,163,255,0.3)]">
                        View Details
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <p class="text-[#00A3FF] text-xs font-bold uppercase tracking-widest mb-1 pl-3">Because you played</p>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">The Witcher 3: Wild Hunt</h2>
                </div>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
                
                <div class="w-48 shrink-0 snap-start group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1tmu.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Skyrim">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">The Elder Scrolls V: Skyrim</h3>
                </div>

                <div class="w-48 shrink-0 snap-start group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2mxg.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Ghost of Tsushima">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Ghost of Tsushima</h3>
                </div>

                <div class="w-48 shrink-0 snap-start group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2lbd.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="AC Valhalla">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Assassin's Creed Valhalla</h3>
                </div>

                <div class="w-48 shrink-0 snap-start group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1x7f.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Horizon Zero Dawn">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Horizon Zero Dawn</h3>
                </div>

                <div class="w-48 shrink-0 snap-start group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2hrd.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100" alt="Dragon Age Inquisition">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer truncate">Dragon Age: Inquisition</h3>
                </div>

            </div>
        </section>

        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-purple-500 pl-3">The Horizon</h2>
                    <p class="text-slate-400 text-sm mt-1 pl-4">The most anticipated upcoming releases.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <a href="/details" class="group flex items-center gap-4 bg-white/5 border border-white/10 rounded-2xl p-4 hover:bg-white/10 transition-colors backdrop-blur-md">
                    <div class="w-20 h-28 rounded-lg overflow-hidden shrink-0 border border-white/10 shadow-md group-hover:shadow-purple-500/20 transition-all">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co7d5p.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="GTA VI">
                    </div>
                    <div>
                        <span class="text-purple-400 text-[10px] font-bold tracking-widest uppercase mb-1 block">Coming 2025</span>
                        <h3 class="font-bold text-white group-hover:text-purple-400 transition-colors text-lg leading-tight">Grand Theft Auto VI</h3>
                        <p class="text-xs text-slate-500 mt-1">Rockstar Games</p>
                    </div>
                </a>

                <a href="/details" class="group flex items-center gap-4 bg-white/5 border border-white/10 rounded-2xl p-4 hover:bg-white/10 transition-colors backdrop-blur-md">
                    <div class="w-20 h-28 rounded-lg overflow-hidden shrink-0 border border-white/10 shadow-md group-hover:shadow-purple-500/20 transition-all">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co7d83.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Monster Hunter Wilds">
                    </div>
                    <div>
                        <span class="text-purple-400 text-[10px] font-bold tracking-widest uppercase mb-1 block">Coming 2025</span>
                        <h3 class="font-bold text-white group-hover:text-purple-400 transition-colors text-lg leading-tight">Monster Hunter Wilds</h3>
                        <p class="text-xs text-slate-500 mt-1">Capcom</p>
                    </div>
                </a>

                <a href="/details" class="group flex items-center gap-4 bg-white/5 border border-white/10 rounded-2xl p-4 hover:bg-white/10 transition-colors backdrop-blur-md">
                    <div class="w-20 h-28 rounded-lg overflow-hidden shrink-0 border border-white/10 shadow-md group-hover:shadow-purple-500/20 transition-all">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co5v3p.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Death Stranding 2">
                    </div>
                    <div>
                        <span class="text-purple-400 text-[10px] font-bold tracking-widest uppercase mb-1 block">TBA</span>
                        <h3 class="font-bold text-white group-hover:text-purple-400 transition-colors text-lg leading-tight">Death Stranding 2: On The Beach</h3>
                        <p class="text-xs text-slate-500 mt-1">Kojima Productions</p>
                    </div>
                </a>

            </div>
        </section>

        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-rose-500 pl-3">Hidden Gems</h2>
                    <p class="text-slate-400 text-sm mt-1 pl-4">Incredible games you probably missed.</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                
                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1qkx.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-rose-400 cursor-pointer truncate">Devil May Cry 5</h3>
                </div>

                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co22l7.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-rose-400 cursor-pointer truncate">Resident Evil Village</h3>
                </div>

                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2mvt.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-rose-400 cursor-pointer truncate">Cyberpunk 2077</h3>
                </div>

                <div class="group">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co670h.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-rose-400 cursor-pointer truncate">Baldur's Gate 3</h3>
                </div>

                <div class="group hidden md:block">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1wyy.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-rose-400 cursor-pointer truncate">The Witcher 3</h3>
                </div>

                <div class="group hidden lg:block">
                    <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                        <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co4jni.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </a>
                    <h3 class="font-bold text-white text-sm leading-tight hover:text-rose-400 cursor-pointer truncate">Elden Ring</h3>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>