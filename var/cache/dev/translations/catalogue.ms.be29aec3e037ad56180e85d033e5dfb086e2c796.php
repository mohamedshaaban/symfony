<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ms', array (
  'messages' => 
  array (
    'sylius.form.attribute.type' => 'Jenis',
    'sylius.form.attribute_type.select' => 'Pilih',
    'sylius.form.promotion_action.type' => 'Jenis',
    'sylius.form.promotion_rule.shipping_country_configuration.country' => 'Negara',
    'sylius.form.promotion_rule.type' => 'Jenis',
    'sylius.form.address.city' => 'Bandar',
    'sylius.form.address.company' => 'Syarikat',
    'sylius.form.address.country' => 'Negara',
    'sylius.form.address.first_name' => 'Nama Pertama',
    'sylius.form.address.last_name' => 'Nama Akhir',
    'sylius.form.address.phone_number' => 'Nombor Telefon',
    'sylius.form.address.postcode' => 'Poskod',
    'sylius.form.address.street' => 'Alamat',
    'sylius.form.address.province' => 'Daerah',
    'sylius.form.address.zone' => 'Zon',
    'sylius.form.country.add_province' => 'Tambah Daerah',
    'sylius.form.country.name' => 'Nama',
    'sylius.form.country.provinces' => 'Daerah-Daerah',
    'sylius.form.country.select' => 'Pilih',
    'sylius.form.country.enabled' => 'Dibenarkan',
    'sylius.form.province.name' => 'Nama',
    'sylius.form.province.abbreviation' => 'Singkatan',
    'sylius.form.province.select' => 'Pilih',
    'sylius.form.zone.add_member' => 'Tambah ahli',
    'sylius.form.zone.members' => 'Ahli',
    'sylius.form.zone.name' => 'Nama',
    'sylius.form.zone.type' => 'Jenis',
    'sylius.form.zone.types.country' => 'Negara',
    'sylius.form.zone.types.province' => 'Wilayah',
    'sylius.form.zone.types.zone' => 'Zon',
    'sylius.form.zone.scope' => 'Skop',
    'sylius.form.zone.scopes.all' => 'Semua',
    'sylius.form.zone.select' => 'Pilih',
    'sylius.form.zone.select_scope' => 'Pilih skop',
    'sylius.form.zone_member.select' => 'Pilih',
    'sylius.form.customer.phone_number' => 'Nombor Telefon',
    'sylius.ui.add_member' => 'Tambah ahli',
    'sylius.ui.add_province' => 'Tambah Daerah',
    'sylius.ui.city' => 'Bandar',
    'sylius.ui.company' => 'Syarikat',
    'sylius.ui.country' => 'Negara',
    'sylius.ui.members' => 'Ahli',
    'sylius.ui.phone_number' => 'Nombor Telefon',
    'sylius.ui.postcode' => 'Poskod',
    'sylius.ui.province' => 'Daerah',
    'sylius.ui.provinces' => 'Daerah-Daerah',
    'sylius.ui.scope' => 'Skop',
    'sylius.ui.type' => 'Jenis',
    'sylius.form.image.type' => 'Jenis',
    'sylius.installer.extensions.off' => false,
    'sylius.installer.extensions.on' => true,
    'sylius.installer.settings.off' => false,
    'sylius.installer.settings.on' => true,
    'sylius.form.gateway_config.type' => 'Jenis',
  ),
  'validators' => 
  array (
    'sylius.address.city.max_length' => 'Nama bandar tidak boleh melebihi 255 aksara|Nama bandar tidak boleh melebihi 255 aksara.',
    'sylius.address.city.min_length' => 'Nama bandar mestilah mepunyai sekurang-kurangnya 2 aksara|Nama bandar mestilah mepunyai sekurang-kurangnya 2 aksara.',
    'sylius.address.city.not_blank' => 'Sila masukkan bandar.',
    'sylius.address.country.not_blank' => 'Sila pilih negara.',
    'sylius.address.country.disabled' => 'Negara yang dipilih telah dilumpuhkan. Sila pilih negara lain.',
    'sylius.address.first_name.max_length' => 'Nama pertama tidak boleh melebihi 255 aksara|Nama pertama tidak boleh melebihi 255 aksara.',
  ),
));

$catalogueEn_US = new MessageCatalogue('en_US', array (
));
$catalogue->addFallbackCatalogue($catalogueEn_US);

return $catalogue;
