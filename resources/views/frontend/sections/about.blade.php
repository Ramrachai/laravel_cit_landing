    <!--============== About Part Goes Here ================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-2">
                    <div class="about-text">
                        @foreach ($about as $info)
                        <h2>{{ $info->title }}</h2>
                        <p>{{ $info->description }}</p>
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-0 order-lg-1">
                    <div class="about-img">
                        <img src="images/{{ $info->image }}" alt="about"
                            class="img-fluid">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>