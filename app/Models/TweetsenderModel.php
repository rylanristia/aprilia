<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetsenderModel extends Model
{
    use HasFactory;

    protected $table = 'wisher';

    protected $fillable = [
        'name',
        'description',
        'highlighted'
    ];
}