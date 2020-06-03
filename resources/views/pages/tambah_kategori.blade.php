<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('include.head')

  <body>

    <div class="container">
      @include('include.navbar')

      <div class="content">
        @include('include.flash-message')

        <h3>Tambah Kategori</h3>

        <form method="POST" action="{{ route('kategori.tambah') }}">

          {{ csrf_field() }}
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
              <option>Pemasukan</option>
              <option>Pengeluaran</option>
            </select>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" id="nama" name="nama">
            @if ($errors->has('nama'))
              <span class="text-danger">{{ $errors->first('nama') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi"
                                           name="deskripsi"></textarea>
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
