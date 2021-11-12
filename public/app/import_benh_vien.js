var app = angular.module('import_benh_vien-app', []).constant('API', 'http://localhost/HCTD/public/');





app.controller('import_benh_vienController', function($scope, $http, API, $rootScope, $location, $window) {


    $scope.import = function() {
        var file = document.getElementById('file').files[0];
        if (file == '' || file == null)
            alert('Bạn chưa chọn file!');
        else {
            //upload file ảnh hiển thị
            var formData = new FormData();
            formData.append('file', file);
            url = API + 'template/import_excel_benhvien.php'
            $http.post(url, formData, {
                    transformRequest: angular.identity,
                    headers: { 'Content-Type': undefined, 'Process-Data': false }
                })
                .then(function() {
                    alert("import thành công!");
                    $window.location.href = '/HCTD/public/ket_qua_import_benh_vien_1';
                })

        }

    }








});