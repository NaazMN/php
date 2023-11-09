<html>
    <title> loop</title>
    <center><head><h2><u>YOUR NUMBER LOOP IS</h2></u></head>
            <br><!-- comment -->
            <body>
               <?php
                 for($i=0;$i<=10;$i++)
                 {
                     echo"<br>",$i;
                 }
                 ?>
                <br><br>
            <center><head><h2><u> YOUR NUMBER PATTERN IS</h2></u></head>
                <br>
                <?php
                for($i=0;$i<=10;$i++)
                {
                    for($j=1;$j<=$i;$j++)
                    {
                        echo" ",$j;
                    }
                    echo"<br>";
                }
                ?>
            </center>
            </body>
            
            
 </html>
