<!-- ---------------------------------------------FOOTER---------------------------------- -->
        <footer class="gds-footer contrast" role="contentinfo">
            <div class="gds-footer__inner">
                <div class="gds-grid gds-grid--none ">
                    <div class="gds-cell gds-cell--spacer-m gds-cell--content">
                        <div class="gds-footer__legal-section">
                            <div class="gds-footer__branding">
                                <div class="gds-footer__logo-bi">
                                    <a class="gds-logo" href="#" target="_parent">
                                        <div class="gds-image gds-image--spacer-none">
                                            <picture> <img src="{{ asset('public/img/logo-footer.png') }}" alt="Boeringer Ingelheim" title="Boeringer Ingelheim" loading="lazy" class=" ls-is-cached lazyloaded"> </picture>
                                        </div> <span aria-hidden="true">Boeringer Ingelheim</span> </a>
                                </div>
                                <div class="gds-footer__legal-links gds-footer__align-center">
                                    <nav aria-label="Legal navigation" class="gds-menus">
                                        <ul class="gds-inline-menu gds-inline-menu-- gds-inline-menu--size-p gds-inline-menu--spacer-m">
                                            <li class="gds-inline-menu__item padding-right-20-px"> <a class="gds-link gds-link--link-intercept gds-link--menu" href="{{URL::to('/terms-of-use')}}" title="Terms of use" aria-label="Terms of use" tabindex="" target=""><span class="gds-link__label">Terms of Use</span></a> </li>
                                            <li class="gds-inline-menu__item padding-right-20-px"> <a class="gds-link gds-link--link-intercept gds-link--menu" href="#" title="Privacy notice" aria-label="Privacy notice" tabindex="" target=""><span class="gds-link__label"></span>Privacy Policy</a> </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="gds-footer__secondary-logo">
                                    <a class="gds-logo" href="https://www.lilly.com/" target="_blank" rel="noopener">
                                        <div class="gds-image gds-image--spacer-none">
                                            <!-- <picture> <img src="/images/secondary-logo-light.svg" alt="Lilly" loading="lazy" class=" ls-is-cached lazyloaded" style="object-position: 50% 50%"> </picture> -->
                                        </div> <span aria-hidden="true"></span> </a>
                                </div>
                            </div>
                            <div class="gds-footer__legal gds-footer__align-center">
                                <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"> © 2021 Boehringer Ingelheim (Canada) Ltd./Ltée. All rights reserved.
                                    <br> EMP-CA-101905 Last updated 04/21 </p>
                                <p class="gds-paragraph gds-paragraph--xs gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"> Accessibility </p>
                                <p class="gds-paragraph gds-paragraph--xs gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"> This website supports the dignity, independence, integration, and equal opportunity of people with disabilities and, as such,
                                    <br> will comply with accessibility standards set out in the Accessibility for Ontarians with Disabilities Act, 2005 (AODA). </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="gds-btn-wrapper">
                        <button id="gds-btn-to-right" class="gds-btn gds-btn--tertiary gds-btn--has-icon gds-btn--has-icon-left gds-btn--has-icon-tertiary gds-btn--only-icon gds-btn--has-icon-only gds-btn--back-to-top visible"><span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_arrow-up"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <g fill-rule="evenodd">
                                        <g>
                                            <g>
                                                <path
                                                    d="M8.46.107l.119.068.082.061.077.07 4.638 4.637c.407.408.407 1.069 0 1.476-.374.374-.96.405-1.37.093L11.9 6.42 9.043 3.563v11.394C9.043 15.533 8.576 16 8 16c-.532 0-.971-.398-1.035-.913l-.008-.13V3.563L4.1 6.419c-.373.374-.96.405-1.369.093l-.107-.093c-.373-.374-.404-.96-.093-1.369l.093-.107L7.262.306c.039-.04.08-.074.123-.105l.124-.079.106-.049.123-.04.083-.018c.119-.02.24-.02.357 0l.113.026.093.032.076.034z"
                                                    transform="translate(-16 -16) translate(16 16)"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span><span>Back to top</span></button>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('public/js/script.min.js') }}"></script>
    </body>
</html>