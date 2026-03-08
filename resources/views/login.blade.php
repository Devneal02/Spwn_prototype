<x-layouts.app title="Login - Spwn">
    
    <div class="fixed top-0 right-0 w-[800px] h-[800px] bg-indigo-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[600px] h-[600px] bg-purple-900/10 rounded-full blur-[150px] pointer-events-none mix-blend-screen -z-10"></div>

    <div class="min-h-[80vh] flex items-center justify-center px-6 relative z-10">
        
        <div class="w-full max-w-md bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-xl shadow-2xl">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-black text-white tracking-tight mb-2">Welcome Back</h1>
                <p class="text-slate-400 text-sm">Log in to review games and manage your backlog.</p>
            </div>

            <form class="space-y-5">
                <div>
                    <label class="block text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Email Address</label>
                    <input type="email" value="gamer@example.com" class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#00A3FF] transition-colors">
                </div>
                <div>
                    <label class="block text-xs font-bold tracking-widest uppercase text-slate-500 mb-2">Password</label>
                    <input type="password" value="password123" class="w-full bg-black/40 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-[#00A3FF] transition-colors">
                </div>
                
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-slate-400 cursor-pointer">
                        <input type="checkbox" class="rounded bg-black/40 border-white/10 text-[#00A3FF] focus:ring-[#00A3FF]">
                        Remember me
                    </label>
                    <a href="#" class="text-[#00A3FF] hover:text-white transition-colors">Forgot Password?</a>
                </div>

                <button type="button" class="w-full bg-[#00A3FF] hover:bg-[#33b5ff] text-[#05050A] font-bold py-3.5 rounded-xl transition-colors shadow-[0_0_20px_rgba(0,163,255,0.3)]">
                    Sign In
                </button>
            </form>

            <p class="text-center text-slate-400 text-sm mt-6">
                Don't have an account? <a href="/signup" class="text-[#00A3FF] font-bold hover:text-white transition-colors">Sign up</a>
            </p>
        </div>
    </div>
</x-layouts.app>