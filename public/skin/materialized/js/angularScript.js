(function(angular) {
  'use strict';
angular.module('app', ['ngSanitize'])
  .controller('bid', ['$scope', function($scope) {
    $scope.click = function()
    {
        $scope.message='test';
    };
  }]);
})(window.angular);