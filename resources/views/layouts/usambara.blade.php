@extends('layouts.layout')
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Welcome to 3 Days Usambara Mountain Hikking</h1>


        </div>
    </section>


    <div class="usambara section-bg">
        <pre></pre>
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="img/usambara.webp" class="img-fluid mb-5" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>USAMBARA MOUNTAIN</h3>
                    <p>
                        The Usambara Mountains of Tanzania are Located within the Eastern Arc Mountains,
                        they are often described as one of the most gorgeous and diverse mountain ranges in Africa.
                        The range is made up of three distinct bluestone massifs and is home to a variety of unique
                        flora and fauna.
                        The area has been inhabited by humans since the Stone Age and is one of the few places in
                        Tanzania that still
                        has a population of indigenous people, including the Sambaa, Pare, and Chagga peoples.
                        There are also several small villages and towns located within the Usambara Mountains,
                        which offer a variety of activities and tourist attractions. In addition to the stunning
                        views and fascinating wildlife, visitors can also explore the many caves and waterfalls that are
                        found within the range.
                        Whether you’re looking for an adventure or just want to relax, the Usambara Mountains provide
                        the perfect escape
                        from the bustle of city life.
                    </p>
                </div>

            </div>

        </div>
        <pre></pre>
        <pre></pre>
        <div class="container">
            <p align="left"><strong><span style="font-size: 18pt;">3 DAYS USAMBARA MOUNTAIN HIKKING
                ITINERARY $1000</span></strong></p>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-white bg-secondary">
                            <h4 class="my-0 fw-normal">DAY 1</h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">
                                We’ll pick you up at your accommodation and drive you to the airport for your domestic
                                flight to Tanga.
                                Upon your arrival, we’ll drive you to the Usambara Mountains via the town of Lushoto. You
                                can relax in your air-conditioned
                                minivan while enjoying the landscapes of the surrounding highlands.
                                When we arrive at Mambo View Point Eco Lodge, you’ll check in and have lunch. Then we’ll
                                hike to the remote Mambo village and
                                a viewpoint on the mountaintop.
                                We’ll end the day with sunset yoga at the viewpoint of the lodge.

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-white bg-secondary">
                            <h4 class="my-0 fw-normal">DAY 2</h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">
                                In the morning we’ll enjoy  view of Usambara Mountains in the background.
                                After breakfast,
                                we’ll set out for this day’s hike to the Magamba Rainforest.
                                As we explore the forest, we’ll learn about the amazing biodiversity of Usambara. The hike
                                starts right from Lushoto,
                                leading through native villages, stunning landscapes, and farming areas up to the Magamba
                                Rainforest.
                                We’ll also visit the Mkuzu Waterfalls, a small romantic recluse within the forest.
                                After lunch, we’ll walk to the Mambo Caves. We will end the day with another session of
                                sunset yoga at Irente viewpoint.
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm ">
                        <div class="card-header py-3 text-white bg-secondary ">
                            <h4 class="my-0 fw-normal">DAY 3</h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">

                                After breakfast, we’ll visit Lushoto city center and start driving back to Tanga airport for
                                your afternoon departure.
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<hr>
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title text-center">

            <p>Book this tour</p>
        </div>

        <form action="" method="post" role="form" class="php-email-form"
            data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="phone" id="phone"
                        placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="text" name="date" class="form-control" id="date" placeholder="Date"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="kids"  placeholder="# kids"
                        data-rule="minlen:1" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="adults" id="adults"
                        placeholder="# adults" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to
                    confirm your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
        </form>

    </div>
</section>



    </div>
@endsection
