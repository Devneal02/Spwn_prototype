<x-layouts.app title="Community - Spwn">

{{--
    COMMUNITY PAGE — Spwn
    Design: Dense social-platform energy. Three-zone layout:
      LEFT  — navigation + user card + community stats
      CENTER — stories strip + post composer + tabbed feed
      RIGHT — trending sidebar + active polls + top contributors + live activity
    Features:
      • Stories / Now Playing strip
      • Tab-filtered feed (All · Reviews · Discussion · recommendations · Help)
      • Post cards with like/comment/bookmark/share interactions (Alpine)
      • Community polls with live vote bars
      • Achievement badges on user cards
      • Active right-sidebar with trending topics, leaderboard, friend activity
--}}

<div
    x-data="{
        activeTab: 'all',
        tabs: ['all','reviews','discussion','recommendations','help'],
        posts: [
            {
                id:1, user:'VergilFan99', avatar:'V', color:'from-rose-600 to-red-800',
                time:'2h ago', badge:'Legend', badgeColor:'text-yellow-400',
                game:'Devil May Cry 5', gameColor:'text-[#00A3FF] border-[#00A3FF]/20 bg-[#00A3FF]/10',
                type:'discussion',
                title:'Finally pulled off the Judgement Cut End combo!',
                body:'After hours of practicing in the void, I finally managed to string together four consecutive Judgement Cut Ends. The timing is so insanely strict, but the combat system in this game is an absolute masterpiece.',
                likes:245, comments:32, saves:18, liked:false, saved:false,
                tags:['combat','tips','achievement']
            },
            {
                id:2, user:'RogueKnight', avatar:'R', color:'from-emerald-600 to-teal-800',
                time:'5h ago', badge:'Reviewer', badgeColor:'text-emerald-400',
                game:'Hollow Knight', gameColor:'text-purple-400 border-purple-500/20 bg-purple-500/10',
                type:'reviews',
                title:'If you are on the fence about metroidvanias, play this.',
                body:'I never really understood the hype around the genre until I gave this a shot. The atmosphere, the tight controls, and the lore are just incredible. Do not let the cute bug art style fool you — some of these bosses are brutal.',
                rating: 10,
                likes:890, comments:124, saves:201, liked:false, saved:false,
                tags:['review','indie','metroidvania']
            },
            {
                id:3, user:'NightOwlGamer', avatar:'N', color:'from-indigo-600 to-violet-800',
                time:'8h ago', badge:'Explorer', badgeColor:'text-indigo-400',
                game:'Elden Ring', gameColor:'text-amber-400 border-amber-500/20 bg-amber-500/10',
                type:'discussion',
                title:'Malenia is FromSoftware\'s greatest boss design ever — change my mind.',
                body:'People say she is cheap but I think that is exactly the point. She forces you to learn every single move perfectly. 47 attempts in and when she finally went down, nothing in gaming has ever matched that feeling.',
                likes:1240, comments:388, saves:92, liked:false, saved:false,
                tags:['boss','debate','fromsoftware']
            },
            {
                id:4, user:'PixelWitch', avatar:'P', color:'from-pink-600 to-rose-800',
                time:'12h ago', badge:'Guide Writer', badgeColor:'text-pink-400',
                game:'Baldur\'s Gate 3', gameColor:'text-[#00A3FF] border-[#00A3FF]/20 bg-[#00A3FF]/10',
                type:'help',
                title:'Complete guide: best multiclass combos in Act 1 (no spoilers)',
                body:'Spent the weekend theory-crafting and testing builds. The Sorcerer/Paladin combo is absolutely busted right now. Here is everything you need to know to dominate the early game without any story spoilers.',
                likes:562, comments:78, saves:440, liked:false, saved:false,
                tags:['guide','build','tips']
            },
            {
                id:5, user:'LoreHunter', avatar:'L', color:'from-cyan-600 to-sky-800',
                time:'1d ago', badge:'Lorekeeper', badgeColor:'text-cyan-400',
                game:'The Witcher 3', gameColor:'text-emerald-400 border-emerald-500/20 bg-emerald-500/10',
                type:'discussion',
                title:'The Blood and Wine ending still hits different after all these years.',
                body:'Just finished my third playthrough. The vineyard ending with Yennefer is one of the most perfectly written conclusions in RPG history. CD Projekt Red set a bar that nobody has cleared since.',
                likes:3200, comments:241, saves:178, liked:false, saved:false,
                tags:['story','emotion','rpg']
            },
        ],
        get filteredPosts() {
            if (this.activeTab === 'all') return this.posts;
            return this.posts.filter(p => p.type === this.activeTab);
        },
        toggleLike(post) { post.liked = !post.liked; post.likes += post.liked ? 1 : -1; },
        toggleSave(post) { post.saved = !post.saved; post.saves += post.saved ? 1 : -1; },
        formatNum(n) { return n >= 1000 ? (n/1000).toFixed(1) + 'k' : n; }
    }"
    class="relative min-h-screen overflow-hidden bg-[#05050A] text-white"
