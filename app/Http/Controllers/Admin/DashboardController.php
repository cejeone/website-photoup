<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $foto_galeri = Galeri::count();
        $testimonial = Testimonial::count();

        if (auth()->user()->roles == 'admin') {
            return view('admin.dashboard.index', [
                'foto_galeri'=> $foto_galeri, 'testimonial'=> $testimonial
            ]);
        }
        else {
            return view('admin.dashboard.index', [
                'foto_galeri'=> $foto_galeri
            ]);
        }
    }
}
