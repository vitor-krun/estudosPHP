<?php

function load()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";
    if (!file_exists($page)) {
        // throw new \Exception("Opa, algo deu errado!");
        throw new \Exception('<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
        <h1>Opa, algo deu errado!</h1>
        </div>
      </div>');
    }
    return $page;
}