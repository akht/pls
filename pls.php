<?php

function pls($path = ".") {
    $dir = dir($path);

    while (false != ($entry = $dir->read())) {
        if ($entry[0] == ".") {
            continue;
        }
        echo $entry . "\n";
    }

    $dir->close();
}

pls();
