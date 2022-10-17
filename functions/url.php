<?php
function url_redirect($values = [])
{

    header('Location: ' . PAGE_URL . url_generate($values));

    exit;
}

function url_generate($values)
{

    $buildQueryString = array_merge($_GET, $values);
    return '?' . http_build_query($buildQueryString);
}
