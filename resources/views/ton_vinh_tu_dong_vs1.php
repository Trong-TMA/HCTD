<!DOCTYPE html>
<html ng-app="ton_vinh_tu_dong-app">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- <link href="<?php echo asset('template/css/bootstrap.min.css');?>" rel="stylesheet"> -->
    <link href="<?php echo asset('template/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/plugins/dataTables/datatables.min.css');?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('template/css/style.css');?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/quanlytonvinh.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/menu.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/header.css');?>">

    <link type="text/css" rel="stylesheet" href="<?php echo asset('template/template/css/bootstrap.min.css');?>" />

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/ton_vinh_tu_dong.js') ; ?>"></script>

</head>

<body ng-controller="ton_vinh_tu_dongController">
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
        <h2>TÔN VINH TỰ ĐỘNG</h2>

        <div id="ipall">
            <button type="button" class="btn btn-primary btn-sm sb" ng-click="allpy_All()">Apply all</button>
            <button type="button" class="btn btn-primary btn-sm sb">Kết quả</button>
        </div>
        <div class="ibox-content">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Nơi làm việc</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ thường trú</th>
                    <th>Số lần</th>
                    <th>Nhóm ABO</th>
                    <th>Nhóm Rh</th>
                    <th>Đề xuất tôn vinh</th>
                    <th>Đã tôn vinh</th>
                    <th></th>
                </tr>
                </thead>
                <tbody ng-repeat="item in list_tonvinh_vs1">
                <tr class="gradeA" >
                    <td><img class="ic" src="<?php echo asset('template/image/exel.png');?>"></td>
                    <td>{{item.excel_tonvinh.HoTen}}</td>
                    <td>{{item.excel_tonvinh.NgaySinh}}</td>
                    <td>-</td>
                    <td>{{item.excel_tonvinh.SDT}}</td>
                    <td>{{item.excel_tonvinh.DiaChi}}</td>
                    <td>-</td>
                    <td>{{item.excel_tonvinh.Nhom_ABO}}</td>
                    <td>-</td>
                    <td>{{item.excel_tonvinh.MucTonVinh}}</td>
                    <td></td>
                    <td><img src="<?php echo asset('template/image/high_priority_48px.png');?>" ng-if="item.list_hienmau.length ==0"/></td>
                </tr>
                <tr class="gradeB b" style="background: white;" ng-repeat="item_1 in item.list_hienmau">
                    <td><img class="ic" src="<?php echo asset('template/image/database_16px.png');?>"></td>
                    <td></td>
                    <td></td>
                    <td>{{item_1.nguoihienmau.NoiLamviec}}</td>
                    <td>{{item_1.nguoihienmau.SDT}}</td>
                    <td>{{item_1.nguoihienmau.DiaChi}}</td>
                    <td>{{item_1.nguoihienmau.SoLanHien}}</td>
                    <td>{{item_1.nguoihienmau.Nhom_ABO}}</td>
                    <td>{{item_1.nguoihienmau.Nhom_Rh}}</td>
                    <td>
                        <select class="mtv" >
                            <option selected="selected" value="0" ng-if="item_1.TinhTrang == 0">Không tôn vinh</option>
                            <option selected="selected" value="5" ng-if="item_1.TinhTrang == 5">Mức 5</option>
                            <option selected="selected" value="10" ng-if="item_1.TinhTrang == 10">Mức 10</option>
                            <option selected="selected" value="15" ng-if="item_1.TinhTrang == 15">Mức 15</option>
                            <option selected="selected" value="20" ng-if="item_1.TinhTrang == 20">Mức 20</option>
                            <option selected="selected" value="30" ng-if="item_1.TinhTrang == 30">Mức 30</option>
                            <option selected="selected" value="40" ng-if="item_1.TinhTrang == 40">Mức 40</option>
                            <option selected="selected" value="50" ng-if="item_1.TinhTrang == 50">Mức 50</option>
                            <option selected="selected" value="60" ng-if="item_1.TinhTrang == 60">Mức 60</option>
                            <option selected="selected" value="70" ng-if="item_1.TinhTrang == 70">Mức 70</option>
                            <option selected="selected" value="80" ng-if="item_1.TinhTrang == 80">Mức 80</option>
                            <option selected="selected" value="90" ng-if="item_1.TinhTrang == 90">Mức 90</option>
                            <option selected="selected" value="100" ng-if="item_1.TinhTrang == 100">Mức 100</option>
                        </select> 
                        <img src="<?php echo asset('template/image/{{item_1.MauTonVinh}}');?>" class="tv"/>
                    </td>
                    <td> <img ng-if="item_1.nguoihienmau.Muc_5 != NULL" src="<?php echo asset('template/image/5_48px.png');?>"/> {{item_1.nguoihienmau.Muc_5| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_5 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_10 != NULL" src="<?php echo asset('template/image/10_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_10| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_10 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_15 != NULL" src="<?php echo asset('template/image/15_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_15| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_15 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_20 != NULL" src="<?php echo asset('template/image/20_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_20| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_20 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_30 != NULL" src="<?php echo asset('template/image/30_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_30| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_30 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_40 != NULL" src="<?php echo asset('template/image/40_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_40| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_40 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_50 != NULL" src="<?php echo asset('template/image/50_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_50| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_50 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_60 != NULL" src="<?php echo asset('template/image/60_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_60| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_60 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_70 != NULL" src="<?php echo asset('template/image/70_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_70| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_70 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_80 != NULL" src="<?php echo asset('template/image/80_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_80| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_80 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_90 != NULL" src="<?php echo asset('template/image/90_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_90| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_90 != NULL"/>
                    <img ng-if="item_1.nguoihienmau.Muc_100 != NULL" src="<?php echo asset('template/image/100_48px.png');?>"/>  {{item_1.nguoihienmau.Muc_100| date:'MM/yyyy'}}<br ng-if="item_1.nguoihienmau.Muc_100 != NULL"/>
                
                 <td ><input type="radio"   name="select" ng-disabled="list_radio[item.excel_tonvinh.Id]" value="{{item_1}}" id="radio" ng-click="luu_Api_TonVinh(item.excel_tonvinh,item_1.nguoihienmau,item_1.TinhTrang)"></td>
                </tr>               
                <tr class="gradeB">
                    <td colspan="12" style="text-align: right;">
                        <button type="button" class="btn btn-primary btn-sm sb" style="{{list_apply[item.excel_tonvinh.Id]}}" ng-if="item.list_hienmau.length !=0" ng-click="apply(item.excel_tonvinh)" >Apply</button>
                        <button type="button" class="btn btn-primary btn-sm sb" ng-if="item.list_hienmau.length ==0" ng-click="search()">Tìm thủ công</button>
                    </td>
                </tr>
               
                </tbody>
                
                    
                  
                        
                </table>
             </div>

         </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" style="width: 1600px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Search</h4>
                    </div>
                    <div class="modal-body">
                    <div class="table-responsive">

                    <div class="sub-bd">
        <form action="action_form.php" method="get">
            <div class="fill">
                <select class="ot">
                    <option>Huyện</option>
                      <option>Quy Nhơn</option>
                      <option>An Lão</option>
                      <option>Hoài Ân</option>
                      <option>Hoài Nhơn</option>
                      <option selected="selected">Phù Mỹ</option>
                      <option>Phù Cát</option>
                      <option>Vĩnh Thạnh</option>
                      <option>Tây Sơn</option>
                      <option>Vân Canh</option>
                      <option>An Nhơn</option>
                      <option>Yuy Phước</option>
                      <option>Tất Cả</option>
                  </select>
              <input type="text" list="mhm" name="mhm"  placeholder="Số lần hiến máu" class="ds"> 
              <datalist id="mhm">
                <option value="5 đến dưới 10">
                <option value="10 đến dưới 15">
                <option value="15 đến dưới 20">
                <option value="20 đến dưới 30">
                <option value="30 đến dưới 40">
                <option value="40 đến dưới 50">
                <option value="50 đến dưới 60">
                <option value="60 đến dưới 70">
                <option value="70 đến dưới 80">
                <option value="80 đến dưới 90">
                <option value="100">
                <option value="Tất cả">
              </datalist>
              <select class="ot">
                <option>Mức tôn vinh</option>
                <option >Mức 5</option>
                <option selected="selected">Mức 10</option>
                <option>Mức 15</option>
                <option>Mức 20</option>
                <option>Mức 30</option>
                <option>Mức 40</option>
                <option>Mức 50</option>
                <option>Mức 60</option>
                <option>Mức 70</option>
                <option>Mức 80</option>
                <option>Mức 90</option>
                <option>Mức 100</option>

              </select>
              <input type="text" placeholder="Họ và tên" class="ht ds"><br/>
              <input type="checkbox" name="tonvinh" class="ckb">
              <label for="tv" style="margin-right:10px;"> Tôn vinh</label>
              <input type="checkbox" name="chuatonvinh" class = "ckb" checked="true">
              <label for="ctv">Chưa tôn vinh</label>
              <button type="button" class="btn btn-primary btn-sm sb">Tìm kiếm</button><br/>
            </div>
            <div class="sx">
               <lable for="sapxep">Sắp xếp</lable><br/>
               <select>
                   <option>Theo tên</option>
                   <option>Theo số mức tôn vinh</option>
                   <option>số lần hiến máu</option>
               </select>
            </div>
            </form>
        </div>
                    
            <div class="ibox-content">
                <div style="text-align: center;">
                    <b>Bạn đang tìm thông tin cho</b><br>
                    <table style="margin-left:auto; margin-right:auto;">
                        <tr class="gradeA">
                            <td class="tttk">Phạm Thanh Hoàng</td>
                            <td class="tttk">10/05/1993</td>
                            <td class="tttk">Phù Mỹ - Bình Định</td>
                            <td class="tttk">038749735</td>
                            <td class="tttk">Xã Hiệp Mỹ-Huyện Phù Mỹ-Bình Định</td>
                            <td class="tttk">10</td>
                            <td class="tttk">A</td>
                            <td class="tttk">-</td>
                            <td class="tttk">Mức 10</td>
                        </tr>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Họ tên</th>
                        <th>Ngày sinh</th>
                        <th>Nơi làm việc</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ thường trú</th>
                        <th>Số lần đã hiến</th>
                        <th>Nhóm ABO</th>
                        <th>Nhóm Rh</th>
                        <th>Đề xuất tôn vinh</th>
                        <th>Đã tôn vinh</th>
                        <th>Sửa</th>
                        <th>Chọn</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeA">
                        <td>Phạm Thanh Hòa</td>
                        <td>10/05/1993</td>
                        <td>Phù Mỹ - Bình Định</td>
                        <td>038749735</td>
                        <td>Xã Hiệp Mỹ-Huyện Phù Mỹ-Bình Định</td>
                        <td>15</td>
                        <td>B</td>
                        <td>Rh(dương)</td>
                        <td>
                            <select class="mtv">
                                <option  selected="selected">Mức 5</option>
                                <option>Mức 10</option>
                                <option>Mức 15</option>
                                <option>Mức 20</option>
                                <option>Mức 30</option>
                                <option>Mức 40</option>
                                <option>Mức 50</option>
                                <option>Mức 60</option>
                                <option>Mức 70</option>
                                <option>Mức 80</option>
                                <option>Mức 90</option>
                                <option>Mức 100</option>
                                
                            </select>
                        </td>
                        <td>
                            <img src="<?php echo asset('template/image/5_48px.png');?>"/>
                            
                        </td>
                        <td>
                            <a href="#">Sửa</a>
                        </td>
                        <td>
                            <input type="checkbox" name="tonvinh" class="ckb">
                        </td>
                    </tr>
                    <tr class="gradeB">
                        <td>Phạm Ngọc Thành</td>
                        <td>Nông dân</td>
                        <td>Phù Mỹ - Bình Định</td>
                        <td>0352169307</td>
                        <td>Xã Mỹ Chánh - Huyện Phù Mỹ-Bình Định</td>
                        <td>10</td>
                        <td>A</td>
                        <td>Rh(dương)</td>
                        <td>
                            <select class="mtv">
                                <option  selected="selected">Mức 5</option>
                                <option>Mức 10</option>
                                <option>Mức 15</option>
                                <option>Mức 20</option>
                                <option>Mức 30</option>
                                <option>Mức 40</option>
                                <option>Mức 50</option>
                                <option>Mức 60</option>
                                <option>Mức 70</option>
                                <option>Mức 80</option>
                                <option>Mức 90</option>
                                <option>Mức 100</option>
                                
                            </select>
                        </td>
                        <td>
                            <img src="<?php echo asset('template/image/5_48px.png');?>"/>
                        </td>
                        <td>
                            <a href="#">Sửa</a>
                        </td>
                        <td>
                            <input type="checkbox" name="tonvinh" class="ckb">
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Phạm Thanh Ngân</td>
                        <td>10/05/1993</td>
                        <td>Phù Mỹ - Bình Định</td>
                        <td>038749735</td>
                        <td>Xã Hiệp Mỹ-Huyện Phù Mỹ-Bình Định</td>
                        <td>10</td>
                        <td>B</td>
                        <td>Rh(dương)</td>
                        <td>
                            <select class="mtv">
                                <option  selected="selected">Mức 5</option>
                                <option>Mức 10</option>
                                <option>Mức 15</option>
                                <option>Mức 20</option>
                                <option>Mức 30</option>
                                <option>Mức 40</option>
                                <option>Mức 50</option>
                                <option>Mức 60</option>
                                <option>Mức 70</option>
                                <option>Mức 80</option>
                                <option>Mức 90</option>
                                <option>Mức 100</option>
                                
                            </select>
                        </td>
                        <td></td>
                        <td>
                            <a href="#">Sửa</a>
                        </td>
                        <td>
                            <input type="checkbox" name="tonvinh" class="ckb">
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Phạm Thanh Thành</td>
                        <td>10/05/1998</td>
                        <td>Phù Mỹ - Bình Định</td>
                        <td>038749736</td>
                        <td>Xã Hiệp Mỹ-Huyện Phù Mỹ-Bình Định</td>
                        <td>10</td>
                        <td>A</td>
                        <td>Rh(dương)</td>
                        <td>
                            <select class="mtv">
                                <option  selected="selected">Mức 5</option>
                                <option>Mức 10</option>
                                <option>Mức 15</option>
                                <option>Mức 20</option>
                                <option>Mức 30</option>
                                <option>Mức 40</option>
                                <option>Mức 50</option>
                                <option>Mức 60</option>
                                <option>Mức 70</option>
                                <option>Mức 80</option>
                                <option>Mức 90</option>
                                <option>Mức 100</option>
                                
                            </select>
                        </td>
                        <td></td>
                        <td>
                            <a href="#">Sửa</a>
                        </td>
                        <td>
                            <input type="checkbox" name="tonvinh" class="ckb">
                        </td>
                    </tr>
                    <tr class="gradeB">
                        <td>Phạm Bình</td>
                        <td>Nông dân</td>
                        <td>Phù Mỹ - Bình Định</td>
                        <td>0352169307</td>
                        <td>Xã Mỹ Chánh - Huyện Phù Mỹ-Bình Định</td>
                        <td>11</td>
                        <td>A</td>
                        <td>Rh(dương)</td>
                        <td>
                            <select class="mtv">
                                <option  selected="selected">Mức 5</option>
                                <option>Mức 10</option>
                                <option>Mức 15</option>
                                <option>Mức 20</option>
                                <option>Mức 30</option>
                                <option>Mức 40</option>
                                <option>Mức 50</option>
                                <option>Mức 60</option>
                                <option>Mức 70</option>
                                <option>Mức 80</option>
                                <option>Mức 90</option>
                                <option>Mức 100</option>
                                
                            </select>
                        </td>
                        <td>
                            <img src="<?php echo asset('template/image/5_48px.png');?>"/>
                        </td>
                        <td>
                            <a href="#">Sửa</a>
                        </td>
                        <td>
                            <input type="checkbox" name="tonvinh" class="ckb">
                        </td>
                    </tr>
                   
                    </tbody>
                    </table>
                    <div style="text-align: right;">
                        <button type="button" class="btn btn-primary btn-sm add">Tôn vinh</button><br/>
                    </div>
                 </div>

             </div>
                
                
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
</div>

    <script type="text/javascript" src="<?php echo asset('template/template/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset('template/template/js/bootstrap.min.js');?>"></script>
    
</body>

</html>
