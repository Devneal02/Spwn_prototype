<x-layouts.app :title="'Games - Spwn'">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="container mx-auto px-6 py-12 lg:px-24 lg:py-20 max-w-7xl relative z-10 text-slate-300">
        
        <section>
            <h2 class="text-sm font-bold tracking-[0.2em] uppercase text-slate-500 mb-6 border-l-4 border-[#00A3FF] pl-4">Browse by Genre</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <a href="#" class="block bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden">
                    <svg class="text-5xl text-indigo-400 mb-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <span class="px-4 py-1.5 text-[12px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30 backdrop-blur-md">RPG</span>
                </a>

                <a href="#" class="block bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden">
                    <svg class="text-5xl text-indigo-400 mb-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"></path></svg>
                    <span class="px-4 py-1.5 text-[12px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30 backdrop-blur-md">Action</span>
                </a>

                <a href="#" class="block bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden">
                    <svg class="text-5xl text-indigo-400 mb-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    <span class="px-4 py-1.5 text-[12px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30 backdrop-blur-md">Open World</span>
                </a>

                <a href="#" class="block bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden">
                    <svg class="text-5xl text-indigo-400 mb-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3v2a1 1 0 001 1h2a1 1 0 001-1V3a1 1 0 00-1-1h-2a1 1 0 00-1 1zm4 17a1 1 0 10-2 0 1 1 0 002 0zm0 0l2 2m-6-17a1 1 0 112 0 1 1 0 01-2 0zm-6 17a1 1 0 10-2 0 1 1 0 002 0zm0 0L3 21m1-1V5a1 1 0 011-1h13a1 1 0 011 1v15m0 0l-2 2m-1-2a1 1 0 112 0 1 1 0 01-2 0zm6 1a1 1 0 011 1v1h-1v-1a1 1 0 011-1zM3 3a1 1 0 00-1 1v1h1V4a1 1 0 001-1z"></path></svg>
                    <span class="px-4 py-1.5 text-[12px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30 backdrop-blur-md">FPS</span>
                </a>

                <a href="#" class="block bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden">
                    <svg class="text-5xl text-indigo-400 mb-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                    <span class="px-4 py-1.5 text-[12px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30 backdrop-blur-md">Strategy</span>
                </a>

                <a href="#" class="block bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-md flex flex-col items-center justify-center text-center group hover:bg-white/10 hover:border-white/20 transition-all transform hover:-translate-y-1 aspect-square relative overflow-hidden">
                    <svg class="text-5xl text-indigo-400 mb-6 transition-colors group-hover:text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2 2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v1.5a2 2 0 002 2.065M16 3.935V4.5A2.5 2.5 0 0113.5 7H11a2 2 0 00-2 2 2 2 0 01-2 2v1a2 2 0 002 2"></path></svg>
                    <span class="px-4 py-1.5 text-[12px] font-bold tracking-[0.2em] uppercase rounded-full bg-[#00A3FF]/20 text-[#00A3FF] border border-[#00A3FF]/30 backdrop-blur-md">Indie</span>
                </a>
            </div>
        </section>

        <section class="mt-16">
            <h2 class="text-sm font-bold tracking-[0.2em] uppercase text-slate-500 mb-8 border-l-4 border-[#00A3FF] pl-4">Most Rated Games</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#00A3FF]/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-[#00A3FF]/20"></div>
                    
                    <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                        <img src="{{ asset('images/game_placeholder_eldenring.jpg') }}" alt="Elden Ring" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors">Elden Ring</h3>
                        <p class="text-sm text-slate-400 mt-1">FromSoftware</p>
                        
                        <div class="flex items-center gap-1.5 text-green-400 mt-4 mb-4">
                            <span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.9</span>
                            <span class="text-xs text-slate-500">(1,245 user ratings)</span>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <button class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all shadow-[0_0_20px_rgba(79,70,229,0.2)] hover:shadow-[0_0_30px_rgba(79,70,229,0.4)] transform hover:-translate-y-0.5">Write Review</button>
                            <button class="rounded-lg border border-white/10 bg-white/5 backdrop-blur-md px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">Add to Backlog</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#00A3FF]/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-[#00A3FF]/20"></div>
                    
                    <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                        <img src="{{ asset('images/game_placeholder_cyberpunk.jpg') }}" alt="Cyberpunk 2077" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors">Cyberpunk 2077</h3>
                        <p class="text-sm text-slate-400 mt-1">CD Projekt Red</p>
                        
                        <div class="flex items-center gap-1.5 text-green-400 mt-4 mb-4">
                            <span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">8.8</span>
                            <span class="text-xs text-slate-500">(982 user ratings)</span>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <button class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all shadow-[0_0_20px_rgba(79,70,229,0.2)] hover:shadow-[0_0_30px_rgba(79,70,229,0.4)] transform hover:-translate-y-0.5">Write Review</button>
                            <button class="rounded-lg border border-white/10 bg-white/5 backdrop-blur-md px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">Add to Backlog</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#00A3FF]/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-[#00A3FF]/20"></div>
                    
                    <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                        <img src="{{ asset('images/game_placeholder_baldursgate.jpg') }}" alt="Baldur's Gate 3" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors">Baldur's Gate 3</h3>
                        <p class="text-sm text-slate-400 mt-1">Larian Studios</p>
                        
                        <div class="flex items-center gap-1.5 text-green-400 mt-4 mb-4">
                            <span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.7</span>
                            <span class="text-xs text-slate-500">(1,118 user ratings)</span>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <button class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all shadow-[0_0_20px_rgba(79,70,229,0.2)] hover:shadow-[0_0_30px_rgba(79,70,229,0.4)] transform hover:-translate-y-0.5">Write Review</button>
                            <button class="rounded-lg border border-white/10 bg-white/5 backdrop-blur-md px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">Add to Backlog</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#00A3FF]/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-[#00A3FF]/20"></div>
                    
                    <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                        <img src="{{ asset('images/game_placeholder_reddead.jpg') }}" alt="Red Dead Redemption 2" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors">Red Dead Redemption 2</h3>
                        <p class="text-sm text-slate-400 mt-1">Rockstar Games</p>
                        
                        <div class="flex items-center gap-1.5 text-green-400 mt-4 mb-4">
                            <span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.9</span>
                            <span class="text-xs text-slate-500">(1,299 user ratings)</span>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <button class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all shadow-[0_0_20px_rgba(79,70,229,0.2)] hover:shadow-[0_0_30px_rgba(79,70,229,0.4)] transform hover:-translate-y-0.5">Write Review</button>
                            <button class="rounded-lg border border-white/10 bg-white/5 backdrop-blur-md px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">Add to Backlog</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#00A3FF]/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-[#00A3FF]/20"></div>
                    
                    <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                        <img src="{{ asset('images/game_placeholder_hades.jpg') }}" alt="Hades" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors">Hades</h3>
                        <p class="text-sm text-slate-400 mt-1">Supergiant Games</p>
                        
                        <div class="flex items-center gap-1.5 text-green-400 mt-4 mb-4">
                            <span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.4</span>
                            <span class="text-xs text-slate-500">(755 user ratings)</span>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <button class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all shadow-[0_0_20px_rgba(79,70,229,0.2)] hover:shadow-[0_0_30px_rgba(79,70,229,0.4)] transform hover:-translate-y-0.5">Write Review</button>
                            <button class="rounded-lg border border-white/10 bg-white/5 backdrop-blur-md px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">Add to Backlog</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#00A3FF]/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-[#00A3FF]/20"></div>
                    
                    <div class="aspect-[3/4] w-full overflow-hidden rounded-xl mb-4 relative group">
                        <img src="{{ asset('images/witcher_details_poster.jpg') }}" alt="The Witcher 3: Wild Hunt" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-xl pointer-events-none"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-white tracking-wide group-hover:text-[#00A3FF] transition-colors">The Witcher 3: Wild Hunt</h3>
                        <p class="text-sm text-slate-400 mt-1">CD Projekt Red</p>
                        
                        <div class="flex items-center gap-1.5 text-green-400 mt-4 mb-4">
                            <span class="px-2.5 py-1 text-sm font-bold bg-green-500/10 rounded-md border border-green-500/20">9.8</span>
                            <span class="text-xs text-slate-500">(1,245 user ratings)</span>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <button class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all shadow-[0_0_20px_rgba(79,70,229,0.2)] hover:shadow-[0_0_30px_rgba(79,70,229,0.4)] transform hover:-translate-y-0.5">Write Review</button>
                            <button class="rounded-lg border border-white/10 bg-white/5 backdrop-blur-md px-4 py-3 text-sm font-semibold tracking-wide text-white transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">Add to Backlog</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>