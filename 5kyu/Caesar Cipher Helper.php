<?php
class CaesarCipher {
    private $shift;

    public function __construct($shift) {
        $this->shift = $shift % 26;
    }

    public function encode($text) {
        return $this->caesarShift($text, $this->shift);
    }

    public function decode($text) {
        return $this->caesarShift($text, 26 - $this->shift);
    }

    private function caesarShift($text, $shift) {
        $result = '';
        $text = strtoupper($text);

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_alpha($char)) {
                $newChar = chr(((ord($char) - ord('A') + $shift) % 26) + ord('A'));
                $result .= $newChar;
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}

$cipher = new CaesarCipher(5);
echo $cipher->encode('Codewars') . "\n"; 
echo $cipher->decode('BFKKQJX') . "\n"; 
?>