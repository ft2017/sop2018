<?php require 'index_header.php'; ?>


<div class="container-fluid">
    <h1>FT SOP 版本1 最后更新日期2017-03-27</h1>
    
</div>
<?php
$cat="ABM";
$arrABM=array('001','002','003');
$arrAIM=array('001','002','003');
$arrAIC=array('001','002','003');
$arrAll["ABM"]=$arrABM;
$arrAll["AIM"]=$arrAIM;
$arrAll["AIC"]=$arrAIC;
//var_dump($arrABM);
foreach ($arrAll as $key => $val) {
    echo "<h2>$key</h2>";
    foreach ($val as $key2 => $val2) {
   
    echo "<h3>$key$val2</h3>";
    echo"<img src='sop/ver01/$key$val2.svg' >";
     echo "<hr>";
    }
}
?>
<?php require 'index_footer.php'; ?>
