<hr>
<div class='menupages'>
    <a href='index.php'>Головна сторінка</a>
    <?php
        $i = 2;
        $end = 10;
        $name = [2=>
            'Регулярка',
            'Сесія',
            'Файли',
            'Vue'
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
