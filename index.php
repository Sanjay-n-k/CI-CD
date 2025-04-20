<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dynamic Website</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            transition: background-color 0.5s ease;
        }

        body:hover {
            background-color: #e0f7fa;
        }

        h1 {
            color: #2196f3;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            animation: fadeIn 1s ease, pulse 2s infinite alternate;
        }
        p{
           color: #555;
           font-size: 1.1em;
           margin-top: 20px;
           text-align: center;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes pulse {
            from { transform: scale(1); }
            to { transform: scale(1.06); }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2em;
            }
            body {
                padding: 10px;
            }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Hello from GitHub Actions & Hostinger!</h1>
</body>
</html>
