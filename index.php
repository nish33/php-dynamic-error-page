<?php
require "errors.php";

$err_code = "401";
$status_text = "Unexpected Error";
$err_msg = "There was an unexpected error while loading the content.";

if (array_key_exists($err_code, $err_array)) {
    $status_text = $err_array[$err_code]["status_text"];
    $err_msg = $err_array[$err_code]["message"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $err_code . "|" . $status_text; ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #fafafa;
        }

        .err-wrapper {
            height: 100vh;
            padding: 4rem;
        }

        .err-content {
            font-family: 'Lato', sans-serif;
        }

        .err-code {
            font-family: "Climate Crisis", cursive;
            font-size: 4rem;
            color: #919191;
        }
        
        .err-status-text {
            font-size: 3rem;
            font-weight: 900;
            color: #515151;
        }
        
        .err-code, .err-status-text {
            text-align: center;
        }

        .err-message {
            font-size: 1.2rem;
            color: #313131;
        }

        .err-wrapper, .navigate-button {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navigate-button a {
            font-weight: 600;
            text-decoration: none;
            color: #fff;
            background: #212121;
            padding: 1rem;
            cursor: pointer;
            border-radius: 0.5rem;
            margin-top: 1rem;
        }

        .navigate-button a:hover {
            background: #313131;
        }

        @media screen and (max-width: 768px) {
            .err-content {
                left: 0 !important;
            }
        }
    </style>
</head>
<body>
    <div class="err-wrapper">
        <div class="err-content">
            <div class="err-code">
                <h1><?php echo $err_code; ?></h1>
            </div>
            <h3 class="err-status-text"><?php echo $status_text; ?></h3>
            <div class="err-message">
                <p><?php echo $err_msg; ?></p>
            </div>
            <div class="navigate-button">
                <a href="#">Go to Homepage</a>
            </div>
        </div>
    </div>
</body>

</html>