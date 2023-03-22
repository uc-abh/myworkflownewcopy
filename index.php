<?php
/**
 * File-level documentation comment.
 *
 * This file contains the Foo class and a function to add two numbers.
 */

class Foo {
     public function bar() {
          echo 'Hello World!';
     }
}

/**
 * Add two numbers.
 *
 * @param  int $a The first number to add.
 * @param  int $b The second number to add.
 * @return int The sum of the two numbers.
 */
function add( $a, $b ) {
     return $a + $b;
}
