<section class="ptb-50 gray-bg">
    <div class="container-fluid">
        <div class="row equal-height-row">
            <div class="col-md-4 consultancy-man equal-height-column">
                <img src="{{ Theme::url('img/corporate/consultancy-bg.png') }}" alt="">
            </div>
            <div class="col-md-8">
                <div class=" equal-height-column valign-wrapper">
                    <div class="valign-cell consultancy-wrapper">
                        <h2 class="text-bold">Do You need business consultancy?</h2>
                        <p>Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                        <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="input-field">
                                        <input type="text" name="name" class="validate" id="name">
                                        <label for="name">First Name*</label>
                                    </div>

                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">

                                    <div class="input-field">
                                        <input id="email" type="email" name="email" class="validate" >
                                        <label for="email" data-error="wrong" data-success="right">Email Address*</label>
                                    </div>

                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="input-field">
                                        <input type="text" name="phone" class="validate" id="phone">
                                        <label for="phone">Phone Number</label>
                                    </div>

                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">

                                    <div class="input-field">
                                        <input id="web" type="text" name="web" class="validate" >
                                        <label for="web" data-error="wrong" data-success="right">Your Website</label>
                                    </div>

                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->


                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                                <label for="message">Your Message</label>
                            </div>


                            <button type="submit" name="submit" class="waves-effect waves-light btn right mt-30">Send Message</button>
                        </form>
                    </div><!-- /.valign-cell -->
                </div><!-- /.valign-middle -->
            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>