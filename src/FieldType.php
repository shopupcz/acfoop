<?php

namespace ShopUp\Acfoop;

use ShopUp\Acfoop\Fields\Basic\Button;
use ShopUp\Acfoop\Fields\Basic\Email;
use ShopUp\Acfoop\Fields\Basic\Hidden;
use ShopUp\Acfoop\Fields\Basic\Number;
use ShopUp\Acfoop\Fields\Basic\Password;
use ShopUp\Acfoop\Fields\Basic\Range;
use ShopUp\Acfoop\Fields\Basic\Slug;
use ShopUp\Acfoop\Fields\Basic\Text;
use ShopUp\Acfoop\Fields\Basic\TextArea;
use ShopUp\Acfoop\Fields\Basic\Url;
use ShopUp\Acfoop\Fields\Choice\ButtonGroup;
use ShopUp\Acfoop\Fields\Choice\Checkbox;
use ShopUp\Acfoop\Fields\Choice\RadioButton;
use ShopUp\Acfoop\Fields\Choice\Select;
use ShopUp\Acfoop\Fields\Choice\TrueFalse;
use ShopUp\Acfoop\Fields\Content\CodeEditor;
use ShopUp\Acfoop\Fields\Content\File;
use ShopUp\Acfoop\Fields\Content\Gallery;
use ShopUp\Acfoop\Fields\Content\Image;
use ShopUp\Acfoop\Fields\Content\OEmbed;
use ShopUp\Acfoop\Fields\Content\WysiwygEditor;
use ShopUp\Acfoop\Fields\Jquery\ColorPicker;
use ShopUp\Acfoop\Fields\Jquery\DatePicker;
use ShopUp\Acfoop\Fields\Jquery\DateTimePicker;
use ShopUp\Acfoop\Fields\Jquery\GoogleMap;
use ShopUp\Acfoop\Fields\Jquery\GoogleReCaptcha;
use ShopUp\Acfoop\Fields\Jquery\TimePicker;
use ShopUp\Acfoop\Fields\Layout\Accordion;
use ShopUp\Acfoop\Fields\Layout\CloneField;
use ShopUp\Acfoop\Fields\Layout\Column;
use ShopUp\Acfoop\Fields\Layout\DynamicMessage;
use ShopUp\Acfoop\Fields\Layout\FlexibleContent;
use ShopUp\Acfoop\Fields\Layout\Group;
use ShopUp\Acfoop\Fields\Layout\Message;
use ShopUp\Acfoop\Fields\Layout\Repeater;
use ShopUp\Acfoop\Fields\Layout\Tab;
use ShopUp\Acfoop\Fields\Relational\AdvancedLink;
use ShopUp\Acfoop\Fields\Relational\Forms;
use ShopUp\Acfoop\Fields\Relational\Link;
use ShopUp\Acfoop\Fields\Relational\PageLink;
use ShopUp\Acfoop\Fields\Relational\PostObject;
use ShopUp\Acfoop\Fields\Relational\Relationship;
use ShopUp\Acfoop\Fields\Relational\Taxonomy;
use ShopUp\Acfoop\Fields\Relational\TaxonomyTerms;
use ShopUp\Acfoop\Fields\Relational\User;
use ShopUp\Acfoop\Fields\WordPress\PostStatuses;
use ShopUp\Acfoop\Fields\WordPress\PostTypes;
use ShopUp\Acfoop\Fields\WordPress\Taxonomies;
use ShopUp\Acfoop\Fields\WordPress\UserRoles;

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
