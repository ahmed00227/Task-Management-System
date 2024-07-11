<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    const admin=1; const teamLeader=2; const teamMember=3; const guest=4;
    use HasFactory;
    public $timestamps=false;
    public function users() :BelongsToMany
    {
        return $this->belongsToMany(User::class,'role_users');
    }
}
