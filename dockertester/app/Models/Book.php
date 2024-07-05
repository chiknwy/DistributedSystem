<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    protected $fillable = ['title', 'author', 'details', 'isbn', 'image'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
