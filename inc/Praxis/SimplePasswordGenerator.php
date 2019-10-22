<?php
namespace Praxis\Helpers;
include_once "Traits/PasswordGenerator.php";

class SimplePasswordGenerator {
    use \Praxis\Traits\PasswordGenerator;

    public $src = [
        "0123456789"
        ,"abcdefghijklmnopqrstuvwxyz"
        ,"ABCDEFGHIJKLMNOPQRSTUVWXYZ"
        ,",.-'!#¤%&/()=?@£\${[]}|~*"
    ];

    public function Generate(int $length) {
        return $this->_generate($this->src, $length);
    }
}
?>