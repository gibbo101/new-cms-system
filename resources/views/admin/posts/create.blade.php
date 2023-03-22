<x-admin-master>
    @section('content')
        <h1>Create</h1>
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Title"></label>
                <input type="text"
                       name="title"
                       id="title"
                       class="form-control"
                       aria-describedby=""
                       placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="File"></label>
                <input type="file"
                       name="post_image"
                       id="post_image"
                       class="form-control-file">
            </div>
            <div class="form-group">
                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @endsection
</x-admin-master>
