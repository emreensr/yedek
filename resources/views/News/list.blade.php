<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="card">
    <div class="card-body" style="margin-left:50px;margin-right: 50px;margin-top:50px;">
        <div style="float: right;">
            <a href="{{route('news')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Haber Ekle</a>
        </div>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Kategori</th>
                <th scope="col">Başlık</th>
                <th scope="col">Fotoğraf</th>
                <th scope="col">Yazar</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Durumu</th>
                <th scope="col">İşlemler</th>


            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td> {{$new->cat_id}}</td>
                    <td>  {{$new->title}}</td>
                    <td> @if($new->photo)
                            <a href="{{url('storage/images/'.$new->photo)}}" target="_blank" class="btn btn-sm btn-secondary">Görüntüle</a></td>
                    @endif
                    </td>
                    <td>  {{$new->author_id}}</td>
                    <td>  {{$new->description}}</td>
                    <td>  {{$new->status}}</td>

                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Silmek istediğinize emin misiniz?')" href="{{route('news_delete', $new->id)}}"><i class="fa fa-trash"></i></a>
                        <a class="btn btn-primary" href="{{route('news_update',$new->id)}}"><i class="fa fa-pen"></i></a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>



    </div>
</div>
