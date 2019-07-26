<div class="col-lg-3">

<h1 class="my-4">Apple Retail</h1>
<div class="list-group">
	@foreach($categories as $category)
  		<a href="category/{{$category->slug}}" class="list-group-item">{{ $category->name }}</a>
	@endforeach

</div>

</div>