<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class headofdepartments extends Model
{
    protected $table = "headofdepartments";

    public function loans()
    {
        return $this->hasMany(Loan::class, 'borrower_id', 'id');
    }

  	public function attendance()
    {
        return $this->hasMany(EventAttendance::class, 'member_id', 'id');
    }
    public function families()
    {
        return $this->hasMany(FamilyMember::class, 'member_id', 'id');
    }
    public function family()
    {
        return $this->hasOne(Family::class, 'member_id', 'id');
    }
}
