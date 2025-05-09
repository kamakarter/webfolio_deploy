<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover',
        'title',
        'description',
        'stack',
        'github_link',
        'deploy_link',
        'user_id',
    ]; 

    public function user(){
        return $this->belongsTo(User::class);
    }
}


