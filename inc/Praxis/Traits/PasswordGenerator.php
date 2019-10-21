<?php
namespace Praxis\Traits;

trait PasswordGenerator {
    private function _generate( string $in, int $length ) {
        if( $length < 1) {
            throw new \Exception('$length must at least one.');
        }
        $pwd = "";
        while( mb_strlen($pwd) < $length ) {
            $next_byte = $in[ random_int( 0, mb_strlen($in)-1 ) ];
            $pwd = $pwd . $next_byte;
        }
        return $pwd;
    }
}
?>