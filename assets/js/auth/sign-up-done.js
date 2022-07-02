app.controller("sign-up-done", function ($scope) {
    // Contact Button
    $scope.submit = function () {
        $scope.$parent.request({});
    };
    // The End
});