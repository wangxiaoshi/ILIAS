<?php return array (
  'FactoryUIComponent' => 
  array (
    'id' => 'FactoryUIComponent',
    'title' => 'UIComponent',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'What is to be done by this control',
      'composition' => 'What happens if the control is operated',
      'effect' => 'What happens if the control is operated',
      'rivals' => 
      array (
        'Rival 1' => 'What other controls are similar, what is their distinction',
      ),
    ),
    'background' => 'Relevant academic information',
    'context' => 
    array (
      0 => 'The context states where this control is used specifically (this list might not be complete) and how common is this control used',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Where and when an element is to be used or not.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        2 => 'How the interaction with this object takes place.',
      ),
      'wording' => 
      array (
        3 => 'How the wording of labels or captions must be.',
      ),
      'ordering' => 
      array (
        5 => 'How different elements of this instance are to be ordered.',
      ),
      'style' => 
      array (
        4 => 'How this element should look like.',
      ),
      'responsiveness' => 
      array (
        6 => 'How this element behaves on changing screen sizes',
      ),
      'accessibility' => 
      array (
        7 => 'How this element is made accessible',
      ),
    ),
    'parent' => false,
    'children' => 
    array (
      0 => 'CounterFactoryCounter',
      1 => 'ImageFactoryImage',
      2 => 'DividerFactoryDivider',
      3 => 'LinkFactoryLink',
      4 => 'ButtonFactoryButton',
      5 => 'DropdownFactoryDropdown',
      6 => 'BreadcrumbsBreadcrumbsBreadcrumbs',
      7 => 'ViewControlFactoryViewControl',
      8 => 'ChartFactoryChart',
      9 => 'InputFactoryInput',
      10 => 'CardFactoryCard',
      11 => 'DeckDeckDeck',
      12 => 'ListingFactoryListing',
      13 => 'PanelFactoryPanel',
      14 => 'ItemFactoryItem',
      15 => 'ModalFactoryModal',
      16 => 'PopoverFactoryPopover',
      17 => 'DropzoneFactoryDropzone',
      18 => 'LegacyLegacyLegacy',
      19 => 'TableFactoryTable',
      20 => 'MessageBoxFactoryMessageBox',
      21 => 'LayoutFactoryLayout',
      22 => 'MainControlsFactoryMainControls',
      23 => 'TreeFactoryTree',
      24 => 'MenuFactoryMenu',
      25 => 'SymbolFactorySymbol',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Factory',
  ),
  'CounterFactoryCounter' => 
  array (
    'id' => 'CounterFactoryCounter',
    'title' => 'Counter',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Counter inform users about the quantity of items indicated by a glyph.',
      'composition' => 'Counters consist of a number and some background color and are placed one the \'end of the line\' in reading direction of the item they state the count for.',
      'effect' => 'Counters convey information, they are not interactive.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'http://www.ilias.de/docu/goto_docu_wiki_wpage_3854_1357.html',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A counter MUST only be used in combination with a glyph.',
      ),
      'composition' => 
      array (
        1 => 'A counter MUST contain exactly one number greater than zero and no other characters.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'CounterCounterStatus',
      1 => 'CounterCounterNovelty',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Counter/Factory',
  ),
  'ImageFactoryImage' => 
  array (
    'id' => 'ImageFactoryImage',
    'title' => 'Image',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Image component is used to display images of various sources.',
      'composition' => 'An Image is composed of the image and an alternative text for screen readers.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Images MAY be included in interactive components. Images MAY also be interactive on their own. Clicking on an Image can e.g. provide navigation to another screen or showing a Modal on the same screen. The usage of an interactive Image MUST be confirmed by the JF to make sure that interactive Images will only be used in meaningful cases.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Images MUST contain the alt attribute. This attribute MAY be left empty (alt="") if the image is of decorative nature. According to the WAI, decorative images don’t add information to the content of a page. For example, the information provided by the image might already be given using adjacent text, or the image might be included to make the website more visually attractive (see <a href="https://www.w3.org/WAI/tutorials/images/decorative/">https://www.w3.org/WAI/tutorials/images/decorative/</a>).',
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'ImageImageStandard',
      1 => 'ImageImageResponsive',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Image/Factory',
  ),
  'DividerFactoryDivider' => 
  array (
    'id' => 'DividerFactoryDivider',
    'title' => 'Divider',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A divider marks a thematic change in a sequence of other components. A Horizontal Divider is used to mark a thematic change in sequence of elements that are stacked from top to bottom, e.g. in a Dropdown. A Vertical Divider is used to mark a thematic change in a sequence of elements that are lined up from left to right, e.g. a Toolbar.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Dividers MUST only be used in container components that explicitly state and define the usage of Dividers within the container.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'DividerHorizontalHorizontal',
      1 => 'DividerVerticalVertical',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Divider/Factory',
  ),
  'LinkFactoryLink' => 
  array (
    'id' => 'LinkFactoryLink',
    'title' => 'Link',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Links are used navigate to other resources or views of the system by clicking or tapping them. Clicking on a link does not change the system status.',
      'composition' => 'A link is a clickable, graphically minimally obtrusive control element. It can bear text or other content. Links always contain a valid href tag which should not just contain a hash sign.',
      'effect' => 'After clicking a link, the resource or view indicated by the link is requested and presented. Links are not used to trigger Javascript events.',
      'rivals' => 
      array (
        'buttons' => 'Buttons are used to trigger interactions that usually change the system status. Buttons are much more obtrusive than links and may trigger Javascript events.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Links MAY be used inline in a text paragraph.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Hovering an active link SHOULD indicate a possible interaction.',
        2 => 'Links MUST not be used to trigger Javascript events.',
      ),
      'wording' => 
      array (
        1 => 'The wording of the link SHOULD name the target view or resource.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Links SHOULD not be presented with a separate background color.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'DOM elements of type "a" MUST be used to properly identify an element.',
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'LinkStandardStandard',
      1 => 'LinkBulkyBulky',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Link/Factory',
  ),
  'ButtonFactoryButton' => 
  array (
    'id' => 'ButtonFactoryButton',
    'title' => 'Button',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Buttons trigger interactions that change the system’s or view\'s status. Acceptable changes to the current view are those that do not result in a complete replacement of the overall screen (e.g. modals).',
      'composition' => 'Button is a clickable, graphically obtrusive control element. It can bear text.',
      'effect' => 'On-click, the action indicated by the button is carried out. A stateful button will indicate its state by an aria-attribute.',
      'rivals' => 
      array (
        'glyph' => 'Glyphs are used if the enclosing Container Collection can not provide enough space for textual information or if such an information would clutter the screen.',
        'links' => 'Links are used to trigger Interactions that do not change the systems status. They are usually contained inside a Navigational Collection.',
      ),
    ),
    'background' => 'Wording rules have been inspired by the iOS Human Interface Guidelines (UI-Elements->Controls->System Button) Style rules have been inspired from the GNOME Human Interface Guidelines->Buttons.',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Buttons MUST NOT be used inside a Textual Paragraph.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        2 => 'If an action is temporarily not available, Buttons MUST be disabled by setting as type \'disabled\'.',
        3 => 'A button MUST NOT be used for navigational purpose.',
      ),
      'wording' => 
      array (
        1 => 'The caption of a Button SHOULD contain no more than two words.',
        2 => 'The wording of the button SHOULD describe the action the button performs by using a verb or a verb phrase.',
        3 => 'Every word except articles, coordinating conjunctions and prepositions of four or fewer letters MUST be capitalized.',
        4 => 'For standard events such as saving or canceling the existing standard terms MUST be used if possible: Save, Cancel, Delete, Cut, Copy.',
        5 => 'There are cases where a non-standard label such as “Send Mail” for saving and sending the input of a specific form might deviate from the standard. These cases MUST however specifically justified.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'If Text is used inside a Button, the Button MUST be at least six characters wide.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'DOM elements of type "button" MUST be used to properly identify an element as a Button if there is no good reason to do otherwise.',
        2 => 'Button DOM elements MUST either be of type "button", of type "a" accompanied with the aria-role “Button” or input along with the type attribute “button” or "submit".',
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'ButtonStandardStandard',
      1 => 'ButtonPrimaryPrimary',
      2 => 'ButtonCloseClose',
      3 => 'ButtonShyShy',
      4 => 'ButtonMonthMonth',
      5 => 'ButtonTagTag',
      6 => 'ButtonBulkyBulky',
      7 => 'ButtonToggleToggle',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Factory',
  ),
  'DropdownFactoryDropdown' => 
  array (
    'id' => 'DropdownFactoryDropdown',
    'title' => 'Dropdown',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Dropdowns reveal a list of interactions that change the system’s status or navigate to a different view.',
      'composition' => 'Dropdown is a clickable, graphically obtrusive control element. It can bear text. On-click a list of Shy Buttons and optional Dividers is shown. Note that empty dropdowns are not rendered at all to keep the UI as clean as possible.',
      'effect' => 'On-click, a list of actions is revealed. Clicking an item will trigger the action indicated. Clicking outside of an opened Dropdown will close the list of items.',
      'rivals' => 
      array (
        'button' => 'Buttons are used, if single actions should be presented directly in the user interface.',
        'links' => 'Links are used to trigger actions that do not change the systems status. They are usually contained inside a Navigational Collection.',
        'popovers' => 'Dropdowns only provide a list of possible actions. Popovers can include more diverse and flexible content.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Dropdowns MUST NOT be used standalone. They are only parts of more complex UI elements. These elements MUST define their use of Dropdown. E.g. a List or a Table MAY define that a certain kind of Dropdown is used as part of the UI element.',
      ),
      'composition' => 
      array (
        1 => 'Empty dropdowns MUST NOT be rendered at all to keep the UI as clean as possible.',
      ),
      'interaction' => 
      array (
        1 => 'Only Dropdown Items MUST trigger an action or change a view. The Dropdown trigger element is only used to show and hide the list of Dropdown Items.',
      ),
      'wording' => 
      array (
        1 => 'The label of a Dropdown SHOULD contain no more than two words.',
        2 => 'Every word except articles, coordinating conjunctions and prepositions of four or fewer letters MUST be capitalized.',
        3 => 'For standard events such as saving or canceling the existing standard terms MUST be used if possible: Delete, Cut, Copy.',
        4 => 'There are cases where a non-standard label such as “Send Mail” for saving and sending the input of a specific form might deviate from the standard. These cases MUST however specifically justified.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'If Text is used inside a Dropdown label, the Dropdown MUST be at least six characters wide.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'DOM elements of type "button" MUST be used to properly identify an element as a Dropdown.',
        2 => 'Dropdown items MUST be implemented as "ul" list with a set of "li" elements and nested Shy Button elements for the actions.',
        3 => 'Triggers of Dropdowns MUST indicate their effect by the aria-haspopup attribute set to true.',
        4 => 'Triggers of Dropdowns MUST indicate the current state of the Dropdown by the aria-expanded label.',
        5 => 'Dropdowns MUST be accessible by keyboard by focusing the trigger element and clicking the return key.',
        6 => 'Entries in a Dropdown MUST be accessible by the tab-key if opened.',
        7 => 'The focus MAY leave the Dropdown if tab is pressed while focusing the last element. This differs from the behaviour in Popovers and Modals.',
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'DropdownStandardStandard',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Dropdown/Factory',
  ),
  'BreadcrumbsBreadcrumbsBreadcrumbs' => 
  array (
    'id' => 'BreadcrumbsBreadcrumbsBreadcrumbs',
    'title' => 'Breadcrumbs',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Breadcrumbs is a supplemental navigation scheme. It eases the user\'s navigation to higher items in hierarchical structures. Breadcrumbs also serve as an effective visual aid indicating the user\'s location on a website.',
      'composition' => 'Breadcrumbs-entries are rendered as horizontally arranged UI Links with a seperator in-between.',
      'effect' => 'Clicking on an entry will get the user to the respective location.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Suplemental navigation under the main menu',
      1 => 'Location hint in search results',
      2 => 'Path to current location on info page',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Crumbs MUST trigger navigation to other resources of the system.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Breadcrumbs/Breadcrumbs',
  ),
  'ViewControlFactoryViewControl' => 
  array (
    'id' => 'ViewControlFactoryViewControl',
    'title' => 'View Control',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'View Controls switch between different visualisation of data.',
      'composition' => 'View Controls are composed mainly of buttons, they are often found in toolbars.',
      'effect' => 'Interacting with a view control changes to display in some content area.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'ViewControlModeMode',
      1 => 'ViewControlSectionSection',
      2 => 'ViewControlSortationSortation',
      3 => 'ViewControlPaginationPagination',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/ViewControl/Factory',
  ),
  'ChartFactoryChart' => 
  array (
    'id' => 'ChartFactoryChart',
    'title' => 'Chart',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Charts are used to graphically represent data in various forms such as maps, graphs or diagrams.',
      'composition' => 'Charts are composed of various graphical and textual elements representing the raw data.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Charts SHOULD not rely on colors to convey information.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'ChartScaleBarScaleBar',
      1 => 'ChartProgressMeterFactoryProgressMeter',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Chart/Factory',
  ),
  'InputFactoryInput' => 
  array (
    'id' => 'InputFactoryInput',
    'title' => 'Input',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'In opposite to components with a purely receptive or at most navigational character, input elements are used to relay user-induced data to the system.',
      'composition' => 'An input consists of fields that define the way data is entered and a container around those fields that defines the way the data is submitted to the system.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'InputFieldFactoryField',
      1 => 'InputContainerFactoryContainer',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Factory',
  ),
  'CardFactoryCard' => 
  array (
    'id' => 'CardFactoryCard',
    'title' => 'Card',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A card is a flexible content container for small chunks of structured data. Cards are often used in so-called Decks which are a gallery of Cards.',
      'composition' => 'Cards contain a header, which often includes an Image or Icon and a Title as well as possible actions as Default Buttons and 0 to n sections that may contain further textual descriptions, links and buttons. The size of the cards in decks may be set to extra small (12 cards per row), small (6 cards per row, default), medium (4 cards per row), large (3 cards per row), extra large (2 cards per row) and full (1 card per row). The number of cards per row is responsively adapted, if the size of the screen is changed.',
      'effect' => 'Cards may contain Interaction Triggers.',
      'rivals' => 
      array (
        'Heading Panel' => 'Heading Panels fill up the complete available width in the Center Content Section. Multiple Heading Panels are stacked vertically.',
        'Block Panels' => 'Block Panels are used in Sidebars',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'http://www.ilias.de/docu/goto_docu_wiki_wpage_3208_1357.html',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Cards MUST contain a title.',
        2 => 'Cards SHOULD contain an Image or Icon in the header section.',
        3 => 'Cards MAY contain Interaction Triggers.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Sections of  Cards MUST be separated by Dividers.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'If multiple Cards are used, they MUST be contained in a Deck.',
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'CardStandardStandard',
      1 => 'CardRepositoryObjectRepositoryObject',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Card/Factory',
  ),
  'DeckDeckDeck' => 
  array (
    'id' => 'DeckDeckDeck',
    'title' => 'Deck',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Decks are used to display multiple Cards in a grid. They should be used if a  page contains many content items that have similar style and importance. A Deck gives each item equal horizontal space indicating that they are of equal importance.',
      'composition' => 'Decks are composed only of Cards arranged in a grid. The cards displayed by decks are all of equal size. This Size ranges very small (XS) to very large (XL).',
      'effect' => 'The Deck is a mere scaffolding element, is has no effect.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'http://www.ilias.de/docu/goto_docu_wiki_wpage_3992_1357.html',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Decks MUST only be used to display multiple Cards.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'The number of cards displayed per row MUST adapt to the screen size.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Deck/Deck',
  ),
  'ListingFactoryListing' => 
  array (
    'id' => 'ListingFactoryListing',
    'title' => 'Listing',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Listings are used to structure itemised textual information.',
      'composition' => 'Listings may contain ordered, unordered, or labeled items.',
      'effect' => 'Listings hold only textual information. They may contain Links but no Buttons.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Listings MUST NOT contain Buttons.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'ListingUnorderedUnordered',
      1 => 'ListingOrderedOrdered',
      2 => 'ListingDescriptiveDescriptive',
      3 => 'ListingWorkflowFactoryWorkflow',
      4 => 'ListingCharacteristicValueFactoryCharacteristicValue',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/Factory',
  ),
  'PanelFactoryPanel' => 
  array (
    'id' => 'PanelFactoryPanel',
    'title' => 'Panel',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Panels are used to group titled content.',
      'composition' => 'Panels consist of a header and content section. They form one Gestalt and so build a perceivable cluster of information. Additionally an optional Dropdown that offers actions on the entity being represented by the panel is shown at the top of the Panel.',
      'effect' => 'The effect of interaction with panels heavily depends on their content.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'Panels MUST contain a title.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'PanelStandardStandard',
      1 => 'PanelSubSub',
      2 => 'PanelReportReport',
      3 => 'PanelListingFactoryListing',
      4 => 'PanelSecondaryFactorySecondary',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Factory',
  ),
  'ItemFactoryItem' => 
  array (
    'id' => 'ItemFactoryItem',
    'title' => 'Item',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'An item displays a unique entity within the system. It shows information about that entity in a structured way.',
      'composition' => 'Items contain the name of the entity as a title. The title MAY be interactive by using a Shy Button. The item contains three sections, where one section contains important information about the item, the second section shows the content of the item and another section shows metadata about the entity.',
      'effect' => 'Items may contain Interaction Triggers such as Glyphs, Buttons or Tags.',
      'rivals' => 
      array (
        'Card' => 'Cards define the look of items in a deck. Todo: We need to refactor cards.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Items MUST contain the name of the displayed entity as a title.',
        2 => 'Items SHOULD contain a section with it\'s content.',
        3 => 'Items MAY contain Interaction Triggers.',
        4 => 'Items MAY contain a section with metadata.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'ItemStandardStandard',
      1 => 'ItemGroupGroup',
      2 => 'ItemNotificationNotification',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Item/Factory',
  ),
  'ModalFactoryModal' => 
  array (
    'id' => 'ModalFactoryModal',
    'title' => 'Modal',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Modal forces users to focus on the task at hand.',
      'composition' => 'A Modal is a full-screen dialog on top of the greyed-out ILIAS screen. The Modal consists of a header with a close button and a typography modal title, a content section and might have a footer.',
      'effect' => 'All controls of the original context are inaccessible until the Modal is completed. Upon completion the user returns to the original context.',
      'rivals' => 
      array (
        'Popover' => 'Modals have some relations to popovers. The main difference between the two is the disruptive nature of the Modal and the larger amount of data that might be displayed inside a modal. Also popovers perform mostly action to add or consult metadata of an item while Modals manipulate or focus items or their sub-items directly.',
      ),
    ),
    'background' => 'http://quince.infragistics.com/Patterns/Modal%20Panel.aspx',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The main purpose of the Modals MUST NOT be navigational. But Modals MAY be dialogue of one or two steps and thus encompass "next"-buttons  or the like.',
        2 => 'Modals MUST NOT contain other modals (Modal in Modal).',
        3 => 'Modals SHOULD not be used to perform complex workflows.',
        4 => 'Modals MUST be closable by a little “x”-button on the right side of the header.',
        5 => 'Modals MUST contain a title in the header.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'ModalInterruptiveInterruptive',
      1 => 'ModalInterruptiveItemInterruptiveItem',
      2 => 'ModalRoundTripRoundtrip',
      3 => 'ModalLightboxLightbox',
      4 => 'ModalLightboxImagePageLightboxImagePage',
      5 => 'ModalLightboxTextPageLightboxTextPage',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Modal/Factory',
  ),
  'PopoverFactoryPopover' => 
  array (
    'id' => 'PopoverFactoryPopover',
    'title' => 'Popover',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Popovers can be used when space is scarce i.e. within List GUI items, table cells or menus in the Header section. They offer either secondary information on object like a preview or rating to be displayed or entered. They display information about ongoing processes',
      'composition' => 'Popovers consist of a layer displayed above all other content. The content of the Popover depends on the functionality it performs. A Popover MAY display a title above its content. All Popovers contain a pointer pointing from the Popover to the Triggerer of the Popover.',
      'effect' => 'Popovers are shown by clicking a Triggerer component such as a Button or Glyph. The position of the Popover is calculated automatically be default. However, it is possible to specify if the popover appears horizontal (left, right) or vertical (top, bottom) relative to its Triggerer component. Popovers disappear by clicking anywhere outside the Popover or by pressing the ESC key.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Popovers MUST NOT contain horizontal scrollbars.',
        2 => 'Popovers MAY contain vertical scrollbars. The content component is responsible to define its own height and show vertical scrollbars.',
        3 => 'If Popovers are used to present secondary information of an object, they SHOULD display a title representing the object.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'A Popover MUST only be displayed if the Trigger component is clicked. This behaviour is different from Tooltips that appear on hovering. Popovers disappear by clicking anywhere outside the Popover or by pressing the ESC key.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Popovers MUST always relate to the Trigger component by a little pointer.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'There MUST be a way to open the Popover by only using the keyboard.',
        2 => 'The focus MUST be inside the Popover, once it is open if it contains at least one interactive item. Otherwise the focus MUST remain on the Triggerer component.',
        3 => 'The focus MUST NOT leave the Popover for as long as it is open.',
        4 => 'There MUST be a way to reach every control in the Popover by only using the keyboard.',
        5 => 'The Popover MUST be closable by pressing the ESC key.',
        6 => 'Once the Popover is closed, the focus MUST return to the element triggering the opening of the Popover or the element being clicked if the Popover was closed on click.',
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'PopoverStandardStandard',
      1 => 'PopoverListingListing',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Popover/Factory',
  ),
  'DropzoneFactoryDropzone' => 
  array (
    'id' => 'DropzoneFactoryDropzone',
    'title' => 'Dropzone',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Dropzones are containers used to drop either files or other HTML elements.',
      'composition' => 'A dropzone is a container on the page. Depending on the type of the dropzone, the container is visible by default or it gets highlighted once the user starts to drag the elements over the browser window.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Dropzones MUST be highlighted if the user is dragging compatible elements inside or over the browser window.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'DropzoneFileFactoryFile',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Dropzone/Factory',
  ),
  'LegacyLegacyLegacy' => 
  array (
    'id' => 'LegacyLegacyLegacy',
    'title' => 'Legacy',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'This component is used to wrap an existing ILIAS UI element into a UI component. This is useful if a container of the UI components needs to contain content that is not yet implement in the centralized UI components.',
      'composition' => 'The legacy component contains html or any other content as string.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'This component MUST only be used to ensure backwards compatibility with existing UI elements in ILIAS, therefore it SHOULD only contain Elements which cannot be generated using other UI Components from the UI Service.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Legacy/Legacy',
  ),
  'TableFactoryTable' => 
  array (
    'id' => 'TableFactoryTable',
    'title' => 'Table',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Tables present a set of uniformly structured data.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'TablePresentationPresentation',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Table/Factory',
  ),
  'MessageBoxFactoryMessageBox' => 
  array (
    'id' => 'MessageBoxFactoryMessageBox',
    'title' => 'Message Box',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Message Boxes inform the user about the state of the system or an ongoing user task. Such as the successful completion, the need for further input  of an actual error or stopping users in their tracks in high-risk tasks.',
      'composition' => 'Message Boxes consist of a mandatory message text, optional Buttons and an optional Unordered List of Links. There are four main types of Message Boxes, each is displayed in the according color: 1. Failure, 2. Success, 3. Info, 4. Confirmation',
      'effect' => 'Message Boxes convey information and optionally provide interaction by using Buttons and navigation by using Links.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'In general Message Boxes MAY provide interaction by using Buttons. Only Confirmation Message Boxes MUST provide interaction by using Buttons.',
        2 => 'Navigation to other screens MUST by done by using Links.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'MessageBoxMessageBoxFailure',
      1 => 'MessageBoxMessageBoxSuccess',
      2 => 'MessageBoxMessageBoxInfo',
      3 => 'MessageBoxMessageBoxConfirmation',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MessageBox/Factory',
  ),
  'LayoutFactoryLayout' => 
  array (
    'id' => 'LayoutFactoryLayout',
    'title' => 'Layout',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Layout components are compontents used for the overall construction of the user interface. They assign places to certain components and thus provide a learnable structure where similar things are found in similar locations throughout the system. In ultimo, the page itself is included here. Since Layout components carry - due to their nature - certain structural decisions, they are also about the "where" of elements as opposed to the exclusive "what" in many other components.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'LayoutPageFactoryPage',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Layout/Factory',
  ),
  'MainControlsFactoryMainControls' => 
  array (
    'id' => 'MainControlsFactoryMainControls',
    'title' => 'Main Controls',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Main Controls are components that are always usable, depending only on overall configuration or roles of the user, not depending on the current content. Main Controls provide global navigation in the app and information about the app.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
        'View Controls' => 'View Controls are used to change the visualisation of some set of data within a component.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Main Controls MUST NOT change the state of entities in the system.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'MainControlsMetaBarMetaBar',
      1 => 'MainControlsMainBarMainBar',
      2 => 'MainControlsSlateFactorySlate',
      3 => 'MainControlsFooterFooter',
      4 => 'MainControlsModeInfoModeInfo',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/Factory',
  ),
  'TreeFactoryTree' => 
  array (
    'id' => 'TreeFactoryTree',
    'title' => 'Tree',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Trees present hierarchically structured data.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
        'Drilldown' => 'A Drilldown shows only one level of the hierarchy, the Tree will show all at the same time.',
        'Presentation Table' => 'Allthough the rows in a table are expandable, entries in a table reflect entities and certain aspects of them. Nodes, however, are entities by themself.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Tree SHOULD NOT be used for data-structures with little hierachy. E.g., listing objects and their properties would call for a Presentation Table rather than a Tree (see "rivals"), since this is a two-dimensional structure only.',
        2 => 'A Tree SHOULD NOT mix different kind of nodes, i.e. all nodes in the same Tree SHOULD be identical in structure.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'TreeNodeFactoryNode',
      1 => 'TreeExpandableExpandable',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Tree/Factory',
  ),
  'MenuFactoryMenu' => 
  array (
    'id' => 'MenuFactoryMenu',
    'title' => 'Menu',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Menus let the user choose from several (navigational) options.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'MenuDrilldownDrilldown',
      1 => 'MenuSubSub',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Menu/Factory',
  ),
  'SymbolFactorySymbol' => 
  array (
    'id' => 'SymbolFactorySymbol',
    'title' => 'Symbol',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Symbols are graphical representations of concepts or contexts quickly comprehensible or generally known to the user.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'FactoryUIComponent',
    'children' => 
    array (
      0 => 'SymbolIconFactoryIcon',
      1 => 'SymbolGlyphFactoryGlyph',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Factory',
  ),
  'CounterCounterStatus' => 
  array (
    'id' => 'CounterCounterStatus',
    'title' => 'Status',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Status counter is used to display information about the total number of some items like users active on the system or total number of comments.',
      'composition' => 'The Status Counter is a non-obstrusive Counter.',
      'effect' => 'Status Counters convey information, they are not interactive.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Status Counter is used in the ‘Who is online?’ Tool.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'The Status Counter MUST be displayed on the lower right of the item it accompanies.',
        2 => 'The Status Counter SHOULD have a non-obstrusive background color, such as grey.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'CounterFactoryCounter',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Counter/Counter',
  ),
  'CounterCounterNovelty' => 
  array (
    'id' => 'CounterCounterNovelty',
    'title' => 'Novelty',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Novelty counters inform users about the arrival or creation of new items of the kind indicated by the accompanying glyph.',
      'composition' => 'A Novelty Counter is an obtrusive counter.',
      'effect' => 'They count down / disappear as soon as the change has been consulted by the user.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Novelty Counters are found in the Mail in the Top Navigation.',
      1 => 'Novelty Counters indicate new Comments.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Novelty Counter MAY be used with the Status Counter.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        2 => 'There MUST be a way for the user to consult the changes indicated by the counter.',
        3 => 'After the consultation, the Novelty Counter SHOULD disappear or the number it contains is reduced by one.',
        4 => 'Depending on the content, the reduced number MAY be added in an additional Status Counter.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        5 => 'The Novelty Counter MUST be displayed on the top at the \'end of the line\' in reading direction of the item it accompanies. This would be top right for latin script and top left for arabic script.',
        6 => 'The Novelty Counter SHOULD have an obstrusive background color, such as red or orange.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'CounterFactoryCounter',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Counter/Counter',
  ),
  'ImageImageStandard' => 
  array (
    'id' => 'ImageImageStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The standard image is used if the image is to be rendered in it\'s the original size.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ImageFactoryImage',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Image/Image',
  ),
  'ImageImageResponsive' => 
  array (
    'id' => 'ImageImageResponsive',
    'title' => 'Responsive',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A responsive image is to be used if the image needs to adapt to changing amount of space available.',
      'composition' => 'Responsive images scale nicely to the parent element.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ImageFactoryImage',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Image/Image',
  ),
  'DividerHorizontalHorizontal' => 
  array (
    'id' => 'DividerHorizontalHorizontal',
    'title' => 'Horizontal',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Horizontal Divider is used to mark a thematic change in a sequence of elements that are stacked from top to bottom.',
      'composition' => 'Horizontal dividers consists of a horizontal line which may comprise a label.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Horizontal Dividers MUST only be used in container components that render a sequence of items from top to bottom.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
        1 => 'Horizontal Dividers MUST always have a succeeding element in a sequence of elments, which MUST NOT be another Horizontal Divider.',
        2 => 'Horizontal Dividers without label MUST always have a preceding element in a sequence of elments, which MUST NOT be another Horizontal Divider.',
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'DividerFactoryDivider',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Divider/Horizontal',
  ),
  'DividerVerticalVertical' => 
  array (
    'id' => 'DividerVerticalVertical',
    'title' => 'Vertical',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Vertical Divider is used to mark a thematic or functional change in a sequence of elements that are stacked from left to right.',
      'composition' => 'Vertical Dividers consists of a glyph-like character.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Vertical Dividers MUST only be used in container components that render a sequence of items from left to right.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
        1 => 'Vertical Dividers MUST always have a succeeding element in a sequence of elments, which MUST NOT be another Vertical Divider.',
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'DividerFactoryDivider',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Divider/Vertical',
  ),
  'LinkStandardStandard' => 
  array (
    'id' => 'LinkStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A standard link uses text as the label of the link.',
      'composition' => 'The standard link uses the default link color as text color and no background. Hovering a standard link underlines the text label.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard links MUST be used if there is no good reason to use another instance.',
        2 => 'Links to ILIAS screens that contain the general ILIAS navigation MUST NOT be opened in a new viewport.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'LinkFactoryLink',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Link/Standard',
  ),
  'LinkBulkyBulky' => 
  array (
    'id' => 'LinkBulkyBulky',
    'title' => 'Bulky',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Bulky Link is highly obtrusive. It combines the recognisability of a graphical element with an explicit textual label on an unusually sized button-like area.',
      'composition' => 'The Bulky Link is built as a a-tag containing an icon or glyph and a (small) text.',
      'effect' => '',
      'rivals' => 
      array (
        'Bulky Button' => 'Although visually very much alike, Bulky Buttons rather trigger a Signal and execute JavaScript while the Bulky Link opens a URL. Use Buttons to act upon other elements and Links to change the page. Bulky Links are not stateful.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Slate',
      1 => 'Drilldown Menu',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'The symbol and the text of the Bulky Link MUST be corresponding.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Bulky Links MUST occupy as much space as their container leaves them.',
      ),
      'responsiveness' => 
      array (
        1 => 'On screens larger than small size, Bulky Links MUST contain a symbol plus text.',
        2 => 'On small-sized screens, Bulky Links SHOULD contain only a symbol.',
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'LinkFactoryLink',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Link/Bulky',
  ),
  'ButtonStandardStandard' => 
  array (
    'id' => 'ButtonStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The standard button is the default button to be used in ILIAS. If there is no good reason using another button instance in ILIAS, this is the one that should be used.',
      'composition' => 'The standard button uses the primary color as background.',
      'effect' => 'If the loading animation is activated, the button shows a spinner wheel on-click and automatically switches to a deactivated state.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard buttons MUST be used if there is no good reason using another instance.',
        2 => 'The loading animation SHOULD be activated if the Buttons starts any background process (e.g. ajax calls) without any other immediate feedback for the user. After the process finished, the button MUST be removed from/replaced in the DOM.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
        1 => 'The most important standard button SHOULD be first in reading direction if there are several buttons.',
        2 => 'In the toolbar and in forms special regulations for the ordering of the buttons MAY apply.',
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
        1 => 'The most important standard button in multi-action bars MUST be sticky (stay visible on small screens).',
      ),
      'accessibility' => 
      array (
        1 => 'Standard buttons MAY define aria-label attribute. Use it in cases where a text label is not visible on the screen or when the label does not provide enough information about the action.',
        2 => 'Some Buttons can be stateful; when engaged, the state MUST be reflected in the "aria-pressed"-, respectively the "aria-checked"-attribute. If the Button is not stateful (which is the default), the aria-attribute SHOULD be omitted.',
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Standard',
  ),
  'ButtonPrimaryPrimary' => 
  array (
    'id' => 'ButtonPrimaryPrimary',
    'title' => 'Primary',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The primary button indicates the most important action on a screen. By definition there can only be one single “most important” action on any given screen and thus only one single primary button per screen.',
      'composition' => 'The background color is the btn-primary-color. This screen-unique button-color ensures that it stands out and attracts the user’s attention while there are several buttons competing for attention.',
      'effect' => 'In toolbars the primary button are required to be sticky, meaning they stay in view in the responsive view. If the loading animation is activated, the button shows a spinner wheel on-click and automatically switches to a deactivated state.',
      'rivals' => 
      array (
      ),
    ),
    'background' => 'Tiddwell refers to the primary button as “prominent done button” and describes that “the button that finishes a transaction should be placed at the end of the visual flow; and is to be made big and well labeled.” She explains that “A well-understood, obvious last step gives your users a sense of closure. There’s no doubt that the transaction will be done when that button is clicked; don’t leave them hanging, wondering whether their work took effect”. The GNOME Human Interface Guidelines -> Buttons also describes a button indicated as most important for dialogs.',
    'context' => 
    array (
      0 => '“Start test” in Module “Test”',
      1 => '“Hand In” in exercise',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Most pages SHOULD NOT have any Primary Button at all.',
        2 => 'There MUST be no more than one Primary Button per page in ILIAS.',
        3 => 'The decision to make a Button a Primary Button MUST be confirmed by the JF.',
        4 => 'The loading animation rules of the Standard Button MUST be respected.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Some Buttons can be stateful; when engaged, the state MUST be reflected in the "aria-pressed"-, respectively the "aria-checked"-attribute. If the Button is not stateful (which is the default), the aria-attribute SHOULD be omitted.',
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Primary',
  ),
  'ButtonCloseClose' => 
  array (
    'id' => 'ButtonCloseClose',
    'title' => 'Close',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The close button triggers the closing of some collection displayed temporarily such as an overlay.',
      'composition' => 'The close button is displayed without border.',
      'effect' => 'Clicking the close button closes the enclosing collection.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
        1 => 'The Close Button MUST always be positioned in the top right of a collection.',
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The functionality of the close button MUST be indicated for screen readers by an aria-label.',
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Close',
  ),
  'ButtonShyShy' => 
  array (
    'id' => 'ButtonShyShy',
    'title' => 'Shy',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Shy buttons are used in contexts that need a less obtrusive presentation than usual buttons have, e.g. in UI collections like Dropdowns.',
      'composition' => 'Shy buttons do not come with a separte background color.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Shy buttons MUST only be used, if a standard button presentation is not appropriate. E.g. if usual buttons destroy the presentation of an outer UI component or if there is not enough space for a standard button presentation.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Shy',
  ),
  'ButtonMonthMonth' => 
  array (
    'id' => 'ButtonMonthMonth',
    'title' => 'Month',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Month Button enables to select a specific month to fire some action (probably a change of view).',
      'composition' => 'The Month Button is composed of a Button showing the default month directly (probably the month currently rendered by some view). A dropdown contains an interface enabling the selection of a month from the future or the past.',
      'effect' => 'Selecting a month from the dropdown directly fires the according action (e.g. switching the view to the selected month). Technically this is currently a Javascript event being fired.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Marginal Grid Calendar',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Selecting a month from the dropdown MUST directly fire the according action.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Month',
  ),
  'ButtonTagTag' => 
  array (
    'id' => 'ButtonTagTag',
    'title' => 'Tag',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Tags classify entities. Thus, their primary purpose is the visualization of those classifications for one entity. However, tags are usually clickable - either to edit associations or list related entities, i.e. objects with the same tag.',
      'composition' => 'Tags are a colored area with text on it. When used in a tag-cloud (a list of tags), tags can be visually "weighted" according to the number of their occurences, be it with different (font-)sizes, different colors or all of them.',
      'effect' => 'Tags may trigger an action or change the view when clicked. There is no visual difference (besides the cursor) between clickable tags and tags with unavailable action.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Tags SHOULD be used with an additonal class to adjust colors.',
        2 => 'The font-color SHOULD be set with high contrast to the chosen background color.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The functionality of the tag button MUST be indicated for screen readers by an aria-label.',
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Tag',
  ),
  'ButtonBulkyBulky' => 
  array (
    'id' => 'ButtonBulkyBulky',
    'title' => 'Bulky',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The bulky button is highly obtrusive. It combines the recognisability of a graphical element with an explicit textual label on an unusually sized button. It is hard to overlook and indicates an important action on the screen.',
      'composition' => 'The Bulky Button consists of an icon or glyph and a (very short) text.',
      'effect' => 'The button has an "engaged"-state: When the button is used to toggle the visibility of a component, it stays engaged until the component is hidden again.',
      'rivals' => 
      array (
        'Primary Button' => 'Primary Buttons indicate the most important action among a collection of actions, e.g. in a tool bar, controls of a form or in a modal. Bulky Buttons make it hard to miss the indicated action by occupying space.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Since Bulky Buttons are so obtrusive they MUST only be used to indicate important actions on the screen.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'The icon/glyph and the text on the Bulky Button MUST be corresponding.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Bulky Buttons MUST occupy as much space as their container leaves them.',
        2 => 'When used to toggle the visibility of another component, the button MUST reflect the componentes state of visibility.',
      ),
      'responsiveness' => 
      array (
        1 => 'On screens larger than small size, Bulky Buttons MUST contain an icon or glyph plus text.',
        2 => 'On small-sized screens, Bulky Buttons SHOULD contain only an icon or glyph.',
      ),
      'accessibility' => 
      array (
        1 => 'The functionality of the Bulky Button MUST be indicated for screen readers by an aria-label.',
        2 => 'Some Buttons can be stateful; when engaged, the state MUST be reflected in the "aria-pressed"-, respectively the "aria-checked"-attribute. If the Button is not stateful (which is the default), the aria-attribute SHOULD be omitted.',
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Bulky',
  ),
  'ButtonToggleToggle' => 
  array (
    'id' => 'ButtonToggleToggle',
    'title' => 'Toggle',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Toggle Button triggers the activation/deactivation of some control already shown on the screen, i.e. a filter. The deactivation of a control means, that it is still shown and the user can still interact with it, but it has no effect on the system.',
      'composition' => 'The Toggle Button uses different background colors for the on and off state. The toggle of the Toggle Button is placed on the left side when it is off, and on the right side when it is on.',
      'effect' => 'Clicking the Toggle Button activates/deactivates the related control. The on/off state of the control is visually noticeable for the user, i.e. by greying out the control in the off state.',
      'rivals' => 
      array (
        'Checkbox' => 'Checkboxes are established as controls for choosing a value for submission and are therefore handled as Inputs. Toggle Buttons are used for switching the activation of some control and are therefore handled as Buttons.',
        'Collapse/Expand Glyph' => 'Collapse and Expand Glyphs hide or trigger the display of some content. Toggle Buttons leave a control visible to the user, but activate or deactivate it.',
        'Mode View Control' => 'Mode View Controls enable the switching between different aspects of some data. Toggle Buttons activate/deactivate some control, but do not change or switch the control which the user see currently.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Toggle Button MUST be placed next to the control it activates/deactivates.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
        1 => 'The Toggle Button SHOULD be placed above the control it activates/deactivates.',
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The functionality of the Toggle Button MUST be indicated for screen readers by an aria-label.',
        2 => 'The state of the Toggle Button MUST be indicated for screen readers by using the aria-pressed attribute.',
      ),
    ),
    'parent' => 'ButtonFactoryButton',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Button/Toggle',
  ),
  'DropdownStandardStandard' => 
  array (
    'id' => 'DropdownStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Standard Dropdown is the default Dropdown to be used in ILIAS. If there is no good reason using another Dropdown instance in ILIAS, this is the one that should be used.',
      'composition' => 'The Standard Dropdown uses the primary color as background.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard Dropdown MUST be used if there is no good reason using another instance.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'DropdownFactoryDropdown',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Dropdown/Standard',
  ),
  'ViewControlModeMode' => 
  array (
    'id' => 'ViewControlModeMode',
    'title' => 'Mode',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Mode View Controls enable the switching between different aspects of some data. The different modes are mutually exclusive and can therefore not be activated at once.',
      'composition' => 'Mode View Controls are composed of Buttons switching between active and inactive states.',
      'effect' => 'Clicking on an inactive Button turns this button active and all other inactive. Clicking on an active button has no effect.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Exactly one Button MUST always be active.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The HTML container enclosing the buttons of the Mode View Control MUST cary the role-attribute "group".',
        2 => 'The HTML container enclosing the buttons of the Mode View Control MUST set an aria-label describing the element. Eg. "Mode View Control"',
        3 => 'The Buttons of the Mode View Control MUST set an aria-label clearly describing what the button shows if clicked. E.g. "List View", "Month View", ...',
        4 => 'The currently active Button must be labeled by setting aria-checked to "true".',
      ),
    ),
    'parent' => 'ViewControlFactoryViewControl',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/ViewControl/Mode',
  ),
  'ViewControlSectionSection' => 
  array (
    'id' => 'ViewControlSectionSection',
    'title' => 'Section',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Section View Controls enable the switching between different sections of some data. Examples are subsequent days/weeks/months in a calendar or entries in a blog.',
      'composition' => 'Section View Controls are composed of three Buttons. The Button on the left caries a Back Glyph, the Button in the middle is either a Default- or Split Button labeling the data displayed below and the Button on the right carries a next Glyph.',
      'effect' => 'Clicking on the Buttons left or right changes the selection of the displayed data by a fixed interval. Clicking the Button in the middle opens the sections hinted by the label of the button (e.g. "Today").',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ViewControlFactoryViewControl',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/ViewControl/Section',
  ),
  'ViewControlSortationSortation' => 
  array (
    'id' => 'ViewControlSortationSortation',
    'title' => 'Sortation',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The sortation view control enables users to change the order in which some data is presented. This control applies to all sorts of _structured_ data, like tables and lists.',
      'composition' => 'Sortation uses a Dropdown to display a collection of shy-buttons.',
      'effect' => 'A click on an option will change the ordering of the associated data-list by calling a page with a parameter according to the selected option or triggering a signal. The label displayed in the dropdown will be set to the selected sorting.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Sortation MUST NOT be used standalone.',
        2 => 'Sortations MUST BE visually close to the list or table their operation will have effect upon.',
        3 => 'There SHOULD NOT be more than one Sortation per view.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Sortation MUST be operable via keyboard only.',
      ),
    ),
    'parent' => 'ViewControlFactoryViewControl',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/ViewControl/Sortation',
  ),
  'ViewControlPaginationPagination' => 
  array (
    'id' => 'ViewControlPaginationPagination',
    'title' => 'Pagination',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Pagination allows structured data being displayed in chunks by limiting the number of entries shown. It provides the user with controls to leaf through the chunks of entries.',
      'composition' => 'Pagination is a collection of shy-buttons to access distinct chunks of data, framed by next/back glyphs. When used with the "DropdownAt" option, a dropdown is rendered if the number of chunks exceeds the option\'s value.',
      'effect' => 'A click on an chunk-option will change the offset of the displayed data-list, thus displaying the respective chunk of entries. The active option is rendered as an unavailable shy-button. Clicking the next/back-glyphs, the previous (respectively: the next) chunk of entries is being displayed. If a previous/next chunk is not available, the glyph is rendered unavailable. If the pagination is used with a maximum of chunk-options to be shown, both first and last options are always displayed.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Pagination MUST only be used for structured data, like tables and lists.',
        2 => 'A Pagination MUST NOT be used standalone.',
        3 => 'Paginations MUST be visually close to the list or table their operation will have effect upon. They MAY be placed directly above and/or below the list.',
        4 => 'You MUST use the default label if dealing with tables.',
        5 => 'You MAY use a different label, if the default one is not working for the use case. But indicating the total number of items (X of Y) MUST be kept anyway.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Pagination MUST be operable via keyboard only.',
      ),
    ),
    'parent' => 'ViewControlFactoryViewControl',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/ViewControl/Pagination',
  ),
  'ChartScaleBarScaleBar' => 
  array (
    'id' => 'ChartScaleBarScaleBar',
    'title' => 'Scale Bar',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Scale Bars are used to display a set of items some of which especially highlighted. E.g. they can be used to inform about a score or target on a rank ordered scale.',
      'composition' => 'Scale Bars are composed of of a set of bars of equal size. Each bar contains a title. The highlighted elements differ from the others through their darkened background.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Scale Bars are are used in the Competence Management on the Personal Desktop.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Each Bar of the Scale Bars MUST bear a title.',
        2 => 'The title of Scale Bars MUST NOT contain any other content than text.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ChartFactoryChart',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Chart/ScaleBar',
  ),
  'ChartProgressMeterFactoryProgressMeter' => 
  array (
    'id' => 'ChartProgressMeterFactoryProgressMeter',
    'title' => 'Progress Meter',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Progress Meters are used to display a progress or performance. E.g. they can be used to inform about a progress in a learning objective or to compare the performance between the initial and final test in a course.',
      'composition' => 'Progress Meters are composed of one or two bars inside a horseshoe-like container. The bars change between two colors, to identify a specific reached value. It additionally may show a percentage of the values and also an identifying text.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Progress Meters are used inside courses on the content view.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Progress Meters MUST contain a maximum value. It MUST be numeric and represents the maximum value.',
        2 => 'Progress Meters MUST contain a main value. It MUST be a numeric value between 0 and the maximum. It is represented as the main bar.',
        3 => 'Progress Meters SHOULD contain a required value. It MUST be a numeric value between 0 and the maximum. It represents the required value that has to be reached.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ChartFactoryChart',
    'children' => 
    array (
      0 => 'ChartProgressMeterStandardStandard',
      1 => 'ChartProgressMeterFixedSizeFixedSize',
      2 => 'ChartProgressMeterMiniMini',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Chart/ProgressMeter/Factory',
  ),
  'ChartProgressMeterStandardStandard' => 
  array (
    'id' => 'ChartProgressMeterStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Standard Progress Meter is usually the tool of choice. The Progress Meter informs users about their Progress compared to a the required maximum.',
      'composition' => 'The Standard Progress Meter is composed of one bar representing a value achieved in relation to a maximum and a required value indicated by some pointer. The comparison value is represented by a second bar below the first one. Also the percentage values of main and required are shown as text.',
      'effect' => 'On changing screen size they decrease their size including font size in various steps.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Standard Progress Meters MAY contain a comparison value. If there is a comparison value it MUST be a numeric value between 0 and the maximum. It is represented as the second bar.',
        2 => 'Standard Progress Meters MAY contain a main value text.',
        3 => 'Standard Progress Meters MAY contain a required value text.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ChartProgressMeterFactoryProgressMeter',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Chart/ProgressMeter/Standard',
  ),
  'ChartProgressMeterFixedSizeFixedSize' => 
  array (
    'id' => 'ChartProgressMeterFixedSizeFixedSize',
    'title' => 'Fixed Size',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Fixed Size Progress Meter ensures that the element is rendered exactly as set regardless of the screen size.',
      'composition' => 'See composition description for Standard Progress Meter.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'See composition rules for Standard Progress Meter.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ChartProgressMeterFactoryProgressMeter',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Chart/ProgressMeter/FixedSize',
  ),
  'ChartProgressMeterMiniMini' => 
  array (
    'id' => 'ChartProgressMeterMiniMini',
    'title' => 'Mini',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Mini Progress Meter is used, if it needs to be as small as possible, like in an heading. It is used to display only a single Progress or performance indicator.',
      'composition' => 'Other than the Standard and Fixed Size Progress Meter it does not allow a comparison value and only displays a single bar. It also does not display any text.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'See composition rules for Progress Meter.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ChartProgressMeterFactoryProgressMeter',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Chart/ProgressMeter/Mini',
  ),
  'InputFieldFactoryField' => 
  array (
    'id' => 'InputFieldFactoryField',
    'title' => 'Field',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Inputs fields are different from other UI components. They bundle two things: First, they are used for displaying, as similar to other components. Second, they are used to define the server side processing of data that is received from the client. Thus, an input field defines which visual input elements a user will see, which constraints are put on the data entered in these fields and which data developers on the server side retrieve from these inputs. Fields need to be enclosed by a container which defines the means of submitting the data collected by the fields and the way those inputs are arranged to be displayed for some client.',
      'composition' => 'Fields are either individuals or groups of inputs. Both, individual fields and groups, share the same basic input interface. Input-Fields may have a label and byline.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A byline (explanatory text) MAY be added to input fields.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'If a label is set, it MUST be composed of one single term or a very short phrase. The identifier is an eye catcher for users skimming over a potentially large set of fields.',
        2 => 'If a label is set, it MUST avoid lingo. Intelligibility by occasional users is prioritized over technical accuracy. The accurate technical expression is to be mentioned in the byline.',
        3 => 'If a label is set, it MUST make a positive statement. If the purpose of the setting is inherently negative, use Verbs as “Limit..”, “Lock..”.',
        4 => 'If bylines are provided they MUST be informative, not merely repeating the identifier’s or input element’s content. If no informative description can be devised, no description is needed.',
        5 => 'A byline MUST clearly state what effect the fields produces and explain, why this might be important and what it can be used for.',
        6 => 'Bulk bylines underneath a stack of option explaining all of the options in one paragraph MUST NOT be used. Use individual bylines instead.',
        7 => 'A byline SHOULD NOT address the user directly. Addressing users directly is reserved for cases of high risk of severe mis-configuration.',
        8 => 'A byline MUST be grammatically complete sentence with a period (.) at the end.',
        9 => 'Bylines SHOULD be short with no more than 25 words.',
        10 => 'Bylines SHOULD NOT use any formatting in descriptions (bold, italic or similar).',
        11 => 'If bylines refer to other tabs or options or tables by name, that reference should be made in quotation marks:  ‘Info’-tab, button ‘Show Test Results’,  ‘Table of Detailed Test Results’. Use proper quotation marks, not apostrophes. Use single quotation marks for english language and double quotation marks for german language.',
        12 => 'By-lines MUST NOT feature parentheses since they greatly diminish readability.',
        13 => 'By-lines SHOULD NOT start with terms such as: If this option is set … If this setting is active … Choose this setting if … This setting … Rather state what happens directly: Participants get / make  / can … Point in time after which…. ILIAS will monitor… Sub-items xy are automatically whatever ... Xy will be displayed at place.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Disabled input elements MUST be indicated by setting the “disabled” attribute.',
        2 => 'If focused, the input elements MUST change their input-border-color to the input-focus-border-color.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'All fields visible in a view MUST be accessible by keyboard by using the ‘Tab’-Key.',
      ),
    ),
    'parent' => 'InputFactoryInput',
    'children' => 
    array (
      0 => 'InputFieldTextText',
      1 => 'InputFieldNumericNumeric',
      2 => 'InputFieldGroupGroup',
      3 => 'InputFieldOptionalGroupOptionalGroup',
      4 => 'InputFieldSwitchableGroupSwitchableGroup',
      5 => 'InputFieldSectionSection',
      6 => 'InputFieldCheckboxCheckbox',
      7 => 'InputFieldTagTag',
      8 => 'InputFieldPasswordPassword',
      9 => 'InputFieldSelectSelect',
      10 => 'InputFieldTextareaTextarea',
      11 => 'InputFieldRadioRadio',
      12 => 'InputFieldMultiSelectMultiSelect',
      13 => 'InputFieldDateTimeDateTime',
      14 => 'InputFieldDurationDuration',
      15 => 'InputFieldFileFile',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Factory',
  ),
  'InputContainerFactoryContainer' => 
  array (
    'id' => 'InputContainerFactoryContainer',
    'title' => 'Container',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'An input container defines which means are used to submit the data to the system and how input-fields are being displayed in the UI. Furthermore containers will process received data according to the transformations and constraints of its fields.',
      'composition' => 'A Container holds one ore more fields.',
      'effect' => '',
      'rivals' => 
      array (
        'Group Field Input' => 'Groups are used within containers to functionally bundle input-fields.',
        'Section Field Input' => 'Sections are used within containers to visually tie fields together.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'InputFactoryInput',
    'children' => 
    array (
      0 => 'InputContainerFormFactoryForm',
      1 => 'InputContainerFilterFactoryFilter',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Container/Factory',
  ),
  'InputFieldTextText' => 
  array (
    'id' => 'InputFieldTextText',
    'title' => 'Text',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A text-field is intended for entering short single-line texts.',
      'composition' => 'Text fields will render an input-tag with type="text".',
      'effect' => 'Text inputs are restricted to one line of text.',
      'rivals' => 
      array (
        'numeric field' => 'Use a numeric field if users should input numbers.',
        'alphabet field' => 'Use an alphabet field if the user should input single letters.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Text Input MUST NOT be used for choosing from predetermined options.',
        2 => 'Text input MUST NOT be used for numeric input, a Numeric Field is to be used instead.',
        3 => 'Text Input MUST NOT be used for letter-only input, an Alphabet Field is to be used instead.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Text Input MUST limit the number of characters, if a certain length of text-input may not be exceeded (e.g. due to database-limitations).',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Text',
  ),
  'InputFieldNumericNumeric' => 
  array (
    'id' => 'InputFieldNumericNumeric',
    'title' => 'Numeric',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A numeric field is used to retrieve numeric values from the user.',
      'composition' => 'Numeric inputs will render an input-tag with type="number".',
      'effect' => 'The field does not accept any data other than numeric values. When focused most browser will show a small vertical rocker to increase and decrease the value in the field.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Number Inputs MUST NOT be used for binary choices.',
        2 => 'Magic numbers such as -1 or 0 to specify “limitless” or smoother options MUST NOT be used.',
        3 => 'A valid input range SHOULD be specified.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Numeric',
  ),
  'InputFieldGroupGroup' => 
  array (
    'id' => 'InputFieldGroupGroup',
    'title' => 'Group',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Input groups are an unlabeled collection of inputs. They are used to build logical units of other fields. Such units might be used to attach some constraints or transformations for multiple fields.',
      'composition' => 'Groups are composed of inputs. They do not contain a label. The grouping remains invisible for the client.',
      'effect' => 'There is no visible effect using groups.',
      'rivals' => 
      array (
        'sections' => 'Sections are used to generate a visible relation of fields.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Group',
  ),
  'InputFieldOptionalGroupOptionalGroup' => 
  array (
    'id' => 'InputFieldOptionalGroupOptionalGroup',
    'title' => 'Optional Group',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'An optional group is a collection of input where the user needs to make a conscious decision to use or not use the provided inputs.',
      'composition' => 'An optional group is composed of a checkbox that bears the label and the byline of the group and the contained inputs that are arranged in a way to make them visually belong to the checkbox.',
      'effect' => 'If the checkbox is checked, the contained inputs are revealed, while they are hidden when the checkbox is not checked.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'There MUST NOT be a nesting of more than one optional and/or switchable group. The only exception to this rule is the required quantification of a subsetting by a date or number. These exceptions MUST individually accepted by the Jour Fixe.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/OptionalGroup',
  ),
  'InputFieldSwitchableGroupSwitchableGroup' => 
  array (
    'id' => 'InputFieldSwitchableGroupSwitchableGroup',
    'title' => 'Switchable Group',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A switchable group is a collection of groups that makes the user decide which group he wants to fill with further input.',
      'composition' => 'A switchable group is composed of radiobuttons that bear the label and the byline of the according group and the inputs contained in that group in a way to make them visually belong to the radio group.',
      'effect' => 'If a radiobutton is selected, the according inputs are revealed and the other groups are hidden.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'There MUST NOT be a nesting of more than one optional and/or switchable group. The only exception to this rule is the required quantification of a subsetting by a date or number. These exceptions MUST individually accepted by the Jour Fixe.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/SwitchableGroup',
  ),
  'InputFieldSectionSection' => 
  array (
    'id' => 'InputFieldSectionSection',
    'title' => 'Section',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Sections are used to visually group inputs to a common context.',
      'composition' => 'Sections are composed of inputs. They carry a label and are visible for the client.',
      'effect' => '',
      'rivals' => 
      array (
        'Groups' => 'Groups are used as purely logical units, while sections visualize the correlation of fields.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Sections SHOULD comprise 2 to 5 Settings.',
        2 => 'More than 5 Settings SHOULD be split into two areas unless this would tamper with the “familiar” information architecture of forms.',
        3 => 'In standard forms, there MUST NOT be a Setting without an enclosing Titled Form Section. If necessary a Titled Form Section MAY contain only one single Setting.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'The label SHOULD summarize the contained settings accurately from a user’s perspective.',
        2 => 'The title SHOULD contain less than 30 characters.',
        3 => 'The titles MUST be cross-checked with similar sections in other objects or services to ensure consistency throughout ILIAS.',
        4 => 'In doubt consistency SHOULD be prioritized over accuracy in titles.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Section',
  ),
  'InputFieldCheckboxCheckbox' => 
  array (
    'id' => 'InputFieldCheckboxCheckbox',
    'title' => 'Checkbox',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A checkbox is used to govern a state, action, or set / not to set a value. Checkboxes are typically used to switch on some additional behaviour or services.',
      'composition' => 'Each Checkbox is labeled by an identifier stating something positive to describe the effect of checking the Checkbox.',
      'effect' => 'If used in a form, a checkbox may open a dependant section (formerly known as sub form).',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A checkbox MUST NOT be used whenever a user has to perform a binary choice where option is not automatically the inverse of the other (such as \'Order by Date\' and \'Order by Name\'). A Select Input or a Radio Group in MUST be used in this case.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'The checkbox’s identifier MUST always state something positive.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Checkbox',
  ),
  'InputFieldTagTag' => 
  array (
    'id' => 'InputFieldTagTag',
    'title' => 'Tag',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Tag Input is used to choose a subset amount of tags (techn.: array of strings) out of a finite list of tags. The Tag Field SHOULD be used, whenever it is not required or not possible to display all available options, e.g. because the amount is too high when the options are "all users" or "all tags. Besides the tags to choose from, the user can provide own tags by typing them into the Input (@see Tag::withOptionsAreExtendable ).',
      'composition' => 'The Input is presented as a text-input and prepended by already selected tags presented as texts including a close-button.  (e.g. [ Amsterdam X ] ) The input is labeled by the label given. Suggested tags are listed in a dropdown-list beneath the text-input. All mentioned elements are not taken from the UI-Service.',
      'effect' => 'As soon as the user types in the text-input, the Tag Input suggests matching tags from the the given list of tags. Suggestions will appear after a defined amount of characters, one by default. Clicking on one of these tags closes the list and transfers the selected tag into the text-input, displayed as a tag with a close-button. By clicking on a close-button of a already selected tag, this tag will disappear from the Input. All mentioned elements are not taken from the UI-Service.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Tag Input is used in forms.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Tag Input MUST NOT be used whenever a user has to perform a binary choice where option is automatically the inverse of the other. A Checkbox MUST be used in this case.',
        2 => 'A Tag Input MUST NOT be used whenever a user has to perform a choice from a list of options where only one Option has to be selected. A Select MUST be used in this case (Not yet part of the KitchenSink).',
        3 => 'A Tag Input SHOULD be used whenever a User should be able to extend the list of given options.',
        4 => 'A Tag Input MUST NOT be used when a User has to choose from a finite list of options which can\'t be extended by users Input, a Multi Select MUST be used in this case',
        5 => 'The tags provided SHOULD NOT have long titles (50 characters).',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Tag',
  ),
  'InputFieldPasswordPassword' => 
  array (
    'id' => 'InputFieldPasswordPassword',
    'title' => 'Password',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A password-field is intended for entering passwords.',
      'composition' => 'Text password will render an input-tag with type="password". Optionally, an eye-closed/open glyph is rendered above the input to toggle revelation/masking.',
      'effect' => 'Text password is restricted to one line of text and will mask the entered characters. When configured with the revelation-option, the clear-text password will be shown (respectively hidden) upon clicking the glyph.',
      'rivals' => 
      array (
        'text field' => 'Use a text field for discloseable information (i.e. information that can safely be displayed to an audience)',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Login-Form and own profile (change Password).',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Password Input MUST be used for passwords.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Password Input SHOULD NOT limit the number of characters.',
        2 => 'When used for authentication, Password Input MUST NOT reveal any settings by placing constraints on it.',
        3 => 'On the other hand, when setting a password, Password Input SHOULD enforce strong passwords by appropiate contraints.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Password',
  ),
  'InputFieldSelectSelect' => 
  array (
    'id' => 'InputFieldSelectSelect',
    'title' => 'Select',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A select is used to allow users to pick among a number of options.',
      'composition' => 'Select field will render a select-tag with a number of options. First option contains the string "-" and it is selectable depending on the required property.',
      'effect' => 'Only one option is selectable. If the property required is set as true, the first option will be hidden after clicking on the select input at the first time.',
      'rivals' => 
      array (
        'Checkbox field' => 'Use a checkbox field for a binary yes/no choice.',
        'Radio buttons' => 'Use radio buttons when the alternatives matter. When is wanted to user to see what they are not choosing. If it is a long list or the alternatives are not that important, use a select.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Select Input MAY be used for choosing from predetermined options.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Only one option is selectable.',
        2 => 'First Option MAY be selectable when the field is not required.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Select',
  ),
  'InputFieldTextareaTextarea' => 
  array (
    'id' => 'InputFieldTextareaTextarea',
    'title' => 'Textarea',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A textarea is intended for entering multi-line texts.',
      'composition' => 'Textarea fields will render an textarea HTML tag. If a limit is set, a byline about limitation is automatically set.',
      'effect' => 'Textarea inputs are NOT restricted to one line of text. A textarea counts the amount of character input by user and displays the number.',
      'rivals' => 
      array (
        'text field' => 'Use a text field if users should input only one line of text.',
        'numeric field' => 'Use a numeric field if users should input numbers.',
        'alphabet field' => 'Use an alphabet field if the user should input single letters.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Textarea Input MUST NOT be used for choosing from predetermined options.',
        2 => 'Textarea input MUST NOT be used for numeric input, a Numeric Field is to be used instead.',
        3 => 'Textarea Input MUST NOT be used for letter-only input, an Alphabet Field is to be used instead.',
        4 => 'Textarea Input MUST NOT be used for single-line input, a Text Field is to be used instead.',
        5 => 'If a min. or max. number of characters is set for textarea, a byline MUST be added stating the number of min. and/or max. characters.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Textarea Input MAY limit the number of characters, if a certain length of text-input may not be exceeded (e.g. due to database-limitations).',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Textarea',
  ),
  'InputFieldRadioRadio' => 
  array (
    'id' => 'InputFieldRadioRadio',
    'title' => 'Radio',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Radio Input is used to depict a choice of options excluding each other.',
      'composition' => 'The Radio is considered as one field with a label and a number of options. Each option in turn bears a label in form of a positive statement.',
      'effect' => 'If used in a form, each option of a Radio may open a Dependant Section (formerly known as Sub Form).',
      'rivals' => 
      array (
        'Checkbox Field' => 'Use a Checkbox Field for a binary yes/no choice.',
        'Select' => 'Use Selects to choose items from a longer list as the configuration of an aspect; when the choice has severe effects on, e.g. service behavior, or needs further configuration, stick to radios.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Radio Input SHOULD contain 3 to 5 options. If there are more, the Select Input might be the better option.',
        2 => 'Radios MAY also be used to select between two options where one is not automatically the inverse of the other',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'Each option MUST be labeled.',
        2 => 'The options\' labels MUST state something positive.',
        3 => 'An option\'s label SHOULD not simply repeat the label of the Radio. A meaningful labeling SHOULD be chosen instead.',
      ),
      'ordering' => 
      array (
        1 => 'The presumably most relevant option SHOULD be the first option.',
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Radio',
  ),
  'InputFieldMultiSelectMultiSelect' => 
  array (
    'id' => 'InputFieldMultiSelectMultiSelect',
    'title' => 'Multi Select',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Multi Select is used to allow users to pick several options from a list.',
      'composition' => 'The Multi Select field will render labeled checkboxes according to given options.',
      'effect' => '',
      'rivals' => 
      array (
        'Checkbox Field' => 'Use a Checkbox Field for a binary yes/no choice.',
        'Tag Field' => 'Use a Tag Input when the user is able to extend the list of given options.',
        'Select Field' => 'Use a Select Input when the user\'s choice is limited to one option or the options are mutually exclusive.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Multi Select input SHOULD be used when a user has to choose from a finite list of options which cannot be extended by the user\'s input and where more than one choice can be made.',
        2 => 'A Multi Select input MUST NOT be used whenever a user has to perform a binary choice where option is automatically the inverse of the other. A Checkbox MUST be used in this case.',
        3 => 'A Multi Select input MUST NOT be used whenever a user has to perform a choice from a list of options where only one option can be selected. A Select MUST be used in this case',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'Each option MUST be labeled.',
        2 => 'If the option governs a change of (service-)behavior, the option\'s label MUST be in form of a positive statement.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/MultiSelect',
  ),
  'InputFieldDateTimeDateTime' => 
  array (
    'id' => 'InputFieldDateTimeDateTime',
    'title' => 'Date Time',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A DateTime Input is used to enter dates and/or times.',
      'composition' => 'DateTime Input will render a text field with the placeholder-attribute indicating the specified format. Next to the text field, a Calendar Glyph will trigger a popover containing a graphical selector/date-picker. Depending on configuration (withTimeOnly), next to the date-picker a time-picker will be shown.',
      'effect' => 'When clicking the glyph, a popover is shown with the days of the month. Within the popover, the user may navigate to prior and following months.',
      'rivals' => 
      array (
        'Text field' => 'Text Felds MUST NOT be used to input date-strings.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'DateTime Input is used in forms.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'When used as a time-only input, the glyph MUST be Time Glyph.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/DateTime',
  ),
  'InputFieldDurationDuration' => 
  array (
    'id' => 'InputFieldDurationDuration',
    'title' => 'Duration',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Duration Input is used to enter a time span.',
      'composition' => 'A Duration Input is composed as a group of two DateTime Inputs.',
      'effect' => 'According to configuration, the inputs will accept dates, times or datetimes. Invalid input will be corrected automatically. The start point must take place before the endpoint; an error-message is shown if this is not the case.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Duration Input is used in forms.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'When used with time-only inputs, the glyph MUST be Time Glyph.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/Duration',
  ),
  'InputFieldFileFile' => 
  array (
    'id' => 'InputFieldFileFile',
    'title' => 'File',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A File Input is used to upload a single file using the native filebrowser of a browser or Drag&Drop.',
      'composition' => 'A File Input is composed as a Dropzone and a list of files. The Dropzone contains a Shy Button for file selection.',
      'effect' => 'According to configuration, the input will accept files of certain types and sizes. Dragging files from a folder on the comuter to the Page in ILIAS will highlight the Dropzone. Clicking the Shy Button which starts the native browser file selection. Droppping the file onto the Dropzone or selecting a file in native browser will directly upload the file and add a info-line beneath the dropzone with the title and the size of the file and a Remove Glyph once the upload has finished. Clicking the Remove Glyph will remove the file-info and calls the upload-handler to delete the already uploaded file. Invalid files will lead to a error message in the dropzone.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Upload icons for items in the MainBar (https://docu.ilias.de/goto_docu_wiki_wpage_3993_1357.html)',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The consuming component MUST handle uploads and deletions of files.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputFieldFactoryField',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Field/File',
  ),
  'InputContainerFormFactoryForm' => 
  array (
    'id' => 'InputContainerFormFactoryForm',
    'title' => 'Form',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Forms are used to let the user enter or modify data, check her inputs and submit them to the system. Forms arrange their contents (i.e. fields) in an explanatory rather than space-saving way.',
      'composition' => 'Forms are composed of input fields, displaying their labels and bylines.',
      'effect' => '',
      'rivals' => 
      array (
        'filter' => 'Filters are used to limit search results; they never modify data in the system.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'InputContainerFactoryContainer',
    'children' => 
    array (
      0 => 'InputContainerFormStandardStandard',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Container/Form/Factory',
  ),
  'InputContainerFilterFactoryFilter' => 
  array (
    'id' => 'InputContainerFilterFactoryFilter',
    'title' => 'Filter',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Filters are used to let the user limit content within a table, list or any other collection of items presented on the screen.',
      'composition' => 'Filters are composed of two visually separated areas: First, there is the Filter Bar at the top. It contains an Expand/Collapse Glyph on the left side. On the right, an "Apply" Bulky Button, a "Reset" Bulky Button and a Toggle Button for activating/deactivating the Filter are placed. An additional row with set filter settings will be shown at the bottom of the Filter Bar, when the Filter Bar is collapsed and the Filter is activated at the same time. Second, there is an area where the Input Fields are displayed. Every Input Field is rendered with a Label on the left and a "Remove" Glyph on the right. The values, that are currently entered in the Input Fields, are displayed as non-editable text and will get editable when the user focuses an Input Field (see effect). After the last Input Field, an "Add" Bulky Button is shown if additional Input Fields can be added.',
      'effect' => 'In the Filter Bar: Clicking on the Expand/Collapse Glyph expands/collapses the second area of the Filter, where the Input Fields are placed. When the Filter Bar is expanded, the row with set filter settings at the bottom of the Filter Bar will be hidden. Clicking on the "Apply" Bulky Button applies the settings which the user has made for the Filter and reloads the content of the item collection (e.g. Table) immediately. Clicking on the "Reset" Bulky Button resets the Filter to the initial state and reloads the content of the item collection immediately. Clicking on the "Toggle" Button imitates a click on the "Apply" Bulky Button, activates/deactivates the Filter and reloads the content of the item collection immediately. In the Input Fields Area: Clicking on an Input Field between its Label and its "Remove" Glyph shows up a Popover where the Input Field is presented. Writing down a value into the Input Field in the Popover synchronizes the values in both Input Fields. Clicking on the "Remove" Glyph next to an Input Field makes this Input Field disappear from the Filter. Clicking on the "Add" Bulky Button shows up a list with Labels of all possible Input Fields, which are not part of the Filter yet, in a Popover. Clicking on one specific Input Field Label in this list adds the selected Input Field to the Filter and imitates a click on it.',
      'rivals' => 
      array (
        'forms' => 'Unlike Filters, Forms are used to enter or modify data in the system.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Filters MUST be used on the same page as tables or other collections of items.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Input Fields outside of Popovers MUST NOT be editable, just clickable.',
      ),
      'wording' => 
      array (
        1 => 'Labels of Input Fields MUST be shown shortened (with three dots at the end) when space is scarce.',
        2 => 'The set filter settings in the bottom row of the Filter Bar MUST be shown shortened when space is scarce.',
      ),
      'ordering' => 
      array (
        1 => 'A Filter MUST be placed above the item collection it acts upon.',
      ),
      'style' => 
      array (
        1 => 'The Filter Bar and the Input Fields Area SHOULD be separated visually, e.g. with a border-line.',
        2 => 'The Toggle Button MUST NOT contain a Label.',
        3 => 'The Popovers SHOULD be shown below the Input Field or the "Add" Bulky Button.',
      ),
      'responsiveness' => 
      array (
        1 => 'On screens larger than medium size, there MUST be three Input Fields per row. On medium-sized screens or below, only one Input Field MUST be shown per row.',
      ),
      'accessibility' => 
      array (
        1 => 'Input Fields MUST be accessible by keyboard by using the "Tab"-Key and clickable by using the "Return"-Key.',
      ),
    ),
    'parent' => 'InputContainerFactoryContainer',
    'children' => 
    array (
      0 => 'InputContainerFilterStandardStandard',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Container/Filter/Factory',
  ),
  'InputContainerFormStandardStandard' => 
  array (
    'id' => 'InputContainerFormStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Standard Forms are used for creating content of sub-items or for configuring objects or services.',
      'composition' => 'Standard forms provide a submit-button.',
      'effect' => 'The users manipulates input-values and saves the form to apply the settings to the object or service or create new entities in the system.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard Forms MUST NOT be used on the same page as tables.',
        2 => 'Standard Forms MUST NOT be used on the same page as toolbars.',
      ),
      'composition' => 
      array (
        1 => 'Each form SHOULD contain at least one section displaying a title.',
        2 => 'Standard Forms MUST only be submitted by their submit-button. They MUST NOT be submitted by anything else.',
        3 => 'Wording of labels of the fields the form contains and their ordering MUST be consistent with identifiers in other objects if some for is used there for a similar purpose. If you feel a wording or ordering needs to be changed, then you MUST propose it to the JF.',
        4 => 'On top and bottom of a standard form there SHOULD be the “Save” button for the form.',
        5 => 'In some rare exceptions the Buttons MAY be named differently: if “Save” is clearly a misleading since the action is more than storing the data into the database. “Send Mail” would be an example of this.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputContainerFormFactoryForm',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Container/Form/Standard',
  ),
  'InputContainerFilterStandardStandard' => 
  array (
    'id' => 'InputContainerFilterStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The standard filter is the default filter to be used in ILIAS. If there is no good reason using another filter instance in ILIAS, this is the one that should be used.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard filters MUST be used if there is no good reason using another instance.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'InputContainerFilterFactoryFilter',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Input/Container/Filter/Standard',
  ),
  'CardStandardStandard' => 
  array (
    'id' => 'CardStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Standard Card is the default Card to be used in ILIAS. If there is no good reason using another Card instance in ILIAS, this is the one that should be used.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'http://www.ilias.de/docu/goto_docu_wiki_wpage_3208_1357.html',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard Card MUST be used if there is no good reason using another instance.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'CardFactoryCard',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Card/Standard',
  ),
  'CardRepositoryObjectRepositoryObject' => 
  array (
    'id' => 'CardRepositoryObjectRepositoryObject',
    'title' => 'Repository Object',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Repository Object cards are used in contexts that more visual information about the repository object type is needed.',
      'composition' => 'Repository Object cards add icons on a darkened layer over the image. This Darkened layer is divided into 4 horizontal cells where the icons can be located. Starting from the left, the icons have the following order:
    Cell 1: Object type (UI Icon)
    Cell 2: Learning Progress (UI ProgressMeter in the mini version) or Certificate (UI Icon)
    Cell 3: Empty
    Cell 4: Actions (UI Dropdown)
Cells and its content are responsively adapted if the size of the screen is changed.',
      'effect' => '',
      'rivals' => 
      array (
        'Item' => 'Items are used in lists or similar contexts.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'https://docu.ilias.de/goto_docu_wiki_wpage_4921_1357.html',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Repository Object Cards MAY contain a UI Icon displaying the object type.',
        2 => 'Repository Object Cards MAY contain a UI ProgressMeter displaying the learning progress of the user.',
        3 => 'Repository Object Cards MAY contain a UI Icon displaying a certificate icon if the user finished the task.',
        4 => 'Repository Object Cards MAY contain a UI ProgressMeter OR UI Icon certificate, NOT both.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'CardFactoryCard',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Card/RepositoryObject',
  ),
  'ListingUnorderedUnordered' => 
  array (
    'id' => 'ListingUnorderedUnordered',
    'title' => 'Unordered',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Unordered Lists are used to display a unordered set of textual elements.',
      'composition' => 'Unordered Lists are composed of a set of bullets labeling the listed items.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ListingFactoryListing',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/Unordered',
  ),
  'ListingOrderedOrdered' => 
  array (
    'id' => 'ListingOrderedOrdered',
    'title' => 'Ordered',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Ordered Lists are used to displayed a numbered set of textual elements. They are used if the order of the elements is relevant.',
      'composition' => 'Ordered Lists are composed of a set of numbers labeling the items enumerated.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ListingFactoryListing',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/Ordered',
  ),
  'ListingDescriptiveDescriptive' => 
  array (
    'id' => 'ListingDescriptiveDescriptive',
    'title' => 'Descriptive',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Descriptive Lists are used to display key-value doubles of textual-information.',
      'composition' => 'Descriptive Lists are composed of a key acting as title describing the type of information being displayed underneath.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ListingFactoryListing',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/Descriptive',
  ),
  'ListingWorkflowFactoryWorkflow' => 
  array (
    'id' => 'ListingWorkflowFactoryWorkflow',
    'title' => 'Workflow',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A workflow presents a list of steps that the user should tackle in a defined order.',
      'composition' => 'The workflow has a title and a list of workflow steps.',
      'effect' => 'Steps in a workflow reflect their progress (not applicable, not started, in progress, completed). The currently active step is marked as such. Clicking the step of a workflow MAY trigger navigation.',
      'rivals' => 
      array (
        'OrderedListing' => 'Items (Steps) in a workflow relate to some task; they reflect the tasks\'s progress and may be used to navigate to respective views.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ListingFactoryListing',
    'children' => 
    array (
      0 => 'ListingWorkflowStepStep',
      1 => 'ListingWorkflowLinearLinear',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/Workflow/Factory',
  ),
  'ListingCharacteristicValueFactoryCharacteristicValue' => 
  array (
    'id' => 'ListingCharacteristicValueFactoryCharacteristicValue',
    'title' => 'Characteristic Value',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Characteristic Value Listings are used to present characteristic values. A characteristic value is understood here as a value to quantify or describe a state indicated by some key.',
      'composition' => 'Characteristic Value Listings are composed of items containing a key labeling the value being displayed side by side.',
      'effect' => '',
      'rivals' => 
      array (
        'DescriptiveListing' => 'The items for a descriptive listing consists of a key as a title and a value describing the key.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ListingFactoryListing',
    'children' => 
    array (
      0 => 'ListingCharacteristicValueTextText',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/CharacteristicValue/Factory',
  ),
  'ListingWorkflowStepStep' => 
  array (
    'id' => 'ListingWorkflowStepStep',
    'title' => 'Step',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A workflow step represents a single step in a sequence of steps. The status of a step consists of two parts: its availability and its outcome or result. Possible variants of availability are "available", "not available" and "not available anymore". The status "active" will be set by the workflow. The status of a step is defined as "not started", "in progress", "completed successfully" and "unsuccessfully completed".',
      'composition' => 'A workflow step consists of a label, a description and a marker that indicates its availability and result. If a step is available and carries an action, the label is rendered as shy-button.',
      'effect' => 'A Step MAY have an action; when clicked, the action is triggered.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'A Step MUST be used within a Workflow.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ListingWorkflowFactoryWorkflow',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/Workflow/Step',
  ),
  'ListingWorkflowLinearLinear' => 
  array (
    'id' => 'ListingWorkflowLinearLinear',
    'title' => 'Linear',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A linear workflow is the basic form of a workflow: the user should tackle every step, one after the other.',
      'composition' => 'A linear workflow has a title and lists a sequence of steps. If the user is currently working on a step, the step is marked as active.',
      'effect' => 'A Step MAY have an action; when clicked, the action is triggered.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Use a Linear Worflow for a set of tasks that should be performed one after the other and where there are no inter-dependencies other than completeliness of the prior task.',
        2 => 'You SHOULD NOT use Linear Workflow for workflows with forked pathes due to user-decisions or calculations.',
        3 => 'You SHOULD NOT use Linear Workflow for continous workflows; a inear workflow MUST have a start- and and end-point.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ListingWorkflowFactoryWorkflow',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/Workflow/Linear',
  ),
  'ListingCharacteristicValueTextText' => 
  array (
    'id' => 'ListingCharacteristicValueTextText',
    'title' => 'Text',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Characteristic Value Text Listing is a listing that takes labeled characteristic values that are displayed side by side.',
      'composition' => 'Characteristic Value Text Listing are composed of items containing a key labeling the characteristic value where the labels as well as the values itself are expected as strings.',
      'effect' => 'The items will be presented underneath, whereby each items\' label and value will be presented side by side.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ListingCharacteristicValueFactoryCharacteristicValue',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Listing/CharacteristicValue/Text',
  ),
  'PanelStandardStandard' => 
  array (
    'id' => 'PanelStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Standard Panels are used in the center content section to group content.',
      'composition' => 'Standard Panels consist of a title and a content section. The structure of this content might be varying from Standard Panel to Standard Panel. Standard Panels may contain View Controls and Sub Panels.',
      'effect' => '',
      'rivals' => 
      array (
        'Cards' => 'Often Cards are used in Decks to display multiple uniformly structured chunks of Data horizontally and vertically.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'In Forms Standard Panels MUST be used to group different sections into Form Parts.',
        2 => 'Standard Panels SHOULD be used in the center content as primary Container for grouping content of varying content.',
      ),
      'composition' => 
      array (
        1 => 'Standard Panels MAY contain a Section View Control to change the current presentation of the content.',
        2 => 'Standard Panels MAY contain a Pagination View Control to display data in chunks.',
        3 => 'Standard Panels MAY have a Sortation View Control to perform ordering actions to the presented data.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'PanelFactoryPanel',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Standard',
  ),
  'PanelSubSub' => 
  array (
    'id' => 'PanelSubSub',
    'title' => 'Sub',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Sub Panels are used to structure the content of Standard panels further into titled sections.',
      'composition' => 'Sub Panels consist of a title and a content section. They may contain a Card on their right side to display meta information about the content displayed.',
      'effect' => '',
      'rivals' => 
      array (
        'Standard Panel' => 'The Standard Panel might contain a Sub Panel.',
        'Card' => 'The Sub Panels may contain one Card.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Sub Panels MUST only be inside Standard Panels',
      ),
      'composition' => 
      array (
        1 => 'Sub Panels MUST NOT contain Sub Panels or Standard Panels as content.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'PanelFactoryPanel',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Sub',
  ),
  'PanelReportReport' => 
  array (
    'id' => 'PanelReportReport',
    'title' => 'Report',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Report Panels display user-generated data combining text in lists, tables and sometimes  charts. Report Panels always draw from two distinct sources: the structure / scaffolding of the Report Panels stems from user-generated content (i.e a question of a survey, a competence with levels) and is filled with user-generated content harvested by that very structure (i.e. participants’ answers to the question, self-evaluation of competence).',
      'composition' => 'They are composed of a Standard Panel which contains several Sub Panels. They might also contain a card to display information meta information in their first block.',
      'effect' => 'Report Panels are predominantly used for displaying data. They may however comprise links or buttons.',
      'rivals' => 
      array (
        'Standard Panels' => 'The Report Panels contains sub panels used to structure information.',
        'Presentation Table' => 'Presentation Tables display only a subset of the data at first glance; their entries can then be expanded to show detailed information.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Report Panels SHOULD be used when user generated content of two sources (i.e results, guidelines in a template) is to be displayed alongside each other.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Links MAY open new views.',
        2 => 'Buttons MAY trigger actions or inline editing.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'PanelFactoryPanel',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Report',
  ),
  'PanelListingFactoryListing' => 
  array (
    'id' => 'PanelListingFactoryListing',
    'title' => 'Listing',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Listing Panels are used to list items following all one single template.',
      'composition' => 'Listing Panels are composed of several titled Item Groups. They further may contain a filter.',
      'effect' => 'The List Items of Listing Panels may contain a dropdown offering options to interact with the item. Further Listing Panels may be filtered and the number of sections or items to be displayed may be configurable.',
      'rivals' => 
      array (
        'Report Panels' => 'Report Panels contain sections as Sub Panels each displaying different aspects of one item.',
        'Presentation Table' => 'Use Presentation Table if you have a data set at hand that you want to make explorable and/or present as a wholeness. Also use Presentation Table if your dataset does not contain Items that represent entities.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Listing Panels SHOULD be used, if a large number of items using the same template are to be displayed in an inviting way not using a Table.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'PanelFactoryPanel',
    'children' => 
    array (
      0 => 'PanelListingStandardStandard',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Listing/Factory',
  ),
  'PanelSecondaryFactorySecondary' => 
  array (
    'id' => 'PanelSecondaryFactorySecondary',
    'title' => 'Secondary',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Secondary Panels are used to group content not located in the center section. Secondary Panels are used to display marginal content related to the current page context.',
      'composition' => 'Secondary Panels consist of a title and a content section. Secondary Panels may contain View Controls.',
      'effect' => '',
      'rivals' => 
      array (
        'Slate' => 'Secondary Panels are used to present secondary information or content that should appear in combination with the current center content. Other than the Slates in the Mainbar and the Metabar, the Secondary Panel always relates to some specific context indicated by the title of the current screen. Note that the slates in the tools of the Mainbar may have a very similar context-based characteristic. The difference between Slates, Tools and Secondary Panels currently is blurry and needs to be defined more rigorously in the future.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Secondary Panels MUST NOT be inside the center content as primary Container for grouping content of varying content.',
      ),
      'composition' => 
      array (
        1 => 'Secondary Panels MAY contain a Section View Control to change the current presentation of the content.',
        2 => 'Secondary Panels MAY contain a Pagination View Control to display data in chunks.',
        3 => 'Secondary Panels MAY have a Button to perform actions listed in a Standard Dropdown.',
        4 => 'Secondary Panels MAY have a Sortation View Control to perform ordering actions to the presented data.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'PanelFactoryPanel',
    'children' => 
    array (
      0 => 'PanelSecondaryListingListing',
      1 => 'PanelSecondaryLegacyLegacy',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Secondary/Factory',
  ),
  'PanelListingStandardStandard' => 
  array (
    'id' => 'PanelListingStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Standard item lists present lists of items with similar presentation. All items are passed by using Item Groups.',
      'composition' => 'This Listing is composed of title and a set of Item Groups. Additionally an optional dropdown to select the number/types of items to be shown at the top of the Listing.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'PanelListingFactoryListing',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Listing/Standard',
  ),
  'PanelSecondaryListingListing' => 
  array (
    'id' => 'PanelSecondaryListingListing',
    'title' => 'Listing',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Secondary Listing Panel present lists of items with similar presentation. All items are passed by using Item Groups.',
      'composition' => 'This Listing is composed of title and a set of Item Groups. Additionally an optional dropdown to select the number/types of items to be shown at the top of the Listing.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'PanelSecondaryFactorySecondary',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Secondary/Listing',
  ),
  'PanelSecondaryLegacyLegacy' => 
  array (
    'id' => 'PanelSecondaryLegacyLegacy',
    'title' => 'Legacy',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Secondary Legacy Panel present content from a Legacy component.',
      'composition' => 'The Secondary Legacy Panel is composed of title and a Legacy component. Additionally, it may have an optional footer area containing a Shy Button.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Marginal Grid Calendar.',
      1 => 'Marginal Blog section.',
      2 => 'Marginal Poll section.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'PanelSecondaryFactorySecondary',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Panel/Secondary/Legacy',
  ),
  'ItemStandardStandard' => 
  array (
    'id' => 'ItemStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'This is a standard item to be used in lists or similar contexts.',
      'composition' => 'A list item consists of a title and the following optional elements: description, action drop down, properties (name/value), a text or image or icon lead and a color. Property values MAY be interactive by using Shy Buttons.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Information MUST NOT be provided by color alone. The same information could be presented, e.g. in a property to enable screen reader access.',
      ),
    ),
    'parent' => 'ItemFactoryItem',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Item/Standard',
  ),
  'ItemGroupGroup' => 
  array (
    'id' => 'ItemGroupGroup',
    'title' => 'Group',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'An Item Group groups items of a certain type.',
      'composition' => 'An Item Group consists of a header with an optional action Dropdown and a list if Items.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'ItemFactoryItem',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Item/Group',
  ),
  'ItemNotificationNotification' => 
  array (
    'id' => 'ItemNotificationNotification',
    'title' => 'Notification',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Notifications in this context are messages from the system published to the user. Notification Items are used to bundle information (such as title and description) about such notifications and possible interactions with them (such as opening the mail folder containing a new mail).',
      'composition' => 'Notification Items always contain a title and an icon, which indicates the service or module triggering the notification. They also contain a close button. They might contain meta data such as various properties or a description and they further contain a set of interactions allowing the user to react in various ways. The first of those interaction is placed on the title of the Notification Item. Notification Items might also aggregate information about a set of related notifications and display them in the form of such an aggregate.',
      'effect' => 'The main interaction of the item is placed on the title and will be fired by clicking on the Notification Items title. If more than one is passed, they will be listed in a dropdown. The interaction fired by clicking on the Notification Item\'s title directs in most cases to some repository holding the entry which fired the notification. Clicking on the close button removes the Notification permanently. Exceptions are Notification Items displaying aggregated information. In such a case, clicking on the title displays the list of the Notifications being aggregated and it will only be closed if all Notifications being aggregated are closed.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'The main interaction offered by clicking on the Notification Items title SHOULD open some repository holding the entry which fired the notification (e.g. Mailbox in case of new Mail).',
        2 => 'Clicking on the title of a Notification Item displaying aggregated information of other Notification Items will open a Notification Slate displaying those Notification Items.',
        3 => 'Clicking on the Close Button MUST remove the Notification Item permanently from the list of Notification Items.',
        4 => 'If the Notification Item aggregates information on other Notification Items, closing all the aggregates MUST close the aggregating Notification Item as well.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'All interactions offered by a notification item MUST be accessible by only using the keyboard.',
        2 => 'The purpose of each interaction MUST be clearly labeled by text.',
      ),
    ),
    'parent' => 'ItemFactoryItem',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Item/Notification',
  ),
  'ModalInterruptiveInterruptive' => 
  array (
    'id' => 'ModalInterruptiveInterruptive',
    'title' => 'Interruptive',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'An Interruptive modal disrupts the user in critical situation, forcing him or her to focus on the task at hand.',
      'composition' => 'The modal states why this situation needs attention and may point out consequences.',
      'effect' => 'All controls of the original context are inaccessible until the modal is completed. Upon completion the user returns to the original context.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Due to the heavily disruptive nature of this type of modal it MUST be restricted to critical situations (e.g. loss of data).',
        2 => 'All actions where data is deleted from the system are considered to be critical situations and SHOULD be implemented as an Interruptive modal. Exceptions are possible if items from lists in forms are to be deleted or if the modal would heavily disrupt the workflow.',
        3 => 'Interruptive modals MUST contain a primary button continuing the action that initiated the modal (e.g. Delete the item) on the left side of the footer of the modal and a default button canceling the action on the right side of the footer.',
        4 => 'The cancel button in the footer and the close button in the header MUST NOT perform any additional action than closing the Interruptive modal.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ModalFactoryModal',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Modal/Interruptive',
  ),
  'ModalInterruptiveItemInterruptiveItem' => 
  array (
    'id' => 'ModalInterruptiveItemInterruptiveItem',
    'title' => 'Interruptive Item',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Interruptive items are displayed in an Interruptive modal and represent the object(s) being affected by the critical action, e.g. deleting.',
      'composition' => 'An Interruptive item is composed of an Id, title, description and an icon.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'An interruptive item MUST have an ID and title.',
        2 => 'An interruptive item SHOULD have an icon representing the affected object.',
        3 => 'An interruptive item MAY have a description which helps to further identify the object. If an Interruptive modal displays multiple items having the the same title, the description MUST be used in order to distinct these objects from each other.',
        4 => 'If an interruptive item represents an ILIAS object, e.g. a course, then the Id, title, description and icon of the item MUST correspond to the Id, title, description and icon from the ILIAS object.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ModalFactoryModal',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Modal/InterruptiveItem',
  ),
  'ModalRoundTripRoundtrip' => 
  array (
    'id' => 'ModalRoundTripRoundtrip',
    'title' => 'Roundtrip',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Round-Trip modals are to be used if the context would be lost by performing this action otherwise. Round-Trip modals accommodate sub-workflows within an overriding workflow. The Round-Trip modal ensures that the user does not leave the trajectory of the overriding workflow. This is typically the case if an ILIAS service is being called while working in an object.',
      'composition' => 'Round-Trip modals are completed by a well defined sequence of only a few steps that might be displayed on a sequence of different modals connected through some "next" button.',
      'effect' => 'Round-Trip modals perform sub-workflow involving some kind of user input. Sub-workflow is completed and user is returned to starting point allowing for continuing the overriding workflow.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Round-Trip modals MUST contain at least two buttons at the bottom of the modals: a button to cancel (right) the workflow and a button to finish or reach the next step in the workflow (left).',
        2 => 'Round-Trip modals SHOULD be used, if the user would lose the context otherwise. If the action can be performed within the same context (e.g. add a post in a forum, edit a wiki page), a Round-Trip modal MUST NOT be used.',
        3 => 'When the workflow is completed, Round-Trip modals SHOULD show the same view that was displayed when initiating the modal.',
        4 => 'Round-Trip modals SHOULD NOT be used to add new items of any kind since adding item is a linear workflow redirecting to the newly added item setting- or content-tab.',
        5 => 'Round-Trip modals SHOULD NOT be used to perform complex workflows.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'The label of the Button used to close the Round-Trip-Modal MAY be adapted, if the default label (cancel) does not fit the workflow presented on the screen.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ModalFactoryModal',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Modal/RoundTrip',
  ),
  'ModalLightboxLightbox' => 
  array (
    'id' => 'ModalLightboxLightbox',
    'title' => 'Lightbox',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Lightbox modal displays media data such as images or videos. It may also display text that has a purely descriptive nature and does not offer interaction.',
      'composition' => 'A Lightbox modal consists of one or multiple lightbox pages representing the text or media together with a title.',
      'effect' => 'Lightbox modals are activated by clicking the full view glyphicon, the title of the object or it\'s thumbnail. If multiple pages are to be displayed, they can flipped through.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Lightbox modals MUST contain a title above the presented item.',
        2 => 'Lightbox modals SHOULD contain a descriptional text below the presented items.',
        3 => 'Multiple items inside a Lightbox modal MUST be presented in carousel like manner allowing to flickr through items.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ModalFactoryModal',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Modal/Lightbox',
  ),
  'ModalLightboxImagePageLightboxImagePage' => 
  array (
    'id' => 'ModalLightboxImagePageLightboxImagePage',
    'title' => 'Lightbox Image Page',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Lightbox image page represents an image inside a Lightbox modal.',
      'composition' => 'The page consists of the image, a title and optional description.',
      'effect' => 'The image is displayed in the content section of the Lightbox modal and the title is used as modal title. If a description is present, it will be displayed below the image.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        2 => 'A Lighbox image page MUST have an image and a short title.',
        1 => 'A Lightbox image page SHOULD have short a description, describing the presented image. If the description is omitted, the Lightbox image page falls back to the alt tag of the image.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ModalFactoryModal',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Modal/LightboxImagePage',
  ),
  'ModalLightboxTextPageLightboxTextPage' => 
  array (
    'id' => 'ModalLightboxTextPageLightboxTextPage',
    'title' => 'Lightbox Text Page',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Lightbox text page represents a document like content/text inside a Lightbox modal.',
      'composition' => 'The page consists of text and a title',
      'effect' => 'The text is displayed in the content section of the Lightbox modal and the title is used as modal title.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Lighbox text page MUST have text content and a short title.',
        2 => 'A Lighbox text page MUST NOT have a description.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'ModalFactoryModal',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Modal/LightboxTextPage',
  ),
  'PopoverStandardStandard' => 
  array (
    'id' => 'PopoverStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Standard Popovers are used to display other components. Whenever you want to use the standard-popover, please hand in a PullRequest and discuss it.',
      'composition' => 'The content of a Standard Popover displays the components together with an optional title.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard Popovers MUST NOT be used to render lists, use a Listing Popover for this purpose.',
        2 => 'Standard Popovers SHOULD NOT contain complex or large components.',
        3 => 'Usages of Standard Popovers MUST be accepted by JourFixe.',
        4 => 'Popovers with fixed Position MUST only be attached to triggerers with fixed position.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'PopoverFactoryPopover',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Popover/Standard',
  ),
  'PopoverListingListing' => 
  array (
    'id' => 'PopoverListingListing',
    'title' => 'Listing',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Listing Popovers are used to display list items.',
      'composition' => 'The content of a Listing Popover displays the list together with an optional title.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Listing Popovers MUST be used if one needs to display lists inside a Popover.',
        2 => 'Popovers with fixed Position MUST only be attached to triggerers with fixed position.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'PopoverFactoryPopover',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Popover/Listing',
  ),
  'DropzoneFileFactoryFile' => 
  array (
    'id' => 'DropzoneFileFactoryFile',
    'title' => 'File',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'File dropzones are used to drop files from outside the browser window. The dropped files are presented to the user and can be uploaded to the server. File dropzones offer additional convenience beside manually selecting files over the file browser.',
      'composition' => 'File dropzones are areas to drop the files. They contain either a message (standard file dropzone) or other ILIAS UI components (wrapper file dropzone).',
      'effect' => 'A dropzone is highlighted when the user drags files over it.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'There MUST be alternative ways in the system to upload the files due to the limited accessibility of file dropzones.',
      ),
    ),
    'parent' => 'DropzoneFactoryDropzone',
    'children' => 
    array (
      0 => 'DropzoneFileStandardStandard',
      1 => 'DropzoneFileWrapperWrapper',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Dropzone/File/Factory',
  ),
  'DropzoneFileStandardStandard' => 
  array (
    'id' => 'DropzoneFileStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The standard dropzone is used to drop files dragged from outside the browser window. The dropped files are presented to the user and can be uploaded to the server.',
      'composition' => 'Standard dropzones consist of a visible area where files can be dropped. They MUST contain a message explaining that it is possible to drop files inside. The dropped files are presented to the user, optionally with some button to start the upload process.',
      'effect' => 'A standard dropzone is highlighted when the user is dragging files over the dropzone. After dropping, the dropped files are presented to the user with some meta information of the files such the file name and file size.',
      'rivals' => 
      array (
        'Rival 1' => 'A wrapper dropzone can hold other ILIAS UI components instead of a message.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Standard dropzones MUST contain a message.',
        2 => 'The upload button MUST be disabled if there are no files to be uploaded. Only true if the dropzone is NOT used in a form containing other form elements.',
        3 => 'Standard dropzones MAY be used in forms.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Standard dropzones MUST offer the possibility to select files manually from the computer.',
      ),
    ),
    'parent' => 'DropzoneFileFactoryFile',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Dropzone/File/Standard',
  ),
  'DropzoneFileWrapperWrapper' => 
  array (
    'id' => 'DropzoneFileWrapperWrapper',
    'title' => 'Wrapper',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A wrapper dropzone is used to display other ILIAS UI components inside it. In contrast to the standard dropzone, the wrapper dropzone is not visible by default. Only the wrapped components are visible. Any wrapper dropzone gets highlighted once the user is dragging files over the browser window. Thus, a user needs to have the knowledge that there are wrapper dropzones present. They can be introduced to offer additional approaches to complete some workflow more conveniently. Especially in situation where space is scarce such as appointments in the calendar.',
      'composition' => 'A wrapper dropzone contains one or multiple ILIAS UI components. A roundtrip modal is used to present the dropped files and to initialize the upload process.',
      'effect' => 'All wrapper dropzones on the page are highlighted when the user dragging files over the browser window. After dropping the files, the roundtrip modal is opened showing all files. The modal contains a button to start the upload process.',
      'rivals' => 
      array (
        'Rival 1' => 'A standard dropzone displays a message instead of other ILIAS UI components.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Most pages SHOULD NOT contain a wrapper dropzone. Whenever you want to introduce a new usage of the Wrapper-Dropzone, propose it to the Jour Fixe.',
        2 => 'Wrapper dropzones MUST contain one or more ILIAS UI components.',
        3 => 'Wrapper dropzones MUST NOT contain any other file dropzones.',
        4 => 'Wrapper dropzones MUST NOT be used in modals.',
        5 => 'The upload button in the modal MUST be disabled if there are no files to be uploaded.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'DropzoneFileFactoryFile',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Dropzone/File/Wrapper',
  ),
  'TablePresentationPresentation' => 
  array (
    'id' => 'TablePresentationPresentation',
    'title' => 'Presentation',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Presentation Table lists some tabular data in a pleasant way. The user can get a quick overview over the records in the dataset, the Presentation Table only shows the most relevant fields of the records at first glance. The records can be expanded to show more extensive information, i.e. additional fields and further information. The Presentation Table represents the displayed dataset an entirety rather than a list of single rows. The table facilitates exploring the dataset, where the purpose of this exploration is known and supported. Single records may be derived and composed from all kind of sources and do not necessarily reference a persistent entity like an ilObject.',
      'composition' => 'The Presentation Table consists of a title, a slot for View Controls and Presentation Rows. The rows will be prefixed by an Expand Glyph and consist of a headline, a subheadline and a choice of record-fields. The expanded row will show a lists of further fields and, optionally, a button or dropdown for actions. The table is visually represented as a wholeness and does not decompose into several parts.',
      'effect' => 'Rows can be expanded and collapsed to show/hide more extensive and detailed information per record. A click on the Expand Glyph will enlarge the row vertically to show the complete record and exchange the Expand Glyph by a Collapse Glyph. Fields that were shown in the collapsed row will be hidden except for headline and subheadline. The ordering among the records in the table, the ordering of the fields in one row or the visible contents of the table itself can be adjusted with View Controls. In contrast to the accordions known from the page editor, it is possible to have multiple expanded rows in the table.',
      'rivals' => 
      array (
        'Data Table' => 'A data-table shows some dataset and offers tools to explore it in a user defined way. Instead of aiming at simplicity the Presentation Table aims at maximum explorability. Datasets that contain long content fields, e.g. free text or images, are hard to fit into a Data Table but can indeed be displayed in a Presentation Table.',
        'Listing Panel' => 'Listing Panels list items, where an item is a unique entity in the system, i.e. an identifyable, persistently stored object. This is not necessarily the case for Presentation Tables, where records can be composed of any data from any source in the system.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Rows in the table MUST be of the same structure.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'View Controls used here MUST only affect the table itself.',
        2 => 'Clicking the Expand Glyph MUST only expand the row. It MUST NOT trigger any other action.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The expandable content, especially the contained buttons, MUST be accessible by only using the keyboard.',
      ),
    ),
    'parent' => 'TableFactoryTable',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Table/Presentation',
  ),
  'MessageBoxMessageBoxFailure' => 
  array (
    'id' => 'MessageBoxMessageBoxFailure',
    'title' => 'Failure',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The system failed to complete some actions and displays information about the failure.',
      'composition' => 'The alert-danger style is used for the message.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Failure Message Boxes MUST be used, if a user interaction has failed.',
        2 => 'The message SHOULD inform the user why the interaction has failed.',
        3 => 'The message SHOULD inform the user how to the problem can be fixed.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MessageBoxFactoryMessageBox',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MessageBox/MessageBox',
  ),
  'MessageBoxMessageBoxSuccess' => 
  array (
    'id' => 'MessageBoxMessageBoxSuccess',
    'title' => 'Success',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The system succeeded in finishing some action and displays a success message.',
      'composition' => 'The alert-success style is used for the message.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Success Message Boxes MUST be used, if a user interaction has successfully ended.',
        2 => 'The message SHOULD summarize how the system state has been changed due to the user interaction.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MessageBoxFactoryMessageBox',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MessageBox/MessageBox',
  ),
  'MessageBoxMessageBoxInfo' => 
  array (
    'id' => 'MessageBoxMessageBoxInfo',
    'title' => 'Info',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The system informs the user about obstacles standing in the way of completing a workflow or about side-effects of his or her actions on other users.',
      'composition' => 'The alert-info style is used for the message.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Info Message Boxes MAY be used to describe a state or condition of the system that help the user to understand the interactions provided on or missing from a screen.',
        2 => 'The Info Message Boxes MUST NOT be used at the end of a user interaction. Instead Success or Failure Message Boxes SHOULD be used.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MessageBoxFactoryMessageBox',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MessageBox/MessageBox',
  ),
  'MessageBoxMessageBoxConfirmation' => 
  array (
    'id' => 'MessageBoxMessageBoxConfirmation',
    'title' => 'Confirmation',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The system makes sure that an action should really be performed.',
      'composition' => 'The alert-warning style is used for the message.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Confirmation Message Boxes MUST be used, if a deletion interaction is being processed. The Buttons MUST provide a confirm and a cancel option.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MessageBoxFactoryMessageBox',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MessageBox/MessageBox',
  ),
  'LayoutPageFactoryPage' => 
  array (
    'id' => 'LayoutPageFactoryPage',
    'title' => 'Page',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Page is the user\'s view upon ILIAS in total.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'LayoutFactoryLayout',
    'children' => 
    array (
      0 => 'LayoutPageStandardStandard',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Layout/Page/Factory',
  ),
  'LayoutPageStandardStandard' => 
  array (
    'id' => 'LayoutPageStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Standard Page is the regular view upon ILIAS.',
      'composition' => 'The main parts of a Page are the Metabar, the Mainbar providing main navigation, the logo, title, breadcrumbs and, of course, the pages\'s content. "Content" in this case is the part of the page that is not Mainbar, Metabar, Footer or Locator, but e.g. the Repository-Listing, an object\'s view or edit form, etc. The locator (in form of breadcrumbs), the logo and titles are optional. Finally, there are short- and view title. The short title is usually used to identify the installation of ILIAS, while the view-title gives a very short  reference to the current view. Both short title and view title are put into the title-tag of the page so they show up in the browser\'s tab.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 
      array (
        'Desktop' => 'https://docu.ilias.de/goto_docu_wiki_wpage_4563_1357.html',
      ),
      1 => 
      array (
        'Mobile' => 'https://docu.ilias.de/goto_docu_wiki_wpage_5095_1357.html',
      ),
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Standard Page MUST be rendered with content, i.e. the actual view on the context.',
        2 => 'The Standard Page MUST be rendered with a Metabar.',
        3 => 'The Standard Page MUST be rendered with a Mainbar.',
        4 => 'The Standard Page SHOULD be rendered with Breadcrumbs.',
        5 => 'The Standard Page SHOULD be rendered with a Logo.',
        6 => 'The Standard Page SHOULD be rendered with a Title.',
        7 => 'The Standard Page\'s short title SHOULD reference the current ILIAS installation.',
        8 => 'The Standard Page\'s view title SHOULD give a good hint to the current view.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'LayoutPageFactoryPage',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Layout/Page/Standard',
  ),
  'MainControlsMetaBarMetaBar' => 
  array (
    'id' => 'MainControlsMetaBarMetaBar',
    'title' => 'Meta Bar',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Meta Bar is a unique page section to accomodate elements that should permamently be in sight of the user. The Meta Bar shall, first of all, host Prompts, i.e. notifications from the System to the user, but may also accomodate components and links deemed important, like help or search. The content of the bar does not change when navigating the system, but may depend on a configuration.',
      'composition' => 'The Meta Bar is rendered horizontally at the very top of the page. It is always visible and available (except in some specialized view modes like an kiosk mode) as a static screen element and is unaffected by scrolling. Elements in the Meta Bar are always placed on the right hand side. Currently, these are "Search", "Help", "Notifications", "Awareness" and "User". Especially in mobile context, the total width of all entries may exceed the availble width of the screen. In this case, all entries are summarized under a "..."-Button. Elements are rendered as Bulky Buttons. Prompts in the Meta Bar may be marked with counters for new/existing notifications.',
      'effect' => 'Entries in the Meta Bar may open a Slate when clicked. They will be set to "engaged" accordingly, and bear the aria-pressed attribute. There will be only one engaged Button/Slate at a time. Also, Buttons in the Meta Bar may trigger navigation or activate tools in the Main Bar, like the Help. In this case, the buttons are not stateful.',
      'rivals' => 
      array (
        'Main Bar' => 'The Main Bar offers navigational strategies, while the Meta Bar foremost provides notifications to the user and offers controls that are deemed important. The (general) direction of communication for the Meta Bar is "system to user", while the direction is "user to system" for elements of the Main Bar.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Meta Bar is used in the Standard Page.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Meta Bar is unique for the page - there MUST be at most one.',
        2 => 'Elements in the Meta Bar MUST NOT vary according to context.',
        3 => 'New elements in the Meta Bar MUST be approved by JF.',
        4 => 'Since mainly items that pitch the user are placed in the Meta Bar, you SHOULD only propose items for this section that have the nature of informing the user.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'The bar MUST have a fixed height.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MainControlsFactoryMainControls',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/MetaBar',
  ),
  'MainControlsMainBarMainBar' => 
  array (
    'id' => 'MainControlsMainBarMainBar',
    'title' => 'Main Bar',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Main Bar is a unique page section that bundles access to content- based navigational strategies (like the repository tree) as well as navigation to services unrelated to the actual content, like the administrative settings. Since the controls necessary for theses purposes might be quite complex, they are summed up in an easy to grasp Icon or Glyph in conjunction with a short text. Theses reductions form the entries for the Main Bar, which thus is the primary list of navigational options for the user and the usual starting point for the user to explore the system. There are entries in the bar that are never modified by changing context, but may vary according to e.g. the current user\'s permissions or settings of the installation. There also is the tools-section of entries in the bar that is used to show tools that are opened on request of the user, e.g. the help, or depending on requirements of the content, e.g. a local navigation. However, content actions, like  "new item"-actions, the actions-menu (with comments, notes and tags), moving, linking or deleting objects and the like are NOT part of the Main Bar. Also, there should be a differentiation between elements of the Main Bar and elements of e.g., the Personal Dekstop: The Personal Desktop provides access to services and tools and displays further information at first glance (e.g. the calendar). The Main Bar may reference those tools as well, but rather in form of a link than a widget.',
      'composition' => 'The Main Bar holds Slates and Bulky Buttons. In a desktop environment, a vertical bar is rendered on the left side of the screen covering the full height (minus header- and footer area). Entries are aligned vertically. In a mobile context, the bar will be rendered horizontally on the bottom. When the entries of a Main Bar exceed the available height (mobile: width), remaining buttons will be collected in a "..."-Button. The Main Bar is always visible and available (except in specialized views like the exam mode) as a static screen element unaffected by scrolling.',
      'effect' => 'Clicking an entry will carry out its configured action. For slates, this is expanding the slate, while for Bulky Buttons this might be, e.g., just changing the page. Buttons in the Main Bar are stateful, i.e. they have a pressed-status that can either be toggled by clicking the same button again or by clicking a different button. This does not apply to Buttons directly changing the context. Opening a slate by clicking an entry will close all other slates in the Main Bar. On desktop, slates open on the right hand of the Main Bar, between bar and content, thus "pushing" the content to the right, if there is not enough room. If the content\'s width would fall below its defined minimum, the expanded slate is opened above (like in overlay, not "on top of") the content. The slates height equals that of the Main Bar. Also, their position will remain fixed when the page is scrolled. A button to close a slate is rendered underneath the slate. It will close all visible Slates and reset the states of all Main Bar-entries. When a tool (such as the help), whose contents are displayed in a slate, is being triggered, a special entry is rendered as first element of the Main Bar, making the available/invoked tool(s) accessible. Tools can be closed, i.e. removed from the Main Bar, via a Close Button. When the last Tool is closed, the tools-section is removed as well.',
      'rivals' => 
      array (
        'Tab Bar' => 'The Main Bar (and its components) shall not be used to substitute functionality available at objects, such as settings, members or learning progress. Those remain in the Tab Bar.',
        'Meta Bar' => 'Notifications from the system to the user, e.g. new Mail, are placed in Elements of the Meta Bar. The general direction of communication for the Main Bar is "user to system", while the direction is "system to user" with elements of the Meta Bar. However, navigation from both components can lead to the same page.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Main Bar is used in the Standard Page.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'There SHOULD be a Main Bar on the page.',
        2 => 'If there is a Main Bar, it MUST be unique for the page.',
        3 => 'Entries and Tools in the Main Bar, or for that matter, their respective slate-contents, MUST NOT be used to reflect the outcome of a user\'s action, e.g., display a success-message.',
        4 => 'Contents of the slates, both in Entries and Tools, MUST NOT be used to provide information of a content object if that information cannot be found in the content itself. They MUST NOT be used as a "second screen" to the content-part of the Page.',
      ),
      'composition' => 
      array (
        1 => 'The bar MUST NOT contain items other than Bulky Buttons or Slates.',
        2 => 'The bar MUST contain at least one Entry.',
        3 => 'The bar SHOULD NOT contain more than five Entries.',
        4 => 'The bar SHOULD NOT contain more than five Tool-Entries.',
        5 => 'Entries and Tools in the Main Bar MUST NOT be enhanced with counters or other notifications drawing the user\'s attention.',
      ),
      'interaction' => 
      array (
        1 => 'Operating elements in the bar MUST either lead to further navigational options within the bar (open a slate) OR actually invoke navigation, i.e. change the location/content of the current page.',
        2 => 'Elements in the bar MUST NOT open a modal or new Viewport.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'The bar MUST have a fixed width (desktop).',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MainControlsFactoryMainControls',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/MainBar',
  ),
  'MainControlsSlateFactorySlate' => 
  array (
    'id' => 'MainControlsSlateFactorySlate',
    'title' => 'Slate',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Slate is a collection of Components that serve a specific and singular purpose in their entirety. The purpose can be subsummed in one Icon/Glyph and a very short label, for Slates will act as elaboration on one specific concept in ILIAS. Slates are not part of the content and will reside next to or over it. They will open and close without changing the current context. Accordingly, Slates depend on a component that toggles their visibility. In contrast to purely receptive components, Slates usually provide a form of interaction, whereas this interaction may trigger a navigation or alter the contents of the slate itself. However, slates are not meant to modify states of entities in the system in any way. E.g.: A Help-Screen, where the user can read a certain text and also search available topics via a text-input, or a drill-down navigation, where all siblings of the current level are shown next to a "back"-button. A special case of Slate is the Prompt: while in a common Slate the general direction of communiction is user to system, a Prompt is used for communication from the system to the user. These can be, e.g, alerts concerning new mails or a change in the online status of another learner.',
      'composition' => 'Slates may hold a variety of components. These can be navigational entries, text and images or even other slates. When content-length exceeds the Slate\'s height, the contents will start scrolling vertically with a scrollbar on the right.',
      'effect' => '',
      'rivals' => 
      array (
        'Panel' => 'Panels are used for content.',
        'Modal' => 'The Modal forces users to focus on a task, the slate offers possibilities.',
        'Popover' => 'Popovers provide additional information or actions in direct context to specific elements. Popovers do not have a fixed position on the page.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Slates MUST NOT be used standalone, i.e. without a controlling Component.',
        2 => 'There MUST be only one Slate visible at the same time per triggering Component.',
        3 => 'Elements in the Slate MUST NOT modify entities in the system.',
        4 => 'Slates MUST be closeable/expandable without changing context.',
        5 => 'Slates MUST NOT be used to provide additional information of content-objects that cannot be found anywhere else.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'It MUST be possible to subsume a slates purpose in one Icon/Glyph and one word.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Slates MUST have a fixed width.',
        2 => 'Slates MUST NOT use horizontal scrollbars.',
        3 => 'Slates SHOULD NOT use vertical scrollbars.',
        4 => 'Slates MUST visually relate to their triggering Component.',
        5 => 'Slates SHOULD NOT be affected by scrolling the page.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The Slate MUST be closeable by only using the keyboard',
        2 => 'Actions or navigational elements offered inside a Slate MUST be accessible by only using the keyboard',
        3 => 'A Slate MUST set the aria-hidden attribute.',
      ),
    ),
    'parent' => 'MainControlsFactoryMainControls',
    'children' => 
    array (
      0 => 'MainControlsSlateLegacyLegacy',
      1 => 'MainControlsSlateCombinedCombined',
      2 => 'MainControlsSlateNotificationNotification',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/Slate/Factory',
  ),
  'MainControlsFooterFooter' => 
  array (
    'id' => 'MainControlsFooterFooter',
    'title' => 'Footer',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Footer is a unique page section to accomodate links that are not being used on a regular basis, such as links to the pages\'s imprint or a privacy policy document.',
      'composition' => 'The Footer is composed of a list of links and an optional text-part.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Footer is used with the Standard Page.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Footer is unique for the page - there MUST be not more than one.',
        2 => 'Elements in the Footer SHOULD NOT vary according to context, but MAY vary according to the user\'s role or state (logged in/not logged in/...).',
        3 => 'Although the footer is constructed only with its "static" parts, it SHOULD have attached a permanent URL for the current page/object.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MainControlsFactoryMainControls',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/Footer',
  ),
  'MainControlsModeInfoModeInfo' => 
  array (
    'id' => 'MainControlsModeInfoModeInfo',
    'title' => 'Mode Info',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Mode Info is a section on a page that informs the user that he is in a certain mode (e.g. in the preview as a member of a course).',
      'composition' => 'The Mode Info MUST contain a title explaining the mode. The Mode Info MUST contain a Close Button to leave the mode.',
      'effect' => 'By clicking the Close Button, the user leaves the current (application wide) mode.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Mode Info is used with the Standard Page.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Mode Info is unique for the page - there MUST be not more than one.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'The Mode Info MUST allow the user to leave the mode.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The Mode Info informs about an important circumstance, which must be recognizable in particular also for persons with a handicap.',
      ),
    ),
    'parent' => 'MainControlsFactoryMainControls',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/ModeInfo',
  ),
  'MainControlsSlateLegacyLegacy' => 
  array (
    'id' => 'MainControlsSlateLegacyLegacy',
    'title' => 'Legacy',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Legacy Slate is used to wrap content into a slate when there is no other possibility (yet). In general, this should not be used and may vanish with the progress of specific slates.',
      'composition' => 'The Legacy Slate will take a Legacy-Component and render it.',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'This component MUST NOT be used to display elements that can be generated using other UI Components.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MainControlsSlateFactorySlate',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/Slate/Legacy',
  ),
  'MainControlsSlateCombinedCombined' => 
  array (
    'id' => 'MainControlsSlateCombinedCombined',
    'title' => 'Combined',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Combined Slate bundles related controls; these can also be further Slates. Combined Slates are used when a specific purpose is being subdivided into further aspects.',
      'composition' => 'The Combined Slate consists of more Slates and/or Bulky Buttons. The symbol and name of contained Slates are turned into a Bulky Button to control opening and closing the contained Slate.',
      'effect' => 'Opening a Combined Slate will display its contained Slates with an operating Bulky Button for closing/expanding. Clicking on a Button not connected to a Slate will carry out its action.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Combined Slate is used in the Main Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => '',
    'parent' => 'MainControlsSlateFactorySlate',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/Slate/Combined',
  ),
  'MainControlsSlateNotificationNotification' => 
  array (
    'id' => 'MainControlsSlateNotificationNotification',
    'title' => 'Notification',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Notifications Slates are used by the system to publish information to the user in the form of Notification Items. The aim of the Notification Slates and the Notification Items they contain, is to make notifications visible and quickly accessible. They form a centralized channel which bundles notifications. Note that the Notification Slates and Items do not replace the short-lived message displayed on the screen without page loading (like "You have received 1 Contact Request") currently called "toasts".',
      'composition' => 'Notifications Slates hold Notification Items, displaying information on and possible interactions with the displayed notifications. They display the Notification Items chronological order (with the latest on top). Each Notification Slate bundles Notification Items of one specific type of source (service, e.g. Mail).',
      'effect' => 'By default Notification Slates are engaged, meaning, they display there content to the user.',
      'rivals' => 
      array (
        'Combined Slates' => 'Combined Slates can hold Bulky Links and other Slates, Notification Slates may only contain Notification Items. Further Combined Slates always require an icon and the contained slates are by default dis-engaged.',
        'Item Group' => 'Item Groups bundle any kind of Items, may hold actions on those Items and do not feature an disengaged State.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Notifications in the Meta Bar',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Every service that can send a notification SHOULD add an entry in the Notification Center.',
        2 => 'The displayed Notifications also SHOULD have a permanent place (mainly in Main Bar), somewhere where old messages shown as Notification Item can still be viewed, even if they are removed from the Notification Slate. Exceptions to this are the chat and the Background Tasks.',
      ),
      'composition' => 
      array (
        1 => 'Each Notification Slate MUST bundle Notification Items of one specific type of source (service, e.g. Mail).',
        2 => 'Notification Slates MUST NOT be empty.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
        1 => 'Notification Items displayed inside the Notification Slate MUST be displayed in chronological order where the newest item MUST be the topmost.',
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MainControlsSlateFactorySlate',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/MainControls/Slate/Notification',
  ),
  'TreeNodeFactoryNode' => 
  array (
    'id' => 'TreeNodeFactoryNode',
    'title' => 'Node',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Nodes are entries in a Tree. They represent a level in the Tree\'s data hierarchy.',
      'composition' => '',
      'effect' => '',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Nodes will only occur in Trees.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Nodes MUST only be used in a Tree.',
        2 => 'Nodes SHOULD NOT be constructed with subnodes. This is the job of the Tree\'s recursion-class.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Nodes MUST restrict themselves to a minimal presentation, i.e. they MUST solely display information supportive and relevant for the intended task.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'TreeFactoryTree',
    'children' => 
    array (
      0 => 'TreeNodeSimpleSimple',
      1 => 'BylinedBylined',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Tree/Node/Factory',
  ),
  'TreeExpandableExpandable' => 
  array (
    'id' => 'TreeExpandableExpandable',
    'title' => 'Expandable',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'An Expandable Tree focusses on the exploration of hierarchically structured data. Its nodes can be expanded to reveal the underlying nodes; nodes in the Expandable Tree can also be closed to hide all underlying nodes. This lets the user decide on the simultaneously shown levels of the data\'s hierarchy.',
      'composition' => 'A Tree is composed of Nodes. Further levels (sub-Nodes) are indicated by an Expand Glyph for the closed state of the Node and respectively by a Collapse Glyph for the expanded state. If there are no sub-Nodes, no Glyph will be shown at all.',
      'effect' => 'When clicking a Node, it will expand or collapse, thus showing or hiding its sub-Nodes.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Expandable Trees SHOULD only be used when there is a reasonably (large) amount of entries.',
        2 => 'Expandable Trees SHOULD NOT be used to display several aspects of one topic/item, like it would be the case when e.g. listing a repository object and its properties as individual nodes.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'TreeFactoryTree',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Tree/Expandable',
  ),
  'TreeNodeSimpleSimple' => 
  array (
    'id' => 'TreeNodeSimpleSimple',
    'title' => 'Simple',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Simple Node is a very basic entry for a Tree.',
      'composition' => 'It consists of a string-label, an optional Icon and an optional URI.',
      'effect' => 'The Simple Node can be configured with an URL to load data asynchronously. In this case, before loading there is always an Expand Glyph in front of the Node. If there are no further levels, the Expand Glyph will disappear after loading. Furthermore, SimpleNode implements Clickable and can be configured to trigger an action.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Simple Node SHOULD be used when there is no need to relay further information for the user to choose. This is the case for most occurrences where repository-items are shown.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'TreeNodeFactoryNode',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Tree/Node/Simple',
  ),
  'BylinedBylined' => 
  array (
    'id' => 'BylinedBylined',
    'title' => 'Bylined',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Bylined Node is an entry containing additional information about the node.',
      'composition' => 'It consists of a string-label, a byline and an optional Icon.',
      'effect' => 'This node is a simple node with an additional string-byline.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Byline Node SHOULD be used when there is a need to display a byline of additional information to a tree node.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'TreeNodeFactoryNode',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'Bylined',
  ),
  'MenuDrilldownDrilldown' => 
  array (
    'id' => 'MenuDrilldownDrilldown',
    'title' => 'Drilldown',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'A Drilldown Menu offers a partial view on a larger set of hierarchically structured navigation possibilities. While the entries of a Drilldown Menu are actually organized in a tree-structure, there is only one level of branches visible at a time, so that space is saved and the users attention is not being obstrused by irrelevant options.',
      'composition' => 'Drilldown Menus consist of a list of Buttons organized in three areas: The backlink-area holds exactly one Button to navigate to a higher level of entries, the following area again holds exactly one button to outline the current position within the tree-structure and finally the main area consisting of an unlimited number of buttons. Also, Dividers may be used so separate entries from each other.',
      'effect' => 'Buttons within the Drilldown Menu will either affect the Menu itself or trigger other navigational events. Speaking of the the first ("Submenus"), the user will navigate down the tree-structure of the Menu\'s entries. The currently selected level will be outlined, and a backlink will be presented to navigate back up the hierarchy. Entries directly below the current level will be presented as a flat list.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Drilldown Menus are primarily used in Mainbar-Slates to break down navigational topics into smaller parts.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Drilldown Menu MUST contain further Submenus or Buttons.',
        2 => 'Drilldown Menus MUST contain more than one entry (Submenu or Button).',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MenuFactoryMenu',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Menu/Drilldown',
  ),
  'MenuSubSub' => 
  array (
    'id' => 'MenuSubSub',
    'title' => 'Sub',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Menus offer navigational options to the user. Sometimes, those options are organized in a hierarchical structure. The Submenu is an entry for Menus demarking a further level within this hierarchy.',
      'composition' => 'A Submenu is a derivate of Menu and will be rendered alike. It holds further Submenus and/or Buttons. Also, Dividers may be used so separate entries from each other.',
      'effect' => 'Clicking the Label of the Submenu will show the list of Entries of this Submenu.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'A Submenu MUST be used to generate a new level in the structure of a Menu.',
        2 => 'Submenus MUST contain further Submenus or Buttons.',
        3 => 'Submenus SHOULD contain more than one entry (Submenu or Button).',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'Label and Symbol of the Submenu MUST reflect/subsume the meaning or purpose of contained entries.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'MenuFactoryMenu',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Menu/Sub',
  ),
  'SymbolIconFactoryIcon' => 
  array (
    'id' => 'SymbolIconFactoryIcon',
    'title' => 'Icon',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Icons are quickly comprehensible and recognizable graphics that are presented with a text label. They indicate the functionality or nature of the element they illustrate: Icons will mainly be used in front of object-titles, e.g. in the header, the tree and in repository listing. Icons can be presented in a disabled state. Disabled Icons visually communicate that the depicted functionality is not available for the intended audience.',
      'composition' => 'Icons come in three fixed sizes: small, medium and large. They can be presented with an additional "abbreviation", a text of a few characters that will be rendered on top of the image. The Disabled Icons are visually muted: A color shade covers the Icon.',
      'effect' => 'Icons themselves are not interactive; however they are allowed within interactive containers.',
      'rivals' => 
      array (
        'Glyph' => 'Glyphs are typographical characters that act as a trigger for some action.',
        'Image' => 'Images belong to the content and can be purely decorative.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Icons MUST be used to represent objects or context.',
        2 => 'Icons MUST be used in combination with a title or label.',
        3 => 'An unique Icon MUST always refer to the same thing.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
        1 => 'The aria-label MUST state the represented object-type.',
        2 => 'The abbreviation SHOULD consist of one or two letters.',
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Icons MUST have a class indicating their usage.',
        2 => 'Icons MUST be tagged with a CSS-class indicating their size.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Icons MUST bear an aria-label.',
        2 => 'Disabled Icons MUST bear an aria-label indicating the disabled status.',
      ),
    ),
    'parent' => 'SymbolFactorySymbol',
    'children' => 
    array (
      0 => 'SymbolIconStandardStandard',
      1 => 'SymbolIconCustomCustom',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Icon/Factory',
  ),
  'SymbolGlyphFactoryGlyph' => 
  array (
    'id' => 'SymbolGlyphFactoryGlyph',
    'title' => 'Glyph',
    'abstract' => 1,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Glyphs map a generally known concept or symbol to a specific concept in ILIAS. Glyphs don’t come with a text label: They are used when space is scarce.',
      'composition' => 'A glyph is a typographical character. As any other typographical character, they can be manipulated by regular CSS. If hovered, they can change either their color or their background-color in order to indicate possible interactions.',
      'effect' => 'Glyphs act as a trigger for some action (such as opening a certain Overlay type) or as a shortcut.',
      'rivals' => 
      array (
        'Icon' => 'Standalone Icons are not interactive. Icons can be in an interactive container however. Icons merely serve as an additional hint of the functionality described by a title. Glyphs are visually distinguished from object Icons: they are monochrome.',
      ),
    ),
    'background' => '"In typography, a glyph is an elemental symbol within an agreed set of symbols, intended to represent a readable character for the purposes of writing and thereby expressing thoughts, ideas and concepts." (https://en.wikipedia.org/wiki/Glyph) Lidwell states that such symbols are used "to improve the recognition and recall of signs and controls".',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Glyphs MUST NOT be used in content titles.',
        2 => 'Glyphs MUST be used for cross-sectional functionality such as mail for example and NOT for representing objects.',
        3 => 'Glyphs SHOULD be used for very simple tasks that are repeated at many places throughout the system.',
        4 => 'Services such as mail MAY be represented either by a Glyph OR by an Icon plus text label, depending on the usage scenario.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'All Glyphs SHOULD be taken from the Bootstrap Glyphicon Halflings set. Exceptions are possible, but MUST be approved by the JF.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The functionality triggered by the Glyph MUST be indicated to screen readers with the attributes aria-label or aria-labelledby.',
      ),
    ),
    'parent' => 'SymbolFactorySymbol',
    'children' => 
    array (
      0 => 'SymbolGlyphGlyphSettings',
      1 => 'SymbolGlyphGlyphCollapse',
      2 => 'SymbolGlyphGlyphExpand',
      3 => 'SymbolGlyphGlyphAdd',
      4 => 'SymbolGlyphGlyphRemove',
      5 => 'SymbolGlyphGlyphUp',
      6 => 'SymbolGlyphGlyphDown',
      7 => 'SymbolGlyphGlyphBack',
      8 => 'SymbolGlyphGlyphNext',
      9 => 'SymbolGlyphGlyphSortAscending',
      10 => 'SymbolGlyphGlyphSortDescending',
      11 => 'SymbolGlyphGlyphBriefcase',
      12 => 'SymbolGlyphGlyphUser',
      13 => 'SymbolGlyphGlyphMail',
      14 => 'SymbolGlyphGlyphNotification',
      15 => 'SymbolGlyphGlyphTag',
      16 => 'SymbolGlyphGlyphNote',
      17 => 'SymbolGlyphGlyphComment',
      18 => 'SymbolGlyphGlyphLike',
      19 => 'SymbolGlyphGlyphLove',
      20 => 'SymbolGlyphGlyphDislike',
      21 => 'SymbolGlyphGlyphLaugh',
      22 => 'SymbolGlyphGlyphAstounded',
      23 => 'SymbolGlyphGlyphSad',
      24 => 'SymbolGlyphGlyphAngry',
      25 => 'SymbolGlyphGlyphEyeclosed',
      26 => 'SymbolGlyphGlyphEyeopen',
      27 => 'SymbolGlyphGlyphAttachment',
      28 => 'SymbolGlyphGlyphReset',
      29 => 'SymbolGlyphGlyphApply',
      30 => 'SymbolGlyphGlyphSearch',
      31 => 'SymbolGlyphGlyphHelp',
      32 => 'SymbolGlyphGlyphCalendar',
      33 => 'SymbolGlyphGlyphTime',
      34 => 'SymbolGlyphGlyphClose',
      35 => 'SymbolGlyphGlyphMore',
      36 => 'SymbolGlyphGlyphDisclosure',
      37 => 'SymbolGlyphGlyphLanguage',
      38 => 'SymbolGlyphGlyphLogin',
      39 => 'SymbolGlyphGlyphLogout',
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Factory',
  ),
  'SymbolIconStandardStandard' => 
  array (
    'id' => 'SymbolIconStandardStandard',
    'title' => 'Standard',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Standard Icons represent ILIAS Objects. In their outlined version, they are used to be layered upon a picture or if the Standard Icon should not catch too much of the users attention.',
      'composition' => 'A Standard Icon is displayed as a block-element with a background-graphic. By default, a fallback icon will be rendered; this is until a background image is defined in the icon\'s CSS-class. The outlined version is the silhouette of the Standard Icon. This outlined version therefore attracts less attention.',
      'effect' => '',
      'rivals' => 
      array (
        'Custom Icon' => 'Custom Icons are constructed with a path to an (uploaded) image.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'If they are layered upon a picture, the outlined version MUST be used.',
        2 => 'In any other case, the non-outlined version SHOULD be used except for scenarios where the icon should not draw too much attention.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'CSS-Filters MAY be used for Standard Icons in their outlined version to manipulate the stroke to fit the context.',
        2 => 'In their outlined version, Standard Icons MUST only use white as color for the stroke, to make filter easily applicable.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'Icons MUST have aria-labels.',
      ),
    ),
    'parent' => 'SymbolIconFactoryIcon',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Icon/Standard',
  ),
  'SymbolIconCustomCustom' => 
  array (
    'id' => 'SymbolIconCustomCustom',
    'title' => 'Custom',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'ILIAS allows users to upload icons for repository objects. Those, in opposite to the standard icons, need to be constructed with a path.',
      'composition' => 'Instead of setting a background image via CSS-class, an image-tag is contained in the icons\'s div.',
      'effect' => '',
      'rivals' => 
      array (
        'Standard Icon' => 'Standard Icons MUST be used for core-objects.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Custom Icons MAY still use an abbreviation.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Custom Icons MUST use SVG as graphic.',
        2 => 'Icons MUST have a transparent background so they could be put on all kinds of backgrounds.',
        3 => 'Images used for Custom Icons SHOULD have equal width and height (=be quadratic) in order not to be distorted.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
      ),
    ),
    'parent' => 'SymbolIconFactoryIcon',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Icon/Custom',
  ),
  'SymbolGlyphGlyphSettings' => 
  array (
    'id' => 'SymbolGlyphGlyphSettings',
    'title' => 'Settings',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Settings Glyph triggers the opening of a dropdown that allows to edit settings of the displayed block.',
      'composition' => 'The Settings Glyph uses the glyphicon-cog.',
      'effect' => 'Upon clicking, a settings Dropdown is opened.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'In ILIAS <5.4, blocks on the Personal Desktop feature the Settings Glyph.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Settings Glyph MUST only be used in Blocks.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be “Settings”.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphCollapse' => 
  array (
    'id' => 'SymbolGlyphGlyphCollapse',
    'title' => 'Collapse',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Collapse Glyph is used to trigger the collapsing of some neighbouring Container Collection such as a the content of a Dropdown or an Accordion currently shown.',
      'composition' => 'The Collapse Glyph is composed of a triangle pointing to the bottom indicating that content is currently shown.',
      'effect' => 'Clicking the Collapse Glyph hides the display of some Container Collection.',
      'rivals' => 
      array (
        'Expand Glyph' => 'The Expand Glyphs triggers the display of some Container Collection.',
        'Previous Glyph' => 'The Previous/Next Glyph opens a completely new view. It serves a navigational purpose.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Collapse Glyph MUST indicate if the toggled Container Collection is visible or not.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Collapse Content\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphExpand' => 
  array (
    'id' => 'SymbolGlyphGlyphExpand',
    'title' => 'Expand',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Expand Glyph is used to trigger the display of some neighbouring Container Collection such as a the content of a Dropdown or an Accordion currently shown.',
      'composition' => 'The Expand Glyph is composed of a triangle pointing to the right indicating that content is currently collapsed.',
      'effect' => 'Clicking the Expand Glyph displays some Container Collection.',
      'rivals' => 
      array (
        'Collapse Glyph' => 'The Collapse Glyphs hides the display of some Container Collection.',
        'Previous Glyph' => 'The Previous/Next Glyph opens a completely new view. It serves a navigational purpose.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Expand Glyph MUST indicate if the toggled Container Collection is visible or not.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Expand Content\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphAdd' => 
  array (
    'id' => 'SymbolGlyphGlyphAdd',
    'title' => 'Add',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Add Glyph serves as a replacement for the respective textual button in very crowded screens. It allows adding a new item.',
      'composition' => 'The Add Glyph uses the glyphicon-plus-sign.',
      'effect' => 'Clicking on the Add Glyph adds a new input to a form or an event to the calendar.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Adding answer options or taxonomies in questions-editing forms in tests.',
      1 => 'Adding events to the calendar in Month view of the agenda.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Add Glyph SHOULD not come without a corresponding Remove Glyph and vice versa. Exceptions to this rule, such as the Calendar (where only elements can be added via Add Glyph, but not removed) are possible, but HAVE TO be run through the Jour Fixe.',
        2 => 'The Add Glyph stands for an Action and SHOULD be placed in the action column of a form.',
        3 => 'The Add Glyph MUST NOT be used to add lines to tables.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Newly added items MUST be placed below the line in which the Add Glyph has been clicked',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Add\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphRemove' => 
  array (
    'id' => 'SymbolGlyphGlyphRemove',
    'title' => 'Remove',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Remove Glyph serves as a replacement for the respective textual button in very crowded screens. It allows removing an item.',
      'composition' => 'The Remove Glyph uses the glyphicon-minus-sign.',
      'effect' => 'Clicking on the Remove Glyph deletes an existing input from a form.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Removing answer options or taxonomies in questions-editing forms in tests.',
      1 => 'Removing user notifications in a calendar item.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Remove Glyph SHOULD not come without a corresponding Add Glyph and vice versa. Exceptions to this rule, such as the Calendar (where only elements can be added via Add Glyph, but not removed) are possible, but HAVE TO be run through the Jour Fixe.',
        2 => 'The Remove Glyph stands for an Action and SHOULD be placed in the action column of a form.',
        3 => 'The Remove Glyph MUST NOT be used to add lines to tables.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Remove\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphUp' => 
  array (
    'id' => 'SymbolGlyphGlyphUp',
    'title' => 'Up',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Up Glyph allows for manually arranging rows in tables embedded in forms. It allows moving an item up.',
      'composition' => 'The Up Glyph uses the glyphicon-circle-arrow-up. The Up Glyph can be combined with the Add/Remove Glyph.',
      'effect' => 'Clicking on the Up Glyph moves an item up.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Moving answers up in Survey matrix questions.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'http://www.ilias.de/docu/goto_docu_wiki_wpage_813_1357.html',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Up Glyph MUST NOT be used to sort tables. There is an established sorting control for that.',
        2 => 'The Up Glyph SHOULD not come without a Down Glyph and vice versa.',
        3 => 'The Up Glyph is an action and SHOULD be listed in the action column of a form.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Up\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphDown' => 
  array (
    'id' => 'SymbolGlyphGlyphDown',
    'title' => 'Down',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Down Glyph allows for manually arranging rows in tables embedded in forms. It allows moving an item down.',
      'composition' => 'The Down Glyph uses the glyphicon-circle-arrow-down. The Down Glyph can be combined with the Add/Remove Glyph.',
      'effect' => 'Clicking on the Down Glyph moves an item down.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Moving answers up in Survey matrix questions.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'http://www.ilias.de/docu/goto_docu_wiki_wpage_813_1357.html',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Down Glyph MUST NOT be used to sort tables. There is an established sorting control for that.',
        2 => 'The Down Glyph SHOULD not come without an Up Glyph and vice versa.',
        3 => 'The Down Glyph is an action and SHOULD be listed in the action column of a form.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Down\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphBack' => 
  array (
    'id' => 'SymbolGlyphGlyphBack',
    'title' => 'Back',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Back Glyph indicates a possible change of the view. The view change leads back to some previous view.',
      'composition' => 'The chevron-left glyphicon is used.',
      'effect' => 'The click on a Back Glyph leads back to a previous view.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Exit Member View in courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Back and Next Buttons MUST be accompanied by the respective Back/Next Glyph.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'If clicking on the Back/Next GLYPH opens a new view of an object, the Next Glyph MUST be used.',
        2 => 'If clicking on the Back/Next GLYPH opens a previous view of an object, the Back Glyph MUST be used.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Back\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphNext' => 
  array (
    'id' => 'SymbolGlyphGlyphNext',
    'title' => 'Next',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Next Glyph indicates a possible change of the view. The view change leads back to some previous view.',
      'composition' => 'The chevron-right glyphicon is used.',
      'effect' => 'The click on a Next Glyph opens a new view.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Enter Member View in a course tab bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'Back and Next Buttons MUST be accompanied by the respective Back/Next Glyph.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'If clicking on the Back/Next GLYPH opens a new view of an object, the Next Glyph MUST be used.',
        2 => 'If clicking on the Back/Next GLYPH opens a previous view of an object, the Back Glyph MUST be used.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Next\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphSortAscending' => 
  array (
    'id' => 'SymbolGlyphGlyphSortAscending',
    'title' => 'Sort Ascending',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Sorting Glyphs indicate the current sorting direction of a column in a table as ascending (up) or descending (down). Only one Glyph is shown at a time. Clicking on the glyph will reverse the sorting direction.',
      'composition' => 'The Sort Ascending Glyph uses glyphicon-arrow-up.',
      'effect' => 'Clicking the Sort Ascending Glyph reverses the direction of ordering in a table.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Sort Ascending\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphSortDescending' => 
  array (
    'id' => 'SymbolGlyphGlyphSortDescending',
    'title' => 'Sort Descending',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Sorting Glyphs indicate the current sorting direction of a column in a table as ascending (up) or descending (down). Only one Glyph is shown at a time. Clicking on the glyph will reverse the sorting direction.',
      'composition' => 'The Sort Descending Glyph uses glyphicon-arrow-descending.',
      'effect' => 'Clicking the Sort Descending Glyph reverses the direction of ordering in a table.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Sort Descending\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphBriefcase' => 
  array (
    'id' => 'SymbolGlyphGlyphBriefcase',
    'title' => 'Briefcase',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Briefcase Glyph symbolizes some ongoing work that is done. It was introduced for the background tasks.',
      'composition' => 'The Briefcase Glyph uses glyphicon-briefcase.',
      'effect' => 'A click on the Briefcase Glyph opens a popup that shows the background tasks.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Background Tasks\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphUser' => 
  array (
    'id' => 'SymbolGlyphGlyphUser',
    'title' => 'User',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The User Glyph triggers the “Who is online?” Popover in the Top Navigation. The User Glyph indicates the number of pending contact requests and users online via the the Novelty Counter and Status Counter respectively.',
      'composition' => 'The User Glyph uses the glyphicon-user.',
      'effect' => 'Clicking the User Glyph opens the “Who is online?” Popover.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Show who is online\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphMail' => 
  array (
    'id' => 'SymbolGlyphGlyphMail',
    'title' => 'Mail',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Mail Glyph provides a shortcut to the mail service. The Mail Glyph indicates the number of new mails received.',
      'composition' => 'The Mail Glyph uses the glyphicon-envelope.',
      'effect' => 'Upon clicking on the Mail Glyph the user is transferred to the full-screen mail service.',
      'rivals' => 
      array (
        'Mail Icon' => 'The Mail Icon is used to indicate the user is currently located in the Mail service. The Mail Glyph acts as shortcut to the Mail service.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Mail\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphNotification' => 
  array (
    'id' => 'SymbolGlyphGlyphNotification',
    'title' => 'Notification',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Notification Glyph allows users to activate / deactivate the notification service for a specific object or sub-item. It is a toggle indicating by colour  whether it is activated or not.',
      'composition' => 'The Notification Glyph uses the glyphicon-bell in link-color if notifications are not active or brand-warning color if they are.',
      'effect' => 'Upon clicking the notification activation is toggled: Clicking the Notification Glyph activates respectively deactivates the notification service for the current object or sub-item.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Notification Glyph MUST only be used in the Content Top Actions.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
        1 => 'Clicking the Notification Glyph MUST toggle the activation of Notifications.',
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'If notifications are activated the Notification Glyph MUST use the brand-warning color.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Notifications\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphTag' => 
  array (
    'id' => 'SymbolGlyphGlyphTag',
    'title' => 'Tag',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Tag Glyph is used to indicate the possibility of adding tags to an object.',
      'composition' => 'The Tag Glyph uses the glyphicon-tag.',
      'effect' => 'Upon clicking the Round Trip Modal to add new Tags is opened.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Novelty and Status Counter MUST show the amount of tags that have been added to a specific object.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Tags\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphNote' => 
  array (
    'id' => 'SymbolGlyphGlyphNote',
    'title' => 'Note',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Note Glyph is used to indicate the possibilty of adding notes to an object.',
      'composition' => 'The Note Glyph uses the glyphicon-pushpin.',
      'effect' => 'Upon clicking the Round Trip Modal to add new notes is opened',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Novelty and Status Counter MUST show the amount of notes that have been added to a specific object.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Notes\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphComment' => 
  array (
    'id' => 'SymbolGlyphGlyphComment',
    'title' => 'Comment',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Comment Glyph is used to indicate the possibilty of adding comments to an object.',
      'composition' => 'The Comment Glyph uses the glyphicon-comment.',
      'effect' => 'Upon clicking the Round Trip Modal to add new comments is opened.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'Novelty and Status Counter MUST show the amount of comments that have been added to a specific object.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be ‘Comments\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphLike' => 
  array (
    'id' => 'SymbolGlyphGlyphLike',
    'title' => 'Like',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Clicking the Like Glyph indicates a user approves an item, e.g. a posting.',
      'composition' => 'The Like Glyph uses the "thumbs up" unicode emoji U+1F44D, see https://unicode.org/emoji/charts/full-emoji-list.html.',
      'effect' => 'Upon clicking, the Like Glyph acts as a toggle: A first click adds a Like to the respective item, which is reflected in the colour of the Glyph and in the counter. A second click takes the Like away, which is also reflected in colour and counter.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Show timeline in groups and courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MUST indicate the overall amount of like expressions.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Like\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphLove' => 
  array (
    'id' => 'SymbolGlyphGlyphLove',
    'title' => 'Love',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Clicking the Love Glyph indicates a user adores an item, e.g. a posting.',
      'composition' => 'The Love Glyph uses the "red heart" unicode emoji U+2764, see https://unicode.org/emoji/charts/full-emoji-list.html.',
      'effect' => 'Upon clicking, the Love Glyph acts as a toggle: A first click adds a Love to the respective item, which is reflected in the colour of the Glyph and in the counter. A second click takes the Love away, which is also reflected in colour and counter.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Show timeline in groups and courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MUST indicate the overall amount of love expressions.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Love\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphDislike' => 
  array (
    'id' => 'SymbolGlyphGlyphDislike',
    'title' => 'Dislike',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Clicking the Dislike Glyph indicates a user disapproves an item, e.g. a posting.',
      'composition' => 'The Dislike Glyph uses the "thumbs down" unicode emoji U+1F44E, see https://unicode.org/emoji/charts/full-emoji-list.html.',
      'effect' => 'Upon clicking, the Dislike Glyph acts as a toggle: A first click adds a Dislike to the respective item, which is reflected in the colour of the Glyph and in the counter. A second click takes the Dislike away, which is also reflected in colour and counter.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Show timeline in groups and courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MUST indicate the overall amount of dislike expressions.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Dislike\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphLaugh' => 
  array (
    'id' => 'SymbolGlyphGlyphLaugh',
    'title' => 'Laugh',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Clicking the Laugh Glyph indicates a user finds an item hilarious, e.g. a posting.',
      'composition' => 'The Laugh Glyph uses the "grinning face with smiling eyes" unicode emoji U+1F604, see https://unicode.org/emoji/charts/full-emoji-list.html.',
      'effect' => 'Upon clicking, the Laugh Glyph acts as a toggle: A first click adds a Laugh to the respective item, which is reflected in the colour of the Glyph and in the counter. A second click takes the Laugh away, which is also reflected in colour and counter.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Show timeline in groups and courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MUST indicate the overall amount of laugh expressions.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Laugh\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphAstounded' => 
  array (
    'id' => 'SymbolGlyphGlyphAstounded',
    'title' => 'Astounded',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Clicking the Astounded Glyph indicates a user finds an item surprising, e.g. a posting.',
      'composition' => 'The Astounded Glyph uses the "face with open mouth" unicode emoji U+1F62E, see https://unicode.org/emoji/charts/full-emoji-list.html.',
      'effect' => 'Upon clicking, the Astounded Glyph acts as a toggle: A first click adds an Astounded to the respective item, which is reflected in the colour of the Glyph and in the counter. A second click takes the Astounded away, which is also reflected in colour and counter.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Show timeline in groups and courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MUST indicate the overall amount of astounded expressions.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Astounded\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphSad' => 
  array (
    'id' => 'SymbolGlyphGlyphSad',
    'title' => 'Sad',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Clicking the Sad Glyph indicates a user finds an item disconcerting, e.g. a posting.',
      'composition' => 'The Sad Glyph uses the "sad but relieved face" unicode emoji U+1F625, see https://unicode.org/emoji/charts/full-emoji-list.html.',
      'effect' => 'Upon clicking, the Sad Glyph acts as a toggle: A first click adds a Sad to the respective item, which is reflected in the colour of the Glyph and in the counter. A second click takes the Sad away, which is also reflected in colour and counter.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Show timeline in groups and courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MUST indicate the overall amount of sad expressions.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Sad\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphAngry' => 
  array (
    'id' => 'SymbolGlyphGlyphAngry',
    'title' => 'Angry',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'Clicking the Angry Glyph indicates a user finds an item outraging, e.g. a posting.',
      'composition' => 'The Angry Glyph uses the "angry face" unicode emoji U+1F620, see https://unicode.org/emoji/charts/full-emoji-list.html.',
      'effect' => 'Upon clicking, the Angry Glyph acts as a toggle: A first click adds an Angry to the respective item, which is reflected in the colour of the Glyph and in the counter. A second click takes the Angry away, which is also reflected in colour and counter.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Show timeline in groups and courses.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MUST indicate the overall amount of angry expressions.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Angry\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphEyeclosed' => 
  array (
    'id' => 'SymbolGlyphGlyphEyeclosed',
    'title' => 'Eyeclosed',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Eye Closed Glyph is used to toggle the revelation-mode of password fields. With the Eye Closed Glyph shown, the field is currently unmasked.',
      'composition' => 'The Eye Closed Glyph uses the glyphicon-eye-close.',
      'effect' => 'When clicked, the password-field is masked, thus hiding the input.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Used with password-fields to toggle mask/revealed mode.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'The Eye Closed Glyph MUST only be used with Password-Inputs.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be "eye closed - click to hide the input\'s contents".',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphEyeopen' => 
  array (
    'id' => 'SymbolGlyphGlyphEyeopen',
    'title' => 'Eyeopen',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Eye Open Glyph is used to toggle the revelation-mode of password fields. With the Eye Open Glyph shown, the field is currently masked.',
      'composition' => 'The Eye Open Glyph uses the glyphicon-eye-open.',
      'effect' => 'When clicked, the password-field is unmasked, thus revealing the input.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Used with password-fields to toggle mask/revealed mode.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'The Eye Open Glyph MUST only be used with Password-Inputs.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be "eye open - click to reveal the input\'s contents".',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphAttachment' => 
  array (
    'id' => 'SymbolGlyphGlyphAttachment',
    'title' => 'Attachment',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Attachment Glyph indicates that a file is attached or can be attached to an object or entity.',
      'composition' => 'The Attachment Glyph uses the glyphicon-paperclip.',
      'effect' => 'Clicking executes an action which delivers these attachments to the actor OR initiates a process to add new attachments.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Indicate whether or not files have been attached to emails in the folder view of Mail.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
        1 => 'A Status Counter MAY indicate the overall amount of attachments.',
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Attachment\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphReset' => 
  array (
    'id' => 'SymbolGlyphGlyphReset',
    'title' => 'Reset',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Reset Glyph is used to indicate the possibilty of resetting changes made by the user within a control back to a previous state.',
      'composition' => 'The Reset Glyph uses the glyphicon-repeat.',
      'effect' => 'Upon clicking, the related control is reloaded immediately and goes back to state before the user changes.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'https://www.ilias.de/docu/goto.php?target=wiki_1357_Responsive_Table_Filters#ilPageTocA121',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Reset Glyph SHOULD not come without an Apply Glyph and vice versa.',
        2 => 'If there are no changes to reset, the Reset Glyph MUST be deactivated (or not be clickable).',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'The deactivated state of the Reset Glyph MUST be visually noticeable for the user, i.e. by greying out the Reset Glyph.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Reset\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphApply' => 
  array (
    'id' => 'SymbolGlyphGlyphApply',
    'title' => 'Apply',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Apply Glyph is used to indicate the possibilty of applying changes which the user has made within a control, i.e. a filter.',
      'composition' => 'The Apply Glyph uses the glyphicon-ok.',
      'effect' => 'Upon clicking, the page is reloaded immediately with the updated content reflected in the control. In case of a filter, it means that the entries in a table change in accordance with the filter values set by the user.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
      0 => 'https://www.ilias.de/docu/goto.php?target=wiki_1357_Responsive_Table_Filters#ilPageTocA121',
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Apply Glyph SHOULD not come without a Reset Glyph and vice versa.',
        2 => 'If there are no changes to apply, the Apply Glyph MUST be deactivated (or not be clickable).',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'The deactivated state of the Apply Glyph MUST be visually noticeable for the user, i.e. by greying out the Apply Glyph.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Apply\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphSearch' => 
  array (
    'id' => 'SymbolGlyphGlyphSearch',
    'title' => 'Search',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Search Glyph is used to trigger a search dialog.',
      'composition' => 'The Search Glyph uses the glyphicon-search.',
      'effect' => 'Clicking this glyph will open a search dialog. Since the context for the Search Glyph primarily is the Meta Bar, the according search dialog will be opened as Tool in the Main Bar.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Search Glyph appears in the Meta Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Search\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphHelp' => 
  array (
    'id' => 'SymbolGlyphGlyphHelp',
    'title' => 'Help',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Help Glyph opens a context-sensitive help screen.',
      'composition' => 'The Help Glyph uses the glyphicon-question-sign.',
      'effect' => 'When clicked, the user is provided with explanations or instructions for the usage of the current context. When used in the Meta Bar, the help is displayed as tool in the Sidebar.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Help Glyph appears in the Meta Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Help\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphCalendar' => 
  array (
    'id' => 'SymbolGlyphGlyphCalendar',
    'title' => 'Calendar',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Calendar glyph is used to symbolize date-related actions or alerts.',
      'composition' => 'The Calendar Glyph uses the glyphicon-calendar.',
      'effect' => 'Clicking the calendar Glyph will usually open a date-picker.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Use in conjunction with Date-Inputs.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Calendar\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphTime' => 
  array (
    'id' => 'SymbolGlyphGlyphTime',
    'title' => 'Time',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Time Glyph is used to symbolize time-related actions or alerts.',
      'composition' => 'The Time Glyph uses the glyphicon-time.',
      'effect' => 'Clicking the Time Glyph will usually open a time-picker.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'Use in conjunction with Date-Inputs.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Time\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphClose' => 
  array (
    'id' => 'SymbolGlyphGlyphClose',
    'title' => 'Close',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Close Glyph is used to symbolize an action that closes something or leaves a previously initiated context.',
      'composition' => 'The Close Glyph uses the glyphicon-remove.',
      'effect' => 'Clicking the Close Glyph will close an overlay or change the view.',
      'rivals' => 
      array (
      ),
    ),
    'background' => '',
    'context' => 
    array (
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Close\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphMore' => 
  array (
    'id' => 'SymbolGlyphGlyphMore',
    'title' => 'More',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The More Glyph allows shortening a part of a set of entries that are too long to be presented fully or would be overwhelming. The More glyph offers viewing the rest of the shortened set of entries so that the entire set becomes visible.',
      'composition' => 'The More Glyph uses the glyphicon-option-horizontal.',
      'effect' => 'Clicking the More Glyph shows the rest of the set of entries.',
      'rivals' => 
      array (
        'Disclosure Glyph' => 'The Disclosure Glyph hides the complete set of entries, wherear the More Glyph only hides parts of it.',
        'Mini Action Dropdown' => 'The Dropdown in the ListGUI without text is used to offer a set of actions that cannot be displayed directly due to scarce space. This is different because the set of entries of the More Glyph does not entail actions.',
        'Show More Less Button' => 'The Show-More /Show Less Button in Timeline unhides a full individual entry of a timeline. Entries are caped at a certain length and Show-More-Buttons allow viewing all the content of this entry. This is different, because the unhidden entirety is an individual entry and not a set of entries. The Show-More /Show Less Button in filtered Categories with loads of objects shows the next x objects in the list GUI. This is different, because what is shown is not an entirety but a part of an entirety.',
        'The Hamburg Glyph' => 'The Hamburg Glyph is an icon introduced on the web, which in most cases represents a complete main menu. This is different from More Glyph, which abbreviates part of the menu. The hamburger icon currently used in the shortened toolbar (on small screens) should actually be replaced because it doesn\'t show the entire main menu, but more actions are displayed when you click on it.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'This Glyph is currently used in the responsive view of the Main Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The usage of this Glyph SHOULD be avoided if possible. Invisible components reduce the affordance of a screen.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Because it has a certain similarity to the Disclose Glyph, it SHOULD also have a visual similarity, which can be distinguished from the Disclose Glyph.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'More\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphDisclosure' => 
  array (
    'id' => 'SymbolGlyphGlyphDisclosure',
    'title' => 'Disclosure',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Disclose Glyph allows hiding a complete set of entries that are too long to be presented fully or would be overwhelming. The Disclosure Glyphs offers viewing the entirety of the hidden set of entries.',
      'composition' => 'The Disclosure Glyph uses the glyphicon-option-vertical.',
      'effect' => 'Clicking the Disclose Glyph shows the entire set of entries.',
      'rivals' => 
      array (
        'More Glyph' => 'The More Glyph hides part of the set of entries. This is a difference to the Disclose Glyph, because here the complete set of entries is collected in a glyph.',
        'Mini Action Dropdown' => 'The Dropdown in the ListGUI without text is used to offer a set of actions that cannot be displayed directly due to scarce space. This is different because the set of entries of the More Glyph does not entail actions.',
        'Show More Less Button' => 'The Show-More /Show Less Button in Timeline unhides a full individual entry of a timeline. Entries are caped at a certain length and Show-More-Buttons allow viewing all the content of this entry. This is different, because the unhidden entirety is an individual entry and not a set of entries. The Show-More /Show Less Button in filtered Categories with loads of objects shows the next x objects in the list GUI. This is different, because what is shown is not an entirety but a part of an entirety.',
        'The Hamburg Glyph' => 'The Hamburg Glyph is an icon introduced on the web, which in most cases represents a complete main menu. This is different from More Glyph, which abbreviates part of the menu. The hamburger icon currently used in the shortened toolbar (on small screens) should actually be replaced because it doesn\'t show the entire main menu, but more actions are displayed when you click on it.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'This Glyph is currently used in the responsive view of the Meta Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The usage of this Glyph SHOULD be avoided if possible. Invisible components reduce the affordance of a screen.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'Because it has a certain similarity to the More Glyph, it SHOULD also have a visual similarity, which can be distinguished from the More Glyph.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be „Disclosure“.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphLanguage' => 
  array (
    'id' => 'SymbolGlyphGlyphLanguage',
    'title' => 'Language',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Language Glyph is used to indicate the option to switch languages by some shorthand workflow without navigating to the personal settings.',
      'composition' => 'The Language Glyph uses the glyphicon-lang from the il-icons set.',
      'effect' => 'When clicked, the user is shown a set of active languages to choose from.',
      'rivals' => 
      array (
        'Standard Icon' => 'The Standard Icon-Set features the Language Icon, which symbolizes the Service "Language". It is not used in the Meta Bar as trigger for switching languages, but to visually identify the language as service (e.g. in the administration).',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Language Glyph appears in the Meta Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Switch Language\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphLogin' => 
  array (
    'id' => 'SymbolGlyphGlyphLogin',
    'title' => 'Login',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Login Glyph is used to trigger the login interaction. It is displayed in the Meta Bar of the user is not yet logged in.',
      'composition' => 'The Login Glyph uses the login glyph from the il-icons font.',
      'effect' => 'Clicking this Glyph will trigger the interaction to authenticate and login.',
      'rivals' => 
      array (
        'Logout Glyph' => 'The Logout Glyph triggers the logout interaction.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Login Glyph appears in the Meta Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Login Glyph MUST be displayed if no user is authenticated.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
        1 => 'The Login Glyph MUST be placed on the very top right.',
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Login\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
  'SymbolGlyphGlyphLogout' => 
  array (
    'id' => 'SymbolGlyphGlyphLogout',
    'title' => 'Logout',
    'abstract' => 0,
    'status_entry' => 'Proposed',
    'status_implementation' => 'Partly implemented',
    'description' => 
    array (
      'purpose' => 'The Logout Glyph is used to trigger the logout interaction. It is displayed in the Slate triggered by clicking on the User Avatar in the Meta Bar.',
      'composition' => 'The Logout Glyph uses the logout glyph from the il-icons font.',
      'effect' => 'Clicking this Glyph will trigger the interaction to logout.',
      'rivals' => 
      array (
        'Login Glyph' => 'The Login Glyph triggers the login interaction.',
      ),
    ),
    'background' => '',
    'context' => 
    array (
      0 => 'The Logout Glyph appears in the Slate triggered by clicking on the User Avatar in the Meta Bar.',
    ),
    'selector' => '',
    'feature_wiki_references' => 
    array (
    ),
    'rules' => 
    array (
      'usage' => 
      array (
        1 => 'The Logout Glyph MUST be displayed if the user is logged in.',
      ),
      'composition' => 
      array (
      ),
      'interaction' => 
      array (
      ),
      'wording' => 
      array (
      ),
      'ordering' => 
      array (
      ),
      'style' => 
      array (
      ),
      'responsiveness' => 
      array (
      ),
      'accessibility' => 
      array (
        1 => 'The aria-label MUST be \'Logout\'.',
      ),
    ),
    'parent' => 'SymbolGlyphFactoryGlyph',
    'children' => 
    array (
    ),
    'less_variables' => 
    array (
    ),
    'path' => 'src/UI/Component/Symbol/Glyph/Glyph',
  ),
);