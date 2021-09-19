<?php

namespace ShopUp\Acfoop;

abstract class FieldType
{
	/** BASIC **/
	const BUTTON = 'Button';
	const EMAIL = 'Email';
	const HIDDEN = 'Hidden';
	const NUMBER = 'Number';
	const PASSWORD = 'Password';
	const RANGE = 'Range';
	const SLUG = 'Slug';
	const TEXT = 'Text';
	const TEXT_AREA = 'Text Area';
	const URL = 'Url';

	/** CONTENT **/
	const CODE_EDITOR = 'Code Editor';
	const FILE = 'File';
	const GALLERY = 'Gallery';
	const IMAGE = 'Image';
	const WYSIWYG_EDITOR = 'Wysiwyg Editor';
	const OEMBEDED = 'oEmbed';

	/** CHOICE **/
	const BUTTON_GROUP = 'Button Group';
	const CHECKBOX = 'Checkbox';
	const RADIO_BUTTON = 'Radio Button';
	const SELECT = 'Select';
	const TRUE_FALSE = 'True / False';

	/** RELATIONAL **/
	const ADVANCED_LINK = 'Advanced Link';
	const FORMS = 'Forms';
	const LINK = 'Link';
	const PAGE_LINK = 'Page Link';
	const POST_OBJECT = 'Post Object';
	const RELATIONSHIP = 'Relationship';
	const TAXONOMY = 'Taxonomy';
	const TAXONOMY_TERMS = 'Taxonomy Terms';
	const USER = 'User';

	/** JQUERY **/
	const COLOR_PICKER = 'Color Picker';
	const DATE_PICKER = 'Date Picker';
	const DATE_TIME_PICKER = 'Date Time Picker';
	const GOOGLE_MAP = 'Google Map';
	const GOOGLE_RECAPTCHA = 'Google reCaptcha';
	const TIME_PICKER = 'Time Picker';

	/** WORDPRESS **/
	const POST_STATUSES = 'Post Statuses';
	const POST_TYPES = 'Post Types';
	const TAXONOMIES = 'Taxonomies';
	const USER_ROLES = 'User Roles';

	/** LAYOUT **/
	const ACCORDION = 'Accordion';
	const CLONE = 'Clone';
	const COLUMN = 'Column';
	const DYNAMIC_MESSAGE = 'Dynamic Message';
	const FLEXIBLE_CONTENT = 'Flexible Content';
	const GROUP = 'Group';
	const MESSAGE = 'Message';
	const REPEATER = 'Repeater';
	const TAB = 'Tab';
}
