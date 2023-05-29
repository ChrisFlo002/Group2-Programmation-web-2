<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shotcut icon" href="images/Umukaratusi.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

li, a, button {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 500;
    font-size: 15px;
    color: #800000;
    text-decoration: none;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 90px;
    background-color: #F0E68C;
}

.logo {
    width: 200px;
    height:250px;
    cursor: pointer;
    /*position:fixed;*/
}
img{
    border-radius: 5%;
}
body, a{
    font-size: 25px;
}
.nav_links {
    list-style: none;
}

.nav_links li {
    display: inline-block;
    padding: 0px 20px;
}

.nav_links li a {
    transition: all 0.3s ease 0s;
}

.nav_links li a:hover {
    color: #5336f7;
}

button {
    padding: 9px 25px;
    background-color: #87CEEB;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

button:hover {
    background-color: #6B8E23;
}
#ifoto {
    width: 100%;
}
</style>
</head>
<body>
<header>
    <img class="logo" src="images/logoicon.png" alt="">
    <nav>
        <ul class="nav_links">
            <li><a href="accueil.html">Accueil</a></li>
            <li><a href="apropos.html">A propos</a></li>
            <li><a href="produit.html">Produits</a></li>
            <li><a href="commander.html">Commander</a></li>
        </ul>
    </nav>
    <a class="cta" href="contactnous.html"><button>Contactez Nous</button></a>      
    </header>

    <img id="ifoto" src="images/bbb.jpeg" alt="">
</body>
</html>