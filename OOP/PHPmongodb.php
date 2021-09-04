<?php

if (extension_loaded('MongoDB')) {
    echo 'MongoDB kurulu.';
} else {
    echo 'MongoDB kurulu değil.';
}

?>