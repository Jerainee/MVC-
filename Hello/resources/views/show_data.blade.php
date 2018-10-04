<link rel="stylesheet" href="{{asset('css/add.css')}}">
<a href="{{ route('all-data') }}" class="btn btn-success"> Go to All Data </a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $single_con->id }}</th>
      <td>{{ $single_con->name    }}</td>
      <td>{{ $single_con->address }}</td>
      <td>{{ $single_con->mobile  }}</td>
      <td>{{ $single_con->status  }}</td>
     </tr>
  </tbody>
</table>