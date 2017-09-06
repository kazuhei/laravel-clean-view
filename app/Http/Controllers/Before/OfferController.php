<?php

namespace App\Http\Controllers\Before;

use App\Http\Controllers\Controller;
use Model\OfferModel;

class OfferController extends Controller
{
    public function index()
    {
        $offers = OfferModel::getList();
        $allCount = count($offers);
        $openCount = $this->openCount($offers);

        return view('before.index', [
            'offers' => $offers,
            'allCount' => $allCount,
            'openCount' => $openCount
        ]);
    }

    private function openCount($offers)
    {
        return array_reduce($offers, function ($sum, $offer) {
            return $offer->isOpen() ? $sum + 1 : $sum;
        }, 0);
    }

    public function detail($id)
    {
        return view('before.detail', ['offer' => OfferModel::getById($id)]);
    }
}
