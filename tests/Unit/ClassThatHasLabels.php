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

namespace Konceiver\Labels\Tests\Unit;

use Illuminate\Foundation\Auth\User;
use Konceiver\Labels\Concerns\HasLabels;

class ClassThatHasLabels extends User
{
    use HasLabels;

    public $table = 'users';

    public $guarded = [];
}
