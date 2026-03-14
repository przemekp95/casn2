<?php
/**
 * Check what slug Str::slug() actually generates
 */

// Simulate Laravel's Str::slug function behavior
function slug($string) {
    // Convert to lowercase
    $string = strtolower($string);
    // Replace special characters and spaces with hyphens
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    // Remove multiple consecutive hyphens
    $string = preg_replace('/-+/', '-', $string);
    // Trim hyphens from beginning and end
    $string = trim($string, '-');
    return $string;
}

$title = 'Wojska Obrony Terytorialnej (WOT) w latach 2016-2022 – geneza, perspektywy i historia kampanii dyskredytacyjnej';

echo "Original title:\n{$title}\n\n";
echo "Generated slug:\n" . slug($title) . "\n\n";

echo "Length of generated slug: " . strlen(slug($title)) . "\n";
echo "Length of expected slug: " . strlen('wojska-obrony-terytorialnej-wot-w-latach-2016-2022-geneza-perspektywy-i-historia-kampanii-dyskredytacyjnej') . "\n";
