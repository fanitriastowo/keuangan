<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('include.head')

  <body>

    <div class="container">
      @include('include.navbar')

      <div class="content">
        @include('include.flash-message')

        <h3>Edit Kategori</h3>

        <form method="POST" action="{{ route('kategori.update', $kategori->id) }}">

          {{ csrf_field() }}
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
              <option {{ ($kategori->kategori == 'Pemasukan') ? 'Selected' : '' }}>Pemasukan</option>
              <option {{ ($kategori->kategori == 'Pengeluaran') ? 'Selected' :
              '' }}>Pengeluaran</option>
            </select>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" id="nama" name="nama" value="{{
              $kategori->nama }}">
            @if ($errors->has('nama'))
              <span class="text-danger">{{ $errors->first('nama') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi"
                                           name="deskripsi">{{
                                           $kategori->deskripsi }}</textarea>
            @if ($errors->has('deskripsi'))
              <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
            @endif
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-info" text="Simpan">
          </div>

        </form>

      </div>
    </div>

  @include('include.footer')
  </body>
</html>
