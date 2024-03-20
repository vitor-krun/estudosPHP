<?php

function flash($key, $message, $type)
{
    if (empty ($type)) {
        $type = 'danger';
    }
    if (!isset ($_SESSION['flash'][$key])) {
        // $_SESSION['flash'][$key] = '<span class="alert alert-' . $type . '">' . $message . '</span>';
        $_SESSION['flash'][$key] = '
        <div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">' . $message . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}

function get($key)
{
    if (isset ($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);
        return $message ?? '';
    }
}