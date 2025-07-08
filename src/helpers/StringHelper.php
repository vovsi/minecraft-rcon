<?php

namespace Vovsi\MinecraftRcon\helpers;

class StringHelper
{
    /**
     * Get clear username.
     * @param string $input
     * @return string
     */
    public static function sanitizeUsername(string $input): string {
        return preg_replace('/[^a-zA-Z0-9_]/', '', $input);
    }

    /**
     * Get clear item name.
     * @param string $input
     * @return string
     */
    public static function sanitizeItemname(string $input): string {
        return preg_replace('/^minecraft:[a-z0-9_]+(,\s*minecraft:[a-z0-9_]+)*$/', '', $input);
    }
}