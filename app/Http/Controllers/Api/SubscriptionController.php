<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Subscription\storeSubscriptionRequest;
use App\Http\Requests\Subscription\updateSubscriptionRequest;

use App\Models\Subscription;

class SubscriptionController extends BaseController
{
    public function index(){
        return Subscription::all();
    }

    public function store(storeSubscriptionRequest $request)
    {
        $subscription = Subscription::create($request->validated());
        return $this->sendResponse($subscription, 201);
    }

    public function show(Subscription $subscription)
    {
        return $subscription;
    }

    public function update(updateSubscriptionRequest $request, Subscription $subscription)
    {
        $subscription->update($request->validated());
        return $this->sendResponse($subscription, 200);
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return $this->sendResponse(null, 204);
    }
}
