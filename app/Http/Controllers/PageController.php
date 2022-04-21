<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Profil;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {

        $item = Galeri::take(12)->inRandomOrder()->get();
        $testi = Testimonial::take(10)->inRandomOrder()->get();
        $kontak = Kontak::take(1)->get();

        return view('user.home', [
        'item' => $item , 'testi' => $testi, 'kontak' => $kontak
        ]);
    }

    public function profil()
    {
        $item = Profil::take(1)->get();
        $kontak = Kontak::take(1)->get();

        return view('user.profil', [
        'item' => $item, 'kontak' => $kontak
        ]);
    }

    public function view_galeri()
    {
        $item = Galeri::inRandomOrder()->get();
        $kontak = Kontak::take(1)->get();

        return view('user.galeri', [
        'item' => $item, 'kontak' => $kontak
        ]);

    }

    public function kontak()
    {
        $item = Kontak::take(1)->get();
        $kontak = Kontak::take(1)->get();

        return view('user.kontak', [
        'item' => $item, 'kontak' => $kontak
        ]);
    }

    public function acara()
    {
        $item = Acara::take(1)->get();
        $kontak = Kontak::take(1)->get();

        return view('user.acara', [
        'item' => $item, 'kontak' => $kontak
        ]);
    }

    public function faq()
    {
        $kontak = Kontak::take(1)->get();

        return view('user.tautan.faq', [
            'kontak' => $kontak
        ]);
    }

    public function testi()
    {
        $item = Testimonial::all();
        $kontak = Kontak::take(1)->get();

        return view('user.tautan.testi', [
        'item' => $item, 'kontak' => $kontak
        ]);
    }

}
