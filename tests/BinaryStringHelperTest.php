<?php 
/*
 * This file is part of mracine/php-binary-string.
 *
 * (c) Matthieu Racine <matthieu.racine@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace mracine\BinaryStringHelper\Tests;

use PHPUnit\Framework\TestCase;

use mracine\Helpers\BinaryStringHelper;

/**
 * @coversDefaultClass mracine\Helpers\BinaryStringHelper
 */
class BinaryStringHelperTest extends TestCase
{
    /**
     * @dataProvider IntegerToNBOBinaryStringProvider 
     * @covers ::IntegerToNBOBinaryString
     */
    public function test__IntegerToNBOBinaryString(int $value, string $expected)
    {
        $this->assertEquals($expected, BinaryStringHelper::IntegerToNBOBinaryString($value));
    }

    public function IntegerToNBOBinaryStringProvider()
    {
        return [
            [0, chr(0)], // lower boundary value 
            [0xFFFFFFFF, chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF)], // 32 bits maximal value

            // strange behaviour :
            //   TypeError: Argument 1 passed to mracine\BinaryStringHelper\Tests\BinaryStringHelperTest::test__IntegerToNBOBinaryString() must be of the type integer, float given
            //   Seems that php auto convert to float 0xFFF.... 
            // 
            //[0xFFFFFFFFFFFFFFFF, chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF)],

            // -1 is encoded with 0xFFFFFFF..... 
            // 64 bits maximal value (on a 64 bits system)
            [-1, chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF).chr(0xFF)], // 64 bits upper boundary value
            // Let's try some random value
            [0x390DDD99, chr(0x39).chr(0x0D).chr(0xDD).chr(0x99)], 
            [0xAC78AA0,  chr(0x0A).chr(0xC7).chr(0x8A).chr(0xA0)], 
        ];
    }
}