@extends('content.layouts.app')

@section('title', 'Edit Task | TaskMaster')
@section('page_title', 'Edit Task')

@section('content')
    <div class="max-w-[1280px] mx-auto w-full">
        {{-- Breadcrumbs --}}
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-6">
            <a class="hover:text-primary" href="/dashboard">Home</a>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <a class="hover:text-primary" href="/tasks">Tasks</a>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <span class="text-slate-900 dark:text-slate-100 font-medium">Edit Task</span>
        </nav>

        {{-- Page Title --}}
        <div class="mb-8">
            <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight">Edit Task</h2>
            <p class="text-slate-600 dark:text-slate-400 mt-1">Update the details of your existing task.</p>
        </div>

        {{-- Main Form Card --}}
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
            {{-- Task Cover Image --}}
            <div class="h-48 w-full bg-slate-200 dark:bg-slate-800 relative">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDg2wZwSltALHN5KFwbp5ndTDbxBhwOwajVw-BiuD5lixgA48_eEgmxZYsB_M4ZSGq1EPPvktkT6rP2h1Ic377zCPW1WTby2t2x2NjggK5HHfgn7dwP6wjURsWV_dWLcEMns7_RYsAEDUaSwB1DF_FQFQoFu1oG0ZYgevL_tPDxXV95tilFR1KHbN3g5ncQBQRYhQOi5eNUzFvZl3pXa3RZ2ajyqW8izeoLFnmGR2BhfWy8CFWwwyz-IzZzTH8MXKw2FFORUr2P_qE')"></div>
                <div class="absolute bottom-4 right-4">
                    <button class="bg-white/90 backdrop-blur dark:bg-slate-900/90 text-slate-900 dark:text-white px-3 py-1.5 rounded-lg text-xs font-semibold flex items-center gap-2 shadow-lg">
                        <span class="material-symbols-outlined text-sm">photo_camera</span>
                        Change Cover
                    </button>
                </div>
            </div>
            <div class="p-8">
                <form class="space-y-6" method="POST" action="/tasks/1">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Task Name --}}
                        <div class="col-span-2">
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Task Title</label>
                            <input class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 rounded-lg px-4 py-2.5 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="title" type="text" value="Redesign Landing Page" />
                        </div>
                        {{-- Description --}}
                        <div class="col-span-2">
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Description</label>
                            <textarea class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 rounded-lg px-4 py-2.5 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="description" rows="4">Update the homepage with new hero assets and improve the conversion funnel for the Q4 campaign. Needs to be mobile responsive and accessibility compliant.</textarea>
                        </div>
                        {{-- Status --}}
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Status</label>
                            <select class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 rounded-lg px-4 py-2.5 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="status">
                                <option>To Do</option>
                                <option selected>In Progress</option>
                                <option>In Review</option>
                                <option>Completed</option>
                            </select>
                        </div>
                        {{-- Priority --}}
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Priority</label>
                            <select class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 rounded-lg px-4 py-2.5 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="priority">
                                <option>Low</option>
                                <option>Medium</option>
                                <option selected>High</option>
                                <option>Urgent</option>
                            </select>
                        </div>
                        {{-- Due Date --}}
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Due Date</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">calendar_today</span>
                                <input class="w-full bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 rounded-lg pl-10 pr-4 py-2.5 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" name="due_date" type="date" value="2023-11-15" />
                            </div>
                        </div>
                        {{-- Assignee --}}
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Assignee</label>
                            <div class="flex items-center gap-3 p-2.5 border border-slate-300 dark:border-slate-700 rounded-lg bg-slate-50 dark:bg-slate-800/50">
                                <div class="size-7 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold">JD</div>
                                <span class="text-sm text-slate-700 dark:text-slate-300 flex-1">Jane Doe</span>
                                <button class="text-xs text-primary font-medium hover:underline" type="button">Change</button>
                            </div>
                        </div>
                    </div>
                    <hr class="border-slate-200 dark:border-slate-800" />
                    {{-- Action Buttons --}}
                    <div class="flex items-center justify-end gap-4 pt-2">
                        <a href="/tasks" class="px-6 py-2.5 text-sm font-bold text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg transition-colors">
                            Cancel
                        </a>
                        <button class="px-8 py-2.5 text-sm font-bold text-white bg-primary hover:bg-primary/90 rounded-lg shadow-lg shadow-primary/20 transition-all flex items-center gap-2" type="submit">
                            <span class="material-symbols-outlined text-lg">save</span>
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Activity Section --}}
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-200 dark:border-slate-800">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-4">Task Activity</h3>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="size-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-sm text-primary">edit</span>
                            </div>
                            <div>
                                <p class="text-sm"><span class="font-semibold text-slate-900 dark:text-white">Alex Rivera</span> updated the status to <span class="px-2 py-0.5 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 text-xs font-bold uppercase">In Progress</span></p>
                                <p class="text-xs text-slate-500 mt-1">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="size-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-sm text-green-500">add_comment</span>
                            </div>
                            <div>
                                <p class="text-sm"><span class="font-semibold text-slate-900 dark:text-white">Jane Doe</span> added a comment: "I've started the wireframes for the mobile version."</p>
                                <p class="text-xs text-slate-500 mt-1">5 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-200 dark:border-slate-800">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-4">Project Context</h3>
                    <div class="flex items-center gap-3">
                        <div class="size-12 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-orange-600">
                            <span class="material-symbols-outlined">rocket_launch</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-900 dark:text-white leading-none">Marketing Website</p>
                            <p class="text-xs text-slate-500 mt-1">Due in 12 days</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between text-xs mb-1 font-semibold">
                            <span class="text-slate-500">Task Completion</span>
                            <span class="text-primary">65%</span>
                        </div>
                        <div class="h-1.5 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection