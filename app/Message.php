<?php

namespace memsWebpanel;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function sender() {
    	return $this->hasOne(Agent::class,'sender_id');
    }

    public function receiver() {
    	return $this->hasOne(Agent::class,'receiver_id');
    }
}
