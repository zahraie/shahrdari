app.controller('reset', function ($scope) {
    // Contact Button
    $scope.submit = function () {
        var data = {
            password:              $scope.password,
            password_confirmation: $scope.password_confirmation
        };
        $scope.$parent.request(data);
    };
});