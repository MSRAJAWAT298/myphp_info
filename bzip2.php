<?php require_once('include/header.php') ?>
<?php require_once('include/navbar.php') ?>
<div class="container-fluid">
    <h1 class="pt-2">Bzip2 Functions</h1>
    <p>The bzip2 functions can be used to transparently read and write bzip2 (.bz2) compressed files.The Bzip2 module can use the functions of the bzip2 library by Julian Seward. This module can require bzip2/libbzip2 version >= 1.0.x.Bzip2 can support in PHP is not enabled by default. We need to use them --with-bz2[=DIR] configuration option when compiling PHP to enable bzip2 support.</p>
    <hr>
    <div class="row">
        <div class="col-lg-2">
            <h4> List of functions In Bzip2</h4><hr>
            <ul class="list-group">
                <li class="list-group-item"><a href="#function_bzip2.php"  title="Close a bzip2 file">bzclose </a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title="Compress a string into bzip2 encoded data">bzcompress</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title="Decompresses bzip2 encoded data">bzdecompress</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title=" Returns a bzip2 error number">bzerrno</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title=" Returns the bzip2 error number and error string in an array">bzerror</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title="Returns a bzip2 error string">bzerrstr</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title="Do nothing">bzflush</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title="Opens a bzip2 compressed file">bzopen</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title="Binary safe bzip2 file read">bzread</a></li>
                <li class="list-group-item"><a href="#function_bzip2.php"  title=" Binary safe bzip2 file write">bzwrite</a> </li>
            </ul>
        </div>
        <div class="col-lg-10">
            <h4> Use of Function</h4><hr>
            <?php require_once('bcadd.php'); ?>
        </div>
</div>

<?php require_once('include/footer.php') ?>
<?php
echo '<br>'.basename(__FILE__).' '.__LINE__.'<pre> data :: '; print_r(get_defined_functions()); echo '</pre>'; exit;
?>
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