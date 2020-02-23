<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Labels.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Labels\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;

trait HasLabels
{
    public function labels(): MorphMany
    {
        return $this->morphMany(Config::get('labels.models.label'), 'labelable');
    }
}
