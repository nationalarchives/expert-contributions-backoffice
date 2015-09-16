var app = angular.module("ec", []);

app.controller("detailsCtrl", function ($scope) {
    $scope.data = {
        title : "GRANT-DALTON FAMILY: WILLS & MISC.ITEMS.",
        reference : "DD\BR\cr/27",
        description : "Probates of wills of Horace Grant-Dalton of Torquay (co.Devon) esq., 1893, cod.1894, pr.1899, and bank book of same, 1888-92, and of Alan Grant-Dalton of Arundel, Cape Province (S.Africa), 1916, pr.1918, with related papers.Proposals for, and epitome of, marriage settlement of Rev.Colin Grant-Dalton and Miss Amy Ellen Sowler, 1884. Life insurance policy on Seymour Grant-Dalton of Twis Kraal, Middleburg (S.Africa), 1896.",
        date : "1884-1918"
    };

    $scope.toggleEditable = function () {
        $scope.editable = !$scope.editable;
    }

})