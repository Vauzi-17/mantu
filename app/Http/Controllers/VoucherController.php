<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        // 1. Ambil data dari database menggunakan Model
        //    'latest()' untuk mengurutkan dari yang terbaru
        //    'paginate(10)' untuk membagi data per 10 item per halaman
        
        $voucher_list = Voucher::latest()->paginate(10);

        // 2. Kirim data ke view
        //    compact('daftar_buku') berarti kita mengirim variabel $daftar_buku
        return view('admin.dashboard.voucher', compact('voucher_list'));
    }
    
    public function destroy(Voucher $voucher)
    {
        $voucher->delete();
        return redirect()->route('dashboard_voucher')->with('success', 'Voucher berhasil dihapus!');
    }
}
