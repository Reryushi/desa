<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use App\Model\RoomBooking;
use App\Model_Layanan\SuratUmum;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
        $admin_nav = config('nav.admin');
        View::share('admin_nav', $admin_nav);
        RoomBooking::where('payment', '0')
                        ->where('created_at', '<=', Carbon::now()->subMinutes(120   )->toDateTimeString())->delete();
                    RoomBooking::where('status', 'pending')
                        ->where('payment', '2')
                        ->where('created_at', '<=', Carbon::now()->subMinutes(240)->toDateTimeString())->delete();
                        RoomBooking::where('status', 'cancelled')->delete();

        $jml_pending = RoomBooking::where('status', 'pending')
                                ->where('payment', '0')->count();
        $jml_paid = RoomBooking::where('payment', '2')
                                ->where('status', 'pending')->count();
        View::share('jml_pending', $jml_pending);
        View::share('jml_paid', $jml_paid);

        $total_pending = SuratUmum::where('status', '0')->count();
        $sk_kepolisian_pending = SuratUmum::where('jenis', 'SK Kepolisian')->where('status', '0')->count();
        $sk_pengantar_pending = SuratUmum::where('jenis', 'SK Pengantar')->where('status', '0')->count();
        $sk_penduduk_pending = SuratUmum::where('jenis', 'SK Penduduk')->where('status', '0')->count();
            View::share('total_pending', $total_pending);
            View::share('sk_kepolisian_pending', $sk_kepolisian_pending);
            View::share('sk_pengantar_pending', $sk_pengantar_pending);
            View::share('sk_penduduk_pending', $sk_penduduk_pending);
      
    }
}
