<x-layouts.app :title="$game['title'] . ' - Spwn'">
    <div class="grid gap-8 lg:grid-cols-3">
        
        <div class="space-y-6">
            <div class="aspect-[3/4] w-full overflow-hidden rounded-xl border border-zinc-800 shadow-2xl">
                <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="h-full w-full object-cover">
            </div>
            
            <div class="grid grid-cols-2 gap-3">
                <button class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-bold text-white transition hover:bg-indigo-700">Write Review</button>
                <button class="rounded-lg border border-zinc-700 bg-zinc-800 px-4 py-3 text-sm font-bold text-white transition hover:bg-zinc-700">Add to Backlog</button>
            </div>
        </div>

        <div class="lg:col-span-2 space-y-8">
            <div>
                <h1 class="text-4xl font-black text-white">{{ $game['title'] }}</h1>
                <p class="mt-2 text-lg text-zinc-400">Developed by {{ $game['developer'] }} • {{ $game['genre'] }}</p>
            </div>

            <div class="flex items-center gap-4 rounded-xl border border-zinc-800 bg-zinc-900 p-6">
                <div class="flex h-16 w-16 items-center justify-center rounded-full bg-amber-500/10 text-2xl font-black text-amber-500 border border-amber-500/20">
                    {{ $game['rating'] }}
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">Spwn Community Score</h3>
                    <p class="text-sm text-zinc-400">Based on 1,245 user ratings</p>
                </div>
            </div>

            <div>
                <h3 class="mb-3 text-xl font-bold text-white">About</h3>
                <p class="text-zinc-300 leading-relaxed">{{ $game['description'] }}</p>
            </div>

            <div class="border-t border-zinc-800 pt-8">
                <h3 class="mb-6 text-xl font-bold text-white">Top Reviews</h3>
                
                <div class="space-y-6">
                    <div class="rounded-xl bg-zinc-900 p-6 border border-zinc-800">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-indigo-500 flex items-center justify-center font-bold text-white">A</div>
                                <div>
                                    <p class="font-bold text-white">AlexGamer99</p>
                                    <p class="text-xs text-zinc-500">Played on PC</p>
                                </div>
                            </div>
                            <span class="rounded bg-amber-500/10 px-2 py-1 text-sm font-bold text-amber-500">10 / 10</span>
                        </div>
                        <p class="text-sm text-zinc-300">An absolute masterpiece. The world design is incredible and the gameplay loop is addicting. Must play!</p>
                    </div>

                    <div class="rounded-xl bg-zinc-900 p-6 border border-zinc-800">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-emerald-500 flex items-center justify-center font-bold text-white">S</div>
                                <div>
                                    <p class="font-bold text-white">SarahPlays</p>
                                    <p class="text-xs text-zinc-500">Played on PS5</p>
                                </div>
                            </div>
                            <span class="rounded bg-amber-500/10 px-2 py-1 text-sm font-bold text-amber-500">8.5 / 10</span>
                        </div>
                        <p class="text-sm text-zinc-300">Great combat and visuals, but the final act felt a bit rushed. Still highly recommend it if you like the genre.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layouts.app>