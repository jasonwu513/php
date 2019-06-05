
    
    <table class="table">
        <tbody>
        <?php 
        for ($i=1; $i < 10 ; $i++) { 
            echo "<tr>";
                
                for ($j=1; $j < 9 ; $j++) { 
                    echo "<td>";
                    echo $i .  "*" . $j . "=" . "$i*$j";
                    echo "</td>";
                }
                
            echo "</tr>";
        }

        ?>    
        </tbody>
    </table>
