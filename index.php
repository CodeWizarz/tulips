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
            background-color: #111;
            background-image: linear-gradient(to right, rgba(251, 214, 232, 0.5), rgba(244, 147, 192, 0.5)), url('background.jpg'); 
            background-blend-mode: overlay; 
            color: white;
            font-family: 'OldJapaneseEnglishAccent', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .signup, .signin {
            display: flex;
            gap: 5px;
        }
        .blinking-text {
            position: absolute;
            bottom: -33px;
            left: 0;
            font-size: 0.7rem;
            /* font-size: 13px; */
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }
        .logo {
            font-size: 16px;
            position: relative;
            font-weight: bold;
            margin: 0;
            padding: 0;
            cursor: pointer;
        }
        .content {
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            opacity: 0.6;
            /* background-image: url('red-spider.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; */
        }
        .red-spider {
            font-size: 6em;
            position: relative;
        }

        .signin a {
            background-color: #ffcdd2;
            color: #ffcdd2;
            padding: 10px 20px;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            font-family: 'OldJapaneseEnglishAccent', Arial, sans-serif;
            transition: transform 0.5s ease-in-out;
        }
        .signin a:hover {
            transform: scale(1.1);
        }

        @font-face {
            font-family: 'OldJapaneseEnglishAccent';
            src: url('old-japanese-english-accent.woff') format('woff');
        }
        
        /* Preloader Styles */
        .preloader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #111;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
            z-index: 9999;
        }
        .drip {
    position: absolute;
    top: 50%; left: 50%;
    display: block;
    width: 100px; height: 18px;
    background: skyblue;
    border-radius: 50%;
    transform: translate(-50%,400%);
  }
  
  .drip:before, .drip:after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 100%; height: 100%;
    background: skyblue;
    border-radius: 50%;
    opacity: 0.7;
    transform: translate(-50%,-50%) scale(1);
    animation: ripple 1s infinite ease-in;
  }
  
  .drip:after {
    width: 15px; height: 15px;
    border-radius: 0 50% 50%;
    transform: translate(-50%,-1000%) rotate(45deg);
    animation: drip 1s infinite ease-in;
  }
  
  @keyframes ripple {
    0% { transform: translate(-50%,-50%) scale(1); opacity: 0.5; }
    100% { transform: translate(-50%,-50%) scale(2); opacity: 0; }
  }
  
  @keyframes drip {
    0% { transform: translate(-50%,-1000%) rotate(45deg); opacity: 0; }
    50% { transform: translate(-50%,-1000%) rotate(45deg); opacity: 1; }
    100% { transform: translate(-50%,0) rotate(45deg); }
  }
  
  
        .fade-out {
            opacity: 0;
        }
Continuation:

```php
    </style>
   
    <script>
    <?php
    function reloadPage() {
        location.reload();
    }

    
    $preloaderOverlay = '<div class="preloader-overlay"></div>';

    
    $preloaderOverlay .= '<script>setTimeout(function() { document.querySelector(".preloader-overlay").classList.add("fade-out"); }, 3000);</script>';

    
    $preloaderOverlay .= '<script>setTimeout(function() { document.querySelector(".preloader-overlay").remove(); }, 3500);</script>';

    echo $preloaderOverlay;
    ?>
</script>

</head>
<body>
    <div class="preloader-overlay">
    <div class="drip"></div>
    </div>
    <div class="container">
        <a class="logo" onclick="reloadPage()"><?php echo $title; ?><span class="blinking-text">[ETERNITAS 1899]</span></a>
        <div class="signin">
            <a href="signin.php">ENTER</a>
        </div>
    </div>
    <div class="content">
        <h2 class="red-spider">レッドスパイダー</h2>
    </div>
    <script>
        function reloadPage() {
            location.reload();
        }
    </script>
</body>
</html>