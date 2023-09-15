<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    use SoftDeletes;
    use HasFactory;
    protected $table = "post";
    protected $primaryKey = 'id_post';
    
    
    public function user() {
        return $this->belongsTo(user::class, 'fk_id_user');
    }

    public function event() {
        return $this->belongsTo(Events::class, 'fk_id_event');
    }

    public function votes() {
        return $this->hasMany(Votes::class, 'fk_id_post');
    }

    public function comments() {
        return $this->hasMany(Comments::class, 'fk_id_post');
    }

    public function multimedia() {
        return $this->hasMany(MultimediaPost::class, 'fk_id_post');
    }

    protected $fillable = [
        'text',
        'latitud',
        'longitud'
    ];
}

