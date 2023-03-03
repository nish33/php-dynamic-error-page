<?php
$err_array = array(
    "404" => array(
        "status_text" => "Not Found",
        "message" => "The content you were looking for could not be found. It either does not exist or has been moved permanently."
    ),
    "500" => array(
        "status_text" => "Internal Server Error",
        "message" => "Sorry! It's not you, it's us. We'll try to resolve the issue soon."
    ),
    "400" => array(
        "status_text" => "Bad Request",
        "message" => "Are you sure you are requesting for this content?"
    ),
    "403" => array(
        "status_text" => "Forbidden",
        "message" => "Sorry! But you are not allowed to view this content. We are keeping it within us."
    ),
    "401" => array(
        "status_text" => "Unauthorized Access",
        "message" => "Sorry! But there are some things that we allow to authorized personnel only. Are you sure you are authorized?"
    ),
    "408" => array(
        "status_text" => "Request Timeout",
        "message" => "It took too long to load the content. Please check your network."
    )
);
?>