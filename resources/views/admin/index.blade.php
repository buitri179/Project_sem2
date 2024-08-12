<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('admin.topbar')
            <!-- End of Topbar -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
            @include('admin.footer')
        <!-- End of Footer -->

    </div>
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
@include('admin.js')
</body>

</html>
