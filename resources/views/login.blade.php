@include('layouts.guest')  
<body class="min-h-screen bg-slate-950 text-slate-100">
    <div class="flex min-h-screen items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-4xl overflow-hidden rounded-[32px] bg-slate-900/90 shadow-2xl ring-1 ring-white/10 backdrop-blur-xl">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="relative hidden lg:block">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(99,102,241,0.3),_transparent_40%),linear-gradient(180deg,_rgba(15,23,42,0.95),_rgba(15,23,42,0.95))]"></div>
                    <div class="relative flex h-full flex-col justify-between p-10 text-slate-100">
                        <div>
                            <h1 class="text-4xl font-semibold tracking-tight">Welcome back</h1>
                            <p class="mt-4 max-w-md text-lg text-slate-300">Sign in to continue exploring the latest collections, manage your wishlist, and access your account dashboard.</p>
                        </div>
                        <div class="mt-8 rounded-3xl border border-white/10 bg-white/5 p-6">
                            <p class="text-sm uppercase tracking-[0.24em] text-slate-400">New here?</p>
                            <p class="mt-3 text-xl font-semibold">Create an account and get 10% off your first purchase.</p>
                            <a href="/registratrion" class="mt-6 inline-flex w-full items-center justify-center rounded-2xl bg-indigo-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-indigo-500">Create account</a>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-950 p-8 sm:p-10 lg:p-12">
                    <div class="mx-auto max-w-md">
                        <div class="mb-8 text-center lg:text-left">
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-400">Login</p>
                            <h2 class="mt-4 text-3xl font-semibold text-white">Access your account</h2>
                            <p class="mt-3 text-sm leading-6 text-slate-400">Enter your details below to sign in securely.</p>
                        </div>

                        <form action="#" method="POST" class="space-y-6">
                            <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-5 shadow-inner shadow-slate-950/20">
                                <label for="email" class="mb-2 block text-sm font-medium text-slate-300">Email address</label>
                                <input type="email" name="email" id="email" placeholder="you@example.com" required
                                    class="w-full rounded-2xl border border-slate-800 bg-slate-950 px-4 py-3 text-slate-100 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20" />
                            </div>

                            <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-5 shadow-inner shadow-slate-950/20">
                                <label for="password" class="mb-2 block text-sm font-medium text-slate-300">Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter your password" required
                                    class="w-full rounded-2xl border border-slate-800 bg-slate-950 px-4 py-3 text-slate-100 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20" />
                            </div>

                            <div class="flex items-center justify-between text-sm text-slate-400">
                                <label class="inline-flex items-center gap-x-2">
                                    <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-700 bg-slate-800 text-indigo-500 focus:ring-indigo-500" />
                                    Remember me
                                </label>
                                <a href="#" class="font-medium text-indigo-400 hover:text-indigo-300">Forgot password?</a>
                            </div>

                            <button type="submit"
                                class="inline-flex w-full items-center justify-center rounded-2xl bg-indigo-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500/30">Sign in</button>
                        </form>

                        <div class="mt-8 border-t border-slate-800 pt-6 text-center text-sm text-slate-500">
                            <p>Secure login powered by modern UI design. No backend required yet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
