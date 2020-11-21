<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}"
  
</head>

<body>
@include("navbar");
<div class="row header-container justify-content-center">
  <div class="header">
  <h1>Customer Detail</h1>
  </div>
  </div>
  @if($layout == 'index')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("customerlist")
</section>
<section class="col-md-5"></section>
</div>
</div>
@elseif($layout == 'create')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("customerlist")
</section>
<section class="col-md-5">
<div class="card md-3">



<section class="col-md-5">


<img src="https://www.thebalancecareers.com/thmb/mPd2v7BOUSnC2JzVMyDaxg0yjbA=/300x200/filters:no_upscale():max_bytes(150000):strip_icc():saturation(0.2):brightness(10):contrast(5):format(webp)/school-books-on-desk--education-concept-871454068-5b548900c9e77c005b04fc8c.jpg" class="card-img-top" alt="...">


 <div class="card-body">
<form action={{url('/store')}} method="post">
@csrf
<div class="form-group">
<lable>Name  </lable>
<input type="text" name="name">
</div>

<div class="form-group">
<lable>Contact  </lable>
<input type="numeric" name="contact">
</div>

<div class="form-group">
<lable>Item  </lable>
<input type="text" name="item">
</div>
<input type="submit" class="btn btn-info" value="save">
<input type="reset" class="btn btn-warning" value="Reset">
  
</form>
</div>
</div>
</section>
</div>
</div>


@elseif($layout == 'show')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("customerlist")
</section>
<section class="col-md-5"></section>
</div>
</div>
@elseif($layout == 'edit')
<div class="container-fluid mt-4">
<div class="row">
<section class="col-md-7">
@include("customerlist")
</section>
<section class="col-md-5">

<form action="{{url('/update/'.$customer->id)}}" method="post">
@csrf
<div class="form-group">
<label>Name</lable>
<input value= "{{$customer -> name}}" name="name" type="text" class="form-control">
</div>
<div class="form-group">
<label>Contact</label>
<input value= "{{ $customer -> contact}}" name="contact" type="text" class="form-control">
</div>
<div class="form-group">
<label>Item</lable>
<input value= "{{$customer-> item}}" name="item" type="text" class="form-control">
</div>

  <input type="submit" class="btn btn-info" value="update">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>
</div>

</section>
</div>
</div>
@endif

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>


</html>