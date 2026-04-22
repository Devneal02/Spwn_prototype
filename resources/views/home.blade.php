<x-layouts.app title="Home - Spwn">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="w-full relative z-10 pb-12">
        
        <main class="max-w-7xl mx-auto px-6 pt-8 space-y-16">

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
                        View
                    </a>
                </div>
            </div>
        </section>
        
        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">Staff Picks</h2>
                    <p class="text-slate-400 text-sm mt-1 pl-4">Games we literally cannot stop thinking about.</p>
                </div>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
                
                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1086940/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-[#00A3FF] text-[#05050A]">Must Play</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">RPG</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-[#00A3FF] transition-colors">Baldur's Gate 3</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">"The closest a video game has ever come to replicating the freedom of tabletop D&D."</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1145360/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-indigo-600 text-white">Action Roguelike</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Indie</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-indigo-400 transition-colors">Hades</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">"Flawless combat loop tied together with an incredible narrative that rewards dying."</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/367520/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-purple-600 text-white">Metroidvania</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Platformer</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-purple-400 transition-colors">Hollow Knight</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">"Beautiful, melancholic, and punishingly difficult in the best way possible."</p>
                        </div>
                    </a>
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

            <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2054970/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-emerald-600 text-white">RPG</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Open World</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-emerald-400 transition-colors">Dragon's Dogma 2</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">A narrative driven action-RPG that challenges players to choose their own experience, from the appearance of their Arisen to their vocation.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1778820/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-emerald-600 text-white">Fighting</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Action</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-emerald-400 transition-colors">Tekken 8</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">The legendary fighting franchise returns with next-gen visuals, completely rebuilt character models, and a new aggressive combat system.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1623730/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-emerald-600 text-white">Survival</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Base Building</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-emerald-400 transition-colors">Palworld</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">Fight, farm, build and work alongside mysterious creatures called "Pals" in this completely new multiplayer, open world survival and crafting game!</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3">Recommended</h2>
                    <p class="text-slate-400 text-sm mt-1 pl-4">Based on your preferences.</p>
                </div>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2215430/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Action Adventure</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-[#00A3FF] transition-colors">Ghost of Tsushima</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">Forge a new path and wage an unconventional war for the freedom of Tsushima as the Samurai warrior Jin Sakai.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2208920/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">RPG</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-[#00A3FF] transition-colors">Assassin's Creed Valhalla</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">Become Eivor, a legendary Viking raider on a quest for glory. Explore a dynamic and beautiful open world set against the brutal backdrop of England's Dark Ages.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1151640/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">RPG</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-[#00A3FF] transition-colors">Horizon Zero Dawn</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">Experience Aloy's legendary quest to unravel the mysteries of a future Earth ruled by deadly Machines.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="flex items-end justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-white tracking-wide border-l-4 border-rose-500 pl-3">Hidden Gems</h2>
                    <p class="text-slate-400 text-sm mt-1 pl-4">Incredible games you probably missed.</p>
                </div>
            </div>

            <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
                
                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/601150/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-rose-600 text-white">Hack & Slash</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Action</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-rose-400 transition-colors">Devil May Cry 5</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">The ultimate Devil Hunter is back in style, in the game action fans have been waiting for.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1196590/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-rose-600 text-white">Survival Horror</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">FPS</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-rose-400 transition-colors">Resident Evil Village</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">Experience survival horror like never before in the eighth major installment in the storied Resident Evil franchise.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1091500/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-rose-600 text-white">Sci-Fi</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">RPG</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-rose-400 transition-colors">Cyberpunk 2077</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">An open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification.</p>
                        </div>
                    </a>
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

            <div class="flex gap-6 overflow-x-auto pb-8 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
                
                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/scaphe.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-purple-600 text-white">Coming 2025</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Open World</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-purple-400 transition-colors">Grand Theft Auto VI</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">Welcome to Leonida, the home of the neon-soaked streets of Vice City and beyond in the biggest, most immersive evolution of Grand Theft Auto yet.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2246340/library_hero.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-purple-600 text-white">Coming 2025</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">RPG</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-purple-400 transition-colors">Monster Hunter Wilds</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">The next generation of Monster Hunter brings seamlessly interconnected biomes and thrilling new hunts in a living, breathing ecosystem.</p>
                        </div>
                    </a>
                </div>

                <div class="w-80 md:w-[400px] shrink-0 snap-start group relative rounded-2xl overflow-hidden shadow-xl border border-white/10">
                    <a href="/details" class="block h-full">
                        <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/sc11p47.jpg" class="w-full h-56 object-cover transition-transform duration-700 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#05050A] via-[#05050A]/80 to-[#05050A]/20"></div>
                        <div class="absolute bottom-0 left-0 p-6 w-full flex flex-col justify-end">
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-purple-600 text-white">TBA</span>
                                <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/10 text-slate-300 border border-white/10">Action Adventure</span>
                            </div>
                            <h3 class="font-bold text-white text-xl leading-tight group-hover:text-purple-400 transition-colors">Death Stranding 2</h3>
                            <p class="text-xs text-slate-300 mt-2 line-clamp-2">Sam Porter Bridges returns to save humanity from extinction in Kojima's latest surreal masterpiece.</p>
                        </div>
                    </a>
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