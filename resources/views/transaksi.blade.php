<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('include.head')

  <body>

    <div class="container">
      @include('include.navbar')

      <div class="content">
        @include('include.flash-message')

        <h3>Transaksi bulan ini</h3>
        <p>Saldo Rp. {{ number_format($saldo, 0, ',', '.') }} <p>


        <div class="table-responsive-sm">
          <table class="table table-striped table-condesed" id="brands-table">
            <thead>
              <th>#</th>
              <th>Kategori</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Nominal</th>
              <th>Tgl Transaksi</th>
              <th colspan="3">Action</th>
            </thead>
            <tbody>
              @foreach ($list_transaksi as $key => $transaksi)
                <tr>
                  <td>{!! $key+1  !!}</td>
                  <td>{!! ($transaksi->kategori == null) ? 'kosong' :
                    $transaksi->kategori->nama !!}</td>
                  <td>{!! $transaksi->nama !!}</td>
                  <td>{!! $transaksi->deskripsi !!}</td>
                  <td>{!! $transaksi->created_at !!}</td>
                  <td>Rp {{ number_format($transaksi->nominal, 0, ',', '.') }}</td>
                  <td>
                    <form method="DELETE" action="
                      {{ route('transaksi.destroy', $transaksi->id) }}">
                    <div class='btn-group'>
                      <a href="{!! route('transaksi.edit', [$transaksi->id]) !!}"
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
  <script type="text/javascript">
    $(function () {
      $('#datetimepicker1').datetimepicker();
    });
  </script>
  </body>
</html>
