<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    protected $table = "audit_trail";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
