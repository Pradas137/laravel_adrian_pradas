<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
    <form action="{{ url('newPost')}}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
      <div class="form-group">
          <label for="task-name" class="col-sm-3 control-label">Post</label>

          <div class="col-sm-6">
             <input type="text" name="text" placeholder="Escribe tu post">
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
              <button type="submit" class="btn btn-default">
                  <i class="fa fa-btn fa-plus"></i>Add Post
              </button>
          </div>
      </div>
  </form>
</body>
</html>