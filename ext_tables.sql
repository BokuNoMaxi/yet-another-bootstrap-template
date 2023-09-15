
--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    simple_item int(11) unsigned DEFAULT '0',
    container varchar(16) DEFAULT 'container' NOT NULL,
    background_color varchar(15),
    padding varchar(80) DEFAULT '' NOT NULL,
    gutter varchar(80) DEFAULT '' NOT NULL,
    section_border varchar(1),
);



CREATE TABLE simple_item (
    tt_content int(11) unsigned DEFAULT '0',
    item_type varchar(255) DEFAULT '' NOT NULL,
    header varchar(255) DEFAULT '' NOT NULL,
    header_layout tinyint(3) unsigned DEFAULT '1' NOT NULL,
    header_position varchar(255) DEFAULT '' NOT NULL,
    header_link varchar(255) DEFAULT '' NOT NULL,
    subheader varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    link varchar(1024) DEFAULT '' NOT NULL,
    image int(11) DEFAULT '0' NOT NULL,
    assets int(11) DEFAULT '0' NOT NULL,
    date datetime default NULL
);

