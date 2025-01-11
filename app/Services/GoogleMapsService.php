<?php

namespace App\Services;

use GuzzleHttp\Client;

class GoogleMapsService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://maps.googleapis.com/maps/api/',
        ]);
    }

    public function geocodeAddress(string $address)
    {
        $response = $this->client->get('geocode/json', [
            'query' => [
                'address' => $address,
                'key' => config('services.google_maps.key'),
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
