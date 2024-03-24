<?php

function load()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";
    if (!file_exists($page)) {
        throw new \Exception(
          '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Opa, algo deu errado!<strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
    }
    return $page;
}