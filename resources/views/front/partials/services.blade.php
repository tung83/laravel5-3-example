<div class="row">
    @foreach($services as $service) 
        <div class="col-md-2">
                 {!! link_to('/', $service->title) !!}   
        </div>
    @endforeach
</div>