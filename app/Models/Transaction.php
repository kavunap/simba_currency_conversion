<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property $id
 * @property $amount
 * @property $currency
 * @property $sender_id
 * @property $recipient_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaction extends Model
{
    
    static $rules = [
		'amount' => 'required|min:0|numeric',
		'currency' => 'required',
		'sender_id' => 'required',
		'recipient_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['amount','currency','sender_id','recipient_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    public function sender()
    {
        return $this->hasOne('App\Models\User', 'id', 'sender_id');
    }
    
    public function receiver()
    {
        return $this->hasOne('App\Models\User', 'id', 'recipient_id');
    }

}
