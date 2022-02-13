$perimeter=0;
$len="";
$wid="";
if(isset($_POST["calcBtn"]))
{
    $len= $_POST["len"];
    $wid= $_POST["wid"];
    
    //area formule length*width
    $area=$len*$wid;
 
    //perimeter formule 2*(length+width)
    $perimeter=2*($len+$wid);
}
 
?>