>

    {{-- Ambient glow --}}
        <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
        <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="max-w-[1400px] mx-auto px-4 lg:px-8 py-8">

        {{-- ░░░ THREE COLUMN LAYOUT ░░░ --}}
        <div class="grid grid-cols-1 lg:grid-cols-[240px_1fr_300px] gap-6">
            
            <aside class="hidden lg:flex flex-col gap-4">

                {{-- User card --}}
                <div class="rounded-2xl border border-white/[0.07] bg-white/[0.02] overflow-hidden">
                    <div class="h-16 bg-gradient-to-r from-[#00A3FF]/30 via-purple-900/30 to-indigo-900/20"></div>
                    <div class="px-4 pb-4 -mt-6">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#00A3FF] to-purple-600 flex items-center justify-center text-white font-black text-lg border-2 border-[#05050A] mb-3">
                            N
                        </div>
                        <p class="font-black text-white text-sm">Nelann</p>
                        <p class="text-xs text-slate-500 mt-0.5">Explorer · Joined Jan 2024</p>
                        <div class="flex gap-3 mt-3 text-center">
                            <div class="flex-1">
                                <div class="text-sm font-black text-white">142</div>
                                <div class="text-[9px] text-slate-600 uppercase tracking-widest">Posts</div>
                            </div>
                            <div class="w-px bg-white/10"></div>
                            <div class="flex-1">
                                <div class="text-sm font-black text-white">38</div>
                                <div class="text-[9px] text-slate-600 uppercase tracking-widest">Reviews</div>
                            </div>
                            <div class="w-px bg-white/10"></div>
                            <div class="flex-1">
                                <div class="text-sm font-black text-white">2.1k</div>
                                <div class="text-[9px] text-slate-600 uppercase tracking-widest">Likes</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Active communities --}}
                <div class="rounded-2xl border border-white/[0.07] bg-white/[0.02] p-4">
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 mb-3">My Communities</p>
                    <div class="space-y-2">
                        @foreach([
                            ['RPG Lovers','12.4k','bg-indigo-600'],
                            ['Soulsborne','8.1k','bg-red-700'],
                            ['Indie Corner','5.6k','bg-emerald-700'],
                            ['FPS Central','3.2k','bg-orange-700'],
                        ] as [$name,$members,$color])
                        <a href="#" class="flex items-center gap-3 group">
                            <div class="w-7 h-7 rounded-lg {{ $color }} flex items-center justify-center text-[10px] font-black text-white shrink-0">
                                {{ substr($name,0,1) }}
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs font-bold text-white group-hover:text-[#00A3FF] transition-colors truncate">{{ $name }}</p>
                                <p class="text-[10px] text-slate-600">{{ $members }} members</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </aside>

            {{-- ╔══════════════════╗ --}}
            {{-- ║   CENTER FEED    ║ --}}
            {{-- ╚══════════════════╝ --}}
            <main class="min-w-0 space-y-5">

                {{-- Stories / Now Playing strip --}}
                <div>
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 mb-3">Now Playing</p>
                    <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide" style="scrollbar-width:none">
                        {{-- Add your story --}}
                        <div class="shrink-0 flex flex-col items-center gap-2 cursor-pointer group">
                            <div class="w-20 h-20 rounded-2xl bg-white/[0.04] border-2 border-dashed border-white/20 flex items-center justify-center text-slate-400 group-hover:border-[#00A3FF]/50 group-hover:text-[#00A3FF] transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                            </div>
                            <span class="text-[10px] text-slate-500 font-bold text-center leading-tight">Add</span>
                        </div>

                        @php $stories = [
                            ['V','VergilFan99','DMC 5','from-rose-600 to-red-800','https://images.igdb.com/igdb/image/upload/t_cover_big/co1qkx.jpg', true],
                            ['R','RogueKnight','Hollow Knight','from-emerald-600 to-teal-800','https://images.igdb.com/igdb/image/upload/t_cover_big/co3p2d.jpg', true],
                            ['P','PixelWitch','BG3','from-pink-600 to-rose-800','https://images.igdb.com/igdb/image/upload/t_cover_big/co670h.jpg', false],
                            ['L','LoreHunter','Witcher 3','from-cyan-600 to-sky-800','https://images.igdb.com/igdb/image/upload/t_cover_big/co1wyy.jpg', false],
                            ['K','Kairos_VII','Elden Ring','from-violet-600 to-purple-800','https://images.igdb.com/igdb/image/upload/t_cover_big/co4jni.jpg', true],
                            ['S','StellarRey','Hades','from-orange-600 to-amber-800','https://images.igdb.com/igdb/image/upload/t_cover_big/co22l7.jpg', false],
                            ['S','Quagmire','Hades','from-blue-600 to-amber-800','https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/289070/library_600x900.jpg', false],
                        ]; @endphp

                        @foreach($stories as [$init,$uname,$game,$grad,$img,$live])
                        <div class="shrink-0 flex flex-col items-center gap-2 cursor-pointer group">
                            <div class="relative w-20 h-20 rounded-2xl overflow-hidden border-2 {{ $live ? 'border-[#00A3FF]' : 'border-white/10' }} transition-all group-hover:border-white/40">
                                <img src="{{ $img }}" class="w-full h-full object-cover opacity-70 group-hover:opacity-100 transition-all">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-0.5 left-0 right-0 flex justify-center">
                                    <div class="w-5 h-5 rounded-full bg-gradient-to-br {{ $grad }} flex items-center justify-center text-[8px] font-black text-white border border-[#05050A]">{{ $init }}</div>
                                </div>
                                @if($live)
                                <div class="absolute top-1 right-1 w-2 h-2 bg-green-400 rounded-full border border-[#05050A] animate-pulse"></div>
                                @endif
                            </div>
                            <span class="text-[10px] text-slate-500 font-bold text-center leading-tight w-14 truncate">{{ $uname }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Post composer --}}
                <div class="rounded-2xl border border-white/[0.07] bg-white/[0.02] p-5">
                    <div class="flex gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#00A3FF] to-purple-600 flex items-center justify-center text-white font-black text-base shrink-0">N</div>
                        <div class="flex-1">
                            <textarea
                                placeholder="What are you playing? Share an experience, review, or hot take..."
                                class="w-full bg-white/[0.03] border border-white/[0.07] rounded-xl px-4 py-3 text-slate-300 text-sm focus:outline-none focus:border-[#00A3FF]/40 transition-colors resize-none leading-relaxed"
                                rows="3"></textarea>
                            <div class="flex items-center justify-between mt-3 flex-wrap gap-3">
                                <div class="flex items-center gap-1">
                                    @foreach([
                                        ['M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2','Media'],
                                        ['M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z','Tag Game'],
                                        ['M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z','Poll'],
                                    ] as [$path,$label])
                                    <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-slate-500 hover:text-[#00A3FF] hover:bg-[#00A3FF]/10 transition-all text-xs font-bold">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $path }}"/></svg>
                                        {{ $label }}
                                    </button>
                                    @endforeach
                                </div>
                                <button class="bg-[#00A3FF] hover:bg-[#33b5ff] text-[#05050A] font-black text-sm px-6 py-2 rounded-xl transition-all shadow-[0_0_15px_rgba(0,163,255,0.3)]">
                                    Post
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Feed tabs --}}
                <div class="flex items-center gap-1 bg-white/[0.02] border border-white/[0.06] rounded-xl p-1">
                    @foreach(['all'=>'All','reviews'=>'Reviews','discussion'=>'Discussions','recommendations'=>'Recommendations','help'=>'Help & Tips'] as $key=>$label)
                    <button
                        @click="activeTab = '{{ $key }}'"
                        :class="activeTab === '{{ $key }}' ? 'bg-white/10 text-white' : 'text-slate-500 hover:text-slate-300'"
                        class="flex-1 py-2 px-2 rounded-lg text-xs font-black transition-all truncate">
                        {{ $label }}
                    </button>
                    @endforeach
                </div>

                {{-- Post feed --}}
                <div class="space-y-4">
                    <template x-for="post in filteredPosts" :key="post.id">
                        <article class="rounded-2xl border border-white/[0.07] bg-white/[0.02] hover:bg-white/[0.035] transition-all group">
                            {{-- Post header --}}
                            <div class="p-5 pb-3">
                                <div class="flex items-start justify-between gap-3 mb-4">
                                    <div class="flex items-center gap-3">
                                        {{-- Avatar --}}
                                        <div class="relative shrink-0">
                                            <div class="w-10 h-10 rounded-full bg-gradient-to-br flex items-center justify-center text-white font-black text-sm"
                                                 :class="post.color" x-text="post.avatar"></div>
                                            <div class="absolute -bottom-0.5 -right-0.5 w-3.5 h-3.5 bg-green-400 rounded-full border-2 border-[#05050A]"></div>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text-sm font-black text-white" x-text="post.user"></p>
                                                <p class="text-[11px] text-slate-600 mt-0.5" x-text="post.time"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        {{-- Game tag --}}
                                        <span class="text-[10px] font-black px-3 py-1 rounded-full border"
                                              :class="post.gameColor" x-text="'🎮 ' + post.game"></span>
                                        {{-- More button --}}
                                        <button class="w-7 h-7 rounded-lg flex items-center justify-center text-slate-600 hover:text-white hover:bg-white/10 transition-all">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><circle cx="5" cy="12" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="19" cy="12" r="2"/></svg>
                                        </button>
                                    </div>
                                </div>

                                {{-- Post content --}}

                                <h3 class="text-base font-black text-white mb-2 leading-snug group-hover:text-[#00A3FF] transition-colors" x-text="post.title"></h3>
                                <p class="text-sm text-slate-400 leading-relaxed line-clamp-3" x-text="post.body"></p>

                                {{-- Tags --}}
                                <div class="flex gap-2 flex-wrap mt-3">
                                    <template x-for="tag in post.tags" :key="tag">
                                        <span class="text-[10px] text-slate-600 hover:text-slate-400 cursor-pointer transition-colors font-bold" x-text="'#' + tag"></span>
                                    </template>
                                </div>
                            </div>

                            {{-- Action bar --}}
                            <div class="flex items-center gap-1 px-4 py-3 border-t border-white/[0.05]">
                                {{-- Like --}}
                                <button @click="toggleLike(post)"
                                        :class="post.liked ? 'text-[#00A3FF] bg-[#00A3FF]/10' : 'text-slate-500 hover:text-[#00A3FF] hover:bg-[#00A3FF]/10'"
                                        class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-xs font-black transition-all">
                                    <svg class="w-4 h-4" :fill="post.liked ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                    </svg>
                                    <span x-text="formatNum(post.likes)"></span>
                                </button>

                                {{-- Comment --}}
                                <button class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-xs font-black text-slate-500 hover:text-white hover:bg-white/[0.06] transition-all">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                    <span x-text="post.comments"></span>
                                </button>

                                {{-- Save --}}
                                <button @click="toggleSave(post)"
                                        :class="post.saved ? 'text-yellow-400 bg-yellow-400/10' : 'text-slate-500 hover:text-yellow-400 hover:bg-yellow-400/10'"
                                        class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-xs font-black transition-all">
                                    <svg class="w-4 h-4" :fill="post.saved ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                                    <span x-text="formatNum(post.saves)"></span>
                                </button>

                                {{-- Share --}}
                                <button class="flex items-center gap-1.5 px-3 py-2 rounded-lg text-xs font-black text-slate-500 hover:text-emerald-400 hover:bg-emerald-400/10 transition-all ml-auto">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                                    Share
                                </button>
                            </div>
                        </article>
                    </template>

                    {{-- Empty state --}}
                    <div x-show="filteredPosts.length === 0" class="text-center py-16 rounded-2xl border border-white/[0.06] bg-white/[0.01]">
                        <p class="text-white font-bold">No posts yet</p>
                        <p class="text-slate-500 text-sm mt-1">Be the first to post in this category.</p>
                    </div>

                    {{-- Load more --}}
                    <button class="w-full py-3.5 rounded-xl border border-white/[0.06] text-sm font-black text-slate-500 hover:text-white hover:border-white/20 hover:bg-white/[0.03] transition-all">
                        Load more posts
                    </button>
                </div>
            </main>

            {{-- ╔══════════════════╗ --}}
            {{-- ║  RIGHT SIDEBAR   ║ --}}
            {{-- ╚══════════════════╝ --}}
            <aside class="hidden lg:flex flex-col gap-4">
                <div class="sticky top-6 space-y-4">

                    {{-- Search --}}
                    <div class="relative">
                        <input type="text" placeholder="Search community..."
                               class="w-full bg-white/[0.03] border border-white/[0.07] rounded-xl pl-10 pr-4 py-2.5 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-[#00A3FF]/40 transition-all">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 115 11a6 6 0 0112 0z"/></svg>
                    </div>


                    {{-- Trending games --}}
                    <div class="rounded-2xl border border-white/[0.07] bg-white/[0.02] p-5">
                        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 mb-4">Trending in Community</p>
                        <div class="space-y-3">
                            @foreach([
                                ['The Witcher 3','4.2k discussions','text-indigo-400','co1wyy'],
                                ['Elden Ring','3.8k discussions','text-amber-400','co4jni'],
                                ["Baldur's Gate 3",'2.1k discussions','text-[#00A3FF]','co670h'],
                                ['Cyberpunk 2077','1.9k discussions','text-yellow-400','co2mvt'],
                                ['Hollow Knight','1.2k discussions','text-purple-400','co3p2d'],
                            ] as $i => [$name,$disc,$color,$img])
                            <a href="#" class="flex items-center gap-3 group">
                                <span class="text-[10px] font-black text-slate-700 w-4 text-right shrink-0">{{ $i+1 }}</span>
                                <img src="https://images.igdb.com/igdb/image/upload/t_cover_small/{{ $img }}.jpg"
                                     class="w-8 h-10 rounded-lg object-cover border border-white/10 shrink-0">
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-black text-white group-hover:{{ $color }} transition-colors truncate">{{ $name }}</p>
                                    <p class="text-[10px] text-slate-600 mt-0.5">{{ $disc }}</p>
                                </div>
                                <svg class="w-3 h-3 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/></svg>
                            </a>
                            @endforeach
                        </div>
                    </div>

                    {{-- Top Contributors --}}
                    <div class="rounded-2xl border border-white/[0.07] bg-white/[0.02] p-5">
                        <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 mb-4">Top Contributors</p>
                        <div class="space-y-3">
                            @foreach([
                                ['RPG_Master','142 posts','from-indigo-600 to-violet-700','R','text-yellow-400',''],
                                ['LoreHunter','98 posts','from-cyan-600 to-sky-700','L','text-slate-400',''],
                                ['AlexGamer99','76 posts','from-rose-600 to-red-700','A','text-amber-600',''],
                                ['PixelWitch','61 posts','from-pink-600 to-rose-700','P','text-slate-500',''],
                                ['voidrunner','54 posts','from-slate-600 to-gray-700','V','text-slate-500',''],
                            ] as [$name,$posts,$grad,$init,$rankColor,$medal])
                            <div class="flex items-center gap-3 group cursor-pointer">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br {{ $grad }} flex items-center justify-center text-[11px] font-black text-white shrink-0">
                                    {{ $init }}
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-black text-white group-hover:text-[#00A3FF] transition-colors truncate">{{ $medal }} {{ $name }}</p>
                                    <p class="text-[10px] text-slate-600">{{ $posts }}</p>
                                </div>
                                <button class="text-[10px] font-black px-2 py-1 rounded-lg border border-white/[0.07] text-slate-500 hover:text-white hover:border-white/20 transition-all">
                                    Follow
                                </button>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </aside>

        </div>
    </div>
</div>

</x-layouts.app>