<header class="h-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 sticky top-0 z-10">
    <div class="flex items-center gap-8 flex-1">
        <h2 class="text-lg font-semibold text-slate-900 dark:text-white">@yield('page_title', 'Dashboard')</h2>
        <div class="relative w-full max-w-md">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xl">search</span>
            <input class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/50 text-slate-900 dark:text-slate-100" placeholder="Search tasks, projects..." type="text" />
        </div>
    </div>
    <div class="flex items-center gap-4">
        <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg relative">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-900"></span>
        </button>
        <div class="h-8 w-px bg-slate-200 dark:border-slate-700 mx-2"></div>
        <div class="flex items-center gap-3">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-medium text-slate-900 dark:text-white leading-none">Alex Rivera</p>
                <p class="text-xs text-slate-500 mt-1">Admin Account</p>
            </div>
            <div class="h-10 w-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-sm border-2 border-primary/20">
                AR
            </div>
        </div>
    </div>
</header>
