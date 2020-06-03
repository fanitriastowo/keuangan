<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  @include('include.head')

  <body>

    <div class="container">
      @include('include.navbar')

      <div class="content">

        <h3>Dashboard</h3>
        <p>Saldo Rp. {{ number_format($saldo, 0, ',', '.') }} <p>
        <p>Total Pemasukan Rp. {{ number_format($pemasukan, 0, ',', '.') }} <p>
        <p>Total Pengeluaran Rp. {{ number_format($pengeluaran, 0, ',', '.') }} <p>
      </div>
    </div>

  @include('include.footer')
  </body>
</html>
