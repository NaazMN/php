<?php
function cube($n){
    return $n*$n*$n;
}
?>

<html>
    <head><center>CUBE VALUE</center></head>
    <body>
        <br><br>
        <form id="form1"  method='get' action='function.php'>
            <center>
                <label>enter side of square</label>
                <input type='text' name='value1'><br>
                <br><br>
                <input type="submit" name="submit" value="cube" >
                <br><br>
                <?php
                if(isset($_GET["submit"]))
                {
                    $side=$_GET["value1"];
                    
                    ?>
                <label>cube</label>
                <input type="text" name="value1" value="<?php echo Cube($side); ?>" ><br>
                <?php
                }
                ?>
            </center>  
        </form>
    </body>
</html>


