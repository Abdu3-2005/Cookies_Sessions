<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>تسجيل الدخول</title>
    <style>
        body {
            font-family: Arial, Tahoma;
            background-color: #0a1a2f;
            direction: rtl;
            text-align: center;
        }
        .container {
            background-color: #102b4c;
            width: 350px;
            margin: 120px auto;
            padding: 25px;
            border-radius: 10px;
            color: #ffffff;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
        }
        button {
            background-color: #1e90ff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0b5ed7;
        }
        .error {
            color: #ff6b6b;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>تسجيل الدخول</h2>

    <form method="post" action="welcome.php">
        <input type="text" name="username" placeholder="اسم المستخدم" required>
        <input type="password" name="password" placeholder="كلمة المرور" required>
        <button type="submit">تسجيل الدخول</button>
    </form>
</div>

</body>
</html>