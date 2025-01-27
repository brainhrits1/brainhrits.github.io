'use strict';

var app = angular.module('app.careers',[]);

app.directive('careers',function() {
  return {
    restrict: 'AE',
    templateUrl: 'careers/careers.html'
  };
});

app.directive('career1',function() {
  return {
    restrict: 'AE',
    templateUrl: 'careers/career1.html'
  };
});

app.directive('career2',function() {
  return {
    restrict: 'AE',
    templateUrl: 'careers/career2.html'
  };
});
