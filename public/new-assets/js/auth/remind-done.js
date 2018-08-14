app.controller("remind-done", function ($scope) {
    // Submit Button
    $scope.submit = function () {
        $scope.$parent.request({});
    };
    // The End
});