<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Speedster</title>
    <link rel="stylesheet" href="css/style_support.css">
</head>
<body>
    <div class="container">
        <h1>Support Speedster</h1>
        <p>Thank you so much for thinking about supporting this project. It would not be possible without you and your continued support.</p>
        <button class="button" id="supportButton">Donate <p> BSI Back Account </button>
        <p id="feedback" style="display: none;">BSI bank account number copied to your clipboard: 123456789</p>
    </div>
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
</body>
</html>