@extends('auth.layouts.app')

@section('title', 'Login | TaskMaster')

@section('content')
    <div class="w-full max-w-[480px] bg-white dark:bg-slate-900 rounded-xl shadow-xl border border-slate-200 dark:border-slate-800 overflow-hidden">
        <div class="h-48 w-full relative overflow-hidden" style="background-image: linear-gradient(135deg, #1349ec 0%, #4f7df5 100%);">
            <div class="absolute inset-0 opacity-20 flex items-center justify-center">
                <span class="material-symbols-outlined text-[120px] text-white">
                    task_alt
                </span>
            </div>
        </div>
        <div class="p-8 md:p-10">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100">Sign in to your account</h1>
                <p class="mt-2 text-slate-500 dark:text-slate-400">Enter your credentials to access your workspace</p>
            </div>
            <form class="space-y-6" method="POST" action="/login">
                @csrf

                {{-- Flash error từ controller --}}
                @if(session('error'))
                    <div class="flex items-center gap-3 bg-red-50 border border-red-200 text-red-700 rounded-lg px-4 py-3 text-sm">
                        <span class="material-symbols-outlined text-lg">error</span>
                        {{ session('error') }}
                    </div>
                @endif
                @if(session('success'))
                    <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 rounded-lg px-4 py-3 text-sm">
                        <span class="material-symbols-outlined text-lg">check_circle</span>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="space-y-2">
                    <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="email">
                        Email address
                    </label>
                    <div class="relative">
                        <input class="w-full h-12 px-4 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-slate-400" id="email" name="email" placeholder="name@company.com" required="" type="email" value="{{ old('email') }}" />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300" for="password">
                            Password
                        </label>
                        <a class="text-xs font-semibold text-primary hover:underline" href="#">Forgot password?</a>
                    </div>
                    <div class="relative flex items-center">
                        <input class="w-full h-12 pl-4 pr-12 rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-primary focus:border-primary transition-all placeholder:text-slate-400" id="password" name="password" placeholder="••••••••" required="" type="password" />
                        <button class="absolute right-4 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200" type="button">
                            <span class="material-symbols-outlined text-xl">visibility</span>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center">
                    <input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary" id="remember-me" name="remember" type="checkbox" />
                    <label class="ml-2 block text-sm text-slate-600 dark:text-slate-400" for="remember-me">
                        Remember me for 30 days
                    </label>
                </div>
                <button class="w-full h-12 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-colors shadow-lg shadow-primary/20 flex items-center justify-center gap-2" type="submit">
                    <span>Sign In</span>
                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                </button>
            </form>
            <div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 text-center">
                <p class="text-sm text-slate-600 dark:text-slate-400">
                    Don't have an account?
                    <a class="font-bold text-primary hover:underline ml-1" href="/register">Register for free</a>
                </p>
            </div>
        </div>
    </div>
@endsection