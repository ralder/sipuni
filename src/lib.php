<?php
namespace sipuni\fn;

/**
 * @param string $text
 *
 * @return string
 */
function sortLettersInWordsArray(string $text): string
{
    return implode(' ', array_map(function (string $word) {
        $letters = splitWordToLetters($word);
        sort($letters);

        return implode('', $letters);
    }, splitTextToWords($text)));
}

/**
 * @param string $text
 *
 * @return string[]
 */
function splitTextToWords(string $text): array
{
    return preg_split('/\s+/u', $text, -1, PREG_SPLIT_NO_EMPTY);
}

/**
 * @param string $text
 *
 * @return string[]
 */
function splitWordToLetters(string $word): array
{
    return preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
}