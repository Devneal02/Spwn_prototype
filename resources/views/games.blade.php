<x-layouts.app :title="'Games - Spwn'">
    
    <div x-data="{ activeGenre: 'All' }">
        
        <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
        <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

        <div class="container mx-auto px-6 py-12 lg:px-24 lg:py-20 max-w-7xl relative z-10 text-slate-300">
            
            <section>
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-sm font-bold tracking-[0.2em] uppercase text-slate-500 border-l-4 border-[#00A3FF] pl-4">Browse by Genre</h2>
                    <button @click="activeGenre = 'All'" 
                            x-show="activeGenre !== 'All'" 
                            x-transition 
                            style="display: none;"
                            class="text-xs font-bold text-[#00A3FF] hover:text-white transition-colors uppercase tracking-wider flex items-center gap-1">
                        Clear Filter <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
                    <button @click="activeGenre = 'RPG'" :class="activeGenre === 'RPG' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">RPG</span>
                    </button>

                    <button @click="activeGenre = 'Action'" :class="activeGenre === 'Action' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Action</span>
                    </button>

                    <button @click="activeGenre = 'Open World'" :class="activeGenre === 'Open World' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Open Wrld</span>
                    </button>

                    <button @click="activeGenre = 'FPS'" :class="activeGenre === 'FPS' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2v4m0 12v4m-10-10h4m12 0h4"></path><circle cx="12" cy="12" r="2"></circle></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">FPS</span>
                    </button>

                    <button @click="activeGenre = 'Horror'" :class="activeGenre === 'Horror' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2a7 7 0 00-7 7v11a2 2 0 003.414 1.414l1.172-1.172a2 2 0 012.828 0l1.172 1.172a2 2 0 002.828 0l1.172-1.172A2 2 0 0119 20v-11a7 7 0 00-7-7z"></path><circle cx="9" cy="10" r="1.5"></circle><circle cx="15" cy="10" r="1.5"></circle></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Horror</span>
                    </button>

                    <button @click="activeGenre = 'Indie'" :class="activeGenre === 'Indie' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Indie</span>
                    </button>

                    <button @click="activeGenre = 'Strategy'" :class="activeGenre === 'Strategy' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M19 21H5a2 2 0 01-2-2v-2h18v2a2 2 0 01-2 2zM7 17v-4a2 2 0 012-2h6a2 2 0 012 2v4M12 11V4M9 4h6"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Strategy</span>
                    </button>

                    <button @click="activeGenre = 'Fighting'" :class="activeGenre === 'Fighting' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M10 15v4a3 3 0 003 3l4-9V2H6.5a2 2 0 00-2 2v10h5.5zM17 2h4v11h-4"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Fighting</span>
                    </button>

                    <button @click="activeGenre = 'Racing'" :class="activeGenre === 'Racing' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2m0 16v2m10-10h-2M4 12H2"></path><path d="M19.07 19.07l-1.41-1.41M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41M6.34 6.34L4.93 4.93"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Racing</span>
                    </button>

                    <button @click="activeGenre = 'Sports'" :class="activeGenre === 'Sports' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M5 3h14v4a7 7 0 01-14 0V3zM3 7h2M19 7h2M12 14v7M9 21h6"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Sports</span>
                    </button>
                    
                    <button @click="activeGenre = 'MMO'" :class="activeGenre === 'MMO' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87"></path><path d="M16 3.13a4 4 0 010 7.75"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">MMO</span>
                    </button>

                    <button @click="activeGenre = 'Simulation'" :class="activeGenre === 'Simulation' ? 'ring-2 ring-[#00A3FF] bg-[#00A3FF]/10 shadow-[0_0_20px_rgba(0,163,255,0.2)] text-[#00A3FF]' : 'border-white/10 bg-white/5 hover:bg-white/10 hover:border-white/20 text-slate-300'" class="w-full border rounded-2xl p-4 backdrop-blur-md flex items-center justify-center gap-3 group transition-all transform hover:-translate-y-1 focus:outline-none">
                        <svg class="w-6 h-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 11v4m4-4v4"></path></svg>
                        <span class="font-bold tracking-widest uppercase text-xs group-hover:text-[#00A3FF] transition-colors">Sim</span>
                    </button>
                </div>
            </section>

            <section class="mt-16">
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    
                    <div x-show="activeGenre === 'All' || ['RPG', 'Action', 'Open World'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1245620/library_600x900.jpg" alt="Elden Ring" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Elden Ring</h3>
                            <p class="text-sm text-slate-400 mt-1">FromSoftware</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.9</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['RPG', 'FPS', 'Open World', 'Action'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1091500/library_600x900.jpg" alt="Cyberpunk 2077" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Cyberpunk 2077</h3>
                            <p class="text-sm text-slate-400 mt-1">CD Projekt Red</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">8.8</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['RPG', 'Strategy'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1086940/library_600x900.jpg" alt="Baldur's Gate 3" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Baldur's Gate 3</h3>
                            <p class="text-sm text-slate-400 mt-1">Larian Studios</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.7</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Open World'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1174180/library_600x900.jpg" alt="Red Dead Redemption 2" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Red Dead 2</h3>
                            <p class="text-sm text-slate-400 mt-1">Rockstar Games</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.9</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Indie', 'RPG'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1145360/library_600x900.jpg" alt="Hades" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Hades</h3>
                            <p class="text-sm text-slate-400 mt-1">Supergiant Games</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.4</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Horror', 'FPS'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1196590/library_600x900.jpg" alt="Resident Evil Village" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">RE Village</h3>
                            <p class="text-sm text-slate-400 mt-1">Capcom</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.1</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['RPG', 'Action', 'Open World'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/292030/library_600x900.jpg" alt="The Witcher 3" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">The Witcher 3</h3>
                            <p class="text-sm text-slate-400 mt-1">CD Projekt Red</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.8</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['FPS', 'Action'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/782330/library_600x900.jpg" alt="DOOM Eternal" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">DOOM Eternal</h3>
                            <p class="text-sm text-slate-400 mt-1">id Software</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.5</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Open World'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2215430/library_600x900.jpg" alt="Ghost of Tsushima" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Ghost of Tsushima</h3>
                            <p class="text-sm text-slate-400 mt-1">Sucker Punch Productions</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.4</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Fighting', 'Action'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1364780/library_600x900.jpg" alt="Street Fighter 6" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Street Fighter 6</h3>
                            <p class="text-sm text-slate-400 mt-1">Capcom</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.2</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Fighting', 'Action'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1778820/library_600x900.jpg" alt="Tekken 8" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Tekken 8</h3>
                            <p class="text-sm text-slate-400 mt-1">Bandai Namco</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.0</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Racing', 'Open World', 'Simulation', 'Sports'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1551360/library_600x900.jpg" alt="Forza Horizon 5" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Forza Horizon 5</h3>
                            <p class="text-sm text-slate-400 mt-1">Playground Games</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.3</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Sports', 'Simulation'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2195250/library_600x900.jpg" alt="EA SPORTS FC 24" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">EA SPORTS FC 24</h3>
                            <p class="text-sm text-slate-400 mt-1">Electronic Arts</p>
                            <div class="flex items-center gap-1.5 text-amber-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-amber-500/10 rounded-md border border-amber-500/20">7.5</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['MMO', 'RPG'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/39210/library_600x900.jpg" alt="Final Fantasy XIV" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Final Fantasy XIV</h3>
                            <p class="text-sm text-slate-400 mt-1">Square Enix</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.4</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Simulation'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1250410/library_600x900.jpg" alt="Flight Simulator" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Flight Simulator</h3>
                            <p class="text-sm text-slate-400 mt-1">Asobo Studio</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.0</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Simulation', 'Strategy'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/255710/library_600x900.jpg" alt="Cities: Skylines" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Cities: Skylines</h3>
                            <p class="text-sm text-slate-400 mt-1">Colossal Order</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">8.7</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Indie', 'RPG', 'Simulation'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/413150/library_600x900.jpg" alt="Stardew Valley" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Stardew Valley</h3>
                            <p class="text-sm text-slate-400 mt-1">ConcernedApe</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.8</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Indie', 'Action', 'Open World'].includes(activeGenre)" 
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
                         class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/105600/library_600x900.jpg" alt="Terraria" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Terraria</h3>
                            <p class="text-sm text-slate-400 mt-1">Re-Logic</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.7</span></div>
                            <div class="grid grid-cols-2 gap-2"><a href="/details" class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)] text-center block">View</a><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre !== 'All' && !['RPG', 'Action', 'Open World', 'FPS', 'Horror', 'Indie', 'Strategy', 'Fighting', 'Racing', 'Sports', 'MMO', 'Simulation'].includes(activeGenre)" 
                         style="display: none;" 
                         class="col-span-1 md:col-span-2 lg:col-span-3 xl:col-span-4 text-center py-12 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-md">
                        <svg class="w-12 h-12 text-slate-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="text-xl font-bold text-white mb-2">No games found</h3>
                        <p class="text-slate-400 text-sm">We don't have any games in the <span x-text="activeGenre" class="text-[#00A3FF]"></span> genre yet.</p>
                        <button @click="activeGenre = 'All'" class="mt-4 text-sm font-bold text-[#00A3FF] hover:text-white transition-colors underline">View All Games</button>
                    </div>

                </div>
            </section>
        </div>
    </div>
</x-layouts.app>