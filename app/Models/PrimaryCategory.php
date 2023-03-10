<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SecondaryCategory;

class PrimaryCategory extends Model
{
    use HasFactory;
    protected $table = 'primary_categories';

    public function secondary()
    {
        return $this->hasMany(SecondaryCategory::class);

    }
}
