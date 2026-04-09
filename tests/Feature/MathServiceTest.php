<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\MathService;

class MathServiceTest extends TestCase
{
    public function test_add_function()
    {
        $math = new MathService();
        $result = $math->add(2, 3);

        $this->assertEquals(5, $result);
    }
}