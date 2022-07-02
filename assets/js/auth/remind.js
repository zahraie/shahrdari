app.controller('remind', function ($scope) {
    // Contact Button
    $scope.submit = function () {
        var data = {
            username_email: $scope.username_email
        };
        $scope.$parent.request(data);
    };
});