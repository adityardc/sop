<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sekper()
    {
        return view('sekper');
    }

    public function pembiayaan()
    {
        return view('pembiayaan');
    }

    public function pengadaan()
    {
        return view('pengadaan');
    }

    public function tanaman()
    {
        return view('tanaman');
    }

    public function pabrik()
    {
        return view('pabrik');
    }

    public function ti()
    {
        return view('ti');
    }

    public function sdm()
    {
        return view('sdm');
    }

    public function mr()
    {
        return view('mr');
    }

    public function spi()
    {
        return view('spi');
    }

    public function sustainability()
    {
        return view('sustainability');
    }

    public function pemasaran()
    {
        return view('pemasaran');
    }

    public function renstra()
    {
        return view('renstra');
    }

    public function hilir()
    {
        return view('hilir');
    }

    public function hukum()
    {
        return view('hukum');
    }

    public function kinerja()
    {
        return view('kinerja');
    }

    public function tahunan()
    {
        return view('tahunan');
    }

    public function strategi()
    {
        return view('strategi');
    }

    public function pelanggan()
    {
        return view('pelanggan');
    }
}
