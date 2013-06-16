'use strict';

vawApp.controller('MainController',
  function MainController($scope, finalService, $http) {
      $scope.test = "hello";
		finalService.start();
        $scope.result = finalService.asyncData;

      
      $scope.submit = function() {
          console.log($scope.date);
          console.log($scope.district);
          console.log($scope.title);
          console.log($scope.name);
          console.log($scope.phone);
          console.log($scope.email);
          console.log($scope.story);
          
        var postData = {
          'date' : $scope.date,
          'district' : $scope.district,
          'password' : $scope.password,
          'title' : $scope.title,
          'name' : $scope.name,
          'phone' : $scope.phone,
          'email' : $scope.email,
          'story' : $scope.story
        };
        
        $http({ method: "POST", url: '/api/setdata', data: postData
      }).then(function (response) {
        
        console.log(response.data);

      }, function(response) {
        myService.error = 'Can\'t get data';
        myService.data = 'Error: ' + response.data;
        return myService.data;
      });
          
      }
      
      
       $http({ method: "GET", url: '/api/getreportnumber'
      }).then(function (response) {
        
        $scope.number = response.data;

      }, function(response) {
        myService.error = 'Can\'t get data';
        myService.data = 'Error: ' + response.data;
        return myService.data;
      });
          
            
       $http({ method: "GET", url: '/api/getdistrictnumber'
      }).then(function (response) {
        
        $scope.districtnum = response.data;

      }, function(response) {
        myService.error = 'Can\'t get data';
        myService.data = 'Error: ' + response.data;
        return myService.data;
      });
      

  });
