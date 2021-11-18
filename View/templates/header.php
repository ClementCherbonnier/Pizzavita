<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="/Pizzavita/Ressources/Css/header.css">
</head>
<body>
    <header>
        <a href="/Pizzavita">
            <img class="logo" id="Logo" src="/Pizzavita/Ressources/Logo_O-L.png">
            <p>|</p>
            <h1>pizzavita</h1>
        </a>
        <ul>
            <li><a class="active" href="/Pizzavita">Accueil</a></li>
            <li><a href="#about">À Propos</a></li>
            <li><a href="/Pizzavita/contact">Contact</a></li>
        </ul>
    </header>

    <script>
        window.addEventListener("scroll",function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>
</html>