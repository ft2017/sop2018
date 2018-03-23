<?php require 'index_header.php'; ?>


<div class="container-fluid">
    <h1>FT SOP 版本1 最后更新日期2017-03-27</h1>

</div>
<?php

$cat =array();
$arrdept=array('SG','KQ','ZZ','JG','YZ','SY','GC','CG','MJ','CW','ZC','YW');
$arrDept['SG']='生管';
$arrDept['KQ']='烤漆';
$arrDept['ZZ']='组装';
$arrDept['JG']='加工';
$arrDept['YZ']='压铸';
$arrDept['SY']='素研';
$arrDept['GC']='工程';
$arrDept['CG']='采购';
$arrDept['MJ']='模具';
$arrDept['CW']='财务';
$arrDept['ZC']='资材';
$arrDept['YW']='业务';
//var_dump($arrdept);
$arrABM = array('001', '002', '003', '004', '005', '006', '007', '008', '009');
$arrAIC = array('001', '002', '003', '004');
$arrAIM = array('001', '002', '003', '004');
$arrAIN = array('001', '002', '003', '004', '005', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '024');
$arrAMR = array('001', '002', '003', '004', '005', '006', '007');
$arrAPM = array('001', '002', '003', '004', '005', '006-A', '006-B', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '021', '022', '023', '024', '025', '026', '027', '028');
$arrAQC = array('001', '002', '003', '004', '005', '006', '008');
$arrASF = array('001', '002-1', '002-1_工艺委外申请流程BPM', '002', '003', '004', '005', '006', '007', '007_工单倒扣发料流程', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '020_工单工艺变更流程（BPM)', '021', '022', '023');
$arrAXM = array('001', '002', '003', '004', '005', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '021', '022', '023', '024', '025', '026', '027', '028', '029', '030');
$arrSOP_APS = array('001_MDS计算流程', '002_产能规画计算流程');
$arrAll["ABM"] = $arrABM;
$arrAll["AIM"] = $arrAIM;
$arrAll["AIC"] = $arrAIC;
$arrAll["AIN"] = $arrAIN;
$arrAll["AMR"] = $arrAMR;
$arrAll["APM"] = $arrAPM;
$arrAll["AQC"] = $arrAQC;
$arrAll["ASF"] = $arrASF;
$arrAll["AXM"] = $arrAXM;
$arrAll["SOP_APS"] = $arrSOP_APS;
//var_dump($arrABM);
echo "<div class='container-fluid'>";
foreach ($arrAll as $key => $val) {
     echo "<h2>$key</h2>"; 
     $cat=$key;
//     var_dump($cat);
     var_dump($arrAll[$cat]);
     foreach ($arrAll[$cat] as $key => $val){
//         var_dump($arrAll[$cat][$key]);   
        print_r($arrAll[$cat][$key]);    
//        echo"<img src='sop/ver01/$cat$arrAll[$cat][1].svg' >"; 
     }

}
foreach ($arrAll as $key => $val) {

    echo "<h2>$key</h2>";
    
    foreach ($val as $key2 => $val2) {

        echo "<h3>$key$val2</h3>";
        echo"<img src='sop/ver01/$key$val2.svg' alt='$key$val2.svg'>";
        echo "<hr>";
    }
} 

echo "</div>";
?>
<?php require 'index_footer.php'; ?>
