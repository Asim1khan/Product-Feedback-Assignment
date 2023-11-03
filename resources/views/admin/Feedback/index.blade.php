@extends('admin.admin_master')
@section('admin')
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">FeedbackItem <span
                                    class="badge badge-pill badge-danger">{{  count($feedbackitem) }}</span></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title </th>
                                            <th>Category </th>
                                            <th>Description</th>
                                            <th>Add By</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach ($feedbackitem as $data )


                                            <tr>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->category }}</td>
                                            <td width="30%">{{ $data->description }}</td>

                                           <td>{{ $data->user->name }}</td>
                                                <td width="30%">

                                                    <a href="{{ route('feedback.item.delete', Crypt::encrypt($data->id)) }}"
                                                        class="btn btn-danger btn-sm"  title="delete"><i
                                                            class="fa fa-trash"></i> </a>

                                                </td>
                                            </tr>
                                            @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
@endsection
