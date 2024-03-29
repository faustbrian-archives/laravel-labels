<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Labels.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Labels\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Config;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Label extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'description', 'color'];

    public function labelable(): MorphTo
    {
        return $this->morphTo();
    }

    public static function findByslug(string $slug): self
    {
        return static::where('slug', $slug)->firstOrFail();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function getTable(): string
    {
        return Config::get('labels.tables.labels');
    }
}
