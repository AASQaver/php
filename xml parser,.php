// we want to intialize the xml parser, load the xml, and output it:
<?php

$xmlDOC = new DOMDocument();
$xmlDOC->load("note.xml");


print $xmlDoc-> saveXML();
?>



