

<?php 

    require('connect/db_connect.php');
    require('Classes/PHPExcel.php');
    
    function mb_ucwords($str){
        return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
    }
        $file = $_FILES['file']['tmp_name'];
    
        // $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        // $objReader->setLoadSheetsOnly('1');
        
        $objExcel=PHPExcel_IOFactory::load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
    
        $highestRow = $objExcel ->setActiveSheetIndex()->getHighestRow();
    
        for($row = 12;$row<=$highestRow;$row++){
            
            if($sheetData[$row]['A']!="null"){
                $hoten = $sheetData[$row]['B'];
                $hoten = mb_ucwords($hoten);
                $ngaysinh = $sheetData[$row]['E'];
                $dateUS = \DateTime::createFromFormat("d/m/Y", $ngaysinh)->format("Y/m/d");
                $nghenghiep = $sheetData[$row]['G'];
                $noilam = $sheetData[$row]['I'];
                $sdt = $sheetData[$row]['K'];
                $diachitru = $sheetData[$row]['L'];
                $solanhien = $sheetData[$row]['P'];
                $ABO = $sheetData[$row]['U'];
                $Rh = $sheetData[$row]['V'];
    
                $sql = "INSERT INTO excelbenhvien(HoTen,NgaySinh,NgheNghiep,NoiLamViec,SDT,DiaChi,SoLanHien,Nhom_ABO,Nhom_Rh) VALUES( '".$hoten."','".$dateUS."','".$nghenghiep."','".$noilam."','".$sdt."','".$diachitru."','".$solanhien."','".$ABO."','".$Rh."')";
                $mysqli->query($sql);
                
                
            }
            else{
                $row=$row+4;
                
            }
     
        }
        
    
?>