<?
//This is a page template
include_once($_SERVER['DOCUMENT_ROOT']."/ui/framework/framework.php");
include_once($_SERVER['DOCUMENT_ROOT']."/apl/stream/getStream.php");

fw_load("page");
fw_load("forms");
fw_load("config");

subMenuAdd(
array(
subMenuActionAdd("Public", "1"),
subMenuActionAdd("Friends","2")
)
);

page_init("Stream", 1);

echo "<div class='p32'>";
	
	forms_doPostField();
	echo "</div></div>";
	echo "<div class='stream'>";
	$arr = StreamAsArray(123);
	foreach ($arr as $streamitem)
	{
		echo "<div class='post'>";
		echo "<img src='ui/media/phantom.jpg' class='profilePic'>";
		echo "<div class='subDiv'><div class='top'>".$streamitem["username"]."</div><div class='postContent'>".$streamitem["content"]."</div>";
		
		if ($streamitem["attachments"])
		{
			echo "<div class='attach'>Attachments: ";
			foreach ($streamitem["attachments"] as $att)
			{
				if ($att["typ"] != 0)
			echo "<a href='#'> ".$att['name']."</a>";
			}
			echo "<br/>";
			//Do image Attachments!!
			foreach ($streamitem["attachments"] as $att)
			{
			if ($att["typ"] == 0)
			echo "<img src='http://www.google.de/images/srpr/logo3w.png'>";
			}
			
			
			echo "</div>";
		}
		
		echo "<a data-page=\"post\" data-pagearg='".$streamitem["postId"]."' >Comment</a> - <a href='#'>Love</a> - <a href='#'>Share</a> - <a href='#'>Follow</a><br class='cb'>";
		echo "</div></div>";	
	}
	
echo "</div>";
?>
