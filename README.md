# php-cli-colours
I like my CLI scripts to be colourful and with this library I hope to achieve said colours

Example usage
~~~~
include 'BashColours.php';
$bashColours=new BashColours();

echo "I am writing a nice CLI script and ".$bashColours->formatString("BANG!", 'red')." I need exciting things to happen\n";

echo $bashColours->formatString("But now everything is fine and stuff",'default','green');
~~~~

Or now you can change forecolor with a big heap of shortcut functions:

~~~~
include 'BashColours.php';
$colour=new BashColours();

echo $colour->red("red")." and ".$colour->yellow("yellow")." and ".$colour->lightMagenta("pink")." and ".$colour->green("green")."...\n";
~~~~

The full set of foreground and background colors from this list are implemented:

http://misc.flogisoft.com/bash/tip_colors_and_formatting

Will consider adding bold/italic/blink etc later.
