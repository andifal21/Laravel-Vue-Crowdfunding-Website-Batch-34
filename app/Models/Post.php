<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\UsesUuid;


class Post extends Model
{
    use HasFactory;
    use UsesUuid;
    protected $guarded = [];

}