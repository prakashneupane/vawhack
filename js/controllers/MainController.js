'use strict';

vawApp.controller('MainController',
  function MainController($scope, finalService) {
      $scope.test = "hello";
		finalService.start();
        $scope.result = finalService.asyncData;
  });
