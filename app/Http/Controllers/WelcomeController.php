<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function index () {
        return 'Selamat Datang';
    }

    public function about () {
        return '2241760065 dan Moch. Rifqi Andy Setyawan';
    }

    public function articles ($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
