<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table='portfolios';
    protected $fillable = [
        'project_title',
        'slug',
        'category_id',
        'android_application_link',
        'ios_application_link',
        'web_address_link',
        'services',
        'main_image',
        'description',
        'extra_description',
        'about_images',
        'about_description',
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function getImageMainAttribute(): string
    {
        return $this->main_image  ? asset('images/portfolio_images/' . $this->main_image) : asset('images/user_profile/avatar.png');
    }
}
