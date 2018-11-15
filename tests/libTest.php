<?php
namespace sipuni;

use sipuni\fn;
use PHPUnit\Framework\TestCase;

class libTest extends TestCase
{
    /** @dataProvider provideTestData */
    public function testSortLettersInWordsArray(string $input, string $expected)
    {
        $result = fn\sortLettersInWordsArray($input);
        $this->assertEquals($expected, $result);
    }

    public function provideTestData() {
        return [
            ['', ''],
            [
                'abc',
                'abc',
            ],
            [
                'lemon orange banana apple',
                'elmno aegnor aaabnn aelpp',
            ],
            [
                'лимон апельсин банан яблоко',
                'илмно аеилнпсь аабнн бклооя',
            ],
            [
                'αβγαβγ αβγαβγαβγ',
                'ααββγγ αααβββγγγ',
            ],
        ];
    }

    public function testSplitTextToWords()
    {
        $input = "Текст текст2    текст3            ,,,текст4\nтекст5";
        $result = fn\splitTextToWords($input);
        $this->assertEquals([
            'Текст',
            'текст2',
            'текст3',
            ',,,текст4',
            'текст5',
        ], $result);
    }
}