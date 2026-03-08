<x-layouts.app title="My Backlog - Spwn">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 py-12 relative z-10">
        
        <div class="flex items-center gap-6 mb-12 pb-8 border-b border-white/10">
            <div class="w-20 h-20 rounded-full bg-gradient-to-br from-[#00A3FF] to-purple-600 flex items-center justify-center text-3xl font-black text-white shadow-[0_0_20px_rgba(0,163,255,0.3)]">
                N
            </div>
            <div>
                <h1 class="text-3xl font-black text-white tracking-tight">Nelann's Backlog</h1>
                <p class="text-slate-400 mt-1">12 Games Saved • 3 Currently Playing</p>
            </div>
        </div>

        <div class="flex items-center gap-8 mb-8 border-b border-white/5 text-sm font-bold tracking-wider uppercase">
            <button class="pb-3 border-b-2 border-[#00A3FF] text-white">Want to Play</button>
            <button class="pb-3 border-b-2 border-transparent text-slate-500 hover:text-slate-300 transition-colors">Currently Playing</button>
            <button class="pb-3 border-b-2 border-transparent text-slate-500 hover:text-slate-300 transition-colors">Finished</button>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
            
            <div class="group">
                <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                    <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co22l7.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                    
                    <button class="absolute top-2 right-2 w-8 h-8 rounded-full bg-black/60 backdrop-blur-md flex items-center justify-center text-white hover:bg-red-500 hover:text-white transition-colors border border-white/10">
                        ✕
                    </button>
                </a>
                <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer">Resident Evil 3</h3>
                <div class="relative mt-3">
                    <select class="w-full bg-white/5 border border-white/10 rounded-lg pl-3 pr-8 py-2 text-xs text-slate-300 focus:outline-none focus:border-[#00A3FF] appearance-none cursor-pointer hover:bg-white/10 transition-colors">
                        <option class="bg-[#05050A] text-slate-300">Move to Playing</option>
                        <option class="bg-[#05050A] text-slate-300">Move to Finished</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>
            </div>

            <div class="group">
                <a href="/details" class="block relative aspect-[3/4] rounded-xl overflow-hidden border border-white/10 mb-3 bg-white/5 shadow-lg">
                    <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co2mvt.jpg" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105 opacity-80 group-hover:opacity-100">
                    <button class="absolute top-2 right-2 w-8 h-8 rounded-full bg-black/60 backdrop-blur-md flex items-center justify-center text-white hover:bg-red-500 hover:text-white transition-colors border border-white/10">
                        ✕
                    </button>
                </a>
                <h3 class="font-bold text-white text-sm leading-tight hover:text-[#00A3FF] cursor-pointer">Valorant</h3>
                <div class="relative mt-3">
                    <select class="w-full bg-white/5 border border-white/10 rounded-lg pl-3 pr-8 py-2 text-xs text-slate-300 focus:outline-none focus:border-[#00A3FF] appearance-none cursor-pointer hover:bg-white/10 transition-colors">
                        <option class="bg-[#05050A] text-slate-300">Move to Playing</option>
                        <option class="bg-[#05050A] text-slate-300">Move to Finished</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-layouts.app>