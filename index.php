<hr class="footerhr">
<div class='menupages'>
    <a href='index.php'>Головна сторінка</a>
    <?php
        $i = 2;
        $end = 20;
        $name = [2=>
            'Регулярка',
            'Сесія',
            'Файли',
            'Vue',
            'Vue filter',
            'Vue splice',
            'Vue toggle',
            'Vue task add and remove',
            'Vue class',
            'Vue game 1-100',
            'Vue workers',
            'Vue table',
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
