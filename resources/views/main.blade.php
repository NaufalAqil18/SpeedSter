<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Test with Navbar</title>
    <link rel="stylesheet" href="css/style_main.css">
    <link rel="stylesheet" href="css/style_terms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header, footer {
            background-color: #2E343D;
            color: #ccc;
            text-align: center;
            padding: 10px 0;
        }
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #1a1a2e;
        }
        .footer-links {
            display: flex;
            gap: 20px;
            padding: 20px;
            justify-content: center;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 16px;
        }
        .footer-links a:hover {
            color: #fff;
        }
        #typingChart {
            max-width: 600px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <a href="dashboard"><img src="img\LogoSpeedster.png" alt="Speedster Logo"></a>
            <h1>Speedster</h1>
        </div>
    </header>

    <main>
        <div class="wrapper">
            <input type="text" class="input-field">
            <div class="content-boxt">
                <div class="typing-text">
                    <p></p>
                </div>
                <div class="content">
                    <ul class="result-details">
                        <li class="time">
                            <p>Time left:</p>
                            <span><b>60</b>s</span>
                        </li>
                        <li class="mistake">
                            <p>Mistakes:</p>
                            <span><b>0</b></span>
                        </li>
                        <li class="wpm">
                            <p>WPM:</p>
                            <span>0</span>
                        </li>
                        <li class="cpm">
                            <p>CPM:</p>
                            <span>0</span>
                        </li>
                    </ul>
                    <button>Try Again</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer">
            <a href="/contact"><img src="/img\ContactIcon.png" alt="Contact"></a>
            <a href="/support"><img src="img\SupportIcon.png" alt="Support"></a>
            <a href="https://github.com/NaufalAqil18/SpeedSter" target="_blank"><img src="img\GitHubIcon.png" alt="GitHub"></a>
            <a href="/instagram"><img src="img\InstagramIcon.png" alt="Instagram"></a>
            <a href="/terms"><img src="img\TermsIcon.png" alt="Terms"></a>
            <a href="/leaderboard"><img src="img\Leaderboard.png" alt="Leaderboard"></a>
        </div>
        <div class="footer">
            <p>&copy; Copyright 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/paragraph.js"></script>
    <script src="js/script_main.js"></script>
</body>
</html>
