<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>Customer Details</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/create')}}">Add new customer <span class="sr-only">(current)</span></a>
      </li>
<!--
          <div class="form-group pull-right">
            <div class="input-group">
            <form action="{{ route('customer.search') }}" method="GET">
                <input type="text" class="form-control" name="q" style="width:250px">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-medium btn-primary pull-right">Search</button>
                </span>
            </form>
            </div>
        </div>
    --> 
    
    </ul>
  </div>
</nav>