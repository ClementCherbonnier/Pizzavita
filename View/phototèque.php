<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Phototèque</title>
        <link rel="stylesheet" href="/Pizzavita/Ressources/Css/phototèque.css">
    </head>
    <body>
        <section>
            <ul>
                <li class="list active"  data-filter="all">Toutes</li>
                <li class="list"  data-filter="bar">Bar</li>
                <li class="list"  data-filter="soiree">Soirée</li>
                <li class="list"  data-filter="event">Évenement</li>
            </ul>
        </section>
        <div class="product">
            <div class="itemBox" data-item="bar"><img src="/Pizzavita/Ressources/bar1.jfif" alt="bar"></div>
            <div class="itemBox" data-item="bar"><img src="/Pizzavita/Ressources/bar2.jfif" alt="bar"></div>
            <div class="itemBox" data-item="soiree"><img src="/Pizzavita/Ressources/soiréePizza1.jfif" alt="bar"></div>
            <div class="itemBox" data-item="soiree"><img src="/Pizzavita/Ressources/soiréePizza2.jfif" alt="bar"></div>
            <div class="itemBox" data-item="soiree"><img src="/Pizzavita/Ressources/soiréePizza3.jfif" alt="bar"></div>
            <div class="itemBox" data-item="event"><img src="/Pizzavita/Ressources/evenement1.jfif" alt="bar"></div>
            <div class="itemBox" data-item="event"><img src="/Pizzavita/Ressources/evenement2.jfif" alt="bar"></div>
        </div>
        <script>
            let list = document.querySelectorAll('.list');
            let itemBox = document.querySelectorAll('.itemBox');

            for (let i = 0; i < list.length; i++) {
                list[i].addEventListener('click', function(){
                    for (let j = 0; j < list.length; j++) {
                        list[j].classList.remove('active');
                    }
                    this.classList.add('active');

                    let dataFilter = this.getAttribute('data-filter');

                    for (let k = 0; k < itemBox.length; k++) {
                        itemBox[k].classList.remove('active');
                        itemBox[k].classList.add('hide');

                        if(itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
                            itemBox[k].classList.remove('hide');
                            itemBox[k].classList.add('active');
                        }
                    }
                })
            }
        </script>
    </body>
</html>
