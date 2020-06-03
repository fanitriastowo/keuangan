<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('include.head')

  <body>

    <div class="container">
      @include('include.navbar')

      <div class="content">

        @include('include.flash-message')

        <h3>Kategori</h3>
        <div class="table-responsive-sm">
          <table class="table table-striped table-condesed" id="brands-table">
            <thead>
              <th>#</th>
              <th>Kategori</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th colspan="3">Action</th>
            </thead>
            <tbody>
              @foreach ($list_kategori as $key => $kategori)
                <tr>
                  <td>{!! $key+1  !!}</td>
                  <td>{!! $kategori->kategori !!}</td>
                  <td>{!! $kategori->deskripsi !!}</td>
                  <td>{!! $kategori->nama !!}</td>
                  <td>
                    <form method="DELETE" action="{{ route('kategori.destroy',
                    $kategori->id) }}">
                    <div class='btn-group'>
                      <a href="{!! route('kategori.edit', [$kategori->id]) !!}"
                        class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                      <button type="submit" class="btn btn-ghost-danger"
                        onclick="return confirm('Anda yakin ingin menghapus');">
                        <i class="fa fa-trash"></i></button>
                    </div>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

      </div>
    </div>

  @include('include.footer')
  </body>
</html>
