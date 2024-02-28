<!DOCTYPE html>
<html lang="en">


<!-- advance-table.html  21 Nov 2019 03:55:20 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row mb-auto ">
                            <div class="col-12 col-md-6 col-lg-12">
                                <a class="h1 btn btn-primary " href="{{ url('/') }}">HOME</a>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>POST</h4>
                                        @if (Session::has('message'))
                                            <h3 style="color: green">{{ Session::get('message') }} </h3>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-md">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Text</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                @foreach ($posts as $post)
                                                    <tr>
                                                        <td>{{ $post->id }} </td>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->text }}</td>

                                                        <td><a href="{{ route('edit', $post->id) }}"
                                                                class="btn btn-primary">Edit</a></td>
                                                        <td><a href="{{route('delete',$post->id)}}" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                                @endforeach

                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <nav class="d-inline-block">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1"><i
                                                            class="fas fa-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1 <span
                                                            class="sr-only">(current)</span></a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i
                                                            class="fas fa-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <footer class="main-footer">
                            <div class="footer-left">
                                <a href="templateshub.net">Templateshub</a></a>
                            </div>
                            <div class="footer-right">
                            </div>
                        </footer>
                    </div>
            </div>
            <!-- General JS Scripts -->
            <script src="assets/js/app.min.js"></script>
            <!-- JS Libraies -->
            <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
            <!-- Page Specific JS File -->
            <script src="assets/js/page/advance-table.js"></script>
            <!-- Template JS File -->
            <script src="assets/js/scripts.js"></script>
            <!-- Custom JS File -->
            <script src="assets/js/custom.js"></script>
</body>


<!-- advance-table.html  21 Nov 2019 03:55:21 GMT -->

</html>
