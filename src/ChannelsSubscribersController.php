<?php

namespace Otpixto\ChannelsSubscribers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Otpixto\ChannelsSubscribers\Models\Channel;
use Otpixto\ChannelsSubscribers\Models\UserChannel;

class ChannelsSubscribersController extends Controller
{
    //

    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {
        $users = User::get();
        return view('channels_subscribers::list', compact('users'));
    }


    public function edit($userId)
    {
        $userName = User::whereId($userId)->pluck('name');
        $channels = Channel::get();
        $userChannels = UserChannel::whereUserId($userId)->with('channel')->get();
        foreach ($channels as &$channel){
            foreach ($userChannels as $userChannel){
                if($userChannel->channel_id == $channel->id){
                    $channel->checked=1;
                }
            }
        }
        return view('channels_subscribers::edit', compact(['userName', 'channels', 'userChannels', 'userId']));
    }


    public function addChannel(Request $request)
    {
        return view('channels_subscribers::add_channel', compact(['userName', 'channels', 'userChannels', 'userId']));
    }


    public function insertChannel(Request $request)
    {
        $userChannel = Channel::firstOrCreate(['channel'=>$request->channel]);
        return redirect('/subscribers');
    }


    public function update($userId, Request $request)
    {
            $channelsIds = Channel::pluck('id');
            foreach ($channelsIds as $channelId) {
                if(isset($request->channel[$channelId])){
                    $userChannel = UserChannel::firstOrCreate(['user_id'=>$userId, 'channel_id'=>$channelId]);
                }else{
                    $userChannel = UserChannel::whereUserId($userId)->whereChannelId($channelId)->delete();
                }
            }
        return redirect('/subscribers');
    }
}
