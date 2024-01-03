<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receiver extends Model
{
    static $rules = [
		'name' => 'required',
		'phone' => 'required',
        'email' => 'required',
    ];

    protected $fillable = ['name','phone','email'];

    public function notificationDetails():HasMany
    {
        return $this->hasMany('App\Models\NotificationDetail', 'receiver_id', 'id');
    }
}
