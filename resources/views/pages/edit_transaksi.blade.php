<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('include.head')

  <body>

    <div class="container">
      @include('include.navbar')

      <div class="content">
        @include('include.flash-message')

        <h3>Edit Transaksi</h3>

        <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}">

          {{ csrf_field() }}
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori_id">
              @foreach ($kategoris as $kategori)
                <option {{ ($transaksi->kategori_id == $kategori->id) ? 'Selected' : '' }}
                  value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" id="nama" name="nama" value="{{
              $transaksi->nama }}">
            @if ($errors->has('nama'))
              <span class="text-danger">{{ $errors->first('nama') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi"
                                           name="deskripsi">{{
                                           $transaksi->deskripsi }}</textarea>
            @if ($errors->has('deskripsi'))
              <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="nominal">Nominal</label>
            <input class="form-control" id="nominal" name="nominal" value="{{
              $transaksi->nominal }}">
            @if ($errors->has('nominal'))
              <span class="text-danger">{{ $errors->first('nominal') }}</span>
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
