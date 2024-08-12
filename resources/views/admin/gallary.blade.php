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
            <div class="page-content">
                <div class="page-header">
                    <div class="container-fluid">

                        <center>

                        <h1 style="font-size: 40px; font-weight: bolder; color: black;">
                            Galary
                        </h1>
                        <div class="row">

                            @foreach($gallary as $gallary)
                                <div class="col-md-4">
                                    <img style="height: 200px!important; width: 300px!important;" src="/gallary/{{$gallary->image}}" alt="">
                                    <a class="btn btn-danger" href="{{url('delete_gallary',$gallary->id)}}">Delete image</a>
                                </div>

                            @endforeach

                        </div>

                        <form action="{{url('upload_gallary')}}" method="Post" enctype="multipart/form-data">

                            @csrf

                            <div style="padding: 30px">
                                <label style="color: black; font-weight: bold;">Upload Image</label>
                                <input type="file" name="image" required>
                                <input class="btn btn-primary" type="submit" value="Add Image">

                            </div>

                        </form>

                        </center>

                    </div>
                </div>
            </div>


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
