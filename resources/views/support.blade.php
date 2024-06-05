<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Speedster</title>
    <link rel="stylesheet" href="css/style_support.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="img\LogoSpeedster.png" alt="Speedster Logo">
            <h1>Speedster</h1>
        </div>
        <div class="content">
            <h2>Support Speedster</h1>
            <p>Thank you so much for thinking about supporting this project. It would not be possible without you and your continued support.</p>
            <div class="button-container">
                <button class="button" id="supportButton">
                    <img src="img\DonateIcon.png" alt="Donate Icon">
                    <div>Donate<div>
                </button>
            </div>
            <p id="feedback">BSI bank account number copied to clipboard: 123456789</p>
            <div>
    <script>
        document.getElementById('supportButton').addEventListener('click', function() {
            var bankAccountNumber = '123456789';
            var tempInput = document.createElement('input');
            tempInput.value = bankAccountNumber;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            document.getElementById('feedback').style.display = 'block';
        });
    </script>
        <div class="footer">
            <a href="/contact"><img src="/img\ContactIcon.png" alt="Contact"></a>
            <a href="/support"><img src="/img\SupportIcon.png" alt="Support"></a>
            <a href="https://github.com/NaufalAqil18/SpeedSter" target="_blank"><img src="/img\GitHubIcon.png" alt="GitHub"></a>
            <a href="/instagram"><img src="/img\InstagramIcon.png" alt="Instagram"></a>
            <a href="/terms"><img src="/img\TermsIcon.png" alt="Terms"></a>
        </div>
        <div class="footer">
            <p>&copy; Copyright 2024</p>
        </div>
    </div>
</body>
</html>