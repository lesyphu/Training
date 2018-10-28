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
        <table>
            <tr>
                <th>Ten</th>
                <th>Email</th>
                <th>Gioi TInh</th>
            </tr>
    <!-- vd sai lenh if trong view -->
            @foreach($danhsachnhanvien as $item)  
            @if($item->gender == 0)
            <tr>
                <td>{{$item->ten}}</td>
                <td>{{$item->email}}</td>
                <td>Nam</td>
            </tr>
            @else
            <tr>
                <td>{{$item->ten}}</td>
                <td>{{$item->email}}</td>
                <td>Nu</td>
            </tr>
            @endif
            
           @endforeach
            </table>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>