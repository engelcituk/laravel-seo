<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /** @var string */
    const POST = "POST";

    /** @var string  */
    const PAGE = "PAGE";

    protected $fillable = [
        "title",
        "meta_title",
        "type",
        "image",
        "slug",
        "content",
        "excerpt",
        "published",
        "published_at",
        "user_id",
        "featured",
    ];

    public function getRouteKeyName(): string {
        return "slug";
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function getPublishedAtAttribute($value): string {
        return Carbon::parse($value)->locale(config("app.locale"))->diffForHumans();
    }
}
