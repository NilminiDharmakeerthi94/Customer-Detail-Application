@section('content')
@if (count($results))
<div class="x_panel green white-text">Search Result : <b>{{$query}}</b></div>
    <div class="container">
		<div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Item</th>           
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                $no=1;
                @endphp 
                @foreach( $results as $result)
                    <tr>
                    <th scope="row">@php echo $no++ @endphp</th>
                    <td>{{$result->name}}</td>
                    <td>{{$result->contact}}</td>
                    <td>{{$result->item}}</td>
                   
                    <td>
                        <button class="btn btn-info"><a href="{{ route('customer.edit', $result )}}">edit</a></button>
                        <form action="{{ route('destroy',$result)}}" method='post'class=''>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                    <button class="btn btn-danger" type="submit">Delete</button>  
                    </form>
                    </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
                
		</div>
	</div>
	

</div>

{{ $results->render() }}
	
@else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> can't be deleted</div>
@endif
	

@endsection