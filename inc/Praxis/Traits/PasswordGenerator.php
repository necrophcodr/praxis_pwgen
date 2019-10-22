<?php
namespace Praxis\Traits;

trait PasswordGenerator {
    private function _generate( $in, int $length ) {
        if( $length < 1) {
            throw new \Exception('$length must at least one.');
        }
        $pwd = "";
        $groups= [];
        foreach( $in as $group ) {
            $groups[$group]=0;
        }
        while( mb_strlen($pwd) < $length ) {
            $next_group = random_int( 0, count($in)-1 );
            if( $length-mb_strlen($pwd) === count($groups) && count($groups) > 0) {
                foreach( $groups as $group => $used ) {
                    $next_byte = random_int( 0, mb_strlen($in[$group])-1 );
                    $groups[$group]=1;
                    $pwd = $pwd . $in[$group][$next_byte];
                }
            }
            $next_byte = random_int( 0, mb_strlen($in[$next_group])-1 );
            array_splice($groups, $next_group, 1);
            $pwd = $pwd . $in[$next_group][$next_byte];
        }
        return $pwd;
    }
}
?>