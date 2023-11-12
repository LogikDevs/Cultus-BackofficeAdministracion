<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultimediaPost extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = "multimedia_post";
    protected $primaryKey = 'id_multimediaPost';
    
    
    public function post() {
        return $this->belongsTo(Post::class, "fk_id_post");
    }

    protected $fillable = ['fk_id_post', 'multimediaLink'];
}
