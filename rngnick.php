#!/usr/bin/php5
<?php
/*
GOATSE PUBLIC LICENSE (GPL)
  VERSION 3.1 JANUARY 2014

* g o a t s e x * g o a t s e x * g o a t s e x *
g                                               g  
o /     \             \            /    \       o
a|       |             \          |      |      a
t|       `.             |         |       :     t
s`        |             |        \|       |     s
e \       | /       /  \\\   --__ \\       :    e
x  \      \/   _--~~          ~--__| \     |    x  
*   \      \_-~                    ~-_\    |    *
g    \_     \        _.--------.______\|   |    g
o      \     \______// _ ___ _ (_(__>  \   |    o
a       \   .  C ___)  ______ (_(____>  |  /    a
t       /\ |   C ____)/      \ (_____>  |_/     t
s      / /\|   C_____)       |  (___>   /  \    s
e     |   (   _C_____)\______/  // _/ /     \   e
x     |    \  |__   \\_________// (__/       |  x
*    | \    \____)   `----   --'             |  *
g    |  \_          ___\       /_          _/ | g
o   |              /    |     |  \            | o
a   |             |    /       \  \           | a
t   |          / /    |         |  \           |t
s   |         / /      \__/\___/    |          |s
e  |           /        |    |       |         |e
x  |          |         |    |       |         |x
* g o a t s e x * g o a t s e x * g o a t s e x *
  
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/


  $prefix = array(
    'l33t',
    'f1r3w4ll',
    'b4ckd00r',
    'ascii',
    'h3x',
    'b1n4ry',
    'fuZz13',
    'm41nfRam3',
    's1l3nt',
    'v01d',
    'pr0xy',
    'pr0',
    'm3t4',
    'XpL0i7',
    'sh4d0w',
    'cYb3r',
    'r0gue',
    'liQuiD',
    'n1ght',
    't0xIc',
    'zer0',
    'd4rk',
    'r3d',
    'blu3',
    'li9ht'
  );

  $suffix = array(
    'h4xx0r',
    'sn34k3R',
    'f4k0r',
    'pUnK',
    'cr4sH',
    'pl4y0r',
    'cYph0r',
    'dA3m0n',
    'phr33keR',
    'fuZZ3r',
    'cr4ck0r',
    'bre4ch',
    'w1re',
    'd3str0yer',
    'l3g3nd',
    '0v3rdr1v3',
    'ph4nt0m',
    'sk3let0n',
    'kn1ght',
    '0verr1de',
    'c001',
    'shad0w',
    'bu11',
    'phr34k'
  );

  echo get_rand($prefix) . '-' . get_rand($suffix);
  
  function get_rand($input_array) {
    return $input_array[rand(0, count($input_array) -1)];
  }

?>
