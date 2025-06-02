<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>الصفحة غير موجودة - مطعمنا</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            background: #fff8f0;
            font-family: 'Tajawal', sans-serif;
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }

        .error-container {
            max-width: 600px;
        }

        h1 {
            font-size: 8rem;
            color: #e74c3c;
            margin: 0;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            background: #e67e22;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #d35400;
        }

        .emoji {
            font-size: 4rem;
        }

        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap');
    </style>
</head>
<body>
    <div class="error-container">
        <div class="emoji">🍽️🥲</div>
        <h1>404</h1>
        <h2>Sorry, this page doesn't exist!</h2>
        <p>The page may have been removed or never existed. You can go back to the homepage.</p>
        <a href="{{ url('/') }}">Back to Homepage</a>

    </div>
</body>
</html>
