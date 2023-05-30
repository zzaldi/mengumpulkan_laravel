<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use illuminate\Support\Facades\Config;

class configurationtest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $x1 = config(" matapelajaran.matapelajaran.x1 ");


        $X1config = config::get("matapelajaran.matapelajaran_xi.x3.xx1");

        $x2 = config(
    );
        self::assertEquals($x1, "kelas x1");
        self::assertEquals($x2, "kelas xx1");
        self::assertEquals($X1config, $x1);

    }
}
