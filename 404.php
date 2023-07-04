<?php
$title = '404 Not Found'; // Title for the 404 page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <style>
        body {
            background-color: #111; /* Use darker shades of red for the linear gradient background */
            color: white;
            font-family: 'OldJapaneseEnglishAccent', Arial, sans-serif; /* Use custom font */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .message {
            font-size: 16px;
            margin-top: 20px;
        }
        .home-link {
            color: #fff;
            text-decoration: underline;
        }
        @font-face {
            font-family: 'OldJapaneseEnglishAccent';
            src: url('old-japanese-english-accent.woff') format('woff'); /* Replace with your custom font file */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="logo"><?php echo $title; ?></h1>
        <p class="message">Oops! The page you are looking for could not be found.</p>
        <p class="message">Please <a class="home-link" href="/">click here</a> to return to the homepage.</p>
    </div>
</body>
</html>
