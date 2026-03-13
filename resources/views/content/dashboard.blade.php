@extends('content.layouts.app')

@section('title', 'Dashboard | TaskMaster')
@section('page_title', 'Dashboard')

@section('content')
    <div class="max-w-[1280px] mx-auto">
        {{-- Stats Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="material-symbols-outlined p-2 bg-primary/10 text-primary rounded-lg">assignment</span>
                    <span class="text-emerald-500 text-xs font-bold bg-emerald-500/10 px-2 py-1 rounded">+12%</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Tasks</p>
                <p class="text-3xl font-bold text-slate-900 dark:text-white mt-1">124</p>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="material-symbols-outlined p-2 bg-emerald-500/10 text-emerald-500 rounded-lg">check_circle</span>
                    <span class="text-emerald-500 text-xs font-bold bg-emerald-500/10 px-2 py-1 rounded">+8%</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Completed</p>
                <p class="text-3xl font-bold text-slate-900 dark:text-white mt-1">86</p>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="material-symbols-outlined p-2 bg-amber-500/10 text-amber-500 rounded-lg">pending</span>
                    <span class="text-rose-500 text-xs font-bold bg-rose-500/10 px-2 py-1 rounded">-5%</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Pending</p>
                <p class="text-3xl font-bold text-slate-900 dark:text-white mt-1">23</p>
            </div>
            <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <span class="material-symbols-outlined p-2 bg-rose-500/10 text-rose-500 rounded-lg">error</span>
                    <span class="text-rose-500 text-xs font-bold bg-rose-500/10 px-2 py-1 rounded">+2%</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Overdue</p>
                <p class="text-3xl font-bold text-slate-900 dark:text-white mt-1">15</p>
            </div>
        </div>

        {{-- Recent Tasks Table --}}
        <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white">Recent Tasks</h3>
                <button class="text-primary text-sm font-semibold hover:underline">View All</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                        <tr>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Task Title</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Priority</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Due Date</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <p class="text-sm font-medium text-slate-900 dark:text-white">Design System Update</p>
                                <p class="text-xs text-slate-500">UI/UX Project</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 dark:bg-emerald-900/30 text-emerald-800 dark:text-emerald-400">Completed</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-100 dark:bg-rose-900/30 text-rose-800 dark:text-rose-400">High</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 24, 2023</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <p class="text-sm font-medium text-slate-900 dark:text-white">API Integration</p>
                                <p class="text-xs text-slate-500">Backend Development</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 dark:bg-amber-900/30 text-amber-800 dark:text-amber-400">Pending</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-400">Medium</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 26, 2023</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <p class="text-sm font-medium text-slate-900 dark:text-white">User Testing</p>
                                <p class="text-xs text-slate-500">QA Research</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-100 dark:bg-rose-900/30 text-rose-800 dark:text-rose-400">Overdue</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-100 dark:bg-rose-900/30 text-rose-800 dark:text-rose-400">High</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 20, 2023</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">
                            <td class="px-6 py-4">
                                <p class="text-sm font-medium text-slate-900 dark:text-white">Mobile App Wireframes</p>
                                <p class="text-xs text-slate-500">UX Design</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 dark:bg-amber-900/30 text-amber-800 dark:text-amber-400">Pending</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-300">Low</span>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 30, 2023</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                                    <span class="material-symbols-outlined">more_vert</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection