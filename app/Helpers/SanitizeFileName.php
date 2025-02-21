<?php

use Illuminate\Support\Str;

if (!function_exists('sanitizeFileName')) {
    function sanitizeFileName($name, $maxLength = 100) {
        // Remove all characters except letters, numbers, hyphens, and underscores + .
        $safeName = preg_replace('/[^A-Za-z0-9\-_.]/', '_', $name);

        // Limit the length of the name
        $safeName = Str::limit($safeName, $maxLength, '');

        return $safeName;
    }
}
