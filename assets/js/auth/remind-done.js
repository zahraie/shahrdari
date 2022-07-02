app.controller("remind-done", function ($scope) {
    // Contact Button
    $scope.submit = function () {
        $scope.$parent.request({});
    };
    // The End
});