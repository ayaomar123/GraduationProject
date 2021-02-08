@extends("layouts.tamkeen-home")

<!-- @section("title","الصفحة الرئيسية") -->

<!-- @section("homeActive","active") -->
@section("css")

<!-- Google fonts - Roboto-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">

<!-- theme stylesheet-->
<link rel="stylesheet" href="{{asset('universal-theme/css/style.default.css')}}" id="theme-stylesheet">
<style>
.fixed-top {
    position: inherit;
}
</style>
@endsection
@section("content")

<div id="all">
    <div id="content">
        <div id="contact" class="container">
            <section class="bar">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>We are here to help you</h2>
                        </div>
                        <p class="lead">Are you curious about something? Do you have some kind of problem with our
                            products? As am hastily invited settled at limited civilly fortune me. Really spring in
                            extent an by. Judge but built gay party world. Of so am he remember although required.
                            Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.</p>
                        <p class="text-sm">Please feel free to contact us, our customer service center is working for
                            you 24/7.</p>
                    </div>
                </div>
            </section>
            <section>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                            <h3 class="h4">Address</h3>
                            <p>13/25 New Avenue<br> New Heaven, 45Y 73J<br> England, <strong>Great Britain</strong></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-phone"></i></div>
                            <h3 class="h4">Call center</h3>
                            <p>This number is toll free if calling from Great Britain otherwise we advise you to use the
                                electronic form of communication.</p>
                            <p><strong>+33 555 444 333</strong></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-envelope"></i></div>
                            <h3 class="h4">Electronic support</h3>
                            <p>Please feel free to write an email to us or to use our electronic ticketing system.</p>
                            <ul class="list-unstyled text-sm">
                                <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                                <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bar pt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Contact form</h2>
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto">
                        <form enctype='multipart/form-data' method='post'>
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input id="firstname" name="firstname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input id="lastname" name="lastname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input id="subject" name="subject" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" name="message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-template-outlined"><i
                                            class="fa fa-envelope-o"></i> Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <!-- <div id="map"></div> -->
    </div>
    <!-- GET IT-->
    <!-- <div class="get-it">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 text-center p-3">
                <h3>Do you want cool website like this one?</h3>
              </div>
              <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
            </div>
          </div>
        </div> -->

</div>

@endsection