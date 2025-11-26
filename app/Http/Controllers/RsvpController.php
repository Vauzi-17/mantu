<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Jobs\GenerateVoucherJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RsvpController extends Controller
{
        /**
     * Menampilkan form RSVP
     */
    public function index()
    {
        return view('rsvp.index');
    }

    /**
     * Menyimpan data RSVP
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:guests,email',
            'phone' => 'nullable|string|max:20',
            'rsvp_status' => 'coming',
        ]);

        if ($validator->fails()) {
            return redirect()->route('rsvp.index')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Simpan data tamu
        $guest = Guest::create($request->all());

        // Jika tamu konfirmasi "Hadir", panggil Job
        GenerateVoucherJob::dispatch($guest);

        return redirect()->route('rsvp.index')
                    ->with('success', 'Thank you! Your RSVP has been submitted. A QR Code has been sent to your email by Pos Officer XI PPLG 1.');
    }
}
