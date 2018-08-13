<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
    protected $table = "pledges";

    public function campaign()
    {
        return $this->hasOne(Campaign::class, 'id', 'campaign_id');
    }


    public function member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }

    public function fund()
    {
        return $this->hasOne(Fund::class, 'id', 'fund_id');
    }

    //  public function pledgepay()
    // {
    //     return $this->hasOne(Pledgepayment::class, 'fund_id');
    // }
}
