var app = angular.module('tong_hop_ton_vinh-app', []).constant('API', 'http://localhost/HCTD/public/');

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
    .controller('tong_hop_ton_vinhController', function(Excel, $timeout, $scope, $http, API, $rootScope, $location, $window) {
        // mức tôn vinh thứ 5

        $http.get(API + 'getList_nguoihienmau_donvi/' + 1).then(function(response) {
            $scope.list_1 = response.data;
        });
        

        $scope.xacnhan = function(tableId) {

                $exportHref = Excel.tableToExcel(tableId, 'sheet name');
                $timeout(function() { location.href = $exportHref; }, 100); // trigger download

        }
    });


