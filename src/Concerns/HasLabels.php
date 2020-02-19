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

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use KodeKeep\Labels\Models\Label;

trait HasLabels
{
    public function labels(): MorphToMany
    {
        return $this->morphToMany(Label::class, 'model', 'model_has_labels');
    }
}
