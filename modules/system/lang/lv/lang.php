<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => 'Atgriežamies pie pamatiem'
    ],
    'directory' => [
        'create_fail' => 'Nevar izveidot mapi: :name'
    ],
    'file' => [
        'create_fail' => 'Nevar izveidot failu: :name'
    ],
    'page' => [
        'invalid_token' => [
            'label' => 'Nederīga drošības atslēga',
        ],
    ],
    'combiner' => [
        'not_found' => "Kombināciju fails ':name' netika atrasts."
    ],
    'system' => [
        'name' => 'Sistēma',
        'menu_label' => 'Sistēma',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Izvēles',
            'logs' => 'Žurnāli',
            'mail' => 'Epasts',
            'shop' => 'Veikals',
            'team' => 'Komanda',
            'users' => 'Lietotāji',
            'system' => 'Sistēma',
            'social' => 'Sociāli',
            'events' => 'Notikumi',
            'customers' => 'Klienti',
            'my_settings' => 'Mani iestatījumi'
        ]
    ],
    'theme' => [
        'label' => 'Tēma',
        'unnamed' => 'Nenosaukta tēma',
        'name' => [
            'label' => 'Tēmas Nosaukums',
            'help' => 'Norādiet tēmas unikālo kodu. Piemēram, RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Instalēt tēmas',
        'search' => 'meklēt tēmas, kuras instalēt...',
        'installed' => 'Instalētās tēmas',
        'no_themes' => 'Nav tēmas, kuras būtu instalētas no tirgus plača.',
        'recommended' => 'Ieteiktās',
        'remove_confirm' => 'Vai esat pārliecināts, ka vēlaties noņemt šo tēmu?'
    ],
    'plugin' => [
        'label' => 'Spraudnis',
        'unnamed' => 'Nenosaukts spraudnis',
        'name' => [
            'label' => 'Spraudņa nosaukums',
            'help' => 'Norādiet spraudņa unikālo kodu. Piemēram, RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Pārvaldīt spraudņus',
        'enable_or_disable' => 'Iespējot vai atspējot',
        'enable_or_disable_title' => 'Iespējot vai Atspējot Spraudņus',
        'install' => 'Instalēt spraudņus',
        'install_products' => 'Instalēt produktus',
        'search' => 'meklēt spraudņus, lai instalētu...',
        'installed' => 'Instalētie spraudņi',
        'no_plugins' => 'Nav spraudņi, kuri būtu instalēti no tirgus plača.',
        'recommended' => 'Rekomendētie',
        'remove' => 'Noņemt',
        'refresh' => 'Atsvaidzināt',
        'disabled_label' => 'Atspējots',
        'disabled_help' => 'Atspējotie spraudņi tiek ignorēti.',
        'frozen_label' => 'Iesaldēt spraudņus',
        'frozen_help' => 'Spraudņi, kuri ir iesaldēti tiks ignorēti atjaunināšanas procesā.',
        'selected_amount' => 'Izvēlēti spraudņi: :amount',
        'remove_confirm' => 'Vai esat pārliecināts, ka vēlaties noņemt šo sparudni?',
        'remove_success' => 'Šie spraudņi tika veiksmīgi noņemti no sistēmas.',
        'refresh_confirm' => 'Vai esat pārliecināts?',
        'refresh_success' => 'Šie sparudņi tika veiksmīgi atsvaidzināti sistēmā.',
        'disable_confirm' => 'Vai esat pārliecināts?',
        'disable_success' => 'Šie spraudņi tika veiksmīgi atspējoti.',
        'enable_success' => 'Šie spraudņi tika veiksmīgi iespējoti.',
        'unknown_plugin' => 'Spraudņi tika noņemti no failu sistēmas.'
    ],
    'project' => [
        'name' => 'Projekts',
        'owner_label' => 'Īpašnieks',
        'attach' => 'Pievienot projektu',
        'detach' => 'Atvienot projektu',
        'none' => 'Nekas',
        'id' => [
            'label' => 'Projekta ID',
            'help' => 'Kā atrast Projekta ID',
            'missing' => 'Lūdzu norādiet Projekta ID, kuru lietot.'
        ],
        'detach_confirm' => 'Vai esat pārliecināts, ka vēlaties atvienot šo projektu?',
        'unbind_success' => 'Projekts tika veiksmīgi atvienots.'
    ],
    'settings' => [
        'menu_label' => 'Iestatījumi',
        'not_found' => 'Nebija iespējams atrast norādītos iestatījumus.',
        'missing_model' => 'Iestatījumu lapa nav norādīta Moduļa definīcijā.',
        'update_success' => 'Iestatījumi priekš :name tika veiksmīgi atjaunināti.',
        'return' => 'Atgriezties sistēmas iestatījumos',
        'search' => 'Meklēt'
    ],
    'mail' => [
        'log_file' => 'Žurnāla fails',
        'menu_label' => 'Epasta konfigurācija',
        'menu_description' => 'Pārvaldīt epasta konfigurāciju.',
        'general' => 'Galvenie',
        'method' => 'Epasta metode',
        'sender_name' => 'Sūtītāja vārds',
        'sender_email' => 'Sūtītāja Epasts',
        'php_mail' => 'PHP pasts',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP Adrese',
        'smtp_authorization' => 'Nepieciešama SMTP autorizācija',
        'smtp_authorization_comment' => 'Lietojiet šo aili,ja SMTP serverim nepieciešama autorizācija.',
        'smtp_username' => 'Lietotājvārds',
        'smtp_password' => 'Parole',
        'smtp_port' => 'SMTP Ports',
        'smtp_ssl' => 'Nepieciešams SSL savienojums',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail Ceļs',
        'sendmail_path_comment' => 'Lūdzu norādiet ceļu uz sendmail programmu.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun Domēns',
        'mailgun_domain_comment' => 'Lūdzu norādiet Mailgun domēna nosaukumu.',
        'mailgun_secret' => 'Mailgun Secret',
        'mailgun_secret_comment' => 'Ievadiet savu Mailgun API kodu.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill Secret',
        'mandrill_secret_comment' => 'Ievadiet savu Mandrill API kodu.',
        'drivers_hint_header' => 'Dziņi nav instalēti',
        'drivers_hint_content' => 'Šai pasta metodei nepieciešams spraudnis ":plugin" instalējiet to pirms pasta sūtīšanas.'
    ],
    'mail_templates' => [
        'menu_label' => 'Epasta veidnes',
        'menu_description' => 'Pielāgojiet Epasta veidnes, kuras tiek sūtītas lietotājiem un administrātoriem, pārvldiet Epastu izkārtojumus.',
        'new_template' => 'Jauna Veidne',
        'new_layout' => 'Jauns Izkārtojumus',
        'template' => 'Veidne',
        'templates' => 'Veidnes',
        'menu_layouts_label' => 'Epasta izkārtojumi',
        'layout' => 'Izkārtojums',
        'layouts' => 'Izkārtojumi',
        'name' => 'Nosaukums',
        'name_comment' => 'Unikāls nosaukums, lai identificētu šo veidni',
        'code' => 'Kods',
        'code_comment' => 'Unikāls kods, lai identificētu šo veidni',
        'subject' => 'Temats',
        'subject_comment' => 'Epasta vēstules temats',
        'description' => 'Apraksts',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Tikai teksts',
        'test_send' => 'Sūtīt testa vēstuli',
        'test_success' => 'Testa vēstule tika veiksmīgi nosūtīta.',
        'return' => 'Atgriezties veidņu sarakstā'
    ],
    'install' => [
        'project_label' => 'Pievienot projektam',
        'plugin_label' => 'Instalēt Spraudni',
        'theme_label' => 'Instalēt Tēmu',
        'missing_plugin_name' => 'Lūdzu norādiet Spraudņa nosaukumu, kuru instalēt.',
        'missing_theme_name' => 'Lūdzu norādiet Tēmas nosaukumu, kuru instalēt.',
        'install_completing' => 'Pabeidzam instalācijas procesu',
        'install_success' => 'Spraudnis tika veiksmīgi instalēts.'
    ],
    'updates' => [
        'title' => 'Pārvaldīt Atjauninājumus',
        'name' => 'Programmatūras atjauninājumi',
        'menu_label' => 'Atjauninājumi',
        'menu_description' => 'Atjauniniet sistēmu, pārvaldiet un instalējiet spraudņus un tēmas.',
        'return_link' => 'Atgriezties sistēmas atjauninājumos',
        'check_label' => 'Pārbaudīt atjauninājumus',
        'retry_label' => 'Mēģināt vēlreiz',
        'plugin_name' => 'Nosaukums',
        'plugin_code' => 'Kods',
        'plugin_description' => 'Apraksts',
        'plugin_version' => 'Versija',
        'plugin_author' => 'Autors',
        'plugin_not_found' => 'Plugin not found',
        'core_current_build' => 'Patreizējā versija',
        'core_build' => 'Versija :build',
        'core_build_help' => 'Jaunāka versija ir pieejama.',
        'core_downloading' => 'Lejupielādējam aplikācijas failus',
        'core_extracting' => 'Atpakojam aplikācijas failus',
        'plugins' => 'Spraudņi',
        'themes' => 'Tēmas',
        'disabled' => 'Atspējots',
        'plugin_downloading' => 'Lejupielādējam spraudni: :name',
        'plugin_extracting' => 'Atpakojam spraudni: :name',
        'plugin_version_none' => 'Jauns spraudnis',
        'plugin_current_version' => 'Patreizējā versija',
        'theme_new_install' => 'Jauna tēmas instalācija.',
        'theme_downloading' => 'Lejupielādējam tēmu: :name',
        'theme_extracting' => 'Atpakojam tēmu: :name',
        'update_label' => 'Programmatūras atjaunināšana',
        'update_completing' => 'Pabeidzam atjaunināšanas procesu',
        'update_loading' => 'Ielādējam pieejamos atjauninājumus...',
        'update_success' => 'Atjaunināšanas process noritēja veiksmīgi.',
        'update_failed_label' => 'Atjauninājums neizdevās',
        'force_label' => 'Forsēt atjaunināšanu',
        'found' => [
            'label' => 'Atrasti jauni atjauninājumi!',
            'help' => 'Spiediet Atjaunināt programmatūru, lai sāktu atjaunināšanas procesu.'
        ],
        'none' => [
            'label' => 'Nav atjauninājumu',
            'help' => 'Netika atrasti jauni atjauninājumi.'
        ],
        'important_action' => [
            'empty' => 'Izvēlēties darbību',
            'confirm' => 'Apstiprināt atjauninājumu',
            'skip' => 'Izlaist šo spraudni (vienreiz)',
            'ignore' => 'Izlaist šo spraudni (vienmēr)',
        ],
        'important_action_required' => 'Jāpievērš uzmanība',
        'important_view_guide' => 'Skatīt atjaunināšanas padomus',
        'important_alert_text' => 'Daži atjauninājumi ir jāpārskata.',
        'details_title_plugin' => 'Spraudņa detaļas',
        'details_view_homepage' => 'Rādīt mājaslapu',
        'details_readme' => 'Dokumentācija',
        'details_readme_missing' => 'Dokumentācija nav pievienota.',
        'details_upgrades' => 'Atjaunināšanas padomi',
        'details_upgrades_missing' => 'Atjaunināšanas padomi nav pievienoti.',
        'details_current_version' => 'Patreizējā versija',
        'details_author' => 'Autors',
    ],
    'server' => [
        'connect_error' => 'Kļūda savienojoties ar serveri.',
        'response_not_found' => 'Atjauninājumu serveris netika atrasts.',
        'response_invalid' => 'Nederīga atbilde no autjauninājumu servera.',
        'response_empty' => 'Tukša atbilde no autjauninājumu servera.',
        'file_error' => 'Neizdevās saņemt failus no servera.',
        'file_corrupt' => 'Fails no servera ir bojāts.'
    ],
    'behavior' => [
        'missing_property' => 'Klasei :class jābūt definētai īpašumam $:property tiek lietota :behavior rīcībai.'
    ],
    'config' => [
        'not_found' => 'Nebija iespējams atrast konfigurācijas failu :file definēt iekš :location.',
        'required' => "Konfigurācijai, kura tiek lietotat :location ir jānorāda vērtība ':property'."
    ],
    'zip' => [
        'extract_failed' => "Nebija iespējams atarhivēt failu ':file'."
    ],
    'event_log' => [
        'hint' => 'Šis žurnāls attēlo sarakstu ar potenciālajām kļūdām, kuras notikušas, tai skaitā izņēmumus un atkļūdošanas informāciju.',
        'menu_label' => 'Notikumu žurnāls',
        'menu_description' => 'Rāda sistēmas žurnāla ziņojumus ar notikuma laiku un detaļām.',
        'empty_link' => 'Iztukšot notikumu žurnālu',
        'empty_loading' => 'Iztukšojam notikumu žurnālu...',
        'empty_success' => 'Notikumu žurnāls veiksmīgi notīrīts.',
        'return_link' => 'Atgriezties notikumu žurnālā',
        'id' => 'ID',
        'id_label' => 'Notikuma ID',
        'created_at' => 'Datums & Laiks',
        'message' => 'Ziņojums',
        'level' => 'Līmenis'
    ],
    'request_log' => [
        'hint' => 'Šis žurnāls attēlo sarakstu ar pārlūkprogrammas pieprasījumiem, kuriem vajadzētu pievērst uzmanību. Piemēram, ja apmeklētājs pieprasa CMS lapu, kura nav pieejama, tiek veikts ieraksts ar kodu 404.',
        'menu_label' => 'Pieprasījumu žurnāls',
        'menu_description' => 'Rāda sliktus vai pārsūtījuma pieprasījumus, kā Lapa netika atrasta (404).',
        'empty_link' => 'Iztukšot pieprasījumu žurnālu',
        'empty_loading' => 'Iztukšojam pieprasījumu žurnālu...',
        'empty_success' => 'Veiksmīgi notīrījām pieprasījumu žurnālu.',
        'return_link' => 'Atgriezties notikumu žurnālā',
        'id' => 'ID',
        'id_label' => 'Žurnāla ID',
        'count' => 'Skaits',
        'referer' => 'Pārsūtītājs',
        'url' => 'URL',
        'status_code' => 'Statuss'
    ],
    'permissions' => [
        'name' => 'Sistēma',
        'manage_system_settings' => 'Pārvaldīt sistēmas iestatījumus',
        'manage_software_updates' => 'Pārvaldīt programmatūras atjauninājumus',
        'access_logs' => 'Skatīt sistēmas žurnālus',
        'manage_mail_templates' => 'Pārvaldīt epasta veidnes',
        'manage_mail_settings' => 'Pārvaldīt epasta iestatījumus',
        'manage_other_administrators' => 'Pārvaldīt citus administrātorus',
        'view_the_dashboard' => 'Skatīt mērinstrumentu paneli',
        'manage_branding' => 'Pielāgot back-end'
    ],
    'media' => [
        'invalid_path' => "Norādīts nederīgs ceļš līdz failam: ':path'.",
        'folder_size_items' => 'objekti(s)',
    ],
];
