<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ExchangeRateController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::latest()->take(3)->get();
        $exchangeRate = $this->getExchangeRate();

        return view('welcome', compact('posts', 'exchangeRate'));
    }

    private function getExchangeRate()
    {
        try {
            $url = 'https://www.cbr.ru/scripts/XML_daily.asp';
            $response = Http::timeout(5)->get($url);
            
            if ($response->successful()) {
                $xml = simplexml_load_string($response->body());
                $cnyRate = null;
                
                foreach ($xml->Valute as $valute) {
                    if ((string)$valute->CharCode === 'CNY') {
                        $cnyRate = (float)str_replace(',', '.', $valute->Value);
                        break;
                    }
                }
                
                if ($cnyRate !== null) {
                    // Округляем до 4 знаков после запятой для более точного отображения
                    return round($cnyRate, 4);
                }
            }

            Log::error('Failed to fetch exchange rate from CBR');
            return null;
        } catch (\Exception $e) {
            Log::error('Error fetching exchange rate: ' . $e->getMessage());
            return null;
        }
    }
}