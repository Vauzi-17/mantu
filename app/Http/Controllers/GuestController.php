<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        // 1. Ambil data dari database menggunakan Model
        //    'latest()' untuk mengurutkan dari yang terbaru
        //    'paginate(10)' untuk membagi data per 10 item per halaman
        
        $guest_list = Guest::latest()->paginate(10);

        // 2. Kirim data ke view
        //    compact('daftar_buku') berarti kita mengirim variabel $daftar_buku
        return view('admin.dashboard.guest', compact('guest_list'));
    }
    
    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('dashboard_guest')->with('success', 'Tamu berhasil dihapus!');
    }
}
