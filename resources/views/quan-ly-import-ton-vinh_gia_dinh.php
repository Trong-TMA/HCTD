<!DOCTYPE html>
<html ng-app="quan_ly_import_ton_vinh-app">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="<?php echo asset('template/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/css/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/quanlytonvinh.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/menu.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/header.css');?>">

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/quan_ly_import_ton_vinh.js') ; ?>"></script>

</head>

<body ng-controller="quan_ly_import_ton_vinhController">
    <div>
    <div>

        <img src="<?php echo asset('template/image/banner-hctd-sau.png');?>"/>
    </div>
    <div class="menu-bar">
        <ul>
          <li class="active">
             <a href="index.php"> Quản lý tôn vinh </a>
             <div class="sub-menu">
                 <ul>
                     <li>
                         <a href="index.php">Tôn vinh cá nhân</a>
                     </li>
                     <li>
                         <a href="tonvinhgiadinh.php">Tôn vinh gia đình</a>
                     </li>
                 </ul>
             </div>
          </li>
          <li>
          <a href="huydongnguonmau.php"> Quản lý nguồn máu </a>
          </li>
          <li>
          <a href="dangnhap.php"> Đăng xuất </a>
          </li>
      </ul>
    </div>
    <form method="get">
        <div class="form-tt">
            <div style="margin-bottom:30px;">
                <b>QUẢN LÝ IMPORT TÔN VINH</b>
            </div>
            <div id="">
            Thời gian tôn vinh:   
                        <select class="" ng-model="nam_tonvinh" ng-change="trong_2(nam_tonvinh)">
                            <option value="-1">Năm</option>
                            <option value="0">Năm {{nam1}}</option>
                            <option value="1">Năm {{nam2}}</option>
                            <option value="2">Năm {{nam3}}</option>
                        </select> 
                        <select class="" style="" ng-model="thang" ng-change="trong(thang,nam_tonvinh)">
                            <option value="0">Tháng</option>
                            <option value="1">Tháng 1</option>
                            <option value="2">Tháng 2</option>
                            <option value="3">Tháng 3</option>
                            <option value="4">Tháng 4</option>
                            <option value="5">Tháng 5</option>
                            <option value="6">Tháng 6</option>
                            <option value="7">Tháng 7</option>
                            <option value="8">Tháng 8</option>
                            <option value="9">Tháng 9</option>
                            <option value="10">Tháng 10</option>
                            <option value="11">Tháng 11</option>
                            <option value="12">Tháng 12</option>
                        </select> 
                        
                       
                        
        </div>  
        <br/>
            <div style="padding-bottom:30px;">
            <table class="center">
                <tr>
                    <td class="qlip">
                        Thành Phố Quy Nhơn    
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_1"    name="file_1"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_1}}" ng-click="import(1)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_1}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_1 == 1" ng-click="view(1)">View</button>
                    </td>
                </tr>
                



            
                <tr>
                    <td class="qlip">
                        Thị xã An Nhơn  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_2"    name="file_2"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_2}}" ng-click="import(2)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_2}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_2 == 1" ng-click="view(2)">View</button>
                    </td>
                </tr>
                



            
                <tr>
                    <td class="qlip">
                        Huyện Tuy Phước   
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_3"    name="file_3"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_3}}" ng-click="import(3)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_3}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_3 == 1" ng-click="view(3)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                        Huyện Phù Cát  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_4"    name="file_4"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_4}}" ng-click="import(4)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_4}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_4 == 1" ng-click="view(4)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Huyện Phù Mỹ
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_5"    name="file_5"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_5}}" ng-click="import(5)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_5}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_5 == 1" ng-click="view(5)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Thị xã Hoài Nhơn    
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_6"    name="file _6"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_6}}" ng-click="import(6)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_6}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_6 == 1" ng-click="view(6)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Huyện Hoài Ân 
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_7"    name="file_7"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_7}}" ng-click="import(7)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_7}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_7 == 1" ng-click="view(7)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Huyện Tây Sơn   
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_8"    name="_8"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_8}}" ng-click="import(8)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_8}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_8 == 1" ng-click="view(8)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Huyện Vân Canh    
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_9"    name="file_9"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_9}}" ng-click="import(9)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_9}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_9 == 1" ng-click="view(9)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Huyện Vĩnh Thạnh    
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_10"    name="file_10"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_10}}" ng-click="import(10)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_10}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_10 == 1" ng-click="view(10)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Huyện An Lão  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_11"    name="file_11"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_11}}" ng-click="import(11)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_11}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_11 == 1" ng-click="view(11)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Liên đoàn Lao động tỉnh
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_12"    name="file_12"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_12}}" ng-click="import(12)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_12}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_12 == 1" ng-click="view(12)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Đoàn khối Các cơ quan tỉnh 
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_13"    name="file_13"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_13}}" ng-click="import(13)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_13}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_13 == 1" ng-click="view(13)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Đoàn khối Doanh nghiệp tỉnh
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_14"    name="file_14"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_14}}" ng-click="import(14)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_14}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_14 == 1" ng-click="view(14)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trường Đại học Quy Nhơn 
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_15"    name="file_15"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_15}}" ng-click="import(15)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_15}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_15 == 1" ng-click="view(15)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trường Đại học Quang Trung   
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_16"    name="file_16"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_16}}" ng-click="import(16)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_16}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_16 == 1" ng-click="view(16)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trường CĐ Kỹ thuật Công nghệ Quy Nhơn    
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_17"    name="file_17"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_17}}" ng-click="import(17)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_17}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_17 == 1" ng-click="view(17)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trường CĐ Y tế Bình Định
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_18"    name="file_18"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_18}}" ng-click="import(18)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_18}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_18 == 1" ng-click="view(18)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trường Cao đẳng Bình Định  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_19"    name="file_19"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_19}}" ng-click="import(19)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_19}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_19 == 1" ng-click="view(19)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trường CĐ Nghề CĐ-XĐ &Nông Lâm Trung bộ  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_20"    name="file_20"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_20}}" ng-click="import(20)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_20}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_20 == 1" ng-click="view(20)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Câu lạc bộ 25 - Hội CTĐ tỉnh 
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_21"    name="file_21"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_21}}" ng-click="import(21)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_21}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_21 == 1" ng-click="view(21)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trung đoàn KQ 925  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_22"    name="file_22"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_22}}" ng-click="import(22)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_22}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_22 == 1" ng-click="view(22)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Công an tỉnh Bình Định  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_23"    name="file_23"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_23}}" ng-click="import(23)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_23}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_23 == 1" ng-click="view(23)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    BVĐK tỉnh, bệnh viện chuyên khoa & các BV TW trên địa bàn Quy Nhơn  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_24"    name="file_24"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_24}}" ng-click="import(24)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_24}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_24 == 1" ng-click="view(24)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Trung đoàn Cảnh sát cơ động Nam Trung bộ  E23  
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_25"    name="file_25"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_25}}" ng-click="import(25)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_25}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_25 == 1" ng-click="view(25)">View</button>
                    </td>
                </tr>
                


            
                <tr>
                    <td class="qlip">
                    Hành trình đỏ  
                    </td>
                    <td  class="qlip">
                        <input type="file" id="file_26" name="file_26"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_26}}" ng-click="import(26)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_26}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_26 == 1" ng-click="view(26)">View</button>
                    </td>
                </tr>
                

            
                <tr>
                    <td class="qlip">
                    Các ĐV ngoài kế hoạch và HMTN đột xuất
                    </td>
                    <td class="qlip">
                        <input type="file" id="file_27"    name="file_27"/>
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{style_27}}" ng-click="import(27)">Import</button>
                    </td>
                    <td class="qlip">
                        {{tenfile_27}}
                    </td>
                    <td class="qlip">
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="dis_27 == 1" ng-click="view(27)">View</button>
                    </td>
                </tr>
                
        </table>


            


        </div> 
        </div>
    </form>
</div>

</body>

</html>
