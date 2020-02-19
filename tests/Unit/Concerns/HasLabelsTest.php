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

namespace KodeKeep\Labels\Tests\Unit\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use KodeKeep\Labels\Tests\TestCase;
use KodeKeep\Labels\Tests\Unit\ClassThatHasLabels;

/**
 * @covers \KodeKeep\Labels\Concerns\HasLabels
 */
class HasLabelsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function morphs_to_a_labelable(): void
    {
        $this->loadLaravelMigrations(['--database' => 'testbench']);
        $this->artisan('migrate', ['--database' => 'testbench'])->run();

        $user = ClassThatHasLabels::create([
            'name'     => 'John Doe',
            'email'    => 'john@doe.com',
            'password' => 'password',
        ]);

        $user->labels()->create([
            'name'        => $this->faker->firstName,
            'description' => $this->faker->paragraph,
            'color'       => $this->faker->hexColor,
        ]);

        $this->assertInstanceOf(MorphToMany::class, $user->labels());
        $this->assertInstanceOf(Collection::class, $user->labels);
    }
}
