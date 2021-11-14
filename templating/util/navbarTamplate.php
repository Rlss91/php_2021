<?php require_once "navbarHelper.php" ?>

<nav>
    <ul class="nav nav-pills nav-fill">
        <?php 
            foreach($navbarArr as $navbar){
                echo "<li class=\"nav-item\">"
                . "<a class=\"nav-link " . (($navbar[0] === $pageName)?'active':'') . "\" href=\"$navbar[0]\">$navbar[1]</a>"
                . "</li>";
            }
        ?>
    </ul>
</nav>