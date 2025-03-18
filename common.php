<?php
function escape($data) {

    $data = htmlsepcialcharacters($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);
    return($data);
}

?>