var app = angular.module('admindashboard-app', []).constant('API', 'http://localhost:8080/Cinema/public/');






app.controller('admin_dashboardController', function($scope, $http, API, $rootScope, $location, $window) {


    $http.get(API + 'user').then(function(response) {
        $id = response.data.Id_nguoidung;
        $scope.Id_nguoidung = $id;
        if ($id == 0)
            $window.location.href = '/Cinema/public/signin';
        else {

            $scope.logout = function() {
                $http.get(API + 'luu_User_1/' + 0).then(function(response) {
                    $window.location.href = '/Cinema/public/signin';
                });
            };

            $http.get(API + 'luumaphim/' + 0).then(function(response) {
                console.log('đã xóa mã phim');
            });

            //tính doanh thu tháng

            $scope.giaidoan = "Monthly";
            $scope.dd_today = "";
            $scope.dd_monthly = "active";
            $scope.dd_annual = "";
            $scope.mau_doanhthu_today = "";
            $scope.mau_nguoixem_today = "";
            $scope.mau_thanhvien_today = "";

            $scope.mau_doanhthu_monthly = "";
            $scope.mau_nguoixem_monthly = "";
            $scope.mau_thanhvien_monthly = "";

            $scope.mau_doanhthu_annual = "";
            $scope.mau_nguoixem_annual = "";
            $scope.mau_thanhvien_annual = "";

            $scope.huong_doanhthu_today = "";
            $scope.huong_nguoixem_today = "";
            $scope.huong_thanhvien_today = "";
            $scope.huong_phimmoi_today = "";

            $scope.huong_doanhthu_monthly = "";
            $scope.huong_nguoixem_monthly = "";
            $scope.huong_thanhvien_monthly = "";
            $scope.huong_phimmoi_monthly = "";

            $scope.huong_doanhthu_annual = "";
            $scope.huong_nguoixem_annual = "";
            $scope.huong_thanhvien_annual = "";
            $scope.huong_phimmoi_annual = "";

            $http.get(API + 'thongke_doanhthu_nguoixem/' + 30 + '/' + 0 + '/' + 1).then(function(response) {
                $doanhthu_1 = response.data;
                $scope.doanhthu_thang = response.data;
                $http.get(API + 'thongke_doanhthu_nguoixem/' + 60 + '/' + 30 + '/' + 1).then(function(response) {
                    $tu = Number($doanhthu_1) - Number(response.data);
                    $mau = Number($doanhthu_1) + Number(response.data);
                    if ($mau == 0) {
                        $scope.tiledoanhthu = 0;
                        $scope.tangtruong_doanhthu = "up";
                    } else {
                        $tile = ($tu) / ($mau);
                        if ($tile >= 0) {
                            $scope.tiledoanhthu = $tile * 100;
                            $scope.tangtruong_doanhthu = "up";
                            $scope.mau_doanhthu_annual = "";
                            $scope.huong_doanhthu_annual = "navy";
                        } else {
                            $scope.tiledoanhthu = $tile * (-100);
                            $scope.tangtruong_doanhthu = "down";
                            $scope.mau_doanhthu_annual = "red";
                            $scope.huong_doanhthu_annual = "danger";
                        }
                    }


                });

            });

            //người xem theo tháng 
            $http.get(API + 'thongke_doanhthu_nguoixem/' + 30 + '/' + 0 + '/' + 2).then(function(response) {
                $scope.nguoixem_1 = response.data;
                $scope.nguoixem_thang = response.data;
                $http.get(API + 'thongke_doanhthu_nguoixem/' + 60 + '/' + 30 + '/' + 2).then(function(response) {
                    $tu = Number($scope.nguoixem_1) - Number(response.data);
                    $mau = Number($scope.nguoixem_1) + Number(response.data);
                    if ($mau == 0) {
                        $scope.tilenguoixem = 0;
                        $scope.tangtruong_nguoixem = "up";
                    } else {
                        $tile = ($tu) / ($mau);
                        if ($tile >= 0) {
                            $scope.tilenguoixem = $tile * 100;
                            $scope.tangtruong_nguoixem = "up";
                            $scope.mau_nguoixem_annual = "";
                            $scope.huong_nguoixem_annual = "navy";
                        } else {
                            $scope.tilenguoixem = $tile * (-100);
                            $scope.tangtruong_nguoixem = "down";
                            $scope.mau_nguoixem_annual = "red";
                            $scope.huong_nguoixem_annual = "danger";
                        }
                    }


                });

            });


            // thành viên mới 

            $http.get(API + 'thongke_thanhvienmoi/' + 30 + '/' + 0).then(function(response) {
                $scope.thanhvien_1 = response.data;
                $scope.thanhvien_thang = response.data;
                $http.get(API + 'thongke_thanhvienmoi/' + 60 + '/' + 30).then(function(response) {
                    $tu = Number($scope.thanhvien_1) - Number(response.data);
                    $mau = Number($scope.thanhvien_1) + Number(response.data);
                    if ($mau == 0) {
                        $scope.tilethanhvien = 0;
                        $scope.tangtruong_thanhvien = "up";
                    } else {
                        $tile = ($tu) / ($mau);
                        if ($tile >= 0) {
                            $scope.tilethanhvien = $tile * 100;
                            $scope.tangtruong_thanhvien = "up";
                            $scope.mau_thanhvien_annual = "";
                            $scope.huong_thanhvien_annual = "navy";
                        } else {
                            $scope.tilethanhvien = $tile * (-100);
                            $scope.tangtruong_thanhvien = "down";
                            $scope.mau_thanhvien_annual = "red";
                            $scope.huong_thanhvien_annual = "danger";
                        }
                    }


                });

            });



            // phim mới 

            $http.get(API + 'thongke_phimmoi/' + 30 + '/' + 0).then(function(response) {
                $scope.phim_1 = response.data;
                $scope.phim_thang = response.data;
                $http.get(API + 'thongke_phimmoi/' + 60 + '/' + 30).then(function(response) {
                    $tu = Number($scope.phim_1) - Number(response.data);
                    $mau = Number($scope.phim_1) + Number(response.data);
                    if ($mau == 0) {
                        $scope.tilephim = 0;
                        $scope.tangtruong_phim = "up";
                    } else {
                        $tile = ($tu) / ($mau);
                        if ($tile >= 0) {
                            $scope.tilephim = $tile * 100;
                            $scope.tangtruong_phim = "up";
                            $scope.huong_phimmoi_annual = "navy";
                        } else {
                            $scope.tilephim = $tile * (-100);
                            $scope.tangtruong_phim = "down";
                            $scope.huong_phimmoi_annual = "danger";
                        }
                    }


                });

            });


            $scope.today = function() {
                $scope.giaidoan = "Today";
                $scope.dd_today = "active";
                $scope.dd_monthly = "";
                $scope.dd_annual = "";


                //tính doanh thu ngày

                $http.get(API + 'thongke_doanhthu_nguoixem/' + 1 + '/' + 0 + '/' + 1).then(function(response) {
                    $doanhthu_1 = response.data;
                    $scope.doanhthu_thang = response.data;
                    $http.get(API + 'thongke_doanhthu_nguoixem/' + 2 + '/' + 1 + '/' + 1).then(function(response) {
                        $tu = Number($doanhthu_1) - Number(response.data);
                        $mau = Number($doanhthu_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tiledoanhthu = 0;
                            $scope.tangtruong_doanhthu = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tiledoanhthu = $tile * 100;
                                $scope.tangtruong_doanhthu = "up";
                                $scope.mau_doanhthu_annual = "";
                                $scope.huong_doanhthu_annual = "navy";
                            } else {
                                $scope.tiledoanhthu = $tile * (-100);
                                $scope.tangtruong_doanhthu = "down";
                                $scope.mau_doanhthu_annual = "red";
                                $scope.huong_doanhthu_annual = "danger";
                            }
                        }


                    });

                });

                //người xem theo ngày 
                $http.get(API + 'thongke_doanhthu_nguoixem/' + 1 + '/' + 0 + '/' + 2).then(function(response) {
                    $scope.nguoixem_1 = response.data;
                    $scope.nguoixem_thang = response.data;
                    $http.get(API + 'thongke_doanhthu_nguoixem/' + 2 + '/' + 1 + '/' + 2).then(function(response) {
                        $tu = Number($scope.nguoixem_1) - Number(response.data);
                        $mau = Number($scope.nguoixem_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilenguoixem = 0;
                            $scope.tangtruong_nguoixem = "up";

                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilenguoixem = $tile * 100;
                                $scope.tangtruong_nguoixem = "up";
                                $scope.mau_nguoixem_annual = "";
                                $scope.huong_nguoixem_annual = "navy";
                            } else {
                                $scope.tilenguoixem = $tile * (-100);
                                $scope.tangtruong_nguoixem = "down";
                                $scope.mau_nguoixem_annual = "red";
                                $scope.huong_nguoixem_annual = "danger";
                            }
                        }


                    });

                });


                // thành viên mới 

                $http.get(API + 'thongke_thanhvienmoi/' + 1 + '/' + 0).then(function(response) {
                    $scope.thanhvien_1 = response.data;
                    $scope.thanhvien_thang = response.data;
                    $http.get(API + 'thongke_thanhvienmoi/' + 2 + '/' + 1).then(function(response) {
                        $tu = Number($scope.thanhvien_1) - Number(response.data);
                        $mau = Number($scope.thanhvien_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilethanhvien = 0;
                            $scope.tangtruong_thanhvien = "up";
                        } else {

                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilethanhvien = $tile * 100;
                                $scope.tangtruong_thanhvien = "up";
                                $scope.mau_thanhvien_annual = "";
                                $scope.huong_thanhvien_annual = "navy";
                            } else {
                                $scope.tilethanhvien = $tile * (-100);
                                $scope.tangtruong_thanhvien = "down";
                                $scope.mau_thanhvien_annual = "red";
                                $scope.huong_thanhvien_annual = "danger";
                            }
                        }


                    });

                });



                // phim mới 

                $http.get(API + 'thongke_phimmoi/' + 1 + '/' + 0).then(function(response) {
                    $scope.phim_1 = response.data;
                    $scope.phim_thang = response.data;
                    $http.get(API + 'thongke_phimmoi/' + 2 + '/' + 1).then(function(response) {
                        $tu = Number($scope.phim_1) - Number(response.data);
                        $mau = Number($scope.phim_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilephim = 0;
                            $scope.tangtruong_phim = "up";
                        } else {

                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilephim = $tile * 100;
                                $scope.tangtruong_phim = "up";
                                $scope.huong_phimmoi_annual = "navy";
                            } else {
                                $scope.tilephim = $tile * (-100);
                                $scope.tangtruong_phim = "down";
                                $scope.huong_phimmoi_annual = "danger";
                            }

                        }

                    });

                });


            };


            $scope.monthly = function() {

                $scope.giaidoan = "Monthly";
                $scope.dd_today = "";
                $scope.dd_monthly = "active";
                $scope.dd_annual = "";

                //tính doanh thu tháng

                $http.get(API + 'thongke_doanhthu_nguoixem/' + 30 + '/' + 0 + '/' + 1).then(function(response) {
                    $doanhthu_1 = response.data;
                    $scope.doanhthu_thang = response.data;
                    $http.get(API + 'thongke_doanhthu_nguoixem/' + 60 + '/' + 30 + '/' + 1).then(function(response) {
                        $tu = Number($doanhthu_1) - Number(response.data);
                        $mau = Number($doanhthu_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tiledoanhthu = 0;
                            $scope.tangtruong_doanhthu = "up";
                        } else {

                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tiledoanhthu = $tile * 100;
                                $scope.tangtruong_doanhthu = "up";
                                $scope.mau_doanhthu_annual = "";
                                $scope.huong_doanhthu_annual = "navy";
                            } else {
                                $scope.tiledoanhthu = $tile * (-100);
                                $scope.tangtruong_doanhthu = "down";
                                $scope.mau_doanhthu_annual = "red";
                                $scope.huong_doanhthu_annual = "danger";
                            }

                        }


                    });

                });

                //người xem theo tháng 
                $http.get(API + 'thongke_doanhthu_nguoixem/' + 30 + '/' + 0 + '/' + 2).then(function(response) {
                    $scope.nguoixem_1 = response.data;
                    $scope.nguoixem_thang = response.data;
                    $http.get(API + 'thongke_doanhthu_nguoixem/' + 60 + '/' + 30 + '/' + 2).then(function(response) {
                        $tu = Number($scope.nguoixem_1) - Number(response.data);
                        $mau = Number($scope.nguoixem_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tiledotilenguoixemanhthu = 0;
                            $scope.tangtruong_nguoixem = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilenguoixem = $tile * 100;
                                $scope.tangtruong_nguoixem = "up";
                                $scope.mau_nguoixem_annual = "";
                                $scope.huong_nguoixem_annual = "navy";
                            } else {
                                $scope.tilenguoixem = $tile * (-100);
                                $scope.tangtruong_nguoixem = "down";
                                $scope.mau_nguoixem_annual = "red";
                                $scope.huong_nguoixem_annual = "danger";
                            }

                        }


                    });

                });


                // thành viên mới 

                $http.get(API + 'thongke_thanhvienmoi/' + 30 + '/' + 0).then(function(response) {
                    $scope.thanhvien_1 = response.data;
                    $scope.thanhvien_thang = response.data;
                    $http.get(API + 'thongke_thanhvienmoi/' + 60 + '/' + 30).then(function(response) {
                        $tu = Number($scope.thanhvien_1) - Number(response.data);
                        $mau = Number($scope.thanhvien_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilethanhvien = 0;
                            $scope.tangtruong_thanhvien = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilethanhvien = $tile * 100;
                                $scope.tangtruong_thanhvien = "up";
                                $scope.mau_thanhvien_annual = "";
                                $scope.huong_thanhvien_annual = "navy";
                            } else {
                                $scope.tilethanhvien = $tile * (-100);
                                $scope.tangtruong_thanhvien = "down";
                                $scope.mau_thanhvien_annual = "red";
                                $scope.huong_thanhvien_annual = "danger";
                            }

                        }


                    });

                });



                // phim mới 

                $http.get(API + 'thongke_phimmoi/' + 30 + '/' + 0).then(function(response) {
                    $scope.phim_1 = response.data;
                    $scope.phim_thang = response.data;
                    $http.get(API + 'thongke_phimmoi/' + 60 + '/' + 30).then(function(response) {
                        $tu = Number($scope.phim_1) - Number(response.data);
                        $mau = Number($scope.phim_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilephim = 0;
                            $scope.tangtruong_phim = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilephim = $tile * 100;
                                $scope.tangtruong_phim = "up";
                                $scope.huong_phimmoi_annual = "navy";
                            } else {
                                $scope.tilephim = $tile * (-100);
                                $scope.tangtruong_phim = "down";
                                $scope.huong_phimmoi_annual = "danger";
                            }

                        }


                    });

                });


            };


            $scope.annual = function() {
                $scope.giaidoan = "Annual";
                $scope.dd_today = "";
                $scope.dd_monthly = "";
                $scope.dd_annual = "active";


                //tính doanh thu năm

                $http.get(API + 'thongke_doanhthu_nguoixem/' + 365 + '/' + 0 + '/' + 1).then(function(response) {
                    $doanhthu_1 = response.data;
                    $scope.doanhthu_thang = response.data;
                    $http.get(API + 'thongke_doanhthu_nguoixem/' + 730 + '/' + 365 + '/' + 1).then(function(response) {
                        $tu = Number($doanhthu_1) - Number(response.data);
                        $mau = Number($doanhthu_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tiledoanhthu = 0;
                            $scope.tangtruong_doanhthu = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tiledoanhthu = $tile * 100;
                                $scope.tangtruong_doanhthu = "up";
                                $scope.mau_doanhthu_annual = "";
                                $scope.huong_doanhthu_annual = "navy";
                            } else {
                                $scope.tiledoanhthu = $tile * (-100);
                                $scope.tangtruong_doanhthu = "down";
                                $scope.mau_doanhthu_annual = "red";
                                $scope.huong_doanhthu_annual = "danger";
                            }

                        }


                    });

                });

                //người xem theo năm 
                $http.get(API + 'thongke_doanhthu_nguoixem/' + 365 + '/' + 0 + '/' + 2).then(function(response) {
                    $scope.nguoixem_1 = response.data;
                    $scope.nguoixem_thang = response.data;
                    $http.get(API + 'thongke_doanhthu_nguoixem/' + 730 + '/' + 365 + '/' + 2).then(function(response) {
                        $tu = Number($scope.nguoixem_1) - Number(response.data);
                        $mau = Number($scope.nguoixem_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilenguoixem = 0;
                            $scope.tangtruong_nguoixem = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilenguoixem = $tile * 100;
                                $scope.tangtruong_nguoixem = "up";
                                $scope.mau_nguoixem_annual = "";
                                $scope.huong_nguoixem_annual = "navy";
                            } else {
                                $scope.tilenguoixem = $tile * (-100);
                                $scope.tangtruong_nguoixem = "down";
                                $scope.mau_nguoixem_annual = "red";
                                $scope.huong_nguoixem_annual = "danger";
                            }

                        }


                    });

                });


                // thành viên mới 

                $http.get(API + 'thongke_thanhvienmoi/' + 365 + '/' + 0).then(function(response) {
                    $scope.thanhvien_1 = response.data;
                    $scope.thanhvien_thang = response.data;
                    $http.get(API + 'thongke_thanhvienmoi/' + 730 + '/' + 365).then(function(response) {
                        $tu = Number($scope.thanhvien_1) - Number(response.data);
                        $mau = Number($scope.thanhvien_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilethanhvien = 0;
                            $scope.tangtruong_thanhvien = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilethanhvien = $tile * 100;
                                $scope.tangtruong_thanhvien = "up";
                                $scope.mau_thanhvien_annual = "";
                                $scope.huong_thanhvien_annual = "navy";
                            } else {
                                $scope.tilethanhvien = $tile * (-100);
                                $scope.tangtruong_thanhvien = "down";
                                $scope.mau_thanhvien_annual = "red";
                                $scope.huong_thanhvien_annual = "danger";
                            }
                        }


                    });

                });



                // phim mới 

                $http.get(API + 'thongke_phimmoi/' + 365 + '/' + 0).then(function(response) {
                    $scope.phim_1 = response.data;
                    $scope.phim_thang = response.data;
                    $http.get(API + 'thongke_phimmoi/' + 730 + '/' + 365).then(function(response) {
                        $tu = Number($scope.phim_1) - Number(response.data);
                        $mau = Number($scope.phim_1) + Number(response.data);
                        if ($mau == 0) {
                            $scope.tilephim = 0;
                            $scope.tangtruong_phim = "up";
                        } else {
                            $tile = ($tu) / ($mau);
                            if ($tile >= 0) {
                                $scope.tilephim = $tile * 100;
                                $scope.tangtruong_phim = "up";
                                $scope.huong_phimmoi_annual = "navy";
                            } else {
                                $scope.tilephim = $tile * (-100);
                                $scope.tangtruong_phim = "down";
                                $scope.huong_phimmoi_annual = "danger";
                            }
                        }


                    });

                });


            };



            //Biểu đồ
            $doanhthu_ngay0 = 0;
            $doanhthu_ngay1 = 0;
            $doanhthu_ngay2 = 0;
            $doanhthu_ngay3 = 0;
            $doanhthu_ngay4 = 0;
            $doanhthu_ngay5 = 0;
            $doanhthu_ngay6 = 0;
            $doanhthu_ngay7 = 0;
            $doanhthu_ngay8 = 0;
            $doanhthu_ngay9 = 0;
            $doanhthu_ngay10 = 0;
            $doanhthu_ngay11 = 0;
            $doanhthu_ngay12 = 0;
            $doanhthu_ngay13 = 0;
            $doanhthu_ngay14 = 0;
            $doanhthu_ngay15 = 0;
            $doanhthu_ngay16 = 0;
            $doanhthu_ngay17 = 0;
            $doanhthu_ngay18 = 0;
            $doanhthu_ngay19 = 0;
            $doanhthu_ngay20 = 0;
            $doanhthu_ngay21 = 0;
            $doanhthu_ngay22 = 0;
            $doanhthu_ngay23 = 0;
            $doanhthu_ngay24 = 0;
            $doanhthu_ngay25 = 0;
            $doanhthu_ngay26 = 0;
            $doanhthu_ngay27 = 0;
            $doanhthu_ngay28 = 0;
            $doanhthu_ngay29 = 0;
            $doanhthu_ngay30 = 0;
            $doanhthu_ngay31 = 0;

            $nguoixem_0 = 0;
            $nguoixem_1 = 0;
            $nguoixem_2 = 0;
            $nguoixem_3 = 0;
            $nguoixem_4 = 0;
            $nguoixem_5 = 0;
            $nguoixem_6 = 0;
            $nguoixem_7 = 0;
            $nguoixem_8 = 0;
            $nguoixem_9 = 0;
            $nguoixem_10 = 0;
            $nguoixem_11 = 0;
            $nguoixem_12 = 0;
            $nguoixem_13 = 0;
            $nguoixem_14 = 0;
            $nguoixem_15 = 0;
            $nguoixem_16 = 0;
            $nguoixem_17 = 0;
            $nguoixem_18 = 0;
            $nguoixem_19 = 0;
            $nguoixem_20 = 0;
            $nguoixem_21 = 0;
            $nguoixem_22 = 0;
            $nguoixem_23 = 0;
            $nguoixem_24 = 0;
            $nguoixem_25 = 0;
            $nguoixem_26 = 0;
            $nguoixem_27 = 0;
            $nguoixem_28 = 0;
            $nguoixem_29 = 0;
            $nguoixem_30 = 0;




            $ngay0 = 0;
            $ngay1 = 0;
            $ngay2 = 0;
            $ngay3 = 0;
            $ngay4 = 0;
            $ngay5 = 0;
            $ngay6 = 0;
            $ngay7 = 0;
            $ngay8 = 0;
            $ngay9 = 0;
            $ngay10 = 0;
            $ngay11 = 0;
            $ngay12 = 0;
            $ngay13 = 0;
            $ngay14 = 0;
            $ngay15 = 0;
            $ngay16 = 0;
            $ngay17 = 0;
            $ngay18 = 0;
            $ngay19 = 0;
            $ngay20 = 0;
            $ngay21 = 0;
            $ngay22 = 0;
            $ngay23 = 0;
            $ngay24 = 0;
            $ngay25 = 0;
            $ngay26 = 0;
            $ngay27 = 0;
            $ngay28 = 0;
            $ngay29 = 0;
            $ngay30 = 0;
            $ngay31 = 0;


            $thang0 = 0;
            $thang1 = 0;
            $thang2 = 0;
            $thang3 = 0;
            $thang4 = 0;
            $thang5 = 0;
            $thang6 = 0;
            $thang7 = 0;
            $thang8 = 0;
            $thang9 = 0;
            $thang10 = 0;
            $thang11 = 0;
            $thang12 = 0;
            $thang13 = 0;
            $thang14 = 0;
            $thang15 = 0;
            $thang16 = 0;
            $thang17 = 0;
            $thang18 = 0;
            $thang19 = 0;
            $thang20 = 0;
            $thang21 = 0;
            $thang22 = 0;
            $thang23 = 0;
            $thang24 = 0;
            $thang25 = 0;
            $thang26 = 0;
            $thang27 = 0;
            $thang28 = 0;
            $thang29 = 0;
            $thang30 = 0;
            $thang31 = 0;



            $nam0 = 0;
            $nam1 = 0;
            $nam2 = 0;
            $nam3 = 0;
            $nam4 = 0;
            $nam5 = 0;
            $nam6 = 0;
            $nam7 = 0;
            $nam8 = 0;
            $nam9 = 0;
            $nam10 = 0;
            $nam11 = 0;
            $nam12 = 0;
            $nam13 = 0;
            $nam14 = 0;
            $nam15 = 0;
            $nam16 = 0;
            $nam17 = 0;
            $nam18 = 0;
            $nam19 = 0;
            $nam20 = 0;
            $nam21 = 0;
            $nam22 = 0;
            $nam23 = 0;
            $nam24 = 0;
            $nam25 = 0;
            $nam26 = 0;
            $nam27 = 0;
            $nam28 = 0;
            $nam29 = 0;
            $nam30 = 0;
            $nam31 = 0;



            $http.get(API + 'thongke_doanhthu_nguoixem_version_2').then(function(response) {
                $doanhthu_ngay30 = response.data[1].doanhthu;
                $nguoixem_30 = response.data[1].nguoixem;

                $doanhthu_ngay29 = response.data[2].doanhthu;
                $nguoixem_29 = response.data[2].nguoixem;

                $doanhthu_ngay28 = response.data[3].doanhthu;
                $nguoixem_28 = response.data[3].nguoixem;

                $doanhthu_ngay27 = response.data[4].doanhthu;
                $nguoixem_27 = response.data[4].nguoixem;

                $doanhthu_ngay26 = response.data[5].doanhthu;
                $nguoixem_26 = response.data[5].nguoixem;

                $doanhthu_ngay25 = response.data[6].doanhthu;
                $nguoixem_25 = response.data[6].nguoixem;

                $doanhthu_ngay24 = response.data[7].doanhthu;
                $nguoixem_25 = response.data[7].nguoixem;

                $doanhthu_ngay23 = response.data[8].doanhthu;
                $nguoixem_23 = response.data[8].nguoixem;

                $doanhthu_ngay22 = response.data[9].doanhthu;
                $nguoixem_22 = response.data[9].nguoixem;

                $doanhthu_ngay21 = response.data[10].doanhthu;
                $nguoixem_21 = response.data[10].nguoixem;

                $doanhthu_ngay20 = response.data[11].doanhthu;
                $nguoixem_20 = response.data[11].nguoixem;

                $doanhthu_ngay19 = response.data[12].doanhthu;
                $nguoixem_19 = response.data[12].nguoixem;

                $doanhthu_ngay18 = response.data[13].doanhthu;
                $nguoixem_18 = response.data[13].nguoixem;

                $doanhthu_ngay17 = response.data[14].doanhthu;
                $nguoixem_17 = response.data[14].nguoixem;

                $doanhthu_ngay16 = response.data[15].doanhthu;
                $nguoixem_16 = response.data[15].nguoixem;

                $doanhthu_ngay15 = response.data[16].doanhthu;
                $nguoixem_15 = response.data[16].nguoixem;

                $doanhthu_ngay14 = response.data[17].doanhthu;
                $nguoixem_14 = response.data[17].nguoixem;

                $doanhthu_ngay13 = response.data[18].doanhthu;
                $nguoixem_13 = response.data[18].nguoixem;

                $doanhthu_ngay12 = response.data[19].doanhthu;
                $nguoixem_12 = response.data[19].nguoixem;

                $doanhthu_ngay11 = response.data[20].doanhthu;
                $nguoixem_11 = response.data[20].nguoixem;

                $doanhthu_ngay10 = response.data[21].doanhthu;
                $nguoixem_10 = response.data[21].nguoixem;

                $doanhthu_ngay9 = response.data[22].doanhthu;
                $nguoixem_9 = response.data[22].nguoixem;

                $doanhthu_ngay8 = response.data[23].doanhthu;
                $nguoixem_8 = response.data[23].nguoixem;

                $doanhthu_ngay7 = response.data[24].doanhthu;
                $nguoixem_7 = response.data[24].nguoixem;

                $doanhthu_ngay6 = response.data[25].doanhthu;
                $nguoixem_6 = response.data[25].nguoixem;

                $doanhthu_ngay5 = response.data[26].doanhthu;
                $nguoixem_5 = response.data[26].nguoixem;

                $doanhthu_ngay4 = response.data[27].doanhthu;
                $nguoixem_4 = response.data[27].nguoixem;

                $doanhthu_ngay3 = response.data[28].doanhthu;
                $nguoixem_3 = response.data[28].nguoixem;

                $doanhthu_ngay2 = response.data[29].doanhthu;
                $nguoixem_2 = response.data[29].nguoixem;

                $doanhthu_ngay1 = response.data[30].doanhthu;
                $nguoixem_1 = response.data[30].nguoixem;

                $doanhthu_ngay0 = response.data[31].doanhthu;
                $nguoixem_0 = response.data[31].nguoixem;

            });





            //ngày 30
            var d = new Date();
            d.setDate(d.getDate() - 2);
            $nam30 = d.getFullYear();
            $ngay30 = d.getDate();
            $thang30 = d.getMonth() + 1;




            //ngày 29
            var d = new Date();
            d.setDate(d.getDate() - 3);
            $nam29 = d.getFullYear();
            $ngay29 = d.getDate();
            $thang29 = d.getMonth() + 1;



            //ngày 28
            var d = new Date();
            d.setDate(d.getDate() - 4);
            $nam28 = d.getFullYear();
            $ngay28 = d.getDate();
            $thang28 = d.getMonth() + 1;



            //ngày 27
            var d = new Date();
            d.setDate(d.getDate() - 5);
            $nam27 = d.getFullYear();
            $ngay27 = d.getDate();
            $thang27 = d.getMonth() + 1;



            //ngày 26
            var d = new Date();
            d.setDate(d.getDate() - 6);
            $nam26 = d.getFullYear();
            $ngay26 = d.getDate();
            $thang26 = d.getMonth() + 1;



            //ngày 25
            var d = new Date();
            d.setDate(d.getDate() - 7);
            $nam25 = d.getFullYear();
            $ngay25 = d.getDate();
            $thang25 = d.getMonth() + 1;






            //ngày 24
            var d = new Date();
            d.setDate(d.getDate() - 8);
            $nam24 = d.getFullYear();
            $ngay24 = d.getDate();
            $thang24 = d.getMonth() + 1;




            //ngày 23
            var d = new Date();
            d.setDate(d.getDate() - 9);
            $nam23 = d.getFullYear();
            $ngay23 = d.getDate();
            $thang23 = d.getMonth() + 1;



            //ngày 22
            var d = new Date();
            d.setDate(d.getDate() - 10);
            $nam22 = d.getFullYear();
            $ngay22 = d.getDate();
            $thang22 = d.getMonth() + 1;


            //ngày 21
            var d = new Date();
            d.setDate(d.getDate() - 11);
            $nam21 = d.getFullYear();
            $ngay21 = d.getDate();
            $thang21 = d.getMonth() + 1;


            //ngày 20
            var d = new Date();
            d.setDate(d.getDate() - 12);
            $nam20 = d.getFullYear();
            $ngay20 = d.getDate();
            $thang20 = d.getMonth() + 1;


            //ngày 19
            var d = new Date();
            d.setDate(d.getDate() - 13);
            $nam19 = d.getFullYear();
            $ngay19 = d.getDate();
            $thang19 = d.getMonth() + 1;




            //ngày 18
            var d = new Date();
            d.setDate(d.getDate() - 14);
            $nam18 = d.getFullYear();
            $ngay18 = d.getDate();
            $thang18 = d.getMonth() + 1;



            //ngày 17
            var d = new Date();
            d.setDate(d.getDate() - 15);
            $nam17 = d.getFullYear();
            $ngay17 = d.getDate();
            $thang17 = d.getMonth() + 1;

            //ngày 16
            var d = new Date();
            d.setDate(d.getDate() - 16);
            $nam16 = d.getFullYear();
            $ngay16 = d.getDate();
            $thang16 = d.getMonth() + 1;



            //ngày 15
            var d = new Date();
            d.setDate(d.getDate() - 17);
            $nam15 = d.getFullYear();
            $ngay15 = d.getDate();
            $thang15 = d.getMonth() + 1;



            //ngày 14
            var d = new Date();
            d.setDate(d.getDate() - 18);
            $nam14 = d.getFullYear();
            $ngay14 = d.getDate();
            $thang14 = d.getMonth() + 1;




            //ngày 13
            var d = new Date();
            d.setDate(d.getDate() - 19);
            $nam13 = d.getFullYear();
            $ngay13 = d.getDate();
            $thang13 = d.getMonth() + 1;



            //ngày 12
            var d = new Date();
            d.setDate(d.getDate() - 20);
            $nam12 = d.getFullYear();
            $ngay12 = d.getDate();
            $thang12 = d.getMonth() + 1;


            //ngày 11
            var d = new Date();
            d.setDate(d.getDate() - 21);
            $nam11 = d.getFullYear();
            $ngay11 = d.getDate();
            $thang11 = d.getMonth() + 1;



            //ngày 10
            var d = new Date();
            d.setDate(d.getDate() - 22);
            $nam10 = d.getFullYear();
            $ngay10 = d.getDate();
            $thang10 = d.getMonth() + 1;




            //ngày 9
            var d = new Date();
            d.setDate(d.getDate() - 23);
            $nam9 = d.getFullYear();
            $ngay9 = d.getDate();
            $thang9 = d.getMonth() + 1;



            //ngày 8
            var d = new Date();
            d.setDate(d.getDate() - 24);
            $nam8 = d.getFullYear();
            $ngay8 = d.getDate();
            $thang8 = d.getMonth() + 1;

            //ngày 7
            var d = new Date();
            d.setDate(d.getDate() - 25);
            $nam7 = d.getFullYear();
            $ngay7 = d.getDate();
            $thang7 = d.getMonth() + 1;



            //ngày 6
            var d = new Date();
            d.setDate(d.getDate() - 26);
            $nam6 = d.getFullYear();
            $ngay6 = d.getDate();
            $thang6 = d.getMonth() + 1;



            //ngày 5
            var d = new Date();
            d.setDate(d.getDate() - 27);
            $nam5 = d.getFullYear();
            $ngay5 = d.getDate();
            $thang5 = d.getMonth() + 1;



            //ngày 4
            var d = new Date();
            d.setDate(d.getDate() - 28);
            $nam4 = d.getFullYear();
            $ngay4 = d.getDate();
            $thang4 = d.getMonth() + 1;




            //ngày 3
            var d = new Date();
            d.setDate(d.getDate() - 29);
            $nam3 = d.getFullYear();
            $ngay3 = d.getDate();
            $thang3 = d.getMonth() + 1;



            //ngày 2
            var d = new Date();
            d.setDate(d.getDate() - 30);
            $nam2 = d.getFullYear();
            $ngay2 = d.getDate();
            $thang2 = d.getMonth() + 1;





            //ngày 1
            var d = new Date();
            d.setDate(d.getDate() - 31);
            $nam1 = d.getFullYear();
            $ngay1 = d.getDate();
            $thang1 = d.getMonth() + 1;


            //ngày 0
            var d = new Date();
            d.setDate(d.getDate() - 32);
            $nam0 = d.getFullYear();
            $ngay0 = d.getDate();
            $thang0 = d.getMonth() + 1;






            $http.get(API + 'maphim').then(function(response) {
                $(document).ready(function() {
                    $('.chart').easyPieChart({
                        barColor: '#f8ac59',
                        //                scaleColor: false,
                        scaleLength: 5,
                        lineWidth: 4,
                        size: 80
                    });

                    $('.chart2').easyPieChart({
                        barColor: '#1c84c6',
                        //                scaleColor: false,
                        scaleLength: 5,
                        lineWidth: 4,
                        size: 80
                    });

                    var data2 = [
                        [gd(2020, 1, 1), $nguoixem_0],
                        [gd(2020, 1, 2), $nguoixem_1],
                        [gd(2020, 1, 3), $nguoixem_2],
                        [gd(2020, 1, 4), $nguoixem_3],
                        [gd(2020, 1, 5), $nguoixem_4],
                        [gd(2020, 1, 6), $nguoixem_5],
                        [gd(2020, 1, 7), $nguoixem_6],
                        [gd(2020, 1, 8), $nguoixem_7],
                        [gd(2020, 1, 9), $nguoixem_8],
                        [gd(2020, 1, 10), $nguoixem_9],
                        [gd(2020, 1, 11), $nguoixem_10],
                        [gd(2020, 1, 12), $nguoixem_11],
                        [gd(2020, 1, 13), $nguoixem_12],
                        [gd(2020, 1, 14), $nguoixem_13],
                        [gd(2020, 1, 15), $nguoixem_14],
                        [gd(2020, 1, 16), $nguoixem_15],
                        [gd(2020, 1, 17), $nguoixem_16],
                        [gd(2020, 1, 18), $nguoixem_17],
                        [gd(2020, 1, 19), $nguoixem_18],
                        [gd(2020, 1, 20), $nguoixem_19],
                        [gd(2020, 1, 21), $nguoixem_20],
                        [gd(2020, 1, 22), $nguoixem_21],
                        [gd(2020, 1, 23), $nguoixem_22],
                        [gd(2020, 1, 24), $nguoixem_23],
                        [gd(2020, 1, 25), $nguoixem_24],
                        [gd(2020, 1, 26), $nguoixem_25],
                        [gd(2020, 1, 27), $nguoixem_26],
                        [gd(2020, 1, 28), $nguoixem_27],
                        [gd(2020, 1, 29), $nguoixem_28],
                        [gd(2020, 1, 30), $nguoixem_29],
                        [gd(2020, 1, 31), $nguoixem_30]
                    ];

                    var data3 = [
                        [gd(2020, 1, 2), $doanhthu_ngay0],
                        [gd(2020, 1, 2), $doanhthu_ngay1],
                        [gd(2020, 1, 3), $doanhthu_ngay2],
                        [gd(2020, 1, 4), $doanhthu_ngay3],
                        [gd(2020, 1, 5), $doanhthu_ngay4],
                        [gd(2020, 1, 6), $doanhthu_ngay5],
                        [gd(2020, 1, 7), $doanhthu_ngay6],
                        [gd(2020, 1, 8), $doanhthu_ngay7],
                        [gd(2020, 1, 9), $doanhthu_ngay8],
                        [gd(2020, 1, 10), $doanhthu_ngay9],
                        [gd(2020, 1, 11), $doanhthu_ngay10],
                        [gd(2020, 1, 12), $doanhthu_ngay11],
                        [gd(2020, 1, 13), $doanhthu_ngay12],
                        [gd(2020, 1, 14), $doanhthu_ngay13],
                        [gd(2020, 1, 15), $doanhthu_ngay14],
                        [gd(2020, 1, 16), $doanhthu_ngay15],
                        [gd(2020, 1, 17), $doanhthu_ngay16],
                        [gd(2020, 1, 18), $doanhthu_ngay17],
                        [gd(2020, 1, 19), $doanhthu_ngay18],
                        [gd(2020, 1, 20), $doanhthu_ngay19],
                        [gd(2020, 1, 21), $doanhthu_ngay20],
                        [gd(2020, 1, 22), $doanhthu_ngay21],
                        [gd(2020, 1, 23), $doanhthu_ngay22],
                        [gd(2020, 1, 24), $doanhthu_ngay23],
                        [gd(2020, 1, 25), $doanhthu_ngay24],
                        [gd(2020, 1, 26), $doanhthu_ngay25],
                        [gd(2020, 1, 27), $doanhthu_ngay26],
                        [gd(2020, 1, 28), $doanhthu_ngay27],
                        [gd(2020, 1, 29), $doanhthu_ngay28],
                        [gd(2020, 1, 30), $doanhthu_ngay29],
                        [gd(2020, 1, 31), $doanhthu_ngay30]
                    ];


                    var dataset = [{
                        label: "Doanh thu",
                        data: data3,
                        color: "#1ab394",
                        bars: {
                            show: true,
                            align: "center",
                            barWidth: 24 * 60 * 60 * 600,
                            lineWidth: 0
                        }

                    }, {
                        label: "Người xem",
                        data: data2,
                        yaxis: 2,
                        color: "#1C84C6",
                        lines: {
                            lineWidth: 1,
                            show: true,
                            fill: true,
                            fillColor: {
                                colors: [{
                                    opacity: 0.2
                                }, {
                                    opacity: 0.4
                                }]
                            }
                        },
                        splines: {
                            show: false,
                            tension: 0.6,
                            lineWidth: 1,
                            fill: 0.1
                        },
                    }];


                    var options = {
                        xaxis: {
                            mode: "time",
                            tickSize: [3, "day"],
                            tickLength: 0,
                            axisLabel: "Date",
                            axisLabelUseCanvas: true,
                            axisLabelFontSizePixels: 12,
                            axisLabelFontFamily: 'Arial',
                            axisLabelPadding: 10,
                            color: "#d5d5d5"
                        },
                        yaxes: [{
                            position: "left",
                            max: 1070,
                            color: "#d5d5d5",
                            axisLabelUseCanvas: true,
                            axisLabelFontSizePixels: 12,
                            axisLabelFontFamily: 'Arial',
                            axisLabelPadding: 3
                        }, {
                            position: "right",
                            clolor: "#d5d5d5",
                            axisLabelUseCanvas: true,
                            axisLabelFontSizePixels: 12,
                            axisLabelFontFamily: ' Arial',
                            axisLabelPadding: 67
                        }],
                        legend: {
                            noColumns: 1,
                            labelBoxBorderColor: "#000000",
                            position: "nw"
                        },
                        grid: {
                            hoverable: false,
                            borderWidth: 0
                        }
                    };

                    function gd(year, month, day) {
                        return new Date(year, month - 1, day).getTime();
                    }

                    var previousPoint = null,
                        previousLabel = null;

                    $.plot($("#flot-dashboard-chart"), dataset, options);




                });

            });

        }
    });



});