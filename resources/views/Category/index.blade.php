<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<div class="card">
    <div class="card-body" style="margin-left:50px;margin-right: 50px;margin-top:50px;">
        <div style="float: right;">
            <a href="{{route('categories_add')}}" class="btn btn-sm btn-primary mb-2"><i class="fa fa-plus"></i> Kategori Ekle</a>
        </div>


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Adı</th>
                <th scope="col">Sıra</th>
                <th scope="col">İşlemler</th>


            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td> {{$category->name}}</td>
                    <td>  {{$category->number}}</td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')" href="{{route('categories_delete', $category->id)}}"><i class="fa fa-trash"></i></a>
                        <a class="btn btn-primary" href="{{route('categories_update',$category->id)}}"><i class="fa fa-pen"></i></a>

                    </td>


                </tr>
            @endforeach

            </tbody>
        </table>


    </div>
</div>
