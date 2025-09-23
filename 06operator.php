
<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is php page</marquee>
            <?php 
            $a =70;
            $b =7;
            if(++$a>50 && ++$b<5){
                echo "hello friends";
            }else{
                echo"bye friends";
            }
                echo "<br>";
            //--------------------------------------------------------------------------------------
              if(++$a>50 && ++$b<10){
                echo "hello friends";
            }else{
                echo"bye friends";
            }
             echo "<br>";
            //--------------------------------------------------------------------------------------
              if(++$a>100 && ++$b<10){ // isme first condition false ho jane per age wo condion check hi nahi karege kyu end operator me dono hi condtion true honi chahiye true tab hoga jab dono hi condition true honge
                echo "hello friends";
            }else{
                echo"bye friends";
            }
             echo "<br>";
             //--------------------------------------------------------------------------------------
              if(++$a>50 || ++$b<5){ // isme first condition true ho jane per age wo condion check hi nahi karege kyu end operator me dono hi condtion false honi chahiye tab hi wo false return karega
                echo "hello friends";
            }else{
                echo"bye friends";
            }
             echo "<br>";

             //--------------------------------------------------------------------------------------
              if(!(++$a>50 && ++$b<10)){//! operatore condition ka thik ulta kar deta he like if result is true then it returns false and if result is false then it returns true
                echo "hello friends";
            }else{
                echo"bye friends";
            }
             echo "<br>";
            ?>
    </center>
</body>
</html>