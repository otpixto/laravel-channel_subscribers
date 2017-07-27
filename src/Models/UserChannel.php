<?php

namespace Otpixto\ChannelsSubscribers\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserChannel extends Model
{
    protected $guarded = [];


    public function channel(){
        return $this->belongsTo(Channel::class);
    }
}
