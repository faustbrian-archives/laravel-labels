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

namespace Konceiver\Labels\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Konceiver\Labels\Models\Label;
use Konceiver\Labels\Tests\TestCase;
use Konceiver\Labels\Tests\Unit\ClassThatHasLabels;

/**
 * @covers \Konceiver\Labels\Models\Label
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
        Model::unguard();

        return Label::create([
            'labelable_id'   => $this->user()->id,
            'labelable_type' => ClassThatHasLabels::class,
            'name'           => $this->faker->firstName,
            'description'    => $this->faker->paragraph,
            'color'          => $this->faker->hexColor,
        ]);
    }
}
