<?php

// Coalesce ??
function doIt(...$var)
{
    echo $var[0] ?? "Default Value";
}
doIt();
