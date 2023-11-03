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
                            <h3 class="box-title">Comments <span
                                    class="badge badge-pill badge-danger">{{  count($comments) }}</span></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Commented By </th>
                                            <th>Feedback Item </th>
                                            <th>Contend</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach ($comments as $comment )


                                            <tr>
                                            <td>{{ $comment->user->name }}</td>
                                            <td>{{ $comment->FeedbackItem->title }}</td>
                                            <td width="30%">{{ $comment->content }}</td>

                                           <td>
                                                 @if ($comment->status=='active')
                                               <a href="{{ route('comments.inactive', Crypt::encrypt($comment->id)) }}">
                                            <span class="badge badge-pill badge-success">Active</span>
                                        </a>
                                                @else
                                                       <a href="{{ route('comments.active',Crypt::encrypt($comment->id)) }}">
                                                <span class="badge badge-pill badge-danger">In Active</span>
                                                       </a>
                                            @endif

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
