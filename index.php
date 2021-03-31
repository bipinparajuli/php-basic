<?php

echo "Hello world";

$expression = false;

?>

<h1>Hello html</h1>

<?php if ($expression == true): ?>
  This will show if the expression is true.
<?php else: ?>
  Otherwise this will show.
<?php endif; ?>