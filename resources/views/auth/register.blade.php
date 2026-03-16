@extends('auth.layouts.app')

@section('title', 'Register | TaskMaster')

@section('content')
    <div class="w-full max-w-[480px] bg-white dark:bg-slate-900/50 p-8 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800">
        <div class="text-center mb-8">
            <h1 class="text-slate-900 dark:text-slate-100 text-3xl font-bold leading-tight mb-2">Create your account</h1>
            <p class="text-slate-600 dark:text-slate-400 text-base font-normal">Join thousands of teams managing tasks efficiently.</p>
        </div>
        <form class="space-y-5" method="POST" action="/register">
            @csrf

            {{-- Flash messages --}}
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

            {{-- Full Name --}}
            <div class="flex flex-col gap-2">
                <label class="text-slate-700 dark:text-slate-300 text-sm font-medium" for="name">Full Name</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">person</span>
                    <input class="flex w-full rounded-lg text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 h-12 pl-10 pr-4 placeholder:text-slate-400 text-base transition-all" id="name" name="name" placeholder="John Doe" type="text" value="{{ old('name') }}" />
                </div>
                @error('name')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Email --}}
            <div class="flex flex-col gap-2">
                <label class="text-slate-700 dark:text-slate-300 text-sm font-medium" for="email">Email Address</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">mail</span>
                    <input class="flex w-full rounded-lg text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 h-12 pl-10 pr-4 placeholder:text-slate-400 text-base transition-all" id="email" name="email" placeholder="name@company.com" type="email" value="{{ old('email') }}" />
                </div>
                @error('email')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Password --}}
            <div class="flex flex-col gap-2">
                <label class="text-slate-700 dark:text-slate-300 text-sm font-medium" for="password">Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock</span>
                    <input class="flex w-full rounded-lg text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 h-12 pl-10 pr-4 placeholder:text-slate-400 text-base transition-all" id="password" name="password" placeholder="••••••••" type="password" />
                </div>
                @error('password')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            {{-- Confirm Password --}}
            <div class="flex flex-col gap-2">
                <label class="text-slate-700 dark:text-slate-300 text-sm font-medium" for="password_confirmation">Confirm Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">lock_reset</span>
                    <input class="flex w-full rounded-lg text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 h-12 pl-10 pr-4 placeholder:text-slate-400 text-base transition-all" id="password_confirmation" name="password_confirmation" placeholder="••••••••" type="password" />
                </div>
            </div>
            <div class="pt-2">
                <button class="w-full flex items-center justify-center rounded-lg h-12 bg-primary text-white text-base font-bold hover:bg-blue-700 shadow-lg shadow-primary/20 transition-all active:scale-[0.98]" type="submit">
                    Create Account
                </button>
            </div>
            <div class="flex items-center justify-center gap-2 pt-4">
                <span class="text-slate-500 dark:text-slate-400 text-sm">Already have an account?</span>
                <a class="text-primary text-sm font-bold hover:underline" href="/login">Sign in instead</a>
            </div>
        </form>
    </div>
@endsection