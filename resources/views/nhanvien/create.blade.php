<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="col-xs-8 col-xs-offset-2" style="">
        <!-- action trong form tao moi sua do
        chi can goi. route('name cua route la duoc r') -->
    <form class="form-horizontal form-row-seperated " action="{{route('nhanvien.create')}}" method="Post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="exampleInputEmail">Ten</label>
        <input type="text" class="form-control" placeholder="ten" name="ten">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="text" class="form-control" placeholder="email" name="email">

    </div>
    <div class="form-group">
    <label for="gender">Gender</label>
    <select name="gioitinh" id="" class="form-control">
        <option value="0">nam</option>
        <option value="1">nu</option>
    </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    
    </form>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>