<?php

$navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons'];

echo "<ul>";

foreach($navigation as $title) {  //end when $i is larger than amount of people
    echo "<li><a href='#'>$title</a></li>";
}