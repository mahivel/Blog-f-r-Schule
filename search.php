<?php

function blog_search_form() {

echo <<<NAVIGATION_AND_CUSTOM_SEARCH
<div id="navbar">
    <a href="${GLOBALS['blog_base_location']}">Home</a>
    <a href="${GLOBALS['blog_base_location']}index.php?post=about">About</a>
    <a href="${GLOBALS['blog_base_location']}index.php?post=contacts">Contacts</a>
</div><!-- #navbar -->
NAVIGATION_AND_CUSTOM_SEARCH;

echo '<div id="search"><form action="index.php">',
     '<div id="searchform"><input type="text" name="search" ',
     'id="searchfield" size=50>&nbsp;<input type="submit" ',
     'class="button" id="searchbutton" value="Search"></div><!-- #searchform -->',
     '</form></div><!-- #search -->';

}

?>
