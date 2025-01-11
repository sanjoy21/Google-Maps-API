<?php

namespace App\Http\Controllers;

use App\Services\GoogleMapsService;

class GoogleMapsController extends Controller
{
    protected $googleMapsService;

    public function __construct(GoogleMapsService $googleMapsService)
    {
        $this->googleMapsService = $googleMapsService;
    }

    public function geocode()
    {
        $address = 'Pal Bari, North paikpara';
        $result = $this->googleMapsService->geocodeAddress($address);

        return view('geo');
    }
}
