<?php

function blog_header($page_title = "") {

    if (empty($page_title)) {
        $page_title = $GLOBALS['blog_title'];
    }

    echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" ",
         "\"http://www.w3.org/TR/html4/strict.dtd\">\n",
         "<html>\n<head>\n",
         "    <meta http-equiv=\"Content-Type\" content=\"text/html; ",
         "charset=UTF-8\">\n",
         "    <title>$page_title</title>\n",
         "    <link rel=\"shortcut icon\" href=\"favicon.ico\">\n",
         "    <link rel=\"stylesheet\" href=\"",
         "${GLOBALS['blog_base_location']}blog.css\">\n",
         "</head>\n",
         "<body>\n",
         "<div id=\"container\">\n",
         "<div id=\"header\"><h1 id=\"title\"><a id=\"blogtitle\" href=\"",
         $GLOBALS['blog_base_location'],
         "\">${GLOBALS['blog_title']}</a></h1>";

    if (strlen($GLOBALS['blog_subtitle']) > 0) {
        echo "<h2 id=\"subtitle\">${GLOBALS['blog_subtitle']}</h2>";
    }

    echo "</div><!-- #header -->\n";
}

?>
