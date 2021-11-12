var app = angular.module('de_xuat_ton_vinh-app', []).constant('API', 'http://localhost/HCTD/public/');

app.factory('Excel', function($window) {
        var uri = 'data:application/vnd.ms-excel;base64,',
            template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
            base64 = function(s) { return $window.btoa(unescape(encodeURIComponent(s))); },
            format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) };
        return {
            tableToExcel: function(tableId, worksheetName) {
                var table = $(tableId),
                    ctx = { worksheet: worksheetName, table: table.html() },
                    href = uri + base64(format(template, ctx));
                return href;
            }
        };
    })
    .controller('de_xuat_ton_vinhController', function(Excel, $timeout, $scope, $http, API, $rootScope, $location, $window) {
        // mức tôn vinh thứ 5

        $http.get(API + 'tonvinh_donvi/' + 1 + '/' + 5).then(function(response) {
            $scope.list_1_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 2 + '/' + 5).then(function(response) {
            $scope.list_2_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 3 + '/' + 5).then(function(response) {
            $scope.list_3_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 4 + '/' + 5).then(function(response) {
            $scope.list_4_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 5 + '/' + 5).then(function(response) {
            $scope.list_5_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 6 + '/' + 5).then(function(response) {
            $scope.list_6_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 7 + '/' + 5).then(function(response) {
            $scope.list_7_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 8 + '/' + 5).then(function(response) {
            $scope.list_8_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 9 + '/' + 5).then(function(response) {
            $scope.list_9_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 10 + '/' + 5).then(function(response) {
            $scope.list_10_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 11 + '/' + 5).then(function(response) {
            $scope.list_11_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 12 + '/' + 5).then(function(response) {
            $scope.list_12_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 13 + '/' + 5).then(function(response) {
            $scope.list_13_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 14 + '/' + 5).then(function(response) {
            $scope.list_14_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 15 + '/' + 5).then(function(response) {
            $scope.list_15_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 16 + '/' + 5).then(function(response) {
            $scope.list_16_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 17 + '/' + 5).then(function(response) {
            $scope.list_17_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 18 + '/' + 5).then(function(response) {
            $scope.list_18_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 19 + '/' + 5).then(function(response) {
            $scope.list_19_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 20 + '/' + 5).then(function(response) {
            $scope.list_20_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 21 + '/' + 5).then(function(response) {
            $scope.list_21_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 22 + '/' + 5).then(function(response) {
            $scope.list_22_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 23 + '/' + 5).then(function(response) {
            $scope.list_23_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 24 + '/' + 5).then(function(response) {
            $scope.list_24_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 25 + '/' + 5).then(function(response) {
            $scope.list_25_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 26 + '/' + 5).then(function(response) {
            $scope.list_26_5 = response.data;
        });
        $http.get(API + 'tonvinh_donvi/' + 27 + '/' + 5).then(function(response) {
            $scope.list_27_5 = response.data;
        });


        $http.get(API + 'get_Muc_i/' + 10).then(function(response) {
            $scope.list_10 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 15).then(function(response) {
            $scope.list_15 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 20).then(function(response) {
            $scope.list_20 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 30).then(function(response) {
            $scope.list_30 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 40).then(function(response) {
            $scope.list_40 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 50).then(function(response) {
            $scope.list_50 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 60).then(function(response) {
            $scope.list_60 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 70).then(function(response) {
            $scope.list_70 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 80).then(function(response) {
            $scope.list_80 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 90).then(function(response) {
            $scope.list_90 = response.data;
        });
        $http.get(API + 'get_Muc_i/' + 100).then(function(response) {
            $scope.list_100 = response.data;
        });




        $scope.xacnhan = function() {
                // alert('fdd');
                // $blob = new Blob([document.getElementById('exportable').innerHTML], {
                //     type: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=utf-8",

                // });

                // saveAs($blob, "Report.xls");
                $exportHref = Excel.tableToExcel('exportable', 'sheet name');
                $timeout(function() { location.href = $exportHref; }, 100); // trigger download

            }
            // $http.get(API + 'get_donvi').then(function(response) {
            //     $scope.list = response.data;
            // });
    });



// app.controller('de_xuat_ton_vinhController', function($scope, $http, API, $rootScope, $location, $window) {

//     $http.get(API + 'get_Muc_i/' + 5).then(function(response) {
//         $scope.list_5 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 10).then(function(response) {
//         $scope.list_10 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 15).then(function(response) {
//         $scope.list_15 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 20).then(function(response) {
//         $scope.list_20 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 30).then(function(response) {
//         $scope.list_30 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 40).then(function(response) {
//         $scope.list_40 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 50).then(function(response) {
//         $scope.list_50 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 60).then(function(response) {
//         $scope.list_60 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 70).then(function(response) {
//         $scope.list_70 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 80).then(function(response) {
//         $scope.list_80 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 90).then(function(response) {
//         $scope.list_90 = response.data;
//     });
//     $http.get(API + 'get_Muc_i/' + 100).then(function(response) {
//         $scope.list_100 = response.data;
//     });


//     $scope.xacnhan = function() {

//         var uri = 'data:application/vnd.ms-excel;base64,',
//             template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
//             base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) },
//             format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }

//         var table = document.getElementById("exportable");
//         var ctx = { worksheet: trong || 'Worksheet', table: table.innerHTML };
//         var url = uri + base64(format(template, ctx));
//         var a = document.createElement('a');
//         a.href = url;
//         a.download = 'Exported_Table.xls';
//         a.click();
//         alert("trọng");

//     }



// });