<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Notification extends Model
{
    static $rules = [
		'titulo' => 'required',
		'contenido' => 'required',
		'destinatario' => 'required',
		'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
		'estado' => 'required',
        'category_id' => 'required',
    ];

    protected $fillable = ['titulo','contenido','destinatario','fecha_inicio','fecha_fin','estado','category_id','user_id'];

    public function category():BelongsTo
    {
        return $this->belongsTo('App\Models\Category', 'category_id','id');
    }

    public function notificationDetails():HasMany
    {
        return $this->hasMany('App\Models\notificationDetail', 'notification_id', 'id');
    }

    public function user():BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'user_id','id');
    }

}
