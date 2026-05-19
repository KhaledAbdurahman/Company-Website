<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Message;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\StoreMessageRequest;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index', get_defined_vars());
    }

    public function about()
    {
        return view('front.about', get_defined_vars());
    }

    public function service()
    {
        return view('front.service', get_defined_vars());
    }

    public function contact()
    {
        return view('front.contact', get_defined_vars());
    }

    public function subscriberStore(StoreSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data);
        
        return back()->with('subscriber_success_msg', 'Subscribed Successfully');
    }

    public function contactStore(StoreMessageRequest $request)
    {
        $data = $request->validated();
        Message::create($data);
        
        return back()->with('success', 'Message sent successfully');
    }
}
