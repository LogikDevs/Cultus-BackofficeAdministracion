<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\user;

class groups extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "groups";
    protected $primaryKey = 'id_group';

    public function users()
    {
        return $this->belongsToMany(User::class, 'integrates', 'id_group', 'id_user');
    }

}
