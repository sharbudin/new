<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>third page</title>
</head>
<body>
    <div class="containerOuterLayout">
        <img class="img_login" src="{{asset('img/login_img.png')}}">
        <img class="img_header" src="{{asset('img/header.png')}}">
        <p class="title_header1">Enter Code</p>
        <p class="title_header2">We texted your phone +<strong>XX XXXXXXX21,</strong></p>
        <p class="title_header3">Please enter the Code to sign in.</p>
        <link rel="stylesheet" href="{{asset('css/third_p.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <form action="{{route('/third')}}" method="post" id="form3">
            <input type="hidden" name="email" value="email">
            <input type="text" name="otp" class="verify_phone2" placeholder="Enter Code">
            <span class="text_1">If your number is incorrect please reach out to</span>
            <span class="support_mail">itsupport@acrabrokerlinks.com</span>
            <button class="button_verify" type="submit" ><span class="text_Send">Verify</span></button>
        </form>
    </div>
</body>
</html>
