@extends('layouts.layout')
@section('content')
    <section id="hero"></section>
    <section id="services" class="services section-bg ">
        <div class="container">
            <div class="row ">
                <div>
                    <h4 class="text-center">FOUR DAYS TANZANIA STANDARD SAFARI</h4>

                    <p class="mb-0">
                        Safari using extremely luxurious tented camps or Lodge, usually located in a private wildlife
                        – Viewing area and comparable to a 5-star Hotel. Expect great food, excellent service, top – quality
                        guiding and gorgeous tents or rooms. Most luxury + properties charge around USD$ 900 to 19000 per
                        person per day!
                    </p>
                </div>
                <p></p>
                <div>
                    <h2>
                        Price includes:

                    </h2>
                    <ul>
                        <li>All Park entry fees – All Park Camping fees
                        </li>
                        <li>Pick up from the Airport
                        </li>
                        <li>
                            Transport 4×4 Toyota Land Cruiser with pop up roof with driver cum guide
                        </li>
                        <li>
                            Overnight at the Hotels/Lodge/Tented Camps/Campsites according to the program
                        </li>
                        <li>
                            Chef/Meals, bottle of drinking water 1.5 litter per
                            person per day during on safari
                        </li>
                        <li>
                            1night free Hotel accommodation on your arrival in Arusha with bed & breakfastTents/Sleeping
                            mats/Sleeping bags/Chairs/Table/Pillow.
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>
                        Price doesn’t includes:

                    </h2>
                    <ul>
                        <li>International flights & Domestic flight

                        </li>
                        <li>Fees for passport, visas, immunizations and insurance

                        </li>
                        <li>
                            Tips for staff such as driver guides/chef/porter
                        </li>
                        <li>
                            Expenses of personal nature
                        </li>

                    </ul>
                </div>


            </div>

            <div class="container">

                <div class="card-header bg-success text-center">
                    <p><strong><span style="font-size: 18pt;">2 DAYS TANZANIA WILDLIFE SAFARI ITINERARY
                            </span></strong></p>
                </div>

                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3 text-white bg-secondary">
                                <h4 class="my-0 fw-normal">Day 1:Arusha - Tarangire National Park</h4>
                            </div>
                            <div class="card-body text-dark">
                                <ul class="list-unstyled mt-3 mb-4">
                                    An appetising breakfast is followed by a scenic drive to the Serengeti National Park, travelling
                            through the Ngorongoro Crater. Stop for lunch atop a koppie (small hill) and gaze upon the
                            golden savanna that stretches as far as the eye can see. A leisurely game drive to continue
                            searching for amazing wildlife before spending the night in the Serengeti under the African
                            stars
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3 text-white bg-secondary">
                                <h4 class="my-0 fw-normal"> Day 2: Tarangire National Park - Serengeti National Park</h4>
                            </div>
                            <div class="card-body text-dark">
                                <ul class="list-unstyled mt-3 mb-4">
                                  Its natural vegetation mainly consists of Acacia woodland and giant
                                    African Baobab trees, with huge swamp areas in the south. Both the river and the swamps act
                                    like a magnet for wild animals, during dry season. The Tarangire  Park is
                                    reputed to contain some of the largest elephant herds in Africa. We will enjoy a picnic
                                    lunch inside the park and do two exciting morning and afternoon game drives, along the
                                    Tarangire River.
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm ">
                            <div class="card-header py-3 text-white bg-secondary ">
                                <h4 class="my-0 fw-normal"> Day 3: Serengeti National Park - Ngorongoro Crater
                                </h4>
                            </div>
                            <div class="card-body text-dark">
                                <ul class="list-unstyled mt-3 mb-4">
                                    Begin your day with an early morning game drive as the smells and sounds of the African bush
                                    surround you. Watch your guide track the spoor prints of a predator in hopes of coming across an
                                    exciting viewing. Later travel into the Ngorongoro Crater with its impressive walls that house a
                                    diverse array of wildlife, where you will set up camp for the evening.
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3 text-white bg-secondary">
                                <h4 class="my-0 fw-normal">  Day 4: Ngorongoro Crater - Arusha </h4>
                            </div>
                            <div class="card-body text-dark">
                                <ul class="list-unstyled mt-3 mb-4">
                                    An early morning drive is the best time to spot animals in the crater as your guide explains how
                                    it was formed millions of years ago by a volcano. A picnic lunch alongside a small lake as you
                                    watch the hippos and birds in the water. Every lake in the crater is an oasis and lends itself
                                    to spotting any number of animals including the famous big five and large flocks of flamingos.
                                    After an afternoon of game viewing, slowly make your way back to Arusha
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
    </section>
@endsection
