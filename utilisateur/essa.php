<?php 

while($ligne = $result->fetch()) {
    ?>
    <div><?= $ligne['message']?></div>
    <?php
}

?>