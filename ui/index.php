<?php

if (isset($_REQUEST['custom_css'])) {
    echo 'request: ';
    var_dump($_REQUEST);
} else {
    echo 'server:';
    var_dump($_SERVER);
}

?>

<h1>Custom CSS</h1>

<form action="/plenty/ui-plugin/production/customcss/ui/index.php?action=saveCustomCss">
    <textarea name="custom_css"></textarea>
    <br>
    <input type="submit" value="Speichern">
</form>
