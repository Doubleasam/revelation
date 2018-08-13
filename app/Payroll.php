<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = "payroll";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function setting_things()
    {
        return $this->hasOne(Setting::class, 'id', 'setting_id');
    }

    // added
    public function staff()
    {
        return $this->hasOne(Staff::class, 'id', 'staff_id');
    }
}
