@extends('layouts.admin.main')

@section('content')
<h1 class="text-3xl font-bold text-zinc-800 dark:text-white mb-6">
    Beranda
</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="rounded-md border border-zinc-300 dark:border-zinc-700 overflow-hidden hover:shadow-md transition-shadow duration-300">
        <div class="flex px-4 py-3 justify-between items-center">
            <div class="grid gap-4">
                <div class="text-zinc-500 grid gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                    <h5 class="text-sm">Tamu</h5>
                </div>
                <span class="text-zinc-800 dark:text-zinc-200 text-2xl font-bold tabular-nums">{{ $guest_total }}</span>
            </div>
        </div>
        <div class="px-4 pb-3 border-t border-zinc-200 dark:border-zinc-700 pt-3 mt-3 space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="text-zinc-600 dark:text-zinc-400">Hadir</span>
                <span class="text-zinc-800 dark:text-zinc-200 tabular-nums">{{ $guest_coming }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-zinc-600 dark:text-zinc-400">Tidak hadir</span>
                <span class="text-zinc-800 dark:text-zinc-200 tabular-nums">{{ $guest_not_coming }}</span>
            </div>
        </div>
    </div>
    
    <div class="rounded-md border border-zinc-300 dark:border-zinc-700 overflow-hidden hover:shadow-md transition-shadow duration-300">
        <div class="flex px-4 py-3 justify-between items-center">
            <div class="grid gap-4">
                <div class="text-zinc-500 grid gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="m368-320 112-84 110 84-42-136 112-88H524l-44-136-44 136H300l110 88-42 136ZM160-160q-33 0-56.5-23.5T80-240v-135q0-11 7-19t18-10q24-8 39.5-29t15.5-47q0-26-15.5-47T105-556q-11-2-18-10t-7-19v-135q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v135q0 11-7 19t-18 10q-24 8-39.5 29T800-480q0 26 15.5 47t39.5 29q11 2 18 10t7 19v135q0 33-23.5 56.5T800-160H160Zm0-80h640v-102q-37-22-58.5-58.5T720-480q0-43 21.5-79.5T800-618v-102H160v102q37 22 58.5 58.5T240-480q0 43-21.5 79.5T160-342v102Zm320-240Z"/></svg>
                    <h5 class="text-sm">Voucher</h5>
                </div>
                <span class="text-zinc-800 dark:text-zinc-200 text-2xl font-bold tabular-nums">{{ $voucher_total }}</span>
            </div>
        </div>
        <div class="px-4 pb-3 border-t border-zinc-200 dark:border-zinc-700 pt-3 mt-3 space-y-2 text-sm">
            <div class="flex justify-between">
                <span class="text-zinc-600 dark:text-zinc-400">Belum Digunakan</span>
                <span class="text-zinc-800 dark:text-zinc-200 tabular-nums">{{ $voucher_unused }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-zinc-600 dark:text-zinc-400">Sudah Digunakan</span>
                <span class="text-zinc-800 dark:text-zinc-200 tabular-nums">{{ $voucher_used }}</span>
            </div>
        </div>
    </div>
</div>
@endsection