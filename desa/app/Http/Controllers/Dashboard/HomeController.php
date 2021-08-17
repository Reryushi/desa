<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Model\RoomBooking;
// use App\Model\EventBooking;
use App\Model\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Model_Layanan\KeteranganKepolisian;
use App\Model_Layanan\SuratUmum;
use App\Model_Layanan\KeteranganPenduduk;
use App\Model_Layanan\KeteranganPengantar;

class HomeController extends DashboardController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        RoomBooking::where('payment', '0')
                        ->where('created_at', '<=', Carbon::now()->subMinutes(120   )->toDateTimeString())->delete();
                    RoomBooking::where('status', 'pending')
                        ->where('payment', '2')
                        ->where('created_at', '<=', Carbon::now()->subMinutes(240)->toDateTimeString())->delete();
                        RoomBooking::where('status', 'cancelled')->delete();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_umum = SuratUmum::where('penduduk_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        // $sk_kepolisian = KeteranganKepolisian::where('penduduk_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        // $sk_penduduk = KeteranganPenduduk::where('penduduk_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        // $sk_pengantar = KeteranganPengantar::where('penduduk_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        $room_bookings = RoomBooking::with('room')
            ->where('user_id', Auth::user()->id)
            ->limit(5)
            ->orderBy('created_at', 'asc')
            ->get();
        $total_room_bookings =  RoomBooking::where('user_id', Auth::user()->id)->count();

        $total_pending =  SuratUmum::where('penduduk_id', Auth::user()->id)
                                    ->where('status', 0)->count();
        $total_terima =  SuratUmum::where('penduduk_id', Auth::user()->id)
                                    ->where('status', 1)->count();
        // $event_bookings = EventBooking::where('user_id', Auth::user()->id)
        //     ->limit(5)
        //     ->orderBy('created_at', 'asc')
        //     ->get();
        // $total_event_bookings =  EventBooking::where('user_id', Auth::user()->id)->count();

        $total_pending_payments = RoomBooking::where('user_id', Auth::user()->id)->where('payment', 0)->count();
                                // + EventBooking::where('user_id', Auth::user()->id)->where('payment', 0)->count();


        $room_booking_with_reviews =  RoomBooking::whereHas('review', function ($query) {
            $query->where('user_id', Auth::user()->id)->orderBy('updated_at', 'desc')->limit('5');
        })->get();

        // return $sk_kepolisian;
        return view('dashboard.home')->with([
            'room_bookings' => $room_bookings,
            'total_room_bookings' => $total_room_bookings,
            'surat_umum' => $surat_umum,
            'total_pending_payments' => $total_pending_payments,
            'total_pending' => $total_pending,
            'total_terima' => $total_terima,
            'room_booking_with_reviews' => $room_booking_with_reviews,
            // 'sk_kepolisian' => $sk_kepolisian,
            // 'sk_pengantar' => $sk_pengantar,
            // 'sk_penduduk' => $sk_penduduk,
        ]); 
        // 'event_bookings' => $event_bookings,
        // 'total_event_bookings' => $total_event_bookings,
    }

    public function layanan()
    {
        
        return view('dashboard.layanan');
    }
}
