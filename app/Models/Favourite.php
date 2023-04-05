<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favourite extends Model
{
    use HasFactory;
    protected $table = 'favourites';

    public function user()
    {
        return  $this->belongsTo(User::class);
    }

    public function article()
    {
        return  $this->belongsTo(Article::class);
    }
}
