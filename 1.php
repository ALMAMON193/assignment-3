<?php
function stringModifi($text)
{
    $text = strtolower($text);
    $text = str_replace("brown", "red", $text);
    return $text;
}
$text = "The quick brown fox jumps over the lazy dog.";
echo stringModifi($text);
