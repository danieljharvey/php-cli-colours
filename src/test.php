<?php

include('BashColours.php');

$bashColours=new BashColours();

echo "Hello I am outputting some rare old shit ".$bashColours->formatString("smme of it is fucking red",'red')." and some of it isn't.\n";

echo "What about some ".$bashColours->formatString("fucking blue shit",'blue'). " or even ".$bashColours->formatString("light blue shit", "lightBlue","blue")."\n";

echo "I don't know.\n";

echo "The shortcuts let us do ".$bashColours->blue("blue")." and ".$bashColours->red("red")." and ".$bashColours->lightMagenta("light magenta")." etc\n";

$colour=new BashColours();

echo $colour->red("red")." and ".$colour->yellow("yellow")." and ".$colour->lightMagenta("pink")." and ".$colour->green("green")."...\n";
