<?php
namespace TransliterateCyrillicTwigFilterPlugin;

/**
 * Transliterates cyrillic text into latin
 *
 * Class TransliterateCyrillicTwigFilterWrapper
 *
 * @package Grav\Plugin
 * @return  void
 * @license MIT License by Ole Vik
 * @license MIT License by Captain Flint
 */
class TransliterateCyrillicTwigFilterMethod
{
    /**
     * Transliterate text from cyrillic to latin
     *
     * @param string $text Text to transliterate
     *
     * @return void
     */
    public static function process($text)
    {
        //Замены букв
        $text = str_replace('Ж', 'ZH', $text); // Ж
        $text = str_replace('ж', 'zh', $text); // ж
        $text = str_replace('ё', 'yo', $text); // ё
        $text = str_replace('Ё', 'YO', $text); // Ё
        $text = str_replace('ю', 'yu', $text); // ю
        $text = str_replace('Ю', 'YU', $text); // Ю
        $text = str_replace('е', 'e', $text); // е
        $text = str_replace('Е', 'E', $text); // Е
        $text = str_replace('а', 'a', $text); // а
        $text = str_replace('А', 'A', $text); // А
        $text = str_replace('б', 'b', $text); // б
        $text = str_replace('Б', 'B', $text); // Б
        $text = str_replace('з', 'z', $text); // з
        $text = str_replace('З', 'Z', $text); // З
        $text = str_replace('й', 'j', $text); // й
        $text = str_replace('Й', 'Y', $text); // Й
        $text = str_replace('ч', 'ch', $text); // ч
        $text = str_replace('Ч', 'CH', $text); // Ч
        $text = str_replace('ц', 'c', $text); // ц
        $text = str_replace('Ц', 'C', $text); // Ц
        $text = str_replace('д', 'd', $text); // д
        $text = str_replace('Д', 'D', $text); // Д
        $text = str_replace('э', 'e', $text); // э
        $text = str_replace('Э', 'E', $text); // Э
        $text = str_replace('ф', 'f', $text); // ф
        $text = str_replace('Ф', 'F', $text); // Ф
        $text = str_replace('г', 'g', $text); // г
        $text = str_replace('Г', 'G', $text); // Г
        $text = str_replace('ы', 'y', $text); // ы
        $text = str_replace('Ы', 'Y', $text); // Ы
        $text = str_replace('и', 'i', $text); // и
        $text = str_replace('И', 'I', $text); // И
        $text = str_replace('к', 'k', $text); // к
        $text = str_replace('К', 'K', $text); // К
        $text = str_replace('л', 'l', $text); // л
        $text = str_replace('Л', 'L', $text); // Л
        $text = str_replace('м', 'm', $text); // м
        $text = str_replace('М', 'M', $text); // М
        $text = str_replace('н', 'n', $text); // н
        $text = str_replace('Н', 'N', $text); // Н
        $text = str_replace('о', 'o', $text); // о
        $text = str_replace('О', 'O', $text); // О
        $text = str_replace('п', 'p', $text); // п
        $text = str_replace('П', 'P', $text); // П
        $text = str_replace('р', 'r', $text); // р
        $text = str_replace('Р', 'R', $text); // Р
        $text = str_replace('с', 's', $text); // с
        $text = str_replace('С', 'S', $text); // С
        $text = str_replace('ш', 'sh', $text); // ш
        $text = str_replace('Ш', 'SH', $text); // Ш
        $text = str_replace('щ', 'sch', $text); // щ
        $text = str_replace('Щ', 'SCH', $text); // Щ
        $text = str_replace('т', 't', $text); // т
        $text = str_replace('Т', 'T', $text); // Т
        $text = str_replace('у', 'u', $text); // у
        $text = str_replace('У', 'U', $text); // У
        $text = str_replace('х', 'h', $text); // х
        $text = str_replace('Х', 'H', $text); // Х
        $text = str_replace('в', 'v', $text); // в
        $text = str_replace('В', 'V', $text); // В
        $text = preg_replace('/ъ(я|ya|yu|yü|ye|yo|yö|ü|ö)/iu', '$1', $text); // ъя, ъю, ъё, …
        $text = str_ireplace('ъ', 'ʼ', $text); // ъ
        $text = str_replace('ь', '', $text); // ь
        $text = str_replace('я', 'ya', $text); // я
        $text = str_replace('Я', 'YA', $text); // Я
    
        return $text;
    }
}
