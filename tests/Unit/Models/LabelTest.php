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

namespace KodeKeep\Labels\Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use KodeKeep\Labels\Models\Label;
use KodeKeep\Labels\Tests\TestCase;

/**
 * @covers \KodeKeep\Labels\Models\Label
 */
class LabelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_be_found_by_its_slug(): void
    {
        $label = $this->createLabel();

        $this->assertSame(Label::findBySlug($label->slug)->id, $label->id);
    }

    private function createLabel(): Label
    {
        return Label::create([
            'name'        => $this->faker->firstName,
            'description' => $this->faker->paragraph,
            'color'       => $this->faker->hexColor,
        ]);
    }
}
