<?php

if (! function_exists('pp')) {
    function pp($dump)
    { 
        echo highlight_string("<?php\n\$data =\n" . var_export($dump, true) . ";\n//>");
        echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; </script>';
        die();
    }
}

if (! function_exists('dd')) {
    function dd($dump)
    {
        var_dump($dump);
        die();
    }
}