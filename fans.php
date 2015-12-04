<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="css/subcss.css" rel="stylesheet" type="text/css">
    <title>Opdracht 1</title>
    <?php
        
        if(isset($_POST["submit"])){
            require_once("classes/nieuwsbrief.class.php");
            $mail = new Nieuwsbrief($_POST["voornaam"], $_POST["achternaam"], $_POST["email"]);
            $mail->senddata();
        }
    ?>

</head>

<body>
    <div class="wrapper">
        <div>
            <div class="gradient">
                <header>
                    <nav>
                        <a href="index.html">HOME</a>
                        <a href="discografie.html">DISCOGRAFIE</a>
                        <a href="fans.php">NIEUWSBRIEF</a>
                        <a href="#">STAFF</a>
                        <a href="#">BLOG</a>
                        <a href="#">CONTACTS</a>
                    </nav>
                </header>
            </div>

        </div>

        <div class="middle">
            <div class="pinkboxsub">
                <p class="pinkboxtext">Alle albums van Marco Borsato zijn hieronder te vinden!</p>
                <div class="triangle"></div>
            </div>
        </div>
        <div>

            <div class="rightpart">
                <div>

                    <form name="nieuwsbrief" method="post" action="fans.php">
                        <table>
                            <h2 class="subtitle">Aanmelden voor de nieuwsbrief</h2>
                            <tr>
                                <td class="formtitle">Voornaam:</td>
                                <td>
                                    <input type="text" name="voornaam">
                                </td>
                            </tr>
                            <tr>
                                <td class="formtitle">Achternaam:</td>
                                <td>
                                    <input type="text" name="achternaam">
                                </td>
                            </tr>
                            <tr>
                                <td class="formtitle">Emailadres:</td>
                                <td>
                                    <input type="text" name="email">
                                </td>
                            </tr>
                            <tr>
                            <td><input type="submit" name="submit"></td>
                            </tr>
                        </table>
                    </form>

                </div>

            </div>


            <div class="leftpart">
                <div class="categories">
                    <h2 class="subtitle">Categoriën</h2>
                    <p class="subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed dictum tellus. Sed vestibulum tristique semper.</p>
                </div>
                <br/>
                <br/>
                <div class="comments">
                    <h2 class="subtitle">Comments</h2>
                    <div>
                        <img style="float: left;" src="images/user_icon_small_updated.png">
                    </div>
                    <div>
                        <p class="admin">Admin</p>
                        <p class="amonthfirst">27 mei 2015</p>
                        <p class="atext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <div>
                        <img style="float: left;" src="images/user_icon_small_updated.png">
                    </div>
                    <div>
                        <p class="admin">Admin</p>
                        <p class="amonth">27 mei 2015</p>
                        <p class="atext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <div>
                        <img style="float: left;" src="images/user_icon_small_updated.png">
                    </div>
                    <div>
                        <p class="admin">Admin</p>
                        <p class="amonth">27 mei 2015</p>
                        <p class="atext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="bottomofthepage">
                    <a class="animatedbutton" href="#"><img src="images/scroller_updated.png"></a>
                </div>
            </div>

        </div>

        <footer>
            <br/>
            <br/>
        </footer>
    </div>
</body>

</html>