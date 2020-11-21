

<table class="table">
<thead class="thead-light">
<tr>
<th scope="col"> Name</th>
<th scope="col">Contact</th>
<th scope="col">Item</th>
<th scope="col">Action</th>
</tr>
</thread>
<tbody>
@foreach($customers as $customer)
<tr>
<td> {{$customer->name}} </td>
<td>{{$customer->contact}}   </td>
<td> {{$customer->item}} </td>
<td> 
<a href="{{url('/edit/'.$customer->id)}}" class="btn btn-sm btn-warning"> EDIT</a>


 <a>  
<form action="{{ route('destroy', $customer)}}" method='post'class=''>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                  <button class="btn btn-danger" type="submit" >Delete</button> 
                  </form>
    </a>            
 </td>
</tr>
@endforeach
</tbody>
</table>