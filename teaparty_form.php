<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Join Event</title>

<style>

body{
    margin:0;
    padding:0;
    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    font-family:Poppins,sans-serif;

    background:url("https://i.pinimg.com/736x/4e/84/32/4e84324d68a1c78ab13ce00257a22b62.jpg");
    background-size:cover;
}

.form-box{

    width:500px;

    padding:40px;

    border-radius:30px;

    background:rgba(255,255,255,0.2);

    backdrop-filter:blur(10px);

    box-shadow:0 0 30px rgba(255,105,180,0.5);
}

h1{
    text-align:center;
    color:white;
    font-size:50px;
}

label{
    display:block;
    margin-top:15px;
    color:white;
    font-size:20px;
}

input{
    width:100%;
    padding:15px;

    margin-top:8px;

    border:none;
    border-radius:20px;

    font-size:18px;
}

.checkbox{
    margin-top:20px;
    color:white;
}

button{

    width:100%;

    margin-top:30px;

    padding:18px;

    border:none;

    border-radius:40px;

    background:linear-gradient(45deg,#ff69b4,#ffc0cb);

    color:white;

    font-size:22px;

    cursor:pointer;
}

button:hover{
    transform:scale(1.05);
}

</style>
</head>

<body>

<div class="form-box">

<h1>Join Event</h1>

<form method="POST"
action="<?php echo base_url('index.php/TeaParty/welcome'); ?>">

<label>Nama Lengkap</label>
<input type="text" name="nama" required>

<label>Umur</label>
<input type="number" name="umur" required>

<label>Asal Daerah</label>
<input type="text" name="asal" required>

<label>Hobby</label>
<input type="text" name="hobby" required>

<div class="checkbox">
<input type="checkbox" required>
Saya mengikuti semua aturan yang berlaku
</div>

<button type="submit">
SETUJU
</button>

</form>

</div>

</body>
</html>