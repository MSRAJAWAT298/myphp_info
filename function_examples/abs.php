<?php require_once('../include/header.php') ?>
<div class="container-fluid mt-5">
<pre>
$abs1 = gmp_abs("274982683358");
$abs2 = gmp_abs("-274982683358");
echo gmp_strval($abs1) . "\n";
echo gmp_strval($abs2) . "\n";
The above example will output:
274982683358
274982683358
</pre>
</div>
<?php require_once('../include/footer.php') ?>
