@extends('layouts.layout')
@section('content')
    <section id="hero">
        <span>
            welcome to wonder-wise adventure
        </span>
    </section>

    <div class="container-fluid section-bg">
        <pre></pre>
        <pre></pre>
        <div class="container">


                <div class="row">


                        <h3>2 DAYS TANZANI WILDLIFE SAFARI</h3>
                        <p>
                            Short and sweet Tanzania safari tour will take you to the Ngorongoro Crater, featuring one of
                            the
                            highest concentrations of game in Africa. Here you will witness an amazing spectacle of African
                            wildlife
                            inside a self-contained world, teeming with animals. Your tour will also take you to Tarangire
                            National
                            park which is very famous for African elephants and be considered as home of elephants and
                            baobab trees.
                            When visiting Tarangire national park you have chance to witness different animals like zebra,
                            elephants, giraffe, lions, gazelles and many, also trees like baobab and accacia trees are
                            available.
                        </p>

                </div>

        </div>
        <p></p>

        <div class="container">

            <div class="card-header bg-success text-center">
                <p><strong><span style="font-size: 18pt;">2 DAYS TANZANIA WILDLIFE SAFARI ITINERARY
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
                            <h4 class="my-0 fw-normal">DAY 1 MOSHI/ARUSHA – TARANGIRE</h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">
                                After breakfast you will meet our professional tour guide/driver, who will deliver a short
                                safari briefing, after which we travel east to the Tarangire National Park. The park runs
                                along the line of the Tarangire River and is mainly made up of low-lying hills on the Great
                                Rift Valley floor. Its natural vegetation mainly consists of Acacia woodland and giant
                                African Baobab trees, with huge swamp areas in the south. Both the river and the swamps act
                                like a magnet for wild animals, during Tanzania’s dry season. The Tarangire National Park is
                                reputed to contain some of the largest elephant herds in Africa. We will enjoy a picnic
                                lunch inside the park and do two exciting morning and afternoon game drives, along the
                                Tarangire River. Late afternoon you will drive to Karatu for overnight.
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm ">
                        <div class="card-header py-3 text-white bg-secondary ">
                            <h4 class="my-0 fw-normal">DAY 2 NGORONGORO CRATER – ARUSHA/MOSHI</h4>
                        </div>
                        <div class="card-body text-dark">
                            <ul class="list-unstyled mt-3 mb-4">
                                After breakfast we descend 600m into this magnificent crater for a morning, half-day game
                                drive. The Ngorongoro Crater is one of the most densely crowded African wildlife areas in
                                the world and is home to an estimated 30,000 animals including some of Tanzania’s last
                                remaining black rhino. Supported by a year round water supply and fodder, the Ngorongoro
                                National Park supports a vast variety of animals, which include herds of wildebeest, zebra,
                                buffalo, eland, warthog, hippo, and giant African elephants. Another big draw card to this
                                picturesque national park is the dense population of predators, which include lions, hyenas,
                                jackals, cheetahs and the ever-elusive leopard, which sometimes requires a trained eye to
                                spot. We will enjoy a picnic lunch in the crater, after which we travel back to Arusha/Moshi
                                where we will end our African safari adventure. You will be taken to your hotel, which ends
                                our safari tour services.
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
