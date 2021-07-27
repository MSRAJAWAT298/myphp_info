<?php require_once('include/header.php') ?>
<?php require_once('include/navbar.php') ?>
<div class="container-fluid">
    <h1 class="pt-2">BC Math Functions</h1>
    <p>BC Stands for Binary Calculator. BCMath is set of PHP functions that allow to you to use Arbitrary-precision arithmetic. This package is basically going to be a wrapper for these functions so that they can be used in an object oriented way. The class will allow you to input certain values and run one of the BCMath commands.</p>
    <hr>
    <div class="row">
        <div class="col-lg-2">
            <h4> List of functions In BC Math</h4><hr>
            <ul class="list-group">
                <li class="list-group-item"><a href="function.bcadd.php" title="Add two arbitrary precision numbers">bcadd</a></li>
                <li class="list-group-item"><a href="function.bccomp.php" title="Compare two arbitrary precision numbers">bccomp</a></li>
                <li class="list-group-item"><a href="function.bcdiv.php" title="Divide two arbitrary precision numbers">bcdiv</a></li>
                <li class="list-group-item"><a href="function.bcmod.php" title="Get modulus of an arbitrary precision number">bcmod</a></li>
                <li class="list-group-item"><a href="function.bcmul.php" title="Multiply two arbitrary precision numbers">bcmul</a></li>
                <li class="list-group-item"><a href="function.bcpow.php" title="Raise an arbitrary precision number to another">bcpow</a></li>
                <li class="list-group-item"><a href="function.bcpowmod.php" title="Raise an arbitrary precision number to another, reduced by a specified modulus">bcpowmod</a></li>
                <li class="list-group-item"><a href="function.bcscale.php" title="Set or get default scale parameter for all bc math functions">bcscale</a></li>
                <li class="list-group-item"><a href="function.bcsqrt.php" title="Get the square root of an arbitrary precision number">bcsqrt</a></li>
                <li class="list-group-item"><a href="function.bcsub.php" title="Subtract one arbitrary precision number from another">bcsub</a> </li>
                <li class="list-group-item"><a href="func_get_arg" title="func_get_arg">func_get_arg</a> </li>
                <li class="list-group-item"><a href="bcscale" title="bcscale">bcscale</a></li>
            </ul>
        </div>
        <div class="col-lg-10">
            <h4> Use of Function</h4><hr>
            <?php require_once('bcadd.php'); ?>
        </div>
</div>
<?php require_once('include/footer.php') ?>
<!--
Cheat Sheet
[abc]	A single character of: a, b or c
[^abc]	Any single character except: a, b, or c
[a-z]	Any single character in the range a-z
[a-zA-Z]	Any single character in the range a-z or A-Z
^	Start of line
$	End of line
\A	Start of string
\z	End of string	
.	Any single character
\s	Any whitespace character
\S	Any non-whitespace character
\d	Any digit
\D	Any non-digit
\w	Any word character (letter, number, underscore)
\W	Any non-word character
\b	Any word boundary	
(...)	Capture everything enclosed
(a|b)	a or b
a?	Zero or one of a
a*	Zero or more of a
a+	One or more of a
a{3}	Exactly 3 of a
a{3,}	3 or more of a
a{3,6}	Between 3 and 6 of a

Options
i case insensitive  m treat as multi-line string  s dot matches newline  x ignore whitespace in regex  A matches only at the start of string  D matches only at the end of string  U non-greedy matching by default
-->