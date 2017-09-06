<?php

namespace App\Http\Controllers\After;

use App\Http\Controllers\Controller;
use Domain\Offer\OfferId;
use Domain\Offer\OfferRepository;

class OfferController extends Controller
{
    private $repository;

    public function __construct(OfferRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $offerList = $this->repository->getList();
        return view('after.index', ['offerList' => $offerList]);
    }

    public function detail($id)
    {
        $offer = $this->repository->get(new OfferId($id));
        return view('after.detail', ['offer' => $offer]);
    }
}
