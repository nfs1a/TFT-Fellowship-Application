<?php

        echo '<form method="POST" action="' . URL::to('login') . '">';
        echo '<p><input type="text" id="email" name="email" placeholder="email"></p>';
        echo '<p><input type="password" id="password" name="password"></p>';
        echo '<p><input type="submit" value="login"></p>';
        echo '</form>';

        echo '<form method="POST" action="' . URL::to('signup') . '">';
        echo '<p><input type="text" id="email" name="email" placeholder="email"></p>';
        echo '<p><input type="password" id="password" name="password"></p>';
        echo '<p><input type="submit" value="signup"></p>';
        echo '</form>';


?>