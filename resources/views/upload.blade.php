<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload image</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div class="container">
    <h2>Image Upload Using Intervention</h2>
    @if(Session::has('msg'))
    <div class="alert alert-success">
    {{ Session::get('msg')}}
    </div>
    @endif
    <form action="{{ URL::to('uploadimage') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" name="title" id="">
    </div>
    <label for="">Image</label>
    <div class="form-group">
    <input type="file"  class="form-control" name="filename" id="imgInp">
    <img width="100px" id="blah" src="#" alt="your image" />
    </div>
    <div class="form-group">
    <label for="">Alt Text</label>
    <input type="text" class="form-control" name="alttext" id="">
    </div> 
    <div class="form-group">
    <button type="submit" class="btn btn-primary">upload</button>
    </div>
    </form>
    <hr>
    <div>
    @if($images)
    @foreach ($images as $i)
        <img  width="300px" src="{{ asset('images/'.$i->filename)}}" alt="">
    @endforeach
    @endif
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}
    $("#imgInp").change(function() {
        readURL(this);
    });
</script>

</body>
</html>