<?php include_once("header.php"); ?>

<section class="contact-page hero">
    <div class="container">
        <div class="row mt-10">
            <div class="col-lg-12">
                <article>
                    <h1 class="t-center">Start the conversation.</h1>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row">
                        <div class="col-md-6 t-left">
                            <label for="name" class="form-label">Name<span class="required">*</span></label>
                            <input type="text" class="form-control" id="name" aria-describedby="clientFullName">
                        </div>
                        <div class="col-md-6 t-left error-state">
                            <label for="email" class="form-label">Email address<span class="required">*</span></label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailAddress">
                            <span class="helper-text error">This field is required.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 t-left">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company" aria-describedby="companyName">
                        </div>
                        <div class="col-md-6 t-left">
                            <label for="website" class="form-label">Website address<span class="required">*</span></label>
                            <input type="text" class="form-control" id="website" aria-describedby="websiteAddress">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 t-left">
                            <label for="about" class="form-label">How did you hear about us?</label>
                            <textarea class="form-control" id="about" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 t-left">
                            <label for="help" class="form-label">What can we do for you?</label>
                            <textarea class="form-control" id="help" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 t-center submit-form">
                            <button type="submit" class="button primary-solid">Submit your message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-blocks">
                    <div class="block">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="description">
                            <h6>Mail us</h6>
                            <a href="mailto:hello@affiliatebee.io">hello@affiliatebee.io</a>
                        </div>
                    </div>
                    <div class="block">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="description">
                            <h6>Call us</h6>
                            <a href="tel:(415)00000000">(415) 0000 - 0000</a>
                        </div>
                    </div>
                    <div class="block">
                        <div class="icon">
                            <i class="fa-solid fa-map"></i>
                        </div>
                        <div class="description">
                            <h6>Address</h6>
                            <a href="" target="_blank">6391 Elgin Delaware 10299</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="success-toast">
    <p>Your message has been sent successfully!</p>
</div>

<?php include_once("footer.php"); ?>