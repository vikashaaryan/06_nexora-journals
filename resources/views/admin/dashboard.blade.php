@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('page_title', 'Administrator')

@section('content')
    <div class="mb-8 flex items-center justify-between">
        <h2 class="text-2xl font-semibold text-slate-800">Dashboard</h2>
        <p class="text-sm text-slate-500">Welcome back, {{ auth()->user()->name }}</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-slate-500">Eboards</p>
                    <h3 class="mt-2 text-4xl font-bold text-slate-800">6</h3>
                    <p class="mt-2 text-sm text-slate-500">Eboard content</p>
                </div>
                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6M7 4h7l5 5v11a1 1 0 01-1 1H7a1 1 0 01-1-1V5a1 1 0 011-1z"/>
                    </svg>
                </div>
            </div>

            <a href="#" class="mt-6 inline-block rounded-md bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">
                View details
            </a>
        </div>

        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-slate-500">Paper Submitted</p>
                    <h3 class="mt-2 text-4xl font-bold text-slate-800">6</h3>
                    <p class="mt-2 text-sm text-slate-500">Submission content</p>
                </div>
                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6M7 4h7l5 5v11a1 1 0 01-1 1H7a1 1 0 01-1-1V5a1 1 0 011-1z"/>
                    </svg>
                </div>
            </div>

            <a href="#" class="mt-6 inline-block rounded-md bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">
                View details
            </a>
        </div>

        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-slate-500">Approval Papers</p>
                    <h3 class="mt-2 text-4xl font-bold text-slate-800">5</h3>
                    <p class="mt-2 text-sm text-slate-500">Paper approvals</p>
                </div>
                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
            </div>

            <a href="#" class="mt-6 inline-block rounded-md bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">
                View details
            </a>
        </div>

        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-slate-500">Total Messages</p>
                    <h3 class="mt-2 text-4xl font-bold text-slate-800">51</h3>
                    <p class="mt-2 text-sm text-slate-500">Message inbox</p>
                </div>
                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>

            <a href="#" class="mt-6 inline-block rounded-md bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">
                View details
            </a>
        </div>
    </div>
@endsection