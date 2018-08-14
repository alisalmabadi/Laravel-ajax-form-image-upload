app.controller("sign-up-done", function ($scope) {
    // Submit Button
    $scope.submit = function () {
        $scope.$parent.request({});
    };
    // The End
});