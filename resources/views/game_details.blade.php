<x-layouts.app :title="$game['title'] ?? 'Game Details' . ' - Spwn'">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="container mx-auto px-6 py-12 lg:px-24 lg:py-20 max-w-7xl relative z-10 text-slate-300">
        
        <div class="grid gap-12 lg:grid-cols-[1fr_2.5fr]">
            
            <div class="space-y-6">
                <div class="aspect-[3/4] w-full overflow-hidden rounded-2xl border border-white/10 shadow-[0_0_40px_rgba(0,0,0,0.3)] bg-black/50 relative group">
                    <img src="{{ $game['image'] ?? 'https://via.placeholder.com/600x800' }}" alt="{{ $game['title'] ?? 'Poster' }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-2xl pointer-events-none"></div>
                </div>
                
                <div class="flex flex-col gap-3">
                    <button class="w-full rounded-xl bg-indigo-600/90 hover:bg-indigo-500 px-4 py-4 text-sm font-semibold tracking-wide text-white transition-all shadow-[0_0_20px_rgba(79,70,229,0.2)] hover:shadow-[0_0_30px_rgba(79,70,229,0.4)] transform hover:-translate-y-0.5">
                        Write Review
                    </button>
                    <button class="w-full rounded-xl border border-white/10 bg-white/5 backdrop-blur-md px-4 py-4 text-sm font-semibold tracking-wide text-white transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Add to Backlog
                    </button>
                </div>
            </div>

            <div class="space-y-10">
                
                <div class="border-b border-white/5 pb-8">
                    <h1 class="text-5xl lg:text-6xl font-black text-white tracking-tight drop-shadow-lg">{{ $game['title'] ?? 'Game Title' }}</h1>
                    <p class="mt-4 text-lg text-slate-400 font-medium tracking-wide">
                        Developed by <span class="text-slate-200">{{ $game['developer'] ?? 'Unknown' }}</span> 
                        <span class="mx-3 text-slate-600">•</span> 
                        <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-white/5 text-slate-300 border border-white/10 backdrop-blur-md">{{ $game['genre'] ?? 'Genre' }}</span>
                    </p>
                </div>

                <div class="flex items-center gap-6 rounded-2xl border border-white/10 bg-white/5 backdrop-blur-md p-6 relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                    <div class="absolute -right-10 -top-10 w-40 h-40 bg-green-500/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-green-500/20"></div>
                    
                    <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-green-500/10 text-3xl font-black text-green-400 border border-green-500/20 shadow-[0_0_20px_rgba(74,222,128,0.1)]">
                        {{ $game['rating'] ?? 'N/A' }}
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-white tracking-wide">Spwn Community Score</h3>
                        <p class="text-sm text-slate-400 mt-1">Based on 1,245 user ratings</p>
                    </div>
                </div>

                <div>
                    <h3 class="mb-4 text-sm font-bold tracking-[0.2em] uppercase text-slate-500">About this game</h3>
                    <p class="text-slate-300 leading-relaxed text-lg max-w-3xl">
                        {{ $game['description'] ?? 'Game description goes here.' }}
                    </p>
                </div>

                <div class="pt-4">
                    <h3 class="mb-6 text-sm font-bold tracking-[0.2em] uppercase text-slate-500">Top Community Reviews</h3>
                    
                    <div class="space-y-4">
                        <div class="rounded-2xl bg-white/5 p-6 border border-white/10 backdrop-blur-md hover:bg-white/[0.07] transition-colors duration-300">
                            <div class="mb-5 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center font-bold text-white shadow-lg">A</div>
                                    <div>
                                        <p class="font-bold text-white tracking-wide">AlexGamer99</p>
                                        <p class="text-xs text-slate-500 mt-0.5">Played on PC</p>
                                    </div>
                                </div>
                                <span class="rounded-md bg-green-500/10 px-3 py-1.5 text-sm font-bold text-green-400 border border-green-500/20">10 / 10</span>
                            </div>
                            <p class="text-slate-300 leading-relaxed">An absolute masterpiece. The world design is incredible and the gameplay loop is addicting. Must play!</p>
                        </div>

                        <div class="rounded-2xl bg-white/5 p-6 border border-white/10 backdrop-blur-md hover:bg-white/[0.07] transition-colors duration-300">
                            <div class="mb-5 flex items-center justify-between">
                                <div class="flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center font-bold text-white shadow-lg">S</div>
                                    <div>
                                        <p class="font-bold text-white tracking-wide">SarahPlays</p>
                                        <p class="text-xs text-slate-500 mt-0.5">Played on PS5</p>
                                    </div>
                                </div>
                                <span class="rounded-md bg-green-500/10 px-3 py-1.5 text-sm font-bold text-green-400 border border-green-500/20">8.5 / 10</span>
                            </div>
                            <p class="text-slate-300 leading-relaxed">Great combat and visuals, but the final act felt a bit rushed. Still highly recommend it if you like the genre.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>