CREATE TABLE IF NOT EXISTS products (
  id int(10) NOT NULL auto_increment,
  title varchar(255) collate utf8_unicode_ci NOT NULL,
  description text collate utf8_unicode_ci,
  price decimal(12,5) NOT NULL,
  sku varchar(255) collate utf8_unicode_ci NOT NULL,
  image varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;