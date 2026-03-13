@extends('content.layouts.app')

@section('title', 'Tasks | TaskMaster')
@section('page_title', 'Task Management')

@section('content')
    <div class="max-w-[1280px] mx-auto space-y-6">
        {{-- Toolbar --}}
        <div class="flex flex-col md:flex-row gap-4 items-center justify-between bg-white dark:bg-slate-900 p-4 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800">
            <div class="flex flex-1 items-center gap-4 w-full">
                <div class="relative flex-1 max-w-md">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                    <input class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-slate-500" placeholder="Search tasks, IDs, or titles..." type="text" />
                </div>
                <button class="flex items-center gap-2 px-4 py-2 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">filter_list</span>
                    Filter
                    <span class="material-symbols-outlined text-[16px]">expand_more</span>
                </button>
            </div>
            <a href="/tasks/create" class="flex items-center gap-2 px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold shadow-lg shadow-primary/20 hover:brightness-110 transition-all shrink-0">
                <span class="material-symbols-outlined">add</span>
                Create Task
            </a>
        </div>

        {{-- Quick Filters --}}
        <div class="flex items-center gap-2 overflow-x-auto pb-2">
            <button class="px-4 py-1.5 rounded-full bg-primary text-white text-xs font-semibold">All Tasks</button>
            <button class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-xs font-semibold border border-slate-200 dark:border-slate-800 hover:border-primary transition-colors">In Progress</button>
            <button class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-xs font-semibold border border-slate-200 dark:border-slate-800 hover:border-primary transition-colors">High Priority</button>
            <button class="px-4 py-1.5 rounded-full bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-xs font-semibold border border-slate-200 dark:border-slate-800 hover:border-primary transition-colors">Overdue</button>
        </div>

        {{-- Data Table --}}
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-800">
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Priority</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Due Date</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-5 text-sm font-medium text-slate-400">#1024</td>
                            <td class="px-6 py-5 text-sm font-semibold text-slate-900 dark:text-slate-100">Update API Documentation</td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">In Progress</span></td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-rose-100 text-rose-700 dark:bg-rose-900/30 dark:text-rose-400">High</span></td>
                            <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Oct 24, 2023</td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-rose-500 transition-colors"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-5 text-sm font-medium text-slate-400">#1025</td>
                            <td class="px-6 py-5 text-sm font-semibold text-slate-900 dark:text-slate-100">Auth Module Refactoring</td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-400">Pending</span></td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400">Medium</span></td>
                            <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Oct 26, 2023</td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-rose-500 transition-colors"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-5 text-sm font-medium text-slate-400">#1026</td>
                            <td class="px-6 py-5 text-sm font-semibold text-slate-900 dark:text-slate-100">Fix Login UI Breakage</td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400">Completed</span></td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-rose-100 text-rose-700 dark:bg-rose-900/30 dark:text-rose-400">High</span></td>
                            <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Oct 20, 2023</td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-rose-500 transition-colors"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-5 text-sm font-medium text-slate-400">#1027</td>
                            <td class="px-6 py-5 text-sm font-semibold text-slate-900 dark:text-slate-100">Client Sync Meeting</td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400">In Progress</span></td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-400">Low</span></td>
                            <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Oct 28, 2023</td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-rose-500 transition-colors"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-5 text-sm font-medium text-slate-400">#1028</td>
                            <td class="px-6 py-5 text-sm font-semibold text-slate-900 dark:text-slate-100">Integrate Stripe Webhooks</td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-400">Pending</span></td>
                            <td class="px-6 py-5"><span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-medium bg-rose-100 text-rose-700 dark:bg-rose-900/30 dark:text-rose-400">High</span></td>
                            <td class="px-6 py-5 text-sm text-slate-600 dark:text-slate-400">Nov 02, 2023</td>
                            <td class="px-6 py-5 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-1.5 text-slate-400 hover:text-rose-500 transition-colors"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- Pagination --}}
            <div class="px-6 py-4 flex items-center justify-between bg-slate-50 dark:bg-slate-800/50 border-t border-slate-200 dark:border-slate-800">
                <p class="text-sm text-slate-500 dark:text-slate-400">Showing 1 to 5 of 42 results</p>
                <div class="flex items-center gap-1">
                    <button class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg hover:bg-white dark:hover:bg-slate-800 transition-colors disabled:opacity-50">
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </button>
                    <button class="w-8 h-8 flex items-center justify-center bg-primary text-white text-sm font-bold rounded-lg">1</button>
                    <button class="w-8 h-8 flex items-center justify-center text-slate-600 dark:text-slate-400 text-sm font-medium rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">2</button>
                    <button class="w-8 h-8 flex items-center justify-center text-slate-600 dark:text-slate-400 text-sm font-medium rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">3</button>
                    <span class="px-1 text-slate-400">...</span>
                    <button class="w-8 h-8 flex items-center justify-center text-slate-600 dark:text-slate-400 text-sm font-medium rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">12</button>
                    <button class="p-2 border border-slate-200 dark:border-slate-700 rounded-lg hover:bg-white dark:hover:bg-slate-800 transition-colors">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection