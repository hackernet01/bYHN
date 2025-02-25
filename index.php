<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pak Sim Data</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(90deg, #141e30, #243b55);
    background-size: 400% 400%;
    animation: backgroundAnimate 8s infinite;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 100vh;
    position: relative;
}

@keyframes backgroundAnimate {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.container {
    background: linear-gradient(145deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.05));
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 255, 255, 0.5), 0 0 30px rgba(255, 255, 255, 0.4), 0 0 45px rgba(0, 255, 255, 0.3);
    animation: containerGlow 3s infinite alternate;
    padding: 20px;
    width: 100%;
    max-width: 400px;
    text-align: center;
}

@keyframes containerGlow {
    0% { box-shadow: 0 0 15px rgba(0, 255, 255, 0.5); }
    100% { box-shadow: 0 0 30px rgba(255, 255, 255, 0.8); }
}

h1 {
    text-align: center;
    color: #fff;
    margin-bottom: 20px;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
    font-size: 36px;
    animation: textGlow 3s infinite alternate;
}

@keyframes textGlow {
    0% { text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(0, 0, 0, 0.8); }
    100% { text-shadow: 0 0 20px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 0, 0, 1); }
}
input[type="text"] {
    width: 80%;
    padding: 12px;
    font-size: 16px;
    border: 2px solid #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    outline: none;
    margin: 10px 0;
    transition: box-shadow 0.3s ease;
    max-width: 300px;
}

input[type="text"]:focus {
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 30px rgba(255, 0, 0, 0.8);
}

@media (max-width: 768px) {
    input[type="text"] {
        width: 90%;
        font-size: 14px;
        max-width: 280px;
    }
}

@media (max-width: 480px) {
    input[type="text"] {
        width: 100%;
        font-size: 13px;
        max-width: 250px;
    }
}

input[type="submit"] {
    background: rgba(255, 0, 0, 0.8);
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 50%;
    margin: 10px auto;
    display: block;
    text-align: center;
    animation: buttonGlow 3s infinite alternate;
    transition: transform 0.2s ease;
}

input[type="submit"]:hover {
    transform: scale(1.1);
}

@keyframes buttonGlow {
    0% { box-shadow: 0 0 15px rgba(255, 0, 0, 0.6); }
    100% { box-shadow: 0 0 25px rgba(255, 0, 0, 1); }
}

.result {
    margin-top: 20px;
    background: rgba(0, 0, 0, 0.8);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.5), 0 0 30px rgba(0, 0, 0, 0.8);
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    line-height: 1.5;
    position: relative; 
    max-height: 300px;
    overflow-y: auto;
}

.copy-button {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 5px 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    border: 1px solid white;
    border-radius: 5px;
    font-size: 12px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.copy-button:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

.developer {
    position: absolute;
    bottom: 80px; 
    text-align: center;
    width: 100%;
    font-size: 20px; 
    font-weight: bold;
    color: rgba(255, 255, 255, 0.7);
    text-shadow: 0 0 10px rgba(0, 255, 255, 0.7), 0 0 20px rgba(255, 0, 0, 0.8);
    animation: textZoom 3s infinite alternate;
}

@keyframes textZoom {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}
.telegram-button {
    position: absolute;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: url('Telegrsm.jpg') no-repeat center/cover;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    animation: telegramGlow 2s infinite alternate, telegramRotate 5s linear infinite;
}

@keyframes telegramGlow {
    0% { box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); }
    100% { box-shadow: 0 0 20px rgba(0, 0, 0, 1); }
}

@keyframes telegramRotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    .developer {
        font-size: 18px;
        bottom: 70px; 
    }

    h1 {
        font-size: 30px;
    }
}

@media (max-width: 480px) {
    .container {
        width: 100%;
    }

    .developer {
        font-size: 16px;
        bottom: 60px; 
    }

    h1 {
        font-size: 40px;
    }
}
    </style>
</head>
<body>
    <div class="glow-container"></div>
    <div class="container">
        <h1>𝗣𝗮𝗸 𝗦𝗶𝗺 𝗗𝗮𝘁𝗮</h1>
        <form method="post">
            <div class="form-group">
                <label for="mobile">Enter Mobile Number</label>
                <input type="text" id="mobile" name="mobile" placeholder="Enter mobile number without 0" required>
            </div>
            <input type="submit" name="submit" value="𝗦𝗲𝗮𝗿𝗰𝗵">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $mobile = htmlspecialchars(strip_tags($_POST['mobile'])); 
            if (!empty($mobile)) {
                $url = "https://fam-official.serv00.net/sim/api.php?num=" . $mobile;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                $data = json_decode($response, true);
                if (is_array($data)) {
                    echo '<div class="result">';
                    echo "<pre>";
                    echo "<code>";
                    displayArray($data);
                    echo "</code>";
                    echo "</pre>";
                    echo '<button class="copy-button" onclick="copyResponse()">Copy</button>';
                    echo '</div>';
                } else {
                    echo '<p>No Data Found</p>';
                }
            } else {
                echo '<p>Please enter a valid mobile number.</p>';
            }
        }        
        function displayArray($data) {
            foreach ($data as $key => $value) {
                if (is_array($value)) {
                    echo "<p><span class='array-key'>" . htmlspecialchars($key) . ":</span></p>";
                    echo "<div class='json-array'>";
                    displayArray($value); 
                    echo "</div>";
                } else {
                    echo "<p><span class='array-key'>" . htmlspecialchars($key) . ":</span> <span class='array-value'>" . htmlspecialchars($value) . "</span></p>";
                }
            }
        }
        ?>
    </div>
    <div class="developer">𝗗𝗲𝘃𝗲𝗹𝗼𝗽𝗲𝗿 ↬𝗠𝘂𝘀𝗮 𝗥𝗮𝗷𝗽𝘂𝘁</div>
    <div class="telegram-button"></div>
    <script>
        function copyResponse() {
            const responseText = document.querySelector('.result').innerText;
            navigator.clipboard.writeText(responseText).then(() => {
                alert('Response copied to clipboard!');
            }).catch(err => {
                alert('Failed to copy text: ', err);
            });
        }
    </script>
</body>
</html>
