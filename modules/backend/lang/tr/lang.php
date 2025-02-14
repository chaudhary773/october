<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Geçersiz alan tipi :type.',
    'options_method_invalid_model' => '\':field\' metodu, geçerli bir model ile eşleşmiyor. :model Model\'i için options metodu tanımlamalısınız.',
    'options_method_not_exists' => ':model Model\'i içerisinde \':field\' formuna geri dönüş için bir :method() metodu tanımlanmalıdır.',
    'colors_method_not_exists' => ':model Model\'i içerisinde \':field\' form alanı için html renk HEX kodu üreten :method() metodu tanımlanmalıdır.',
  ],
  'widget' => [
    'not_registered' => '\':name\' isimli widget sınıfı sistemde kayıtlı değil',
    'not_bound' => '\':name\' isimli widget sınıfı controllerda tanımlanmamış',
  ],
  'page' => [
    'untitled' => 'Başlıksız',
    'access_denied' => [
      'label' => 'Giriş engellendi',
      'help' => 'Bu sayfayı görüntülemek için gerekli izinlere sahip değilsiniz.',
      'cms_link' => 'Ana sayfaya dön',
    ],
    'no_database' => [
      'label' => 'Veritabanı yapılandırılmamış',
      'help' => 'Yönetim paneline erişebilmeniz için geçerli bir veritabanı yapılandırması yapmalısınız. Lütfen ayarların kontrol edin.',
      'cms_link' => 'Anasayfaya dön',
    ],
  ],
  'partial' => [
    'not_found_name' => '\':name\' bölümü bulunamadı.',
  ],
  'account' => [
    'signed_in_as' => ':full_name olarak giriş yapıldı',
    'sign_out' => 'Çıkış',
    'login_placeholder' => 'kullanıcı adı',
    'password_placeholder' => 'şifre',
    'enter_email' => 'Email adresinizi girin',
    'email_placeholder' => 'email',
    'apply' => 'Onayla',
    'cancel' => 'İptal',
    'delete' => 'Sil',
    'ok' => 'Tamam',
  ],
  'dashboard' => [
    'menu_label' => 'Anasayfa',
    'widget_label' => 'Eklenti',
    'widget_width' => 'Genişlik',
    'full_width' => 'tam genişlik',
    'manage_widgets' => 'Eklentileri yönet',
    'add_widget' => 'Eklenti ekle',
    'widget_inspector_title' => 'Eklenti ayarları',
    'widget_inspector_description' => 'Eklentinin ayarlarını düzenleyin',
    'widget_columns_label' => 'Genişlik :columns',
    'widget_columns_description' => 'Eklenti genişliği, 1 ile 10 arasında bir sayı.',
    'widget_columns_error' => 'Lütfen eklenti genişliğini 1 ile 10 arasında girin.',
    'columns' => '{1} sütun|[2,Inf] sütun',
    'widget_new_row_label' => 'Yeni satıra zorla',
    'widget_new_row_description' => 'Eklentiyi yeni satıra indir.',
    'widget_title_label' => 'Eklenti başlığı',
    'widget_title_error' => 'Eklenti Başlığı gerekli.',
    'reset_layout' => 'Şablonu sıfırla',
    'reset_layout_confirm' => 'Şablonu özgün haline döndermek istediğinize emin misiniz?',
    'reset_layout_success' => 'Şablonu sıfırlandı',
    'make_default' => 'Öntanımlı yap',
    'make_default_confirm' => 'Şuan kullanılan şablonu öntanımlı yapmak istediğinize emin misiniz?',
    'make_default_success' => 'Geçerli şablon öntanımlı olarak ayarlandı',
    'collapse_all' => 'Tümünü daralt',
    'expand_all' => 'Tümünü genişlet',
    'status' => [
      'widget_title_default' => 'Sistem durumu',
      'update_available' => '{0} güncelleme var!|{1} güncelleme var!|[2,Inf] güncelleme var!',
      'updates_pending' => 'Bekleyen güncelleme var',
      'updates_nil' => 'Sistem güncel',
      'updates_link' => 'Güncelle',
      'warnings_pending' => 'İncelemeniz gereken değişiklikler var',
      'warnings_nil' => 'Gösterilecek uyarı yok',
      'warnings_link' => 'Göster',
      'core_build' => 'Altyapı sürümü',
      'event_log' => 'Olay günlüğü',
      'request_log' => 'Hatalı istek günlüğü',
      'app_birthday' => 'İlk aktiflik tarihi',
    ],
    'welcome' => [
      'widget_title_default' => 'Hoşgeldiniz',
      'welcome_back_name' => ':app yönetim paneline tekrar hoşgeldiniz Sayın :name.',
      'welcome_to_name' => ':app yönetim paneline hoşgeldiniz Sayın :name.',
      'first_sign_in' => 'Bu sizin ilk ziyaretiniz.',
      'last_sign_in' => 'En yakın giriş yaptığınız tarih',
      'view_access_logs' => 'Erişim günlüğüne göz at',
      'nice_message' => 'İyi çalışmalar dileriz!',
    ],
  ],
  'user' => [
    'name' => 'Yönetici',
    'menu_label' => 'Yöneticiler',
    'menu_description' => 'Yönetim paneli gruplarını, kullanıcılarını ve izinlerini yönetin.',
    'list_title' => 'Yöneticileri Yönet',
    'new' => 'Yeni Yönetici',
    'login' => 'Kullanıcı Adı',
    'first_name' => 'İsim',
    'last_name' => 'Soyisim',
    'full_name' => 'Tam Adı',
    'email' => 'Email',
    'role_field' => 'Roller',
    'role_comment' => 'Roller kullanıcı izinlerini tanımlar. Bu roller, izinler sekmesinden kullanıcı düzeyinde değiştirilebilir.',
    'groups' => 'Gruplar',
    'groups_comment' => 'Kullanıcının hangi gruba bağlı olduğunu belirleyin.',
    'avatar' => 'Avatar',
    'password' => 'Şifre',
    'password_confirmation' => 'Şifre (Tekrar)',
    'permissions' => 'İzinler',
    'account' => 'Hesap',
    'superuser' => 'Süper Kullanıcı',
    'superuser_comment' => 'Kullanıcıya her alanda yetki vermek için burayı işaretleyin.',
    'send_invite' => 'Email ile davet gönder',
    'send_invite_comment' => 'Kullanıcının email adresine davet göndermek için burayı işaretleyin',
    'delete_confirm' => 'Bu yöneticiyi silmek istiyor musunuz?',
    'return' => 'Yöneticiler listesine dön',
    'allow' => 'Yetki Var',
    'inherit' => 'Grup Yetkisi',
    'deny' => 'Yetki Yok',
    'activated' => 'Aktifleştirildi',
    'last_login' => 'Son giriş',
    'created_at' => 'Oluşturulma',
    'updated_at' => 'Güncellenme',
    'deleted_at' => 'Silinme',
    'show_deleted' => 'Silinenleri göster',
    'group' => [
      'name' => 'Grup',
      'name_comment' => 'Grup ismi, grup listesinde Yönetici Ekleme/Düzenleme formunda görüntülenecek.',
      'name_field' => 'Adı',
      'description_field' => 'Açıklama',
      'is_new_user_default_field_label' => 'Öntanımlı grup',
      'is_new_user_default_field_comment' => 'Yeni eklenen yöneticileri bu gruba dahil et',
      'code_field' => 'Grup kodu',
      'code_comment' => 'Grup kodunu yazın',
      'menu_label' => 'Gruplar',
      'list_title' => 'Grupları Yönet',
      'new' => 'Yeni Yönetici Grubu',
      'delete_confirm' => 'Bu yönetici grubunu silmek istiyor musunuz?',
      'return' => 'Grup listesine dön',
      'users_count' => 'Kişiler',
    ],
    'role' => [
      'name' => 'Rol',
      'name_field' => 'İsim',
      'name_comment' => 'Rol ismi, Yönetici formundaki rol listesinde görüntülenir.',
      'description_field' => 'Açıklama',
      'code_field' => 'Kod',
      'code_comment' => 'API ile rol nesnesine erişmek istiyorsanız, eşsiz bir kod girin.',
      'menu_label' => 'Rolleri Yönet',
      'list_title' => 'Rolleri Yönet',
      'new' => 'Yeni Rol',
      'delete_confirm' => 'Bu yönetici rolü silinsin mi?',
      'return' => 'Rol listesine dön',
      'users_count' => 'Kişiler',
    ],
    'preferences' => [
      'not_authenticated' => 'Ayarları görüntülemek veya düzenlemek için yetkili bir kullanıcı yok.',
    ],
    'trashed_hint_title' => 'Bu hesap silindi',
    'trashed_hint_desc' => 'Bu hesap silindi ve oturum açılamadı. Tekrar aktifleştirmek için sağ alt kısımdaki kullanıcıyı aktifleştir simgesine tıklayın.',
  ],
  'list' => [
    'default_title' => 'Liste',
    'search_prompt' => 'Arama...',
    'no_records' => 'Bu alan için görüntülenecek kayıt yok.',
    'missing_model' => ':class da kullanılan liste için model değeri tanımlanmamış.',
    'missing_column' => ':columns için sütun değeri tanımlanmamış.',
    'missing_columns' => ':class da kullanılan liste için sütun değeri tanımlanmamış.',
    'missing_definition' => 'Liste \':field\' için bir sütun değeri içermiyor.',
    'missing_parent_definition' => 'Liste davranışı \':definition\' tanımlaması için tanımlama bilgisi içermiyor.',
    'behavior_not_ready' => 'Liste oluşturulamadı, controller da makeLists() metodunu kontrol edin.',
    'invalid_column_datetime' => '\':column\' için sütun değeri DateTime nesnesi değil, Model kısmında $dates referansını unutmuş olabilir misiniz?',
    'pagination' => 'Gösterilen kayıtlar: :from-:to Toplam: :total',
    'first_page' => 'İlk sayfa',
    'last_page' => 'Son sayfa',
    'prev_page' => 'Önceki sayfa',
    'next_page' => 'Sonraki sayfa',
    'refresh' => 'Yenile',
    'updating' => 'Güncelleniyor...',
    'loading' => 'Yükleniyor...',
    'setup_title' => 'Liste Ayarları',
    'setup_help' => 'Listede görmek istediğiniz sütunları seçmek için onay kutularını kullanın. Sütunları yukarı veya aşağı sürükleyerek konumlarını değiştirebilirsiniz.',
    'records_per_page' => 'Sayfa başına kayıt sayısı',
    'records_per_page_help' => 'Sayfa başına görüntülenecek kayıt sayısını seçin. Tek sayfada yüksek miktarda kayıt görüntülemek sistem performansını azaltabilir.',
    'check' => 'Kontrol et',
    'delete_selected' => 'Seçili olanı sil',
    'delete_selected_empty' => 'Silinecek seçili kayıt bulunamadı.',
    'delete_selected_confirm' => 'Seçili kayıtları silmek istediğize emin misiniz?',
    'delete_selected_success' => 'Seçili kayıtlar başarıyla silindi.',
    'column_switch_true' => 'Evet',
    'column_switch_false' => 'Hayır',
  ],
  'fileupload' => [
    'attachment' => 'Dosya Eki',
    'help' => 'Bu ek için bir başlık ve tanım girin.',
    'title_label' => 'Başlık',
    'description_label' => 'Tanım',
    'default_prompt' => '%s e tıkla ya da bir dosya sürükleyin',
    'attachment_url' => 'Ek URLsi',
    'upload_file' => 'Dosya yükle',
    'upload_error' => 'Dosya yükleme hatası',
    'remove_confirm' => 'Emin misiniz?',
    'remove_file' => 'Dosyayı sil',
  ],
  'repeater' => [
    'min_items_failed' => ':name için en az :min nesne gerekli, sadece :items nesne tanımlandı',
    'max_items_failed' => ':name için en fazla :max nesne tanımlanabilir, :items nesne tanımlandı',
  ],
  'form' => [
    'create_title' => ':name Oluştur',
    'update_title' => ':name Düzenle',
    'preview_title' => ':name Görüntüle',
    'create_success' => ':name başarıyla oluşturuldu',
    'update_success' => ':name başarıyla güncellendi',
    'delete_success' => ':name başarıyla silindi',
    'restore_success' => ':name geri yüklendi',
    'reset_success' => 'Sıfırlama başarılı',
    'missing_id' => 'Form kayıt ID\'si belirtilmedi.',
    'missing_model' => ':class da kullanılan form için model değeri tanımlanmamış.',
    'missing_definition' => 'Form \':field\' için bir sütun değeri içermiyor.',
    'not_found' => 'ID\'si :id olan Form bulunamadı.',
    'action_confirm' => 'Emin misiniz?',
    'create' => 'Oluştur',
    'create_and_close' => 'Oluştur ve Kapat',
    'creating' => 'Oluşturuluyor...',
    'creating_name' => 'Oluşturuluyor :name...',
    'save' => 'Kaydet',
    'save_and_close' => 'Kaydet ve Kapat',
    'saving' => 'Kaydediliyor...',
    'saving_name' => 'Kaydediliyor :name...',
    'delete' => 'Sil',
    'deleting' => 'Siliniyor...',
    'confirm_delete' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'confirm_delete_multiple' => 'Seçilen kayıtları silmek istediğinize emin misiniz?',
    'deleting_name' => 'Siliniyor :name...',
    'restore' => 'Geri yükle',
    'restoring' => 'Geri yükleniyor',
    'confirm_restore' => 'Bu kaydı geri yüklemek istediğinize emin misiniz?',
    'reset_default' => 'Ön Tanımlı Ayarlara Dön!',
    'resetting' => 'İşleniyor',
    'resetting_name' => ':name İşleniyor',
    'undefined_tab' => 'Çeşitli',
    'field_off' => 'Kapalı',
    'field_on' => 'Açık',
    'add' => 'Ekle',
    'apply' => 'Uygula',
    'cancel' => 'İptal',
    'close' => 'Kapat',
    'confirm' => 'Onayla',
    'reload' => 'Yenile',
    'complete' => 'Tamamla',
    'ok' => 'Tamam',
    'or' => 'veya',
    'confirm_tab_close' => 'Bu sekmeyi kapatmak istediğinize emin misiniz? Kaydedilmemiş değişiklikleri kaybedeceksiniz.',
    'behavior_not_ready' => 'Form oluşturulamadı, controller da initForm() metodunu kontrol edin.',
    'preview_no_files_message' => 'Dosyalar yüklenmedi',
    'preview_no_media_message' => 'Seçilmiş medya yok.',
    'preview_no_record_message' => 'Seçili kayıt yok.',
    'select' => 'Seç',
    'select_all' => 'hepsini seç',
    'select_none' => 'hiçbir şey seçilmedi',
    'select_placeholder' => 'lütfen seçin',
    'insert_row' => 'Kayıt Ekle',
    'insert_row_below' => 'Alt Satıra Kayıt Ekle',
    'delete_row' => 'Kayıt Sil',
    'concurrency_file_changed_title' => 'Dosya değiştirildi',
    'concurrency_file_changed_description' => 'Düzenlemeye çalıştığınız dosya disk üzerinde başka bir kullanıcı tarafından değiştirilmiş. Dosyayı yeniden yükleyebilir ve değişiklikleri kaybedersiniz ya da diskteki dosyayı kendi düzenlediğiniz hali ile değiştirebilirsiniz.',
    'return_to_list' => 'Listeye dön',
  ],
  'recordfinder' => [
    'find_record' => 'Kayıt Bul',
    'cancel' => 'İptal',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'İlişki \':config\' için bir yapılandırma ayarı içermiyor.',
    'missing_definition' => 'İlişki \':field\' için bir sütun değeri içermiyor.',
    'missing_model' => ':class da kullanılan ilişki için model değeri tanımlanmamış.',
    'invalid_action_single' => 'Bu işlem tekli ilişkilendirme için kullanılamaz.',
    'invalid_action_multi' => 'Bu işlem çoklu ilişkilendirme için kullanılamaz.',
    'help' => 'Eklemek için bir öğeye tıklayın',
    'related_data' => 'İlişkili veri :name',
    'add' => 'Ekle',
    'add_selected' => 'Seçilenleri ekle',
    'add_a_new' => 'Yeni bir :name ekle',
    'link_selected' => 'Seçileni bağla',
    'link_a_new' => 'Yeni bir :name bağla',
    'cancel' => 'İptal',
    'close' => 'Kapat',
    'add_name' => ':name Ekle',
    'create' => 'Oluştur',
    'create_name' => ':name Oluştur',
    'update' => 'Güncelle',
    'update_name' => ':name Güncelle',
    'preview' => 'Önizle',
    'preview_name' => ':name Önizle',
    'remove' => 'Kaldır',
    'remove_name' => ':name Kaldır',
    'delete' => 'Sil',
    'delete_name' => ':name Sil',
    'delete_confirm' => 'Emin misiniz?',
    'link' => 'Bağla',
    'link_name' => ':name bağla',
    'unlink' => 'Bağlamayı kaldır',
    'unlink_name' => ':name bağlamasını kaldır',
    'unlink_confirm' => 'Emin misiniz?',
  ],
  'reorder' => [
    'default_title' => 'Kayıtları yeniden sırala',
    'no_records' => 'Sıralamak için bir kayıt bulunamadı.',
  ],
  'model' => [
    'name' => 'Model',
    'not_found' => 'ID\'si :id olan \':class\' Model bulunamadı.',
    'missing_id' => 'Aranılan model için ID belirtilmedi.',
    'missing_relation' => '\':class\' Model\'i \':relation\' ilişkisi için tanımlanmamış.',
    'missing_method' => '\':class\' Model\'i \':method\' isimli bir metod içermiyor.',
    'invalid_class' => ':class da tanımlanan :model Model\'i geçerli değil, \\Model sınıfını extend almalı.',
    'mass_assignment_failed' => '\':attribute\' Model değeri için toplu atama başarısız.',
  ],
  'warnings' => [
    'tips' => 'Sistem ayar ipuçları',
    'tips_description' => 'Sistemin düzgün çalışabilmesi için dikkat etmeniz gereken sorunlar var.',
    'permissions' => ':name dizini ve alt dizinleri PHP tarafından yazılabilir değil. Lütfen bu dizindeki webserver için gerekli yazma izinlerini verin.',
    'extension' => ':name PHP eklentisi sistemde yüklü değil. Lütfen kütüphaneyi kurun ve eklentiyi aktifleştirin.',
    'plugin_missing' => ':name isimli eklenti gerekli, fakat yüklenmemiş. Lütfen bu eklentiyi yükleyin.',
  ],
  'editor' => [
    'menu_label' => 'Editör ayarları',
    'menu_description' => 'Metin editörü ayarlarını düzenleyebilirsiniz.',
    'font_size' => 'Font büyüklüğü',
    'tab_size' => 'Tab genişliği',
    'use_hard_tabs' => 'Tab girintisi',
    'code_folding' => 'Kod katlama (Alt satıra inme)',
    'code_folding_begin' => 'Başlangıcı işaretle',
    'code_folding_begin_end' => 'Başlangıcı ve sonu işaretle',
    'autocompletion' => 'Otomatik kod tamamlama',
    'word_wrap' => 'Uzun kelimeleri yeni satırda göster',
    'highlight_active_line' => 'Aktif satırı vurgula',
    'auto_closing' => 'Etiketleri ve özel karakterleri otomatik kapat',
    'show_invisibles' => 'Gizli karakterleri göster',
    'show_gutter' => 'Satır numarasını göster',
    'basic_autocompletion' => 'Otomatik tamamlama (Temel) (Ctrl + Boşluk)',
    'live_autocompletion' => 'Anlık Otomatik tamamlama',
    'enable_snippets' => 'Kod snippetlerini aktifleştir (Tab)',
    'display_indent_guides' => 'İçeri girintileri göster',
    'show_print_margin' => 'Yazdırma boşluklarını göster',
    'mode_off' => 'Kapalı',
    'mode_fluid' => 'Akışkan',
    '40_characters' => '40 Karakter',
    '80_characters' => '80 Karakter',
    'theme' => 'Renk şeması',
    'markup_styles' => 'Markup Stilleri',
    'custom_styles' => 'Özel CSS',
    'custom styles_comment' => 'HTML editöre uygulanacak özel stiller.',
    'markup_classes' => 'Markup Classlar',
    'paragraph' => 'Paragraf',
    'link' => 'Link',
    'table' => 'Tablo',
    'table_cell' => 'Tablo Hücresi',
    'image' => 'Resim',
    'label' => 'Etiket',
    'class_name' => 'Class ismi',
    'markup_tags' => 'Markup Tagları',
    'allowed_empty_tags' => 'İzin verilen boş taglar',
    'allowed_empty_tags_comment' => 'İçeriği olmasada kaydederken silinmeyen, bulunmasına izin verilen taglar.',
    'allowed_tags' => 'İzin verilen taglar',
    'allowed_tags_comment' => 'İzin verilen taglar listesi.',
    'no_wrap' => 'Tagları sarmalama',
    'no_wrap_comment' => 'Tag blokları içinde sarmalanmayacak taglar listesi.',
    'remove_tags' => 'Silinecek taglar',
    'remove_tags_comment' => 'İçeriği ile birlikte silinecek taglar listesi.',
    'line_breaker_tags' => 'Satır atlatma etiketleri',
    'line_breaker_tags_comment' => 'Aralarına bir satır atlatma öğesi yerleştirmek için kullanılan etiketlerin listesi.',
    'toolbar_buttons' => 'Araç Çubuğu Düğmeleri',
    'toolbar_buttons_comment' => 'Rich Editor\'de varsayılan olarak görüntülenecek Araç Çubuğu düğmeleri.',
  ],
  'tooltips' => [
    'preview_website' => 'Websiteyi Önizle',
  ],
  'mysettings' => [
    'menu_label' => 'Ayarlarım',
    'menu_description' => 'Yönetim hesabı ile ilgili ayarlar',
  ],
  'myaccount' => [
    'menu_label' => 'Kişisel Bilgilerim',
    'menu_description' => 'Hesabınızın ismi, email adresi ve şifresi gibi bilgilerini düzenleyebilirsiniz.',
    'menu_keywords' => 'güvenli oturum açma',
  ],
  'branding' => [
    'menu_label' => 'Yönetim paneli ayarlarını düzenle',
    'menu_description' => 'Yönetim Panelinin isim, renk şeması ve logo gibi ayarlarını düzenleyin.',
    'brand' => 'Marka',
    'logo' => 'Logo',
    'logo_description' => 'Yönetim Panelinde kullanılacak logoyu yükleyin.',
    'app_name' => 'Site Adı',
    'app_name_description' => 'Bu isim, Yönetim Panelinde başlık olarak kullanılacaktır.',
    'app_tagline' => 'Site Mottosu',
    'app_tagline_description' => 'Bu motto Yönetim Paneli giriş ekranında görüntülenecektir.',
    'colors' => 'Renkler',
    'primary_color' => 'Ana Renk color',
    'secondary_color' => 'İkincil Renk color',
    'accent_color' => 'Accent color',
    'styles' => 'Stiller',
    'custom_stylesheet' => 'Özel stil - CSS',
    'navigation' => 'Navigsyon',
    'menu_mode' => 'Menü stili',
    'menu_mode_inline' => 'Sıralı',
    'menu_mode_tile' => 'Mozaik',
    'menu_mode_collapsed' => 'Katlanmış',
  ],
  'backend_preferences' => [
    'menu_label' => 'Panel Ayarları',
    'menu_description' => 'Hesabınızın tercih edilen dil ayarını değiştirebilirsiniz.',
    'region' => 'Bölge',
    'code_editor' => 'Kod editörü',
    'timezone' => 'Zaman Dilimi',
    'timezone_comment' => 'Tarihleri bu zaman dilimine göre göster.',
    'locale' => 'Dil',
    'locale_comment' => 'Yönetim Paneli dil seçiminizi belirleyin.',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'tümü',
    'options_method_not_exists' => ':model modelinde :method() metodu bulunmalı ve \':filter\' filtresi için uygun seçenekleri döndermelidir.',
    'date_all' => 'tüm periyotlar',
    'number_all' => 'Tüm numaralar',
  ],
  'import_export' => [
    'row' => 'Satır :row',
    'show_ignored_columns' => 'Göz ardı edilen sütunları göster',
    'auto_match_columns' => 'Sütunları otomatik eşleştir',
    'created' => 'Oluşturulma',
    'updated' => 'Güncellenme',
    'skipped' => 'Atlandı',
    'warnings' => 'Uyarılar',
    'errors' => 'Hatalar',
    'skipped_rows' => 'Atlanan Satırlar',
    'upload_valid_csv' => 'Lütfen geçerli bir CSV dosyası seçin.',
    'drop_column_here' => 'Sütunu buraya bırakın...',
    'ignore_this_column' => 'Bu sütunu göz ardı et',
    'processing_successful_line1' => 'Dosya dışarı aktarma işlemi başarıyla tamamlandı!',
    'processing_successful_line2' => 'Tarayıcınız dosyayı otomatik olarak indirecektir',
    'export_error' => 'Dışarı aktarma hatası',
    'file_not_found_error' => 'Dosya bulunamadı',
    'empty_error' => 'Dışarı aktarılacak veri bulunamadı',
    'empty_import_columns_error' => 'Lütfen içeri aktarılacak veri sütunlarını seçin.',
    'match_some_column_error' => 'Önce sütunları eşleştirin.',
    'required_match_column_error' => 'Gerekli alan olan :label için bir eşleştirme yapın.',
    'empty_export_columns_error' => 'Lütfen dışarı aktarılacak veri sütunlarını seçin.',
    'behavior_missing_uselist_error' => 'ListController davranışını "useList" seçeneği aktif olacak şekilde sistem altyapısında Controller kısmında aktifleştirmelisiniz.',
    'missing_model_class_error' => ':type tipi için modelClass özelliği tanımlamalısınız',
    'missing_column_id_error' => 'Sütun tnaımlayıcı eksik',
    'unknown_column_error' => 'Tanımlanamayan sütun',
    'encoding_not_supported_error' => 'Kaynak dosyanın karakter kodlaması tanımlanamadı. Lütfen düzgün bir dosyayı özel dosya formatı seçeneğini seçerek içeri aktarmayı deneyin.',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Batı Avrupa)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Merkez Avrupa)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, Güney Avrupa)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, Kuzey Avrupa)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Kril)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arapça)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Yunanca)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, İbranice)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Türkçe)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Norveççe)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai Dili)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltık Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic Dili)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Euro işareti revizyonlu Batı Avrupa)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Medyaları düzenleyebilsin',
  ],
  'mediafinder' => [
    'label' => 'Medya Bulucu',
    'default_prompt' => 'Bir medya öğesi bulmak için %s butonuna tıklayın',
  ],
  'media' => [
    'menu_label' => 'Medya',
    'upload' => 'Yükle',
    'move' => 'Taşı',
    'delete' => 'Sil',
    'add_folder' => 'Yeni Klasör',
    'search' => 'Ara',
    'display' => 'Görüntüle',
    'filter_everything' => 'Her şey',
    'filter_images' => 'Resimler',
    'filter_video' => 'Video',
    'filter_audio' => 'Ses',
    'filter_documents' => 'Belgeler',
    'library' => 'Kütüphane',
    'size' => 'Boyut',
    'title' => 'Başlık',
    'last_modified' => 'Son düzenleme tarihi',
    'public_url' => 'Public URL',
    'click_here' => 'Buraya tıkla',
    'thumbnail_error' => 'Önizleme oluşturulurken hata.',
    'return_to_parent' => 'Ana klasöre geri dön',
    'return_to_parent_label' => 'Yukarı git..',
    'nothing_selected' => 'Hiçbir şey seçilmedi.',
    'multiple_selected' => 'Birden fazla öğe seçildi.',
    'uploading_file_num' => ':number adet dosya yükleniyor...',
    'uploading_complete' => 'Yükleme tamamlandı',
    'uploading_error' => 'Yükleme hatası',
    'type_blocked' => 'Seçilen dosya türünü güvenlik nedenleriyle izin verilmiyor.',
    'order_by' => 'Sırala',
    'direction' => 'Yön',
    'direction_asc' => 'Artan',
    'direction_desc' => 'Azalan',
    'folder' => 'Klasör',
    'no_files_found' => 'İsteğiniz doğrultusunda hiçbir dosya bulunamadı.',
    'delete_empty' => 'Lütfen silinecek öğeleri seçiniz.',
    'delete_confirm' => 'Bu öğe veya öğeleri gerçekten silmek istediğinize emin misiniz?',
    'error_renaming_file' => 'Öğeyi yeniden isimlendirirken hata.',
    'new_folder_title' => 'Yeni Klasör',
    'folder_name' => 'Klasör ismi',
    'error_creating_folder' => 'Klasör oluştururken hata',
    'folder_or_file_exist' => 'Belirtilen isimde bir klasör ya da dosya zaten mevcut.',
    'move_empty' => 'Lütfen taşınacak öğeleri seçiniz.',
    'move_popup_title' => 'Dosyaları veya klasörleri taşı',
    'move_destination' => 'Hedef klasör',
    'please_select_move_dest' => 'Lütfen hedef klasörü seçiniz.',
    'move_dest_src_match' => 'Lütfen başka bir hedef klasör seçiniz.',
    'empty_library' => 'Medya kütüphanesi boş. Başlamak için dosya yükleyin yada klasör oluşturun.',
    'insert' => 'Ekle',
    'crop_and_insert' => 'Kırp ve Ekle',
    'select_single_image' => 'Lütfen sadece bir tane resim seçiniz.',
    'selection_not_image' => 'Seçili öğe bir resim değil.',
    'restore' => 'Tüm değişiklikleri geri al',
    'resize' => 'Yeniden boyutlandırma...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Sabit oran',
    'selection_mode_fixed_size' => 'Sabit boyut',
    'height' => 'Yükseklik',
    'width' => 'Genişlik',
    'selection_mode' => 'Seçim modu',
    'resize_image' => 'Resimi yeniden boyutlandırs',
    'image_size' => 'Resim boyutu:',
    'selected_size' => 'Seçili:',
  ],
];
