<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 5px solid #dddddd;
  text-align: center;
  padding: 2px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Tabel Buku</h2>
<div class="card-header"><a href="{{route('exportbuku')}}" class="btn btn-success">Export</a></div>
<table>
  <tr>
    <th>id</th>
    <th>Judul</th>
    <th>Tahun Terbit</th>
  </tr>
 @foreach($buku as $item)
    <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->judul}}</td>
    <td>{{$item->tahun_terbit}}</td>
    <td></td>
    </tr>
  @endforeach
</table>

</body>
</html>