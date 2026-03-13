@extends('content.layouts.app')

@section('title', 'Profile Settings | TaskMaster')
@section('page_title', 'Profile Settings')

@section('content')
    <div class="max-w-[1280px] mx-auto flex gap-8">
        {{-- Settings Sidebar --}}
        <aside class="hidden w-56 flex-shrink-0 flex-col gap-2 md:flex">
            <div class="mb-4 px-3 text-xs font-semibold uppercase tracking-wider text-slate-400">Personal</div>
            <a class="flex items-center gap-3 rounded-lg bg-primary px-3 py-2.5 text-white" href="/profile">
                <span class="material-symbols-outlined">person</span>
                <span class="text-sm font-medium">Profile Details</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/5 hover:text-primary" href="#">
                <span class="material-symbols-outlined">lock</span>
                <span class="text-sm font-medium">Security</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/5 hover:text-primary" href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="text-sm font-medium">Billing &amp; Plans</span>
            </a>
            <div class="my-4 px-3 text-xs font-semibold uppercase tracking-wider text-slate-400">Experience</div>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/5 hover:text-primary" href="#">
                <span class="material-symbols-outlined">notifications_active</span>
                <span class="text-sm font-medium">Notifications</span>
            </a>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-primary/5 hover:text-primary" href="#">
                <span class="material-symbols-outlined">palette</span>
                <span class="text-sm font-medium">Appearance</span>
            </a>
        </aside>

        {{-- Main Content --}}
        <div class="flex flex-1 flex-col gap-8 overflow-hidden">
            {{-- Profile Header Card --}}
            <section class="rounded-xl border border-primary/10 bg-white dark:bg-slate-900 p-6 shadow-sm">
                <div class="flex flex-col items-center gap-6 sm:flex-row">
                    <div class="relative group">
                        <div class="size-24 rounded-full border-4 border-primary/20 bg-cover bg-center shadow-lg" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB1L1x-AOkKl4NutitfbkvGX8Tvn_YyZEFV5IrrmzjAB63U4u7f9VVxN54aKn-tqHpVHxCJ1q7hLFJ5X2ig5jdsW6O_FPjrRUJRP0lriUK38wTLt92vFiJ4gZ00LP7hHjJHLD97b1Kjj4_QOgTNWabHMrA_2kU7LFQinPr_IisL7qnJsA1cTL6xZBXUwJI5Ln7mQUt3iorJo4vS9H0FkjyIH1no8mu2bmeId3n-VbGQbkioWkPbJFI5j4_zJGMmlrIgkw0YwsTZoWc')"></div>
                        <button class="absolute bottom-0 right-0 flex size-8 items-center justify-center rounded-full bg-primary text-white shadow-md hover:scale-105 transition-transform">
                            <span class="material-symbols-outlined text-lg">photo_camera</span>
                        </button>
                    </div>
                    <div class="flex flex-1 flex-col text-center sm:text-left">
                        <h1 class="text-2xl font-bold">Alex Johnson</h1>
                        <p class="text-slate-500">Senior Product Designer &middot; San Francisco, CA</p>
                        <div class="mt-3 flex flex-wrap justify-center gap-2 sm:justify-start">
                            <span class="inline-flex items-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-xs font-medium text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-400">Verified Professional</span>
                            <span class="inline-flex items-center rounded-full bg-primary/10 px-2.5 py-0.5 text-xs font-medium text-primary">Pro Account</span>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button class="rounded-lg bg-primary px-4 py-2 text-sm font-bold text-white hover:bg-primary/90">Public View</button>
                    </div>
                </div>
            </section>

            {{-- Update Profile Form --}}
            <section class="rounded-xl border border-primary/10 bg-white dark:bg-slate-900 shadow-sm">
                <div class="border-b border-primary/10 px-6 py-4">
                    <h3 class="text-lg font-semibold">General Information</h3>
                    <p class="text-sm text-slate-500">Update your public profile information here.</p>
                </div>
                <div class="p-6">
                    <form class="grid grid-cols-1 gap-6 md:grid-cols-2" method="POST" action="/profile">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Display Name</label>
                            <input class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20" name="name" type="text" value="Alex Johnson" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Email Address</label>
                            <input class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20" name="email" type="email" value="alex.j@example.com" />
                        </div>
                        <div class="flex flex-col gap-2 md:col-span-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Professional Bio</label>
                            <textarea class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20" name="bio" rows="4">Product designer focusing on user-centric web applications and interface systems. 10 years experience in SaaS design.</textarea>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Timezone</label>
                            <select class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20" name="timezone">
                                <option>Pacific Time (PT) - UTC-8:00</option>
                                <option>Eastern Time (ET) - UTC-5:00</option>
                                <option>London (GMT) - UTC+0:00</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Role</label>
                            <input class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-100 dark:bg-slate-950 px-4 py-2.5 text-sm text-slate-400 cursor-not-allowed" disabled type="text" value="Team Administrator" />
                        </div>
                        <div class="flex justify-end pt-4 md:col-span-2">
                            <button class="rounded-lg bg-primary px-6 py-2.5 text-sm font-bold text-white hover:bg-primary/90" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </section>

            {{-- Change Password Form --}}
            <section class="rounded-xl border border-primary/10 bg-white dark:bg-slate-900 shadow-sm">
                <div class="border-b border-primary/10 px-6 py-4">
                    <h3 class="text-lg font-semibold text-rose-600 dark:text-rose-400">Security &amp; Password</h3>
                    <p class="text-sm text-slate-500">Ensure your account is using a long, random password to stay secure.</p>
                </div>
                <div class="p-6">
                    <form class="flex flex-col gap-6 max-w-xl" method="POST" action="/profile/password">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Current Password</label>
                            <div class="relative">
                                <input class="w-full rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20" name="current_password" placeholder="••••••••" type="password" />
                                <button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400" type="button">
                                    <span class="material-symbols-outlined text-lg">visibility</span>
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-slate-700 dark:text-slate-300">New Password</label>
                                <input class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20" name="password" type="password" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Confirm New Password</label>
                                <input class="rounded-lg border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20" name="password_confirmation" type="password" />
                            </div>
                        </div>
                        <div class="flex justify-start">
                            <button class="rounded-lg bg-rose-600 px-6 py-2.5 text-sm font-bold text-white hover:bg-rose-700" type="submit">Update Password</button>
                        </div>
                    </form>
                </div>
            </section>

            {{-- Danger Zone --}}
            <section class="rounded-xl border border-rose-200 bg-rose-50 dark:border-rose-900/50 dark:bg-rose-950/20 p-6">
                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                    <div>
                        <h3 class="text-lg font-bold text-rose-800 dark:text-rose-400">Danger Zone</h3>
                        <p class="text-sm text-rose-700/70 dark:text-rose-400/70">Permanently delete your account and all associated data.</p>
                    </div>
                    <button class="rounded-lg border border-rose-600 bg-transparent px-4 py-2 text-sm font-bold text-rose-600 hover:bg-rose-600 hover:text-white">Delete Account</button>
                </div>
            </section>
        </div>
    </div>
@endsection