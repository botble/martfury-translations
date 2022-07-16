<?php

return [
    'settings' => 'Ayarlar',
    'name' => 'E-Ticaret',
    'setting' => [
        'email' => [
            'title' => 'E-commerce',
            'description' => 'Ecommerce email config',
            'order_confirm_subject' => 'Subject of order confirmation email',
            'order_confirm_subject_placeholder' => 'The subject of email confirmation send to the customer',
            'order_confirm_content' => 'Content of order confirmation email',
            'order_status_change_subject' => 'Subject of email when changing order\'s status',
            'order_status_change_subject_placeholder' => 'Subject of email when changing order\'s status send to customer',
            'order_status_change_content' => 'Content of email when changing order\'s status',
            'from_email' => 'Email from',
            'from_email_placeholder' => 'Email from address to display in mail. Ex: example@gmail.com',
        ],
        'title' => 'Basic information',
        'state' => 'State',
        'city' => 'İlçe',
        'country' => 'Ülke',
        'weight_unit_gram' => 'Gram (g)',
        'weight_unit_kilogram' => 'Kilogram (kg)',
        'weight_unit_lb' => 'Pound (lb)',
        'weight_unit_oz' => 'Ounce (oz)',
        'height_unit_cm' => 'Centimeter (cm)',
        'height_unit_m' => 'Meter (m)',
        'height_unit_inch' => 'Inch',
        'store_locator_title' => 'Store locators',
        'store_locator_description' => 'All the lists of your chains, main stores, branches, etc. The locations can be used to track sales and to help us configure tax rates to charge when selling products.',
        'phone' => 'Telefon Numarası',
        'address' => 'Address',
        'is_primary' => 'Primary?',
        'add_new' => 'Add new',
        'or' => 'Or',
        'change_primary_store' => 'change default store locator',
        'other_settings' => 'Other settings',
        'other_settings_description' => 'Settings for cart, review...',
        'enable_cart' => 'Enable shopping cart?',
        'enable_tax' => 'Enable tax?',
        'display_product_price_including_taxes' => 'Display product price including taxes?',
        'enable_review' => 'Enable review?',
        'enable_quick_buy_button' => 'Enable quick buy button?',
        'quick_buy_target' => 'Quick buy target page?',
        'checkout_page' => 'Checkout page',
        'cart_page' => 'Cart page',
        'add_location' => 'Add location',
        'edit_location' => 'Edit location',
        'delete_location' => 'Delete location',
        'change_primary_location' => 'Change primary location',
        'delete_location_confirmation' => 'Are you sure you want to delete this location? This action cannot be undo.',
        'save_location' => 'Save location',
        'accept' => 'Accept',
        'select_country' => 'Select country...',
        'zip_code_enabled' => 'Enable Zip Code?',
        'thousands_separator' => 'Thousands separator',
        'decimal_separator' => 'Decimal separator',
        'separator_period' => 'Period (.)',
        'separator_comma' => 'Comma (,)',
        'separator_space' => 'Space ( )',
        'available_countries' => 'Available countries',
        'all' => 'All',
        'verify_customer_email' => 'Verify customer\'s email?',
        'minimum_order_amount' => 'Minimum order amount to place an order (:currency).',
        'enable_guest_checkout' => 'Enable guest checkout?',
        'show_number_of_products' => 'Show number of products in the product single',
        'payment_method_cod_minimum_amount' => 'Minimum order amount - :currency (Optional)',
        'review' => [
            'max_file_size' => 'Review max file size (MB)',
            'max_file_number' => 'Review max file number',
        ],
        'using_custom_font_for_invoice' => 'Using custom font for invoice?',
        'invoice_font_family' => 'Invoice font family (Only work for Latin language)',
        'enable_invoice_stamp' => 'Enable invoice stamp?',
        'make_phone_field_at_the_checkout_optional' => 'Make phone field at the checkout optional?',
        'disable_order_invoice_until_order_confirmed' => 'Disable order invoice until order confirmed?',
        'vat_number' => 'VKN',
        'enable_recaptcha_in_register_page' => 'Enable Recaptcha in the registration page?',
        'enable_recaptcha_in_register_page_description' => 'Need to setup Captcha in Admin -> Settings -> General first.',
        'show_out_of_stock_products' => 'Show out of stock products?',
        'default_tax_rate' => 'Default tax rate',
        'default_tax_rate_description' => 'Important: it will be applied if no tax selected in product.',
        'how_to_display_product_variation_images' => 'How to display product variation images?',
        'only_variation_images' => 'Only variation images',
        'variation_images_and_main_product_images' => 'Variation images + main product images',
        'load_countries_states_cities_from_location_plugin' => 'Load countries, states, cities from plugin location?',
        'enable_wishlist' => 'Enable wishlist?',
        'enable_compare' => 'Enable compare?',
        'enable_order_tracking' => 'Enable order tracking?',
    ],
    'store_address' => 'Store address',
    'store_phone' => 'Store phone',
    'order_id' => 'Order ID',
    'order_token' => 'Order token',
    'customer_name' => 'Customer name',
    'customer_email' => 'Customer email',
    'customer_phone' => 'Customer phone',
    'customer_address' => 'Customer address',
    'product_list' => 'List products in order',
    'payment_detail' => 'Payment detail',
    'shipping_method' => 'Shipping method',
    'payment_method' => 'Payment method',
    'standard_and_format' => 'Standard & Format',
    'standard_and_format_description' => 'Standards and formats are used to calculate things like product prices, shipping weights, and order times.',
    'change_order_format' => 'Edit order code format (optional)',
    'change_order_format_description' => 'The default order code starts at: number. You can change the start or end string to create the order code you want, for example "DH-: number" or ": number-A"',
    'start_with' => 'Start with',
    'end_with' => 'End with',
    'order_will_be_shown' => 'Your order code will be shown',
    'weight_unit' => 'Unit of weight',
    'height_unit' => 'Unit length / height',
    'theme_options' => [
        'name' => 'E-Ticaret',
        'description' => 'Theme options for Ecommerce',
        'number_products_per_page' => 'Number of products per page',
        'number_of_cross_sale_product' => 'Number of cross sale products in product detail page',
        'max_price_filter' => 'Maximum price to filter',
        'logo_in_the_checkout_page' => 'Logo in the checkout page (Default is the main logo)',
        'logo_in_invoices' => 'Logo in invoices (Default is the main logo)',
    ],
    'basic_settings' => 'Basit Ayarlar',
    'advanced_settings' => 'Gelişmiş Ayarlar',
];
