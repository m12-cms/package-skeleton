<?php

namespace {{namespace}}\Tests\Unit;

use {{namespace}}\Models\ExampleModel;
use {{namespace}}\Tests\TestCase;

class ExampleModelTest extends TestCase
{
    public function test_factory_creates_example_model(): void
    {
        $model = ExampleModel::factory()->create(['name' => 'Test']);

        $this->assertEquals('Test', $model->name);
    }
}
