<?php

$text = "my name is prajyot mane. I'm a cs student soon joining a company as a software engineer. I from pune MH12. Email :- userexample12342@example.com";

// preg_match: Check for a pattern (e.g., zip code)
if (preg_match("/\d{2}/", $text, $matches)) {
    echo "2 digits :" . $matches[0] . "\n";
}

// preg_match: Email validation pattern
$emailPattern = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i";
if (preg_match($emailPattern, $text, $emailMatches)) {
    echo "email :- " . $emailMatches[0] . "\n";
}

// preg_replace: replace digits with *
$maskedText = preg_replace("/\d/", "*", $text);
echo "Masked text: " . $maskedText . "\n";

// make all uppercase
if (preg_match_all("/[A-Z][a-z]*/", $text, $allMatches)) {
    echo "Title case words found: " . implode(", ", $allMatches[0]) . "\n";
}
