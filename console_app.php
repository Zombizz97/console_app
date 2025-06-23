<?php
class StringUtils {
    public static function reverseString(string $input): string {
        $reverse = implode('', array_reverse(mb_str_split($input, 1, 'UTF-8')));
        $result = "Bonjour\n" . $reverse;

        if ($reverse === $input) {
            $result .= "\nBien dit !";
        }

        $result .= "\nAu revoir";
 echo $result;
        return $result;
    }
}
