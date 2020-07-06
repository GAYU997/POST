app.controller('myController',['$scope',function($scope,$http)
{
    //alert("hai");
     function getResultPage(){
        $http({
            url : URL + '/api/index.php',
            methode : 'GET'
        }).then(function (res) {
            $scope.data = res.data.data;
        });
    }
    

}]);