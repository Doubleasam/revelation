<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "emails";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
}
