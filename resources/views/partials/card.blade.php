@foreach($comics as $item)
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <img src="{{$item['thumb']}}" alt="{{$item['title']}}" class=" image-fluid w-100 ">
    <div class="">
        <h5 class="text-uppercase pt-2">{{$item['title']}}</h5>
    </div>
</div>
@endforeach