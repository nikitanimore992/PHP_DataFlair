
<html><head><title>php</title></head>


<body>
<center>
    <?php
    $users=["Nikita","Neha","Yogita","Gayatri","Anushuiya","Anita","Sunita","Savitri","Durga","Sujata","Usha","Asha","Rajni","Rajanti","Jyoti","Resham","Pooja","Priya","Ankita","Seema","Mahi","Renuka","Rupali","Kiran","Aparna","Kirti","Kittu","Manshi","Jassy"];

    foreach($users as $x){
        // jese hame chaiye ki baki sari valur print koi ek particular value print na ho 
        if($x=="Gayatri"){
            continue;
        }
        echo $x."<br>";
        // if we want ki jese hi yogita value print ho loop break ho jaye the
        // if($x=="Yogita"){
        //     break;
        // }
    }
    foreach($users as $x):
        echo $x;
        echo "<br>";
        endforeach
   ?> 
</center>
</body>
</html>