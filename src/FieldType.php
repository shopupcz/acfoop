<?php

namespace ShopUp\WordPress\Acfoop;

use ShopUp\WordPress\Acfoop\Fields\Basic\Button;
use ShopUp\WordPress\Acfoop\Fields\Basic\Email;
use ShopUp\WordPress\Acfoop\Fields\Basic\Hidden;
use ShopUp\WordPress\Acfoop\Fields\Basic\Number;
use ShopUp\WordPress\Acfoop\Fields\Basic\Password;
use ShopUp\WordPress\Acfoop\Fields\Basic\Range;
use ShopUp\WordPress\Acfoop\Fields\Basic\Slug;
use ShopUp\WordPress\Acfoop\Fields\Basic\Text;
use ShopUp\WordPress\Acfoop\Fields\Basic\TextArea;
use ShopUp\WordPress\Acfoop\Fields\Basic\Url;
use ShopUp\WordPress\Acfoop\Fields\Choice\ButtonGroup;
use ShopUp\WordPress\Acfoop\Fields\Choice\Checkbox;
use ShopUp\WordPress\Acfoop\Fields\Choice\RadioButton;
use ShopUp\WordPress\Acfoop\Fields\Choice\Select;
use ShopUp\WordPress\Acfoop\Fields\Choice\TrueFalse;
use ShopUp\WordPress\Acfoop\Fields\Content\CodeEditor;
use ShopUp\WordPress\Acfoop\Fields\Content\File;
use ShopUp\WordPress\Acfoop\Fields\Content\Gallery;
use ShopUp\WordPress\Acfoop\Fields\Content\Image;
use ShopUp\WordPress\Acfoop\Fields\Content\OEmbed;
use ShopUp\WordPress\Acfoop\Fields\Content\WysiwygEditor;
use ShopUp\WordPress\Acfoop\Fields\Jquery\ColorPicker;
use ShopUp\WordPress\Acfoop\Fields\Jquery\DatePicker;
use ShopUp\WordPress\Acfoop\Fields\Jquery\DateTimePicker;
use ShopUp\WordPress\Acfoop\Fields\Jquery\GoogleMap;
use ShopUp\WordPress\Acfoop\Fields\Jquery\GoogleReCaptcha;
use ShopUp\WordPress\Acfoop\Fields\Jquery\TimePicker;
use ShopUp\WordPress\Acfoop\Fields\Layout\Accordion;
use ShopUp\WordPress\Acfoop\Fields\Layout\CloneField;
use ShopUp\WordPress\Acfoop\Fields\Layout\Column;
use ShopUp\WordPress\Acfoop\Fields\Layout\DynamicMessage;
use ShopUp\WordPress\Acfoop\Fields\Layout\FlexibleContent;
use ShopUp\WordPress\Acfoop\Fields\Layout\Group;
use ShopUp\WordPress\Acfoop\Fields\Layout\Message;
use ShopUp\WordPress\Acfoop\Fields\Layout\Repeater;
use ShopUp\WordPress\Acfoop\Fields\Layout\Tab;
use ShopUp\WordPress\Acfoop\Fields\Relational\AdvancedLink;
use ShopUp\WordPress\Acfoop\Fields\Relational\Forms;
use ShopUp\WordPress\Acfoop\Fields\Relational\Link;
use ShopUp\WordPress\Acfoop\Fields\Relational\PageLink;
use ShopUp\WordPress\Acfoop\Fields\Relational\PostObject;
use ShopUp\WordPress\Acfoop\Fields\Relational\Relationship;
use ShopUp\WordPress\Acfoop\Fields\Relational\Taxonomy;
use ShopUp\WordPress\Acfoop\Fields\Relational\TaxonomyTerms;
use ShopUp\WordPress\Acfoop\Fields\Relational\User;
use ShopUp\WordPress\Acfoop\Fields\WordPress\PostStatuses;
use ShopUp\WordPress\Acfoop\Fields\WordPress\PostTypes;
use ShopUp\WordPress\Acfoop\Fields\WordPress\Taxonomies;
use ShopUp\WordPress\Acfoop\Fields\WordPress\UserRoles;

abstract class FieldType
{
	/** BASIC **/
	const BUTTON = Button::class;
	const EMAIL = Email::class;
	const HIDDEN = Hidden::class;
	const NUMBER = Number::class;
	const PASSWORD = Password::class;
	const RANGE = Range::class;
	const SLUG = Slug::class;
	const TEXT = Text::class;
	const TEXT_AREA = TextArea::class;
	const URL = Url::class;

	/** CONTENT **/
	const CODE_EDITOR = CodeEditor::class;
	const FILE = File::class;
	const GALLERY = Gallery::class;
	const IMAGE = Image::class;
	const WYSIWYG_EDITOR = WysiwygEditor::class;
	const OEMBEDED = OEmbed::class;

	/** CHOICE **/
	const BUTTON_GROUP = ButtonGroup::class;
	const CHECKBOX = Checkbox::class;
	const RADIO_BUTTON = RadioButton::class;
	const SELECT = Select::class;
	const TRUE_FALSE = TrueFalse::class;

	/** RELATIONAL **/
	const ADVANCED_LINK = AdvancedLink::class;
	const FORMS = Forms::class;
	const LINK = Link::class;
	const PAGE_LINK = PageLink::class;
	const POST_OBJECT = PostObject::class;
	const RELATIONSHIP = Relationship::class;
	const TAXONOMY = Taxonomy::class;
	const TAXONOMY_TERMS = TaxonomyTerms::class;
	const USER = User::class;

	/** JQUERY **/
	const COLOR_PICKER = ColorPicker::class;
	const DATE_PICKER = DatePicker::class;
	const DATE_TIME_PICKER = DateTimePicker::class;
	const GOOGLE_MAP = GoogleMap::class;
	const GOOGLE_RECAPTCHA = GoogleReCaptcha::class;
	const TIME_PICKER = TimePicker::class;

	/** WORDPRESS **/
	const POST_STATUSES = PostStatuses::class;
	const POST_TYPES = PostTypes::class;
	const TAXONOMIES = Taxonomies::class;
	const USER_ROLES = UserRoles::class;

	/** LAYOUT **/
	const ACCORDION = Accordion::class;
	const CLONE = CloneField::class;
	const COLUMN = Column::class;
	const DYNAMIC_MESSAGE = DynamicMessage::class;
	const FLEXIBLE_CONTENT = FlexibleContent::class;
	const GROUP = Group::class;
	const MESSAGE = Message::class;
	const REPEATER = Repeater::class;
	const TAB = Tab::class;
}
