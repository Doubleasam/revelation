<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPayment extends Model
{
    protected $table = "event_payments";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function asset_type()
    {
        return $this->hasOne(AssetType::class, 'id', 'asset_type_id');
    }

    public function valuations()
    {
        return $this->hasMany(AssetValuation::class, 'asset_id', 'id')->orderBy('date', 'desc');
    }
}
