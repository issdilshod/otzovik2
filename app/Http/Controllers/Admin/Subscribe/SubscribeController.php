<?php

namespace App\Http\Controllers\Admin\Subscribe;

use App\Http\Controllers\Controller;
use App\Services\Admin\Subscribe\SubscribeService;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    private $subscribeService;

    public function __construct()
    {
        $this->subscribeService = new SubscribeService();
    }

    public function api_store(Request $request)
    {
        $subscribe = $this->subscribeService->validated($request);

        $this->subscribeService->store($subscribe);

        return response()->json(['msg' => 'success'], 200);
    }

}
