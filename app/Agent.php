<?php

namespace memsWebpanel;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function agentFunction() {
    	return $this->hasOne(AgentFunction::class);
    }

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
