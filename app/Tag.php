<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the account record associated with the debt.
     */
    public function account()
    {
        return $this->belongsTo(\App\Account::class);
    }

    /**
     * Get the contact record associated with the debt.
     */
    public function contacts()
    {
        return $this->belongsToMany(\App\Contact::class)->withPivot('account_id')->withTimestamps();
    }
}
