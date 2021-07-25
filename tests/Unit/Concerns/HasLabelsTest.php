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

namespace Konceiver\Labels\Tests\Unit\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Konceiver\Labels\Tests\TestCase;

/**
 * @covers \Konceiver\Labels\Concerns\HasLabels
 */
class HasLabelsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function morphs_to_a_labelable(): void
    {
        $user = $this->user();

        $user->labels()->create([
            'name'        => $this->faker->firstName,
            'description' => $this->faker->paragraph,
            'color'       => $this->faker->hexColor,
        ]);

        $this->assertInstanceOf(MorphMany::class, $user->labels());
        $this->assertInstanceOf(Collection::class, $user->labels);
    }
}
