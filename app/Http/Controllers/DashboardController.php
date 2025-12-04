<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Voucher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data = [
            'guest_total' => Guest::count(),
            'voucher_total' => Voucher::count(),
            'voucher_unused' => Voucher::where('status', 'unused')->count(),
            'voucher_used' => Voucher::where('status', 'used')->count(),
            'guest_coming' => Guest::where('rsvp_status', 'coming')->count(),
            'guest_not_coming' => Guest::where('rsvp_status', 'not_coming')->count(),
        ];
        return view('admin.dashboard.index', $data);
    }
}
