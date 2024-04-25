<?php

class Str
{
    /**
     * Create URL Title
     *
     * Takes a "title" string as input and creates a
     * human-friendly URL string with a "separator" string
     * as the word separator.
     *
     * @todo	Remove old 'dash' and 'underscore'.
     * @param	string	$str		Input string
     * @param	string	$separator	Word separator
     *			(usually '-' or '_')
     * @param	bool	$lowercase	Whether to transform the output string to lowercase
     * @return	string
     */
    public static function slug(string $str, string $separator = '-', bool $lowercase = true): string
    {
        $text = preg_replace('~[^\pL\d]+~u', $separator, $str);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $separator);
        $text = preg_replace('~-+~', $separator, $text);
        $text = $lowercase ? strtolower($text) : $text;

        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
