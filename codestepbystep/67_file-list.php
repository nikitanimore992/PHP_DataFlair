        <?php
        $path = "files";
        $items = scandir($path); // ye function hame help karta he un folder ko access karne ke liye jisse ham ye file get karna chahte he or hame ek array dega jaha per sari ki sari files ka name mention hoga 
        // print_r ($items);
        $items = array_diff($items,array(".","..")); //  array diff karta kya he ki jo first array ke element hote he usme second array ko remove kar data he 
        // print_r ($items); 
         foreach ($items as $item) {
             echo "<li><a href='./files/$item'>$item</a></li>";

            echo "<br>";
            echo "<li><a href='./$path/$item'>$item</a></li>";
             echo "<br>";
        }

        
        ?>