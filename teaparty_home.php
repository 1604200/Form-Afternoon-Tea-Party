<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>

<style>

body{
    margin:0;
    padding:0;
    min-height:100vh;
    overflow-y:auto;
    font-family:Poppins,sans-serif;

    background:url("https://i.pinimg.com/736x/4e/84/32/4e84324d68a1c78ab13ce00257a22b62.jpg");
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
}

.overlay{
    position:fixed;
    width:100%;
    height:100%;
    background:rgba(255,240,245,0.3);
    backdrop-filter:blur(3px);
    z-index:1;
}

.wrapper{
    position:relative;
    z-index:2;

    width:100%;
    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:50px 0;
}

.card{
    width:700px;
    padding:50px;
    border-radius:35px;
    text-align:center;

    background:rgba(255,255,255,0.2);
    backdrop-filter:blur(10px);

    box-shadow:0 0 35px rgba(255,105,180,0.5);

    animation:float 4s ease-in-out infinite;
}

h1{
    font-size:70px;
    color:white;
    text-shadow:0 0 20px hotpink;

    animation:glow 2s infinite alternate;
}

p{
    font-size:22px;
    color:white;
    line-height:1.8;
}

.btn{
    display:inline-block;
    margin-top:25px;
    padding:18px 40px;

    border-radius:50px;
    text-decoration:none;

    background:linear-gradient(45deg,#ff69b4,#ffc0cb);

    color:white;
    font-size:22px;

    box-shadow:0 0 20px hotpink;

    transition:0.4s;
}

.btn:hover{
    transform:scale(1.1);
}

.code-btn{

    margin-top:30px;

    padding:18px 40px;

    border:none;

    border-radius:50px;

    cursor:pointer;

    font-size:22px;

    color:white;

    background:
    linear-gradient(
    45deg,
    #ff9ecf,
    #ffcce6
    );

    box-shadow:
    0 0 25px rgba(255,105,180,0.7);

    transition:0.4s;

    animation:pulse 2s infinite;
}

.code-btn:hover{

    transform:scale(1.08);
}

.code-container{

    display:none;

    margin-top:40px;

    animation:fadeCode 1s ease;
}

.code-title{

    color:white;

    font-size:40px;

    margin-bottom:20px;

    text-shadow:0 0 15px pink;
}

/* ====== UPDATED SECTION (FRAME + BACKGROUND CODE PREVIEW) ====== */
.code-preview{

    width:90%;
    margin:auto;
    padding:30px;

    border-radius:30px;
    text-align:left;

    /* lebih gelap + neon pink + soft green gradient */
    background: linear-gradient(135deg,
        rgba(10,10,20,0.95),
        rgba(20,5,30,0.92),
        rgba(5,25,20,0.9)
    );

    backdrop-filter: blur(12px);

    overflow:auto;

    /* neon frame glow pink + green */
    border:1px solid rgba(255,105,180,0.4);
    box-shadow:
        0 0 20px rgba(255,105,180,0.6),
        0 0 35px rgba(144,255,200,0.35),
        inset 0 0 25px rgba(255,182,193,0.15);
}

.code-preview pre{

    margin:0;

    font-size:18px;

    line-height:2;

    font-family:Consolas, monospace;

    white-space:pre-wrap;
}

/* COLOR */

.pink{
    color:#ff71b8;
}

.blue{
    color:#7fd6ff;
}

.green{
    color:#8dff8d;
}

.yellow{
    color:#fff199;
}

.orange{
    color:#ffbe76;
}

.white{
    color:white;
}

@keyframes glow{

    from{
        text-shadow:0 0 10px white;
    }

    to{
        text-shadow:0 0 30px deeppink;
    }
}

@keyframes float{

    0%{
        transform:translateY(0px);
    }

    50%{
        transform:translateY(-10px);
    }

    100%{
        transform:translateY(0px);
    }
}

@keyframes pulse{

    0%{
        box-shadow:0 0 15px pink;
    }

    50%{
        box-shadow:0 0 35px hotpink;
    }

    100%{
        box-shadow:0 0 15px pink;
    }
}

@keyframes fadeCode{

    from{
        opacity:0;
        transform:translateY(30px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

</style>
</head>

<body>

<div class="overlay"></div>

<div class="wrapper">

<div class="card">

<h1><?php echo $title; ?></h1>

<p>
Welcome to our magical afternoon tea party
filled with flowers, desserts, rabbits,
and beautiful memories.
</p>

<a href="<?php echo base_url('index.php/TeaParty/form'); ?>" class="btn">
JOIN EVENT
</a>

<br><br>

<button class="code-btn" onclick="toggleCode()">
OPEN CODE PREVIEW ✿
</button>

<div class="code-container" id="codeBox">

<h2 class="code-title">
Garden MVC Code Preview ✿
</h2>

<div class="code-preview">

<pre>

<span class="pink">&lt;?php</span>

<span class="blue">defined</span>(<span class="orange">'BASEPATH'</span>)
<span class="blue">OR exit</span>(<span class="orange">'No direct script access allowed'</span>);

<span class="blue">class</span>
<span class="yellow">TeaParty</span>
<span class="blue">extends</span>
<span class="green">CI_Controller</span> {

    <span class="blue">public function</span>
    <span class="yellow">__construct()</span>{

        <span class="pink">parent</span>::<span class="yellow">__construct()</span>;

        <span class="pink">$this</span>-&gt;
        <span class="green">load</span>-&gt;
        <span class="yellow">model</span>(
        <span class="orange">'TeaParty_model'</span>
        );
    }

    <span class="blue">public function</span>
    <span class="yellow">index()</span>{

        <span class="pink">$data</span>[
        <span class="orange">'title'</span>
        ] =
        <span class="pink">$this</span>-&gt;
        <span class="green">TeaParty_model</span>-&gt;
        <span class="yellow">getTitle()</span>;

        <span class="pink">$this</span>-&gt;
        <span class="green">load</span>-&gt;
        <span class="yellow">view</span>(
        <span class="orange">'teaparty_home'</span>,
        <span class="pink">$data</span>
        );
    }

    <span class="blue">public function</span>
    <span class="yellow">form()</span>{

        <span class="pink">$this</span>-&gt;
        <span class="green">load</span>-&gt;
        <span class="yellow">view</span>(
        <span class="orange">'teaparty_form'</span>
        );
    }

    <span class="blue">public function</span>
    <span class="yellow">welcome()</span>{

        <span class="pink">$data</span>[
        <span class="orange">'nama'</span>
        ] =
        <span class="pink">$this</span>-&gt;
        <span class="green">input</span>-&gt;
        <span class="yellow">post</span>(
        <span class="orange">'nama'</span>
        );

        <span class="pink">$data</span>[
        <span class="orange">'umur'</span>
        ] =
        <span class="pink">$this</span>-&gt;
        <span class="green">input</span>-&gt;
        <span class="yellow">post</span>(
        <span class="orange">'umur'</span>
        );

        <span class="pink">$data</span>[
        <span class="orange">'asal'</span>
        ] =
        <span class="pink">$this</span>-&gt;
        <span class="green">input</span>-&gt;
        <span class="yellow">post</span>(
        <span class="orange">'asal'</span>
        );

        <span class="pink">$data</span>[
        <span class="orange">'hobby'</span>
        ] =
        <span class="pink">$this</span>-&gt;
        <span class="green">input</span>-&gt;
        <span class="yellow">post</span>(
        <span class="orange">'hobby'</span>
        );

        <span class="pink">$this</span>-&gt;
        <span class="green">load</span>-&gt;
        <span class="yellow">view</span>(
        <span class="orange">'teaparty_welcome'</span>,
        <span class="pink">$data</span>
        );
    }
}

<span class="pink">?&gt;</span>

</pre>

</div>
</div>

</div>
</div>

<script>

function toggleCode(){

    var code =
    document.getElementById("codeBox");

    if(code.style.display === "block"){

        code.style.display = "none";

    }else{

        code.style.display = "block";
    }
}

</script>

</body>
</html>