<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;


class Business extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'city',
        'address',
        'phone',
        'email',
        'description',
        'website_url',
        'facebook_url',
        'instagram_url',
        'google_business_url',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
