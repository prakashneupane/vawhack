'use strict';

var vawApp = angular.module('vawApp', []);

vawApp.config(function($routeProvider) {
    $routeProvider.
        when('/', {
            controller: 'MainController',
            templateUrl: 'views/home.html'
        })
});

