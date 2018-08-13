<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{
    protected $table = "follow_ups";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function hod()
    {
        return $this->hasOne(HeadofDeapartments::class, 'id', 'hod_id');
    }

    public function member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }

    public function category()
    {
        return $this->hasOne(FollowUpCategory::class, 'id', 'follow_up_category_id');
    }


}
