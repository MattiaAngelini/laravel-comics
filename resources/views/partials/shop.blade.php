 <!--Shop-->
 <section class="shop">
        
    <ul class="container list-unstyled d-flex justify-content-between mt-5 p-4">
        @foreach ($linkshop as $link)
        <li class="d-flex align-items-center">
            <img src="{{ Vite::asset($link['image']) }}" alt="shop-logo">
            <h6 class="card-title p-2">{{ $link['title'] }}</h6>
        </li>
        @endforeach
    </ul>
  
</section>