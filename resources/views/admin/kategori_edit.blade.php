<x-app-layout>
    <x-slot name="header">KATEGORİLER</x-slot>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-home"></i> Kategori Oluştur</a></div>

                <form  method="post" action="{{ route('kategoriler.update' , $kategori->id ) }}" >
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="kategori_adi">Kategori Adı</label>
                        <input type="text"  name="name"  value="{{ $kategori->name }}" class="form-control" id="kategori_adi"  >
                    </div> <br>

                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-8">

    </div>
</div>



</x-app-layout>
