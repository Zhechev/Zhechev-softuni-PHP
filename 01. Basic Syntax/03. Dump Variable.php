<?php
$input = array(1,2,3);
if (is_numeric($input)) {
    echo var_dump($input);
} else {
    echo gettype($input);
}
?>
