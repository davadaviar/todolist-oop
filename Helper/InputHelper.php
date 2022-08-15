<?php

namespace Helper {

    class InputHelper {
        
        static function input(string $info) : string {
            echo "$info : " . PHP_EOL;

            $result = fgets(STDIN);
            return trim($result);
        }
    }
}