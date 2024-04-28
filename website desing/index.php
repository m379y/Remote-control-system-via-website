<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Vehicle Control System</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <script src="script.js" type="text/Javascript"></script>
    </head>
    <body>
        
        <div class="Main" >  
            <div class="circle">
                <div>
                    <div class="yukari">
                        <img id="button1" src="123.png" alt="Button1" onmousedown="Changecolor1('red')" onmouseup="Changecolor1('')"> 
                    </div>
                </div>
                <div>
                    <div class="sag">
                        <img id="button2" src="123.png" alt="Button2" onmousedown="Changecolor2('red')" onmouseup="Changecolor2('')"> 
                    </div>
                </div>
                <div>
                    <div class="sol">
                        <img id="button3" src="123.png" alt="Button3" onmousedown="Changecolor3('red')" onmouseup="Changecolor3('')"> 
                    </div>
                </div>
                <div>
                    <div class="asagi">
                        <img id="button4" src="123.png" alt="Button4" onmousedown="Changecolor4('red')" onmouseup="Changecolor4('')"> 
                    </div>
                </div>
            </div>
            <div class="Top-left">
                <div class="Heat">Heat = </div>
                <div class="Fan"> <table>
                    <caption> Fan Speed Control</caption>
                    <tr>
                        <th><a href="#" class="btn btn1">Low</a></th>
                        <th><a href="#" class="btn btn2">Medium</a></th>
                        <th><a href="#" class="btn btn3">High</a></th>
                    </tr>
                    </table>
             </div>
                <div class="Hot"> <table>
                <caption> Heat Sensor Control</caption>
                <tr>
                    <th><a href="#" class="btn btn1">ON</a></th>
                    <th><a href="#" class="btn btn3">OFF</a></th>
                </tr>
                </table>
             </div>
            </div>
            <div class="Top-right">
                <div class="Wetness">Wetness Rate = </div>
                <div class="Wiper"> <table>
                    <caption> Wiper Speed Control</caption>
                    <tr>
                        <th><a href="#" class="btn btn1">Low</a></th>
                        <th><a href="#" class="btn btn2">Medium</a></th>
                        <th><a href="#" class="btn btn3">High</a></th>
                    </tr>
                    </table>
                 </div>
            </div>
            <div class="Bottom-left">
                <div class="Light">Lighting Rate = </div>        
                <div class="Headlight"> <table>
                    <caption> Headlight Control</caption>
                    <tr>
                        <th><a href="#" class="btn btn1">Low</a></th>
                        <th><a href="#" class="btn btn2">Medium</a></th>
                        <th><a href="#" class="btn btn3">High</a></th>
                    </tr>
                    </table>
                 </div>
            </div>
            <div class="Bottom-right">
                <div class="Distance">Distance Rate = </div>
                <div class="Stop"> <table>
                    <tr>
                        <th><a href="#" class="stop">STOP</a></th>
                    </tr>
                    </table>
                 </div>
            </div>
        </div>
        <?php   


        session_start();

        if($_SESSION["user"]=="")
        {
            echo "<script>window.location.href='panel.php'</script>"; //We redirect users attempting to access the system to the panel.php page for login.
        }

        include("connect.php");


        ?> 


        
        
    </body>
</html>