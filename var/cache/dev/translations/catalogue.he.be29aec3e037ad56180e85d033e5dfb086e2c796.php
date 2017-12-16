<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('he', array (
  'validators' => 
  array (
    'This value should be false.' => 'הערך צריך להיות שקר.',
    'This value should be true.' => 'הערך צריך להיות אמת.',
    'This value should be of type {{ type }}.' => 'הערך צריך להיות מסוג {{ type }}.',
    'This value should be blank.' => 'הערך צריך להיות ריק.',
    'The value you selected is not a valid choice.' => 'הערך שבחרת אינו חוקי.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'אתה צריך לבחור לפחות {{ limit }} אפשרויות.|אתה צריך לבחור לפחות {{ limit }} אפשרויות.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.|אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.',
    'One or more of the given values is invalid.' => 'אחד או יותר מהערכים אינו חוקי.',
    'This field was not expected.' => 'שדה זה לא היה צפוי',
    'This field is missing.' => 'שדה זה חסר.',
    'This value is not a valid date.' => 'הערך אינו תאריך חוקי.',
    'This value is not a valid datetime.' => 'הערך אינו תאריך ושעה חוקיים.',
    'This value is not a valid email address.' => 'כתובת המייל אינה תקינה.',
    'The file could not be found.' => 'הקובץ לא נמצא.',
    'The file is not readable.' => 'לא ניתן לקרוא את הקובץ.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי ({{ size }} {{ suffix }}). הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'סוג MIME של הקובץ אינו חוקי ({{ type }}). מותרים סוגי MIME {{ types }}.',
    'This value should be {{ limit }} or less.' => 'הערך צריל להכיל {{ limit }} תווים לכל היותר.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.|הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value should be {{ limit }} or more.' => 'הערך צריך להכיל {{ limit }} תווים לפחות.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'הערך קצר מידיץ הוא צריך להכיל {{ limit }} תווים לפחות.|הערך קצר מידיץ הוא צריך להכיל {{ limit }} תווים לפחות.',
    'This value should not be blank.' => 'הערך לא אמור להיות ריק.',
    'This value should not be null.' => 'הערך לא אמור להיות ריק.',
    'This value should be null.' => 'הערך צריך להיות ריק.',
    'This value is not valid.' => 'הערך אינו חוקי.',
    'This value is not a valid time.' => 'הערך אינו זמן תקין.',
    'This value is not a valid URL.' => 'זאת אינה כתובת אתר תקינה.',
    'The two values should be equal.' => 'שני הערכים צריכים להיות שווים.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי. הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'הקובץ גדול מדי.',
    'The file could not be uploaded.' => 'לא ניתן לעלות את הקובץ.',
    'This value should be a valid number.' => 'הערך צריך להיות מספר חוקי.',
    'This file is not a valid image.' => 'הקובץ הזה אינו תמונה תקינה.',
    'This is not a valid IP address.' => 'זו אינה כתובת IP חוקית.',
    'This value is not a valid language.' => 'הערך אינו שפה חוקית.',
    'This value is not a valid locale.' => 'הערך אינו אזור תקף.',
    'This value is not a valid country.' => 'הערך אינו ארץ חוקית.',
    'This value is already used.' => 'הערך כבר בשימוש.',
    'The size of the image could not be detected.' => 'לא ניתן לקבוע את גודל התמונה.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'רוחב התמונה גדול מדי ({{ width }}px). הרוחב המקסימלי הוא {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'רוחב התמונה קטן מדי ({{ width }}px). הרוחב המינימלי הוא {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'גובה התמונה גדול מדי ({{ height }}px). הגובה המקסימלי הוא {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'גובה התמונה קטן מדי ({{ height }}px). הגובה המינימלי הוא {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'הערך צריך להיות סיסמת המשתמש הנוכחי.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'הערך צריך להיות בדיוק {{ limit }} תווים.|הערך צריך להיות בדיוק {{ limit }} תווים.',
    'The file was only partially uploaded.' => 'הקובץ הועלה באופן חלקי.',
    'No file was uploaded.' => 'הקובץ לא הועלה.',
    'No temporary folder was configured in php.ini.' => 'לא הוגדרה תיקייה זמנית ב php.ini.',
    'Cannot write temporary file to disk.' => 'לא ניתן לכתוב קובץ זמני לדיסק.',
    'A PHP extension caused the upload to fail.' => 'סיומת PHP גרם להעלאה להיכשל.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או יותר.|האוסף אמור להכיל {{ limit }} אלמנטים או יותר.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או פחות.|האוסף אמור להכיל {{ limit }} אלמנטים או פחות.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.|האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.',
    'Invalid card number.' => 'מספר הכרטיס אינו חוקי.',
    'Unsupported card type or invalid card number.' => 'סוג הכרטיס אינו נתמך או לא חוקי.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'This form should not contain extra fields.' => 'הטופס לא צריך להכיל שדות נוספים.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'הקובץ שהועלה גדול מדי. נסה להעלות קובץ קטן יותר.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'אסימון CSRF אינו חוקי. אנא נסה לשלוח שוב את הטופס.',
    'sylius.product.sku.not_blank' => 'אנא הזינו מספר קטלוגי (מק"ט, SKU) של המוצר.',
    'sylius.product.sku.unique' => 'מק"ט מוצר SKU חייב להיות ייחודי.',
    'sylius.product.name.min_length' => 'אורך שם המוצר חייב להיות לפחות 1 תו. | אורך שם המוצר עד {{ limit }} תווים.',
    'sylius.address.city.max_length' => 'שם העיר אינו יכול להיות ארוך מ- 255 תווים|שם העיר אינו יכול להיות ארוך מ- 255 תווים.',
    'sylius.address.city.not_blank' => 'יש להזין את שם העיר.',
    'sylius.address.country.not_blank' => 'אנא לבחור מדינה.',
    'sylius.address.country.disabled' => 'המדינה הנבחרה אינה זמינה. נא בחר אחרת.',
    'sylius.address.first_name.not_blank' => 'אנא הזינו שם פרטי.',
    'sylius.address.last_name.not_blank' => 'אנא הזינו שם משפחה.',
    'sylius.address.postcode.not_blank' => 'אנא הזינו מיקוד.',
    'sylius.address.province.valid' => 'נא בחר במחוז המתאים.',
    'sylius.address.street.min_length' => 'אורך שם של רחוב לפחות 2 תווים | אורך שם של רחוב לפחות 2 תווים.',
    'sylius.address.street.not_blank' => 'נא לבחור שם רחוב.',
    'sylius.address.not_shippable' => 'כתובת זו אינה יעד משלוח תקנים.',
    'sylius.country.code.not_blank' => 'אנא הזינו קוד ISO של מדינה.',
    'sylius.country.code.regex' => 'קוד מדינה יכול רק להיות מורכבת מאותיות, מספרים, מקפים וקווים תחתונים.',
    'sylius.country.code.unique' => 'קוד ISO של מדינה חייב להיות ייחודי.',
    'sylius.province.code.not_blank' => 'אנא הזינו קוד מחוז.',
    'sylius.province.code.unique' => 'קוד המחוז חייב להיות ייחודי.',
    'sylius.customer.first_name.max' => 'ארוך שם פרטי עד {{ limit }} תווים.',
    'sylius.customer.first_name.min' => 'שם פרטי חייב להיות באורך לפחות {{ limit }} תווים.',
    'sylius.customer.first_name.not_blank' => 'אנא הזינו שם הפרטי.',
    'sylius.customer.last_name.max' => 'אורך שם משפחה עד {{ limit }} תווים.',
    'sylius.customer.email.invalid' => 'כתובת דואר האלקטרוני אינה תקנית.',
    'sylius.customer.email.unique' => 'כתובת דואר אלרקטרוני כבר נמצא בשימוש.',
    'sylius.channel.base_currency.not_blank' => 'אנא הזינו מטבע ראשי של הארוץ.',
    'sylius.channel.default_locale.not_blank' => 'אנא הזינו הגדרות איזור (Locale) ברירת מחדל של ארוץ.',
    'sylius.channel.contact_email.invalid' => 'כתובת דואר האלקטרוני אינה תקנית.',
    'sylius.channel.contact_email.max' => 'דואר אלקטרוני אינו יכול להיות יותר מ-{{ limit }} תווים.',
    'sylius.contact.email.invalid' => 'כתובת דואר האלקטרוני אינה תקנית.',
    'sylius.contact.email.not_blank' => 'אנא הזן את כתובת דואר האלקטרוני שלך.',
    'sylius.contact.message.not_blank' => 'אנא הזינו הודעה.',
    'sylius.currency.enabled.cannot_disable_base' => 'לא ניתן לכבות את מטבע הראשי.',
    'sylius.customer.currency_code.not_valid' => 'קוד המטבע אינו תקני.',
    'sylius.order.currency_code.not_valid' => 'קוד המטבע אינו תקני.',
    'sylius.order.shipping_method_eligibility' => 'המוצר אינו מתאים למשלוח באמצעות %shippingMethodName%. אנא בחרו שיטת משלוח אחרת.',
    'sylius.user.email.unique' => 'כתובת דואר אלרקטרוני כבר נמצא בשימוש.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'flashes' => 
  array (
    'sylius.product_variant.generate' => 'גרסאות המוצר נוצרו בהצלחה.',
    'sylius.user.expire_password_reset_token' => 'פג תוקף לאסימון איפוס סיסמה.',
    'sylius.user.change_password' => 'סיסמה הוחלפה בהצלחה!',
    'sylius.user.reset_password' => 'תהליך שחזור סיסמה הסתיים בהצלחה!',
    'sylius.user.reset_password_request' => 'אם הדוא"ל שציינתם קיים במערכת, שלחנו לכם הוראות כיצד לאפס את הסיסמה.',
    'sylius.user.verify_email' => 'כתובת הדוא"ל שלך אומתה בהצלחה.',
    'sylius.user.verify_email_by_invalid_token' => 'אסימון אימות אינו חוקי.',
    'sylius.user.verify_email_request' => 'הודעת עם קישור אימות נשלחה לכתובת הדוא"ל לשלך.',
    'sylius.user.verify_no_user' => 'אין משתמשים המחוברים באותה עת.',
    'sylius.user.verify_verified_email' => 'הדוא"ל שלך כבר מאומת.',
    'sylius.channel.delete_error' => 'אין אפשרות למחוק את הערוץ. חובה להגדיר לפחות ערוץ אחד זמין.',
    'sylius.checkout.complete_error' => 'הזמנתכם לא נשלחה עקב בעיה לא צפויה. אנא נסו לבצע שוב את ההזמנה.',
    'sylius.contact.request_success' => 'בקשתכם להתקשרות נשלחה בהצלחה.',
    'sylius.customer.add_address' => 'הכתובת נוספה בהצלחה.',
    'sylius.customer.set_address_as_default' => 'כתובת הוגדרה כברירת מחדל.',
    'sylius.order.promotion_integrity' => 'תוקפו של מבצע %promotionName% פג.',
    'sylius.product.out_of_stock' => 'נשארו רק %quantity% יחידות של מוצר זה במלאי.',
    'sylius.review.accept' => 'סקירה התקבלה בהצלחה.',
    'sylius.review.reject' => 'סקירה נדחתה בהצלחה.',
    'sylius.review.wait_for_the_acceptation' => 'סקירה שלך מחכה לביקורת.',
  ),
  'messages' => 
  array (
    'sylius.form.product.name' => 'שם',
    'sylius.form.product.description' => 'תיאור',
    'sylius.form.product.attributes' => 'מאפיינים',
    'sylius.form.product.options' => 'אפשרויות',
    'sylius.form.product.meta_keywords' => 'מילות מפתח',
    'sylius.form.product.meta_description' => 'תיאור Meta',
    'sylius.form.product.slug' => 'שם מקוצר לשימוש בקישורים',
    'sylius.form.product.taxons' => 'קבוצות טקסונומיות',
    'sylius.form.product_variant.name' => 'שם גרסה',
    'sylius.form.association_type.name' => 'שם מקשור',
    'sylius.form.association_type.translations' => 'תרגומים',
    'sylius.form.association.type' => 'סוג משקור',
    'sylius.form.association.product' => 'מוצר מקושר',
    'sylius.form.variant.name' => 'שם גירסה',
    'sylius.form.option.name' => 'שם הגדרה',
    'sylius.form.option.position' => 'מיקום',
    'sylius.form.option.values' => 'ערכים אפשריים',
    'sylius.form.option_value.add_value' => 'הוסיפו ערך',
    'sylius.form.option_value.value' => 'ערך',
    'sylius.form.attribute.type' => 'סוג',
    'sylius.form.attribute_type.select' => 'בחירה',
    'sylius.form.promotion_action.type' => 'סוג',
    'sylius.form.promotion_rule.shipping_country_configuration.country' => 'מדינה',
    'sylius.form.promotion_rule.taxonomy_configuration.taxons' => 'קבוצות טקסונומיות',
    'sylius.form.promotion_rule.type' => 'סוג',
    'sylius.form.address.city' => 'עיר',
    'sylius.form.address.company' => 'חברה',
    'sylius.form.address.country' => 'מדינה',
    'sylius.form.address.first_name' => 'שם פרטי',
    'sylius.form.address.last_name' => 'שם משפחה',
    'sylius.form.address.phone_number' => 'מספר טלפון',
    'sylius.form.address.postcode' => 'מיקוד',
    'sylius.form.address.street' => 'רחוב',
    'sylius.form.address.province' => 'מחוז',
    'sylius.form.address.zone' => 'איזור',
    'sylius.form.country.add_province' => 'הוסף/י מחוז',
    'sylius.form.country.name' => 'שם',
    'sylius.form.country.provinces' => 'מחוזות',
    'sylius.form.country.select' => 'בחירה',
    'sylius.form.country.enabled' => 'מופעל',
    'sylius.form.province.name' => 'שם',
    'sylius.form.province.abbreviation' => 'ראשי תיבות או שם מקוצר של מחוז',
    'sylius.form.province.select' => 'בחירה',
    'sylius.form.zone.add_member' => 'הוסיפו חבר/ה',
    'sylius.form.zone.members' => 'חברים',
    'sylius.form.zone.name' => 'שם',
    'sylius.form.zone.type' => 'סוג',
    'sylius.form.zone.types.country' => 'מדינה',
    'sylius.form.zone.types.province' => 'מחוז',
    'sylius.form.zone.types.zone' => 'איזור',
    'sylius.form.zone.scope' => 'תחום',
    'sylius.form.zone.scopes.all' => 'כל התחומים',
    'sylius.form.zone.select' => 'בחירה',
    'sylius.form.zone.select_scope' => 'בחרו תחום',
    'sylius.form.zone_member.select' => 'בחירה',
    'sylius.form.taxon.slug' => 'שם מקוצר לשימוש בקישורים',
    'sylius.form.user.email' => 'דוא"ל',
    'sylius.form.user.enabled' => 'הופעל',
    'sylius.form.user.password.label' => 'סיסמה',
    'sylius.form.user.password.confirmation' => 'אימות',
    'sylius.form.user.remember_me' => 'זכור אותי',
    'sylius.form.user.shipping_address' => 'כתובת למשלוח',
    'sylius.form.user.username' => 'שם משתמש',
    'sylius.form.user_filter.query' => 'חפש',
    'sylius.form.user_change_password.confirmation' => 'אישור',
    'sylius.form.user_change_password.current' => 'סיסמה נוכחית',
    'sylius.form.user_change_password.new' => 'סיסמה חדשה',
    'sylius.form.user_reset_password.confirmation' => 'אימות',
    'sylius.form.user_reset_password.new' => 'סיסמה חדשה',
    'sylius.form.customer.first_name' => 'שם פרטי',
    'sylius.form.customer.group' => 'קבוצה',
    'sylius.form.customer.last_name' => 'שם משפחה',
    'sylius.form.customer.email' => 'דואר אלקטרוני',
    'sylius.form.customer.phone_number' => 'מספר טלפון',
    'sylius.form.customer.gender' => 'מין',
    'sylius.form.customer.birthday' => 'תאריך לידה',
    'sylius.form.customer.billing_address' => 'כתובת לחשבונית',
    'sylius.form.customer.different_billing_address' => 'השתמש בכתובת שונה על חשבונית?',
    'sylius.form.customer.only_customer_registration' => 'צור חשבון?',
    'sylius.form.customer.subscribed_to_newsletter' => 'הצטרף לרשימת הדיוור',
    'sylius.form.customer_group.name' => 'שם',
    'sylius.form.customer_group.roles' => 'תפקידים',
    'sylius.gender.unknown' => 'לא ידוע',
    'sylius.gender.male' => 'זכר',
    'sylius.gender.female' => 'נקבה',
    'sylius.form.login.remember_me' => 'זכור אותי',
    'sylius.ui.add_member' => 'הוסיפו חבר/ה',
    'sylius.ui.add_province' => 'הוסף/י מחוז',
    'sylius.ui.attributes' => 'מאפיינים',
    'sylius.ui.author' => 'מחבר',
    'sylius.ui.city' => 'עיר',
    'sylius.ui.comment' => 'תגובה',
    'sylius.ui.company' => 'חברה',
    'sylius.ui.confirmation' => 'אישור',
    'sylius.ui.confirmation_title' => 'אישור',
    'sylius.ui.country' => 'מדינה',
    'sylius.ui.current_password' => 'סיסמה נוכחית',
    'sylius.ui.members' => 'חברים',
    'sylius.ui.new_password' => 'סיסמה חדשה',
    'sylius.ui.options' => 'אפשרויות',
    'sylius.ui.phone_number' => 'מספר טלפון',
    'sylius.ui.postcode' => 'מיקוד',
    'sylius.ui.province' => 'מחוז',
    'sylius.ui.provinces' => 'מחוזות',
    'sylius.ui.rating' => 'דירוג',
    'sylius.ui.rejected' => 'נדחה',
    'sylius.ui.remember_me' => 'זכור אותי',
    'sylius.ui.scope' => 'תחום',
    'sylius.ui.status' => 'מצב',
    'sylius.ui.street' => 'רחוב',
    'sylius.ui.taxons' => 'קבוצות טקסונומיות',
    'sylius.ui.type' => 'סוג',
    'sylius.form.review.author' => 'מחבר',
    'sylius.form.review.comment' => 'תגובה',
    'sylius.form.review.header' => 'הוסף סקירה',
    'sylius.form.review.rating' => 'דירוג',
    'sylius.form.review.status.approved' => 'אושר',
    'sylius.form.review.status.label' => 'מצב',
    'sylius.form.review.status.new' => 'חדש',
    'sylius.form.review.status.rejected' => 'נדחה',
    'sylius.form.review.submit' => 'שלח',
    'sylius.form.review.title' => 'כותרת',
    'sylius.form.image.type' => 'סוג',
    'sylius.form.promotion_rule.has_taxon.taxons' => 'קבוצות טקסונומיות',
    'sylius.installer.extensions.off' => false,
    'sylius.installer.extensions.on' => true,
    'sylius.installer.settings.off' => false,
    'sylius.installer.settings.on' => true,
    'sylius.form.gateway_config.type' => 'סוג',
    'sylius.menu.admin.main.catalog.attributes' => 'מאפיינים',
    'sylius.menu.admin.main.catalog.options' => 'אפשרויות',
    'sylius.menu.admin.main.catalog.taxons' => 'קבוצות טקסונומיות',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
