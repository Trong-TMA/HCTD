<!DOCTYPE html>
<html>

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
    <script type="text/javascript" src="<?php echo asset('app/app.js') ; ?>"></script>

</head>

<body>
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
</body>

</html>
