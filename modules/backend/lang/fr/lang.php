<?php return [
  'auth' => [
    'title' => 'Zone d’administration',
    'invalid_login' => 'L\'utilisateur saisi ne correspond à aucun utilisateur enregistré. Merci de vérifier votre saisie et de réessayer.',
  ],
  'field' => [
    'invalid_type' => 'Type de champ invalide :type.',
    'options_method_invalid_model' => 'L’attribut \':field\' ne correspond à aucun modèle valide. Essayez de spécifier explicitement la méthode d’options pour la classe du modèle \':model\'.',
    'options_method_not_exists' => 'La classe du modèle :model doit définir une méthode :method() renvoyant des options pour le champ ":field" du formulaire.',
    'colors_method_not_exists' => 'La classe du modèle :model doit définir une méthode :method() renvoyant le code html en hexadécimal de la couleur du champ \':field\' du formulaire.',
  ],
  'widget' => [
    'not_registered' => 'Aucun widget au nom de classe ":name" n’a été enregistré',
    'not_bound' => 'Un widget au nom de classe ":name" n’a pas été lié au contrôleur',
  ],
  'page' => [
    'untitled' => 'Sans titre',
    'access_denied' => [
      'label' => 'Accès refusé',
      'help' => 'Vous n’êtes pas autorisé à consulter cette page.',
      'cms_link' => 'Retour à l’interface d’administration',
    ],
    'no_database' => [
      'label' => 'Base de données introuvable',
      'help' => 'Une base de données est requise pour l’accès à l’interface d’administration. Veuillez vérifier que la base de données existe et que les migrations ont été effectuées avant de ré-essayer.',
      'cms_link' => 'Retour à l’accueil',
    ],
  ],
  'partial' => [
    'not_found_name' => 'Le modèle partiel ":name" est introuvable.',
  ],
  'account' => [
    'signed_in_as' => 'Connecté en tant que :full_name',
    'sign_out' => 'Déconnexion',
    'login' => 'OK',
    'reset' => 'Réinitialiser',
    'restore' => 'Restaurer',
    'login_placeholder' => 'identifiant',
    'password_placeholder' => 'mot de passe',
    'remember_me' => 'Rester connecté',
    'forgot_password' => 'Mot de passe oublié ?',
    'enter_email' => 'Saisir votre adresse e-mail',
    'enter_login' => 'Saisir votre identifiant',
    'email_placeholder' => 'adresse e-mail',
    'enter_new_password' => 'Saisir votre nouveau mot de passe',
    'password_reset' => 'Réinitialiser le mot de passe',
    'restore_success' => 'Un e-mail contenant les instructions a été envoyé à l’adresse e-mail de votre compte.',
    'restore_error' => 'L’identifiant ":login" ne correspond à aucun utilisateur',
    'reset_success' => 'Mot de passe réinitialisé avec succès. Vous pouvez maintenant vous connecter.',
    'reset_error' => 'Données de réinitialisation du mot de passe invalides. Veuillez réessayer !',
    'reset_fail' => 'Réinitialisation du mot de passe impossible !',
    'apply' => 'Appliquer',
    'cancel' => 'Annuler',
    'delete' => 'Supprimer',
    'ok' => 'OK',
  ],
  'dashboard' => [
    'menu_label' => 'Tableau de bord',
    'widget_label' => 'Widget',
    'widget_width' => 'Taille',
    'full_width' => 'Plein écran',
    'manage_widgets' => 'Gestion des Widgets',
    'add_widget' => 'Ajouter un Widget',
    'widget_inspector_title' => 'Configuration du Widget',
    'widget_inspector_description' => 'Configurer le Widget',
    'widget_columns_label' => 'Largeur en nombre de colonnes :columns',
    'widget_columns_description' => 'La largeur du Widget doit être comprise entre 1 et 10.',
    'widget_columns_error' => 'Veuillez définir la largeur du Widget avec un nombre compris entre 1 et 10.',
    'columns' => '{1} colonne|[2,Inf] colonnes',
    'widget_new_row_label' => 'Forcer l’affichage sur une nouvelle ligne',
    'widget_new_row_description' => 'Placer le Widget sur une nouvelle ligne.',
    'widget_title_label' => 'Titre du Widget',
    'widget_title_error' => 'Le titre du Widget est obligatoire.',
    'reset_layout' => 'Réinitialisation de la maquette',
    'reset_layout_confirm' => 'Réinitialisation vers la maquette par défaut ?',
    'reset_layout_success' => 'La maquette a été réinitialisée',
    'make_default' => 'Par défaut',
    'make_default_confirm' => 'Définir la maquette actuelle comme celle par défaut ?',
    'make_default_success' => 'La maquette actuelle est définie comme celle par défaut',
    'collapse_all' => 'Réduire tout',
    'expand_all' => 'Développer tout',
    'status' => [
      'widget_title_default' => 'État du système',
      'update_available' => '{0} mise à jour disponible !|{1} mise à jour disponible !|[2,Inf] mises à jour disponibles !',
      'updates_pending' => 'Mises à jour du logiciel en attente',
      'updates_nil' => 'Le logiciel est à jour',
      'updates_link' => 'Mettre à jour',
      'warnings_pending' => 'Certaines anomalies méritent votre attention',
      'warnings_nil' => 'Aucun avertissement à afficher',
      'warnings_link' => 'Voir',
      'core_build' => 'Version du système',
      'event_log' => 'Journal des évènements',
      'request_log' => 'Journal des requêtes',
      'app_birthday' => 'En ligne depuis',
    ],
    'welcome' => [
      'widget_title_default' => 'Bienvenue',
      'welcome_back_name' => 'Bienvenue sur :app, :name.',
      'welcome_to_name' => 'Bienvenue sur :app, :name.',
      'first_sign_in' => 'C’est la première fois que vous vous connectez.',
      'last_sign_in' => 'Votre dernière connexion remonte au',
      'view_access_logs' => 'Consulter le journal des accès',
      'nice_message' => 'Passez une agréable journée !',
    ],
  ],
  'user' => [
    'name' => 'Administrateur',
    'menu_label' => 'Administrateurs',
    'menu_description' => 'Gérer les utilisateurs, les groupes et les permissions de l’interface d’administration.',
    'list_title' => 'Gérer les administrateurs',
    'new' => 'Créer un nouvel administrateur',
    'login' => 'Identifiant',
    'first_name' => 'Prénom',
    'last_name' => 'Nom',
    'full_name' => 'Nom complet',
    'email' => 'Adresse e-mail',
    'role_field' => 'Rôle',
    'role_comment' => 'Les rôles définissent les permissions de l\'utilisateur, elles peuvent être écrasés au niveau de l\'utilisateur dans l\'onglet "Permissions".',
    'groups' => 'Groupes',
    'groups_comment' => 'Préciser les groupes auxquels ce compte doit appartenir.',
    'avatar' => 'Avatar',
    'password' => 'Mot de passe',
    'password_confirmation' => 'Confirmer le mot de passe',
    'permissions' => 'Permissions',
    'account' => 'Compte',
    'superuser' => 'Super utilisateur',
    'superuser_comment' => 'Donner à ce compte un niveau d’accès illimité à toutes les sections du système. Les super-utilisateurs peuvent ajouter et gérer les autres utilisateurs. ',
    'send_invite' => 'Envoyer une invitation par e-mail',
    'send_invite_comment' => 'Envoyer une invitation aux utilisateurs par e-mail contenant l’identifiant et le mot de passe.',
    'delete_confirm' => 'Supprimer cet administrateur ?',
    'return' => 'Retour à la liste des administrateurs',
    'allow' => 'Autoriser',
    'inherit' => 'Hériter',
    'deny' => 'Interdire',
    'activated' => 'Activé',
    'last_login' => 'Dernière connexion',
    'created_at' => 'Créé le',
    'updated_at' => 'Mis à jour le',
    'deleted_at' => 'Supprimé le',
    'show_deleted' => 'Afficher les supprimés',
    'group' => [
      'name' => 'Groupe',
      'name_comment' => 'Le nom est affiché dans la liste des groupes dans le formulaire de création/modification des administrateurs.',
      'name_field' => 'Nom',
      'description_field' => 'Description',
      'is_new_user_default_field_label' => 'Groupe par défaut',
      'is_new_user_default_field_comment' => 'Ajouter les nouveaux administrateurs dans ce groupe par défaut.',
      'code_field' => 'Code',
      'code_comment' => 'Saisir un code d’accès unique si vous souhaitez accéder à ce groupe via l’API.',
      'menu_label' => 'Groupes',
      'list_title' => 'Gérer les groupes',
      'new' => 'Ajouter un groupe d’administrateur',
      'delete_confirm' => 'Supprimer ce groupe d’administrateurs ?',
      'return' => 'Retour à la liste des groupes',
      'users_count' => 'Utilisateurs',
    ],
    'role' => [
      'name' => 'Rôle',
      'name_field' => 'Nom',
      'name_comment' => 'Le nom est affiché dans la liste des rôles du formulaire de gestion des Administrateurs.',
      'description_field' => 'Description',
      'code_field' => 'Code',
      'code_comment' => 'Saisir un code d’accès unique si vous souhaitez accéder à ce rôle via l’API.',
      'menu_label' => 'Gérer les rôles',
      'list_title' => 'Gérer les rôles',
      'new' => 'Nouveau rôle',
      'delete_confirm' => 'Supprimer le rôle administrateur ?',
      'return' => 'Retourner à la liste des rôles',
      'users_count' => 'Utilisateurs',
    ],
    'preferences' => [
      'not_authenticated' => 'Il n’y a aucun utilisateur authentifié pour lequel il est possible de charger ou modifier les préférences.',
    ],
    'trashed_hint_title' => 'Ce compte a été supprimé',
    'trashed_hint_desc' => 'Ce compte a été supprimé et il sera impossible de se connecter avec. Pour le récupérer, cliquez sur l\'icône "Utilisateur" en bas à droite.',
  ],
  'list' => [
    'default_title' => 'Liste',
    'search_prompt' => 'Rechercher…',
    'no_records' => 'Il n’y a aucun résultat dans cette vue.',
    'missing_model' => 'La liste utilisée dans la classe :class n’a pas de modèle défini.',
    'missing_column' => 'Il n’y a pas de définition pour la colonne :columns.',
    'missing_columns' => 'La liste utilisée dans la classe :class n’a pas de colonne de liste définie.',
    'missing_definition' => 'La liste utilisée ne contient de pas de colonne pour le champ ":field".',
    'missing_parent_definition' => 'Le behavior List ne contient pas de définition pour \':definition\'.',
    'behavior_not_ready' => 'La liste utilisée n’a pas été initialisée, vérifier que la méthode d’appel de makeLists() a été soumise au contrôleur.',
    'invalid_column_datetime' => 'La valeur de la colonne ":column" n’est pas un objet DateTime, manque-t-il une référence dans la propriété \\$dates du modèle ?',
    'pagination' => 'Enregistrements affichés : :from-:to sur :total',
    'first_page' => 'Première page',
    'last_page' => 'Dernière page',
    'prev_page' => 'Page précédente',
    'next_page' => 'Page suivante',
    'refresh' => 'Actualiser',
    'updating' => 'Mise à jour…',
    'loading' => 'Chargement…',
    'setup_title' => 'Configuration de la liste',
    'setup_help' => 'Cocher les colonnes qui doivent être affichées dans la liste. Il est possible de modifier l’ordre des colonnes en les glissant vers le haut ou le bas.',
    'records_per_page' => 'Nombre d’enregistrements par page',
    'records_per_page_help' => 'Choisir le nombre d’enregistrements à afficher. Note : un nombre d’enregistrements trop élevé sur une seule page peut réduire les performances.',
    'check' => 'Sélectionner',
    'delete_selected' => 'Supprimer la sélection',
    'delete_selected_empty' => 'Il n’y a aucun enregistrement à supprimer',
    'delete_selected_confirm' => 'Confirmer la suppression des enregistrements sélectionnés ?',
    'delete_selected_success' => 'Les enregistrements ont été supprimés.',
    'column_switch_true' => 'Oui',
    'column_switch_false' => 'Non',
  ],
  'fileupload' => [
    'attachment' => 'Pièce jointe',
    'help' => 'Ajouter un titre et une description pour cette pièce jointe.',
    'title_label' => 'Titre',
    'description_label' => 'Description',
    'default_prompt' => 'Cliquer sur %s ou déposer un fichier ici pour le télécharger',
    'attachment_url' => 'Adresse URL du fichier joint',
    'upload_file' => 'Télécharger le fichier',
    'upload_error' => 'Erreur lors du téléchargement',
    'remove_confirm' => 'Confirmer l’action ?',
    'remove_file' => 'Supprimer le fichier',
  ],
  'repeater' => [
    'min_items_failed' => ':name nécéssite un minimum de :min choix sélectionné, seulement :items sont sélectionné(s)',
    'max_items_failed' => ':name accepte un maximum de :max choix sélectionné, :items sont sélectionés',
  ],
  'form' => [
    'create_title' => 'Créer un(e) :name',
    'update_title' => 'Mise à jour d\'un(e) :name',
    'preview_title' => 'Aperçu d\'un(e) :name',
    'create_success' => ':name créé(e) avec succès',
    'update_success' => ':name modifié(e) avec succès',
    'restore_success' => ':name récuperé avec succès',
    'delete_success' => ':name supprimé(e) avec succès',
    'reset_success' => 'Réinitialisation terminée',
    'missing_id' => 'L’ID de l’enregistrement du formulaire n’est pas précisé.',
    'missing_model' => 'Le behavior formulaire utilisé dans la classe :class n’a pas de modèle défini.',
    'missing_definition' => 'Le behavior formulaire utilisé n’a pas de champ pour ":field".',
    'not_found' => 'Aucun enregistrement de formulaire ne correspond a l’ID :id.',
    'action_confirm' => 'Confirmer l’action ?',
    'create' => 'Créer',
    'create_and_close' => 'Créer et fermer',
    'creating' => 'Création en cours…',
    'creating_name' => 'Création d\'un(e) :name en cours…',
    'save' => 'Enregistrer',
    'save_and_close' => 'Enregistrer et fermer',
    'saving' => 'Enregistrement en cours…',
    'saving_name' => 'Enregistrement d\'un(e) :name en cours…',
    'delete' => 'Supprimer',
    'deleting' => 'Suppression en cours…',
    'confirm_delete' => 'Supprimer cet enregistrement ?',
    'confirm_delete_multiple' => 'Supprimer les enregistrements sélectionnés ?',
    'deleting_name' => 'Suppression d\'un(e) :name en cours…',
    'restore' => 'Récupérer',
    'restoring' => 'Récupération',
    'confirm_restore' => 'Êtes-vous certain de vouloir récupérer cet enregistrement ?',
    'reset_default' => 'Restaurer les valeurs par défaut',
    'resetting' => 'Restauration',
    'resetting_name' => 'Restauration d\'un(e) :name',
    'undefined_tab' => 'Divers',
    'field_off' => 'Off',
    'field_on' => 'On',
    'add' => 'Ajouter',
    'apply' => 'Appliquer',
    'cancel' => 'Annuler',
    'close' => 'Fermer',
    'confirm' => 'Confirmer',
    'reload' => 'Recharger',
    'complete' => 'Terminé',
    'ok' => 'OK',
    'or' => 'ou',
    'confirm_tab_close' => 'Fermer cet onglet ? Les modifications réalisées seront perdues.',
    'behavior_not_ready' => 'Le behavior formulaire n’a pas encore été initialisé, vérifiez que la méthode initForm() est appelée par le contrôleur.',
    'preview_no_files_message' => 'Les fichiers ne sont pas envoyés.',
    'preview_no_media_message' => 'Aucun média sélectionné.',
    'preview_no_record_message' => 'Il n’y a aucun enregistrement sélectionné.',
    'select' => 'Sélectionner',
    'select_all' => 'Tout sélectionner',
    'select_none' => 'Ne rien sélectionner',
    'select_placeholder' => 'Sélectionner une valeur',
    'insert_row' => 'Insérer une ligne',
    'insert_row_below' => 'Insérer une ligne dessous',
    'delete_row' => 'Supprimer une ligne',
    'concurrency_file_changed_title' => 'Le fichier à été modifié',
    'concurrency_file_changed_description' => 'Un autre utilisateur a modifié ce fichier sur le disque. Vous pouvez charger à nouveau le fichier depuis le disque et perdre vos modifications) ou écraser le fichier sur le disque.',
    'return_to_list' => 'Retourner à la liste',
  ],
  'recordfinder' => [
    'find_record' => 'Trouver un enregistrement',
    'cancel' => 'Annuler',
  ],
  'pagelist' => [
    'page_link' => 'Lien de page',
    'select_page' => 'Sélectionnez une page...',
  ],
  'relation' => [
    'missing_config' => 'La behavior relation n’a pas de configuration pour ":config".',
    'missing_definition' => 'La behavior relation n’a pas de définition pour le champ ":field".',
    'missing_model' => 'La behavior relation utilisée dans la classe :class n’a pas de modèle défini.',
    'invalid_action_single' => 'Cette action ne peut être effectuée sur une relation unique.',
    'invalid_action_multi' => 'Cette action ne peut être effectuée sur une relation multiple.',
    'help' => 'Cliquer sur un élément pour l’ajouter',
    'related_data' => 'Donnée :name liée',
    'add' => 'Ajouter',
    'add_selected' => 'Ajouter la sélection',
    'add_a_new' => 'Ajouter un(e) :name',
    'link_selected' => 'Lier la sélection',
    'link_a_new' => 'Lier un(e) :name',
    'cancel' => 'Annuler',
    'close' => 'Fermer',
    'add_name' => 'Ajouter un(e) :name',
    'create' => 'Créer',
    'create_name' => 'Créer un(e) :name',
    'update' => 'Mettre à jour',
    'update_name' => 'Mise à jour d’un(e) :name',
    'preview' => 'Aperçu',
    'preview_name' => 'Aperçu d’un(e) :name',
    'remove' => 'Retirer',
    'remove_name' => 'Retirer un(e) :name',
    'delete' => 'Supprimer',
    'delete_name' => 'Suppression d’un(e) :name',
    'delete_confirm' => 'Êtes vous sûr(e) ?',
    'link' => 'Lier',
    'link_name' => 'Lier un(e) :name',
    'unlink' => 'Détacher',
    'unlink_name' => 'Détacher un(e) :name',
    'unlink_confirm' => 'Êtes vous sûr(e) ?',
  ],
  'reorder' => [
    'default_title' => 'Réorganiser les enregistrements',
    'no_records' => 'Il n’y a aucun enregistrement à trier.',
  ],
  'model' => [
    'name' => 'Modèle',
    'not_found' => 'Aucun modèle ":class" ne correspond à l’ID :id',
    'missing_id' => 'Il manque l’ID de l’enregistrement.',
    'missing_relation' => 'Le modèle ":class" ne contient pas de définition ":relation".',
    'missing_method' => 'Le modèle ":class" ne contient pas de méthode ":method".',
    'invalid_class' => 'Le modèle :model utilisé dans la classe :class est invalide, il doit hériter de la classe \\Model.',
    'mass_assignment_failed' => 'L’affectation de masse a échoué pour l’attribut ":attribute" du modèle.',
  ],
  'warnings' => [
    'tips' => 'Astuces de configuration du système',
    'tips_description' => 'Il y a des éléments à prendre en compte pour configurer le système correctement.',
    'permissions' => 'PHP ne peut pas écrire dans le répertoire :name et ses sous-dossiers. Veuillez modifier les permissions en écriture du serveur web pour ce répertoire.',
    'extension' => 'L’extension PHP :name n’est pas installée. Veuillez installer la librairie et activer l’extension.',
    'plugin_missing' => 'Le plugin :name est une dépendance mais n\'est pas installé. Veuillez installer le plugin.',
  ],
  'editor' => [
    'menu_label' => 'Préférences de l’éditeur de code',
    'menu_description' => 'Personnaliser la configuration de l’éditeur de code, telle que la taille de la police ou la coloration syntaxique.',
    'font_size' => 'Taille de la police',
    'tab_size' => 'Taille de la tabulation',
    'use_hard_tabs' => 'Indentation par tabulation',
    'code_folding' => 'Replier le code',
    'code_folding_begin' => 'Marquer le début',
    'code_folding_begin_end' => 'Marquer le début et la fin',
    'autocompletion' => 'Auto-complétion',
    'word_wrap' => 'Retour à la ligne',
    'highlight_active_line' => 'Sélectionner la ligne active',
    'auto_closing' => 'Fermer Automatiquement les tags',
    'show_invisibles' => 'Afficher les caractères invisibles',
    'show_gutter' => 'Afficher les numéros de ligne',
    'basic_autocompletion' => 'Auto-complétion basique (Ctrl + Espace)',
    'live_autocompletion' => 'Auto-complétion en temps réel',
    'enable_snippets' => 'Activer les extraits de code (Tab)',
    'display_indent_guides' => 'Afficher les guides d’indentation',
    'show_print_margin' => 'Afficher les marges d’impression',
    'mode_off' => 'Désactivé',
    'mode_fluid' => 'Fluide',
    '40_characters' => '40 caractères',
    '80_characters' => '80 caractères',
    'theme' => 'Coloration syntaxique',
    'markup_styles' => 'Styles du balisage',
    'custom_styles' => 'Feuille de styles personnalisée',
    'custom styles_comment' => 'Styles personnalisés à inclure dans l’editeur HTML.',
    'markup_classes' => 'Classes de style',
    'paragraph' => 'Paragraphe',
    'link' => 'Lien',
    'table' => 'Tableau',
    'table_cell' => 'Cellule d’un tableau',
    'image' => 'Image',
    'label' => 'Libellé',
    'class_name' => 'Nom de la classe',
    'markup_tags' => 'Balises',
    'allowed_empty_tags' => 'Autoriser les balises vides',
    'allowed_empty_tags_comment' => 'Liste des balises qui ne sont pas supprimées lorsqu’elles sont vides.',
    'allowed_tags' => 'Balises autorisées',
    'allowed_tags_comment' => 'Liste des balises autorisées.',
    'no_wrap' => 'Balises non encadrées',
    'no_wrap_comment' => 'Liste des balises qui ne doivent pas être encadrées dans par des balises de bloc.',
    'remove_tags' => 'Balises supprimées',
    'remove_tags_comment' => 'Liste des balises qui sont supprimées ainsi que leur contenu.',
    'line_breaker_tags' => 'Balise de saut de ligne',
    'line_breaker_tags_comment' => 'La liste des balises qui sont utilisés pour mettre des sauts de ligne.',
    'toolbar_buttons' => 'Boutons de la barre d\'outils',
    'toolbar_buttons_comment' => 'Les boutons de la barre d\'outils a afficher par défaut dans l\'éditeur de texte enrichi.',
  ],
  'tooltips' => [
    'preview_website' => 'Aperçu du site',
  ],
  'mysettings' => [
    'menu_label' => 'Mes paramètres',
    'menu_description' => 'Paramètres de votre compte administrateur',
  ],
  'myaccount' => [
    'menu_label' => 'Mon compte',
    'menu_description' => 'Modifier les informations de votre compte comme le nom, l’adresse e-mail ou le mot de passe.',
    'menu_keywords' => 'security login sécurité authentification identification',
  ],
  'branding' => [
    'menu_label' => 'Personnaliser l’interface d’administration',
    'menu_description' => 'Personnaliser l’interface d’administration comme le nom, les couleurs ou le logo.',
    'brand' => 'Marque',
    'logo' => 'Logo',
    'logo_description' => 'Envoyer un logo personnalisé à utiliser dans l’interface d’administration.',
    'app_name' => 'Nom de l’application',
    'app_name_description' => 'Ce nom est affiché comme titre dans l’interface d’administration.',
    'app_tagline' => 'Slogan de l’application',
    'app_tagline_description' => 'Ce slogan est affiché sur la page d’inscription à l’interface d’administration.',
    'colors' => 'Couleurs',
    'primary_color' => 'Couleur principale',
    'secondary_color' => 'Couleur secondaire',
    'accent_color' => 'Couleur d’accentuation',
    'styles' => 'Styles',
    'custom_stylesheet' => 'Feuille de styles personnalisée',
    'navigation' => 'Navigation',
    'menu_mode' => 'Style du menu',
    'menu_mode_inline' => 'Horizontal',
    'menu_mode_tile' => 'Tuiles',
    'menu_mode_collapsed' => 'Replié',
  ],
  'backend_preferences' => [
    'menu_label' => 'Préférences d’administration',
    'menu_description' => 'Gérer les préférences de votre compte telles que la langue utilisée.',
    'region' => 'Région',
    'code_editor' => 'Éditeur de code',
    'timezone' => 'Fuseau horaire',
    'timezone_comment' => 'Ajuster les dates affichées à ce fuseau horaire.',
    'locale' => 'Langue',
    'locale_comment' => 'Choisir une langue.',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'tous',
    'options_method_not_exists' => 'La classe du modèle :model doit définir une méthode :method() qui retourne les options pour le filtre \':filter\'.',
    'date_all' => 'toute la période',
    'number_all' => 'tous les nombres',
  ],
  'import_export' => [
    'row' => 'Ligne :row',
    'show_ignored_columns' => 'Voir les colonnes ignorées',
    'auto_match_columns' => 'Correspondance automatique des colonnes',
    'created' => 'Créés',
    'updated' => 'Mis à jour',
    'skipped' => 'Ignorés',
    'warnings' => 'Alertes',
    'errors' => 'Erreurs',
    'skipped_rows' => 'Lignes ignorées',
    'upload_valid_csv' => 'Veuillez envoyer un fichier CSV valide.',
    'drop_column_here' => 'Déposez les colonnes ici...',
    'ignore_this_column' => 'Ignorer cette colonne',
    'processing_successful_line1' => 'Le processus d’export du fichier s’est terminé avec succès !',
    'processing_successful_line2' => 'Le navigateur devrait automatiquement vous rediriger vers le téléchargement du fichier.',
    'export_error' => 'Erreur d’export',
    'file_not_found_error' => 'Fichier non trouvé',
    'empty_error' => 'Il n‘y a aucune donnée à exporter',
    'empty_import_columns_error' => 'Veuillez indiquer des colonnes à importer.',
    'match_some_column_error' => 'Veuillez d’abord faire correspondre des colonnes.',
    'required_match_column_error' => 'Veuillez faire correspondre la colonne obligatoire :label.',
    'empty_export_columns_error' => 'Veuillez indiquer des colonnes à exporter.',
    'behavior_missing_uselist_error' => 'Vous devez implémenter le behavior ListController avec l’option d’export "useList" activée.',
    'missing_model_class_error' => 'Veuillez préciser la propriété modelClass pour :type',
    'missing_column_id_error' => 'Identifiant de colonne manquant',
    'unknown_column_error' => 'Colonne inconnue',
    'encoding_not_supported_error' => 'L’encodage de votre fichier source n’est pas reconnu. Veuillez sélectionner le format d’import personnalisé avec l’encodage adapté pour importer votre fichier.',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, européen occidental)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, européen central)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, européen du Sud)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, européen du Nord)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, cyrillique)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, arabe)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, grec)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, hébreu)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, turc)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, nordique)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, thaï)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, balte)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, celtique)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, européen occidental révisé avec le signe euro)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Déposer et gérer les contenus media - images, vidéos, sons, documents',
  ],
  'mediafinder' => [
    'label' => 'Galerie média',
    'default_prompt' => 'Cliquez sur le bouton %s pour trouver un élément média',
  ],
  'media' => [
    'menu_label' => 'Média',
    'upload' => 'Déposer un fichier',
    'move' => 'Déplacer',
    'delete' => 'Supprimer',
    'add_folder' => 'Ajouter un répertoire',
    'search' => 'Rechercher',
    'display' => 'Affichage',
    'filter_everything' => 'Tout',
    'filter_images' => 'Images',
    'filter_video' => 'Vidéo',
    'filter_audio' => 'Audio',
    'filter_documents' => 'Documents',
    'library' => 'Librairie',
    'size' => 'Taille',
    'title' => 'Titre',
    'last_modified' => 'Dernière modification',
    'public_url' => 'Adresse URL publique',
    'click_here' => 'Cliquer ici',
    'thumbnail_error' => 'Erreur lors de la création de la miniature.',
    'return_to_parent' => 'Retourner au répertoire parent',
    'return_to_parent_label' => 'Remonter…',
    'nothing_selected' => 'Aucune sélection.',
    'multiple_selected' => 'Plusieurs éléments sélectionnés.',
    'uploading_file_num' => 'Dépôt de :number fichier(s)…',
    'uploading_complete' => 'Dépôt des fichiers terminé',
    'uploading_error' => 'Le dépôt des fichiers a échoué',
    'type_blocked' => 'Le type de fichier utilisé est bloqué pour des raisons de sécurité.',
    'order_by' => 'Trier par',
    'direction' => 'Ordre',
    'direction_asc' => 'Croissant',
    'direction_desc' => 'Décroissant',
    'folder' => 'Répertoire',
    'no_files_found' => 'Aucun fichier trouvé.',
    'delete_empty' => 'Veuillez sélectionner les éléments à supprimer.',
    'delete_confirm' => 'Confirmer la suppression de ces éléments ?',
    'error_renaming_file' => 'Erreur lors du renommage de l’élément.',
    'new_folder_title' => 'Nouveau répertoire',
    'folder_name' => 'Nom du répertoire',
    'error_creating_folder' => 'Erreur lors de la création du répertoire',
    'folder_or_file_exist' => 'Un répertoire ou un fichier portant ce nom existe déjà.',
    'move_empty' => 'Veuillez sélectionner les éléments à déplacer.',
    'move_popup_title' => 'Déplacer des fichiers ou répertoires',
    'move_destination' => 'Répertoire de destination',
    'please_select_move_dest' => 'Veuillez sélectionner un répertoire de destination.',
    'move_dest_src_match' => 'Veuillez sélectionner un autre répertoire de destination.',
    'empty_library' => 'La librairie multimédia est vide. Pour commencer, téléchargez des fichiers ou répertoires.',
    'insert' => 'Insérer',
    'crop_and_insert' => 'Rogner et insérer',
    'select_single_image' => 'Veuillez ne sélectionner qu\'une seule image.',
    'selection_not_image' => 'L’élément sélectionné n’est pas une image.',
    'restore' => 'Annuler tous les changements',
    'resize' => 'Redimensionner…',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Rapport fixe',
    'selection_mode_fixed_size' => 'Taille fixe',
    'height' => 'Hauteur',
    'width' => 'Largeur',
    'selection_mode' => 'Mode de sélection',
    'resize_image' => 'Redimensionner l’image',
    'image_size' => 'Taille de l’image :',
    'selected_size' => 'Sélectionnée :',
  ],
];
