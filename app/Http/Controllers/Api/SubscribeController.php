<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\Api\SubscribeService;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    private $subscribeService;

    public function __construct()
    {
        $this->subscribeService = new SubscribeService();
    }
    
    /**
     * Store the subscribers
     * 
     */
    public function store(Request $request)
    {
        $subscribe = $this->subscribeService->validated($request);

        $this->subscribeService->store($subscribe);

        return response()->json(['msg' => 'success'], 200);
    }

}
