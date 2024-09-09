<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'featured_image',
        'featured_image2',
        'featured_image3',
        'tags',
        'published_at',
        'status',
    ];

    // Automatically generate a slug from the title when creating or updating a blog post
    public static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });

        static::updating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime',
    ];

    // Automatically generate a slug from the title
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Relationships

    // A blog post belongs to a user (author)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // A blog post belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Define the relationship for tags (if you have a tags table)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
