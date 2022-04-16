<?php
namespace one {

    function z(){
        echo "<br>--- I am function Z() , in namespace ONE, in file nmspc-multi.php";
    }


}

namespace two {

    function z(){
        echo "<br>--- I am function Z() , in namespace TWO, in file nmspc-multi.php";
    }
}


namespace {
    include 'nmspc-0.php';
    function gt(){
          echo "<br> ***** globalfunc() is being called from within the GT() function defined in the global namespace, in file nmspc-multi.php ***";
          globalfunc();
    }
    $testing_globally_defined_var = PI * 1000;
}


// This code contains Multiple namespaces defined in a single file. Last namespace accesses global code, which
// resides in the file "nmspc-0.php"

?>
