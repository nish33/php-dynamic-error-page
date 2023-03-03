# php-dynamic-error-page

errors.php page contains an array in the format:
    "error_code" => array(
        "status_text" => "Content",
        "message" => "Content"
    )
Add all the http errors you want in the same format.

In index.php, there are three variables:
    $err_code: This can be set when you send a request to the server and get the response.
    $status_text: This contains the default value which will be displayed, if the above set err_code is not found in errors array of errors.php page.
    $err_msg: This contains the default value which will be displayed, if the above set err_code is not found in errors array of errors.php page.
