<x-app-layout>
    <x-slot name="header">KATEGORİLER</x-slot>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-home"></i> Kategori Oluştur</a></div>

                <form  method="post" action="{{ route('kategoriler.store') }}" >
                    @csrf
                    <div class="form-group">
                        <label for="kategori_adi">Kategori Adı</label>
                        <input type="text"  name="name" class="form-control" id="kategori_adi"  >
                    </div> <br>

                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="card-title"> </div>

                <table class="table  thead-dark">
                    <thead>
                    <th>Kategori Adı</th>
                    <th>Durum</th>
                    <th>İşlemler</th>
                    </thead>
                    <tbody>
                    @foreach($kategoriler as $kategori)
                        <tr>
                            <td>{{ $kategori->name }}</td>
                            <td>{{ $kategori->status}}</td>
                            <td><a href="{{route('kategoriler.destroy' , $kategori->id )}}" class="btn btn-sm btn-danger" title="Sil"> <i class="fa fa-trash"></i> </a>
                           <a href="{{route('kategoriler.edit' , $kategori->id )}}" class="btn btn-sm btn-success" title="Düzenle"> <i class="fa fa-pen"></i> </a> </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



</x-app-layout>
