@extends('layouts.layout')
@section('content')
    <section id="hero">
        <span>
            welcome to wonder-wise adventure
        </span>
    </section>

    <div class="container-fluid section-bg">
        <pre></pre>
        <div class="container">
                <div class="row">

                        <h3>2 days Ol Doinyo Lengai Climbing Tour </h3>
                        <p>
                            Ol Doinyo Lengai volcano is situated in one of the beautiful places of North Tanzania, near Lake Natron where hundreds of thousands of pink flamingos fly every year. Ol Doinyo Lengai is unique among active volcanoes in the East Africa and unique in the world which produces natrocarbonatite lava or “cold lava”. It has a dark-brown or black color in liquid state and a fluidity as water. This temperature is much lower than other lavas but, however, not so cool because it is approximately 510-600°C. In a hundred years Lengai has erupted about 15 times, the last time was in 2013. Fortunately, Ol Doinyo Lengai eruptions happen without victims because the volcano has relatively small size and it is situated rather far from nearest Maasai villages.
                        </p>


                </div>

        </div>
        <p></p>

        <div class="container">

            <div class="card-header bg-success text-center">
                <p><strong><span style="font-size: 18pt;">2 days Ol Doinyo Lengai Climbing Tour itenary
                        </span></strong></p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-white bg-secondary">
                            <h4 class="my-0 fw-normal">ARRIVAL DAY </h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">
                                Upon your arrival you will be picked up at the Kilimanjaro International Airport and
                                transferred to your arranged hotel in Moshi/Arusha town. You will meet your guide who will
                                brief you on your Safari tour. You will spend the rest of your time at your own leisure and
                                relaxation.

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 text-white bg-secondary">
                            <h4 class="my-0 fw-normal">DAY 1  ARUSHA - LAKE NATRON </h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">
                                Our driver will pick you up at your hotel in the morning and drive you to Lake Natron. The drive is fairly long and you will reach Lengai Safari Lodge some time after lunch. At the same time, the scenery on the way is picturesque and you will have an opportunity to see the local people, including Maasai tribesmen, as well as some African wildlife. After your check-in a guide will take you on a walking tour to Ngare Sero waterfall. The trail runs through a gorge and you will sometimes need to ford the stream, so we recommend that you wear sandals or the like to avoid constantly having to take your shoes off. A drive to the lakeshore, where you get a chance to capture its great scenery on camera takes place before you return to the Lodge for dinner and some rest.
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm ">
                        <div class="card-header py-3 text-white bg-secondary ">
                            <h4 class="my-0 fw-normal">DAY 2TREKKING TO OL DOINYO LENGAI VOLCANO - ARUSHA </h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">
                                At 1:00 a.m. driver  takes you to the foot of Ol Doinyo Lengai volcano for the start of your climb. The footing on the slopes of the volcano can be treacherous, especially in the dark, so follow your guide without overtaking him. The trek is strenuous and takes between 7 and 12 hours depending on your fitness and resultant pace. The gradient is steep, so it is best to make a short stop with every 100 m or so of altitude gained in order to get acclimatized.
                                It is best to make a break for breakfast on the way to the top in order to regain some strength for the remainder of your Ol Doinyo Lengai climb. At the edge of the crater you will have reached the altitude of 2,960 m. Here, you can actually hear the Ol Doinyo Lengai lava flow inside the crator of the "Mountain of God".
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
