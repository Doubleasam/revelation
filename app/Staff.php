<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "Staff";

    
    public function families()
    {
        return $this->hasMany(FamilyMember::class, 'member_id', 'id');
    }
    public function family()
    {
        return $this->hasOne(Family::class, 'member_id', 'id');
    }
    // added
    public function payroll()
    {
        return $this->hasOne(Payroll::class, 'id', 'staff_id');
    }

}
