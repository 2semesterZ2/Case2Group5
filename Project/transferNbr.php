<?php 
    $f = new FilesystemIterator("photos/", FilesystemIterator::SKIP_DOTS);  

    echo "<p id='nbr'>" . iterator_count($f) . "</p>";
?>
    
