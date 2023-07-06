<!DOCTYPE html>
<html lang="en">


<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <title>Sistem Legalisir Online</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/riwayat-ajuan.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>

<body>
  @include('alumni.includes.navbar')

  <div class="show">
    <label>Show</label><input type="number" min="10" max="25" name="jumlah" />
    <label class="search">Search</label><input type="text" name="jumlah" />
  </div>

  <table>
    <tr>
      <th>No</th>
      <th>Riwayat Ajuan</th>
      <th>Tanggal</th>
      <th>Status</th>
    </tr>

    @foreach ($ajuans as $ajuan)
    <tr>
      <td >{{ $ajuan->id }}</td>
      <td class="riwayat">{{ $ajuan->progress }}</td>
      <td class="tanggal">{{ $ajuan->updated_at }}</td>
      <td class="status">
        <div class="col1">
          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 0%;">
          <b>
            <p>Passed</p>
          </b>
        </div>
        
        <a href="/riwayat-invoice"><img class="eye-icon" src="{{ asset('images/view.png') }}" alt="View"></a>
      </td>
    </tr>
    @endforeach

    <tr>
      <td>2</td>
      <td class="riwayat">Legalisir berkas ijazah dan transkrip nilai</td>
      <td class="tanggal">12/03/2023</td>
      <td class="status">
        <div class="col1">
          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 0%;">
          <b>
            <p>Passed</p>
          </b>
        </div>
        
        <a href="/riwayat-invoice"><img class="eye-icon" src="{{ asset('images/view.png') }}" alt="View"></a>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td class="riwayat">Legalisir berkas ijazah dan transkrip nilai</td>
      <td class="tanggal">12/03/2023</td>
      <td class="status">
        <div class="col1">
          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 0%;">
          <b>
            <p>Passed</p>
          </b>
        </div>
        
        <a href="/riwayat-invoice"><img class="eye-icon" src="{{ asset('images/view.png') }}" alt="View"></a>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td class="riwayat">Legalisir berkas ijazah dan transkrip nilai</td>
      <td class="tanggal">12/03/2023</td>
      <td class="status">
        <div class="col1">
          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 0%;">
          <b>
            <p>Passed</p>
          </b>
        </div>
        
        <a href="/riwayat-invoice"><img class="eye-icon" src="{{ asset('images/view.png') }}" alt="View"></a>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td class="riwayat">Legalisir berkas ijazah dan transkrip nilai</td>
      <td class="tanggal">12/03/2023</td>
      <td class="status">
        <div class="col1">
          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 0%;">
          <b>
            <p>Passed</p>
          </b>
        </div>
        
        <a href="/riwayat-invoice"><img class="eye-icon" src="{{ asset('images/view.png') }}" alt="View"></a>
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td class="riwayat">Legalisir berkas ijazah dan transkrip nilai</td>
      <td class="tanggal">12/03/2023</td>
      <td class="status">
        <div class="col1">
          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 0%;">
          <b>
            <p>Passed</p>
          </b>
        </div>
        
        <a href="/riwayat-invoice"><img class="eye-icon" src="{{ asset('images/view.png') }}" alt="View"></a>
      </td>
    </tr>
    <tr>
      <td>7</td>
      <td class="riwayat">Legalisir berkas ijazah dan transkrip nilai</td>
      <td class="tanggal">12/03/2023</td>
      <td class="status">
        <div class="col1">
          <img src="{{ asset('images/icons/check.png') }}" alt="check" style="position: relative; top: 6px; left: 0%;">
          <b>
            <p>Passed</p>
          </b>
        </div>
        
        <a href="/riwayat-invoice"><img class="eye-icon" src="{{ asset('images/view.png') }}" alt="View"></a>
      </td>
    </tr>
  </table>

  @include('alumni.includes.footer')
</body>

</html>