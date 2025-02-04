@extends('layouts.client.app')
@section('tilte', 'contact')
@section('content')
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 mb-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" action="/contact" method="POST" data-sb-form-api-token="API_TOKEN">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text"
                                placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email"
                                placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel"
                                placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        {{-- <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div> --}}
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        {{-- <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div> --}}
                        <!-- Submit Button-->
                        <button class="btn btn-primary " id="" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-9">
                    @foreach ($contacts as $contact)
                        <div class="card p-1 m-1">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="user ">
                                    <p class="font-weight-bold text-primary mx-2">{{ $contact->name }}</p>
                                    <p>{{ $contact->message }}</p>
                                </div>
                            </div>
                            <div class="action d-flex justify-content-between mt-2 align-items-center">

                                <div class="reply p-1">
                                    <form action="/contact/{{ $contact->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger" type="submit">remove</button>
                                    </form>
                                    <a class="btn btn-sm btn-warning" href="/contact/{{ $contact->id }}/edit">edit</a>
                                </div>

                                <div class="icons align-items-center">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-check-circle-o check-icon"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
