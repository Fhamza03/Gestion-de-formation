@extends('admin_dashboard')
@section('admin')


<div class="content">

<!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <form class="d-flex align-items-center mb-3">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control border-0" id="dash-daterange">
                            <span class="input-group-text bg-blue border-blue text-white">
                                <i class="mdi mdi-calendar-range"></i>
                            </span>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                            <i class="mdi mdi-autorenew"></i>
                        </a>
                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                            <i class="mdi mdi-filter-variant"></i>
                        </a>
                    </form>
                </div>
                <h4 class="page-title" style="color: black;">Dashboard</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
    
    
    <div class="row">
            <div class="col-md-3">
                @php
                    $date = date("d-m-Y");
                    $allEmployee = App\Models\Employee::count();
                @endphp
                <div class="card card-body text-white mb-3" style="background-color: black;">
                    <Label>Total Employees</Label>
                    <h4 class="text-light">{{$allEmployee}} Employees</h4>
                </div>
            </div>
            <div class="col-md-3">
                @php
                    $date = date("d-m-Y");
                    $allCustomer = App\Models\Customer::count();
                @endphp
                <div class="card card-body text-white mb-3" style="background-color: black;">
                    <Label>Total Customers</Label>
                    <h4 class="text-light">{{$allCustomer}} Customers</h4>
                </div>
            </div>
            <div class="col-md-3">
                @php
                    $date = date("d-m-Y");
                    $allSupplier = App\Models\Supplier::count();
                @endphp
                <div class="card card-body text-white mb-3" style="background-color: black;">
                    <Label>Total Suppliers</Label>
                    <h4 class="text-light">{{$allSupplier}} Suppliers</h4>
                </div>
            </div>
            <div class="col-md-3">
                @php
                    $date = date("d-m-Y");
                    $allFormation = App\Models\Product::count();
                @endphp
                <div class="card card-body  text-white mb-3" style="background-color: black;">
                    <Label>Total Formations</Label>
                    <h4 class="text-light">{{$allFormation}} Formations</h4>
                </div>
            </div>
    <!-- end row-->
<div class="container-fluid">
<div class="row">
                @php
                    $date = date("d-m-Y");
                    $expense = App\Models\Expense::where('date',$date)->sum('amount');
                @endphp
        <div class="col-md-4">
                <div class="card card-body text-white mb-3" style="background-color: #97732C;">
                    <h3 class="text-white"><i class="bi bi-currency-exchange"></i>
                    <Label>Today expense</Label></h2>
                    <h4 class="text-light">{{$expense}} $ </h3>
                </div>
        </div>
                @php
                    $month = date("F");
                    $expensemonth = App\Models\Expense::where('month',$month)->sum('amount');
                @endphp
        <div class="col-md-4">
                <div class="card card-body text-white mb-3" style="background-color: #97732C;">
                    <h3 class="text-white"><i class="bi bi-currency-exchange"></i>
                    <Label>Monthly expense</Label></h2>
                    <h4 class="text-light">{{$expensemonth}} $ </h4>
                </div>
        </div>
        <div class="col-md-4">
                @php
                    $year = date("Y");
                    $expenseyear = App\Models\Expense::where('year',$year)->sum('amount');
                @endphp
                <div class="card card-body  text-white mb-3" style="background-color: #97732C;">
                    <h3 class="text-white"><i class="bi bi-currency-exchange"></i>
                    <Label>Yearly expense</Label></h2>
                    <h4 class="text-light">{{$expenseyear}} $ </h4>
                </div>
        </div>
</div>  <!-- end row-->

        <div>
            <canvas id="myChart"></canvas>
        </div>

</div>          <!-- container -->

</div> <!-- container -->

</div> <!-- content -->

<script>
// Récupérez les données pour votre graphique depuis votre contrôleur ou votre modèle


var data = {
labels: {!! json_encode(array_column($data, 'label')) !!},
datasets: [{
    label: 'Total Formations',
    data: {!! json_encode(array_column($data, 'data')) !!},
    backgroundColor: 'gray',
    borderColor: 'black',
    borderWidth: 1
}]
};
// Configuration du graphique
var options = {
responsive: true,
maintainAspectRatio: false,
scales: {
y: {
    beginAtZero: true,
    ticks: {
        precision: 0
    }
}
},
plugins: {
legend: {
    display: false
}
}
};

// Création du graphique
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: data,
options: options
});

</script>
    @endsection