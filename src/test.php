<?php

include('BashColours.php');

$bashColours=new BashColours();

echo $bashColours->resetPage();

echo "Hello I am outputting some rare old shit ".$bashColours->formatString("smme of it is fucking red",'red')." and some of it isn't.\n";

echo "What about some ".$bashColours->formatString("fucking blue shit",'blue'). " or even ".$bashColours->formatString("light blue shit", "lightBlue","blue")."\n";

echo "I don't know.\n";

