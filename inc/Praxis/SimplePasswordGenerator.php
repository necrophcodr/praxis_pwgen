<?php
namespace Praxis\Helpers;
include_once "PasswordGenerator.php";

class SimplePasswordGenerator {
    use \Praxis\Traits\PasswordGenerator;

    public $src = "ABCDEFGabcdefg1234567890,.-'!#¤%&/()=?@£\${[]}|~*";

    public function Generate(int $length) {
        return $this->_generate($this->src, $length);
    }
}
?>