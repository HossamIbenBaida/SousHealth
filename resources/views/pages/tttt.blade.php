@extends('layouts.app')
@section('content')
    <script>
        $scope.selectedDist={};
        $scope.districts = [
            {id: 1, name: 'Dhaka'},
            {id: 2, name: 'Goplaganj'},
            {id: 3, name: 'Faridpur'}
        ];

        $scope.thanas = [
            {id: 1, name: 'Mirpur', dId: 1},
            {id: 2, name: 'Uttra', dId: 1},
            {id: 3, name: 'Shahabag', dId: 1},
            {id: 4, name: 'Kotalipara', dId: 2},
            {id: 5, name: 'Kashiani', dId: 2},
            {id: 6, name: 'Moksedpur', dId: 2},
            {id: 7, name: 'Vanga', dId: 3},
            {id: 8, name: 'faridpur', dId: 3}
        ];
        $scope.filterExpression = function(thana) {
            return (thana.dId === $scope.selectedDist.id );
        };


    </script>
    <div>
        <form class="form-horizontal">
            <div class="form-group">
                <div class="col-md-3"><label><i class="fa fa-question-circle fa-fw"></i> District List</label></div>
                <div class="col-md-4">
                    <select class="form-control" ng-model="selectedDist" ng-options="district.name for district in districts">
                        <option value="">Select</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3"><label><i class="fa fa-question-circle fa-fw"></i> Thana List</label></div>
                <div class="col-md-4">
                    <select class="form-control" ng-model="selectedThana" ng-options="thana.name for thana in thanas | filter: filterExpression">
                        <option value="">Select</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

@endsection