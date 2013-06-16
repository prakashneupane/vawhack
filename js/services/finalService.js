'use strict';

vawApp.factory('finalService', function($http) {
  var myService = {};

  myService.start = function() {
      
    myService.asyncData = $http({ method: "GET", url: '/api/getall'
      }).then(function (response) {
        myService.data = response.data;
    
        return myService.data;
      }, function(response) {
        myService.error = 'Can\'t get data';
        myService.data = 'Error: ' + response.data;
        return myService.data;
      });
  };

  return myService;
 
});



