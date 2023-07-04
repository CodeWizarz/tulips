<?php
$title = 'レッドスパイダー'; // Japanese title
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="lol.ico" type="image/x-icon">
    <style>
        body {
            background-color: #111; /* Change background color to darkest gray */
            background-image: linear-gradient(to right, rgba(251, 214, 232, 0.5), rgba(244, 147, 192, 0.5)), url('background.jpg'); 
            background-blend-mode: overlay; 
            color: white;
            font-family: 'OldJapaneseEnglishAccent', Arial, sans-serif; /* Use custom font */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex; /* Use flexbox for layout */
            align-items: center;
            justify-content: space-between;
        }
        .signup, .signin {
            display: flex;
            gap: 5px;
}
        .logo {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            padding: 0;
            cursor: pointer;
        }
        .content {
            color: white;    
        }
        .signup button {
            background-color: #ffcdd2; /* Shady light red color */
            color: #222;
            padding: 10px 20px;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            margin-left: 430px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); 
        }
        .signin button {
            background-color: #ffcdd2; /* Shady light red color */
            color: #ffcdd2;
            padding: 10px 20px;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
            font-family: 'OldJapaneseEnglishAccent', Arial, sans-serif; /* Use custom font */
            transition: transform 0.3s ease-in-out;
        }
        .signin button:hover {
            transform: scale(1.1); /* Apply scale transformation on hover */
        }

        @font-face {
            font-family: 'OldJapaneseEnglishAccent';
            src: url('old-japanese-english-accent.woff') format('woff'); /* Replace with your custom font file */
        }
    </style>
    <script>
        function reloadPage() {
            location.reload();
        }
    </script>
</head>
<body>
    <div class="container">
        <a class="logo" onclick="reloadPage()"><?php echo $title; ?></a>
        <!-- <div class="signup">
            <button>Sign Up</button>
        </div> -->
        <div class="signin">
            <button>ENTER</button>
        </div>
    </div>
    <div class="content">
        <!-- Your webpage content here -->
    </div>
</body>
</html>
