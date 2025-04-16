

<div class="container py-3 py-md-5 mt-lg-5">

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 col-xl-4 mb-5 mb-md-0">
                <h2 class="mb-4">Get in touch via <br class="d-none d-lg-block"> our form</h2>

                <div class="social-icon contact-icons">
                    <h3 class="mb-4">
                        <a href="tel:<?php the_field('phone_number', 'options'); ?>" class="d-flex align-items-center">
                            <i class="fas fa-phone"></i>
                            <span class="ml-2">
                              1-234-567-890
                            </span>
                        </a>
                    </h3>
                    <h3 class="mb-4">
                        <a href="mailto:<?php the_field('email', 'options'); ?>" class=" d-flex align-items-center">
                            <i class="fas fa-envelope"></i>
                            <span class="ml-2">
                              hello@thecurious.agency
                            </span>
                        </a>
                    </h3>
                    <h3 class="d-flex align-items-start">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="ml-2">
                          4A Belomnt.
                          Shrewsbury, SY1 1TE
                        </span>
                    </h3>

                    <a target="_blank" href="https://maps.google.com/maps?saddr=Current%20Location&daddr=<?php the_field('address', 'options'); ?>"
                       class="ps-4 ms-2 ms-md-3 text-decoration-underline">Get Directions</a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-7 col-xl-8">

                  <div class="row">
                    <div class="col-lg-6">
                      <label class="label--standard d-block" for="">Input Label</label>
                      <input type="text" class="form-control input--default" placeholder="...">
                    </div>
                    <div class="col-lg-6">
                      <label class="label--standard d-block" for="">Input Label</label>
                      <input type="text" class="form-control input--default" placeholder="...">
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-6">
                      <label class="label--standard d-block" for="">Input Label</label>
                      <input type="text" class="form-control input--default" placeholder="...">
                    </div>
                    <div class="col-lg-6">
                      <label class="label--standard d-block" for="">Input Label</label>
                      <input type="text" class="form-control input--default" placeholder="...">
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-12">
                      <label class="label--standard d-block" for="">Input Label</label>
                      <textarea type="text" class="form-control input--default" placeholder="...">...</textarea>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-12">
                      <button class="default--button">Submit</button>
                    </div>
                  </div>

            </div>
        </div>

    </div>
