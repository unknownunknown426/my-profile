<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <style>
        body{
            font-family: ariel, sans-serif;
            margin: 0;
        }
        .sidebar{
            background-image: url('https://i.ibb.co/sKJ0wmX/background-1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            float: right;
            width: 250px;
            text-align: center;
            box-shadow: 0 5px 10px rgb(6, 238, 238);
            height: 50vh;
            padding: 10px;
        }

        .sidebar a{
            display: block;
            color: rgb(0, 252, 210);
            text-decoration: none;
            font-size: 200%;
            font-family: Georgia, 'Times New Roman', Times, serif; 
            padding: 14px 25px;


        }
        .sidebar a:hover{
            background: linear-Gradient(45deg, rgb(1, 117, 111), rgb(2, 84, 139));
            border-radius: 100px;
            box-shadow: 0 0 10px rgb(47, 138, 133);

        }
        .sidebar img{
            width: 50px;
            height: 50px;
        }
        .background{
            background-image: url('https://i.ibb.co/RB6zvDL/background-2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0 0 10px rgb(57, 82, 83);
            text-decoration: none;
            color: rgb(250, 250, 250);
           font-family: 'Times New Roman', Times, serif;
           font-size: large;



        }
        nav{
            background-size: 100;
            background-color: rgb(4, 163, 168);
            box-shadow: 0 5px 10px rgb(6, 238, 238);


        }



        </style>
</head>
<body>

    <!-- sidebar -->
    <aside class="sidebar">    
<h1>Selection</h1>
<li><a href="#ME">ME <img src="https://i.ibb.co/D4RkQfF/2.jpg"></a></li>
<li><a href="#FAMILY">FAMILY <img src="https://i.ibb.co/9YkX2TM/321313094-467080685617106-9186761437497977063-n.jpg"></a></li>
<li><a href="#FRIENDS">FRIENDS<img src="https://i.ibb.co/ZdRTCYh/379912759-717006186914310-5830428674844249677-n.jpg"></a></li>
</aside>

</body>


    <aside class="background">
        <head>
            <title>My Web Page</title>
        </head>
        <body>
            <style>



                h1 {
                    font-size: 36px;
                }

                nav ul {
                    list-style: none;
                    padding: 0;
                }

                nav li {
                    display: inline;
                    margin-right: 20px;
                }

                a {
                    text-decoration: none;
                    color: #033dfa;
                }

            </style>
            <header>
                <section id="nav">
                <nav class="nav">
                <h1>Welcome to My Profile</h1>

                </nav>
            </header>

            <!-- The rest of your web page content goes here -->


        <section id="ME">     
        <h2> Section1</h2>

        <h2><a href="https://www.facebook.com/profile.php?id=100079560386134"><img src="https://i.ibb.co/D4RkQfF/2.jpg" alt="" height="150" weight="150">ME: ALFRED NIÑO A. PIOJO</a></h2> </n> <p>     Meet Alfred Niño A. Pojo, 21 Years Old, a freshman, in college from Molave Zamboanga del Sur, who is driven by an aspiration. To serve his country as a member of the military.
        Growing up in Villasis has deeply ingrained in Alfred the values of respect and discipline shaping his sense of duty and purpose.
        Currently in his year of college Alfred is diligently laying the foundations for his future while maintaining a commitment to his academic pursuits.
        Alfreds profound dream is to join the military, a calling that reflects his dedication to serving and safeguarding his homeland.
         Although he finds himself at the beginning of this journey Alfred remains steadfast in his determination to overcome obstacles and make necessary sacrifices to achieve his goal.
        Alfred serves as an inspiration to those, around him by encouraging them to pursue their dreams with dedication and perseverance.
        As he continues through college and explores opportunities Alfred envisions a future where he can contribute significantly towards enhancing the security and well being of his country.
        Alfred Niño A. Pojos story represents a journey marked by unwavering determination and an honorable dream.
        His story serves as a reminder that individuals, such, as him have the ability to create an impact on the world. We are eagerly anticipating the inspiring chapters that Alfred will undoubtedly write throughout his journey, towards achieving his aspirations.</p>
        </section>
        <section id="FAMILY">
        <h2> Section2</h2>
        <h2><a href="https://www.facebook.com/photo?fbid=6088185637868564&set=pcb.6088192501201211"><img src="https://i.ibb.co/9YkX2TM/321313094-467080685617106-9186761437497977063-n.jpg" alt="" height="150" weight="150">PIOJO FAMILY</a></N></h2><P>Meet the Piojo family a source of happiness and strength. They stick together through thick and thin, supporting each other and helping those in need.

            At the heart of this family is their unwavering commitment to helping each other out. From schoolwork to tough times, they're always there for one another, offering a listening ear and a comforting hug.           
        But their kindness doesn't stop at their front door. The Piojo  Name family extends their helping hand to the community too. They volunteer, organize events, and help neighbors in need, showing that giving back is a way of life.
        Their example has a ripple effect, inspiring others to be kind too. In a divided world, the Piojo family reminds us that strong family bonds can make the world a better, more caring place. They teach us that a little kindness goes a long way, proving that we're all in this together.</p>
    </section>
    <article id="FRIENDS">  
    <h2> Section3</h2>
        <h2><a href="https://www.facebook.com/messenger_media?attachment_id=824386362692313&message_id=mid.%24gABfvxcq3kIGRF7mG-WK5nQqdNul2&thread_id=6737557252968577"><img src="https://i.ibb.co/ZdRTCYh/379912759-717006186914310-5830428674844249677-n.jpg" alt="" height="150" weight="150">FRIENDS</a></N></h2><p>This school year, something awesome happened. We met and became friends instantly. Even though we've known each other for just a short time, our friendship is super special because we always have a blast together. It's all about good vibes and humor!
            Why Good Vibes Matter           
            Good vibes are like happiness magnets. They make everyone feel good and make our group feel like a cozy, happy place. Here's why we're all about good vibes:        
            Supportive Friends: We respect each other and make sure everyone feels safe to be themselves.           
            Positivity Boost: Even when things are tough, we find reasons to stay positive and share the good vibes.            
            Common Goals: We all want the same things from our friendship - fun, laughter, and great connections.           
            Humor Keeps Us Tight            
            Humor is our secret ingredient. It's not just about telling jokes, but finding joy in everyday stuff. Our funny chats keep us close:            
            Inside Jokes: We've got a bunch of jokes that only we understand. They're like our secret language            
            Friendly Teasing: We tease each other in a fun way, which brings us even closer.            
            Creative Fun: We do funny stuff together, like goofy dances or silly skits, that make us laugh hard.            
            Getting to Know Each Other           
            Even though we've only known each other for a short time, our friendship is growing fast, thanks to humor and good vibes:           
            Breaking the Ice: Humor helps us be ourselves and talk openly. We learn each other's quirks and goofiness.             
            Shared Laughs: The more we laugh together, the closer we become. Our funny memories make our friendship stronger.           
            Staying Happy: Our laughter and good vibes make our friendship even better. We're excited for more fun times ahead
            Conclusion
            This school year has been a wild ride, and it's all thanks to our awesome friendship filled with laughter and good vibes. Even though we just met, it feels like we've been pals forever. We're looking forward to more adventures and jokes together. With our positive energy and humor, our friendship will stay strong and keep us smiling for years to come.
        </section>
        <!-- The rest of your web page content goes here -->
            <footer>
                <p>My Website</p>
                <p>Contact: <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">alfredpiojo20@gmail.com</a></p>
                <p>Follow us on social media: 
                    <a href="https://www.facebook.com/profile.php?id=100079560386134">Facebook</a>  </p>
                    <p>Follow us on social media:
                  <a href="https://www.instagram.com/alfred121601/?hl=en">Instagram</a>
                </p>
                <a href="#nav"><h2>TOP ☝️</h2></a>
                </hover>
            </footer>
<body>
    <div class="container">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>