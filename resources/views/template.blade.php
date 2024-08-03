<!-- template.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{ asset('css/fonts.min.css') }}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kaiadmin.min.css') }}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
</head>
<body>
@include('partials.header')
@include('partials.sidebar')

<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-2">
            <div>
                <h3 class="fw-bold mb-2">Dashboard</h3>
                <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category"> TOTAL DEPENSES</p>
                                    <h4 class="card-title">1,294</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-user-check"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">TOTAL ENTREES</p>
                                    <h4 class="card-title">1303</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-luggage-cart"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">BALANCE</p>
                                    <h4 class="card-title">$ 1,345</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-round">
                    <div class="card-header">
                        <div class="card-head-row card-tools-still-right">
                            <div class="card-title">Transaction History</div>
                            <div class="card-tools">
                                <div class="dropdown">
                                    <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Payment Number</th>
                                    <th scope="col" class="text-end">Date &amp; Time</th>
                                    <th scope="col" class="text-end">Amount</th>
                                    <th scope="col" class="text-end">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        Payment from #10231
                                    </th>
                                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                    <td class="text-end">$250.00</td>
                                    <td class="text-end">
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        Payment from #10231
                                    </th>
                                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                    <td class="text-end">$250.00</td>
                                    <td class="text-end">
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        Payment from #10231
                                    </th>
                                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                    <td class="text-end">$250.00</td>
                                    <td class="text-end">
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                            <i class="fa fa-check"></i>
                                        </button>
                                        Payment from #10231
                                    </th>
                                    <td class="text-end">Mar 19, 2020, 2.45pm</td>
                                    <td class="text-end">$250.00</td>
                                    <td class="text-end">
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bouton de déconnexion -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 text-center">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Se déconnecter</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Core JS Files -->
<script src="{{ asset('js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ asset('js/plugin/jsvectormap/world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Kaiadmin JS -->
<script src="{{ asset('js/kaiadmin.min.js') }}"></script>

<script src="{{ asset('js/setting-demo.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>

</body>
</html>
