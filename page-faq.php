<?php
/* Template Name: FAQ */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background-v2"></div>

    <div class="contact-us global-page-wrapper">        
        
        <img
        alt="RightImage6672"
        src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/rightimage6672-cck6-300w.png"
        class="register-right-image"
        />
        <img
        alt="LeftImage6672"
        src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/leftimage6672-vfcz-300w.png"
        class="register-left-image"
        />

        <div class="contact-us-header-title-container">
            <span class="hero-header-title-blue">FAQs</span>
            <span class="hero-header-desc-black">We're happy to help with any questions.</span>
            
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
                    'title' => 'See Mail Options',
                ) );
            ?>
        </div>

        <?php
        $faq_items = [
            [
                'title' => 'How do I read my tracking link?',
                'content' => 'Here’s how to find and understand your tracking link...'
            ],
            [
                'title' => 'I can’t pay for my list on www.ListSource.com',
                'content' => 'Instructions for paying on ListSource...'
            ],
            [
                'title' => 'I don’t want your system to remove duplicates or non deliverable records from my list',
                'content' => 'You can configure how duplicates are handled by...'
            ],
            [
                'title' => 'Can I prepay for mailer credits?',
                'content' => 'Yes, you can prepay for mailer credits through your dashboard...'
            ],
            [
                'title' => 'Can you mail me all the postcards so I can send them out myself?',
                'content' => 'We offer the option to ship postcards directly to you...'
            ],
            [
                'title' => 'What should I look for when reviewing my proof?',
                'content' => 'Check for accuracy, layout, and personalization details...'
            ],
            [
                'title' => 'What are YLHQ hours of operations?',
                'content' => 'Our team operates Monday to Friday, 9am–5pm PST...'
            ],
            [
                'title' => 'Can I use two different templates in one order?',
                'content' => 'Yes, you can select multiple templates during checkout...'
            ],
            [
                'title' => 'What should I look for when reviewing my proof?',
                'content' => 'Ensure all data is correct and formatting is accurate...'
            ],
            [
                'title' => 'I signed up for a List & Leads Membership, what happens next?',
                'content' => 'Your membership will be activated and you’ll gain access to tools and templates...'
            ],
            [
                'title' => 'How do I apply my store credit?',
                'content' => 'Store credits are automatically applied during checkout...'
            ],
            [
                'title' => 'What is the difference between first class mail and standard mail?',
                'content' => 'First class mail is faster and more trackable...'
            ],
            [
                'title' => 'When is my mail sent after ordering, and when should I expect a reply?',
                'content' => 'Mail typically ships within 2-3 business days...'
            ],
            [
                'title' => 'What is variable data? How can I use this?',
                'content' => 'Variable data allows personalization for each recipient...'
            ],
            [
                'title' => 'What does “NCOA” stand for and what does it do?',
                'content' => 'NCOA is the National Change of Address system...'
            ],
            [
                'title' => 'Removing Items from Cart',
                'content' => 'Click the trash icon beside the item in your cart...'
            ],
            [
                'title' => 'What is the turnaround time?',
                'content' => 'Turnaround time is typically 3–5 business days...'
            ],
            [
                'title' => 'Managing my YLHQ Memberships',
                'content' => 'You can manage your memberships from your dashboard...'
            ],
            [
                'title' => 'Creating and Managing a Support Ticket',
                'content' => 'Visit the support page and fill in the ticket form...'
            ],
            [
                'title' => 'Managing my Payment Methods',
                'content' => 'You can update saved cards from the account settings...'
            ],
            [
                'title' => 'Managing my Yellow Letter HQ account',
                'content' => 'Access your account page to update profile and settings...'
            ],
            [
                'title' => 'Removing Items from Cart',
                'content' => 'Simply click the remove icon to delete an item from your cart...'
            ],
            [
                'title' => 'Managing my Billing Addresses',
                'content' => 'Edit or add billing addresses under your account section...'
            ]
        ];
        ?>

        <div class="faq-page-forms">
            <div class="faq-page-grid-divide2">
                <?php
                foreach ($faq_items as $index => $item) {
                    get_template_part('template-parts/form-elements/dropdown', 'faq', [
                        'title' => $item['title'],
                        'content' => $item['content'],
                        'id' => 'faq-' . ($index + 1)
                    ]);
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
