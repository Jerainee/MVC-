<link rel="stylesheet" href="{{asset('css/add.css')}}">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_data as $v_infos)
    <tr>
      <th scope="row">{{ $v_infos->id }}</th>
      <td>{{$v_infos->name}}</td>
      <td>{{$v_infos->address}}</td>
      <td>{{$v_infos->mobile}}</td>
      <td>{{$v_infos->status}}</td>
      <td>
      <a href="{{ URL::to('show-data/'.$v_infos->id.'/edit' ) }}">Edit</a>
      <a href="{{ URL::to('show-data/'.$v_infos->id.'/show' ) }}">View</a>
      <a href="{{ URL::to('delete-data/'.$v_infos->id ) }}">Delete</a> 
      </td>
    </tr>
   @endforeach
 
  </tbody>
</table>