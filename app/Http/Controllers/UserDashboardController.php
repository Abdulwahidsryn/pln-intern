<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class UserDashboardController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'id');
        $allCities = City::pluck('name', 'id'); // Ambil semua kota
        return view('user.dashboard', compact('provinces', 'allCities'));
    }   
}