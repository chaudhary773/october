<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Iskorišćen tip polja nije validan :type.',
    'options_method_invalid_model' => 'Atribut \':field\' ne vraća validni model. Pokušaj da eksplicitno specificiraš metod opcija za model klase :model.',
    'options_method_not_exists' => 'Model klase :model mora definisati metod :method() koji vraća opcije za polje obrasca \':field\'.',
    'colors_method_not_exists' => 'Model klase :model mora da definiše metod :method() koji vraća heksadecimalne kodove boje za polje obrasca \':field\'.',
  ],
  'widget' => [
    'not_registered' => 'Klasa posredničkog elementa \':name\' nije registrovana',
    'not_bound' => 'Kalasa posredničkog elementa \':name\' nije vezana za kontroler',
  ],
  'page' => [
    'untitled' => 'Bez naziva',
    404 => [
      'label' => 'Stranica nije pronađena',
      'help' => 'Traženi URL nije pronađen. Možda tražiš nešto drugo?',
      'back_link' => 'Nazad na prošlu stranicu',
    ],
    'access_denied' => [
      'label' => 'Pristup odbijen',
      'help' => 'Nemaš odgovarajuće dozvole za pristup ovoj stranici.',
      'cms_link' => 'Nazad na pozadinski sistem',
    ],
    'no_database' => [
      'label' => 'Baza podataka nedostaje',
      'help' => 'Baza podataka je neophodna za pristup pozadinskom sistemu. Proveri da li je baza podataka konfigurisana kako treba i pokušaj ponovo.',
      'cms_link' => 'Nazad na početnu stranicu',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Parcijal \':name\' nije pronađen.',
    'invalid_name' => 'Naziv parcijala nije validan: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Naziv AJAX rukovatelja nije validan: :name.',
    'not_found' => 'AJAX rukovatelj \':name\' nije pronađen.',
  ],
  'account' => [
    'impersonate' => 'Oponašaj korisnika',
    'impersonate_confirm' => 'Da li zaista želiš da oponašaš ovog korisnika? Možeš se vratiti na originalno stanje kada se izloguješ.',
    'impersonate_success' => 'Sada oponašaš ovog korisnika',
    'impersonate_working' => 'Oponašanje...',
    'impersonating' => 'Oponašanje :full_name',
    'stop_impersonating' => 'Prestani sa oponašanjem',
    'unsuspend' => 'Obustavljena suspenzija',
    'unsuspend_confirm' => 'Da li zaista želiš da obustaviš suspenziju za ovog korisnika?',
    'unsuspend_success' => 'Korisnik više nije supsendovan.',
    'unsuspend_working' => 'Obustavljanje suspenzije...',
    'signed_in_as' => 'Ulogovan kao :full_name',
    'sign_out' => 'Izloguj se',
    'login_placeholder' => 'login',
    'password_placeholder' => 'lozinka',
    'enter_email' => 'Unesi svoj email',
    'email_placeholder' => 'email',
    'apply' => 'Primeni',
    'cancel' => 'Otkaži',
    'delete' => 'Izbriši',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Kontrolna tabla',
    'widget_label' => 'Posrednički element',
    'widget_width' => 'Širina',
    'full_width' => 'puna širina',
    'manage_widgets' => 'Upravljanje posredničkim elementima',
    'add_widget' => 'Dodaj posrednički element',
    'widget_inspector_title' => 'Konfiguracija posredničkog elementa',
    'widget_inspector_description' => 'Konfiguriši izveštaj za posrednički element',
    'widget_columns_label' => 'Širina :columns',
    'widget_columns_description' => 'Širina posredničkog elementa, broj između 1 i 12.',
    'widget_columns_error' => 'Unesi širinu posredničkog elementa kao broj između 1 i 12.',
    'columns' => '{1} kolona|[2,Inf] kolone',
    'widget_new_row_label' => 'Novi red na silu',
    'widget_new_row_description' => 'Postavi posrednički element u novi red.',
    'widget_title_label' => 'Naslov posredničkog elementa',
    'widget_title_error' => 'Naslov za posrednički element je neophodan.',
    'reset_layout' => 'Resetuj plan',
    'reset_layout_confirm' => 'Resetuj plan na podrazumevani?',
    'reset_layout_success' => 'Plan je resetovan',
    'make_default' => 'Učini podrazumevanim',
    'make_default_confirm' => 'Postavi trenutni plan kao podrazumevani?',
    'make_default_success' => 'Trenutni plan je sada podrazumevani',
    'collapse_all' => 'Sklopi sve',
    'expand_all' => 'Rasklopi sve',
    'status' => [
      'widget_title_default' => 'Status sistema',
      'update_available' => '{0} ispravki dostupno!|{1} ispravka dostupna!|[2,Inf] ispravke dostupne!',
      'updates_pending' => 'Čekaju se ispravke softvera',
      'updates_nil' => 'Softver je ažuriran',
      'updates_link' => 'Ažuriraj',
      'warnings_pending' => 'Neki problemi zahtevaju vašu pažnju',
      'warnings_nil' => 'Nema upozorenja za prikaz',
      'warnings_link' => 'Pogled',
      'core_build' => 'Verzija sistema',
      'event_log' => 'Log događaja',
      'request_log' => 'Log zahteva',
      'app_birthday' => 'Na mreži od',
    ],
    'welcome' => [
      'widget_title_default' => 'Dobrodošli',
      'welcome_back_name' => 'Dobrodošli nazad na :app, :name.',
      'welcome_to_name' => 'Dobrodošli na :app, :name.',
      'first_sign_in' => 'Prvi put ste se ulogovali.',
      'last_sign_in' => 'Vaše poslednje logovanje je bilo na',
      'view_access_logs' => 'Prikaži logove pristupa',
      'nice_message' => 'Lep dan želim!',
    ],
  ],
  'user' => [
    'name' => 'Administrator',
    'menu_label' => 'Administratori',
    'menu_description' => 'Upravljaj administratorima pozadinskog sistema, grupama i dozvolama.',
    'list_title' => 'Upravljanje administratorima',
    'new' => 'Novi administrator',
    'login' => 'Logovanje',
    'first_name' => 'Ime',
    'last_name' => 'Prezime',
    'full_name' => 'Ime i prezime',
    'email' => 'Email',
    'role_field' => 'Rola',
    'role_comment' => 'Role definišu dozvole korisnika, koje mogu biti pregažene na korisničkom nivou ili preko taba za dozvole.',
    'groups' => 'Grupe',
    'groups_comment' => 'Speicificiraj grupe kojima nalog treba pripadati.',
    'avatar' => 'Avatar',
    'password' => 'Lozinka',
    'password_confirmation' => 'Potvrdi lozinku',
    'permissions' => 'Dozvole',
    'account' => 'Nalog',
    'superuser' => 'Super korisnik',
    'superuser_comment' => 'Dozvoli ovom nalogu pristup svim delovima sistema bez ograničenja. Super korisnici mogu dodavati i upravljati drugim korisnicima.',
    'send_invite' => 'Pošalji pozivnicu preko mejla',
    'send_invite_comment' => 'Pošalji poruku dobrodošlice koja sadrži informacije za logovanje.',
    'delete_confirm' => 'Obriši administratora?',
    'return' => 'Nazad na listu administratora',
    'allow' => 'Dozvoli',
    'inherit' => 'Nasledi',
    'deny' => 'Odbij',
    'activated' => 'Aktiviran',
    'last_login' => 'Poslednje logovanje:',
    'created_at' => 'Napravljen:',
    'updated_at' => 'Ažuriran:',
    'deleted_at' => 'Obrisan:',
    'show_deleted' => 'Prikaži izbrisane',
    'group' => [
      'name' => 'Grupe',
      'name_field' => 'Naziv',
      'name_comment' => 'Naziv je prikazan u listi grupa u administratorskom obrascu.',
      'description_field' => 'Opis',
      'is_new_user_default_field_label' => 'Osnovna grupa',
      'is_new_user_default_field_comment' => 'Podrazumevano dodaj nove administratore ovoj grupi.',
      'code_field' => 'Kod',
      'code_comment' => 'Unesi jedinstveni kod ako želiš da pristupaš objektu grupe preko API-ja.',
      'menu_label' => 'Upravljaj grupama',
      'list_title' => 'Upravljaj grupama',
      'new' => 'Nova grupa',
      'delete_confirm' => 'Izbriši ovu administratorsku grupu?',
      'return' => 'Nazad na listu grupa',
      'users_count' => 'Korisnici',
    ],
    'role' => [
      'name' => 'Rola',
      'name_field' => 'Naziv',
      'name_comment' => 'Naziv je prikazan u listi rola u administratorskom obrascu.',
      'description_field' => 'Opis',
      'code_field' => 'Kod',
      'code_comment' => 'Unesi jedinstveni kod ako želiš da pristupaš objektu role preko API-ja.',
      'menu_label' => 'Upravljaj rolama',
      'list_title' => 'Upravljaj rolama',
      'new' => 'Nova rola',
      'delete_confirm' => 'Izbriši ovu administratorsku rolu?',
      'return' => 'Nazad na listu rola',
      'users_count' => 'Korisnici',
    ],
    'preferences' => [
      'not_authenticated' => 'Nema autentifikovanog korisnika za učitavanje ili čuvanje podeski.',
    ],
    'trashed_hint_title' => 'Ovaj nalog je izbrisan',
    'trashed_hint_desc' => 'Ovaj nalog je izbrisan i neće više moći da se koristi za logovanje. Da ga povratiš, klikni na ikonicu u donjem desnom uglu',
  ],
  'list' => [
    'default_title' => 'Lista',
    'search_prompt' => 'Traži...',
    'no_records' => 'Nema zapisa u ovom pogledu.',
    'missing_model' => 'Lista ponašanja korišćena u klasi :class nema definisan model.',
    'missing_column' => 'Nema definicija za sledeće kolone: :columns.',
    'missing_columns' => 'Lista korišćena u klasi :class nema definisane kolone.',
    'missing_definition' => 'Lista ponašanja ne sadrži definiciju za \':field\'.',
    'missing_parent_definition' => 'Lista ponašanja ne sadrži definiciju za \':definition\'.',
    'behavior_not_ready' => 'Lista ponašanja nije inicijalizovana, proveri da li je metoda makeLists() pozvana u kontroleru.',
    'invalid_column_datetime' => 'Vrednost kolone \':column\' nije DateTime objekat, da li ti nedostaje $dates referenca u modelu?',
    'pagination' => 'Prikazani zapisi: :from-:to od ukupno :total',
    'first_page' => 'Prva strana',
    'last_page' => 'Poslednja strana',
    'prev_page' => 'Prošla strana',
    'next_page' => 'Sledeća strana',
    'refresh' => 'Osveži',
    'updating' => 'Ažuriranje...',
    'loading' => 'Učitavanje...',
    'setup_title' => 'Podešavanje liste',
    'setup_help' => 'Koristi polja za potvrdu za biranje kolona koje želiš da vidiš u listi. Možeš menjati položaj kolona prevlačenjem na gore ili dole.',
    'records_per_page' => 'Zapisa po strani',
    'records_per_page_help' => 'Izaberi broj zapisa za prikazivanje po strani. Imaj samo na umu da veliki broj zapisa po strani može smanjiti performanse.',
    'check' => 'Proveri',
    'delete_selected' => 'Izbriši izabrane',
    'delete_selected_empty' => 'Nema izabranih zapisa za brisanje.',
    'delete_selected_confirm' => 'Izbriši izabrane zapise?',
    'delete_selected_success' => 'Izabrani zapisi su obrisani.',
    'column_switch_true' => 'Da',
    'column_switch_false' => 'Ne',
  ],
  'fileupload' => [
    'attachment' => 'Prilog',
    'help' => 'Dodaj naslov i opis za ovaj prilog.',
    'title_label' => 'Naslov',
    'description_label' => 'Opis',
    'default_prompt' => 'Klikni na %s ili prevuci fajl ovde za otpremanje',
    'attachment_url' => 'URL priloga',
    'upload_file' => 'Otpremi fajl',
    'upload_error' => 'Greška pri otpremanju',
    'remove_confirm' => 'Da li si siguran?',
    'remove_file' => 'Izbriši fajl',
  ],
  'repeater' => [
    'add_new_item' => 'Dodaj novi element',
    'min_items_failed' => 'Ponavljač :name zahteva minimum :min elementa, samo :items je obezbeđeno',
    'max_items_failed' => 'Ponavljač :name može imati maksimum :max elemenata, :items je obezbeđeno',
  ],
  'form' => [
    'create_title' => 'Nova :name',
    'update_title' => 'Izmeni :name',
    'preview_title' => 'Pregledaj :name',
    'create_success' => ':name napravljen',
    'update_success' => ':name ažuriran',
    'delete_success' => ':name obrisan',
    'restore_success' => ':name povraćen',
    'reset_success' => 'Resetovanje završeno',
    'missing_id' => 'ID obrasca nije specificiran.',
    'missing_model' => 'Ponašanje obrasca koje se koristi u klasi :class nema definisan model.',
    'missing_definition' => 'Ponašanje obrasca ne sadrži sledeće polje: \':field\'.',
    'not_found' => 'Zapis obrasca sa identifikatorom :id nije pronađen.',
    'action_confirm' => 'Da li ste sigurni?',
    'create' => 'Napravi',
    'create_and_close' => 'Napravi i zatvori',
    'creating' => 'Pravljenje...',
    'creating_name' => 'Pravljenje :name...',
    'save' => 'Sačuvaj',
    'save_and_close' => 'Sačuvaj i zatvori',
    'saving' => 'Čuvanje...',
    'saving_name' => 'Čuvanje :name...',
    'delete' => 'Izbriši',
    'deleting' => 'Brisanje...',
    'confirm_delete' => 'Izbriši zapis?',
    'confirm_delete_multiple' => 'Izbriši odabrane zapise?',
    'deleting_name' => 'Brisanje :name...',
    'restore' => 'Povrati',
    'restoring' => 'Vraćanje...',
    'confirm_restore' => 'Da li zaista želite da povratite ovaj zapis?',
    'reset_default' => 'Resetuj na osnovno',
    'resetting' => 'Resetovanje',
    'resetting_name' => 'Resetovanje :name',
    'undefined_tab' => 'Razno',
    'field_off' => 'Isključi',
    'field_on' => 'Uključi',
    'add' => 'Dodaj',
    'apply' => 'Primeni',
    'cancel' => 'Poništi',
    'close' => 'Zatvori',
    'confirm' => 'Potvrdi',
    'reload' => 'Ponovo učitaj',
    'complete' => 'Kompletno',
    'ok' => 'OK',
    'or' => 'ili',
    'confirm_tab_close' => 'Zatvori tab? Nesačuvane promene će biti izgubljene.',
    'behavior_not_ready' => 'Ponašanje obrasca se nije inicijalizovalo, proveri da li je metoda initForm() pozvana.',
    'preview_no_files_message' => 'Nema otpremljenih fajlova.',
    'preview_no_media_message' => 'Nema izabranih medija.',
    'preview_no_record_message' => 'Nema izabranih zapisa.',
    'select' => 'Izaberi',
    'select_all' => 'Izaberi sve',
    'select_none' => 'Ukloni odabire',
    'select_placeholder' => 'izaberi',
    'insert_row' => 'Ubaci red',
    'insert_row_below' => 'Ubaci red ispod',
    'delete_row' => 'Izbriši red',
    'concurrency_file_changed_title' => 'Fajl je izmenjen',
    'concurrency_file_changed_description' => 'Fajl nad kojim je rađeno je u međuvremenu promenjen od strane drugog korisnika. Možeš ponovo da ga učitaš i izgubiš svoje promene, ili ga jednostavno pregaziš.',
    'return_to_list' => 'Nazad na listu',
  ],
  'recordfinder' => [
    'find_record' => 'Pronađi zapis',
    'invalid_model_class' => 'Klasa modela ":modelClass" za pretragu nije validna',
    'cancel' => 'Otkaži',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Relacioni odnos nema konfiguraciju za \':config\'.',
    'missing_definition' => 'Relacioni odnos ne sadrži definiciju za polje \':field\'.',
    'missing_model' => 'Relacioni odnos korišćen u klasi :class nema definisan model.',
    'invalid_action_single' => 'Ova radnja se ne može izvršiti na jednoj vezi.',
    'invalid_action_multi' => 'Ova radnja se ne može izvršiti na više veza.',
    'help' => 'Klikni na element za dodavanje',
    'related_data' => 'Srodni podatak: :name',
    'add' => 'Dodaj',
    'add_selected' => 'Dodaj izabrane',
    'add_a_new' => 'Dodaj novu :name',
    'link_selected' => 'Zakači izabrane',
    'link_a_new' => 'Zakači novu :name',
    'cancel' => 'Otkaži',
    'close' => 'Zatvori',
    'add_name' => 'Dodaj :name',
    'create' => 'Napravi',
    'create_name' => 'Napravi :name',
    'update' => 'Ažuriraj',
    'update_name' => 'Ažuriraj :name',
    'preview' => 'Pregledaj',
    'preview_name' => 'Pregledaj :name',
    'remove' => 'Ukloni',
    'remove_name' => 'Ukloni :name',
    'delete' => 'Izbriši',
    'delete_name' => 'Izbriši :name',
    'delete_confirm' => 'Da li ste sigurni?',
    'link' => 'Zakači',
    'link_name' => 'Zakači :name',
    'unlink' => 'Otkači',
    'unlink_name' => 'Otkači :name',
    'unlink_confirm' => 'Da li ste sigurni?',
  ],
  'reorder' => [
    'default_title' => 'Promeni redosled',
    'no_records' => 'Ne postoje elementi za razmeštanje.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'Model \':class\' sa odabranim identifikatorom :id nije pronađen',
    'missing_id' => 'ID za pretragu modela nije specificiran.',
    'missing_relation' => 'Model \':class\' ne sadrži definiciju za relaciju: \':relation\'.',
    'missing_method' => 'Model \':class\' ne sadrži metod: \':method\'.',
    'invalid_class' => 'Model :model korišćen u klasi :class nije validan, mora da nasledi klasu \\Model.',
    'mass_assignment_failed' => 'Greška pri masovnom dodeljivanju za atribut modela: \':attribute\'.',
  ],
  'warnings' => [
    'tips' => 'Saveti za konfigurisanje sistema',
    'tips_description' => 'Postoje problemi na koje bi trebalo da obratiš pažnju da bi konfigurisao sistem kako treba.',
    'permissions' => 'PHP ne može pristupiti direktorijumu :name ili njegovim poddirektorijuma zarad upisivanja. Promeni RWX dozvole na serveru za ovaj direktorijum.',
    'extension' => 'Produžetak za PHP :name nije instaliran. Instaliraj ovu biblioteku i produžetak.',
    'plugin_missing' => 'Produžetak :name je obavezan ali nije instaliran. Instaliraj ovaj produžetak.',
    'debug' => 'Uključen je mod za ispravljanje grešaka što nije preporučljivo.',
    'decompileBackendAssets' => 'Sredstva u pozadinskom sistemu trenutno nisu kompajlovana što nije preporučljivo.',
  ],
  'editor' => [
    'menu_label' => 'Podešavanje editora',
    'menu_description' => 'Izmeni postavke globalnog editora, kao što su veličina fonta, boje, itd.',
    'font_size' => 'Veličina fonta',
    'tab_size' => 'Veličina taba',
    'use_hard_tabs' => 'Uvođenje pomoću tabova',
    'code_folding' => 'Presavijanje koda',
    'code_folding_begin' => 'Označi početak',
    'code_folding_begin_end' => 'Označi početak i kraj',
    'autocompletion' => 'Automatsko dovršavanje',
    'word_wrap' => 'Prelomi redove',
    'highlight_active_line' => 'Istakni aktivne linije',
    'auto_closing' => 'Automatski zatvori tagove',
    'show_invisibles' => 'Prikaži nevidljive karaktere',
    'show_gutter' => 'Prikaži margine za povezivanje',
    'basic_autocompletion' => 'Osnovno automatsko dovršavanje (Ctrl + Space)',
    'live_autocompletion' => 'Instant automatsko dovršavanje',
    'enable_snippets' => 'Uključi isečke za kod (Tab)',
    'display_indent_guides' => 'Prikaži pomoćne margine za uvođenje',
    'show_print_margin' => 'Prikaži margine za štampu',
    'mode_off' => 'Isključen mod',
    'mode_fluid' => 'Fluidan mod',
    '40_characters' => '40 karaktera',
    '80_characters' => '80 karaktera',
    'theme' => 'Boje',
    'markup_styles' => 'Stilovi označavanja',
    'custom_styles' => 'Proizvoljni stilovi',
    'custom styles_comment' => 'Proizvoljni stilovi za uključivanje u HTML editor.',
    'markup_classes' => 'Klase označavanja',
    'paragraph' => 'Paragraf',
    'link' => 'Link',
    'table' => 'Tabela',
    'table_cell' => 'Ćelija tabele',
    'image' => 'Slika',
    'label' => 'Oznaka',
    'class_name' => 'Naziv klase',
    'markup_tags' => 'Tagovi označavanja',
    'allowed_empty_tags' => 'Dozvoljeni prazni tagovi',
    'allowed_empty_tags_comment' => 'Lista tagova koji se ne brišu kada nemaju sadržaj.',
    'allowed_tags' => 'Dozvoljeni tagovi',
    'allowed_tags_comment' => 'Lista dozvoljenih tagova.',
    'no_wrap' => 'Ne umeći tagove',
    'no_wrap_comment' => 'Lista tagova koji se ne trebaju umetati u blokovske tagove.',
    'remove_tags' => 'Ukloni tagove',
    'remove_tags_comment' => 'Lista tagova koji se brišu zajedno sa njihovim sadržajem.',
    'line_breaker_tags' => 'Tagovi za liniju prekida',
    'line_breaker_tags_comment' => 'Lista tagova koji se koriste za postavljanje linije prekida za elemente.',
    'toolbar_buttons' => 'Traka sa alatkama',
    'toolbar_buttons_comment' => 'Traka sa alatkama će obično biti prikazana u editoru.',
    'toolbar_buttons_preset' => 'Ubaci već podešenu konfiguraciju za traku sa alatkama:',
    'toolbar_buttons_presets' => [
      'default' => 'Osnovna',
      'minimal' => 'Minimalna',
      'full' => 'Kompletna',
    ],
  ],
  'tooltips' => [
    'preview_website' => 'Pregledaj sajt',
  ],
  'mysettings' => [
    'menu_label' => 'Moja podešavanja',
    'menu_description' => 'Podešavanja vezana za administratorski nalog',
  ],
  'myaccount' => [
    'menu_label' => 'Moj nalog',
    'menu_description' => 'Ažuriraj detalje svog naloga kao što su ime, prezime, email adresa i lozinka.',
    'menu_keywords' => 'bezbednosno logovanje',
  ],
  'branding' => [
    'menu_label' => 'Izmene pozadinskog sistema',
    'menu_description' => 'Izmene za administratorsku sekciju poput naziva, boja, logoa, itd.',
    'brand' => 'Brend',
    'logo' => 'Logo',
    'logo_description' => 'Otpremi željeni logo za pozadinski sistem.',
    'favicon' => 'Ikonica',
    'favicon_description' => 'Otpremi željenu ikonicu za pozadinski sistem.',
    'app_name' => 'Naziv aplikacije',
    'app_name_description' => 'Ovo ime će se prikazati kao naslov pozadinskog sistema.',
    'app_tagline' => 'Slogan aplikacije',
    'app_tagline_description' => 'Ovaj slogan će se prikazati na strani za logovanje na pozadinski sistem.',
    'colors' => 'Boje',
    'primary_color' => 'Primarne boje',
    'secondary_color' => 'Sekundarne boje',
    'accent_color' => 'Akcentovane boje',
    'styles' => 'Stilovi',
    'custom_stylesheet' => 'Proizvoljni stil',
    'navigation' => 'Navigacija',
    'menu_mode' => 'Stil menija',
    'menu_mode_inline' => 'Uveden',
    'menu_mode_inline_no_icons' => 'Uveden (bez ikonica)',
    'menu_mode_tile' => 'Poređan',
    'menu_mode_collapsed' => 'Sklopljen',
  ],
  'backend_preferences' => [
    'menu_label' => 'Postavke pozadinskog sistema',
    'menu_description' => 'Upravljaj postavkama tvog naloga.',
    'region' => 'Region',
    'code_editor' => 'Editor koda',
    'timezone' => 'Vremenska zona',
    'timezone_comment' => 'Podesi prikazane datume na osnovu ove vremenske zone.',
    'locale' => 'Prevod',
    'locale_comment' => 'Izaberi željeni jezik prevoda.',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'svi',
    'options_method_not_exists' => 'Model klase :model mora definisati povratne opcije metoda :method() za \':filter\' filter.',
    'date_all' => 'svi periodi',
    'number_all' => 'svi brojevi',
  ],
  'import_export' => [
    'row' => 'Red :row',
    'show_ignored_columns' => 'Prikaži ignorisane kolone',
    'auto_match_columns' => 'Automatski upari kolone',
    'created' => 'Napravljeni',
    'updated' => 'Ažurirani',
    'skipped' => 'Preskočeni',
    'warnings' => 'Upozorenja',
    'errors' => 'Greške',
    'skipped_rows' => 'Preskočeni redovi',
    'upload_valid_csv' => 'Otpremi validan CSV fajl.',
    'drop_column_here' => 'Spusti kolonu ovde...',
    'ignore_this_column' => 'Ignoriši ovu kolonu',
    'processing_successful_line1' => 'Proces izvoza fajla je završen!',
    'processing_successful_line2' => 'Pretraživač će sada biti preusmeren na fajl za preuzimanje.',
    'export_error' => 'Greška pri izvozu',
    'file_not_found_error' => 'Fajl nije pronađen',
    'empty_error' => 'Nije bilo podataka za izvoz',
    'empty_import_columns_error' => 'Specificiraj neke kolone za uvoz.',
    'match_some_column_error' => 'Upari prvo neke kolone.',
    'required_match_column_error' => 'Specificiraj par za obavezno polje: :label.',
    'empty_export_columns_error' => 'Specificiraj kolone za izvoz.',
    'behavior_missing_uselist_error' => 'Moraš implementirati ponašanje za "ListController" sa omogućenom opcijom izvoza - "useList."',
    'missing_model_class_error' => 'Izaberi svojstvo modela kalse za svojstvo: :type',
    'missing_column_id_error' => 'Identifikator kolone ne postoji',
    'unknown_column_error' => 'Nepoznata kolona',
    'encoding_not_supported_error' => 'Kodiranje izvorne datoteke nije prepoznato. Izaberite opciju prilagođenog formata datoteke sa odgovarajućim kodiranjem da biste uvezli datoteku.',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Zapadnoevropski)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Srednjoevropski)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, Južnoevropski)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, Severnoevropski)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Ćirilični)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arapski)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Grčki)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrejski)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turski)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordijski)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Tajlandski)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltički region)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Keltski)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Zapadnoevropska revizija sa euro znakom)',
      'windows_1250' => 'Windows-1250 (CP1250, Severnoevropski i istočnoevropski)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Otpremi i upravljaj medijima - slikama, video i audio zapisima, dokumentima',
  ],
  'mediafinder' => [
    'label' => 'Pretražuj medije',
    'default_prompt' => 'Klikni na %s dugme za traženje elementa',
    'no_image' => 'Slika nije pronađena',
  ],
  'media' => [
    'menu_label' => 'Mediji',
    'upload' => 'Otpremanje',
    'move' => 'Pomeri',
    'delete' => 'Izbriši',
    'add_folder' => 'Dodaj direktorijum',
    'search' => 'Traži',
    'display' => 'Prikaži',
    'filter_everything' => 'Sve',
    'filter_images' => 'Slike',
    'filter_video' => 'Video zapisi',
    'filter_audio' => 'Audio zapisi',
    'filter_documents' => 'Dokumenta',
    'library' => 'Biblioteka',
    'size' => 'Veličina',
    'title' => 'Naslov',
    'last_modified' => 'Poslednja modifikacija',
    'public_url' => 'URL',
    'click_here' => 'Klikni ovde',
    'thumbnail_error' => 'Greška pri generisanju pregledne slike.',
    'return_to_parent' => 'Nazad na nadređeni direktorijum',
    'return_to_parent_label' => 'Idi nazad ..',
    'nothing_selected' => 'Ništa nije izabrano.',
    'multiple_selected' => 'Više elemenata je izabrano.',
    'uploading_file_num' => 'Otpremi :number fajl(ova)...',
    'uploading_complete' => 'Otpremanje završeno',
    'uploading_error' => 'Otpremanje neuspešno',
    'type_blocked' => 'Fajl je blokiran iz bezbednosnih razloga.',
    'order_by' => 'Sortiraj po',
    'direction' => 'Pravac',
    'direction_asc' => 'Uzlazni',
    'direction_desc' => 'Silazni',
    'folder' => 'Direktorijum',
    'no_files_found' => 'Nijedan fajl nije pronađen.',
    'delete_empty' => 'Izaberi elemente za brisanje.',
    'delete_confirm' => 'Izbriši odabran element(e)?',
    'error_renaming_file' => 'Greška pri promeni naziva elementa.',
    'new_folder_title' => 'Novi direktorijum',
    'folder_name' => 'Naziv direktorijuma',
    'error_creating_folder' => 'Greška pri pravljenju direktorijuma',
    'folder_or_file_exist' => 'Direktorijum ili fajl sa navedenim nazivom već postoji.',
    'move_empty' => 'Izaberi elemente za pomeranje.',
    'move_popup_title' => 'Pomeri fajlove ili direktorijume',
    'move_destination' => 'Odredišni direktorijum',
    'please_select_move_dest' => 'Izaberi odredišni direktorijum.',
    'move_dest_src_match' => 'Izaberi drugi odredišni direktorijum.',
    'empty_library' => 'Otpremi fajlove ili napravi direktorijume.',
    'insert' => 'Ubaci',
    'crop_and_insert' => 'Iseci & ubaci',
    'select_single_image' => 'Izaberi jednu sliku.',
    'selection_not_image' => 'Izabrani element nije slika.',
    'restore' => 'Poništi sve promene',
    'resize' => 'Promeni veličinu...',
    'selection_mode_normal' => 'Normalna',
    'selection_mode_fixed_ratio' => 'Fiksirani odnos',
    'selection_mode_fixed_size' => 'Fiksirana veličina',
    'height' => 'Visina',
    'width' => 'Širina',
    'selection_mode' => 'Mod selekcije',
    'resize_image' => 'Promeni veličinu slike',
    'image_size' => 'Veličina slike:',
    'selected_size' => 'Izabrana veličina:',
  ],
];
