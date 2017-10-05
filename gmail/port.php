<?php 

if(fsockopen("smtp.gmail.com",587)) { print "port 587 open"; } else { print "port 587 closed"; } 

?>