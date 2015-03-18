<?php

namespace TDJ\Utils;

/**
 * Store key-value pairs
 *
 * @package   TDJ\Utils
 * @author    Tim de Jong <timothydejong@me.com>
 * @copyright 2015 Tim de Jong
 * @version   1.0
 */
class Codex_Registry {

    /**
     * Key-value collection
     *
     * @var array
     */
    private static $data = array();

    /**
     * Set a key-value pair
     *
     * @param $key
     * @param $value
     */
    public static function set($key, $value) {

        self::$data[$key] = $value;

    }

    /**
     * Get a value
     *
     * @param $key
     * @return null
     */
    public static function get($key) {

        if (isset(self::$data[$key])) {
            return self::$data[$key];
        }

        return null;

    }

}

