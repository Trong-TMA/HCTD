<!DOCTYPE html>
<html ng-app="tong_hop_ton_vinh2-app"> 

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="<?php echo asset('template/css/bootstrap.min.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/font-awesome/css/font-awesome.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/plugins/dataTables/datatables.min.css') ; ?>" rel="stylesheet">

    <link href="<?php echo asset('template/css/animate.css') ; ?>" rel="stylesheet">
    <link href="<?php echo asset('template/css/style.css') ; ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/quanlytonvinh.css') ; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/menu.css') ; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('template/css/header.css') ; ?>">

    <script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo asset('app/tong_hop_ton_vinh2.js') ; ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/angular-sanitize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ng-csv/0.3.3/ng-csv.min.js"></script>

</head>

<body ng-controller="tong_hop_ton_vinh2Controller">
    <div>
        <img src="<?php echo asset('template/image/banner-hctd-sau.png') ; ?>"/>
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
    
                    
    <div class="ibox-content">
        <h2>ĐỀ XUẤT TÔN VINH</h2>
        <div style="text-align:right ;">
            <button type="button" class="btn btn-primary btn-sm add" style="margin-bottom: 0px;" ng-click="xacnhan('#tab-1')">Xác nhận</button>
        </div>
        <div id ="tab-1"> 
            <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead style="text-align: center" >
                    <tr >
                        <th rowspan = "3">TT</th>
                        <th rowspan = "3">Đơn vị</th>
                        <th colspan = "5">Cá nhân HMTN</th>
                        <th  colspan = "5">Gia đình HMTN</th>
                        <th rowspan = "3">Tổng</th>
                    </tr>
                    <tr>
                        <td>5 lần</td>
                        <td>10 lần</td>
                        <td>15 lần</td>
                        <td>20 lần</td>
                        <td>Tổng</td>

                        <td>5 lần</td>
                        <td>10 lần</td>
                        <td>15 lần</td>
                        <td>20 lần</td>
                        <td>Tổng</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Quy Nhơn</td>
                        <div ng-repeat = "item in list_1" ng-model = "getSoLanHien1(item.SoLanHien)"></div>
                        <td>{{Tong5_1/230}}</td>
                        <td>{{Tong10_1/230}}</td>
                        <td>{{Tong15_1/230}}</td>
                        <td>{{Tong20_1/230}}</td>
                        <td>{{Tong_1/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>An Nhơn</td>
                        <div ng-repeat = "item in list_2" ng-model = "getSoLanHien2(item.SoLanHien)"></div>
                        <td>{{Tong5_2/230}}</td>
                        <td>{{Tong10_2/230}}</td>
                        <td>{{Tong15_2/230}}</td>
                        <td>{{Tong20_2/230}}</td>
                        <td>{{Tong_2/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Tuy Phước</td>
                        <div ng-repeat = "item in list_3" ng-model = "getSoLanHien3(item.SoLanHien)"></div>
                        <td>{{Tong5_3/230}}</td>
                        <td>{{Tong10_3/230}}</td>
                        <td>{{Tong15_3/230}}</td>
                        <td>{{Tong20_3/230}}</td>
                        <td>{{Tong_3/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Phù Cát</td>
                        <div ng-repeat = "item in list_4" ng-model = "getSoLanHien4(item.SoLanHien)"></div>
                        <td>{{Tong5_4/230}}</td>
                        <td>{{Tong10_4/230}}</td>
                        <td>{{Tong15_4/230}}</td>
                        <td>{{Tong20_4/230}}</td>
                        <td>{{Tong_4/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Phù Mỹ</td>
                        <div ng-repeat = "item in list_5" ng-model = "getSoLanHien5(item.SoLanHien)"></div>
                        <td>{{Tong5_5/230}}</td>
                        <td>{{Tong10_5/230}}</td>
                        <td>{{Tong15_5/230}}</td>
                        <td>{{Tong20_5/230}}</td>
                        <td>{{Tong_5/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Hoài Nhơn</td>
                        <div ng-repeat = "item in list_6" ng-model = "getSoLanHien6(item.SoLanHien)"></div>
                        <td>{{Tong5_6/230}}</td>
                        <td>{{Tong10_6/230}}</td>
                        <td>{{Tong15_6/230}}</td>
                        <td>{{Tong20_6/230}}</td>
                        <td>{{Tong_6/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Hoài Ân</td>
                        <div ng-repeat = "item in list_7" ng-model = "getSoLanHien7(item.SoLanHien)"></div>
                        <td>{{Tong5_7/230}}</td>
                        <td>{{Tong10_7/230}}</td>
                        <td>{{Tong15_7/230}}</td>
                        <td>{{Tong20_7/230}}</td>
                        <td>{{Tong_7/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Tây Sơn</td>
                        <div ng-repeat = "item in list_8" ng-model = "getSoLanHien8(item.SoLanHien)"></div>
                        <td>{{Tong5_8/230}}</td>
                        <td>{{Tong10_8/230}}</td>
                        <td>{{Tong15_8/230}}</td>
                        <td>{{Tong20_8/230}}</td>
                        <td>{{Tong_8/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Vân Canh</td>
                        <div ng-repeat = "item in list_9" ng-model = "getSoLanHien9(item.SoLanHien)"></div>
                        <td>{{Tong5_9/230}}</td>
                        <td>{{Tong10_9/230}}</td>
                        <td>{{Tong15_9/230}}</td>
                        <td>{{Tong20_9/230}}</td>
                        <td>{{Tong_9/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Vĩnh Thạnh</td>
                        <div ng-repeat = "item in list_10" ng-model = "getSoLanHien10(item.SoLanHien)"></div>
                        <td>{{Tong5_10/230}}</td>
                        <td>{{Tong10_10/230}}</td>
                        <td>{{Tong15_10/230}}</td>
                        <td>{{Tong20_10/230}}</td>
                        <td>{{Tong_10/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>An Lão</td>
                        <div ng-repeat = "item in list_11" ng-model = "getSoLanHien11(item.SoLanHien)"></div>
                        <td>{{Tong5_11/230}}</td>
                        <td>{{Tong10_11/230}}</td>
                        <td>{{Tong15_11/230}}</td>
                        <td>{{Tong20_11/230}}</td>
                        <td>{{Tong_11/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Liên đoàn Lao động tỉnh</td>
                        <div ng-repeat = "item in list_12" ng-model = "getSoLanHien12(item.SoLanHien)"></div>
                        <td>{{Tong5_12/230}}</td>
                        <td>{{Tong10_12/230}}</td>
                        <td>{{Tong15_12/230}}</td>
                        <td>{{Tong20_12/230}}</td>
                        <td>{{Tong_12/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Đoàn khối Các cơ quan tỉnh</td>
                        <div ng-repeat = "item in list_13" ng-model = "getSoLanHien13(item.SoLanHien)"></div>
                        <td>{{Tong5_13/230}}</td>
                        <td>{{Tong10_13/230}}</td>
                        <td>{{Tong15_13/230}}</td>
                        <td>{{Tong20_13/230}}</td>
                        <td>{{Tong_13/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Đoàn khối Doanh nghiệp tỉnh</td>
                        <div ng-repeat = "item in list_14" ng-model = "getSoLanHien14(item.SoLanHien)"></div>
                        <td>{{Tong5_14/230}}</td>
                        <td>{{Tong10_14/230}}</td>
                        <td>{{Tong15_14/230}}</td>
                        <td>{{Tong20_14/230}}</td>
                        <td>{{Tong_14/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Trường Đại học Quy Nhơn</td>
                        <div ng-repeat = "item in list_15" ng-model = "getSoLanHien15(item.SoLanHien)"></div>
                        <td>{{Tong5_15/230}}</td>
                        <td>{{Tong10_15/230}}</td>
                        <td>{{Tong15_15/230}}</td>
                        <td>{{Tong20_15/230}}</td>
                        <td>{{Tong_15/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Trường Đại học Quang Trung</td>
                        <div ng-repeat = "item in list_16" ng-model = "getSoLanHien16(item.SoLanHien)"></div>
                        <td>{{Tong5_16/230}}</td>
                        <td>{{Tong10_16/230}}</td>
                        <td>{{Tong15_16/230}}</td>
                        <td>{{Tong20_16/230}}</td>
                        <td>{{Tong_16/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Trường CĐ Kỹ thuật Công nghệ Quy Nhơn</td>
                        <div ng-repeat = "item in list_17" ng-model = "getSoLanHien17(item.SoLanHien)"></div>
                        <td>{{Tong5_17/230}}</td>
                        <td>{{Tong10_17/230}}</td>
                        <td>{{Tong15_17/230}}</td>
                        <td>{{Tong20_17/230}}</td>
                        <td>{{Tong_17/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Trường CĐ Y tế Bình Định</td>
                        <div ng-repeat = "item in list_18" ng-model = "getSoLanHien18(item.SoLanHien)"></div>
                        <td>{{Tong5_18/230}}</td>
                        <td>{{Tong10_18/230}}</td>
                        <td>{{Tong15_18/230}}</td>
                        <td>{{Tong20_18/230}}</td>
                        <td>{{Tong_18/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Trường Cao đẳng Bình Định</td>
                        <div ng-repeat = "item in list_19" ng-model = "getSoLanHien19(item.SoLanHien)"></div>
                        <td>{{Tong5_19/230}}</td>
                        <td>{{Tong10_19/230}}</td>
                        <td>{{Tong15_19/230}}</td>
                        <td>{{Tong20_19/230}}</td>
                        <td>{{Tong_19/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 
                    <tr>
                        <td>20</td>
                        <td>Trường CĐ Nghề CĐ-XĐ &Nông Lâm Trung bộ</td>
                        <div ng-repeat = "item in list_20" ng-model = "getSoLanHien20(item.SoLanHien)"></div>
                        <td>{{Tong5_20/230}}</td>
                        <td>{{Tong10_20/230}}</td>
                        <td>{{Tong15_20/230}}</td>
                        <td>{{Tong20_20/230}}</td>
                        <td>{{Tong_20/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Câu lạc bộ 25 - Hội CTĐ tỉnh</td>
                        <div ng-repeat = "item in list_21" ng-model = "getSoLanHien21(item.SoLanHien)"></div>
                        <td>{{Tong5_21/230}}</td>
                        <td>{{Tong10_21/230}}</td>
                        <td>{{Tong15_21/230}}</td>
                        <td>{{Tong20_21/230}}</td>
                        <td>{{Tong_21/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Trung đoàn KQ 925</td>
                        <div ng-repeat = "item in list_22" ng-model = "getSoLanHien22(item.SoLanHien)"></div>
                        <td>{{Tong5_22/230}}</td>
                        <td>{{Tong10_22/230}}</td>
                        <td>{{Tong15_22/230}}</td>
                        <td>{{Tong20_22/230}}</td>
                        <td>{{Tong_22/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Công an tỉnh Bình Định</td>
                        <div ng-repeat = "item in list_23" ng-model = "getSoLanHien23(item.SoLanHien)"></div>
                        <td>{{Tong5_23/230}}</td>
                        <td>{{Tong10_23/230}}</td>
                        <td>{{Tong15_23/230}}</td>
                        <td>{{Tong20_23/230}}</td>
                        <td>{{Tong_23/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Công an tỉnh Bình Định</td>
                        <div ng-repeat = "item in list_24" ng-model = "getSoLanHien24(item.SoLanHien)"></div>
                        <td>{{Tong5_24/230}}</td>
                        <td>{{Tong10_24/230}}</td>
                        <td>{{Tong15_24/230}}</td>
                        <td>{{Tong20_24/230}}</td>
                        <td>{{Tong_24/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>Trung đoàn Cảnh sát cơ động Nam Trung bộ  E23</td>
                        <div ng-repeat = "item in list_25" ng-model = "getSoLanHien25(item.SoLanHien)"></div>
                        <td>{{Tong5_25/230}}</td>
                        <td>{{Tong10_25/230}}</td>
                        <td>{{Tong15_25/230}}</td>
                        <td>{{Tong20_25/230}}</td>
                        <td>{{Tong_25/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Hành trình đỏ</td>
                        <div ng-repeat = "item in list_26" ng-model = "getSoLanHien26(item.SoLanHien)"></div>
                        <td>{{Tong5_26/230}}</td>
                        <td>{{Tong10_26/230}}</td>
                        <td>{{Tong15_26/230}}</td>
                        <td>{{Tong20_26/230}}</td>
                        <td>{{Tong_26/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Các ĐV ngoài kế hoạch và HMTN đột xuất</td>
                        <div ng-repeat = "item in list_27" ng-model = "getSoLanHien27(item.SoLanHien)"></div>
                        <td>{{Tong5_27/230}}</td>
                        <td>{{Tong10_27/230}}</td>
                        <td>{{Tong15_27/230}}</td>
                        <td>{{Tong20_27/230}}</td>
                        <td>{{Tong_27/230}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            </tbody>
            </table>
        </div>

    </div>
</body>
<!-- Mainly scripts -->
<script src="<?php echo asset('template/js/jquery-3.1.1.min.js') ; ?>"></script>
<script src="<?php echo asset('template/js/popper.min.js') ; ?>"></script>
<script src="<?php echo asset('template/js/bootstrap.js') ; ?>"></script>
<script src="<?php echo asset('template/js/plugins/metisMenu/jquery.metisMenu.js') ; ?>"></script>
<script src="<?php echo asset('template/js/plugins/slimscroll/jquery.slimscroll.min.js') ; ?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo asset('template/js/inspinia.js') ; ?>"></script>
<script src="<?php echo asset('template/js/plugins/pace/pace.min.js') ; ?>"></script>

</html>
