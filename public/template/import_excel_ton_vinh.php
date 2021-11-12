

<?php 

require('connect/db_connect.php');
require('Classes/PHPExcel.php');

function mb_ucwords($str){
return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
}
    $file = $_FILES['file']['tmp_name'];

    $tenfile=basename($_FILES['file']['name']);

    // $objReader = PHPExcel_IOFactory::createReaderForFile($file);
    // $objReader->setLoadSheetsOnly('1');
    
    $objExcel=PHPExcel_IOFactory::load($file);
    $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);

    $highestRow = $objExcel ->setActiveSheetIndex()->getHighestRow();

    for($row = 4;$row<=$highestRow;$row++){
        
        if(is_numeric($sheetData[$row]['A'])){
            $hoten = mb_ucwords($sheetData[$row]['B']);
            $ngaysinh = $sheetData[$row]['C'];
            $thangsinh = $sheetData[$row]['D'];
            $namsinh = $sheetData[$row]['E'];
            $date = $ngaysinh.'/'.$thangsinh.'/'.$namsinh;
            $dateUS = \DateTime::createFromFormat("d/m/Y", $date)->format("Y/m/d");
            $sdt = "0".$sheetData[$row]['F'];
            $nghenghiep = $sheetData[$row]['G'];
            $diachi = $sheetData[$row]['H'];
            $ABO = $sheetData[$row]['I'];
            $muctonvinh = $sheetData[$row]['J'];
            

            $sql = "INSERT INTO exceltonvinh(HoTen,NgaySinh,SDT,NgheNghiep,DiaChi,Nhom_ABO,MucTonVinh,TenFile) VALUES( '".$hoten."','".$dateUS."','".$sdt."','".$nghenghiep."','".$diachi."','".$ABO."','".$muctonvinh."','".$tenfile."')";
         
            $mysqli->query($sql);
            
            
        }
        else{
            return;
            
        }
 
    
}
    

?>
