<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style>

        .table_deg
        {
            border:2px solid black;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg
        {
            background-color: gray;
            padding: 15px;
            color: white;
        }

        tr
        {
            border: 3px solid black;
        }

        td
        {
            padding: 10px;
        }
    </style>
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

                        <table class="table_deg">

                            <tr>
                                <th class="th_deg">Room Title</th>
                                <th class="th_deg">Description</th>
                                <th class="th_deg">Price</th>
                                <th class="th_deg">Wifi</th>
                                <th class="th_deg">Room Type</th>
                                <th class="th_deg">capacity_adults</th>
                                <th class="th_deg">capacity_children</th>
                                <th class="th_deg">Image</th>
                                <th class="th_deg">Delete</th>
                                <th class="th_deg">Update</th>
                            </tr>

                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->room_title}}</td>
                                <td>{!! Str::limit($data->description,100) !!}</td>
                                <td>{{$data->price}}</td>
                                <td>{{$data->wifi}}</td>
                                <td>{{$data->room_type}}</td>
                                <td>{{$data->capacity_adults}}</td>
                                <td>{{$data->capacity_children}}</td>
                                <td>
                                    <img width="60px" src="room/{{$data->image}}">
                                </td>

                                <td>
                                    <a onclick="return confirm('Are you sure to delete this ?')" class="btn btn-danger" href="{{url('room_delete',$data->id)}}">Delete</a>
                                </td>

                                <td>
                                    <a class="btn btn-warning" href="{{url('room_update',$data->id)}}">Update</a>
                                </td>
                            </tr>

                            @endforeach
                        </table>

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
