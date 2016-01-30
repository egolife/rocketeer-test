<?php

namespace App\Http\Controllers;

use App\Repositories\OrderRepository;
use App\Http\Requests;

class OrderController extends Controller
{
    protected $orderRepo;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }
}
