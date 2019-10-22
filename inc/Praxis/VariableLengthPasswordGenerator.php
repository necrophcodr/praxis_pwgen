<?php
namespace Praxis\Helpers;
include_once "Traits/PasswordGenerator.php";

class VariableLengthPasswordGenerator {
    use \Praxis\Traits\PasswordGenerator;

    public $src = [
        "0123456789"
        ,"abcdefghijklmnopqrstuvwxyz"
        ,"ABCDEFGHIJKLMNOPQRSTUVWXYZ"
        ,",.-'!#¤%&/()=?@£\${[]}|~*"
    ];
    public function Generate(int $max = 10, int $min = 1) {
        $length = random_int($min,$max);
        return $this->_generate($this->src, $length);
    }
}
?>