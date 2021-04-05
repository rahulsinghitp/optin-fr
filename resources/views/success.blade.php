@include('layouts.header')
<!-- ---------------------------------------------BANNER---------------------------------- -->
<div id="request-banner" class="gds-hero gds-hero--spacer-xxl">
    <div class="gds-hero__full-background gds-hero__full-background--primary-dark">
        <div class="gds-hero__overlay gds-hero__overlay--primary-dark"></div>
        <div class="gds-grid gds-grid--none ">
            <div
                class="gds-cell gds-cell--l-three-quarters gds-cell--s-order-2 gds-cell--l-order-1 gds-cell--spacer-m gds-cell--content">
                <div class="gds-hero__content gds-hero__content--">
                    <div class="gds-hero__content-inner gds-hero__content-inner--has-product-image">
                        <h1
                            class="gds-heading gds-heading--align-left gds-heading--contrast gds-heading--l heading-success">
                            Your request has
                            been submitted
                        </h1>
                    </div>
                </div>
            </div>
            <div
                class="gds-cell gds-cell--l-quarter gds-cell--s-order-1 gds-cell--l-order-2 gds-cell--spacer-m gds-cell--content gds-right-10-px">
                <div class="gds-hero__background-image">
                    <div class="gds-image gds-image--spacer-none">
                        <picture>
                            <source media="(max-width: 991px)" srcset="img/homepage-banner-image.webp"
                                type="image/webp">
                            <source srcset="img/homepage-banner-image.jpg" type="image/jpg">
                            <img src="img/homepage-banner-image.jpg" alt="Conozca nuestra Red de Referencia"
                                loading="lazy" class=" ls-is-cached lazyloaded"
                                title="Conozca nuestra Red de Referencia">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------------------------------------------MAIN CONTENT---------------------------------- -->
<div class=" gds-grid gds-grid--spacer-massive ">
    <div class="gds-cell gds-cell--spacer-m">
        <div>
            <h4 class="gds-heading gds-heading--align-left gds-heading--s thank-text">
                Thank you for signing up for our mailing list.
            </h4>
        </div>
    </div>
</div>
<br>
<div class=" gds-grid gds-grid--spacer-massive">
    <div class="gds-cell gds-cell--spacer-m">
        <div class="gds-btn-wrapper">
            <button class="gds-btn gds-btn--primary"><span>DONE</span></button>
        </div>
    </div>
</div>
@include('layouts.footer')