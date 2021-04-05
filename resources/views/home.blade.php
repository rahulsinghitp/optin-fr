@include('layouts.header')
<!-- ---------------------------------------------BANNER---------------------------------- -->
<div id="banner" class="gds-hero gds-hero--spacer-l">
    <div class="gds-hero__full-background gds-hero__full-background--primary-dark">
        <div class="gds-hero__overlay gds-hero__overlay--primary-dark"></div>
        <div class="gds-grid gds-grid--none ">
            <div class="gds-cell gds-cell--l-three-quarters gds-cell--s-order-2 gds-cell--l-order-1 gds-cell--spacer-m gds-cell--content">
                <div class="gds-hero__content gds-hero__content--">
                    <div class="gds-hero__content-inner gds-hero__content-inner--has-product-image">
                        <h1 class="gds-heading gds-heading--align-left gds-heading--contrast gds-heading--l">
                            Stay up to date by signing up
                            for our mailing list
                        </h1>
                        <p class="gds-paragraph gds-paragraph--l gds-paragraph--align-left gds-paragraph--contrast gds-paragraph--spacer-l">
                            Please complete the following request form to receive email communications from
                            Boehringer Ingelheim containing the latest information about our products, medicines and
                            services.</p>
                        <p class="gds-paragraph gds-paragraph--l gds-paragraph--align-left gds-paragraph--contrast gds-paragraph--spacer-l">
                            We will use your full name and professional details, including your office address, to
                            help validate you against our records. </p>
                    </div>
                </div>
            </div>
            <div class="gds-cell gds-cell--l-quarter gds-cell--s-order-1 gds-cell--l-order-2 gds-cell--spacer-m gds-cell--content gds-right-10-px">
                <div class="gds-hero__background-image">
                    <div class="gds-image gds-image--spacer-none">
                        <picture>
                            <source media="(max-width: 991px)" srcset="img/homepage-banner-image.webp" type="image/webp">
                            <source srcset="img/homepage-banner-image.jpg"  width="576" height="328" type="image/jpg"> <img src="img/homepage-banner-image.jpg" alt="Stay up to date by signing up for our mailing list" loading="lazy" class=" ls-is-cached lazyloaded" title="Stay up to date by signing up for our mailing list"> 
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------------------------------------------MAIN CONTENT---------------------------------- -->
<form role="form" method="POST" id="contactForm" action="sendmail" >
    {{ csrf_field() }}
    <div id="form-comp" class=" gds-grid gds-grid--spacer-massive ">
        <div style="padding: 20px 20px 0px; width: 100%;">
            <h4 class="gds-heading gds-heading--align-left gds-heading--s">
                Your information
            </h4>
            <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s required-margin-bottom-43p"> * Required. </p>
            <div class="gds-notification gds-notification--error display-none">
				<div class="gds-notification__icon-container gds-notification__icon-container--error"><span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_close-thick"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
							<path d="M11.758.242c.296.297.32.762.074 1.086l-.074.085L7.17 6l4.588 4.587c.323.323.323.847 0 1.17-.297.297-.762.322-1.086.075l-.085-.074L6 7.17l-4.587 4.588c-.323.323-.847.323-1.17 0-.297-.297-.322-.762-.075-1.086l.074-.085L4.83 6 .242 1.413C-.08 1.09-.08.566.242.243.54-.055 1.004-.08 1.328.167l.085.074L6 4.83 10.587.242c.323-.323.847-.323 1.17 0z">
							</path>
						</svg></span></div>
				<div class="gds-notification__content gds-notification__content--undefined">
					<h5 class="gds-heading gds-heading--align-left gds-heading--xs">
						&nbsp; &nbsp;Something went wrong
					</h5>
					<div>
						<p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph--spacer-none"> &nbsp; &nbsp;Please ensure all required fields are populated.</p>
					</div>
				</div>
			</div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="salutation--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--select" id="salutation--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="salutation--label-wrapper">
                            <label class="gds-form-input__label" for="salutation-select" id="salutation-label"><span>Salutation</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--select" id="salutation--input-wrapper">
                            <select class="{{ $errors->has('salutation') ? 'gds-form-input__input--is-error error-salutation' : '' }} gds-form-input__input gds-form-input__input--select gds-form-input__input--has-icon" id="salutation" name="salutation" placeholder="Placeholder text" value="">
                                <option value="" disabled="" selected="" hidden="">Select</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                            <div class="gds-form-input__icon-container gds-form-input__icon-container--chevron">
                                <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_chevron-down">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M1.793 5.5c.36-.36.928-.388 1.32-.083l.094.083L10 12.292 16.793 5.5c.36-.36.928-.388 1.32-.083l.094.083c.36.36.388.928.083 1.32l-.083.094-7.146 7.146c-.281.282-.663.44-1.061.44-.348 0-.684-.121-.95-.34l-.11-.1-7.147-7.146c-.39-.39-.39-1.023 0-1.414z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="first-name--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="first-name--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="first-name--label-wrapper">
                            <label class="gds-form-input__label" for="first-name" id="first-name-label">
                                <span>First Name*</span><span class="helperText"></span>
                            </label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="first-name--input-wrapper">
                            <input type="text" class="{{ $errors->has('first_name') ? 'gds-form-input__input--is-error error-first-name' : '' }} gds-form-input__input gds-form-input__input--text" id="first-name" name="first_name" placeholder="Placeholder text" value=" ">
                        </div>
                    </div>
                    @if ($errors->has('first_name'))
                        <div class="gds-form-input__validation-message gds-form-input__validation-message--is-error gds-form-input__validation-message-- gds-form-input__validation-message--"> <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_alert"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8,3.55271368e-15 C8.66838454,3.55271368e-15 9.27858595,0.380108006 9.57332663,0.980148018 L9.57332663,0.980148018 L15.8395499,13.7454366 C16.0779718,14.2304492 16.049147,14.8041761 15.7633131,15.2628495 C15.4774793,15.7215227 14.9751312,16.0001615 14.4350551,15.9998036 L14.4350551,15.9998036 L1.56533799,15.9998036 C1.02489185,16.0001615 0.522543714,15.7215227 0.236709916,15.2628495 C-0.0491239591,14.8041761 -0.0779487219,14.2304492 0.160334633,13.7457186 L0.160334633,13.7457186 L6.42676023,0.980018094 C6.72143576,0.380110758 7.33163545,3.55271368e-15 8,3.55271368e-15 Z M8.00000405,1.11627632 C7.75729245,1.11627632 7.53569998,1.25431257 7.42875311,1.47203748 L7.42875311,1.47203748 L1.16225277,14.2378901 C1.09397019,14.3767947 1.10222542,14.5411066 1.18408651,14.6724679 C1.26594761,14.8038292 1.40981722,14.8835272 1.56496797,14.8835272 L1.56496797,14.8835272 L14.4354251,14.8835272 C14.5902058,14.8835272 14.7340755,14.8038292 14.8159366,14.6724679 C14.8977976,14.5411066 14.9060529,14.3767947 14.8376318,14.2376081 L14.8376318,14.2376081 L8.57133375,1.4721674 C8.46432259,1.25431158 8.2427295,1.11627632 8.00000405,1.11627632 Z M8,11.8734029 L8.10871283,11.8801555 C8.53604617,11.9336345 8.86666667,12.2982418 8.86666667,12.7400696 C8.86666667,13.2187164 8.47864678,13.6067362 8,13.6067362 C7.52135322,13.6067362 7.13333333,13.2187164 7.13333333,12.7400696 C7.13333333,12.2982418 7.46395383,11.9336345 7.89128717,11.8801555 L8,11.8734029 Z M8,4.40673624 C8.29823376,4.40673624 8.54564675,4.62432586 8.59214701,4.90941313 L8.6,5.00673624 L8.6,9.50636838 C8.6,9.83773923 8.33137085,10.1063684 8,10.1063684 C7.70176624,10.1063684 7.45435325,9.88877877 7.40785299,9.6036915 L7.4,9.50636838 L7.4,5.00673624 C7.4,4.67536539 7.66862915,4.40673624 8,4.40673624 Z">
                                    </path>
                                </svg></span>
                            <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m">&nbsp; &nbsp;Enter your First Name </p>
                        </div>
                    @endif
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="last-name--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="last-name--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="last-name--label-wrapper">
                            <label class="gds-form-input__label" for="last-name" id="last-name-label">
                                <span>Last Name*</span><span class="helperText"></span>
                            </label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="last-name--input-wrapper">
                            <input type="text" class="{{ $errors->has('last_name') ? 'gds-form-input__input--is-error error-last-name' : '' }} gds-form-input__input gds-form-input__input--text" id="last-name" name="last_name" placeholder="Placeholder text" value=" ">
                        </div>
                    </div>
                    @if ($errors->has('last_name'))
                        <div class="gds-form-input__validation-message gds-form-input__validation-message--is-error gds-form-input__validation-message-- gds-form-input__validation-message--"> <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_alert"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8,3.55271368e-15 C8.66838454,3.55271368e-15 9.27858595,0.380108006 9.57332663,0.980148018 L9.57332663,0.980148018 L15.8395499,13.7454366 C16.0779718,14.2304492 16.049147,14.8041761 15.7633131,15.2628495 C15.4774793,15.7215227 14.9751312,16.0001615 14.4350551,15.9998036 L14.4350551,15.9998036 L1.56533799,15.9998036 C1.02489185,16.0001615 0.522543714,15.7215227 0.236709916,15.2628495 C-0.0491239591,14.8041761 -0.0779487219,14.2304492 0.160334633,13.7457186 L0.160334633,13.7457186 L6.42676023,0.980018094 C6.72143576,0.380110758 7.33163545,3.55271368e-15 8,3.55271368e-15 Z M8.00000405,1.11627632 C7.75729245,1.11627632 7.53569998,1.25431257 7.42875311,1.47203748 L7.42875311,1.47203748 L1.16225277,14.2378901 C1.09397019,14.3767947 1.10222542,14.5411066 1.18408651,14.6724679 C1.26594761,14.8038292 1.40981722,14.8835272 1.56496797,14.8835272 L1.56496797,14.8835272 L14.4354251,14.8835272 C14.5902058,14.8835272 14.7340755,14.8038292 14.8159366,14.6724679 C14.8977976,14.5411066 14.9060529,14.3767947 14.8376318,14.2376081 L14.8376318,14.2376081 L8.57133375,1.4721674 C8.46432259,1.25431158 8.2427295,1.11627632 8.00000405,1.11627632 Z M8,11.8734029 L8.10871283,11.8801555 C8.53604617,11.9336345 8.86666667,12.2982418 8.86666667,12.7400696 C8.86666667,13.2187164 8.47864678,13.6067362 8,13.6067362 C7.52135322,13.6067362 7.13333333,13.2187164 7.13333333,12.7400696 C7.13333333,12.2982418 7.46395383,11.9336345 7.89128717,11.8801555 L8,11.8734029 Z M8,4.40673624 C8.29823376,4.40673624 8.54564675,4.62432586 8.59214701,4.90941313 L8.6,5.00673624 L8.6,9.50636838 C8.6,9.83773923 8.33137085,10.1063684 8,10.1063684 C7.70176624,10.1063684 7.45435325,9.88877877 7.40785299,9.6036915 L7.4,9.50636838 L7.4,5.00673624 C7.4,4.67536539 7.66862915,4.40673624 8,4.40673624 Z">
                                    </path>
                                </svg></span>
                            <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m">&nbsp; &nbsp;Enter your Last Name </p>
                        </div>
                    @endif
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="office-address-1--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="office-address-1--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="office-address-1--label-wrapper">
                            <label class="gds-form-input__label" for="office-address-1" id="office-address-1-label">
                                <span>Office address 1*</span><span class="helperText"></span>
                            </label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="office-address-1--input-wrapper">
                            <input type="text" class="{{ $errors->has('office_address_1') ? 'gds-form-input__input--is-error error-office-address-1' : '' }} gds-form-input__input gds-form-input__input--text" id="office-address-1" name="office_address_1" placeholder="Placeholder text" value=" ">
                        </div>
                    </div>
                    @if ($errors->has('office_address_1'))
                        <div class="gds-form-input__validation-message gds-form-input__validation-message--is-error gds-form-input__validation-message-- gds-form-input__validation-message--"> <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_alert"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8,3.55271368e-15 C8.66838454,3.55271368e-15 9.27858595,0.380108006 9.57332663,0.980148018 L9.57332663,0.980148018 L15.8395499,13.7454366 C16.0779718,14.2304492 16.049147,14.8041761 15.7633131,15.2628495 C15.4774793,15.7215227 14.9751312,16.0001615 14.4350551,15.9998036 L14.4350551,15.9998036 L1.56533799,15.9998036 C1.02489185,16.0001615 0.522543714,15.7215227 0.236709916,15.2628495 C-0.0491239591,14.8041761 -0.0779487219,14.2304492 0.160334633,13.7457186 L0.160334633,13.7457186 L6.42676023,0.980018094 C6.72143576,0.380110758 7.33163545,3.55271368e-15 8,3.55271368e-15 Z M8.00000405,1.11627632 C7.75729245,1.11627632 7.53569998,1.25431257 7.42875311,1.47203748 L7.42875311,1.47203748 L1.16225277,14.2378901 C1.09397019,14.3767947 1.10222542,14.5411066 1.18408651,14.6724679 C1.26594761,14.8038292 1.40981722,14.8835272 1.56496797,14.8835272 L1.56496797,14.8835272 L14.4354251,14.8835272 C14.5902058,14.8835272 14.7340755,14.8038292 14.8159366,14.6724679 C14.8977976,14.5411066 14.9060529,14.3767947 14.8376318,14.2376081 L14.8376318,14.2376081 L8.57133375,1.4721674 C8.46432259,1.25431158 8.2427295,1.11627632 8.00000405,1.11627632 Z M8,11.8734029 L8.10871283,11.8801555 C8.53604617,11.9336345 8.86666667,12.2982418 8.86666667,12.7400696 C8.86666667,13.2187164 8.47864678,13.6067362 8,13.6067362 C7.52135322,13.6067362 7.13333333,13.2187164 7.13333333,12.7400696 C7.13333333,12.2982418 7.46395383,11.9336345 7.89128717,11.8801555 L8,11.8734029 Z M8,4.40673624 C8.29823376,4.40673624 8.54564675,4.62432586 8.59214701,4.90941313 L8.6,5.00673624 L8.6,9.50636838 C8.6,9.83773923 8.33137085,10.1063684 8,10.1063684 C7.70176624,10.1063684 7.45435325,9.88877877 7.40785299,9.6036915 L7.4,9.50636838 L7.4,5.00673624 C7.4,4.67536539 7.66862915,4.40673624 8,4.40673624 Z">
                                    </path>
                                </svg></span>
                            <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m">&nbsp; &nbsp;Enter your office address </p>
                        </div>
                    @endif
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="office-address-2--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="office-address-2--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="office-address-2--label-wrapper">
                            <label class="gds-form-input__label" for="office-address-2" id="office-address-2-label"><span>Office address
                            2</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="office-address-2--input-wrapper">
                            <input type="text" class="{{ $errors->has('office_address_2') ? 'gds-form-input__input--is-error error-office-address-2' : '' }} gds-form-input__input gds-form-input__input--text" id="office-address-2" name="office_address_2" placeholder="Placeholder text" value=" ">
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="city--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="city--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="city--label-wrapper">
                            <label class="gds-form-input__label" for="city" id="city-label"><span> City*</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="city--input-wrapper">
                            <input type="text" class="{{ $errors->has('city') ? 'gds-form-input__input--is-error error-city' : '' }} gds-form-input__input gds-form-input__input--text" id="city" name="city" placeholder="Placeholder text" value=" ">
                        </div>
                    </div>
                    @if ($errors->has('city'))
                        <div class="gds-form-input__validation-message gds-form-input__validation-message--is-error gds-form-input__validation-message-- gds-form-input__validation-message--"> <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_alert"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8,3.55271368e-15 C8.66838454,3.55271368e-15 9.27858595,0.380108006 9.57332663,0.980148018 L9.57332663,0.980148018 L15.8395499,13.7454366 C16.0779718,14.2304492 16.049147,14.8041761 15.7633131,15.2628495 C15.4774793,15.7215227 14.9751312,16.0001615 14.4350551,15.9998036 L14.4350551,15.9998036 L1.56533799,15.9998036 C1.02489185,16.0001615 0.522543714,15.7215227 0.236709916,15.2628495 C-0.0491239591,14.8041761 -0.0779487219,14.2304492 0.160334633,13.7457186 L0.160334633,13.7457186 L6.42676023,0.980018094 C6.72143576,0.380110758 7.33163545,3.55271368e-15 8,3.55271368e-15 Z M8.00000405,1.11627632 C7.75729245,1.11627632 7.53569998,1.25431257 7.42875311,1.47203748 L7.42875311,1.47203748 L1.16225277,14.2378901 C1.09397019,14.3767947 1.10222542,14.5411066 1.18408651,14.6724679 C1.26594761,14.8038292 1.40981722,14.8835272 1.56496797,14.8835272 L1.56496797,14.8835272 L14.4354251,14.8835272 C14.5902058,14.8835272 14.7340755,14.8038292 14.8159366,14.6724679 C14.8977976,14.5411066 14.9060529,14.3767947 14.8376318,14.2376081 L14.8376318,14.2376081 L8.57133375,1.4721674 C8.46432259,1.25431158 8.2427295,1.11627632 8.00000405,1.11627632 Z M8,11.8734029 L8.10871283,11.8801555 C8.53604617,11.9336345 8.86666667,12.2982418 8.86666667,12.7400696 C8.86666667,13.2187164 8.47864678,13.6067362 8,13.6067362 C7.52135322,13.6067362 7.13333333,13.2187164 7.13333333,12.7400696 C7.13333333,12.2982418 7.46395383,11.9336345 7.89128717,11.8801555 L8,11.8734029 Z M8,4.40673624 C8.29823376,4.40673624 8.54564675,4.62432586 8.59214701,4.90941313 L8.6,5.00673624 L8.6,9.50636838 C8.6,9.83773923 8.33137085,10.1063684 8,10.1063684 C7.70176624,10.1063684 7.45435325,9.88877877 7.40785299,9.6036915 L7.4,9.50636838 L7.4,5.00673624 C7.4,4.67536539 7.66862915,4.40673624 8,4.40673624 Z">
                                    </path>
                                </svg></span>
                            <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m">&nbsp; &nbsp;Enter your city </p>
                        </div>
                    @endif
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="province--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--select" id="province--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="province--label-wrapper">
                            <label class="gds-form-input__label" for="province" id="province-label"><span> Province or
                            territory</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--select" id="province--input-wrapper">
                            <select class="{{ $errors->has('province') ? 'gds-form-input__input--is-error error-province' : '' }} gds-form-input__input gds-form-input__input--select gds-form-input__input--has-icon" id="province" name="province" placeholder="Placeholder text" value="">
                                <option value="" disabled="" selected="" hidden="">Province or territory</option>
                                <option value="Alberta">Alberta</option>
                                <option value="British Columbia">British Columbia</option>
                                <option value="Manitoba">Manitoba</option>
                                <option value="New Brunswick">New Brunswick</option>
                                <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                                <option value="Northwest Territories">Northwest Territories</option>
                                <option value="Nova Scotia">Nova Scotia</option>
                                <option value="Nunavut">Nunavut</option>
                                <option value="Ontario">Ontario</option>
                                <option value="Prince Edward Island">Prince Edward Island</option>
                                <option value="Quebec">Quebec</option>
                                <option value="Saskatchewan">Saskatchewan</option>
                                <option value="Yukon">Yukon</option>
                            </select>
                            <div class="gds-form-input__icon-container gds-form-input__icon-container--chevron">
                                <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_chevron-down">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M1.793 5.5c.36-.36.928-.388 1.32-.083l.094.083L10 12.292 16.793 5.5c.36-.36.928-.388 1.32-.083l.094.083c.36.36.388.928.083 1.32l-.083.094-7.146 7.146c-.281.282-.663.44-1.061.44-.348 0-.684-.121-.95-.34l-.11-.1-7.147-7.146c-.39-.39-.39-1.023 0-1.414z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="postal-code--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="postal-code--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="postal-code--label-wrapper">
                            <label class="gds-form-input__label" for="postal-code" id="postal-code-label"><span> Postal
                            code*</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="postal-code--input-wrapper">
                            <input type="text" class="{{ $errors->has('postal_code') ? 'gds-form-input__input--is-error error-postal_code' : '' }} gds-form-input__input gds-form-input__input--text" id="postal-code" name="postal_code" placeholder="Ex. A1A 2B2 " value="">
                        </div>
                    </div>
                    @if ($errors->has('postal_code'))
                        <div class="gds-form-input__validation-message gds-form-input__validation-message--is-error gds-form-input__validation-message-- gds-form-input__validation-message--"> <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_alert"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8,3.55271368e-15 C8.66838454,3.55271368e-15 9.27858595,0.380108006 9.57332663,0.980148018 L9.57332663,0.980148018 L15.8395499,13.7454366 C16.0779718,14.2304492 16.049147,14.8041761 15.7633131,15.2628495 C15.4774793,15.7215227 14.9751312,16.0001615 14.4350551,15.9998036 L14.4350551,15.9998036 L1.56533799,15.9998036 C1.02489185,16.0001615 0.522543714,15.7215227 0.236709916,15.2628495 C-0.0491239591,14.8041761 -0.0779487219,14.2304492 0.160334633,13.7457186 L0.160334633,13.7457186 L6.42676023,0.980018094 C6.72143576,0.380110758 7.33163545,3.55271368e-15 8,3.55271368e-15 Z M8.00000405,1.11627632 C7.75729245,1.11627632 7.53569998,1.25431257 7.42875311,1.47203748 L7.42875311,1.47203748 L1.16225277,14.2378901 C1.09397019,14.3767947 1.10222542,14.5411066 1.18408651,14.6724679 C1.26594761,14.8038292 1.40981722,14.8835272 1.56496797,14.8835272 L1.56496797,14.8835272 L14.4354251,14.8835272 C14.5902058,14.8835272 14.7340755,14.8038292 14.8159366,14.6724679 C14.8977976,14.5411066 14.9060529,14.3767947 14.8376318,14.2376081 L14.8376318,14.2376081 L8.57133375,1.4721674 C8.46432259,1.25431158 8.2427295,1.11627632 8.00000405,1.11627632 Z M8,11.8734029 L8.10871283,11.8801555 C8.53604617,11.9336345 8.86666667,12.2982418 8.86666667,12.7400696 C8.86666667,13.2187164 8.47864678,13.6067362 8,13.6067362 C7.52135322,13.6067362 7.13333333,13.2187164 7.13333333,12.7400696 C7.13333333,12.2982418 7.46395383,11.9336345 7.89128717,11.8801555 L8,11.8734029 Z M8,4.40673624 C8.29823376,4.40673624 8.54564675,4.62432586 8.59214701,4.90941313 L8.6,5.00673624 L8.6,9.50636838 C8.6,9.83773923 8.33137085,10.1063684 8,10.1063684 C7.70176624,10.1063684 7.45435325,9.88877877 7.40785299,9.6036915 L7.4,9.50636838 L7.4,5.00673624 C7.4,4.67536539 7.66862915,4.40673624 8,4.40673624 Z">
                                    </path>
                                </svg></span>
                            <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m">&nbsp; &nbsp;Enter a valid postal code </p>
                        </div>
                    @endif
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="speciality--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="speciality--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="speciality--label-wrapper">
                            <label class="gds-form-input__label" for="speciality" id="speciality-label"><span>Specialty</span><span class="helperText">
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="speciality--input-wrapper">
                            <input type="text" class="{{ $errors->has('speciality') ? 'gds-form-input__input--is-error error-speciality' : '' }} gds-form-input__input gds-form-input__input--text" id="speciality" name="speciality" placeholder="Placeholder text" value=" ">
                        </div>
                    </div>
                    <div class="gds-form-input__validation-message gds-form-input__validation-message-- gds-form-input__validation-message-- gds-form-input__validation-message--is-hidden">
                        <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g fill="none" fill-rule="evenodd">
                                    <g fill="#06C">
                                        <g>
                                            <path
                                                d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                                transform="translate(-4 -4) translate(4 4)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 24px">
                <div class="gds-form-input" id="email--wrapper">
                    <div class="gds-form-input__inner gds-form-input__inner--text" id="email--inner-wrapper">
                        <div class="gds-form-input__label-wrapper" id="email--label-wrapper">
                            <label class="gds-form-input__label" for="email" id="email-label"><span>Email
                            Address*</span><span class="helperText">
                            This will be used for creating your account
                            </span></label>
                        </div>
                        <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--text" id="email--input-wrapper">
                            <input type="text" class="{{ $errors->has('email') ? 'gds-form-input__input--is-error error-email' : '' }} gds-form-input__input gds-form-input__input--text" id="email" name="email" placeholder="Placeholder text" value=" ">
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <div class="gds-form-input__validation-message gds-form-input__validation-message--is-error gds-form-input__validation-message-- gds-form-input__validation-message--"> <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_alert"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8,3.55271368e-15 C8.66838454,3.55271368e-15 9.27858595,0.380108006 9.57332663,0.980148018 L9.57332663,0.980148018 L15.8395499,13.7454366 C16.0779718,14.2304492 16.049147,14.8041761 15.7633131,15.2628495 C15.4774793,15.7215227 14.9751312,16.0001615 14.4350551,15.9998036 L14.4350551,15.9998036 L1.56533799,15.9998036 C1.02489185,16.0001615 0.522543714,15.7215227 0.236709916,15.2628495 C-0.0491239591,14.8041761 -0.0779487219,14.2304492 0.160334633,13.7457186 L0.160334633,13.7457186 L6.42676023,0.980018094 C6.72143576,0.380110758 7.33163545,3.55271368e-15 8,3.55271368e-15 Z M8.00000405,1.11627632 C7.75729245,1.11627632 7.53569998,1.25431257 7.42875311,1.47203748 L7.42875311,1.47203748 L1.16225277,14.2378901 C1.09397019,14.3767947 1.10222542,14.5411066 1.18408651,14.6724679 C1.26594761,14.8038292 1.40981722,14.8835272 1.56496797,14.8835272 L1.56496797,14.8835272 L14.4354251,14.8835272 C14.5902058,14.8835272 14.7340755,14.8038292 14.8159366,14.6724679 C14.8977976,14.5411066 14.9060529,14.3767947 14.8376318,14.2376081 L14.8376318,14.2376081 L8.57133375,1.4721674 C8.46432259,1.25431158 8.2427295,1.11627632 8.00000405,1.11627632 Z M8,11.8734029 L8.10871283,11.8801555 C8.53604617,11.9336345 8.86666667,12.2982418 8.86666667,12.7400696 C8.86666667,13.2187164 8.47864678,13.6067362 8,13.6067362 C7.52135322,13.6067362 7.13333333,13.2187164 7.13333333,12.7400696 C7.13333333,12.2982418 7.46395383,11.9336345 7.89128717,11.8801555 L8,11.8734029 Z M8,4.40673624 C8.29823376,4.40673624 8.54564675,4.62432586 8.59214701,4.90941313 L8.6,5.00673624 L8.6,9.50636838 C8.6,9.83773923 8.33137085,10.1063684 8,10.1063684 C7.70176624,10.1063684 7.45435325,9.88877877 7.40785299,9.6036915 L7.4,9.50636838 L7.4,5.00673624 C7.4,4.67536539 7.66862915,4.40673624 8,4.40673624 Z">
                                    </path>
                                </svg></span>
                            <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m">&nbsp; &nbsp;Enter a valid email address </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------TEXT CONTENT---------------------------------- -->
    <div id="agree-terms" class=" gds-grid gds-grid--spacer-massive padding-right-25per margin-bot-10 ">
        <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s"> </p>
        <div class="gds-form-input__inner gds-form-input__inner--checkbox" id="confirm-1--inner-wrapper">
            <div class="gds-form-input__label-wrapper" id="confirm-1--label-wrapper">
                <label class="gds-form-input__label " for="confirm-1" id="confirm-1-label">
                    <span>
                        <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s font-weight-bold"
                            > I agree that Boehringer Ingelheim
                            (Canada) Ltd./ Lté can communicate electronically with me for the purposes described <a href="#" target="_blank"
                                class="underlined">according to</a> the Terms of Use described <a href="#" target="_blank"
                                class="underlined">below and in </a>our Privacy Policy. I also confirm I am 13 years or
                            over.
                        </p>
                    </span>
                </label>
            </div>
            <div class="gds-form-input__input-wrapper gds-form-input__input-wrapper--checkbox" id="confirm-1--input-wrapper">
                <input type="checkbox" class="{{ $errors->has('confirm_1') ? 'gds-form-input__input--is-error error-confirm_1' : '' }} gds-form-input__input gds-form-input__input--checkbox" id="confirm-1" name="confirm_1" placeholder="">
                <div class="gds-form-input__icon-container gds-form-input__icon-container--checkbox">
                    <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 16 16">
                            <g fill="none" fill-rule="evenodd">
                                <g fill="#06C">
                                    <g>
                                        <path
                                            d="M14.206 1.715c.344-.435.976-.51 1.412-.165.387.306.489.84.265 1.26l-.1.152-9.13 11.553c-.436.573-1.122.9-1.842.88-.64-.02-1.236-.313-1.632-.784l-.14-.185-2.855-4.053c-.32-.454-.212-1.081.242-1.401.409-.288.958-.229 1.297.117l.104.126 2.87 4.073c.04.058.104.094.174.096.047.002.092-.012.134-.043l.058-.058 9.143-11.568z"
                                            transform="translate(-4 -4) translate(4 4)"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        @if ($errors->has('confirm_1'))
            <div class="gds-form-input__validation-message gds-form-input__validation-message--is-error gds-form-input__validation-message-- gds-form-input__validation-message-- padding-bot-10px margin-left-20 ">
                <span class="gds-icon gds-icon--primary gds-icon--m gds-icon--base_alert">
                    <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8,3.55271368e-15 C8.66838454,3.55271368e-15 9.27858595,0.380108006 9.57332663,0.980148018 L9.57332663,0.980148018 L15.8395499,13.7454366 C16.0779718,14.2304492 16.049147,14.8041761 15.7633131,15.2628495 C15.4774793,15.7215227 14.9751312,16.0001615 14.4350551,15.9998036 L14.4350551,15.9998036 L1.56533799,15.9998036 C1.02489185,16.0001615 0.522543714,15.7215227 0.236709916,15.2628495 C-0.0491239591,14.8041761 -0.0779487219,14.2304492 0.160334633,13.7457186 L0.160334633,13.7457186 L6.42676023,0.980018094 C6.72143576,0.380110758 7.33163545,3.55271368e-15 8,3.55271368e-15 Z M8.00000405,1.11627632 C7.75729245,1.11627632 7.53569998,1.25431257 7.42875311,1.47203748 L7.42875311,1.47203748 L1.16225277,14.2378901 C1.09397019,14.3767947 1.10222542,14.5411066 1.18408651,14.6724679 C1.26594761,14.8038292 1.40981722,14.8835272 1.56496797,14.8835272 L1.56496797,14.8835272 L14.4354251,14.8835272 C14.5902058,14.8835272 14.7340755,14.8038292 14.8159366,14.6724679 C14.8977976,14.5411066 14.9060529,14.3767947 14.8376318,14.2376081 L14.8376318,14.2376081 L8.57133375,1.4721674 C8.46432259,1.25431158 8.2427295,1.11627632 8.00000405,1.11627632 Z M8,11.8734029 L8.10871283,11.8801555 C8.53604617,11.9336345 8.86666667,12.2982418 8.86666667,12.7400696 C8.86666667,13.2187164 8.47864678,13.6067362 8,13.6067362 C7.52135322,13.6067362 7.13333333,13.2187164 7.13333333,12.7400696 C7.13333333,12.2982418 7.46395383,11.9336345 7.89128717,11.8801555 L8,11.8734029 Z M8,4.40673624 C8.29823376,4.40673624 8.54564675,4.62432586 8.59214701,4.90941313 L8.6,5.00673624 L8.6,9.50636838 C8.6,9.83773923 8.33137085,10.1063684 8,10.1063684 C7.70176624,10.1063684 7.45435325,9.88877877 7.40785299,9.6036915 L7.4,9.50636838 L7.4,5.00673624 C7.4,4.67536539 7.66862915,4.40673624 8,4.40673624 Z">
                        </path>
                    </svg>
                </span>
                <p class="gds-paragraph gds-paragraph--s gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-m"> &nbsp;&nbsp;Please confirm </p>
            </div>
        @endif
        <div class="gds-form-input__inner">
            <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s font-weight-bold text-comp"> Your consent may be revoked at any time by going to <a href="http://unsubscribe.boehringer-ingelheim.ca" target="_blank" class="underlined">http://unsubscribe.boehringer-ingelheim.ca</a> </p>
            <p class="gds-paragraph gds-paragraph--base gds-paragraph--align-left gds-paragraph-- gds-paragraph--spacer-s font-weight-bold text-comp"> Your consent remains in effect until such times as you have advised us that it is revoked. It may take up to 10 business days to process your change of consent. </p>
        </div>
        <div id="btn-comp" class="gds-btn-wrapper">
            <button class="gds-btn gds-btn--primary"><span>Submit</span></button>
        </div>
    </div>
</form>
@include('layouts.footer')