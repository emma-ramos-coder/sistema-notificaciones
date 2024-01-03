<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    static $rules = [
		'category_name' => 'required',
    ];

    protected $fillable = ['category_name'];

    public function notifications():HasMany
    {
        return $this->hasMany('App\Models\Notification', 'notification_id', 'id');
    }
}
