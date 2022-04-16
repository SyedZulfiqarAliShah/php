<?php
namespace basics\subdir;

function c(){
    echo "<br> I am function C() defined in namespace \'basics\subdir\' in the file \"nmspc-3.php\"";
}

function d(){
    echo "<br> I am function D() defined in namespace \'basics\subdir\' in the file \"nmspc-3.php\"";
}

// Now we can call these two functions in any other file through the namespace basics\subdir.
// But remember that first you must have to include the file nmspc-2.php
// Also remember to qualify the function names with complete namespace
?>
