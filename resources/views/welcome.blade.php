<x-layouts.app>
    <section x-data="{ activeSlide: 2, activeTab: 'Games' }" class="relative min-h-screen bg-black text-white overflow-hidden font-sans border border-purple-900/30">
        
        <div class="absolute top-1/3 -left-32 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-purple-700/20 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="grid grid-cols-[100px_1fr] md:grid-cols-[140px_1fr] h-screen">
            
            <aside class="border-r border-indigo-500/30 flex flex-col justify-between items-center py-8 relative z-10 bg-black/40 backdrop-blur-sm">
                <div class="w-12 h-12 text-cyan-400 flex items-center justify-center">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                    </svg>
                </div>

                <div class="flex flex-col gap-4">
                    <template x-for="i in 4">
                        <button 
                            @click="activeSlide = i"
                            class="w-3 h-3 rounded-sm transition-all duration-300"
                            :class="activeSlide === i ? 'bg-indigo-500 ring-2 ring-indigo-500/50 ring-offset-2 ring-offset-black' : 'bg-indigo-900/50 hover:bg-indigo-500/80'"
                        ></button>
                    </template>
                </div>
            </aside>

            <main class="flex flex-col relative z-10">
                
                <nav class="border-b border-indigo-500/30 h-24 flex justify-center items-center gap-16 bg-black/20 backdrop-blur-sm">
                    <template x-for="tab in ['Discover', 'Games', 'Community']">
                        <button 
                            @click="activeTab = tab"
                            class="text-sm tracking-widest uppercase font-medium transition-colors relative pb-2"
                            :class="activeTab === tab ? 'text-indigo-400' : 'text-gray-400 hover:text-gray-200'"
                        >
                            <span x-text="tab"></span>
                            <div x-show="activeTab === tab" x-transition class="absolute bottom-0 left-0 w-full h-0.5 bg-indigo-500"></div>
                        </button>
                    </template>
                </nav>

                <div class="flex-1 relative flex items-center justify-between p-12 lg:p-24">
                    <div class="max-w-2xl"></div>

                    <div class="flex flex-col items-end gap-6">
                        <template x-for="i in 3">
                            <div class="flex items-center gap-4 group cursor-pointer" @click="activeSlide = i">
                                <span class="text-sm font-mono tracking-widest transition-colors" :class="activeSlide === i ? 'text-indigo-400' : 'text-gray-600 group-hover:text-gray-400'" x-text="`0${i}`"></span>
                                <div class="h-px transition-all duration-300" :class="activeSlide === i ? 'w-12 bg-indigo-500' : 'w-0 bg-transparent group-hover:w-6 group-hover:bg-gray-600'"></div>
                            </div>
                        </template>
                    </div>
                </div>

                <button class="absolute bottom-12 right-12 lg:bottom-24 lg:right-24 w-16 h-16 rounded-full border-2 border-indigo-500/50 flex items-center justify-center text-indigo-400 hover:bg-indigo-500 hover:text-white hover:border-indigo-500 transition-all duration-300 group shadow-[0_0_30px_rgba(99,102,241,0.2)] hover:shadow-[0_0_40px_rgba(99,102,241,0.5)]">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-1 group-hover:scale-110 transition-transform">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </button>

            </main>
        </div>
    </section>
</x-layouts.app>