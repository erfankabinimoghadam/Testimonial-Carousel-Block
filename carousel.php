<section class="section">
    <div class="container">
        <div class="row">

            <div class="carousel-wrapper" style="background-color:#f2f2f2;">
                <div class="carousel-inner">
                    <!-- Section heading (handled by block control) -->
                    <div class="col-12 col-lg-4 mb-5 px-0">
                        <h2 class="carousel-heading">
                            <?php echo esc_html( $attributes['section-heading'] ); ?>
                        </h2>
                    </div>

                    <!-- Carousel content -->
                    <div class="col-12 px-0 flex-grow-1 d-flex align-items-center">
                        <!-- Previous arrow -->
                        <div class="col-2 d-none d-xl-flex pl-0 align-items-center justify-content-start">
                            <div class="carousel-arrow-left" style="cursor:pointer;"></div>
                        </div>

                        <!-- Slides container -->
                        <div class="col-12 col-xl-8 px-0 py-4 d-flex justify-content-start">
                            <div class="row py-4">
                                <?php foreach ( $attributes['slides'] as $index => $slide ): ?>
                                    <div class="carousel-slide<?php echo $index !== 0 ? ' d-none' : ''; ?>" id="slide-<?php echo esc_attr($index); ?>">
                                        <p class="slide-quote mb-5"><?php echo esc_html( $slide['quote'] ); ?></p>
                                        <p class="slide-title mb-0"><?php echo esc_html( $slide['title'] ); ?></p>
                                        <p class="slide-subtitle mb-0"><?php echo esc_html( $slide['subtitle'] ); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Next arrow -->
                        <div class="col-2 d-none d-xl-flex pr-0 align-items-center justify-content-end">
                            <div class="carousel-arrow-right" style="cursor:pointer;"></div>
                        </div>
                    </div>

                    <!-- Mobile arrows -->
                    <div class="row px-2 px-md-4 mx-1 mx-md-4 d-xl-none">
                        <div class="col-6 d-flex pl-0 justify-content-start">
                            <div class="carousel-arrow-left" style="cursor:pointer;"></div>
                        </div>
                        <div class="col-6 d-flex pr-0 justify-content-end">
                            <div class="carousel-arrow-right" style="cursor:pointer;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
