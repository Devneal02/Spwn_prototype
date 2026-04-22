<x-layouts.app :title="'Most Played Games - Spwn'">

    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-emerald-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="max-w-[1400px] mx-auto px-6 py-12 relative z-10 text-slate-300 space-y-12">
        
        <header>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg">
                <div class="text-center md:border-r border-white/10 last:border-0">
                    <p class="text-3xl font-black text-white mb-1">2,412</p>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Tracked Titles</p>
                </div>
                <div class="text-center md:border-r border-white/10 last:border-0">
                    <p class="text-3xl font-black text-[#00A3FF] mb-1">6.2M</p>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Players Online Now</p>
                </div>
                <div class="text-center md:border-r border-white/10 last:border-0">
                    <p class="text-3xl font-black text-white mb-1">14.8M</p>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">24H Peak Players</p>
                </div>
                <div class="text-center">
                    <p class="text-3xl font-black text-emerald-400 mb-1">+12%</p>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Weekend Growth</p>
                </div>
            </div>
        </header>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg relative overflow-hidden group">
                <div class="absolute inset-0 bg-[url('https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/730/library_hero.jpg')] bg-cover bg-center opacity-20 transition-transform duration-700 group-hover:scale-105"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#05050A] via-[#05050A]/90 to-[#05050A]/40"></div>
                
                <div class="relative z-10 flex items-center justify-between h-full">
                    <div>
                        <span class="text-amber-400 text-[10px] font-bold tracking-widest uppercase mb-2 block flex items-center gap-2">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            Current King
                        </span>
                        <h2 class="text-3xl font-black text-white tracking-tight mb-1">Counter-Strike 2</h2>
                        <p class="text-slate-400 text-sm">Holding the #1 spot for 42 consecutive days.</p>
                    </div>
                    <div class="text-right">
                        <p class="text-3xl font-black text-white">865K</p>
                        <p class="text-[10px] font-bold tracking-widest uppercase text-green-400">Playing Now</p>
                    </div>
                </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg relative overflow-hidden group">
                <div class="absolute inset-0 bg-[url('https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2868840/library_hero.jpg')] bg-cover bg-center opacity-20 transition-transform duration-700 group-hover:scale-105"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#05050A] via-[#05050A]/90 to-[#05050A]/40"></div>
                
                <div class="relative z-10 flex items-center justify-between h-full">
                    <div>
                        <span class="text-[#00A3FF] text-[10px] font-bold tracking-widest uppercase mb-2 block flex items-center gap-2">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            Trending Spike
                        </span>
                        <h2 class="text-3xl font-black text-white tracking-tight mb-1">Slay the Spire 2</h2>
                        <p class="text-slate-400 text-sm">Up 14 positions in the last 24 hours.</p>
                    </div>
                    <div class="text-right">
                        <p class="text-3xl font-black text-white">148K</p>
                        <p class="text-[10px] font-bold tracking-widest uppercase text-green-400">Playing Now</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col xl:flex-row xl:items-center justify-between gap-6">
            
            <div class="flex gap-2 overflow-x-auto pb-2 xl:pb-0 scrollbar-hide">
                <button class="px-4 py-2 bg-[#00A3FF] text-[#05050A] text-sm font-bold rounded-lg shrink-0 shadow-[0_0_15px_rgba(0,163,255,0.3)]">All Games</button>
                <button class="px-4 py-2 bg-white/5 border border-white/10 hover:bg-white/10 text-white text-sm font-bold rounded-lg shrink-0 transition-colors">Free to Play</button>
                <button class="px-4 py-2 bg-white/5 border border-white/10 hover:bg-white/10 text-white text-sm font-bold rounded-lg shrink-0 transition-colors">Multiplayer</button>
                <button class="px-4 py-2 bg-white/5 border border-white/10 hover:bg-white/10 text-white text-sm font-bold rounded-lg shrink-0 transition-colors">Shooters</button>
                <button class="px-4 py-2 bg-white/5 border border-white/10 hover:bg-white/10 text-white text-sm font-bold rounded-lg shrink-0 transition-colors">RPGs</button>
            </div>

            <div class="flex items-center gap-4 w-full xl:w-auto">
                <select class="hidden sm:block text-sm bg-white/5 border border-white/10 rounded-lg px-3 py-2.5 text-white focus:outline-none focus:border-[#00A3FF]">
                    <option value="100">100 rows</option>
                    <option value="50">50 rows</option>
                </select>
                <div class="relative w-full xl:w-64">
                    <input type="text" placeholder="Find a game..." class="w-full text-sm bg-white/5 border border-white/10 rounded-full px-5 py-2.5 pl-10 text-white focus:outline-none focus:border-[#00A3FF] transition-colors">
                    <svg class="w-4 h-4 text-slate-500 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>
        </section>

        <section class="bg-white/5 border border-white/10 rounded-2xl backdrop-blur-md overflow-hidden shadow-2xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left whitespace-nowrap">
                    <thead class="bg-black/40 border-b border-white/10">
                        <tr>
                            <th class="px-6 py-4 text-[10px] font-bold tracking-widest uppercase text-slate-400 w-16">Rank</th>
                            <th class="px-6 py-4 text-[10px] font-bold tracking-widest uppercase text-slate-400">Game Name</th>
                            <th class="px-6 py-4 text-[10px] font-bold tracking-widest uppercase text-[#00A3FF]">Current Players</th>
                            <th class="px-6 py-4 text-[10px] font-bold tracking-widest uppercase text-slate-400">24h Peak</th>
                            <th class="px-6 py-4 text-[10px] font-bold tracking-widest uppercase text-slate-400">All-Time Peak</th>
                            <th class="px-6 py-4 text-[10px] font-bold tracking-widest uppercase text-slate-400 text-center">Spwn Score</th>
                            <th class="px-6 py-4 text-[10px] font-bold tracking-widest uppercase text-slate-400 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        
                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">1</span>
                                    <svg class="w-3 h-3 text-slate-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/730/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Counter-Strike 2</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="relative flex h-1.5 w-1.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span><span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-green-500"></span></span>
                                    <span class="font-bold text-green-400">865,682</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">1,324,916</td>
                            <td class="px-6 py-4 text-slate-500">1,862,531</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-green-500/10 text-green-400 border border-green-500/20 px-2 py-1 rounded text-xs font-bold">9.8</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">2</span>
                                    <svg class="w-3 h-3 text-slate-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/578080/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">PUBG: BATTLEGROUNDS</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">407,519</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">842,392</td>
                            <td class="px-6 py-4 text-slate-500">3,257,248</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-amber-500/10 text-amber-400 border border-amber-500/20 px-2 py-1 rounded text-xs font-bold">7.8</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">3</span>
                                    <svg class="w-3 h-3 text-slate-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/570/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Dota 2</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">402,405</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">610,100</td>
                            <td class="px-6 py-4 text-slate-500">1,295,114</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-green-500/10 text-green-400 border border-green-500/20 px-2 py-1 rounded text-xs font-bold">9.2</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">4</span>
                                    <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 15l7-7 7 7"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2868840/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Slay the Spire 2</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">148,034</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">254,723</td>
                            <td class="px-6 py-4 text-slate-500">574,638</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-green-500/10 text-green-400 border border-green-500/20 px-2 py-1 rounded text-xs font-bold">9.7</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">5</span>
                                    <svg class="w-3 h-3 text-slate-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <div class="w-20 h-8 rounded bg-gradient-to-r from-pink-500 to-rose-400 flex items-center justify-center text-[10px] font-black text-white">BONGO CAT</div>
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Bongo Cat</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">138,865</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">157,858</td>
                            <td class="px-6 py-4 text-slate-500">194,508</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-amber-500/10 text-amber-400 border border-amber-500/20 px-2 py-1 rounded text-xs font-bold">8.1</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">6</span>
                                    <svg class="w-3 h-3 text-red-500" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1172470/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Apex Legends</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">113,728</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">247,882</td>
                            <td class="px-6 py-4 text-slate-500">624,473</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-amber-500/10 text-amber-400 border border-amber-500/20 px-2 py-1 rounded text-xs font-bold">8.5</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">7</span>
                                    <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 15l7-7 7 7"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2507950/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Delta Force</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">109,276</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">164,728</td>
                            <td class="px-6 py-4 text-slate-500">247,028</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-amber-500/10 text-amber-400 border border-amber-500/20 px-2 py-1 rounded text-xs font-bold">8.0</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">8</span>
                                    <svg class="w-3 h-3 text-slate-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/252490/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Rust</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">88,648</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">141,378</td>
                            <td class="px-6 py-4 text-slate-500">262,284</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-green-500/10 text-green-400 border border-green-500/20 px-2 py-1 rounded text-xs font-bold">9.0</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">9</span>
                                    <svg class="w-3 h-3 text-slate-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 12h14"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/431960/capsule_231x87.jpg" class="w-20 h-8 rounded object-cover border border-white/10 shadow-sm" />
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Wallpaper Engine</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">86,655</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">108,357</td>
                            <td class="px-6 py-4 text-slate-500">150,375</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-green-500/10 text-green-400 border border-green-500/20 px-2 py-1 rounded text-xs font-bold">9.8</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-white/[0.03] transition-colors group cursor-pointer">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <span class="text-xl font-black text-white">10</span>
                                    <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path d="M5 15l7-7 7 7"></path></svg>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <div class="w-20 h-8 rounded bg-gradient-to-r from-blue-900 to-indigo-800 flex items-center justify-center text-[10px] font-black text-white">WINDROSE</div>
                                <a href="/details" class="font-bold text-white group-hover:text-[#00A3FF] transition-colors">Windrose</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    <span class="font-bold text-green-400">80,833</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-slate-300">178,009</td>
                            <td class="px-6 py-4 text-slate-500">222,134</td>
                            <td class="px-6 py-4 text-center">
                                <span class="bg-amber-500/10 text-amber-400 border border-amber-500/20 px-2 py-1 rounded text-xs font-bold">7.2</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <button class="w-8 h-8 rounded border border-white/10 flex items-center justify-center text-slate-500 hover:bg-[#00A3FF] hover:border-[#00A3FF] hover:text-[#05050A] transition-colors shadow-inner mx-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            
            <div class="border-t border-white/10 p-6 flex flex-col md:flex-row items-center justify-between gap-4 bg-black/20">
                <p class="text-sm text-slate-500">Showing <span class="text-white font-bold">1</span> to <span class="text-white font-bold">10</span> of <span class="text-white font-bold">2,412</span> games</p>
                <div class="flex items-center gap-2">
                    <button class="w-8 h-8 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-500 cursor-not-allowed" disabled>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="w-8 h-8 rounded-lg flex items-center justify-center bg-[#00A3FF] text-[#05050A] font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">1</button>
                    <button class="w-8 h-8 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10 hover:text-white font-bold transition-colors">2</button>
                    <button class="w-8 h-8 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10 hover:text-white font-bold transition-colors">3</button>
                    <span class="text-slate-500 px-1">...</span>
                    <button class="w-8 h-8 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-300 hover:bg-white/10 hover:text-white font-bold transition-colors">242</button>
                    <button class="w-8 h-8 rounded-lg flex items-center justify-center bg-white/5 border border-white/10 text-slate-400 hover:text-white hover:bg-white/10 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>