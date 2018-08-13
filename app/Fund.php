<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    protected $table = "funds";

    public function contribute()
    {
    	return $this->hasOne(Contribution::class, 'fund_id');
    }

}
