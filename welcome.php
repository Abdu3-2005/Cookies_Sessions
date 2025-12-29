<?php
session_start();

/* بيانات ثابتة للتجربة */
$correct_username = "admin";
$correct_password = "12345";

if (isset($_POST['username'], $_POST['password'])) {

    if ($_POST['username'] === $correct_username && $_POST['password'] === $correct_password) {

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['login_time'] = date("Y-m-d H:i:s");

        setcookie("user", $_POST['username'], time() + 3600);

    } else {
        echo "<p style='color:red; text-align:center;'>❌ اسم المستخدم أو كلمة المرور غير صحيحة</p>";
        echo "<p style='text-align:center;'><a href='login.php'>العودة لتسجيل الدخول</a></p>";
        exit();
    }
}

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>الترحيب</title>
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
        button {
            background-color: #dc3545;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>مرحبًا <?php echo $_SESSION['username']; ?> 👋</h2>
    <p>وقت وتاريخ تسجيل الدخول:</p>
    <p><?php echo $_SESSION['login_time']; ?></p>

    <form method="post" action="logout.php">
        <button>تسجيل الخروج</button>
    </form>
</div>

</body>
</html>