// Make new application for auth
var app = angular.module('auth', []);
// Configure auth app
app.config([
    '$httpProvider', function ($httpProvider) {
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
        $httpProvider.defaults.headers.common['X-CSRF-TOKEN']     = $('meta[name="csrf-token"]').attr('content');
    }
]);
// Define required filters
app.filter('to_trusted', [
    '$sce', function ($sce) {
        return function (text) {
            return $sce.trustAsHtml(text);
        };
    }
]);
// Parent controller
app.controller("auth", function ($scope, $http) {
    // Init Bootstrap elements
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    // Loading
    $scope.loading = 0;
    // Alert
    $scope.alert_message = null;
    $scope.alert         = function (message) {
        if (message != undefined) {
            $scope.alert_message = message;
        }
        $('#alert').modal();
    };
    // AJAX request
    $scope.request = function (data) {
        $scope.loading++;
        $http.post($("meta[name='url']").attr("content"), data).then(
            function (response) {
                $scope.present(response.data);
                $scope.loading--;
            },
            function (response) {
                $scope.present(response.data);
                $scope.loading--;
            }
        );
    };
    // Handle AJAX response
    $scope.present = function (response) {
        var message    = '<ul>';
        var is_message = false;
        $.each(response, function (key, value) {
            if (key == 'redirect') {
                $scope.loading++;
                window.location = value;
            } else if (key == 'redirect_msg') {
                $scope.redirect = value;
            } else {
                is_message = true;
                message += '<li>' + value + '</li>';
            }
        });
        message += '</ul>';
        if (is_message) {
            $scope.alert(message);
        }
    };
    // Modal Close
    $scope.close = function () {
        if ($scope.redirect != undefined) {
            window.location = $scope.redirect;
        }
    };
    // The End
});