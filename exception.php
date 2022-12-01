<?php

    echo "exception in PHP <br>";
    function divide($a, $b) {
        if(!$b) {
            throw new Exception("Cannot divine by zero");
        }
        return $a / $b;
    }
    try {
        echo divide(10, 2);
        // echo divide(5, 0);
        echo "no errors";
    } catch(Exception $e) {
        echo "Caught exception: " . $e->getMessage() . "\n";
    } finally {
        echo "Finally come here...";
    }
    echo "program run here...";
?>
