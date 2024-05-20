 <!--Cards-->
 <section class="container cards d-flex flex-wrap mt-5">
        
    @foreach ($comics as $comic)
        <div class="card col-2 p-3">

            <div class="d-flex flex-column">
                <img src="{{ $comic['thumb'] }}" alt="comics" class="card-img-top">
                <h5 class="card-title ms">{{ $comic['title'] }}</h5>
            </div>
            
            
        </div>
    @endforeach
</section>