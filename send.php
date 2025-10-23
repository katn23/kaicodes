<?php
if (_SERVER["REQUEST_METHOD"] = = "POST")to = "kbkaicodes@gmail.com";
name = htmlspecialchars(strip_tags(trim(_POST["fullname"])));
phone = htmlspecialchars(strip_tags(trim(_POST["phone"])));
service = htmlspecialchars(strip_tags(trim(_POST["services"])))
email = filter_var(_POST["email"],FILTER_SANITIZE_EMAIL);
message = htmlspecialchars(strip_tags(trim(_POST["message"])));

if (!filter_var(email, FILTER_VALIDATE_EMAIL)){
    die("Invalid email formart.");
}

subject ="New Contact Message";body ="Name:name\nPhone:phone:email\nService:service:message";

header= "From: email";

if(mail(to,subject,body,header)){
    echo "message send successfully":
}else{
    echo "failed to send message";
}
?>