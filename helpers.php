<?php

//  diese Funktionen sind Dirs zu benützen von alle Plätze auf der App. : 
function basePath($path = ''): string{
    return __DIR__ . '/' . $path;  // __DIR__ das ergibt den |absoluten| Path.
}

// Meht verkürzen den Dir für den loadView von die ganze Projekt: 
function loadView($viewSectionName): void{
$viewPath =  basePath('views/'. $viewSectionName . '.view.php');
// require  basePath('views/'. $viewSectionName . '.view.php');

if(file_exists($viewPath)){
    require $viewPath;
}else{
    echo "view path {$viewSectionName} does not exist!";
}
}

// Dieselbe Sach wie zuvor : die Dir verkürzen für die 'Partials': 
function loadPartial($partialName): void{
$partialPath =  basePath("views/partials/{$partialName}.php");
if(file_exists($partialPath)){
    require $partialPath;
}else{
    echo "partial {$partialName} not found";
}
}

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function inspectAndDie($value){
    // echo '<pre>';
    // var_dump($value);
    // echo '</pre>';
    // die();
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
    
}