<aside class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col shrink-0 fixed h-full">
    <div class="p-6">
        <div class="flex items-center gap-2 text-primary">
            <span class="material-symbols-outlined text-3xl font-bold">task_alt</span>
            <h1 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">TaskMaster</h1>
        </div>
        <p class="text-slate-500 dark:text-slate-400 text-xs mt-1 ml-9">SaaS Management</p>
    </div>
    <nav class="flex-1 px-4 space-y-1 mt-2">
        <a href="/dashboard"
           class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors
                  {{ request()->is('dashboard') ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-sm font-medium">Dashboard</span>
        </a>
        <a href="/tasks"
           class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors
                  {{ request()->is('tasks') || request()->is('tasks/*') ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
            <span class="material-symbols-outlined">assignment</span>
            <span class="text-sm font-medium">Tasks</span>
        </a>
        <a href="/tasks/create"
           class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors
                  {{ request()->is('tasks/create') ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
            <span class="material-symbols-outlined">add_box</span>
            <span class="text-sm font-medium">Create Task</span>
        </a>
        <a href="/profile"
           class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors
                  {{ request()->is('profile') ? 'bg-primary text-white' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
            <span class="material-symbols-outlined">person</span>
            <span class="text-sm font-medium">Profile</span>
        </a>
    </nav>
    <div class="p-4 border-t border-slate-200 dark:border-slate-800">
        <a href="/logout"
           class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-red-50 dark:hover:bg-red-900/20 hover:text-red-600 transition-colors">
            <span class="material-symbols-outlined">logout</span>
            <span class="text-sm font-medium">Logout</span>
        </a>
    </div>
</aside>
