<x-layouts.app title="Community - Spwn">
    
    <div class="fixed top-0 left-1/4 w-[600px] h-[600px] bg-[#00A3FF]/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 py-10 relative z-10">
        
        <h1 class="text-3xl font-black text-white mb-8 tracking-tight">Community Feed</h1>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_350px] gap-12">
            
            <main class="w-full">
                
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md mb-8 shadow-lg">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#00A3FF] to-purple-600 flex items-center justify-center text-white font-bold text-lg shrink-0">
                            N
                        </div>
                        <div class="flex-1">
                            <textarea placeholder="Share a gaming experience, ask for advice, or drop a recommendation..." class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-slate-300 text-sm focus:outline-none focus:border-[#00A3FF] transition-colors resize-none h-24"></textarea>
                            
                            <div class="flex justify-between items-center mt-3">
                                <button class="text-slate-400 hover:text-[#00A3FF] transition-colors text-sm font-bold flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path></svg>
                                    Tag a Game
                                </button>
                                <button class="bg-[#00A3FF] hover:bg-[#33b5ff] text-[#05050A] font-bold px-6 py-2 rounded-full transition-colors shadow-[0_0_15px_rgba(0,163,255,0.3)]">
                                    Post
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md hover:bg-white/[0.07] transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-slate-700 flex items-center justify-center text-white font-bold">V</div>
                                <div>
                                    <p class="font-bold text-white text-sm">VergilFan99</p>
                                    <p class="text-xs text-slate-500">2 hours ago</p>
                                </div>
                            </div>
                            <a href="/details" class="flex items-center gap-2 bg-[#00A3FF]/10 text-[#00A3FF] border border-[#00A3FF]/20 px-3 py-1 rounded-full text-xs font-bold hover:bg-[#00A3FF]/20 transition-colors">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M21.5 12H2.5M12 2.5v19"/></svg>
                                Devil May Cry 5
                            </a>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Finally pulled off the Judgement Cut End combo!</h3>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            After hours of practicing in the void, I finally managed to string together four consecutive Judgement Cut Ends. The timing is so insanely strict, but the combat system in this game is an absolute masterpiece. Has anyone else mastered Dante's weapon switching yet?
                        </p>
                        <div class="flex items-center gap-6 text-slate-400 text-sm font-bold">
                            <button class="flex items-center gap-1.5 hover:text-[#00A3FF] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                                245
                            </button>
                            <button class="flex items-center gap-1.5 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                32 Comments
                            </button>
                        </div>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md hover:bg-white/[0.07] transition-colors">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-emerald-700 flex items-center justify-center text-white font-bold">R</div>
                                <div>
                                    <p class="font-bold text-white text-sm">RogueKnight</p>
                                    <p class="text-xs text-slate-500">5 hours ago</p>
                                </div>
                            </div>
                            <a href="#" class="flex items-center gap-2 bg-purple-500/10 text-purple-400 border border-purple-500/20 px-3 py-1 rounded-full text-xs font-bold hover:bg-purple-500/20 transition-colors">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M21.5 12H2.5M12 2.5v19"/></svg>
                                Hollow Knight
                            </a>
                        </div>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="bg-green-500/20 text-green-400 text-[10px] font-black uppercase tracking-wider px-2 py-0.5 rounded">Recommendation</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">If you're on the fence about metroidvanias, play this.</h3>
                        <p class="text-slate-300 text-sm leading-relaxed mb-4">
                            I never really understood the hype around the genre until I gave this a shot. The atmosphere, the tight controls, and the lore are just incredible. Do not let the cute bug art style fool you, some of these bosses are brutally difficult!
                        </p>
                        <div class="flex items-center gap-6 text-slate-400 text-sm font-bold">
                            <button class="flex items-center gap-1.5 hover:text-[#00A3FF] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                                890
                            </button>
                            <button class="flex items-center gap-1.5 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                124 Comments
                            </button>
                        </div>
                    </div>
                </div>
            </main>

            <aside class="hidden lg:block w-full">
                <div class="sticky top-28 space-y-6">
                    
                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg">
                        <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-[#00A3FF] mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            Trending Games
                        </h3>
                        <ul class="space-y-4">
                            <li>
                                <a href="#" class="group block">
                                    <p class="text-white text-sm font-bold group-hover:text-[#00A3FF] transition-colors">The Witcher 3: Wild Hunt</p>
                                    <p class="text-xs text-slate-500 mt-0.5">4.2k active discussions</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group block">
                                    <p class="text-white text-sm font-bold group-hover:text-[#00A3FF] transition-colors">Elden Ring</p>
                                    <p class="text-xs text-slate-500 mt-0.5">3.8k active discussions</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group block">
                                    <p class="text-white text-sm font-bold group-hover:text-[#00A3FF] transition-colors">Baldur's Gate 3</p>
                                    <p class="text-xs text-slate-500 mt-0.5">2.1k active discussions</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="group block">
                                    <p class="text-white text-sm font-bold group-hover:text-[#00A3FF] transition-colors">Cyberpunk 2077</p>
                                    <p class="text-xs text-slate-500 mt-0.5">1.9k active discussions</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md shadow-lg">
                        <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-[#00A3FF] mb-4 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            Top Contributors
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="text-[#00A3FF] font-black w-4 text-center">1</div>
                                <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-xs font-bold text-white">RM</div>
                                <div class="flex-1"><p class="text-sm font-bold text-white">RPG_Master</p></div>
                                <div class="text-xs font-bold text-slate-400 bg-white/5 px-2 py-1 rounded">142</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="text-slate-400 font-black w-4 text-center">2</div>
                                <div class="w-8 h-8 rounded-full bg-emerald-600 flex items-center justify-center text-xs font-bold text-white">LH</div>
                                <div class="flex-1"><p class="text-sm font-bold text-white">LoreHunter</p></div>
                                <div class="text-xs font-bold text-slate-400 bg-white/5 px-2 py-1 rounded">98</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="text-slate-500 font-black w-4 text-center">3</div>
                                <div class="w-8 h-8 rounded-full bg-rose-600 flex items-center justify-center text-xs font-bold text-white">AG</div>
                                <div class="flex-1"><p class="text-sm font-bold text-white">AlexGamer99</p></div>
                                <div class="text-xs font-bold text-slate-400 bg-white/5 px-2 py-1 rounded">76</div>
                            </div>
                        </div>
                    </div>

                </div>
            </aside>

        </div>
    </div>
</x-layouts.app>