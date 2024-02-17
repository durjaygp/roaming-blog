<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeMot extends Model
{
    use HasFactory;

    public function meaning()
    {
        return $this->hasOne(words_meanings::class, 'WM_word');
    }
}
