<?php

namespace Otpixto\ChannelsSubscribers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChannelsSubscribersController extends Controller
{
    //
    public function add($a, $b){
        $v =  $a + $b;
        return view('channels_subscribers::add', compact('v'));
    }

    public function subtract($a, $b){
        echo $a - $b;
    }
}
