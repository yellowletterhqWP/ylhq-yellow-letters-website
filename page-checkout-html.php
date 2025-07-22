<?php
get_header();
?>

<main id="main" class="site-main">
    <div class="handwritten-page-container-1">
        
        <div class="handwritten-page-container-1-inner checkout-inner-container">
            <div class="handwritten-page-header-image cart-header-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/hero-bg.png" />
            </div>
            
            <div class="handwritten-page-header-title-container checkout-page-header-title-container">
                <div class="handwritten-page-header-title checkout-page-header-title">
                    <span class="handwritten-page-header-title1">Checkout</span>                        
                </div>

                <span class="handwritten-page-header-title3 checkout-template-subtitle">Where Your Information and Orders Meet.
                </span>
            </div>
        </div>  
    </div>

    
        <div class="handwritten-page-forms checkout-form-container">
            <h2 class="form-heading checkout-form-heading">Your Order Details</h2>

    <table class="order-details-table">
      <tr>
        <td class="label">Product</td>
        <td class="value">Create a Custom Template x1</td>
      </tr>
      <tr>
        <td class="label">Products:</td>
        <td class="value">FC Half Page Postcard (8.5x 5.5)</td>
      </tr>
      <tr>
        <td class="label">Templates:</td>
        <td class="value">Custom Designed Post Card ($65)</td>
      </tr>
      <tr>
        <td class="label">Font Selection:</td>
        <td class="value">Typed</td>
      </tr>
      <tr>
        <td class="label">Font Color:</td>
        <td class="value">Blue</td>
      </tr>
      <tr>
        <td class="label">Paper Color:</td>
        <td class="value">Pink</td>
      </tr>
    </table>

            <hr />

           <table class="order-details-table">
      <tr>
        <td class="label">Subtotal :</td>
        <td class="value">$65.00</td>
      </tr>
    </table>

                  <hr />

       <table class="order-details-table">
      <tr>
        <td class="label">Total :</td>
        <td class="value">$65.00</td>
      </tr>
    </table>

                      <hr />


            <h2 class="form-heading checkout-form-heading">Have a coupon? Click here to enter your code</h2>

            <div class="handwritten-page-last">
                
                <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'coupon',
                    'label' => 'If you have a coupon code, please apply it below.',
                    'placeholder' => 'Coupon Code',
                    'required' => false,
                ]);
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => '',
                    'title' => 'Apply Coupon',
                ) );
                ?>

            </div>
            
            <hr />
            
            <h2 class="form-heading checkout-form-heading">Billing Address</h2>
                
            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">

                 <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'full_name',
                    'label' => 'Full Name',
                    'placeholder' => '',
                    'required' => false
                ]);
                ?>
                </div>

                 <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'email',
                        'label' => 'Email Address',
                        'placeholder' => '',
                        'required' => false,
                    ]);
                    ?>
            </div>

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                    <?php
                        get_template_part('template-parts/form-elements/selectbox', null, [
                            'id' => 'country',
                            'label' => 'Country/Region',
                            'required' => false,
                            'placeholder' => 'Country/Region',
                            'selected' => 'london',
                            'options' => [
                                ['value'=>'london', 'label'=>'London'],
                            ]
                        ]);
                    ?>
                </div>

                <?php
                        get_template_part('template-parts/form-elements/selectbox', null, [
                            'id' => 'state',
                            'label' => 'State / Country',
                            'required' => false,
                            'placeholder' => 'State / Country',
                            'selected' => 'blue',
                            'options' => [
                                ['value'=>'blue', 'label'=>'Blue'],
                                ['value'=>'yellow', 'label'=>'Yellow'],
                            ]
                        ]);
                    ?>
            </div>

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                    <?php
                        get_template_part('template-parts/form-elements/selectbox', null, [
                            'id' => 'town',
                            'label' => 'Town / City',
                            'required' => false,
                            'placeholder' => 'Town / City',
                            'selected' => 'london',
                            'options' => [
                                ['value'=>'london', 'label'=>'London'],
                            ]
                        ]);
                    ?>
                </div>

                <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'street_address',
                    'label' => 'Street Address',
                    'placeholder' => 'House number and street name',
                    'required' => false
                ]);
            ?>
            </div>

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                    <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'other_address',
                    'label' => 'Other Address',
                    'placeholder' => 'Apartment, suite, unit, etc',
                    'required' => false
                ]);
                ?>
                </div>

               <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'postcode',
                    'label' => 'Postcode / ZIP',
                    'placeholder' => 'Postcode / ZIP',
                    'required' => false
                ]);
                ?>
            </div>

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                    <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'phone_number',
                    'label' => 'Phone Number',
                    'placeholder' => 'Phone Number',
                    'required' => false
                ]);
            ?>
                </div>

                <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'company_name',
                    'label' => 'Company Name',
                    'placeholder' => 'Company Name',
                    'required' => false
                ]);
            ?>
            </div>
            

            <hr />
            
            <h2 class="form-heading checkout-form-heading">Credit Card Details</h2>

             <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'card_number',
                    'label' => 'Card Number',
                    'placeholder' => '.... .... ....',
                    'required' => false
                ]);
                ?>

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">

                 <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'expiration',
                    'label' => 'Expiration (MM/YY)',
                    'placeholder' => 'MM / YY',
                    'required' => false
                ]);
                ?>
                </div>

                 <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'csc',
                        'label' => 'Card Security Code',
                        'placeholder' => 'CSC',
                        'required' => false,
                    ]);
                    ?>
            </div>

             <div class="handwritten-page-last place-order">
            <?php
            
            get_template_part( 'template-parts/form-elements/button', null, array(
                'icon' => '',
                'title' => 'Place Order',
            ) );
            ?>
        </div>

        </div>

       
    </div>

</main>

<?php get_footer(); ?>
