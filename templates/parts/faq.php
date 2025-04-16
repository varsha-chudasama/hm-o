


<div class="container py-5 pb-md-4">
  <div class="row">
    <div class="col-lg-6">
      <div class="headingM">Title</div>
    </div>
    <div class="col-lg-6 text-right">
      <form>
          <div class="position-relative input--withIcon">
              <input type="text" id="faqSearch" placeholder="Search for your question…" class="input--default " />
              <svg class="input-icon text-primary" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <circle cx="10" cy="10" r="7" />
                  <line x1="21" y1="21" x2="15" y2="15" />
              </svg>
          </div>
      </form>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-lg-12">
      <div class="filters">
        <?php include_once('filters/filter-1.php'); ?>
      </div>
    </div>
  </div>
  <div class="row">
        <div class="col-lg-4">
            <a href="#" class="d-block block--card">
                <div class="h-100">
                    <img src="https://source.unsplash.com/random/400x400/?img=1" class="w-100 h-100 object-cover" alt="image">
                </div>
                <div class="">
                    <div class="bodyS pb-1 pt-3">
                      Category
                    </div>
                    <div class="headingS pb-2">
                      Heading
                    </div>
                    <a href="#" class="underline--link">
                      Read more
                    </a>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#" class="d-block block--card">
                <div class="h-100">
                    <img src="https://source.unsplash.com/random/400x400/?img=1" class="w-100 h-100 object-cover" alt="image">
                </div>
                <div class="">
                    <div class="bodyS pb-1 pt-3">
                      Category
                    </div>
                    <div class="headingS pb-2">
                      Heading
                    </div>
                    <a href="#" class="underline--link">
                      Read more
                    </a>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#" class="d-block block--card">
                <div class="h-100">
                    <img src="https://source.unsplash.com/random/400x400/?img=1" class="w-100 h-100 object-cover" alt="image">
                </div>
                <div class="">
                    <div class="bodyS pb-1 pt-3">
                      Category
                    </div>
                    <div class="headingS pb-2">
                      Heading
                    </div>
                    <a href="#" class="underline--link">
                      Read more
                    </a>
                </div>
            </a>
        </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="accordion faqs-container mt-5" id="accordionExample" data-offset="0">

        <div class="accordion--block accordion--trigger text-left box-shadow" data-index="280">

            <div class="accordion--row">
                <div class="accordion--title">
                    <div class=" d-block">Title</div>
                    <span class="icon "><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.svg"></span>
                </div>
            </div>

            <div class="accordion--text">
                <div class="sub--text">
                    <div class="row">
                        <div class="col-12 col-md-8 bodyM">
                            <h3>UV Light</h3>
                        </div>

                    </div>
                </div>
            </div>

        </div>

      </div>
    </div>
  </div>
</div>
