@include("includes.head")
<div class="bg-contact3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menü</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="hibajegy_lista">Hibajegyek <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="ugyfel_lista">Ügyfelek <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="logout">Kijelentkezés <span class="sr-only">(current)</span></a>
      </li>    
    </ul>
  </div>
</nav>
<div class="container">
<h3 class="text-center" style="margin: 50px 0;">Beküldött hibajegyek</h3>  
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Ügyfél neve</th>
            <th>Beküldés ideje</th>
            <th>Esedékesség</th>
            <th>Tárgy</th>
            <th>Leírás</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($hibajegyek as $hibajegy)
        <tr>
            <td>{{ $hibajegy->ugyfel }}</td>
            <td>{{ $hibajegy->letrehozva }}</td>
            <td>{{ $hibajegy->esedekesseg }}</td>
            <td>{{ $hibajegy->targy }}</td>
            <td>{{ $hibajegy->tartalom }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@include("includes.footer")

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>