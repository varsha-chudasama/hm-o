export class Parts {

    init() {
        this.vacancies();
        this.privacy();
    }

    vacancies() {
        $(document).ready(function () {
            $('.vacancies-content').each(function () {
                var $content = $(this);
                var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 120);
                var fullHeight = $content[0].scrollHeight;

                // Set initial max-height and overflow
                $content.css({
                    'max-height': defaultHeight + 'px',
                    'overflow': 'hidden'
                });

                // Check if content is larger than default height
                if (fullHeight > defaultHeight) {
                    $content.after('<div class="vacancies-btn rale-medium font16 leading26 text-decoration-underline text-0D2033 cursor-pointer">Read more</div>');
                }
            });

            // Read more/less button click event
            $(document).on('click', '.vacancies-btn', function () {
                var $button = $(this);
                var $content = $button.prev('.vacancies-content');
                var fullHeight = $content[0].scrollHeight;
                var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 120);

                // Close all other content before opening the clicked one
                $('.vacancies-content').not($content).each(function () {
                    $(this).removeClass('active').animate({
                        'max-height': defaultHeight + 'px'
                    }, 500);
                    $(this).next('.vacancies-btn').text('Read More');
                });

                // Toggle the clicked content
                if ($content.hasClass('active')) {
                    $content.removeClass('active').animate({
                        'max-height': defaultHeight + 'px'
                    }, 500);
                    $button.text('Read More');
                } else {
                    $content.addClass('active').animate({
                        'max-height': fullHeight + 'px'
                    }, 500);
                    $button.text('Read Less');
                }
            });

            // Window resize event
            $(window).resize(function () {
                $('.vacancies-content').each(function () {
                    var $content = $(this);
                    var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 120);

                    if (!$content.hasClass('active')) {
                        $content.css({
                            'max-height': defaultHeight + 'px'
                        });
                    }
                });
            });
        });

    }
    privacy() {
        $(document).ready(function () {
            $('.privacy-content').each(function () {
                var $content = $(this);
                var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 150);
                var fullHeight = $content[0].scrollHeight;

                // Set initial max-height and overflow
                $content.css({
                    'max-height': defaultHeight + 'px',
                    'overflow': 'hidden'
                });

                // Check if content is larger than default height
                if (fullHeight > defaultHeight) {
                    $content.after('<div class="privacy-btn rale-medium font16 leading26 text-decoration-underline text-F7F5F6 cursor-pointer dmb-30">Read more</div>');
                }
            });

            // Read more/less button click event
            $(document).on('click', '.privacy-btn', function () {
                var $button = $(this);
                var $content = $button.prev('.privacy-content');
                var fullHeight = $content[0].scrollHeight;
                var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 180);

                // Close all other content before opening the clicked one
                $('.privacy-content').not($content).each(function () {
                    $(this).removeClass('active').animate({
                        'max-height': defaultHeight + 'px'
                    }, 500);
                    $(this).next('.privacy-btn').text('Read More');
                });

                // Toggle the clicked content
                if ($content.hasClass('active')) {
                    $content.removeClass('active').animate({
                        'max-height': defaultHeight + 'px'
                    }, 500);
                    $button.text('Read More');
                } else {
                    $content.addClass('active').animate({
                        'max-height': fullHeight + 'px'
                    }, 500);
                    $button.text('Read Less');
                }
            });

            // Window resize event
            $(window).resize(function () {
                $('.privacy-content').each(function () {
                    var $content = $(this);
                    var defaultHeight = $(window).width() <= 393 ? 180 : $(window).width() <= 426 ? 150 : ($(window).width() <= 768 ? 80 : 120);

                    if (!$content.hasClass('active')) {
                        $content.css({
                            'max-height': defaultHeight + 'px'
                        });
                    }
                });
            });
        });

    }
}
