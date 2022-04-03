<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['body','user_id', 'course_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
