
--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
    accordion_item int(11) unsigned DEFAULT '0',
    card_item int(11) unsigned DEFAULT '0',
    container varchar(16) DEFAULT 'container' NOT NULL,
    background_color varchar(16),
    border_color varchar(16),
    padding varchar(80) DEFAULT '' NOT NULL,
    gutter varchar(80) DEFAULT '' NOT NULL,
    section_border varchar(1),
    ratio varchar(12),
    rounded varchar(1),
    full_link varchar(1),
    thumbnail varchar(1),
    object_fit varchar(18),
    max_height varchar(6),
);



CREATE TABLE accordion_item (
    tt_content int(11) unsigned DEFAULT '0',
    header varchar(255) DEFAULT '' NOT NULL,
    header_layout tinyint(3) unsigned DEFAULT '1' NOT NULL,
    header_position varchar(255) DEFAULT '' NOT NULL,
    header_link varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
);

CREATE TABLE card_item (
    tt_content int(11) unsigned DEFAULT '0',
    header varchar(255) DEFAULT '' NOT NULL,
    header_layout tinyint(3) unsigned DEFAULT '1' NOT NULL,
    header_position varchar(255) DEFAULT '' NOT NULL,
    subheader varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    link varchar(1024) DEFAULT '' NOT NULL,
    image int(11) DEFAULT '0' NOT NULL,
    imageorient varchar(6),
    datetime int(11) default NULL,
    background_color varchar(16),
    border_color varchar(16),
    card_header varchar(1),
    card_footer text,
);