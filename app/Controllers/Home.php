<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('v_halaman');
    }

    public function catalog(): string
    {
        return view('v_catalog');
    }

    public function snack(): string
    {
        return view('catalog/c_snack');
    }

    public function flower(): string
    {
        return view('catalog/c_flower');
    }

    public function money(): string
    {
        return view('catalog/c_money');
    }

    public function pay(): string
    {
        return view('v_pay');
    }

    public function about(): string
    {
        return view('v_about');
    }
}
