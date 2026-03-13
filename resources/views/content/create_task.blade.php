@extends('content.layouts.app')

@section('title', 'Create Task | TaskMaster')
@section('page_title', 'Create Task')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="mb-8">
            <nav class="flex items-center gap-2 text-sm text-slate-500 mb-4">
                <a class="hover:text-primary" href="/tasks">Tasks</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-slate-900 dark:text-slate-100 font-medium">Create New Task</span>
            </nav>
            <h2 class="text-3xl font-bold tracking-tight">Add a new objective</h2>
            <p class="text-slate-500 mt-2">Fill in the details below to track your next milestone.</p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
            <form class="p-8 space-y-6" method="POST" action="/tasks">
                @csrf
                {{-- Task Title --}}
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300" for="title">Task Title</label>
                    <input class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none" id="title" name="title" placeholder="e.g. Design System Audit" type="text" value="{{ old('title') }}" />
                    @error('title')<p class="text-red-500 text-xs">{{ $message }}</p>@enderror
                </div>
                {{-- Description --}}
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300" for="description">Description</label>
                    <textarea class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none resize-none" id="description" name="description" placeholder="Describe the scope and deliverables..." rows="4">{{ old('description') }}</textarea>
                </div>
                {{-- Grid Layout for Selects --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Status --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300" for="status">Status</label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none appearance-none" id="status" name="status">
                                <option value="backlog">Backlog</option>
                                <option value="todo">To Do</option>
                                <option value="in_progress">In Progress</option>
                                <option value="review">In Review</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">unfold_more</span>
                        </div>
                    </div>
                    {{-- Priority --}}
                    <div class="space-y-2">
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300" for="priority">Priority</label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none appearance-none" id="priority" name="priority">
                                <option value="low">Low</option>
                                <option value="medium" selected>Medium</option>
                                <option value="high">High</option>
                                <option value="urgent">Urgent</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">unfold_more</span>
                        </div>
                    </div>
                    {{-- Due Date --}}
                    <div class="space-y-2 md:col-span-2">
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300" for="due_date">Due Date</label>
                        <div class="relative">
                            <input class="w-full px-4 py-3 rounded-lg border border-slate-200 dark:border-slate-700 dark:bg-slate-800 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none" id="due_date" name="due_date" type="date" />
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">calendar_month</span>
                        </div>
                    </div>
                </div>
                {{-- Form Actions --}}
                <div class="pt-6 flex flex-col sm:flex-row items-center justify-end gap-3 border-t border-slate-100 dark:border-slate-800">
                    <a href="/tasks" class="w-full sm:w-auto px-6 py-3 rounded-lg text-slate-600 dark:text-slate-400 font-medium hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors text-center">
                        Cancel
                    </a>
                    <button class="w-full sm:w-auto px-8 py-3 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all active:scale-95" type="submit">
                        Create Task
                    </button>
                </div>
            </form>
        </div>

        {{-- Help Info --}}
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="p-4 rounded-xl bg-primary/5 border border-primary/10 flex items-start gap-3">
                <span class="material-symbols-outlined text-primary">info</span>
                <div>
                    <p class="text-xs font-bold text-primary uppercase">Quick Tip</p>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Assign tasks to project folders for better team visibility.</p>
                </div>
            </div>
            <div class="p-4 rounded-xl bg-slate-100 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-800 flex items-start gap-3">
                <span class="material-symbols-outlined text-slate-500">group_add</span>
                <div>
                    <p class="text-xs font-bold text-slate-500 uppercase">Collaboration</p>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">You can invite team members after the task is created.</p>
                </div>
            </div>
        </div>
    </div>
@endsection