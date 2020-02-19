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

namespace KodeKeep\Labels\Tests\Unit;

use Illuminate\Foundation\Auth\User;
use KodeKeep\Labels\Concerns\HasLabels;

class ClassThatHasLabels extends User
{
    use HasLabels;

    public $table = 'users';

    public $guarded = [];
}
