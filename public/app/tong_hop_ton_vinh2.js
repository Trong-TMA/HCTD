var app = angular.module('tong_hop_ton_vinh2-app', []).constant('API', 'http://localhost/HCTD/public/');

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
    .controller('tong_hop_ton_vinh2Controller', function(Excel, $timeout, $scope, $http, API, $rootScope, $location, $window) {
        
        $http.get(API + 'getList_nguoihienmau_donvi/' + 1).then(function(response) {
            $scope.list_1 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 2).then(function(response) {
            $scope.list_2 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 3).then(function(response) {
            $scope.list_3 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 4).then(function(response) {
            $scope.list_4 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 5).then(function(response) {
            $scope.list_5 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 6).then(function(response) {
            $scope.list_6 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 7).then(function(response) {
            $scope.list_7 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 8).then(function(response) {
            $scope.list_8 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 9).then(function(response) {
            $scope.list_9 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 10).then(function(response) {
            $scope.list_10 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 11).then(function(response) {
            $scope.list_11 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 12).then(function(response) {
            $scope.list_12 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 14).then(function(response) {
            $scope.list_14 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 15).then(function(response) {
            $scope.list_15 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 16).then(function(response) {
            $scope.list_16 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 17).then(function(response) {
            $scope.list_17 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 18).then(function(response) {
            $scope.list_18 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 19).then(function(response) {
            $scope.list_19 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 20).then(function(response) {
            $scope.list_21 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 22).then(function(response) {
            $scope.list_22 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 23).then(function(response) {
            $scope.list_23 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 24).then(function(response) {
            $scope.list_24 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 25).then(function(response) {
            $scope.list_25 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 26).then(function(response) {
            $scope.list_26 = response.data;
        });
        $http.get(API + 'getList_nguoihienmau_donvi/' + 27).then(function(response) {
            $scope.list_27 = response.data;
        });

        $http.get(API + 'getList_donvi').then(function(response) {
            $scope.list_DV = response.data;
        });

        $scope.Tong5_1 = 0;
        $scope.Tong10_1= 0;
        $scope.Tong15_1 = 0;
        $scope.Tong20_1 = 0;
        $scope.Tong_1 = 0;

        $scope.Tong5_2 = 0;
        $scope.Tong10_2= 0;
        $scope.Tong15_2 = 0;
        $scope.Tong20_2 = 0;
        $scope.Tong_2 = 0;

        $scope.Tong5_3 = 0;
        $scope.Tong10_3= 0;
        $scope.Tong15_3 = 0;
        $scope.Tong20_3 = 0;
        $scope.Tong_3 = 0;

        $scope.Tong5_4 = 0;
        $scope.Tong10_4= 0;
        $scope.Tong15_4 = 0;
        $scope.Tong20_4 = 0;
        $scope.Tong_4 = 0;

        $scope.Tong5_5 = 0;
        $scope.Tong10_5= 0;
        $scope.Tong15_5 = 0;
        $scope.Tong20_5 = 0;
        $scope.Tong_5 = 0;

        $scope.Tong5_6 = 0;
        $scope.Tong10_6= 0;
        $scope.Tong15_6 = 0;
        $scope.Tong20_6 = 0;
        $scope.Tong_6 = 0;

        $scope.Tong5_7 = 0;
        $scope.Tong10_7= 0;
        $scope.Tong15_7 = 0;
        $scope.Tong20_7 = 0;
        $scope.Tong_7 = 0;

        $scope.Tong5_8 = 0;
        $scope.Tong10_8= 0;
        $scope.Tong15_8 = 0;
        $scope.Tong20_8 = 0;
        $scope.Tong_8 = 0;


        $scope.Tong5_9 = 0;
        $scope.Tong10_9= 0;
        $scope.Tong15_9 = 0;
        $scope.Tong20_9 = 0;
        $scope.Tong_9 = 0;

        $scope.Tong5_10 = 0;
        $scope.Tong10_10= 0;
        $scope.Tong15_10 = 0;
        $scope.Tong20_10 = 0;
        $scope.Tong_10 = 0;

        $scope.Tong5_11 = 0;
        $scope.Tong10_11= 0;
        $scope.Tong15_11 = 0;
        $scope.Tong20_11 = 0;
        $scope.Tong_11 = 0;


        $scope.Tong5_12 = 0;
        $scope.Tong10_12= 0;
        $scope.Tong15_12 = 0;
        $scope.Tong20_12 = 0;
        $scope.Tong_12 = 0;
        

        $scope.Tong5_13 = 0;
        $scope.Tong10_13= 0;
        $scope.Tong15_13 = 0;
        $scope.Tong20_13 = 0;
        $scope.Tong_13 = 0;

        $scope.Tong5_14 = 0;
        $scope.Tong10_14= 0;
        $scope.Tong15_14 = 0;
        $scope.Tong20_14 = 0;
        $scope.Tong_14 = 0;

        $scope.Tong5_15 = 0;
        $scope.Tong10_15= 0;
        $scope.Tong15_15 = 0;
        $scope.Tong20_15 = 0;
        $scope.Tong_15 = 0;

        $scope.Tong5_16 = 0;
        $scope.Tong10_16= 0;
        $scope.Tong15_16 = 0;
        $scope.Tong20_16 = 0;
        $scope.Tong_16 = 0;

        $scope.Tong5_17 = 0;
        $scope.Tong10_17= 0;
        $scope.Tong15_17 = 0;
        $scope.Tong20_17 = 0;
        $scope.Tong_17 = 0;

        $scope.Tong5_18 = 0;
        $scope.Tong10_18= 0;
        $scope.Tong15_18 = 0;
        $scope.Tong20_18 = 0;
        $scope.Tong_18 = 0;

        $scope.Tong5_19 = 0;
        $scope.Tong10_19= 0;
        $scope.Tong15_19 = 0;
        $scope.Tong20_19 = 0;
        $scope.Tong_19 = 0;

        $scope.Tong5_20 = 0;
        $scope.Tong10_20= 0;
        $scope.Tong15_20 = 0;
        $scope.Tong20_20 = 0;
        $scope.Tong_20 = 0;

        $scope.Tong5_21 = 0;
        $scope.Tong10_21= 0;
        $scope.Tong15_21 = 0;
        $scope.Tong20_21 = 0;
        $scope.Tong_21 = 0;

        $scope.Tong5_22 = 0;
        $scope.Tong10_22= 0;
        $scope.Tong15_22 = 0;
        $scope.Tong20_22 = 0;
        $scope.Tong_22 = 0;

        $scope.Tong5_23 = 0;
        $scope.Tong10_23= 0;
        $scope.Tong15_23 = 0;
        $scope.Tong20_23 = 0;
        $scope.Tong_23 = 0;

        $scope.Tong5_24 = 0;
        $scope.Tong10_24= 0;
        $scope.Tong15_24 = 0;
        $scope.Tong20_24 = 0;
        $scope.Tong_24 = 0;

        $scope.Tong5_25 = 0;
        $scope.Tong10_25= 0;
        $scope.Tong15_25 = 0;
        $scope.Tong20_25 = 0;
        $scope.Tong_25 = 0;

        $scope.Tong5_26 = 0;
        $scope.Tong10_26= 0;
        $scope.Tong15_26 = 0;
        $scope.Tong20_26 = 0;
        $scope.Tong_26 = 0;

        $scope.Tong5_27 = 0;
        $scope.Tong10_27= 0;
        $scope.Tong15_27 = 0;
        $scope.Tong20_27 = 0;
        $scope.Tong_27 = 0;
        
        $scope.getSoLanHien1 =  function(value){

            if(value >= 5 && value < 10){
                
                $scope.Tong5_1 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_1 += 1;
                }
                else{

                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_1 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_1 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_1 = $scope.Tong5_1 + $scope.Tong10_1 + $scope.Tong15_1 + $scope.Tong20_1;
            
        }
        $scope.getSoLanHien2 =  function(value){

            if(value >= 5 && value < 10){
                
                $scope.Tong5_2 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_2 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_2 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_2 += 1;
                        }
                    }
                       
                }
            }
            $scope.Tong_2 = $scope.Tong5_2 + $scope.Tong10_2 + $scope.Tong15_2 + $scope.Tong20_2;
            
        }
        $scope.getSoLanHien3 =  function(value){
            
            
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_3 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_3 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.sl15_3 = value;
                        $scope.Tong15_3 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_3 += 1;
                        }
                       
                    }
                }
            }
            $scope.Tong_3 = $scope.Tong5_3 + $scope.Tong10_3 + $scope.Tong15_3 + $scope.Tong20_3;
            
        }
        $scope.getSoLanHien4 =  function(value){
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_4 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_4 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_4 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_4 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_4 = $scope.Tong5_4 + $scope.Tong10_4 + $scope.Tong15_4 + $scope.Tong20_4;
            
        }
        $scope.getSoLanHien5 =  function(value){
            
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_5 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_5 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_5 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_5 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_5 = $scope.Tong5_5 + $scope.Tong10_5 + $scope.Tong15_5 + $scope.Tong20_5;
            
        }
        $scope.getSoLanHien6 =  function(value){
            
            
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_6 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_6 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_6 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_6 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_6 = $scope.Tong5_6 + $scope.Tong10_6 + $scope.Tong15_6 + $scope.Tong20_6;
            
        }
        $scope.getSoLanHien7 =  function(value){
            
            
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_7 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_7 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_7 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_7 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_7 = $scope.Tong5_7 + $scope.Tong10_7 + $scope.Tong15_7 + $scope.Tong20_7;
            
        }
        $scope.getSoLanHien8 =  function(value){
            
            
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_8 +=1;
            }
            else{
                
                if(value >= 10 && value < 15){

                    $scope.Tong10_8 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_8 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_8 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_8 = $scope.Tong5_8 + $scope.Tong10_8 + $scope.Tong15_8 + $scope.Tong20_8;
            
        }
        $scope.getSoLanHien9 =  function(value){
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_9 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_9 += 1;
                }
                else{
                    $scope.sl10_9 = 0;
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_9 += 1;
                    }
                    else{
                        $scope.sl15_9 = 0;
                        if(value >= 20){
                
                            $scope.Tong20_9 += 1;
                        }
                       
                    }
                }
            }
            $scope.Tong_9 = $scope.Tong5_9 + $scope.Tong10_9 + $scope.Tong15_9 + $scope.Tong20_9;
            
        }
        $scope.getSoLanHien10 =  function(value){
        
            if(value >= 5 && value < 10){
                
                $scope.Tong5_10 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_10 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_10 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_10 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_10 = $scope.Tong5_10 + $scope.Tong10_10 + $scope.Tong15_10 + $scope.Tong20_10;
            
        }
        $scope.getSoLanHien11 =  function(value){
      
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_11 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_11 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_11 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_11 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_11 = $scope.Tong5_11 + $scope.Tong10_11 + $scope.Tong15_11 + $scope.Tong20_11;
            
        }
        $scope.getSoLanHien12 =  function(value){
           
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_12 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_12 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_12 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_12 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_12 = $scope.Tong5_12 + $scope.Tong10_12 + $scope.Tong15_12 + $scope.Tong20_12;
            
        }
        $scope.getSoLanHien13 =  function(value){
           
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_13 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_13 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_13 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_13 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_13 = $scope.Tong5_13 + $scope.Tong10_13 + $scope.Tong15_13 + $scope.Tong20_13;
            
        }
        $scope.getSoLanHien14 =  function(value){
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_14 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_14 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_14 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_14 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_14 = $scope.Tong5_14 + $scope.Tong10_14 + $scope.Tong15_14 + $scope.Tong20_14;
            
        }
        $scope.getSoLanHien15 =  function(value){
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_15 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_15 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_15 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_15 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_15 = $scope.Tong5_15 + $scope.Tong10_15 + $scope.Tong15_15 + $scope.Tong20_15;
            
        }
        $scope.getSoLanHien16 =  function(value){
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_16 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_16 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_16 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_16 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_16 = $scope.Tong5_16 + $scope.Tong10_16 + $scope.Tong15_16 + $scope.Tong20_16;
            
        }
        $scope.getSoLanHien17 =  function(value){
            
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_17 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_17 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_17 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_17 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_17 = $scope.Tong5_17 + $scope.Tong10_17 + $scope.Tong15_17 + $scope.Tong20_17;
            
        }
        $scope.getSoLanHien18 =  function(value){
           
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_18 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_18 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_18 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_18 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_18 = $scope.Tong5_18 + $scope.Tong10_18 + $scope.Tong15_18 + $scope.Tong20_18;
            
        }
        $scope.getSoLanHien19 =  function(value){
            
            if(value >= 5 && value < 10){
                
                $scope.Tong5_19 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_19 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_19 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_19 += 1;
                        }
                    }    
                }
            }
            $scope.Tong_19 = $scope.Tong5_19 + $scope.Tong10_19 + $scope.Tong15_19 + $scope.Tong20_19;
            
        }
        $scope.getSoLanHien20 =  function(value){
         
            
            if(value >= 5 && value < 10){
                
                $scope.Tong5_20 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_20 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_20 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_20 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_20 = $scope.Tong5_20 + $scope.Tong10_20 + $scope.Tong15_20 + $scope.Tong20_20;
            
        }
        $scope.getSoLanHien21 =  function(value){
            
            if(value >= 5 && value < 10){
                
                $scope.Tong5_21 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_21 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_21 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_21 += 1;
                        }
                    }   
                }
            }
            $scope.Tong_21 = $scope.Tong5_21 + $scope.Tong10_21 + $scope.Tong15_21 + $scope.Tong20_21; 
        }

        $scope.getSoLanHien22 =  function(value){
            
            if(value >= 5 && value < 10){
                
                $scope.Tong5_22 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_22 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_22 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_22 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_22 = $scope.Tong5_22 + $scope.Tong10_22 + $scope.Tong15_22 + $scope.Tong20_22;
            
        }
        $scope.getSoLanHien23 =  function(value){
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_23 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_23 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_23 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_23 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_23 = $scope.Tong5_23 + $scope.Tong10_23 + $scope.Tong15_23 + $scope.Tong20_23;
            
        }
        $scope.getSoLanHien24 =  function(value){
          
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_24 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_24 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_24 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_24 += 1;
                        }
                        
                    }
                }
            }
            $scope.Tong_24 = $scope.Tong5_24 + $scope.Tong10_24 + $scope.Tong15_24 + $scope.Tong20_24;
            
        }
        $scope.getSoLanHien25 =  function(value){

            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_25 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_25 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.sl15_25 = value;
                        $scope.Tong15_25 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_25 += 1;
                        }
                      
                    }
                }
            }
            $scope.Tong_25 = $scope.Tong5_25 + $scope.Tong10_25 + $scope.Tong15_25 + $scope.Tong20_25;
            
        }
        $scope.getSoLanHien26 =  function(value){
         
            
    
            if(value >= 5 && value < 10){
                
                $scope.Tong5_26 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_26 += 1;
                }
                else{
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_26 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_26 += 1;
                        }
        
                    }
                }
            }
            $scope.Tong_26 = $scope.Tong5_26 + $scope.Tong10_26 + $scope.Tong15_27 + $scope.Tong20_26;
            
        }
        $scope.getSoLanHien27 =  function(value){

            if(value >= 5 && value < 10){
                
                $scope.Tong5_27 +=1;
            }
            else{
                if(value >= 10 && value < 15){

                    $scope.Tong10_27 += 1;
                }
                else{
                    $scope.sl10_27 = 0;
                    if(value >= 15 && value < 20){
                
                        $scope.Tong15_27 += 1;
                    }
                    else{
                        if(value >= 20){
                
                            $scope.Tong20_27 += 1;
                        }
                  
                    }
                }
            }
            $scope.Tong_27 = $scope.Tong5_27 + $scope.Tong10_27 + $scope.Tong15_27 + $scope.Tong20_27;
            
        }

        $scope.xacnhan = function(tableId) {
            
            $exportHref = Excel.tableToExcel(tableId, 'sheet name');
            $timeout(function() { location.href = $exportHref; }, 100); // trigger download
            
        }
            
    });



