<? $rps = array('Rock','Paper','Scissors'); ?>
<html>
  <head>
    <title>Rock Paper Scissors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <form style="width:100%;margin:0" action='rps.php' method='post'>
      <button style="width:100%;height:60%" disabled>
<?
$p = (isset($_REQUEST['p']))?$_REQUEST['p']:rand(0,2);
$pchoice = "You chose ".$rps[$p].".";

$c = rand(0,2);
$cchoice = "Computer chose ".$rps[$c].".";

$winner = ($c == (($p +1)%3))?"Computer Wins!":"You Win!";
$winner = ($c == $p)?"Tie! Play again.":$winner;

echo("<h2>".$pchoice."</h2>");
echo("<h2>".$cchoice."</h2>");
echo("<h1>".$winner."<h1>");
?>
      </button>
      <br><button type="submit" style="width:33.3%;height:20%" formaction="rps.php?p=0"><?echo($rps[0]);?>
      </button><button type="submit" style="width:33.3%;height:20%" formaction="rps.php?p=1"><?echo($rps[1]);?>
      </button><button type="submit" style="width:33.3%;height:20%" formaction="rps.php?p=2"><?echo($rps[2]);?>
      </button>
      <input type="submit" style="width:100%;height:20%" value="Random">
    </form> 
  </body>
</html>