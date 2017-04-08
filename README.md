# php-cli-colours
I like my CLI scripts to be colourful and with this library I hope to achieve said colours

Example usage
~~~~
include 'BashColours.php';
$bashColours=new BashColours();

echo "I am writing a nice CLI script and ".$bashColours->formatString("BANG!", 'red')." I need exciting things to happen\n";

echo $bashColours->formatString("But now everything is fine and stuff",'default','green');
~~~~
