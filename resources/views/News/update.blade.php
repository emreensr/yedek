<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="card">
    <div class="card-body" style="margin-left:50px;margin-right: 50px;margin-top:50px;">

        <form action="{{route('news_updatepost',$newsindex->id)}}"   method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori Seç</label>
                <select class="form-control"  name="category_id" id="exampleFormControlSelect1">
                    @foreach ($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Başlık</label>
                <input type="text" name="title" value="{{$newsindex->title}}" class="form-control" id="exampleFormControlInput1" placeholder="Başlık">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Fotoğraf</label>
                <input type="file" name="photo" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Yazar Seç</label>
                <select class="form-control" name="author_id" id="exampleFormControlSelect1">
                    @foreach ($author as $authors)
                        <option value="{{ $authors->id }}">{{ $authors->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Açıklama</label>
                <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3">{{$newsindex->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Durumu</label>
                <select class="form-control" value="{{$newsindex->status}}"  name="status" id="exampleFormControlSelect1">
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>


    </div>
</div>
