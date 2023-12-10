<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = [
        "title",
        "slug",
        "body",
        "active",
        "thumbnail",
        "published_at",
        "user_id"
    ];

    // protected $casts = [
    //     'published_at' => 'datetime'
    // ];

    // public function formattedDate()
    // {
    //     return $this->published_at->format('F jS Y');
    // }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function shortBody():string
    {
        return Str::words(strip_tags($this->body), 30);
    }

    public function getThumbnail()
    {
        if (str_starts_with($this->thumbnail, 'http')){
            return $this->thumbnail;
        }else{
            return ('/storage/'.$this->thumbnail);
        }
    }
}
