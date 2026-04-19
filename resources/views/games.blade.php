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
                            class="text-xs font-bold text-[#00A3FF] hover:text-white transition-colors uppercase tracking-wider">
                        Clear Filter ✕
                    </button>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    
                    <button @click="activeGenre = 'RPG'" :class="activeGenre === 'RPG' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">RPG</span>
                    </button>

                    <button @click="activeGenre = 'Action'" :class="activeGenre === 'Action' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Action</span>
                    </button>

                    <button @click="activeGenre = 'Open World'" :class="activeGenre === 'Open World' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2 2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v1.5a2 2 0 002 2.065M16 3.935V4.5A2.5 2.5 0 0113.5 7H11a2 2 0 00-2 2 2 2 0 01-2 2v1a2 2 0 002 2"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Open World</span>
                    </button>

                    <button @click="activeGenre = 'FPS'" :class="activeGenre === 'FPS' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3v2a1 1 0 001 1h2a1 1 0 001-1V3a1 1 0 00-1-1h-2a1 1 0 00-1 1zm4 17a1 1 0 10-2 0 1 1 0 002 0zm0 0l2 2m-6-17a1 1 0 112 0 1 1 0 01-2 0zm-6 17a1 1 0 10-2 0 1 1 0 002 0zm0 0L3 21m1-1V5a1 1 0 011-1h13a1 1 0 011 1v15m0 0l-2 2m-1-2a1 1 0 112 0 1 1 0 01-2 0zm6 1a1 1 0 011 1v1h-1v-1a1 1 0 011-1zM3 3a1 1 0 00-1 1v1h1V4a1 1 0 001-1z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">FPS</span>
                    </button>

                    <button @click="activeGenre = 'Horror'" :class="activeGenre === 'Horror' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Horror</span>
                    </button>

                    <button @click="activeGenre = 'Indie'" :class="activeGenre === 'Indie' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Indie</span>
                    </button>

                    <button @click="activeGenre = 'Strategy'" :class="activeGenre === 'Strategy' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Strategy</span>
                    </button>

                    <button @click="activeGenre = 'Fighting'" :class="activeGenre === 'Fighting' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Fighting</span>
                    </button>

                    <button @click="activeGenre = 'Racing'" :class="activeGenre === 'Racing' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Racing</span>
                    </button>

                    <button @click="activeGenre = 'Sports'" :class="activeGenre === 'Sports' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Sports</span>
                    </button>
                    
                    <button @click="activeGenre = 'MMO'" :class="activeGenre === 'MMO' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">MMO</span>
                    </button>

                    <button @click="activeGenre = 'Simulation'" :class="activeGenre === 'Simulation' ? 'ring-2 ring-[#00A3FF] bg-white/10' : 'border-white/10 bg-white/5'" class="block border rounded-2xl p-6 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden focus:outline-none">
                        <svg class="text-4xl text-indigo-400 mb-4 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30">Simulation</span>
                    </button>
                </div>
            </section>

            <section class="mt-16">
                <h2 class="text-sm font-bold tracking-[0.2em] uppercase text-slate-500 mb-8 border-l-4 border-[#00A3FF] pl-4" 
                    x-text="activeGenre === 'All' ? 'Most Rated Games' : 'Top ' + activeGenre + ' Games'"></h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    
                    <div x-show="activeGenre === 'All' || ['RPG', 'Action', 'Open World'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1245620/library_600x900.jpg" alt="Elden Ring" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Elden Ring</h3>
                            <p class="text-sm text-slate-400 mt-1">FromSoftware</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.9</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['RPG', 'FPS', 'Open World', 'Action'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1091500/library_600x900.jpg" alt="Cyberpunk 2077" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Cyberpunk 2077</h3>
                            <p class="text-sm text-slate-400 mt-1">CD Projekt Red</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">8.8</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['RPG', 'Strategy'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1086940/library_600x900.jpg" alt="Baldur's Gate 3" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Baldur's Gate 3</h3>
                            <p class="text-sm text-slate-400 mt-1">Larian Studios</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.7</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Open World'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1174180/library_600x900.jpg" alt="Red Dead Redemption 2" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Red Dead 2</h3>
                            <p class="text-sm text-slate-400 mt-1">Rockstar Games</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.9</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Indie', 'RPG'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1145360/library_600x900.jpg" alt="Hades" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Hades</h3>
                            <p class="text-sm text-slate-400 mt-1">Supergiant Games</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.4</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Horror', 'FPS'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1196590/library_600x900.jpg" alt="Resident Evil Village" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">RE Village</h3>
                            <p class="text-sm text-slate-400 mt-1">Capcom</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.1</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['RPG', 'Action', 'Open World'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/292030/library_600x900.jpg" alt="The Witcher 3" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">The Witcher 3</h3>
                            <p class="text-sm text-slate-400 mt-1">CD Projekt Red</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.8</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['FPS', 'Action'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/782330/library_600x900.jpg" alt="DOOM Eternal" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">DOOM Eternal</h3>
                            <p class="text-sm text-slate-400 mt-1">id Software</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.5</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Strategy', 'Simulation'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/289070/library_600x900.jpg" alt="Civilization VI" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Civilization VI</h3>
                            <p class="text-sm text-slate-400 mt-1">Firaxis Games</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">8.9</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Action', 'Indie'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/367520/library_600x900.jpg" alt="Hollow Knight" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Hollow Knight</h3>
                            <p class="text-sm text-slate-400 mt-1">Team Cherry</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.6</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Fighting', 'Action'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1364780/library_600x900.jpg" alt="Street Fighter 6" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Street Fighter 6</h3>
                            <p class="text-sm text-slate-400 mt-1">Capcom</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.2</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Racing', 'Open World', 'Simulation', 'Sports'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1551360/library_600x900.jpg" alt="Forza Horizon 5" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Forza Horizon 5</h3>
                            <p class="text-sm text-slate-400 mt-1">Playground Games</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.3</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Sports', 'Simulation'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2195250/library_600x900.jpg" alt="EA SPORTS FC 24" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">EA SPORTS FC 24</h3>
                            <p class="text-sm text-slate-400 mt-1">Electronic Arts</p>
                            <div class="flex items-center gap-1.5 text-amber-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-amber-500/10 rounded-md border border-amber-500/20">7.5</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['MMO', 'RPG'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/39210/library_600x900.jpg" alt="Final Fantasy XIV" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Final Fantasy XIV</h3>
                            <p class="text-sm text-slate-400 mt-1">Square Enix</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.4</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Simulation'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/1250410/library_600x900.jpg" alt="Flight Simulator" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Flight Simulator</h3>
                            <p class="text-sm text-slate-400 mt-1">Asobo Studio</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.0</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre === 'All' || ['Simulation', 'Strategy'].includes(activeGenre)" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                            <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/255710/library_600x900.jpg" alt="Cities: Skylines" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors truncate">Cities: Skylines</h3>
                            <p class="text-sm text-slate-400 mt-1">Colossal Order</p>
                            <div class="flex items-center gap-1.5 text-green-400 mt-3 mb-4"><span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">8.7</span></div>
                            <div class="grid grid-cols-2 gap-2"><button class="rounded-lg bg-[#00A3FF] text-[#05050A] px-2 py-2.5 text-xs font-bold shadow-[0_0_15px_rgba(0,163,255,0.3)]">Review</button><button class="rounded-lg border border-white/10 bg-white/5 text-white px-2 py-2.5 text-xs font-bold hover:bg-white/10">Backlog</button></div>
                        </div>
                    </div>

                    <div x-show="activeGenre !== 'All' && !['RPG', 'Action', 'Open World', 'FPS', 'Horror', 'Indie', 'Strategy', 'Fighting', 'Racing', 'Sports', 'MMO', 'Simulation'].includes(activeGenre)" 
                         style="display: none;" 
                         class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-12 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-md">
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