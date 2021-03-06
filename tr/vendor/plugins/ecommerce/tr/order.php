<?php

return [
    'statuses' => [
        'pending' => 'ONAY BEKLENİYOR',
        'processing' => 'ONAYLANDI | HAZIRLANIYOR',
        'completed' => 'TAMAMLANDI',
        'canceled' => 'SİPARİŞ İPTAL EDİLDİ',
    ],
    'menu' => 'Siparişler',
    'create' => 'Sipariş Oluştur',
    'cancel_error' => 'Sipariş dağıtıma çıkmış veya tamamlanmış.',
    'cancel_success' => 'You do cancel the order successful',
    'incomplete_order' => 'Tamamlanmamış Siparişler',
    'order_id' => 'Order ID',
    'product_id' => 'Ürün ID',
    'customer_label' => 'Müşteri',
    'tax_amount' => 'Tax Amount',
    'shipping_amount' => 'Kargo Ücreti',
    'payment_method' => 'Ödeme Türü',
    'payment_status_label' => 'Ödeme Durumu',
    'manage_orders' => 'Sipariş Yönetimi',
    'order_intro_description' => 'Once your store has orders, this is where you will process and track those orders.',
    'create_new_order' => 'Yeni Sipariş',
    'manage_incomplete_orders' => 'Manage incomplete orders',
    'incomplete_orders_intro_description' => 'Incomplete order is an order created when a customer adds a product to the cart, proceeds to fill out the purchase information but does not complete the checkout process.',
    'invoice_for_order' => 'Invoice for order',
    'created' => 'Created',
    'invoice' => 'Fatura',
    'return' => 'İade',
    'total_refund_amount' => 'Toplam İade Tutarı',
    'total_amount_can_be_refunded' => 'En fazla iade edilebilecek tutar',
    'refund_reason' => 'İade nedeni (İsteğe Bağlı)',
    'products' => 'Ürün(ler)',
    'default' => 'Varsayılan',
    'system' => 'System',
    'new_order_from' => ':customer tarafından :order_id numaralı yeni sipariş alındı!',
    'confirmation_email_was_sent_to_customer' => 'Sipariş özeti müşteriye e-posta yoluyla gönderildi!',
    'address_name_required' => 'Ad Soyad zorunludur.',
    'address_phone_required' => 'Telefon Numarası zorunludur.',
    'address_email_required' => 'E-Posta Adresi zorunludur.',
    'address_email_unique' => 'Bu e-postaya sahip müşteri zaten var. Bu sizin hesabınızsa lütfen giriş yapınız!',
    'address_state_required' => 'İl seçin.',
    'address_city_required' => 'İlçe seçin.',
    'address_country_required' => 'Ülke zorunludur.',
    'address_address_required' => 'Adres alanı zorunludur.',
    'create_order_from_payment_page' => 'Order was created from checkout page',
    'order_was_verified_by' => 'Sipariş %user_name% Tarafından Onaylandı',
    'new_order' => 'Yeni Sipariş :order_id',
    'payment_was_confirmed_by' => 'Ödeme %user_name% tarafından onaylandı (Tutar :money)',
    'edit_order' => 'Siparişi Düzenle: :code',
    'confirm_order_success' => 'Sipariş başarıyla onaylandı!',
    'error_when_sending_email' => 'There is an error when sending email',
    'sent_confirmation_email_success' => 'Sent confirmation email successfully!',
    'order_was_sent_to_shipping_team' => 'Sipariş kargo firmasına gönderildi.',
    'by_username' => '%user_name% tarafından',
    'shipping_was_created_from' => 'Shipping was created from order %order_id%',
    'shipping_was_canceled_success' => 'Shipping was cancelled successfully!',
    'shipping_was_canceled_by' => 'Shipping was cancelled by %user_name%',
    'update_shipping_address_success' => 'Update shipping address successfully!',
    'order_was_canceled_by' => 'Order was cancelled by %user_name%',
    'confirm_payment_success' => 'Ödeme başarıyla onaylandı!',
    'refund_amount_invalid' => 'Refund amount must be lower or equal :price',
    'number_of_products_invalid' => 'Number of products refund is not valid!',
    'cannot_found_payment_for_this_order' => 'Cannot found payment for this order!',
    'refund_success_with_price' => 'Başarılı geri ödeme :price',
    'refund_success' => 'Geri ödeme başarılı!',
    'order_is_not_existed' => 'Order is not existed!',
    'reorder' => 'Siparişi Değiştir',
    'sent_email_incomplete_order_success' => 'Sent email to remind about incomplete order successfully!',
    'applied_coupon_success' => 'Applied coupon ":code" successfully!',
    'new_order_notice' => 'You have <span class="bold">:count</span> New Order(s)',
    'view_all' => 'View all',
    'cancel_order' => 'İptal Talebi Oluştur',
    'order_canceled' => 'Order canceled',
    'order_was_canceled_at' => 'Order was canceled at',
    'completed' => 'Tamamlandı',
    'uncompleted' => 'Uncompleted',
    'sku' => 'SKU',
    'warehouse' => 'Warehouse',
    'sub_amount' => 'Ara Toplam',
    'coupon_code' => 'Kupon Kodu: ":code"',
    'shipping_fee' => 'Kargo Ücreti',
    'tax' => 'Tax',
    'refunded_amount' => 'Refunded amount',
    'amount_received' => 'The amount actually received',
    'download_invoice' => 'Faturayı İndir',
    'print_invoice' => 'Faturayı Görüntüle',
    'add_note' => 'Not Ekle...',
    'order_was_confirmed' => 'Sİpariş Onaylandı',
    'confirm_order' => 'Siparişi Onayla',
    'confirm' => 'Onayla',
    'order_was_canceled' => 'Order was canceled',
    'pending_payment' => 'Ödemeyi Onayla',
    'payment_was_accepted' => 'Ödeme :money kabul edildi',
    'payment_was_refunded' => 'ÖDEME İADE EDİLDİ',
    'confirm_payment' => 'Onayla',
    'refund' => 'İade',
    'all_products_are_not_delivered' => 'Ürünler teslim edilemedi!',
    'delivery' => 'Kargo Durumu Belirle',
    'history' => 'Sipariş Hareketleri',
    'order_number' => 'Sipariş Numarası',
    'from' => 'from',
    'status' => 'Sipariş Durumu',
    'successfully' => 'Successfully',
    'transaction_type' => 'İşlem Türü',
    'staff' => 'Personel',
    'refund_date' => 'İade Tarihi',
    'n_a' => 'N\\A',
    'payment_date' => 'Ödeme Onaylanma Tarihi',
    'payment_gateway' => 'Geri Ödeme Yöntemi',
    'transaction_amount' => 'İşlem Tutarı',
    'resend' => 'Yeniden Gönder',
    'default_store' => 'Default store',
    'update_address' => 'Adresi Düzenle',
    'have_an_account_already' => 'Müşteri Giriş Yaptı!',
    'dont_have_an_account_yet' => 'Müşteri Giriş Yapmadı!',
    'mark_payment_as_confirmed' => 'Mark <span>:method</span> as confirmed',
    'resend_order_confirmation' => 'Resend order confirmation',
    'resend_order_confirmation_description' => 'Confirmation email will be sent to <strong>:email</strong>?',
    'send' => 'Send',
    'update' => 'Kaydet',
    'cancel_shipping_confirmation' => 'Cancel shipping confirmation?',
    'cancel_shipping_confirmation_description' => 'Cancel shipping confirmation?',
    'cancel_order_confirmation' => 'Onaylanan sipariş iptal edilsin mi?',
    'cancel_order_confirmation_description' => 'Bu siparişi iptal etmek istediğinizden emin misiniz? Bu işlem geri alınamaz!',
    'confirm_payment_confirmation_description' => '<strong>:method</strong> tarafından işlendi. Sistem dışında ödeme aldınız mı? Bu ödeme sisteme kaydedilmez ve iade edilemez',
    'save_note' => 'Kaydet',
    'order_note' => 'Order note',
    'order_note_placeholder' => 'Note about order, ex: time or shipping instruction.',
    'order_amount' => 'Order amount',
    'additional_information' => 'Ek Bilgi',
    'notice_about_incomplete_order' => 'Notice about incomplete order',
    'notice_about_incomplete_order_description' => 'Remind email about uncompleted order will be send to <strong>:email</strong>?',
    'incomplete_order_description_1' => 'An incomplete order is when a potential customer places items in their shopping cart, and goes all the way through to the payment page, but then doesn\'t complete the transaction.',
    'incomplete_order_description_2' => 'If you have contacted customers and they want to continue buying, you can help them complete their order by following the link:',
    'send_an_email_to_recover_this_order' => 'Send an email to customer to recover this order',
    'see_maps' => 'See maps',
    'one_or_more_products_dont_have_enough_quantity' => 'One or more products don\'t have enough quantity!',
    'cannot_send_order_recover_to_mail' => 'E-posta bulunamadı, bu nedenle müşteriye bir kurtarma e-postası gönderilemiyor.',
    'payment_info' => 'Payment Info',
    'payment_method_refund_automatic' => 'Your customer will be refunded using :method automatically.',
    'order' => 'Sipariş',
    'order_information' => 'Sipariş Numarası',
    'create_a_new_product' => 'Yeni Ürün',
    'out_of_stock' => 'Out of stock',
    'products_available' => 'product(s) available',
    'no_products_found' => 'No products found!',
    'note' => 'Not',
    'note_for_order' => 'Sipariş Notu',
    'amount' => 'Tutar',
    'add_discount' => 'İndirim Ekle',
    'discount' => 'İndirim',
    'add_shipping_fee' => 'Kargo Ücreti Ekle',
    'shipping' => 'Kargo:',
    'total_amount' => 'Toplam Tutar',
    'confirm_payment_and_create_order' => 'Ödemeyi Onayla ve Sipariş Oluştur',
    'paid' => 'Paid',
    'pay_later' => 'Daha Sonra Öde',
    'customer_information' => 'Müşteri Bilgileri',
    'create_new_customer' => 'Yeni Müşteri',
    'no_customer_found' => 'No customer found!',
    'customer' => 'Müşteri',
    'orders' => 'Ürün(ler)',
    'shipping_address' => 'Kargo Adresi',
    'see_on_maps' => 'Haritada Görüntüle',
    'name' => 'Ürün Adı',
    'price' => 'Tutar',
    'sku_optional' => 'Ürün Kodu (İsteğe Bağlı)',
    'with_storehouse_management' => 'With storehouse management?',
    'quantity' => 'Adet',
    'allow_customer_checkout_when_this_product_out_of_stock' => 'Ürün stokta olmadığında müşteri sipariş verebilsin mi?',
    'address' => 'Adres',
    'phone' => 'Phone',
    'country' => 'Ülke',
    'state' => 'State',
    'city' => 'İlçe',
    'zip_code' => 'Zip code',
    'discount_based_on' => 'Özel İndirim Oluştur',
    'or_coupon_code' => 'Veya Kupon Kodu Kullan',
    'description' => 'Açıklama',
    'how_to_select_configured_shipping' => 'How to select configured shipping?',
    'please_add_customer_information_with_the_complete_shipping_address_to_see_the_configured_shipping_rates' => 'Please add customer information with the complete shipping address to see the configured shipping rates',
    'free_shipping' => 'Ücretsiz Kargo',
    'custom' => 'Custom',
    'email' => 'E-Posta',
    'create_order' => 'Sipariş Oluştıur',
    'close' => 'Kapat',
    'confirm_payment_is_paid_for_this_order' => 'Bu sipariş için ödeme yapıldığını onaylayın',
    'payment_status_of_the_order_is_paid_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Siparişin ödeme durumunu onaylandı olarak ayarlıyorsunuz. Sipariş oluşturulduktan sonra ödeme durumu ve yöntemi değiştirilemez.',
    'select_payment_method' => 'Ödeme Türü',
    'cash_on_delivery_cod' => 'Kapıda Ödeme',
    'bank_transfer' => 'Banka Transferi',
    'paid_amount' => 'Ödenen Tutar',
    'confirm_that_payment_for_this_order_will_be_paid_later' => 'Confirm that payment for this order will be paid later',
    'payment_status_of_the_order_is_pending_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Payment status of the order is Pending. Once the order has been created, you cannot change the payment method or status',
    'pending_amount' => 'Pending amount',
    'update_email' => 'Update email',
    'save' => 'Kaydet',
    'cancel' => 'İptal',
    'create_a_new_order' => 'Yeni sipariş oluştur',
    'search_or_create_new_product' => 'Ürün Eke Veya Yeni Bir Ürün Oluştur',
    'search_or_create_new_customer' => 'Search or create a new customer',
    'discount_description' => 'İndirim Açıklaması',
    'cant_select_out_of_stock_product' => 'Cannot select out of stock product!',
];
