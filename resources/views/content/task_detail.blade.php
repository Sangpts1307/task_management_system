@extends('content.layouts.app')

@section('title', 'Task Detail | TaskMaster')
@section('page_title', 'Task Detail')

@section('content')
    <div class="max-w-[1280px] mx-auto">
        {{-- Action Buttons --}}
        <div class="flex flex-wrap items-center justify-between mb-10 gap-4">
            <a href="/tasks" class="flex items-center gap-2 text-slate-500 hover:text-slate-900 dark:hover:text-slate-100 transition-colors">
                <span class="material-symbols-outlined">arrow_back</span>
                <span class="font-medium text-sm">Back to List</span>
            </a>
            <div class="flex items-center gap-3">
                <a href="/tasks/1/edit" class="px-4 py-2 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-primary/90 transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg">edit</span>
                    Edit Task
                </a>
                <form method="POST" action="/tasks/1">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 border border-red-200 dark:border-red-900/30 text-red-600 text-sm font-semibold rounded-lg hover:bg-red-50 transition-all flex items-center gap-2" type="submit">
                        <span class="material-symbols-outlined text-lg">delete</span>
                        Delete Task
                    </button>
                </form>
            </div>
        </div>

        {{-- Main Task Detail Card --}}
        <div class="bg-white dark:bg-slate-950 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
            <div class="p-8 lg:p-10">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-wrap gap-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-primary/10 text-primary text-xs font-bold rounded-full uppercase tracking-wider">
                            <span class="material-symbols-outlined text-sm">sync</span>
                            In Progress
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-50 dark:bg-amber-950/40 text-amber-600 dark:text-amber-400 text-xs font-bold rounded-full uppercase tracking-wider">
                            <span class="material-symbols-outlined text-sm">priority_high</span>
                            High Priority
                        </span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-black text-slate-900 dark:text-slate-50 leading-tight">Implement Multi-factor Authentication Flow</h2>
                    <div class="flex flex-wrap items-center gap-6 text-slate-500 border-b border-slate-100 dark:border-slate-900 pb-8">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">calendar_today</span>
                            <span class="text-sm font-medium">Due Oct 24, 2023</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">account_circle</span>
                            <span class="text-sm font-medium">Assigned to <span class="text-slate-900 dark:text-slate-200">Alex Rivera</span></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">tag</span>
                            <span class="text-sm font-medium">MOB-421</span>
                        </div>
                    </div>
                </div>

                {{-- Task Description --}}
                <div class="mt-8">
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-[0.2em] mb-4">Description</h3>
                    <div class="text-slate-600 dark:text-slate-400 leading-relaxed space-y-4">
                        <p>Implement the backend and frontend logic for multi-factor authentication. This includes integration with Twilio for SMS codes and the TOTP verification screens in the mobile client.</p>
                        <ul class="list-disc list-inside space-y-2 ml-2">
                            <li>Setup TOTP generation using industry-standard libraries</li>
                            <li>Create UI screens for QR code scanning and recovery code display</li>
                            <li>Implement rate limiting for MFA attempts</li>
                            <li>Ensure seamless fallback to SMS if app authentication is unavailable</li>
                        </ul>
                    </div>
                </div>

                {{-- Subtasks & Labels --}}
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 pt-8 border-t border-slate-100 dark:border-slate-900">
                    <div>
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-[0.2em] mb-4">Subtasks</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 bg-slate-50 dark:bg-slate-900 rounded-lg border border-slate-100 dark:border-slate-800">
                                <span class="material-symbols-outlined text-emerald-500 text-xl">check_circle</span>
                                <span class="text-sm font-medium">Design MFA verification screens</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 bg-slate-50 dark:bg-slate-900 rounded-lg border border-slate-100 dark:border-slate-800">
                                <span class="material-symbols-outlined text-slate-300 text-xl">radio_button_unchecked</span>
                                <span class="text-sm font-medium">API integration for SMS gateway</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-[0.2em] mb-4">Labels</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold rounded">Security</span>
                            <span class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold rounded">Backend</span>
                            <span class="px-2.5 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold rounded">Critical Path</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection