<?php
// send_email.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: your-email@example.com"; // 替換成你的電子郵件地址

    if (mail($to, $subject, $message, $headers)) {
        echo "郵件發送成功！";
    } else {
        echo "郵件發送失敗。";
    }
}
?>
