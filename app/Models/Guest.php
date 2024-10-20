<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'has_opened',
    ];

    public function invitation() {
        return $this->hasMany(Invitation::class);
    }
    public function coment() {
        return $this->hasMany(Comment::class);
    }
}
