<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "votes";
    protected $primaryKey = 'id_vote';
    

    public function user() {
        return $this->belongsTo(user::class, "fk_id_user");
    }

    public function post() {
        return $this->belongsTo(Post::class, "fk_id_post");
    }

    protected $fillable = [
        'fk_id_user',
        'fk_id_post',
        'vote'
    ];
}