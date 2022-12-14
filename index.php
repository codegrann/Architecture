<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Achitecural projects website">
    <meta name="keywords" content="Achitecture, buildings, constructors">
    <meta name="author" content="Hillary Omondi @codegram">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Archetectural Works</title>
</head>

<body>
    <header>
        <p><span>BR</span> Architects</p>
        <p id="second"><a href="#project">Projects</a></p>
        <p><a href="#about">About</a></p>
        <p><a href="#contact">Contact</a></p>

    </header>
    <div id="homepage">
        <!-- <p><font color="black">newsletter</font></p> -->
        <p id="home"><span>BR</span> Architects</p>
    </div>
    <section id="project">
        <p>Projects</p>
        <div>
            <img src="house5.jpg" alt="summer house" title="Summer House">
            <img src="house2.jpg" alt="brick house" title="Brick House">
            <img src="house3.jpg" alt="renovated" title="Renovated">
            <img src="house4.jpg" alt="barn house" title="Barn House">
            <img src="house2.jpg" alt="brick house" title="Brick House">
            <img src="house5.jpg" alt="summer house" title="Summer House">
            <img src="house4.jpg" alt="barn house" title="Barn House">
            <img src="house3.jpg" alt="renovated" title="Renovated">
        </div>
    </section>
    <section id="about">
        <p id="about-firstP">About</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam obcaecati quia facilis dolor? Explicabo iste
            repellendus assumenda quidem maxime corporis, magni nisi voluptatum, praesentium obcaecati est, veritatis
            ut? Nesciunt fuga rem expedita? Dignissimos, natus. Maiores hic ipsam provident, debitis excepturi ad
            quisquam! Nisi sit placeat aliquid, officiis odio, nihil ex voluptatibus, nobis molestias impedit qui
            quaerat dolorem esse accusantium. Quia impedit eum repudiandae ut repellat! Ullam quasi voluptatum dolorem
            accusamus qui aspernatur iure deserunt, sit illum, voluptates blanditiis labore unde error, nulla animi
            expedita quibusdam voluptatem tempora laborum esse. Atque?</p>
        <div id="members">
            <div>
                <img src="team2.jpg" alt="">
                <p class="names">John Doe</p>
                <p class="title">CEO & Founder</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odio et architecto eos quos
                    inventore?</p>
                <center>
                    <p class="contact">Contact</p>
                </center>
            </div>

            <div>
                <img src="team1.jpg" alt="">
                <p class="names">Jane Doe</p>
                <p class="title">Architect</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum aspernatur voluptas qui nemo
                    veritatis nobis!</p>
                <center>
                    <p class="contact">Contact</p>
                </center>
            </div>

            <div>
                <img src="team3.jpg" alt="">
                <p class="names">Mike Ross</p>
                <p class="title">Architect</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum soluta sint natus quaerat neque
                    quo.</p>
                <center>
                    <p class="contact">Contact</p>
                </center>
            </div>

            <div>
                <img src="team4.jpg" alt="">
                <p class="names">Dan Star</p>
                <p class="title">Architect</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum libero possimus, ut vel quae ipsam.</p>
                <center>
                    <p class="contact">Contact</p>
                </center>
            </div>
        </div>

    </section>
    <section id="contact">
        <form action="POST">
            <fieldset id="frm1">
                <legend>Contact us</legend>
                <input type="email" placeholder="user@gmail.com" required><br>
                <input type="text" placeholder="subject"><br>
                <textarea name="messsgae" id="mssg" placeholder="your message goes here..."></textarea><br>
                <button>SEND MESSAGE</button>
            </fieldset>
        </form>
        <form action="GET">
            <fieldset id="frm2">
                <legend>Our newsletter</legend>
                <p>Subscribe for our newsletter today</p>
                <input type="email" placeholder="user@gmail.com" required>
                <button>SUBSCRIBE</button>
            </fieldset>
        </form>
    </section>
    <section id="map">
        <img src="map.jpg" alt="">
    </section>

</body>

</html>