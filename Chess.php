<html>
    <head> 
        <link rel="stylesheet" href="./chess.css">
    </head>
    <body class = "center"><table style="border-spacing:0px;border:1px solid black">
    <?php
    $value=$_POST['blocks'];
    // For NO. of rows and columns
    for ($r=1;$r<=$value;$r++)
    {
        echo "<tr>";
        for ($c=1;$c<=$value;$c++){
                $a=$r+$c;
                if ($a%2==0){
                    echo"<td style='background-color:black;border:1px solid black; width:60px;height:60px'></td>";
                }
                else{
                    echo"<td></td>";
                }
        }
        echo "</tr>";

    }
?>
</table>
    </body>
</html>


<!--for checking button is clicked or not
if (isset($POST['board'])){
    $value=$_POST['chess'];
    for ($x=1;$x<=$value;$x++)
    {
        echo $x;

    }
}-->