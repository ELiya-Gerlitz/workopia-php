<?php

//  diese Funktionen sind Dirs zu benützen von alle Plätze auf der App. : 
function basePath($path = ''):string{
    return __DIR__ . '/' . $path;  // __DIR__ das ergibt den |absoluten| Path.
}