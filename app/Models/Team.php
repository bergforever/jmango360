<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table= 'teams';
    protected $fillable = [
        'name',
        'services',
        'facebook_link',
        'instagram_link',
        'linkedin_link',
        'twitter_link',
        'member_image',
        'post'
    ];
    public function getImageMemberAttribute(): string
    {
        return $this->member_image  ? asset('images/team_images/' . $this->member_image) : asset('images/user_profile/avatar.png');
    }
}
