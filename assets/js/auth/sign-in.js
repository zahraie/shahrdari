app.controller('sign-in', function ($scope) {
    // Contact Button
    $scope.submit = function () {
        var data = {
            username: $scope.username,
            password: $scope.password
        };
        $scope.$parent.request(data);
    };
});