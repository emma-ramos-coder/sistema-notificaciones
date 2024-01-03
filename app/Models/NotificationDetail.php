<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotificationDetail extends Model
{
    static $rules = [
		'notification_id' => 'required',
		'receiver_id' => 'required',
		'email' => 'required',
        'phone' => 'required',
    ];

    protected $fillable = ['notification_id','receiver_id','email','phone'];

    public function notification():BelongsTo
    {
        return $this->belongsTo('App\Models\Notification', 'notification_id', 'id');
    }

    public function receiver():BelongsTo
    {
        return $this->belongsTo('App\Models\Receiver', 'receiver_id', 'id');
    }
}
