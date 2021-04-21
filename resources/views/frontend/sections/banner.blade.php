    <!--============== Banner Part Goes Here ================-->
    <section id="banner">
        <div class="slider-main">
            @foreach ($banners as $b)
                <div class="slider-item">
                    <img src="{{ asset('images/'.$b->image) }}" alt=""
                    class="w-100">
                </div>
            @endforeach
           
        </div>
    </section>