<?php

function redirect($var)
{
    echo "
    <script>
        window.location.replace('http://localhost/course/4_store_database/$var');
    </script>
    ";
}
