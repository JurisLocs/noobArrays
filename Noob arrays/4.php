<?php
function capitalizeNames(string $names) {
    return strtoupper($names);
}
print_r(array_map("capitalizeNames", ["bob", "dfgdfg", "obo"])) ;