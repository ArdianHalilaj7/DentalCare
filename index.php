<?php 

$conn = mysqli_connect('localhost','root','','contact_db') or die ('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn,"INSERT INTO `contact_form`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die ('query failed');

    if($insert){
        $message[] = 'termini u krye me sukses!';
    }else{
        $message[] = 'termini deshtoj';
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="dc-icon" href="images/iconurl2.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care</title>
    <link rel="stylesheet" href="css/style.css">

<!-- Font Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- Bootstrap Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">





</head>
<body>



<!-- header      -->

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <a href="#home" class="logo">dental<span>Care.</span></a>

                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>

                <a href="#contact" class="link-btn">rezervo termin</a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>
        </div>

    </header>




<!-- home  -->

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>ne sjellim buzqeshjen tuaj</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex earum, fuga sunt corrupti pariatur assumenda, at, fugiat aliquid perspiciatis dolor voluptatibus mollitia! Accusamus quis, vero dolor quo necessitatibus maxime! Amet?</p>
                    <a href="#contact" class="link-btn">rezervo termin</a>
                </div>
            </div>
        </div>
    </section>




<!-- about -->

    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/image2.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>kujdes të vërtetë shëndetësor për familjen tuaj!</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate quidem ipsam voluptates perspiciatis perferendis pariatur molestias autem alias ipsa exercitationem architecto culpa accusantium qui facere, dolorem quo officia! Illum, voluptatum!</p>
                    <a href="#contact" class="link-btn">rezervo termin</a>
                </div>
            </div>
        </div>
    </section>




<!-- services  -->

<section class="services" id="services">
    <h1 class="heading">sherbimet tona</h1>
    <div class="box-container container">

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/icon1.png" alt="">
            <h3>specialist i shtrirjes</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure reprehenderit rerum ut libero veniam. Earum, in.</p>
        </div>

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/icon2.png" alt="">
            <h3>stomatologji estetike</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure reprehenderit rerum ut libero veniam. Earum, in.</p>
        </div>

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/icon3.png" alt="">
            <h3>ekspert i higjienës orale</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure reprehenderit rerum ut libero veniam. Earum, in.</p>
        </div>

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/icon4.png" alt="">
            <h3>specialist i kanalit të rrënjëve</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure reprehenderit rerum ut libero veniam. Earum, in.</p>
        </div>

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/icon5.png" alt="">
            <h3>këshillim dentar i drejtpërdrejtë</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure reprehenderit rerum ut libero veniam. Earum, in.</p>
        </div>

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/icon6.png" alt="">
            <h3>inspektimi i zgavrës</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure reprehenderit rerum ut libero veniam. Earum, in.</p>
        </div>

    </div>
</section>



<!-- process  -->

<section class="process">
    <h1 class="heading">procesi punes</h1>
    <div class="box-container container">

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/proces1.png" alt="">
            <h3>stomatologji estetike</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolorem culpa, dignissimos quam quasi eos.</p>
        </div>

        <div class="box">
            <img style="object-fit: cover;width:50%; background-position: center;" src="images/proces2.png" alt="">
            <h3>stomatologji pediatrike</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolorem culpa, dignissimos quam quasi eos.</p>
        </div>

        <div class="box">
            <img style="object-fit: cover;width:50%;" src="images/proces3.png" alt="">
            <h3>implante dentale</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolorem culpa, dignissimos quam quasi eos.</p>
        </div>

    </div>
</section>



<!-- reviews  -->

<section class="reviews" id="reviews">
    <h1 class="heading">klientë të kënaqur</h1>
    <div class="box-container container">

        <div class="box">
            <img style="object-fit: cover; background-position: center;" src="images/review1.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nulla amet, perferendis consequatur ullam vitae? Totam, similique cupiditate accusamus error neque facilis id sapiente eaque!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john dee</h3>
        </div>

        <div class="box">
            <img style="object-fit: cover; background-position: center;" src="images/review2.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nulla amet, perferendis consequatur ullam vitae? Totam, similique cupiditate accusamus error neque facilis id sapiente eaque!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>oprah winfey</h3>
        </div>

        <div class="box">
            <img style="object-fit: cover; background-position: center;" src="images/review3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nulla amet, perferendis consequatur ullam vitae? Totam, similique cupiditate accusamus error neque facilis id sapiente eaque!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>sara sneaded</h3>
        </div>

    </div>
</section>



<!-- contact  -->

<section class="contact" id="contact">
    <h1 class="heading">rezervo termin</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php 
           if(isset($message)){
              foreach($message as $message){
                echo '<p class="message">'.$message.'</p>';
              } 
            }
        ?>


        <span>emri dhe mbiemri:</span>
        <input type="text" name="name" placeholder="sheno emrin tuaj" class="box" required>
    
        <span>emaili:</span>
        <input type="email" name="email" placeholder="sheno emailin tuaj" class="box" required>
    
        <span>numri telefonit:</span>
        <input type="number" name="number" placeholder="sheno numrin e telefonit" class="box" required>
    
        <span>data e terminit:</span>
        <input type="datetime-local" name="date"  class="box" required>
    
        <input type="submit" name="submit" value="rezervo termin" class="link-btn">

    </form>
</section>



<!-- footer  -->

<section class="footer">
    <div class="box-container container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>numri telefonit</h3>
            <p>+383-48-521-388</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>adresa jonë</h3>
            <p>Prishtinë, Kosovë - 10000</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>orari punes</h3>
            <p>09:00 - 20:00</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>email adresa</h3>
            <p>ardianhalilaj5@gmail.com</p>
            <!-- <p>ardi.halilaj7@hotmail.com</p> -->
        </div>

    </div>

    <div class="credit">&copy; copyright @<?php echo date('Y'); ?>
<span> | ardian halilaj</span></div>

</section>

    

    <script src="js/script.js"></script>
</body>
</html>