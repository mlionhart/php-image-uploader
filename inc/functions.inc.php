<?php
function display_images()
{
    // start at current directory
    $dir = "uploads";
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    echo "<div class=\"pic mb-5\"><img src=\"uploads/$filename\" alt=\"A photo\"></div>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } // end if
}
