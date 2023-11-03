@extends('frontend.main_master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">{{ $feedback->title }}</div>

                <div class="card-body">
                    <p class="card-text ">Category: {{ $feedback->category }}</p>
                    <p class="card-text ">Vote Count: {{ $feedback->vote_count }}</p>
                    <p class="card-text">Submitted by: {{ $feedback->user->name }}</p>
                </div>
            </div>

            @auth
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#commentModal">
                Add Comment
            </button>
        @else
            <button type="button" class="btn btn-primary" onclick="redirectToLogin()">
                Add Comment
            </button>
            <script>
                function redirectToLogin() {
                    window.location.href = "{{ route('login') }}";
                }
            </script>
        @endauth

            <div class="card mt-4">
                <div class="card-header">Comments</div>

                <div class="card-body">
                    @foreach($feedback->comments as $comment)
                        <div class="card mb-2">
                            <div class="card-body">
                                <p class="card-text">User: {{ $comment->user->name }}</p>
                                <p class="card-text">Date: {{ $comment->created_at }}</p>
                                <p class="card-text">{{ $comment->content }}</p>
                            </div>
                        </div>
                    @endforeach

                    <!-- Add a form for adding new comments if needed -->
                </div>
            </div>
        </div>
    </div>
    <!-- model For Add coment-->
    <!-- Comment Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel">Add Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('comment.store') }}">
                    @csrf
                    <input type="hidden" name="feedback_id" value="{{ Crypt::encrypt($feedback->id) }}">
                    <div class="form-group">
                        <label for="commentContent">Comment:</label>
                        <textarea class="form-control" id="commentContent" name="content" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>


@endsection

<script>
    var simplemde = new SimpleMDE({ element: document.getElementById("commentContent") });
</script>

