



@extends('layouts.layout')

@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Welcome </h1>


        </div>
    </section>


    <div class="card section-bg ">

        <div class="card-body">

            <div class="row">

                <div class="col">
                    <div class="card">
                        <pre></pre>

                        <p class="text-center bg-dark">
                            3 Days zanzibar beach tour
                        </p>
                        <div class="accordion" id="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       3 DAY ZANZIBAR HOLIDAY
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h2>3 days zanzibar holiday $950</h2>
                                        <br>
                                        Kizimkazi Beach, Authenticity & Dolphin Safaris
                                        hermit crab in Kizimkazi beach in Zanzibar

                                        This small fishing village on the south coast of Zanzibar consists of two adjoining settlements: Kizimkazi
                                        Dimbani to the north and Kizimkazi Mkunguni to the south. The coastline here is very different from the
                                        classic palm-backed lagoon of the east coast. <br> <p></p>

                                        Here, a coral rag cliff elevates the waterfront above the ocean and the beaches take the form of small coves
                                        rather than broad expanses of sand. For this reason, there are fewer accommodation options and the area has
                                        a distinct and authentic atmosphere.

                                        The village of Kizimkazi is famous for its dolphin safaris. All the route swimming with dolphine will be
                                        lead by WonderWiseadventures However, if you’re visiting Kizimkazi please be mindful about joining boat
                                        trips which offer the opportunity to swim with dolphins. <br> <p></p>

                                        There are no regulations regarding dolphin tourism in Zanzibar and most tours are run by boat drivers with
                                        no experience or interest in animal behaviour. Often boats crowd around the dolphins and chase them, and
                                        tourists jump into the water to swim, with no monitoring of the dolphin’s behaviour. Instead, contact us to
                                        ask about how to swim with dolphins responsibly in Zanzibar during your holidays, if this is something you
                                        are keen to do. <br>
                                        <p></p>

                                        Where to stay around Kizimkazi Beach
                                        The Residence Zanzibar is a luxurious and family-friendly hotel on the southwest coast of Zanzibar, 20
                                        minutes’ drive from Kizimkazi, surrounded by 32 hectares of tropical gardens and fringed by a pristine
                                        mile-long beach.
                                        Unguja Lodge is a small beach lodge on the southern tip of Zanzibar, near Kizimkazi Mkunguni. This is a very
                                        quiet part of the island with small beaches and lush green surroundings. The lodge has an excellent
                                        relationship with the local people who live in Kizimkazi Mkunguni and most of the staff are from the
                                        village.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                </div>
                <div class="col">
                    <h4>INCLUDED IN THE PACKAGE</h4>
                    <ul>
                        <li>Transportation</li>
                        <li>Professional,English-speaking guide</li>
                        <li>Lunch and Mineral Waters</li>
                        <li>All government taxes</li>
                        <li>All required fees</li>
                    </ul>

                    <h4>EXCLUDED IN THE PACKAGE</h4>
                    <ul>
                        <li>International or Local flights</li>
                        <li>Visa fees</li>
                        <li>Tips</li>
                        <li>Alcoholic and soft drinks</li>
                        <li>Travel insurance</li>
                    </ul>


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

            </div>

        </div>
    </div>
@endsection
