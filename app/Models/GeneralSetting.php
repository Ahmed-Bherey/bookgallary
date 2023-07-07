<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name_ar',
        'name_en',
        'email',
        'website',
        'tel1',
        'tel2',
        'address',
        'logo',
        'vision',
        'mission',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
