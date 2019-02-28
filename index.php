<?php

$db_hostname = 'localhost';
$db_database = 'webblog';
$db_username = 'root';
$db_password = '1111';

$db_server = mysqli_connect($db_hostname, $db_username, $db_password);
if(!$db_server){
	die("Unable to connect to MySQL: " . mysql_error());
}
mysqli_select_db($db_server, $db_database) or die("Unable to connect to database" . mysql_error());
$query = "SELECT * FROM Blog_post";

$me = "index.php";

header('Content-type: text/html; charset=utf-8');
include("inc/config.php");
include("inc/header.php");
include("inc/search.php");
include("inc/sidebar.php");
include("inc/footer.php");



blog_header("try");
blog_search_form();
blog_sidebar();

echo "<div id=\"content\">\n";
if ($result = mysqli_query($db_server, $query)) {
	while ($row = mysqli_fetch_row($result)) {
		echo "<div class=\"blogentry\">" .
            "<h2 class=\"entrytitle\">" . $row[2] . "</h2>\n" .
            "<div class=\"text\">" . $row[1] .
            "</div><!-- .text -->\n" .
            "<p class=\"tags\">some_tag</p>"  .
            "</div><!-- .blogentry -->";
	}
	mysqli_free_result($result);
}
echo "</div><!-- #content -->\n";

blog_footer();

?>
