<!DOCTYPE html>
<html>
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4886773607586676"
     crossorigin="anonymous"></script>
    <title>Makina Key Systems</title>
    <style>
        /* Define your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://images3.alphacoders.com/132/1322308.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh; /* Set the body to full viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content-wrapper {
            max-width: 80%; /* Set a maximum width for the content */
            text-align: center; /* Center text within content */
        }

        #topText {
            font-size: 35px;
            color: rgba(255,255,255);
            margin-bottom: 10px;
        }

        #randomBytecode {
            font-size: 36px; /* Increase font size */
            margin-bottom: 20px;
            padding: 20px; /* Increase padding */
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent background */
            border: 2px solid #333;
            border-radius: 5px;
            width: 100%; /* Make the text width 100% within the wrapper */
            text-align: center;
            font-weight: bold; /* Make text bold */
            color: #333; /* Change text color */
            text-transform: lowercase; /* Convert text to uppercase */
        }

        .button-container {
            display: flex;
            gap: 10px;
            justify-content: center; /* Center buttons horizontally */
            align-items: center; /* Center buttons vertically */
        }

        .button-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #copyButton {
            background-color: #333;
            color: #fff;
        }

        #copyButton:hover {
            background-color: #555;
        }

        #discordButton {
            background-color: #7289DA;
            color: #fff;
        }

        #discordButton:hover {
            background-color: #5865A0;
        }

        .refreshed-text, .countdown {
            font-size: 18px;
            color:rgba(255,255,255);
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div id="topText">KeneiCommunity</div>
        <div id="randomBytecode"></div>
        <div class="button-container">
            <button id="copyButton">Copy</button>
            <a href="https://discord.gg/bWnR55hcWx" target="_blank">
                <button id="discordButton">Join Discord</button>
            </a>
        </div>
        <div class="refreshed-text">Page last refreshed:</div>
        <div class="countdown">Time until next refresh:</div>
    </div>
    <script>
        // Function to generate random hexadecimal bytecode
        function generateRandomBytecode(length) {
            var characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            var result = '';
            for (var i = 0; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                result += characters.charAt(randomIndex);
            }
            return result;
        }

        // Function to update the displayed bytecode and echo it
        function updateBytecodeAndEcho() {
            // Check if there's a previously generated bytecode in localStorage
            var storedBytecode = localStorage.getItem('generatedBytecode');

            if (storedBytecode) {
                // Display the stored bytecode on the webpage
                document.getElementById("randomBytecode").textContent = storedBytecode;
            } else {
                // Generate a new random bytecode
                var randomBytecode = generateRandomBytecode(32); // 32 characters long
                var bytecodeText = randomBytecode;

                // Display the new bytecode on the webpage
                document.getElementById("randomBytecode").textContent = bytecodeText;

                // Echo the new bytecode in an alert
                alert(bytecodeText);

                // Store the generated bytecode in localStorage
                localStorage.setItem('generatedBytecode', bytecodeText);
            }
        }

        // Function to copy the bytecode to the clipboard
        function copyToClipboard() {
            var bytecodeText = document.getElementById("randomBytecode").textContent;

            var tempInput = document.createElement("input");
            document.body.appendChild(tempInput);
            tempInput.value = bytecodeText;
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            alert("Key copied to clipboard!");
        }

        // Function to refresh the page at midnight
        function refreshAtMidnight() {
            var now = new Date();
            if (now.getHours() === 0 && now.getMinutes() === 0 && now.getSeconds() === 0) {
                // Refresh the page
                location.reload();
            }
        }

        // Function to display the last refreshed time
        function displayLastRefreshedTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var refreshedText = `Last Refreshed : ${hours}:${minutes}:${seconds}`;
            document.querySelector(".refreshed-text").textContent = refreshedText;
        }

        // Function to update the countdown timer
        function updateCountdownTimer() {
            var now = new Date();
            var midnight = new Date(now);
            midnight.setHours(24, 0, 0, 0); // Set to midnight of the next day
            var timeUntilMidnight = midnight - now;
            var hours = Math.floor((timeUntilMidnight / (1000 * 60 * 60)) % 24);
            var minutes = Math.floor((timeUntilMidnight / (1000 * 60)) % 60);
            var seconds = Math.floor((timeUntilMidnight / 1000) % 60);
            var countdownText = `Refresh in : ${hours}h ${minutes}m ${seconds}s`;
            document.querySelector(".countdown").textContent = countdownText;
        }

        // Call the functions initially
        updateBytecodeAndEcho();
        displayLastRefreshedTime();
        updateCountdownTimer();

        // Add a click event listener to the "Copy" button
        document.getElementById("copyButton").addEventListener("click", copyToClipboard);

        // Set up an interval to check for midnight and refresh the page
        setInterval(refreshAtMidnight, 1000); // Check every second

        // Set up an interval to update the countdown timer every second
        setInterval(updateCountdownTimer, 1000);
        // Refreshed time realtime
        setInterval(displayLastRefreshedTime, 1000);
    //localStorage.clear()
    </script>
</body>
</html>
