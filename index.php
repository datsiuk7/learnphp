<hr>
<div class='menupages'>
    <a href='index.php'>Головна сторінка</a>
    <?php
        $i = 1;
        $end = 10;
        $name = [1=>
            'Перша сторінка',
            'Друга сторінка'
        ];
        while($i <= $end){
            $names = "Link".$i;
            if($name[$i]){
                $names = $name[$i];
            }
            echo "<a href='".$i.".php'>".$names."</a>";
            $i+=1;
        }
    ?>
</div>
