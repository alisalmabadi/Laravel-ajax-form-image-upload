app.controller('sign-in', function ($scope) {
    // Submit Button
    $scope.submit = function () {
        var data = {
            username: $scope.username,
            password: $scope.password
        };
        $scope.$parent.request(data);
    };
});