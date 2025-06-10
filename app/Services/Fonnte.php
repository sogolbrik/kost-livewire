<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Fonnte
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.fonnte.token'); // kita ambil dari config
    }

    public function kirimPesan($target, $pesan)
    {
        $response = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->asForm()->post('https://api.fonnte.com/send', [
            'target' => $target, // tanpa +
            'message' => $pesan,
        ]);

        return $response->json();
    }
}
