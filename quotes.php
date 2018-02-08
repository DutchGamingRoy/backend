<?php
echo <<<TEKST
    <br>What is the difference between single and double quotes first?
    <br>At first glance they seem to do the same thing, you can use both strings.
    <br>The difference is in paring.

    <br>When a string (a string) is echoed by php, it is parsed. That sounds difficult,
    <br>but it basically means that string is examined whether there are special characters in it,
    <br>variables etc. The computer can do something with it, now that knows exactly what that should put down.
TEKST;
?>