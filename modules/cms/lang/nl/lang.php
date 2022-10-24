<?php return [
  'cms_object' => [
    'invalid_file' => 'Ongeldige bestandsnaam: :name. Bestandsnamen mogen enkel bestaan uit letters, cijfers, underscores, streepjes en punten. Voorbeelden van correcte bestandsnamen: pagina.htm, pagina, map/pagina',
    'invalid_file_inspector' => 'Ongeldige bestandsnaam. Bestandsnamen mogen enkel bestaan uit letters, cijfers, underscores, streepjes en punten. Voorbeelden van correcte bestandsnamen: pagina.htm, pagina, map/pagina',
    'invalid_property' => 'Parameter ":name" kan niet worden gewijzigd',
    'file_already_exists' => 'Bestand ":name" bestaat al.',
    'error_saving' => 'Bestand opslaan mislukt: ":name". Controleer de schrijfrechten.',
    'error_creating_directory' => 'Map aanmaken mislukt: ":name". Controleer de schrijfrechten.',
    'invalid_file_extension' => 'Ongeldige bestandsextensie: :invalid. Toegestane extensies zijn: :allowed.',
    'error_deleting' => 'Fout bij het verwijderen van template: ":name". Controleer de schrijfrechten.',
    'delete_success' => 'Templates zijn succesvol verwijderd: :count.',
    'file_name_required' => 'Het invullen van een bestandsnaam is verplicht.',
    'safe_mode_enabled' => 'Veilige modus is op dit moment ingeschakeld.',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'Website',
      'online' => 'online',
      'maintenance' => 'in onderhoud',
      'manage_themes' => 'Beheer thema\'s',
      'customize_theme' => 'Thema aanpassen',
    ],
  ],
  'theme' => [
    'active' => [
      'not_set' => 'Er is geen actief thema geselecteerd.',
      'not_found' => 'Het actieve thema is niet gevonden.',
      'is_locked' => 'Het thema \':theme\' is geblokkeerd en kan niet worden gebruikt. Dupliceer het thema, of maak een child-thema.',
    ],
    'edit' => [
      'not_set' => 'Er is geen thema ingesteld om te kunnen bewerken.',
      'not_found' => 'Het te bewerken thema is niet gevonden.',
      'not_match' => 'Het object dat je probeert te openen behoort niet tot het te bewerken thema. Herlaad de pagina.',
    ],
    'setting_edit_theme' => 'Wijzig bewerk-thema',
    'edit_theme_changed' => 'Bewerk-thema is gewijzigd',
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => 'De pagina \':name\' is niet gevonden.',
    'not_found' => [
      'label' => 'Pagina niet gevonden',
      'help' => 'De opgevraagde pagina kan niet worden gevonden.',
    ],
    'custom_error' => [
      'label' => 'Paginafout',
      'help' => 'Onze excuses, er is iets mis gegaan. De opgevraagde pagina kan niet worden getoond.',
    ],
    'menu_label' => 'Pagina\'s',
    'unsaved_label' => 'Niet opgeslagen pagina\'s',
    'no_list_records' => 'Geen pagina\'s gevonden',
    'new' => 'Nieuwe pagina',
    'invalid_url' => 'Ongeldig URL formaat. De URL moet beginnen met een schuine streep en mag enkel bestaan uit letters, cijfers en de volgende tekens: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'Weet je zeker dat je de geselecteerde pagina\'s wilt verwijderen?',
    'delete_confirm_single' => 'Weet je zeker dat je deze pagina wilt verwijderen?',
    'no_layout' => '-- geen layout --',
    'cms_page' => 'CMS pagina',
    'title' => 'Paginatitel',
    'url' => 'Pagina URL',
    'url_required' => 'De pagina URL is verplicht.',
    'file_name' => 'Pagina bestandsnaam',
    'editor_node_name' => 'Pagina\'s',
    'editor_sorting' => 'Rangschik pagina\'s',
    'editor_sort_by_url' => 'URL',
    'editor_sort_by_title' => 'Titel',
    'editor_sort_by_file_name' => 'Bestandsnaam',
    'editor_grouping' => 'Groupeer pagina\'s',
    'editor_group_by_filepath' => 'Bestandspad',
    'editor_group_by_url' => 'URL',
    'editor_display' => 'Weergave',
    'editor_display_title' => 'Titel',
    'editor_display_url' => 'URL',
    'editor_display_file' => 'Bestandspad',
    'editor_markup' => 'Opmaak',
    'editor_code' => 'Code',
    'description_hint' => 'De omschrijving is optioneel en alleen zichtbaar in de back-end.',
    'create_new' => 'Nieuwe pagina',
  ],
  'layout' => [
    'not_found_name' => 'De layout \':name\' is niet gevonden',
    'menu_label' => 'Layouts',
    'unsaved_label' => 'Niet opgeslagen layouts',
    'no_list_records' => 'Geen layouts gevonden',
    'new' => 'Nieuwe layout',
    'delete_confirm_multiple' => 'Weet je zeker dat je de geselecteerde layouts wilt verwijderen?',
    'delete_confirm_single' => 'Weet je zeker dat je deze layout wilt verwijderen?',
    'editor_node_name' => 'Layouts',
    'create_new' => 'Nieuwe layout',
  ],
  'partial' => [
    'not_found_name' => 'Het partial \':name\' is niet gevonden.',
    'invalid_name' => 'Ongeldige naam voor patial \':name\'.',
    'menu_label' => 'Partials',
    'unsaved_label' => 'Niet opgeslagen partials',
    'no_list_records' => 'Geen partials gevonden',
    'delete_confirm_multiple' => 'Weet je zeker dat je het geselecteerde partial wilt verwijderen?',
    'delete_confirm_single' => 'Weet je zeker dat je deze partial wilt verwijderen?',
    'editor_node_name' => 'Partials',
    'new' => 'Nieuw partial',
    'create_new' => 'Nieuw partial',
  ],
  'content' => [
    'not_found_name' => 'Content \':name\' is niet gevonden.',
    'menu_label' => 'Content',
    'unsaved_label' => 'Niet opgeslagen content',
    'no_list_records' => 'Geen content gevonden',
    'delete_confirm_multiple' => 'Weet je zeker dat je de geselecteerde content of mappen wilt verwijderen?',
    'delete_confirm_single' => 'Weet je zeker dat je deze content wilt verwijderen?',
    'editor_node_name' => 'Content',
    'new' => 'Nieuwe content',
    'editor_content' => 'Content',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Ongeldige AJAX handlernaam: :name.',
    'not_found' => 'AJAX handler \':name\' is niet gevonden.',
  ],
  'cms' => [
    'menu_label' => 'CMS',
  ],
  'sidebar' => [
    'add' => 'Toevoegen',
    'search' => 'Zoeken...',
  ],
  'editor' => [
    'settings' => 'Instellingen',
    'title' => 'Titel',
    'new_title' => 'Nieuwe paginatitel',
    'url' => 'URL',
    'filename' => 'Bestandsnaam',
    'layout' => 'CMS Layout',
    'description' => 'Omschrijving',
    'preview' => 'Voorbeeld',
    'page' => 'CMS Pagina',
    'edit_theme' => 'Bewerk-thema',
    'change_edit_theme' => 'Wijzig bewerk-thema',
    'edit_theme_saved_changed_tabs' => 'Je heb niet-opgeslagen wijzigingen in openstaande tabbladen. Sla de wijzigingen op of sluit de tabbladen om verder te gaan.',
    'partial' => 'CMS Partial',
    'meta' => 'Meta',
    'meta_title' => 'Meta titel',
    'meta_description' => 'Meta omschrijving',
    'markup' => 'Opmaak',
    'code' => 'Code',
    'content' => 'CMS Content',
    'asset' => 'Asset',
    'hidden' => 'Verborgen',
    'hidden_comment' => 'Verborgen pagina zijn alleen toegankelijk voor ingelogde gebruikers.',
    'enter_fullscreen' => 'Volledig scherm starten',
    'exit_fullscreen' => 'Volledig scherm afsluiten',
    'open_searchbox' => 'Open zoekveld',
    'close_searchbox' => 'Sluit zoekveld',
    'open_replacebox' => 'Open vervang veld',
    'close_replacebox' => 'Sluit vervang veld',
    'commit' => 'Commit',
    'reset' => 'Reset',
    'commit_confirm' => 'Weet je zeker dat je je wijzigingen wilt opslaan op het bestandssysteem? Deze actie zal het huidige bestand overschrijven.',
    'reset_confirm' => 'Weet je zeker dat je wilt terugkeren naar de vorige versie? Deze actie zal de vorige versie terugzetten en je wijzigingen zullen verloren gaan.',
    'committing' => 'Committen',
    'resetting' => 'Resetten',
    'commit_success' => ':type is ge-commit naar het bestandssysteem',
    'reset_success' => ':type is ge-reset op het bestandssysteem',
    'error_loading_header' => 'Fout bij het laden van template',
    'component_list' => 'Componenten',
    'component_list_description' => 'Klik of sleep het component naar de editor om deze toe te voegen.',
    'info' => 'Info',
    'refresh' => 'Vernieuwen',
    'create' => 'Maak nieuwe',
    'manage_themes' => 'Beheer thema\'s',
    'error_no_doctype_permissions' => 'Je hebt onvoldoende rechten om het documenttype :doctype te beheren.',
  ],
  'asset' => [
    'menu_label' => 'Assets',
    'unsaved_label' => 'Niet opgeslagen assets',
    'drop_down_add_title' => 'Toevoegen...',
    'drop_down_operation_title' => 'Actie...',
    'upload_files' => 'Bestand(en) uploaden',
    'create_file' => 'Nieuw bestand',
    'create_directory' => 'Nieuwe map',
    'directory_popup_title' => 'Nieuwe map',
    'directory_name' => 'Mapnaam',
    'directory_name_required' => 'De mapnaam is vereist',
    'rename_name_required' => 'De naam is vereist',
    'rename' => 'Hernoemen',
    'delete' => 'Verwijderen',
    'move' => 'Verplaatsen',
    'moving' => 'Verplaats geselecteerde items',
    'moved' => 'Succesvol verplaatst',
    'saved' => 'Bestand opgeslagen',
    'deleted' => 'Bestand verwijderd',
    'select' => 'Selecteren',
    'new' => 'Nieuw bestand',
    'rename_popup_title' => 'Hernoemen',
    'rename_new_name' => 'Nieuwe naam',
    'invalid_path' => 'Pad mag enkel bestaan uit letters, cijfers, spaties en de volgende tekens: ._-/',
    'error_deleting_file' => 'Fout bij verwijderen van het bestand :name.',
    'error_deleting_dir_not_empty' => 'Fout bij verwijderen van map :name. De map is niet leeg.',
    'error_deleting_dir' => 'Fout bij verwijderen van de map :name.',
    'invalid_name' => 'Naam mag enkel bestaan uit letters, cijfers, spaties en de volgende tekens: ._-',
    'original_not_found' => 'Oorspronkelijke bestand of map is niet gevonden',
    'already_exists' => 'Bestand of map met deze naam bestaat al',
    'error_renaming' => 'Fout bij hernoemen van bestand of map',
    'name_cant_be_empty' => 'De naam mag niet leeg zijn',
    'too_large' => 'Het geüploadete bestand is te groot. De maximaal toegestane bestandsgrootte is :max_size',
    'type_not_allowed' => 'Enkel de volgende bestandstypen zijn toegestaand: :allowed_types',
    'file_not_valid' => 'Bestand is ongeldig',
    'error_uploading_file' => 'Fout tijdens uploaden bestand ":name": :error',
    'move_please_select' => 'selecteer',
    'move_destination' => 'Doelmap',
    'move_popup_title' => 'Verplaats assets',
    'move_button' => 'Verplaats',
    'selected_files_not_found' => 'Geselecteerde bestanden zijn niet gevonden',
    'select_destination_dir' => 'Selecteer een doelmap',
    'destination_not_found' => 'Doelmap is niet gevonden',
    'error_moving_file' => 'Fout bij verplaatsen bestand :file',
    'error_moving_directory' => 'Fout bij verplaatsen map :dir',
    'error_deleting_directory' => 'Fout bij het verwijderen van de oorspronkelijke map :dir',
    'no_list_records' => 'Geen bestanden gevonden',
    'delete_confirm' => 'Verwijder geselecteerde bestanden of mappen?',
    'delete_confirm_single' => 'Verwijder geselecteerd bestand of map?',
    'path' => 'Pad',
    'editor_node_name' => 'Assets',
    'open' => 'Openen',
  ],
  'component' => [
    'menu_label' => 'Componenten',
    'unnamed' => 'Naamloos',
    'no_description' => 'Geen beschrijving opgegeven',
    'alias' => 'Alias',
    'alias_description' => 'Een unieke naam voor dit component voor gebruik in de code van een pagina of layout.',
    'validation_message' => 'Een alias voor de component is verplicht en mag alleen bestaan uit letters, cijfers en underscores. De alias moet beginnen met een letter.',
    'invalid_request' => 'De template kan niet worden opgeslagen vanwege ongeldige componentgegevens.',
    'no_records' => 'Geen componenten gevonden',
    'not_found' => 'De component \':name\' is niet gevonden.',
    'method_not_found' => 'De component \':name\' bevat geen \':method\' methode.',
    'expand_or_collapse' => 'Componentenlijst in- of uitklappen',
    'remove' => 'Verwijder component',
    'expand_partial' => 'Uitklappen Component partial',
  ],
  'template' => [
    'invalid_type' => 'Onbekend type template.',
    'not_found' => 'De opgevraagde template is niet gevonden.',
    'saved' => 'Template opgeslagen',
    'saved_to_db' => 'De template is opgeslagen in de database',
    'file_updated' => 'Template bestand is bijgewerkt',
    'reset_from_template_success' => 'Template is hersteld vanuit bestand',
    'reloaded' => 'Template opnieuw ingeladen',
    'deleted' => 'Template verwijderd',
    'no_list_records' => 'Geen records gevonden',
    'delete_confirm' => 'Verwijder geselecteerde templates?',
    'order_by' => 'Sorteer op',
    'last_modified' => 'Gewijzigd op',
    'storage' => 'Opslagmedium',
    'template_file' => 'Bestand',
    'storage_filesystem' => 'Bestandssysteem',
    'storage_database' => 'Database',
    'update_file' => 'Template bestand wijzigen',
    'reset_from_file' => 'Herstel op basis van template bestand',
  ],
  'permissions' => [
    'name' => 'CMS',
    'manage_content' => 'Beheer website content bestanden',
    'manage_assets' => 'Beheer website assets - afbeeldingen, JavaScript bestanden, CSS bestanden',
    'manage_pages' => 'Beheer pagina\'s',
    'manage_layouts' => 'Beheer layouts',
    'manage_partials' => 'Beheer partials',
    'manage_themes' => 'Beheer thema\'s',
    'manage_theme_options' => 'Beheer maatwerk instellingen voor het huidige thema',
  ],
  'theme_log' => [
    'hint' => 'Dit logboek laat alle wijzigingen in het thema zien die aangebracht zijn door de beheerders in de back-end omgeving.',
    'menu_label' => 'Thema logboek',
    'menu_description' => 'Toon wijzigingen op het actieve thema.',
    'empty_link' => 'Thema logboek legen',
    'empty_loading' => 'Bezig met legen van thema logboek...',
    'empty_success' => 'Thema logboek is geleegd',
    'return_link' => 'Terug naar thema logboek',
    'id' => 'ID',
    'id_label' => 'Logboek ID',
    'created_at' => 'Datum & Tijd',
    'user' => 'Gebruiker',
    'type' => 'Type',
    'type_create' => 'Aanmaken',
    'type_update' => 'Wijzigen',
    'type_delete' => 'Verwijderen',
    'theme_name' => 'Thema',
    'theme_code' => 'Thema code',
    'old_template' => 'Template (Oud)',
    'new_template' => 'Template (Nieuw)',
    'template' => 'Template',
    'diff' => 'Wijzigingen',
    'old_value' => 'Oude waarde',
    'new_value' => 'Nieuwe waarde',
    'preview_title' => 'Template wijzigingen',
    'template_updated' => 'Template is gewijzigd',
    'template_created' => 'Template is aangemaakt',
    'template_deleted' => 'Template is verwijderd',
  ],
  'intellisense' => [
    'learn_more' => 'Lees meer',
    'docs' => [
      'partial' => 'Renders the contents of a CMS partial.',
      'page' => 'Renders the contents of a CMS page into a layout template.',
      'content' => 'Renders a CMS content block.',
      'component' => 'Renders the default markup content for a CMS component.',
      'placeholder' => 'Renders a placeholder section.',
      'scripts' => 'Inserts JavaScript file references to scripts injected by the application.',
      'styles' => 'Renders CSS links to stylesheet files injected by the application.',
      'flash' => 'Renders any flash messages stored in the user session.',
      'verbatim' => 'Marks entire sections as being raw text that should not be parsed.',
      'macro' => 'Allows to define custom functions in a template.',
      'for' => 'Loop over each value in a collection.',
      'if' => 'Allows for conditional displaying of the template markup.',
      'abs_filter' => 'The `abs` filter returns the absolute value.',
      'batch_filter' => 'The `batch` filter "batches" items by returning a list of lists with the given number of items. A second parameter can be provided and used to fill in missing items.',
      'capitalize_filter' => 'The `capitalize` filter capitalizes a value. The first character will be uppercase, all others lowercase.',
      'column_filter' => 'The `column` filter returns the values from a single column in the input array.',
      'convert_encoding_filter' => 'The `convert_encoding` filter converts a string from one encoding to another. The first argument is the expected output charset and the second one is the input charset.',
      'country_name_filter' => 'The `country_name` filter returns the country name given its ISO-3166 two-letter code.',
      'currency_name_filter' => 'The `currency_name` filter returns the currency name given its three-letter code.',
      'currency_symbol_filter' => 'The `currency_symbol` filter returns the currency symbol given its three-letter code.',
      'data_uri_filter' => 'The `data_uri` filter generates a URL using the data scheme as defined in RFC 2397.',
      'date_filter' => 'The `date` filter formats a date to a given format.',
      'date_modify_filter' => 'The `date_modify` filter modifies a date with a given modifier string.',
      'default_filter' => 'The `default` filter returns the passed default value if the value is undefined or empty, otherwise the value of the variable.',
      'escape_filter' => 'The `escape` filter escapes a string using strategies that depend on the context.',
      'filter_filter' => 'The `filter` filter filters elements of a sequence or a mapping using an arrow function. The arrow function receives the value of the sequence or mapping.',
      'first_filter' => 'The `first` filter returns the first "element" of a sequence, a mapping, or a string.',
      'format_filter' => 'The `format` filter formats a given string by replacing the placeholders (placeholders follows the [sprintf](https://www.php.net/sprintf) notation).',
      'format_currency_filter' => 'The `format_currency` filter formats a number as a currency.',
      'join_filter' => 'The `join` filter returns a string which is the concatenation of the items of a sequence',
      'json_encode_filter' => 'The `json_encode` filter returns the JSON representation of a value.',
      'keys_filter' => 'The `keys` filter returns the keys of an array. It is useful when you want to iterate over the keys of an array.',
      'last_filter' => 'The `last` filter returns the last "element" of a sequence, a mapping, or a string.',
      'length_filter' => 'The `length` filter returns the number of items of a sequence or mapping, or the length of a string.',
      'lower_filter' => 'The `lower` filter converts a value to lowercase.',
      'map_filter' => 'The `map` filter applies an arrow function to the elements of a sequence or a mapping. The arrow function receives the value of the sequence or mapping.',
      'merge_filter' => 'The `merge` filter merges an array with another array.',
      'nl2br_filter' => 'The `nl2br` filter inserts HTML line breaks before all newlines in a string.',
      'number_format_filter' => 'The `number_format` filter formats numbers. It is a wrapper around PHP’s [number_format](https://www.php.net/number_format) function.',
      'reduce_filter' => 'The `reduce` filter iteratively reduces a sequence or a mapping to a single value using an arrow function, so as to reduce it to a single value. The arrow function receives the return value of the previous iteration and the current value of the sequence or mapping.',
      'replace_filter' => 'The `replace` filter formats a given string by replacing the placeholders.',
      'reverse_filter' => 'The `reverse` filter reverses a sequence, a mapping, or a string.',
      'round_filter' => 'The `round` filter rounds a number to a given precision.',
      'slice_filter' => 'The `slice` filter extracts a slice of a sequence, a mapping, or a string.',
      'sort_filter' => 'The `sort` filter sorts an array.',
      'spaceless_filter' => 'Use the `spaceless` filter to remove whitespace between HTML tags, not whitespace within HTML tags or whitespace in plain text.',
      'split_filter' => 'The `split` filter splits a string by the given delimiter and returns a list of strings.',
      'striptags_filter' => 'The `striptags` filter strips SGML/XML tags and replace adjacent whitespace by one space.',
      'title_filter' => 'The `title` filter returns a titlecased version of the value. Words will start with uppercase letters, all remaining characters are lowercase.',
      'trim_filter' => 'The `trim` filter strips whitespace (or other characters) from the beginning and end of a string.',
      'upper_filter' => 'The `upper` filter converts a value to uppercase.',
      'url_encode_filter' => 'The `url_encode` filter percent encodes a given string as URL segment or an array as query string.',
      'page_filter' => 'The `page` filter creates a link to a page using a page file name, without an extension, as a parameter.',
      'theme_filter' => 'The `theme` filter returns an address relative to the active theme path of the website. ',
      'app_filter' => 'The `app` filter returns an address relative to the public path of the website.',
      'media_filter' => 'The `media` filter returns an address relative to the public path of the [media manager library](https://octobercms.com/docs/cms/mediamanager). ',
      'md_filter' => 'The `md` filter converts the value from Markdown to HTML format.',
      'raw_filter' => 'The `raw` filter marks the value as being "safe", which means that a variable will not be escaped if `raw` is the last filter applied to it.',
    ],
  ],
];
