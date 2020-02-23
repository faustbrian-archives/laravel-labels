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

use KodeKeep\Labels\Models\Label;

return [

    'models' => [

        'label' => Label::class,

    ],

    'tables' => [

        'labels' => 'labels',

    ],

];
