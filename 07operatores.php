

<html>
<head>
    <title>this is php code page</title>
</head>
<body>
    <center>
        <marquee>this is php page</marquee>
            <?php 
           // string operator(concat) - . , .=
        //    for exam.
            $a = 10;
            echo "the value is ".$a; // the value is 10 means yaga ye jo . operator he ye concat operator he ye string ko value se jodne ke kam kar raha he   
            echo "<br>";

            $b =100;
            $str ="the value is";
            $str .= " ".$b; // $str = $str . " " . $b yaha kya hua ki hamne ek string and value ko mailakar ek nayi string banayi yaha pr ye operator concationation ka kam kar raha he sath hi sath ye assignment operator ka bhi kam kar raha he
            echo $str; // the value is 10
                echo "<br>";

                $c = 100;
                $d = 10;
                $d.= $c; // $d = $d . $c
                echo $d; // 1010 yaha kya hua is operater ne do value ko jod kar ek nayi value banayi or ye sab strig value ke form me hota he addtion nahi hota he .
                ?>
    </center>
</body>
</html>