<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Create</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Create</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('Message-success'))
            <div class="alert alert-success">
                {{ session()->get('Message-success') }}
            </div>
        @elseif(session()->has('Message-error'))
            <div class="alert alert-danger">
                {{ session()->get('Message-error') }}
            </div>
        @endif
        <form action="<?php echo url('/blogs/store'); ?>" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="exampleInputTitle">Title</label>
                <input type="text" class="form-control" required id="exampleInputTitle" aria-describedby=""
                    name="title" placeholder="Enter Title" value="<?php echo old('title'); ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputContent">Content</label>
                <textarea class="form-control" required id="exampleInputContent" aria-describedby="contentHelp" name="content"
                    placeholder="Enter content"><?php echo old('content'); ?></textarea>
            </div>

            {{-- <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image" value="<?php echo old('image'); ?>">
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>
