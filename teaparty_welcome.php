<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Welcome</title>

<style>

body{
    margin:0;
    padding:0;
    overflow:hidden;

    height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    font-family:Poppins,sans-serif;

    background:url("https://i.pinimg.com/736x/4e/84/32/4e84324d68a1c78ab13ce00257a22b62.jpg");

    background-size:cover;
    background-position:center;
}

.content{
    text-align:center;
    color:white;
}

h1{
    font-size:75px;

    text-shadow:0 0 30px hotpink;

    animation:glow 2s infinite alternate;
}

h2{
    font-size:35px;
}

.flower{
    position:absolute;
    font-size:40px;

    animation:fall linear infinite;
}

.rabbit{
    position:absolute;
    bottom:20px;
    font-size:70px;

    animation:jump 2s infinite;
}

.f1{left:10%;animation-duration:8s;}
.f2{left:30%;animation-duration:9s;}
.f3{left:50%;animation-duration:7s;}
.f4{left:70%;animation-duration:10s;}
.f5{left:90%;animation-duration:11s;}

@keyframes glow{

    from{
        text-shadow:0 0 10px white;
    }

    to{
        text-shadow:0 0 40px deeppink;
    }
}

@keyframes fall{

    0%{
        top:-10%;
        transform:rotate(0deg);
    }

    100%{
        top:110%;
        transform:rotate(360deg);
    }
}

@keyframes jump{

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-20px);
    }

    100%{
        transform:translateY(0px);
    }

.back-btn{

    display:inline-block;

    padding:18px 40px;

    border-radius:50px;

    text-decoration:none;

    font-size:22px;

    color:white;

    background:
    linear-gradient(
    45deg,
    #ffb6c1,
    #ffc0cb,
    #ffd6e7
    );

    box-shadow:
    0 0 25px rgba(255,182,193,0.9);

    animation:pulse 2s infinite;

    transition:0.4s;
}

.back-btn:hover{

    transform:scale(1.1);

    box-shadow:
    0 0 40px hotpink;
}

@keyframes pulse{

    0%{
        transform:scale(1);
    }

    50%{
        transform:scale(1.05);
    }

    100%{
        transform:scale(1);
    }
}
}

</style>
</head>

<body>

<div class="flower f1">🌸</div>
<div class="flower f2">🌷</div>
<div class="flower f3">🌹</div>
<div class="flower f4">🌸</div>
<div class="flower f5">🌷</div>

<div class="rabbit">🐇</div>

<div class="content">

<h1>
WELCOME TO OUR AFTERNOON TEA PARTY
</h1>

<h2>
Hello, <?php echo $nama; ?> ♡
</h2>

<br><br>

<a href="<?php echo base_url('index.php/TeaParty'); ?>" class="back-btn">
BACK TO HOME
</a>

</div>

</body>
</html>