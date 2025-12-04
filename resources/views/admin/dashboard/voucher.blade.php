@extends('layouts.admin.main')

@section('content')
<h1 class="text-3xl font-bold text-zinc-800 dark:text-white mb-3">
    Voucher
</h1>

<div class="mb-6">
    <p class="text-sm text-zinc-600 dark:text-zinc-400">Terdapat {{ $voucher_list->total() }} voucher</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @if ($voucher_list->count() > 0)
        @foreach ($voucher_list as $voucher)
            <div class="border border-zinc-300 dark:border-zinc-700 rounded-md overflow-hidden hover:shadow-md transition-shadow duration-300">

                <div class="flex px-4 pt-3 justify-between items-center">
                    <div>
                        <h5 class="text-zinc-500 text-sm font-mono">{{ $voucher->code }}</h5>
                        <span class="text-zinc-800 dark:text-zinc-200 text-sm">{{ optional($voucher->guest)->email ?? '-' }}</span>
                    </div>
                    <form action="{{ route('voucher.destroy', $voucher->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus buku ini?')">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#BD4C31"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                        </button>
                    </form>
                </div>
                
                <div class="p-4 space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-zinc-600 dark:text-zinc-400 text-sm">Discount</span>
                        <span class="text-2xl font-bold text-zinc-600 dark:text-zinc-400">{{ $voucher->discount_percentage }}%</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-zinc-600 dark:text-zinc-400 text-sm">Status</span>
                        <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $voucher->status == 'unused' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-zinc-100 text-zinc-800 dark:bg-zinc-700 dark:text-zinc-300' }}">
                            {{ ucfirst($voucher->status) }}
                        </span>
                    </div>
                    
                    <div class="border-t border-zinc-200 dark:border-zinc-700 pt-3 mt-3 space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-zinc-600 dark:text-zinc-400">Redeemed By</span>
                            <span class="text-zinc-800 dark:text-zinc-200">{{ optional($voucher->redeemedBy)->email ?? '-' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-zinc-600 dark:text-zinc-400">Used At</span>
                            <span class="text-zinc-800 dark:text-zinc-200">{{ $voucher->used_at ? $voucher->used_at->format('d M Y H:i') : '-' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-zinc-600 dark:text-zinc-400">Expires</span>
                            <span class="text-zinc-800 dark:text-zinc-200">{{ $voucher->expires_at ? $voucher->expires_at->format('d M Y') : '-' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-span-full">
            <div class="bg-blue-50 dark:bg-blue-900/30 border border-blue-200 dark:border-blue-800 text-blue-700 dark:text-blue-300 px-6 py-4 rounded-lg text-center">
                Belum ada data voucher.
            </div>
        </div>
    @endif
</div>

<!-- Pagination -->
<div class="flex justify-center mt-8">
    {{ $voucher_list->links() }}
</div>
@endsection