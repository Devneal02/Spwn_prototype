<x-layouts.app title="Nelann's Profile - Spwn">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 py-12 relative z-10">
        
        <div class="flex flex-col md:flex-row items-center md:items-end justify-between gap-6 mb-12 border-b border-white/10 pb-8">
            <div class="flex flex-col md:flex-row items-center gap-6 text-center md:text-left">
                <div class="w-24 h-24 rounded-full bg-gradient-to-br from-[#00A3FF] to-purple-600 flex items-center justify-center text-4xl font-black text-white shadow-[0_0_30px_rgba(0,163,255,0.4)] border-4 border-[#05050A]">
                    N
                </div>
                <div>
                    <h1 class="text-4xl font-black text-white tracking-tight">Nelann</h1>
                    <p class="text-[#00A3FF] font-bold mt-1 tracking-widest text-sm uppercase">Level 12 Contributor</p>
                </div>
            </div>
            <button class="bg-white/5 border border-white/10 hover:bg-white/10 text-white font-bold py-2.5 px-6 rounded-xl transition-colors text-sm shadow-sm">
                Edit Profile
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_2.5fr] gap-10 items-start">
            
            <div class="space-y-8 sticky top-28">
                
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg">
                    <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-white mb-4 border-b border-white/10 pb-2">About Me</h3>
                    <p class="text-slate-300 text-sm leading-relaxed">
                        Student and dev building Spwn. When I'm not writing Flutter or Laravel code, I'm usually tweaking my Kali dual-boot setup, catching up on One Piece, or making sure my dog hasn't eaten anything she shouldn't have.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/5 text-slate-300 border border-white/10">PC Hardware</span>
                        <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/5 text-slate-300 border border-white/10">InfoSec</span>
                        <span class="px-2.5 py-1 text-[10px] font-bold tracking-widest uppercase rounded bg-white/5 text-slate-300 border border-white/10">Action RPGs</span>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg">
                    <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-white mb-5 border-b border-white/10 pb-2">Library Stats</h3>
                    
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-black/30 rounded-xl p-4 text-center border border-white/5">
                            <p class="text-2xl font-black text-white mb-1">15</p>
                            <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Reviews</p>
                        </div>
                        <div class="bg-black/30 rounded-xl p-4 text-center border border-white/5">
                            <p class="text-2xl font-black text-[#00A3FF] mb-1">42</p>
                            <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Total Games</p>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between text-xs font-bold text-slate-400">
                            <span class="text-emerald-400">12 Finished</span>
                            <span class="text-[#00A3FF]">4 Playing</span>
                            <span class="text-slate-500">26 Backlog</span>
                        </div>
                        <div class="w-full h-2.5 flex rounded-full overflow-hidden bg-black/50">
                            <div class="bg-emerald-400 h-full" style="width: 28%"></div>
                            <div class="bg-[#00A3FF] h-full" style="width: 10%"></div>
                            <div class="bg-slate-600 h-full" style="width: 62%"></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg">
                    <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-white mb-4 border-b border-white/10 pb-2">Primary Rig</h3>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-black/40 border border-white/10 flex items-center justify-center text-slate-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-white font-bold text-sm">Lenovo IdeaPad Gaming 15ACH6</p>
                            <p class="text-slate-500 text-xs mt-0.5">Dual-boot: Windows / Kali Linux</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="space-y-12">
                
                <div>
                    <h3 class="text-xl font-bold text-white tracking-wide border-l-4 border-[#00A3FF] pl-3 mb-6">Recent Activity</h3>
                    
                    <div class="space-y-4">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md hover:bg-white/[0.07] transition-colors flex gap-6">
                            <img src="https://images.igdb.com/igdb/image/upload/t_cover_big/co1wyy.jpg" class="w-16 h-24 rounded-lg object-cover border border-white/10 shadow-lg hidden sm:block">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2 text-sm text-slate-400">
                                    <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <span>Rated a game • 2 days ago</span>
                                </div>
                                <h4 class="font-bold text-lg text-white mb-1"><a href="/details" class="hover:text-[#00A3FF] transition-colors">The Witcher 3: Wild Hunt</a></h4>
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="bg-green-500/10 text-green-400 border border-green-500/20 px-2 py-0.5 rounded text-xs font-bold">10 / 10</span>
                                </div>
                                <p class="text-sm text-slate-300 line-clamp-2">Still holds up perfectly. Exploring the map and making choices that actually matter never gets old.</p>
                            </div>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md hover:bg-white/[0.07] transition-colors flex gap-6">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2 text-sm text-slate-400">
                                    <svg class="w-4 h-4 text-[#00A3FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                    <span>Updated Backlog • 1 week ago</span>
                                </div>
                                <p class="text-sm text-slate-300">
                                    Moved <strong class="text-white">Devil May Cry 5</strong> to <span class="bg-indigo-500/20 text-indigo-300 px-2 py-0.5 rounded text-xs border border-indigo-500/30">Currently Playing</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>