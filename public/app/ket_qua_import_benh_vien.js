var app = angular.module('ket_qua_import_benh_vien-app', []).constant('API', 'http://localhost/HCTD/public/');



app.controller('ket_qua_import_benh_vienController', function($scope, $http, API, $rootScope, $location, $window) {


    $scope.count_capnhat = 0;
    $scope.count_themmoi = 0;
    $scope.count_xuly = 0;
    // $scope.style = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";




    $http.get(API + 'count_nguoimoi').then(function(response) {
        $scope.count_themmoi = response.data;
        $http.get(API + 'insert_nguoimoi_benhvien').then(function(response) {
            console.log(response.data);
        });
    });
    $http.get(API + 'count_capnhat').then(function(response) {
        $scope.count_capnhat = response.data;
    });
    $http.get(API + 'count_xuly').then(function(response) {
        $scope.count_xuly = response.data;
    });

    $http.get(API + 'nguoi_xuly').then(function(response) {
        $scope.listnguoixuly = response.data;
    });

    $http.get(API + 'update_import_benhvien').then(function(response) {
        console.log(response.data);
    });


    $scope.edit = function(item) {
        $scope.nguoi_hien = item;
        $scope.style = "";
        $http.get(API + 'kiemtra_id2/' + item.HoTen + '/' + item.NgaySinh + '/' + item.Nhom_ABO + '/' + item.Nhom_Rh).then(function(response) {
            $scope.list = response.data;

            $(document).ready(function() {
                $('#myModal').modal('show')
            });
        });

    };
    $scope.import = function(id_excel, id_nguoihienmau) {
        $scope.style = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";

        $http.get(API + 'update_nguoihienmau/' + id_excel + '/' + id_nguoihienmau).then(function(response) {



            $http.get(API + 'nguoi_xuly/').then(function(response) {
                $scope.listnguoixuly = response.data;
            });

            $http.get(API + 'count_nguoimoi/').then(function(response) {
                $scope.count_themmoi = response.data;
            });
            $http.get(API + 'count_capnhat/').then(function(response) {
                $scope.count_capnhat = response.data;
            });
            $http.get(API + 'count_xuly/').then(function(response) {
                $scope.count_xuly = response.data;
            });
            alert("Cập nhật thành công!");

        });

    };

    // $http.get(API + 'insert_nguoihienmau_1/' + id_excel.HoTen + '/' + id_excel.NgaySinh + '/' + id_excel.NgheNghiep + '/' + id_excel.NoiLamviec + '/' + id_excel.SDT + '/' + id_excel.DiaChi + '/' + id_excel.SoLanHien + '/' + id_excel.Nhom_ABO + '/' + id_excel.Nhom_Rh).then(function(response) {
    //     alert(response.data);

    // });
    $scope.delete = function(item) {

        $http.get(API + 'delete_excel_benhvien/' + item.Id).then(function(response) {
            $http.get(API + 'nguoi_xuly/').then(function(response) {
                $scope.listnguoixuly = response.data;
            });
            $http.get(API + 'count_xuly/').then(function(response) {
                $scope.count_xuly = response.data;
            });
            $scope.style = "cursor: not-allowed; pointer-events: none;background-color: #ddd;background: #ddd;";

            alert("Xóa thành công!");
        });


    };



    // $http.get(API + 'getlistexcelbenhvien').then(function(response) {
    //     var list_xuly = [];
    //     for (let item of response.data) {
    //         $http.get(API + 'kiemtra_id4/' + item.HoTen + '/' + item.NgaySinh + '/' + item.Nhom_ABO + '/' + item.Nhom_Rh).then(function(response) {
    //             console.log(response.data.count);
    //         });
    //     }
    // });









});