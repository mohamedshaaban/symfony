<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Cyrl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Вредност треба да буде нетачна.',
    'This value should be true.' => 'Вредност треба да буде тачна.',
    'This value should be of type {{ type }}.' => 'Вредност треба да буде типа {{ type }}.',
    'This value should be blank.' => 'Вредност треба да буде празна.',
    'The value you selected is not a valid choice.' => 'Вредност треба да буде једна од понуђених.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Изаберите бар {{ limit }} могућност.|Изаберите бар {{ limit }} могућности.|Изаберите бар {{ limit }} могућности.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Изаберите највише {{ limit }} могућност.|Изаберите највише {{ limit }} могућности.|Изаберите највише {{ limit }} могућности.',
    'One or more of the given values is invalid.' => 'Једна или више вредности је невалидна.',
    'This field was not expected.' => 'Ово поље не очекује.',
    'This field is missing.' => 'Ово поље недостаје.',
    'This value is not a valid date.' => 'Вредност није валидан датум.',
    'This value is not a valid datetime.' => 'Вредност није валидан датум-време.',
    'This value is not a valid email address.' => 'Вредност није валидна адреса електронске поште.',
    'The file could not be found.' => 'Датотека не може бити пронађена.',
    'The file is not readable.' => 'Датотека није читљива.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотека је превелика ({{ size }} {{ suffix }}). Највећа дозвољена величина је {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Миме тип датотеке није валидан ({{ type }}). Дозвољени миме типови су {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Вредност треба да буде {{ limit }} или мање.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Вредност је предугачка. Треба да има {{ limit }} карактер или мање.|Вредност је предугачка. Треба да има {{ limit }} карактера или мање.|Вредност је предугачка. Треба да има {{ limit }} карактера или мање.',
    'This value should be {{ limit }} or more.' => 'Вредност треба да буде {{ limit }} или више.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Вредност је прекратка. Треба да има {{ limit }} карактер или више.|Вредност је прекратка. Треба да има {{ limit }} карактера или више.|Вредност је прекратка. Треба да има {{ limit }} карактера или више.',
    'This value should not be blank.' => 'Вредност не треба да буде празна.',
    'This value should not be null.' => 'Вредност не треба да буде null.',
    'This value should be null.' => 'Вредност треба да буде null.',
    'This value is not valid.' => 'Вредност је невалидна.',
    'This value is not a valid time.' => 'Вредност није валидно време.',
    'This value is not a valid URL.' => 'Вредност није валидан URL.',
    'The two values should be equal.' => 'Обе вредности треба да буду једнаке.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотека је превелика. Највећа дозвољена величина је {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Датотека је превелика.',
    'The file could not be uploaded.' => 'Датотека не може бити отпремљена.',
    'This value should be a valid number.' => 'Вредност треба да буде валидан број.',
    'This file is not a valid image.' => 'Ова датотека није валидна слика.',
    'This is not a valid IP address.' => 'Ово није валидна ИП адреса.',
    'This value is not a valid language.' => 'Вредност није валидан језик.',
    'This value is not a valid locale.' => 'Вредност није валидан локал.',
    'This value is not a valid country.' => 'Вредност није валидна земља.',
    'This value is already used.' => 'Вредност је већ искоришћена.',
    'The size of the image could not be detected.' => 'Величина слике не може бити одређена.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина слике је превелика ({{ width }}px). Најећа дозвољена ширина је {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина слике је премала ({{ width }}px). Најмања дозвољена ширина је {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висина слике је превелика ({{ height }}px). Најећа дозвољена висина је {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висина слике је премала ({{ height }}px). Најмања дозвољена висина је {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Вредност треба да буде тренутна корисничка лозинка.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Вредност треба да има тачно {{ limit }} карактер.|Вредност треба да има тачно {{ limit }} карактера.|Вредност треба да има тачно {{ limit }} карактера.',
    'The file was only partially uploaded.' => 'Датотека је само парцијално отпремљена.',
    'No file was uploaded.' => 'Датотека није отпремљена.',
    'No temporary folder was configured in php.ini.' => 'Привремени директоријум није конфигурисан у php.ini.',
    'Cannot write temporary file to disk.' => 'Немогуће писање привремене датотеке на диск.',
    'A PHP extension caused the upload to fail.' => 'PHP екстензија је проузроковала неуспех отпремања датотеке.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ова колекција треба да садржи {{ limit }} или више елемената.|Ова колекција треба да садржи {{ limit }} или више елемената.|Ова колекција треба да садржи {{ limit }} или више елемената.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ова колекција треба да садржи {{ limit }} или мање елемената.|Ова колекција треба да садржи {{ limit }} или мање елемената.|Ова колекција треба да садржи {{ limit }} или мање елемената.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ова колекција треба да садржи тачно {{ limit }} елемент.|Ова колекција треба да садржи тачно {{ limit }} елемента.|Ова колекција треба да садржи тачно {{ limit }} елемената.',
    'Invalid card number.' => 'Невалидан број картице.',
    'Unsupported card type or invalid card number.' => 'Невалидан број картице или тип картице није подржан.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ово није валидан међународни број банковног рачуна (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ово није валидан ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ово није валидан ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ово није валидан ISBN-10 или ISBN-13.',
    'This value is not a valid ISSN.' => 'Ово није валидан ISSN.',
    'This value is not a valid currency.' => 'Ово није валидна валута.',
    'This value should be equal to {{ compared_value }}.' => 'Ова вредност треба да буде {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ова вредност треба да буде већа од {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ова вредност треба да буде већа или једнака {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ова вредност треба да буде идентична са {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ова вредност треба да буде мања од {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ова вредност треба да буде мања или једнака {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ова вредност не треба да буде једнака {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ова вредност не треба да буде идентична са {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Размера ове слике је превелика ({{ ratio }}). Максимална дозвољена размера је {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Размера ове слике је премала ({{ ratio }}). Минимална очекивана размера је {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Слика је квадратна ({{ width }}x{{ height }}px). Квадратне слике нису дозвољене.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Слика је оријентације пејзажа ({{ width }}x{{ height }}px). Пејзажна оријентација слика није дозвољена.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Слика је оријантације портрета ({{ width }}x{{ height }}px). Портретна оријентација слика није дозвољена.',
    'This form should not contain extra fields.' => 'Овај формулар не треба да садржи додатна поља.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Отпремљена датотека је била превелика. Молим покушајте отпремање мање датотеке.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF вредност је невалидна. Покушајте поново.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Изузетак при аутентификацији.',
    'Authentication credentials could not be found.' => 'Аутентификациони подаци нису пронађени.',
    'Authentication request could not be processed due to a system problem.' => 'Захтев за аутентификацију не може бити обрађен због системских проблема.',
    'Invalid credentials.' => 'Невалидни подаци за аутентификацију.',
    'Cookie has already been used by someone else.' => 'Колачић је већ искоришћен од стране неког другог.',
    'Not privileged to request the resource.' => 'Немате права приступа овом ресурсу.',
    'Invalid CSRF token.' => 'Невалидан CSRF токен.',
    'Digest nonce has expired.' => 'Време криптографског кључа је истекло.',
    'No authentication provider found to support the authentication token.' => 'Аутентификациони провајдер за подршку токена није пронађен.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесија није доступна, истекла је или су колачићи искључени.',
    'No token could be found.' => 'Токен не може бити пронађен.',
    'Username could not be found.' => 'Корисничко име не може бити пронађено.',
    'Account has expired.' => 'Налог је истекао.',
    'Credentials have expired.' => 'Подаци за аутентификацију су истекли.',
    'Account is disabled.' => 'Налог је онемогућен.',
    'Account is locked.' => 'Налог је закључан.',
  ),
  'pagerfanta' => 
  array (
    'previous' => 'Претходна',
    'next' => 'Следећа',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
  'messages' => 
  array (
    'sylius.form.attribute.type' => 'Тип',
    'sylius.form.attribute_type.select' => 'Изаберите',
    'sylius.form.shipping_method.tax_category' => 'Категорија производа',
    'sylius.form.payment.state.header' => 'Стање плаћања',
    'sylius.form.promotion.add_action' => 'Додајте акцију',
    'sylius.form.promotion.add_rule' => 'Додајте правило',
    'sylius.form.promotion_action.type' => 'Тип',
    'sylius.form.promotion_rule.shipping_country_configuration.country' => 'Земља',
    'sylius.form.promotion_rule.type' => 'Тип',
    'sylius.form.address.city' => 'Град',
    'sylius.form.address.company' => 'Компанија',
    'sylius.form.address.country' => 'Земља',
    'sylius.form.address.first_name' => 'Име',
    'sylius.form.address.last_name' => 'Презиме',
    'sylius.form.address.phone_number' => 'Број телефона',
    'sylius.form.address.postcode' => 'Поштански број',
    'sylius.form.address.province' => 'Провинција',
    'sylius.form.country.add_province' => 'Додај провинцију',
    'sylius.form.country.name' => 'Име',
    'sylius.form.country.provinces' => 'Провинције',
    'sylius.form.country.select' => 'Изаберите',
    'sylius.form.country.enabled' => 'Омогућено',
    'sylius.form.province.name' => 'Име',
    'sylius.form.province.abbreviation' => 'Скраћеница',
    'sylius.form.province.select' => 'Изаберите',
    'sylius.form.zone.add_member' => 'Додајте члана',
    'sylius.form.zone.members' => 'Чланови',
    'sylius.form.zone.name' => 'Име',
    'sylius.form.zone.type' => 'Тип',
    'sylius.form.zone.types.country' => 'Земља',
    'sylius.form.zone.types.province' => 'Провинција',
    'sylius.form.zone.types.zone' => 'Зона',
    'sylius.form.zone.scope' => 'Обухват',
    'sylius.form.zone.select' => 'Изаберите',
    'sylius.form.zone.select_scope' => 'Изабери обухват',
    'sylius.form.zone_member.select' => 'Изаберите',
    'sylius.form.user.username' => 'Кросницко име',
    'sylius.form.user_change_password.current' => 'Тренутна лозинка',
    'sylius.form.user_change_password.new' => 'Нова лозинка',
    'sylius.form.user_reset_password.new' => 'Нова лозинка',
    'sylius.form.customer.phone_number' => 'Број телефона',
    'sylius.form.login.username' => 'Кросницко име',
    'sylius.ui.add_action' => 'Додајте акцију',
    'sylius.ui.add_coupon' => 'Додај купон',
    'sylius.ui.add_image' => 'Додај слику',
    'sylius.ui.add_member' => 'Додајте члана',
    'sylius.ui.add_province' => 'Додај провинцију',
    'sylius.ui.add_rule' => 'Додајте правило',
    'sylius.ui.add_to_cart' => 'Додај у корпу',
    'sylius.ui.addressing_step' => 'Адреса',
    'sylius.ui.administration' => 'Администрација',
    'sylius.ui.administration_dashboard' => 'Административна табла',
    'sylius.ui.all_your_addresses' => 'Све Ваше адресе',
    'sylius.ui.assortment' => 'Избор',
    'sylius.ui.availability' => 'Доступност',
    'sylius.ui.available_on' => 'Доступно',
    'sylius.ui.back' => 'Назад',
    'sylius.ui.balance_due' => 'Дуговни салдо',
    'sylius.ui.blocks' => 'Блокови',
    'sylius.ui.cancel' => 'Откажи',
    'sylius.ui.categorization' => 'Категоризација',
    'sylius.ui.choose_file' => 'Фајл',
    'sylius.ui.city' => 'Град',
    'sylius.ui.clear_cart' => 'Испразни корпу',
    'sylius.ui.company' => 'Компанија',
    'sylius.ui.countries' => 'Земље',
    'sylius.ui.country' => 'Земља',
    'sylius.ui.country_details' => 'Детаљи земље',
    'sylius.ui.create' => 'Креирај',
    'sylius.ui.create_a_new_address' => 'Унеси нову адресу',
    'sylius.ui.create_country' => 'Додај земљу',
    'sylius.ui.create_new_coupon' => 'Нови купон',
    'sylius.ui.create_order' => 'Креирајте наруџбину',
    'sylius.ui.create_payment' => 'Креирај плаћање',
    'sylius.ui.create_payment_method' => 'Креирајте метод плаћања',
    'sylius.ui.create_product' => 'Креирај производ',
    'sylius.ui.create_promotion' => 'Креирајте промоцију',
    'sylius.ui.create_shipping_category' => 'Нова категорија слања',
    'sylius.ui.create_shipping_method' => 'Нови начин доставе',
    'sylius.ui.create_tax_category' => 'Креирајте категорију пореза',
    'sylius.ui.create_tax_rate' => 'Креирајте порез',
    'sylius.ui.create_taxon' => 'Креирај категорију',
    'sylius.ui.create_variant' => 'Креирај варијанту',
    'sylius.ui.create_zone' => 'Креирајте зону',
    'sylius.ui.created_at' => 'направљено',
    'sylius.ui.creation_time' => 'Креирано',
    'sylius.ui.current_orders' => 'Тренутне наруџбине',
    'sylius.ui.current_password' => 'Тренутна лозинка',
    'sylius.ui.current_promotions' => 'Тренутне промоције',
    'sylius.ui.dashboard' => 'Командна Табла',
    'sylius.ui.default_billing_address' => 'Подразумевана адреса за плаћање',
    'sylius.ui.default_shipping_address' => 'Подразумевана адреса за слање',
    'sylius.ui.delete' => 'Обриши',
    'sylius.ui.delete_image' => 'Избришите слику',
    'sylius.ui.edit' => 'Измени',
    'sylius.ui.edit_my_address' => 'Измени моју адресу',
    'sylius.ui.editing_country' => 'Измените земљу',
    'sylius.ui.editing_coupon' => 'Ажурирање купона',
    'sylius.ui.editing_order' => 'Ажурирање наруџбине',
    'sylius.ui.editing_payment' => 'Ажурирање плаћања',
    'sylius.ui.editing_payment_method' => 'Ажурирање метода плаћања',
    'sylius.ui.editing_product' => 'Ажурирање производа',
    'sylius.ui.editing_promotion' => 'Ажурирање промоције',
    'sylius.ui.editing_shipping_category' => 'Ажурирање категорије слања',
    'sylius.ui.editing_shipping_method' => 'Ажурирање начина доставе',
    'sylius.ui.editing_tax_category' => 'Ажурирање категорије пореза',
    'sylius.ui.editing_taxon' => 'Ажурирање категоризације',
    'sylius.ui.editing_variant' => 'Ажурирање варијанте',
    'sylius.ui.editing_zone' => 'Ажурирање зоне',
    'sylius.ui.error' => 'Грешка',
    'sylius.ui.existing_customer' => 'Постојећа муштерија',
    'sylius.ui.general_info' => 'Опсте информације',
    'sylius.ui.general_settings' => 'Генерална подешавања',
    'sylius.ui.generate' => 'Генериши',
    'sylius.ui.generate_coupons' => 'Генериши купоне',
    'sylius.ui.generate_variants' => 'Генериши варијанте',
    'sylius.ui.generating_coupons' => 'Генерисање купона',
    'sylius.ui.grand_total' => 'Свеукупно',
    'sylius.ui.home' => 'Почетна страна',
    'sylius.ui.information' => 'Обавештење',
    'sylius.ui.inventory_here_you_can_see_current_stock_levels' => 'Лагер <small>Преглед стања залиха</small>',
    'sylius.ui.inventory_state' => 'стање залиха',
    'sylius.ui.inventory_tracking' => 'Працење залиха',
    'sylius.ui.invoice' => 'Фактура',
    'sylius.ui.items_total' => 'Укупно производа',
    'sylius.ui.last_login' => 'Последње пријављивање',
    'sylius.ui.last_update' => 'последња измена',
    'sylius.ui.last_week_orders' => 'Прошлонедељне поруџбине',
    'sylius.ui.last_week_revenue' => 'Прошлонедељна зарада',
    'sylius.ui.latest_orders' => 'Најновије наруџбине',
    'sylius.ui.list_coupons' => 'Листа купона',
    'sylius.ui.login' => 'Пријави се',
    'sylius.ui.login_button' => 'Пријави се',
    'sylius.ui.logout' => 'Одјави се',
    'sylius.ui.manage' => 'Управљајте',
    'sylius.ui.manage_countries' => 'Управљај земљама',
    'sylius.ui.manage_options' => 'Управљај опцијама',
    'sylius.ui.manage_orders' => 'Управљајте наруџбинама',
    'sylius.ui.manage_products' => 'Управљајте производима',
    'sylius.ui.manage_promotions' => 'Управљајте промоцијама',
    'sylius.ui.manage_shipments' => 'Управљајте пошиљкама',
    'sylius.ui.manage_shipping_categories' => 'Управљајте категоријама слања',
    'sylius.ui.manage_shipping_methods' => 'Управљајте начинима доставе',
    'sylius.ui.manage_tax_categories' => 'Управљајте категоријама пореза',
    'sylius.ui.manage_tax_rates' => 'Управљајте пореским стопама',
    'sylius.ui.manage_zones' => 'Управљајте зонама',
    'sylius.ui.members' => 'Чланови',
    'sylius.ui.method' => 'метод',
    'sylius.ui.modified' => 'измењено',
    'sylius.ui.my_account' => 'Мој налог',
    'sylius.ui.new_country' => 'Нова земља',
    'sylius.ui.new_order' => 'Нова наруџбина',
    'sylius.ui.new_password' => 'Нова лозинка',
    'sylius.ui.new_payment' => 'Ново плаћање',
    'sylius.ui.new_payment_method' => 'Нови метод плаћања',
    'sylius.ui.new_product' => 'Нови производ',
    'sylius.ui.new_product_variant' => 'Нова варијанта производа',
    'sylius.ui.new_promotion' => 'Нова промоција',
    'sylius.ui.new_shipping_category' => 'Нова категорија слања',
    'sylius.ui.new_shipping_method' => 'Нови начин доставе',
    'sylius.ui.new_tax_category' => 'Нова категорија пореза',
    'sylius.ui.new_tax_rate' => 'Нови порез',
    'sylius.ui.new_taxon' => 'Нова категорија',
    'sylius.ui.new_zone' => 'Нова зона',
    'sylius.ui.newest_products' => 'Најновији производи',
    'sylius.ui.next' => 'Следећа',
    'sylius.ui.no_default_billing_address' => 'Нема подразумеване адреса за плаћање',
    'sylius.ui.no_default_shipping_address' => 'Нема подразумеване адреса за слање',
    'sylius.ui.no_description' => 'Нема описа',
    'sylius.ui.no_promotion' => 'Ниједна промоција није додата',
    'sylius.ui.no_shipping_charges' => 'Нису додати трошкови поруџбине',
    'sylius.ui.no_short_description' => '<и>Нема кратког описа</и>',
    'sylius.ui.no_sku' => '<и>Нема СКУ</и>',
    'sylius.ui.no_tax_category' => 'Нема категорије пореза',
    'sylius.ui.no_taxes' => 'Нису додати порези',
    'sylius.ui.number_of_orders' => 'Број наруџбина',
    'sylius.ui.order' => 'наруџбина',
    'sylius.ui.order_details' => 'Детаљи Ваше наруџбине',
    'sylius.ui.order_summary' => 'Резиме наруџбине',
    'sylius.ui.order_value' => 'Вредност наруџбине',
    'sylius.ui.orders' => 'Наруџбине',
    'sylius.ui.out_of_stock' => 'Нема на лагеру',
    'sylius.ui.overview_of_your_store' => 'Преглед продавнице',
    'sylius.ui.pages' => 'Стране',
    'sylius.ui.payment_methods' => 'Опције плаћања',
    'sylius.ui.payment_state' => 'Стање плаћања',
    'sylius.ui.payments' => 'Плаћања',
    'sylius.ui.phone_number' => 'Број телефона',
    'sylius.ui.place_order' => 'Креирајте наруџбину',
    'sylius.ui.placed_at' => 'Постављен на',
    'sylius.ui.postcode' => 'Поштански број',
    'sylius.ui.presentation' => 'Приказ',
    'sylius.ui.previous' => 'Предходна',
    'sylius.ui.product' => 'Производ',
    'sylius.ui.product_details_viewing_product_product' => 'Детаљи производа <small>Преглед производа "<стронг>%product%</стронг>"</small>',
    'sylius.ui.products_categorized_under_taxon_taxon' => 'Производи <small>Категорисани у "%taxon%"</small>',
    'sylius.ui.products_index_of_all_products_in_your_store' => 'Производи <small>Сви производи у продавници</small>',
    'sylius.ui.promotion_details' => 'Детаљи промоције',
    'sylius.ui.promotion_total' => 'Укупно промоције',
    'sylius.ui.promotions' => 'Промоције',
    'sylius.ui.province' => 'Провинција',
    'sylius.ui.provinces' => 'Провинције',
    'sylius.ui.recent_orders' => 'Последње наруџбине',
    'sylius.ui.recent_users' => 'Последњи корисници',
    'sylius.ui.register' => 'Регистрација',
    'sylius.ui.register_button' => 'Регистрација',
    'sylius.ui.retail_price' => 'Продајна цена',
    'sylius.ui.sales' => 'Продаје',
    'sylius.ui.sales_this_month' => 'Продаје',
    'sylius.ui.save' => 'Сачувај',
    'sylius.ui.save_changes' => 'Сачувај измене',
    'sylius.ui.scope' => 'Обухват',
    'sylius.ui.set_as_default_billing_address' => 'Постави подразумевану адресу за плаћање',
    'sylius.ui.set_as_default_shipping_address' => 'Постави подразумевану адресу за слање',
    'sylius.ui.shipment_details' => 'Детаљи пошиљке',
    'sylius.ui.shipment_state' => 'Стање пошиљке',
    'sylius.ui.shipments' => 'Пошиљке',
    'sylius.ui.shipping_charges' => 'Цена испоруке',
    'sylius.ui.shipping_method' => 'Начин доставе',
    'sylius.ui.shipping_method_details' => 'Детаљи налина доставе',
    'sylius.ui.shipping_methods' => 'Начини доставе',
    'sylius.ui.shipping_state' => 'Стање пошиљке',
    'sylius.ui.shipping_total' => 'Укупно испорука',
    'sylius.ui.shop_by' => 'Купујте по',
    'sylius.ui.sign_in_to_the_store_or_create_new_account' => 'Улогујете се <small>или направите нови налог</small>',
    'sylius.ui.slideshow' => 'Галерија',
    'sylius.ui.street' => 'Улица',
    'sylius.ui.success' => 'Успех',
    'sylius.ui.sylius_logo' => 'Сyлиус',
    'sylius.ui.tax_category' => 'Категорија производа',
    'sylius.ui.tax_rate_details' => 'Детаљи пореза',
    'sylius.ui.tax_rates' => 'Пореске стопе',
    'sylius.ui.tax_total' => 'Укупно порези',
    'sylius.ui.taxation_categories' => 'Категорије пореза',
    'sylius.ui.taxation_settings' => 'Подешавања пореза',
    'sylius.ui.taxes' => 'Порези',
    'sylius.ui.there_are_no_images_for_this_product' => 'Нема слика за овај производ',
    'sylius.ui.there_are_no_options_for_this_product' => 'Нема опција за овај производ',
    'sylius.ui.there_are_no_taxons_for_this_product' => 'сyлиус.продуцт.но_таxонс',
    'sylius.ui.total' => 'Укупно',
    'sylius.ui.total_orders' => 'Укупно поруџбина',
    'sylius.ui.total_registrations' => 'Укупно пријављених',
    'sylius.ui.tracking_number' => 'Број за праћење поруџбине',
    'sylius.ui.type' => 'Тип',
    'sylius.ui.updating_tax_rate' => 'Ажурирање пореске стопе',
    'sylius.ui.used' => 'Коришћено',
    'sylius.ui.user_details' => 'Детаљи корисника',
    'sylius.ui.username' => 'Кросницко име',
    'sylius.ui.users_list_of_all_users_registered_in_store' => 'Корисници <small>Листа свих регистрованих корисника</small>',
    'sylius.ui.view_more' => 'Више',
    'sylius.ui.warning' => 'Упозпрење',
    'sylius.ui.welcome_to_your_space' => 'Добро дошли на Вашу страницу',
    'sylius.ui.you_are_customer_since' => 'Ви сте купац још од',
    'sylius.ui.you_have_no_new_orders' => 'Нема нових наруџбина',
    'sylius.ui.your_cart_is_empty' => 'Ваша корпа је празна',
    'sylius.ui.your_products' => 'Ваши производи',
    'sylius.ui.zone_details' => 'Детаљи зоне',
    'sylius.ui.zones' => 'Зоне',
    'sylius.form.promotion_action.add_product_configuration.product' => 'Производ',
    'sylius.form.image.type' => 'Тип',
    'sylius.form.order_filter.payment_state' => 'Стање плаћања',
    'sylius.form.product_variant.tax_category' => 'Категорија производа',
    'sylius.installer.extensions.off' => false,
    'sylius.installer.extensions.on' => true,
    'sylius.installer.settings.off' => false,
    'sylius.installer.settings.on' => true,
    'sylius.form.collection.delete' => 'Обриши',
    'sylius.form.gateway_config.type' => 'Тип',
    'sylius.form.gateway_configuration.paypal.username' => 'Кросницко име',
    'sylius.menu.admin.main.configuration.countries' => 'Земље',
    'sylius.menu.admin.main.configuration.header' => 'Подешавања',
    'sylius.menu.admin.main.configuration.locales' => 'Локални',
    'sylius.menu.admin.main.configuration.payment_methods' => 'Опције плаћања',
    'sylius.menu.admin.main.configuration.shipping_methods' => 'Начини доставе',
    'sylius.menu.admin.main.configuration.tax_categories' => 'Категорија пореза',
    'sylius.menu.admin.main.configuration.tax_rates' => 'Пореске стопе',
    'sylius.menu.admin.main.configuration.zones' => 'Зоне',
    'sylius.menu.admin.main.marketing.promotions' => 'Промоције',
    'sylius.menu.admin.main.sales.header' => 'Продаје',
    'sylius.menu.admin.main.sales.orders' => 'Наруџбине',
    'sylius.menu.shop.account.dashboard' => 'Командна Табла',
  ),
  'validators' => 
  array (
    'sylius.attribute.name.not_blank' => 'Молимо Вас да унесете име особине.',
    'sylius.attribute.name.min_length' => 'Име особине мора бити минимум 1 карактер дужине.|Име особине мора бити минимум {{ limit }} карактер(а) дужине.',
    'sylius.attribute.name.max_length' => 'Име особине не сме бити дуже од 1 карактера.|Име особине не сме бити дуже од {{ limit }} карактера.',
    'sylius.attribute.presentation.not_blank' => 'Молимо Вас унесите приказ особине.',
    'sylius.attribute.presentation.min_length' => 'Приказ особине мора бити дугачак барем 1 карактер.|Приказ особине мора бити дугачак барем {{ limit }} карактер(а).',
    'sylius.attribute.presentation.max_length' => 'Приказ особине не сме бити дужи од 1 карактера.|Приказ особине не сме бити дужи од {{ limit }} карактер(а).',
    'sylius.attribute_value.attribute.not_blank' => 'Молимо Вас изаберите особину.',
    'sylius.attribute_value.value.not_blank' => 'Молимо Вас унесите вредност особине.',
    'sylius.address.city.max_length' => 'Назив града не сме бити дужи од 255 карактера|Назив града не сме бити дужи од 255 карактера.',
    'sylius.address.city.min_length' => 'Назив града мора имати бар 2 карактера|Назив града мора имати бар 2 карактера.',
    'sylius.address.city.not_blank' => 'Молимо Вас унесите град.',
    'sylius.address.country.not_blank' => 'Молим вас изаберите земљу.',
    'sylius.address.country.disabled' => 'Изабрана земља није доступна. Одаберите другу.',
    'sylius.address.first_name.max_length' => 'Име не сме бити дуже од 255 карактера|Име не сме бити дуже од 255 карактера.',
    'sylius.address.first_name.min_length' => 'Име мора имати бар 2 карактера|Име мора имати бар 2 карактера.',
    'sylius.address.first_name.not_blank' => 'Молим вас унесите име.',
    'sylius.address.last_name.max_length' => 'Презиме не сме бити дуже од 255 карактера|Презиме не сме бити дуже од 255 карактера.',
    'sylius.address.last_name.min_length' => 'Презиме мора имати бар 2 карактера|Презиме мора имати бар 2 карактера.',
    'sylius.address.last_name.not_blank' => 'Молимо унесите презиме.',
    'sylius.address.postcode.max_length' => 'Поштански број не сме бити дужи од 255 карактера|Поштански број не сме бити дужи од 255 карактера.',
    'sylius.address.postcode.min_length' => 'Поштански број мора имати бар 2 карактера|Поштански број мора имати бар 2 карактера.',
    'sylius.address.postcode.not_blank' => 'Молимо унесите поштански број.',
    'sylius.address.province.valid' => 'Молимо изаберите исправну регију.',
    'sylius.address.street.max_length' => 'Назив улице не сме бити дужи од 255 карактера|Назив улице не сме бити дужи од 255 карактера.',
    'sylius.address.street.min_length' => 'Назив улице мора имати бар 2 карактера|Назив улице мора имати бар 2 карактера.',
    'sylius.address.street.not_blank' => 'Молимо унесите назив улице.',
    'sylius.address.not_shippable' => 'Ова адреса није исправно одредиште за доставу.',
    'sylius.province.name.max_length' => 'Назив регије не сме бити дужи од 255 карактера|Назив регије не сме бити дужи од 255 карактера.',
    'sylius.province.name.min_length' => 'Назив регије мора имати бар 2 карактера|Назив регије мора имати бар 2 карактера.',
    'sylius.province.name.not_blank' => 'Молимо унесите назив регије.',
    'sylius.zone.members.min_count' => 'Молимо додајте бар {{ limit }} члана области.',
    'sylius.zone.name.max_length' => 'Назив области не сме бити дужи од 255 карактера|Назив области не сме бити дужи од 255 карактера.',
    'sylius.zone.name.not_blank' => 'Молимо унесите назив области.',
  ),
  'flashes' => 
  array (
    'sylius.resource.create' => '%resource% је успешно креиран.',
    'sylius.resource.update' => '%resource% је успешно ажуриран.',
    'sylius.resource.delete' => '%resource% је успешно обрисан.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueSr);
$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogueSr->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
