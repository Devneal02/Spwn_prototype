<x-layouts.app :title="$game['title'] ?? 'Game Details' . ' - Spwn'">
    
    <div x-data="{ showReviewModal: false, rating: 0, hoverRating: 0 }">
        
        <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
        <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

        <div class="container mx-auto px-6 py-12 lg:px-24 lg:py-20 max-w-7xl relative z-10 text-slate-300">
            
            <div class="grid gap-12 lg:grid-cols-[1fr_2.5fr] items-start">
                
                <div class="space-y-6 sticky top-28">
                    
                    <div class="aspect-[3/4] w-full overflow-hidden rounded-2xl border border-white/10 shadow-[0_0_40px_rgba(0,0,0,0.3)] bg-black/50 relative group">
                        <img src="{{ $game['image'] ?? 'https://images.igdb.com/igdb/image/upload/t_cover_big/co1wyy.jpg' }}" alt="{{ $game['title'] ?? 'Poster' }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 ring-1 ring-inset ring-white/10 rounded-2xl pointer-events-none"></div>
                    </div>
                    
                    <div class="flex flex-col gap-3">
                        <button @click="showReviewModal = true" type="button" class="w-full rounded-xl bg-[#00A3FF] hover:bg-[#33b5ff] px-4 py-4 text-sm font-bold tracking-wide text-[#05050A] transition-all shadow-[0_0_20px_rgba(0,163,255,0.3)] transform hover:-translate-y-0.5">
                            Write Review
                        </button>
                        <button class="w-full rounded-xl border border-white/10 bg-white/5 backdrop-blur-md px-4 py-4 text-sm font-bold tracking-wide text-[#00A3FF] transition-all hover:bg-white/10 hover:border-white/20 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            Add to Backlog
                        </button>
                    </div>

                    <div class="pt-6 border-t border-white/10 space-y-4">
                        <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-[#00A3FF] border-l-2 border-[#00A3FF] pl-3">System Requirements</h3>
                        
                        <div class="rounded-xl border border-white/10 bg-white/5 backdrop-blur-md p-5">
                            <h4 class="font-black text-white mb-3 uppercase tracking-wider text-xs border-b border-white/10 pb-2">Minimum</h4>
                            <ul class="space-y-2 text-xs">
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">OS</strong> <span class="text-slate-300">Windows 7/8/10 (64-bit)</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Processor</strong> <span class="text-slate-300">Core i5-2500K / Phenom II X4</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Memory</strong> <span class="text-slate-300">6 GB RAM</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Graphics</strong> <span class="text-slate-300">GTX 660 / Radeon HD 7870</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Storage</strong> <span class="text-slate-300">35 GB available</span></li>
                            </ul>
                        </div>

                        <div class="rounded-xl border border-[#00A3FF]/20 bg-[#00A3FF]/[0.02] backdrop-blur-md p-5 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-24 h-24 bg-[#00A3FF]/10 blur-[30px] rounded-full pointer-events-none"></div>
                            <h4 class="font-black text-[#00A3FF] mb-3 uppercase tracking-wider text-xs border-b border-white/10 pb-2 relative z-10">Recommended</h4>
                            <ul class="space-y-2 text-xs relative z-10">
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">OS</strong> <span class="text-slate-300">Windows 10/11 (64-bit)</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Processor</strong> <span class="text-slate-300">Core i7 3770 / FX-8350</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Memory</strong> <span class="text-slate-300">8 GB RAM</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Graphics</strong> <span class="text-slate-300">GTX 770 / Radeon R9 290</span></li>
                                <li><strong class="text-slate-500 block uppercase tracking-wider mb-0.5">Storage</strong> <span class="text-slate-300">35 GB available</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="space-y-10 w-full max-w-4xl">
                    
                    <div class="border-b border-white/5 pb-8">
                        <h1 class="text-5xl lg:text-6xl font-black text-white tracking-tight drop-shadow-lg">{{ $game['title'] ?? 'The Witcher 3: Wild Hunt' }}</h1>
                        <p class="mt-4 text-lg text-slate-400 font-medium tracking-wide flex items-center flex-wrap gap-3">
                            <span class="px-3 py-1 text-[10px] font-bold tracking-[0.2em] uppercase rounded-full bg-white/5 text-slate-300 border border-white/10 backdrop-blur-md">{{ $game['genre'] ?? 'RPG' }}</span>
                            <span class="text-slate-600">•</span> 
                            <span>Released: <span class="text-slate-200">May 19, 2015</span></span>
                        </p>
                    </div>

                    <div class="flex items-center gap-6 rounded-2xl border border-white/10 bg-white/5 backdrop-blur-md p-6 relative overflow-hidden group hover:bg-white/[0.07] transition-colors duration-500">
                        <div class="absolute -right-10 -top-10 w-40 h-40 bg-green-500/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-green-500/20"></div>
                        
                        <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-full bg-green-500/10 text-3xl font-black text-green-400 border border-green-500/20 shadow-[0_0_20px_rgba(74,222,128,0.1)]">
                            {{ $game['rating'] ?? '9.8' }}
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-wide">Spwn Community Score</h3>
                            <p class="text-sm text-slate-400 mt-1">Based on 1,245 user ratings</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white/5 border border-white/10 rounded-2xl p-6 backdrop-blur-md">
                        <div>
                            <h3 class="mb-3 text-xs font-bold tracking-[0.1em] uppercase text-slate-500">Developer & Publisher</h3>
                            <p class="text-white font-medium text-lg">{{ $game['developer'] ?? 'CD Projekt Red' }}</p>
                        </div>
                        <div>
                            <h3 class="mb-3 text-xs font-bold tracking-[0.1em] uppercase text-slate-500">Playable On</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2.5 py-1 text-xs font-bold text-slate-300 bg-black/40 border border-white/10 rounded-md">PC</span>
                                <span class="px-2.5 py-1 text-xs font-bold text-slate-300 bg-black/40 border border-white/10 rounded-md">PlayStation 5</span>
                                <span class="px-2.5 py-1 text-xs font-bold text-slate-300 bg-black/40 border border-white/10 rounded-md">PS4</span>
                                <span class="px-2.5 py-1 text-xs font-bold text-slate-300 bg-black/40 border border-white/10 rounded-md">Xbox Series X/S</span>
                                <span class="px-2.5 py-1 text-xs font-bold text-slate-300 bg-black/40 border border-white/10 rounded-md">Switch</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mb-4 text-sm font-bold tracking-[0.2em] uppercase text-[#00A3FF] border-l-2 border-[#00A3FF] pl-3">About this game</h3>
                        <p class="text-slate-300 leading-relaxed text-base">
                            {{ $game['description'] ?? 'As Geralt of Rivia, a monster slayer for hire, you must track down the Child of Prophecy in a vast, war-torn landscape. Explore a visually stunning fantasy universe full of meaningful choices and impactful consequences.' }}
                        </p>
                    </div>

                    <div>
                        <h3 class="mb-4 text-sm font-bold tracking-[0.2em] uppercase text-[#00A3FF] border-l-2 border-[#00A3FF] pl-3">Screenshots</h3>
                        <div class="flex gap-4 overflow-x-auto pb-4 snap-x snap-mandatory scrollbar-thin scrollbar-thumb-white/10 scrollbar-track-transparent">
                            <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/sc6khk.jpg" class="h-48 md:h-64 rounded-xl object-cover snap-start border border-white/10 shadow-lg hover:border-[#00A3FF]/50 transition-colors cursor-pointer">
                            <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/sc8f0x.jpg" class="h-48 md:h-64 rounded-xl object-cover snap-start border border-white/10 shadow-lg hover:border-[#00A3FF]/50 transition-colors cursor-pointer">
                            <img src="https://images.igdb.com/igdb/image/upload/t_screenshot_huge/sc8f0y.jpg" class="h-48 md:h-64 rounded-xl object-cover snap-start border border-white/10 shadow-lg hover:border-[#00A3FF]/50 transition-colors cursor-pointer">
                        </div>
                    </div>

                    <div class="pt-8">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-sm font-bold tracking-[0.2em] uppercase text-[#00A3FF] border-l-2 border-[#00A3FF] pl-3">Top Community Reviews</h3>
                            <a href="#" class="text-sm font-bold text-slate-400 hover:text-white transition-colors">See All</a>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="rounded-2xl bg-white/5 p-6 border border-white/10 backdrop-blur-md hover:bg-white/[0.07] transition-colors duration-300">
                                <div class="mb-5 flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-[#00A3FF] to-purple-500 flex items-center justify-center font-bold text-white shadow-lg">A</div>
                                        <div>
                                            <p class="font-bold text-white tracking-wide">AlexGamer99</p>
                                            <p class="text-xs text-slate-500 mt-0.5">Played on PC</p>
                                        </div>
                                    </div>
                                    <span class="rounded-md bg-green-500/10 px-3 py-1.5 text-sm font-bold text-green-400 border border-green-500/20">10 / 10</span>
                                </div>
                                <p class="text-slate-300 leading-relaxed text-sm">An absolute masterpiece. The world design is incredible and the gameplay loop is addicting. Must play!</p>
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
                                <p class="text-slate-300 leading-relaxed text-sm">Great combat and visuals, but the final act felt a bit rushed. Still highly recommend it if you like the genre.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="showReviewModal" style="display: none;" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            
            <div class="flex min-h-screen items-center justify-center px-4 pt-4 pb-20 text-center sm:p-0">
                
                <div x-show="showReviewModal" 
                     x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" 
                     x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" 
                     class="fixed inset-0 bg-[#05050A]/80 backdrop-blur-sm transition-opacity" 
                     @click="showReviewModal = false" aria-hidden="true"></div>

                <div x-show="showReviewModal" 
                     x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                     x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                     class="relative inline-block transform overflow-hidden rounded-2xl bg-[#0A0A0F] border border-white/10 text-left align-bottom shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl sm:align-middle">
                    
                    <div class="px-6 pt-6 pb-8">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-2xl font-black text-white tracking-tight" id="modal-title">Rate & Review</h3>
                            <button @click="showReviewModal = false" type="button" class="text-slate-400 hover:text-white transition-colors focus:outline-none">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                            </button>
                        </div>
                        
                        <div class="space-y-8">
                            <div>
                                <label class="block text-xs font-bold tracking-widest uppercase text-slate-500 mb-4 text-center">Your Rating</label>
                                
                                <div class="flex justify-center items-center gap-1 sm:gap-2">
                                    <template x-for="i in 10">
                                        <button type="button" 
                                                @mouseenter="hoverRating = i" 
                                                @mouseleave="hoverRating = 0" 
                                                @click="rating = i" 
                                                class="focus:outline-none transition-transform hover:scale-110">
                                            <svg class="w-6 h-6 sm:w-8 sm:h-8 transition-colors duration-150" 
                                                 :class="{ 'text-green-400': (hoverRating || rating) >= i, 'text-slate-600': (hoverRating || rating) < i }" 
                                                 fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                        </button>
                                    </template>
                                </div>
                                <div class="mt-4 text-center">
                                    <span class="text-2xl font-black text-white" x-text="rating > 0 ? rating : '-'"></span>
                                    <span class="text-slate-500 font-bold"> / 10</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Written Review (Optional)</label>
                                <textarea rows="5" placeholder="What did you think of the game?" class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-slate-300 text-sm focus:outline-none focus:border-[#00A3FF] transition-colors resize-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/5 border-t border-white/10 px-6 py-4 flex flex-row-reverse gap-3">
                        <button type="button" @click="showReviewModal = false" class="inline-flex w-full justify-center rounded-xl bg-[#00A3FF] hover:bg-[#33b5ff] px-6 py-3 text-sm font-bold text-[#05050A] shadow-[0_0_15px_rgba(0,163,255,0.3)] transition-colors sm:w-auto">
                            Submit Review
                        </button>
                        <button type="button" @click="showReviewModal = false" class="mt-3 inline-flex w-full justify-center rounded-xl bg-transparent border border-white/10 px-6 py-3 text-sm font-bold text-slate-300 hover:bg-white/5 transition-colors sm:mt-0 sm:w-auto">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>