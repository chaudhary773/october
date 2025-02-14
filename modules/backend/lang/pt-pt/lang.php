<?php return [
  'auth' => [],
  'field' => [
    'invalid_type' => 'Invalid field type used :type.',
    'options_method_invalid_model' => 'O atributo \':field\' não é resolvido para um modelo válidol. Tente especificar o método de opções para a classe de modelo :model explicitamente.',
    'options_method_not_exists' => 'A classe de modelo :model deve definir um método :method() que retorne opções para o campo de formulário \':field\'.',
    'colors_method_not_exists' => 'A classe de modelo :model deve definir um método :method() que retorne códigos de côr hexadecimais html para o campo de formulário\':field\'.',
  ],
  'widget' => [
    'not_registered' => 'Uma classe de widget com o nome ":name" não foi registada',
    'not_bound' => 'Um widget da classe ":name" não foi ligado ao controlador',
  ],
  'page' => [
    'untitled' => 'Sem título',
    404 => [
      'label' => 'Página não encontrada',
      'help' => 'Por muito que procuremos, o URL pedido não existe. Talvez esteja à procura de outra coisa?',
      'back_link' => 'Voltar à página anterior',
    ],
    'access_denied' => [
      'label' => 'Acesso negado',
      'help' => 'Não tem as permissões necessárias para visualizar esta página.',
      'cms_link' => 'Regressar à área administrativa',
    ],
    'no_database' => [
      'label' => 'Base de dados não existente',
      'help' => 'Uma base de dados é necessária para acesso ao back-end. Verifique se a base dados se encontra configurada e migrada antes de tentar novamente.',
      'cms_link' => 'Regressar á página inicial',
    ],
  ],
  'partial' => [
    'not_found_name' => 'O bloco parcial ":name" não foi encontrado.',
    'invalid_name' => 'Nome de bloco parcial inválido: :name.',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Nome de processador AJAX inválido: :name.',
    'not_found' => 'O processador AJAX \':name\' não foi encontrado.',
  ],
  'account' => [
    'impersonate' => 'Personificar utilizador',
    'impersonate_confirm' => 'Tem a certeza de que quer personificar este utilizador? Pode voltar ao seu estado inicial fazendo log out.',
    'impersonate_success' => 'Está agora a personificar este utilizador',
    'impersonate_working' => 'A personificar...',
    'impersonating' => 'A personificar :full_name',
    'stop_impersonating' => 'Parar de personificar',
    'signed_in_as' => 'Sessão iniciada como :full_name',
    'sign_out' => 'Sair',
    'login_prompt' => 'Bem vindo de volta! Por favor, faça login na sua conta para continuar.',
    'login_placeholder' => 'Utilizador',
    'password_placeholder' => 'Senha',
    'enter_email' => 'Coloque o seu email',
    'email_placeholder' => 'E-mail',
    'apply' => 'Aplicar',
    'cancel' => 'Cancelar',
    'delete' => 'Apagar',
    'ok' => 'Ok',
  ],
  'dashboard' => [
    'menu_label' => 'Painel',
    'widget_label' => 'Widget',
    'widget_width' => 'Largura',
    'full_width' => 'Largura completa',
    'manage_widgets' => 'Gerir widgets',
    'add_widget' => 'Adicionar widget',
    'widget_inspector_title' => 'Configuração de widgets',
    'widget_inspector_description' => 'Configurar o widget',
    'widget_columns_label' => 'Largura :columns',
    'widget_columns_description' => 'A largura do widget, um número entre 1 e 12.',
    'widget_columns_error' => 'Por favor introduza a largura do widget como um número entre 1 e 12.',
    'columns' => '{1} coluna|[2,Inf] colunas',
    'widget_new_row_label' => 'Forçar nova linha',
    'widget_new_row_description' => 'Pôr o widget numa linha nova.',
    'widget_title_label' => 'Título do widget',
    'widget_title_error' => 'O título do widget é obrigatório.',
    'reset_layout' => 'Reinicializar layout',
    'reset_layout_confirm' => 'Reinicializar o layout para a configuração de origem?',
    'reset_layout_success' => 'O layout foi reinicializado',
    'make_default' => 'Guardar como pré-definido',
    'make_default_confirm' => 'Guardar o layout actual como o pré-definido?',
    'make_default_success' => 'O layout actual é agora o pré-definido',
    'collapse_all' => 'Contrair todos',
    'expand_all' => 'Expandir todos ',
    'status' => [
      'widget_title_default' => 'Estado do Sistema',
      'update_available' => '{0} actualizações disponíveis!|{1} actualização disponível!|[2,Inf] actualizações disponíveis!',
      'updates_pending' => 'Actualizações de softwares pendentes',
      'updates_nil' => 'O software já está actualizado',
      'updates_link' => 'Actualizar',
      'warnings_pending' => 'Algumas questões precisam de atenção',
      'warnings_nil' => 'Nenhuma advertência para mostrar',
      'warnings_link' => 'Visualizar',
      'core_build' => 'Versão do sistema',
      'event_log' => 'Registo de eventos',
      'request_log' => 'Registo de requisições',
      'app_birthday' => 'No ar desde',
    ],
    'welcome' => [
      'widget_title_default' => 'Bem-vindo',
      'welcome_back_name' => 'Seja bem vindo de volta ao :app, :name.',
      'welcome_to_name' => 'Bem vindo ao :app, :name.',
      'first_sign_in' => 'Esta é a primeira vez que acede à área administrativa.',
      'last_sign_in' => 'O último acesso foi em',
      'view_access_logs' => 'Visualizar registos de acesso',
      'nice_message' => 'Tenha um excelente dia!',
    ],
  ],
  'user' => [
    'name' => 'Administrador',
    'menu_label' => 'Administradores',
    'menu_description' => 'Gerir utilizadores, grupos, e permissões de administração.',
    'list_title' => 'Gerir Administradores',
    'new' => 'Novo Administrator',
    'login' => 'Login',
    'first_name' => 'Nome Próprio',
    'last_name' => 'Apelido',
    'full_name' => 'Nome Completo',
    'email' => 'Email',
    'role_field' => 'Papel',
    'role_comment' => 'Papéis definem permissões de utilizador, que podem ser sobrepostas para cada utilizador no separador Permissões.',
    'groups' => 'Grupos',
    'groups_comment' => 'Defina os grupos a que esta conta deve pertencer. Os grupos definem permissões, que podem ser sobrepostas para cada utilizador no separador Permissões.',
    'avatar' => 'Avatar',
    'password' => 'Senha',
    'password_confirmation' => 'Confirmar Senha',
    'permissions' => 'Permissões',
    'account' => 'Conta',
    'superuser' => 'Super Utilizador',
    'superuser_comment' => 'Permite accesso completo a todas as àreas do sistema para esta conta. Super utilizadores podem criar e gerir outros utilizadores.',
    'send_invite' => 'Enviar convite por email',
    'send_invite_comment' => 'Envia uma mensagem de boas-vindas com a informação de login e password.',
    'delete_confirm' => 'Apagar este administrador?',
    'return' => 'Voltar à lista de administradores',
    'allow' => 'Permitir',
    'inherit' => 'Herdar',
    'deny' => 'Negar',
    'activated' => 'Activado',
    'last_login' => 'Última entrada',
    'created_at' => 'Criado em',
    'updated_at' => 'Modificado em',
    'deleted_at' => 'Apagado em',
    'show_deleted' => 'Mostrar apagados',
    'group' => [
      'name' => 'Grupo',
      'name_comment' => 'O nome é exibido na lista de grupos ao criar/alterar um administrador.',
      'name_field' => 'Nome',
      'description_field' => 'Descrição',
      'is_new_user_default_field_label' => 'Grupo padrão',
      'is_new_user_default_field_comment' => 'Adicionar novos administradores a este grupo por padrão',
      'code_field' => 'Código',
      'code_comment' => 'Insira um código exclusivo se quiser utilizar o mesmo com a API.',
      'menu_label' => 'Grupos',
      'list_title' => 'Gerir grupos',
      'new' => 'Novo grupo administrador',
      'delete_confirm' => 'Você realmente deseja apagar este grupo?',
      'return' => 'Voltar para a lista de grupos',
      'users_count' => 'Utilizadores',
    ],
    'role' => [
      'name' => 'Papel',
      'name_field' => 'Nome',
      'name_comment' => 'O nome é exibido na lista de grupos ao criar/alterar um administrador.',
      'description_field' => 'Descrição',
      'code_field' => 'Código',
      'code_comment' => 'Insira um código exclusivo se quiser utilizar o mesmo com a API.',
      'menu_label' => 'Gerir Papéis',
      'list_title' => 'Gerir Papéis',
      'new' => 'Novo Papel',
      'delete_confirm' => 'Você realmente deseja apagar este papel?',
      'return' => 'Voltar para a lista de papéis',
      'users_count' => 'Utilizadores',
    ],
    'preferences' => [
      'not_authenticated' => 'Nenhum utilizador autenticado para carregar as preferências.',
    ],
    'trashed_hint_title' => 'Esta conta foi apagada',
    'trashed_hint_desc' => 'Esta conta foi apagada e não pode iniciar sessão. Para a restaurar, clique no botão Restaurar Utilizador no canto inferior direito.',
  ],
  'list' => [
    'default_title' => 'Lista',
    'search_prompt' => 'Pesquisar...',
    'no_records' => 'Nenhum registo encontrado.',
    'missing_model' => 'A lista usada em :class não tem um modelo definido.',
    'missing_column' => 'Não existe definição de coluna para :columns.',
    'missing_columns' => 'A lista utilizada em :class não possui colunas de lista definidas.',
    'missing_parent_definition' => 'Comportamento de lista não possui uma definição para \':definition\'.',
    'missing_definition' => 'Lista não possui uma coluna para ":field".',
    'behavior_not_ready' => 'Lista não foi inicializada. Verifique se você chamou makeLists() no controlador.',
    'invalid_column_datetime' => 'Valor da coluna ":column" não é um objeto DateTime, esqueceu de referênciar \\$dates no modelo?',
    'pagination' => 'Registos exibidos: :from-:to de :total',
    'first_page' => 'Primeira página',
    'last_page' => 'Última página',
    'prev_page' => 'Anterior',
    'next_page' => 'Próxima',
    'refresh' => 'Actualizar',
    'updating' => 'Actualizando...',
    'loading' => 'Carregando...',
    'setup_title' => 'Configuração de Lista',
    'setup_help' => 'Seleccione as colunas que deseja ver na lista. Você pode alterar as posições das colunas arrastando-as para cima ou para baixo.',
    'records_per_page' => 'Registos por página',
    'records_per_page_help' => 'Escolha o número de registos a mostrar por página. Note que um número elevado de registos por página pode reduzir a performance.',
    'check' => 'Marcar',
    'delete_selected' => 'Apagar seleccionado',
    'delete_selected_empty' => 'Não há registos seleccionados para apagar.',
    'delete_selected_confirm' => 'Apagar os registos selecionados?',
    'delete_selected_success' => 'Registos seleccionados apagados com sucesso.',
    'column_switch_true' => 'Sim',
    'column_switch_false' => 'Não',
  ],
  'fileupload' => [
    'attachment' => 'Anexo',
    'help' => 'Adicione um título e descrição a este anexo.',
    'title_label' => 'Título',
    'description_label' => 'Descrição',
    'default_prompt' => 'Clique em %s ou arraste um ficheiro para cá para enviar',
    'attachment_url' => 'Anexar URL',
    'upload_file' => 'Enviar ficheiro',
    'upload_error' => 'Erro ao enviar',
    'remove_confirm' => 'Tem a certeza?',
    'remove_file' => 'Remover ficheiro',
  ],
  'repeater' => [
    'min_items_failed' => ':name requer no mínimo :min itens, apenas :items foram introduzidos',
    'max_items_failed' => ':name requer no máximo :min itens, :items foram introduzidos',
  ],
  'form' => [
    'create_title' => 'Novo :name',
    'update_title' => 'Editar :name',
    'preview_title' => 'Visualizar :name',
    'create_success' => ':name foi criado com sucesso',
    'update_success' => ':name foi actualizado com sucesso',
    'delete_success' => ':name foi apagado com sucesso',
    'restore_success' => ':name foi restaurado com sucesso',
    'reset_success' => 'Reinicialização completa',
    'missing_id' => 'O ID do registo não foi fornecido',
    'missing_model' => 'Formulário utilizado na classe :class não tem um modelo definido.',
    'missing_definition' => 'Formulário não contém um campo ":field".',
    'not_found' => 'Nenhum registo encontrado com o ID :id',
    'action_confirm' => 'Tem a certeza?',
    'create' => 'Criar',
    'create_and_close' => 'Criar e sair',
    'creating' => 'Criando...',
    'creating_name' => 'Criando :name...',
    'save' => 'Guardar',
    'save_and_close' => 'Guardar e fechar',
    'saving' => 'Guardando...',
    'saving_name' => 'Guardando :name...',
    'delete' => 'Apagar',
    'deleting' => 'Apagando...',
    'confirm_delete' => 'Realmente deseja apagar este registo?',
    'confirm_delete_multiple' => 'Realmente deseja apagar os registos seleccionados?',
    'deleting_name' => 'Apagando :name...',
    'restore' => 'Restaurar',
    'restoring' => 'Restaurando',
    'confirm_restore' => 'Realmente deseja restaurar este registo?',
    'reset_default' => 'Redefinir para o padrão',
    'resetting' => 'Redefinindo',
    'resetting_name' => 'Redefinindo :name',
    'undefined_tab' => 'Outros',
    'field_off' => 'Desl',
    'field_on' => 'Lig',
    'add' => 'Adicionar',
    'apply' => 'Aplicar',
    'cancel' => 'Cancelar',
    'close' => 'Fechar',
    'confirm' => 'Confirmar',
    'reload' => 'Recarregar',
    'complete' => 'Concluído',
    'ok' => 'Ok',
    'or' => 'ou',
    'confirm_tab_close' => 'Tem a certeza que deseja fechar esse separador? As alterações que não foram guardadas serão perdidas',
    'behavior_not_ready' => 'O formulário não foi inicializado. Verifique se você chamou initForm() no controlador.',
    'preview_no_files_message' => 'Os ficheiros não foram carregados',
    'preview_no_media_message' => 'Nenhum conteúdo selecionado.',
    'preview_no_record_message' => 'Nenhum registo selecionado.',
    'select' => 'Selecionar',
    'select_all' => 'Selecionar tudo',
    'select_none' => 'Selecione nenhum',
    'select_placeholder' => 'por favor, selecione',
    'insert_row' => 'Inserir linha',
    'insert_row_below' => 'Inserir linha abaixo',
    'delete_row' => 'Apagar linha',
    'concurrency_file_changed_title' => 'O ficheiro foi alterado',
    'concurrency_file_changed_description' => 'O ficheiro que está editando foi alterado em disco. Pode recarregá-lo e perder suas alterações ou sobrescrever o ficheiro do disco.',
    'return_to_list' => 'Regressar à lista',
  ],
  'recordfinder' => [
    'find_record' => 'Localizar Registo',
    'invalid_model_class' => 'A classe modelo ":modelClass" definida para o localizador de registos é inválida.',
    'cancel' => 'Cancelar',
  ],
  'pagelist' => [],
  'relation' => [
    'missing_config' => 'Comportamento da relação não tem uma configuração para ":config".',
    'missing_definition' => 'Comportamento da relação não contém uma definição para ":field".',
    'missing_model' => 'Comportamento da relação utilizado na classe :class não possui um modelo definido.',
    'invalid_action_single' => 'Essa acção não pode ser realizada num relacionamento singular.',
    'invalid_action_multi' => 'Essa acção não pode ser realizada num relacionamento múltiplo.',
    'help' => 'Clique em um item para adicionar',
    'related_data' => 'Dados de :name relacionado',
    'add' => 'Adicionar',
    'add_selected' => 'Adicionar seleção',
    'add_a_new' => 'Adicionar um(a) novo(a) :name',
    'link_selected' => 'Vincular selecionado',
    'link_a_new' => 'Vincular um novo :name',
    'cancel' => 'Cancelar',
    'close' => 'Fechar',
    'add_name' => 'Adicionar :name',
    'create' => 'Criar',
    'create_name' => 'Criar :name',
    'update' => 'Actualizar',
    'update_name' => 'Actualizar :name',
    'preview' => 'Visualizar',
    'preview_name' => 'Visualizar :name',
    'remove' => 'Remover',
    'remove_name' => 'Remover :name',
    'delete' => 'Apagar',
    'delete_name' => 'Apagar :name',
    'delete_confirm' => 'Tem a certeza?',
    'link' => 'Vincular',
    'link_name' => 'Vincular :name',
    'unlink' => 'Desvincular',
    'unlink_name' => 'Desvincular :name',
    'unlink_confirm' => 'Tem a certeza?',
  ],
  'reorder' => [
    'default_title' => 'Reordenar registos',
    'no_records' => 'Não há registos disponíveis para ordenar.',
  ],
  'model' => [
    'name' => 'Modelo',
    'not_found' => 'O modelo ":class" com ID :id não foi encontrado',
    'missing_id' => 'ID do registo não especificado.',
    'missing_relation' => 'O modelo ":class" não contém uma definição para o relacionamento ":relation".',
    'missing_method' => 'O modelo ":class" não contém o método ":method".',
    'invalid_class' => 'O modelo :model utilizado na classe :class não é válido. É necessário herdar a classe \\Model.',
    'mass_assignment_failed' => 'Falha na atribuição em massa do atributo ":attribute" do modelo.',
  ],
  'warnings' => [
    'tips' => 'Dicas de configuração do sistema',
    'tips_description' => 'Há itens que requerem atenção para configurar o sistema corretamente.',
    'permissions' => 'Diretoria :name ou suas subdiretorias não são graváveis pelo PHP. Por favor, defina permissões de escrita para o servidor nesta diretoria.',
    'extension' => 'A extensão PHP :name não está instalada. Por favor, instale esta biblioteca para activar a extensão.',
    'plugin_missing' => 'A extensão :name é uma dependência mas não está instalada. Por favor instale esta extensão.',
    'debug' => 'O modo de depuração está activo. Isto não é recomendado em abientes de produção.',
    'decompileBackendAssets' => 'Os recursos do backend não estao compilados. Isto não é recomendado em ambientes de produção.',
  ],
  'editor' => [
    'menu_label' => 'Definições do Editor',
    'menu_description' => 'Gerir configurações globais do editor, como tamanho de fonte ou esquema de cores',
    'font_size' => 'Tamanho da fonte',
    'tab_size' => 'Tamanho do tabulação',
    'use_hard_tabs' => 'Recuo usando guias',
    'code_folding' => 'Código flexível',
    'code_folding_begin' => 'Marca de início',
    'code_folding_begin_end' => 'Marca de início e fim',
    'autocompletion' => 'Autocompletar',
    'word_wrap' => 'Quebra de linha',
    'highlight_active_line' => 'Destaque na linha ativa',
    'auto_closing' => 'Fechar etiquetas automáticamente',
    'show_invisibles' => 'Mostrar caracteres invisíveis',
    'show_gutter' => 'Mostrar guias',
    'basic_autocompletion' => 'Autocompletar básico (Ctrl + Espaço)',
    'live_autocompletion' => 'Autocompletar em tempo real',
    'enable_snippets' => 'Activar trechos de códigos (Tab)',
    'display_indent_guides' => 'Mostrar guias de indentação',
    'show_print_margin' => 'Mostrar margem de impressão',
    'mode_off' => 'Desligado',
    'mode_fluid' => 'Fluido',
    '40_characters' => '40 caracteres',
    '80_characters' => '80 caracteres',
    'theme' => 'Esquema de cores',
    'markup_styles' => 'Estilos de marcação',
    'custom_styles' => 'Folha de estilo personalizada',
    'custom styles_comment' => 'Estilos personalizados para incluir no editor HTML.',
    'markup_classes' => 'Classes de marcação',
    'paragraph' => 'Parágrafo',
    'link' => 'Ligação',
    'table' => 'Tabela',
    'table_cell' => 'Célula de tabela',
    'image' => 'Imagem',
    'label' => 'Rótulo',
    'class_name' => 'Nome da classe',
    'markup_tags' => 'Etiquetas de marcação',
    'allowed_empty_tags' => 'Permitir etiquetas vazias',
    'allowed_empty_tags_comment' => 'A lista de etiquetas que não é removida quando não há conteúdo.',
    'allowed_tags' => 'Etiquetas permitidas',
    'allowed_tags_comment' => 'Lista de etiquetas permitidas.',
    'no_wrap' => 'Não envolva as etiquetas',
    'no_wrap_comment' => 'Lista de etiquetas que não devem ser envolvidas num bloco de etiquetas.',
    'remove_tags' => 'Apagar etiquetas',
    'remove_tags_comment' => 'Lista de etiquetas que serão excluídas incluíndo o conteúdo.',
    'line_breaker_tags' => 'Etiquetas de quebra de linha',
    'line_breaker_tags_comment' => 'Lista de etiquetas entre as quais é inserida uma quebra de linha.',
    'toolbar_buttons' => 'Botões da barra de ferramentas',
    'toolbar_buttons_comment' => 'Botões da barra de ferramentas do editor rico a serem mostradas por defeito.',
  ],
  'tooltips' => [
    'preview_website' => 'Prévisualizar a página',
  ],
  'mysettings' => [
    'menu_label' => 'As minhas configurações',
    'menu_description' => 'Configurações relacionadas com sua conta de administrador',
  ],
  'myaccount' => [
    'menu_label' => 'Minha Conta',
    'menu_description' => 'Actualizar detalhes da sua conta, como nome, e-mail e senha.',
    'menu_keywords' => 'login de segurança',
  ],
  'branding' => [
    'menu_label' => 'Personalização',
    'menu_description' => 'Personalizar detalhes da área administrativa, tais como título, cores e logo.',
    'brand' => 'Marca',
    'logo' => 'Logo',
    'logo_description' => 'Fazer carregamento de um logótipo para usar na área administrativa.',
    'favicon' => 'Favicon',
    'favicon_description' => 'Carrege um favicon personalizado a usar na área administrativa',
    'app_name' => 'Nome da Aplicação',
    'app_name_description' => 'Este nome é mostrado no título da área administrativa.',
    'app_tagline' => 'Slogan do Aplicativo',
    'app_tagline_description' => 'Esta frase é mostrada no ecran de entrada administrativo.',
    'colors' => 'Cores',
    'primary_color' => 'Cor primária',
    'secondary_color' => 'Cor secundária',
    'accent_color' => 'Cor destacada',
    'styles' => 'Estilos',
    'custom_stylesheet' => 'CSS personalizado',
    'navigation' => 'Navegação',
    'menu_mode' => 'Estilo de menu',
    'menu_mode_inline' => 'Em linha',
    'menu_mode_inline_no_icons' => 'Em linha (sem icons)',
    'menu_mode_tile' => 'Blocos',
    'menu_mode_collapsed' => 'Colapsados',
  ],
  'backend_preferences' => [
    'menu_label' => 'Preferências da Administração',
    'menu_description' => 'Gerir idiomas e aparência da administração.',
    'region' => 'Região',
    'code_editor' => 'Editor de código',
    'timezone' => 'Fuso horário',
    'timezone_comment' => 'Ajustar datas exibidas para este fuso horário.',
    'locale' => 'Idioma',
    'locale_comment' => 'Selecione o idioma de sua preferência.',
  ],
  'access_log' => [],
  'filter' => [
    'all' => 'todos',
    'options_method_not_exists' => 'A classe modelo :model deve definir um método :method() retornando opções para o filtro \':filter\'.',
    'date_all' => 'todo o período',
    'number_all' => 'todos os números',
  ],
  'import_export' => [
    'row' => 'Linha :row',
    'show_ignored_columns' => 'Mostrar colunas ignoradas',
    'auto_match_columns' => 'Auto associar colunas',
    'created' => 'Criados',
    'updated' => 'Atualizados',
    'skipped' => 'Ignorados',
    'warnings' => 'Alertas',
    'errors' => 'Erros',
    'skipped_rows' => 'Registos ignorados',
    'upload_valid_csv' => 'Por favor envie um ficheiro CSV válido.',
    'drop_column_here' => 'Soltar coluna aqui...',
    'ignore_this_column' => 'Ignorar esta coluna',
    'processing_successful_line1' => 'Processo de exportação de ficheiro concluído com sucesso!',
    'processing_successful_line2' => 'O navegador agora deve redirecionar automaticamente para o descarregar do ficheiro.',
    'export_error' => 'Erro de exportação',
    'file_not_found_error' => 'Ficheiro não encontrado',
    'empty_error' => 'Não havia dados para exportar',
    'empty_import_columns_error' => 'Por favor, especifique algumas colunas para importar.',
    'match_some_column_error' => 'Por favor, combine algumas colunas primeiro.',
    'required_match_column_error' => 'Por favor, especifique a combinação para o campo requerido :label.',
    'empty_export_columns_error' => 'Por favor, especifique algumas colunas para exportar.',
    'behavior_missing_uselist_error' => 'Deve implementar o comportamento do controlador ListController com a opção de exportação "useList" activada.',
    'missing_model_class_error' => 'Por favor, especifique a propriedade modelo de classe para :type',
    'missing_column_id_error' => 'Identificador de coluna ausente',
    'unknown_column_error' => 'Coluna desconhecida',
    'encoding_not_supported_error' => 'Codificação do arquivo fonte desconhecida. Por favor, selecione a opção "Formato personalizado", com a devida codificação, para importar o arquivo.',
    'encodings' => [
      'utf_8' => 'UTF-8',
      'us_ascii' => 'US-ASCII',
      'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
      'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
      'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
      'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
      'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
      'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
      'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
      'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
      'iso_8859_0' => 'ISO-8859-9 (Latin-5, Turkish)',
      'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
      'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
      'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
      'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
      'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
      'windows_1251' => 'Windows-1251 (CP1251)',
      'windows_1252' => 'Windows-1252 (CP1252)',
    ],
  ],
  'permissions' => [
    'manage_media' => 'Gerir conteúdo multimédia',
  ],
  'mediafinder' => [
    'label' => 'Localizador de multimédia',
    'default_prompt' => 'Clique no botão %s para localizar um ficheiro multimédia',
    'no_image' => 'A imagem não foi encontrada',
  ],
  'media' => [
    'menu_label' => 'Conteúdos',
    'upload' => 'Enviar',
    'move' => 'Mover',
    'delete' => 'Excluir',
    'add_folder' => 'Adicionar pasta',
    'search' => 'Procurar',
    'display' => 'Mostrar',
    'filter_everything' => 'Tudo',
    'filter_images' => 'Imagens',
    'filter_video' => 'Vídeos',
    'filter_audio' => 'Áudios',
    'filter_documents' => 'Documentos',
    'library' => 'Biblioteca',
    'size' => 'Tamanho',
    'title' => 'Título',
    'last_modified' => 'Última modificação',
    'public_url' => 'URL pública',
    'click_here' => 'Clique aqui',
    'thumbnail_error' => 'Erro ao gerar a miniatura.',
    'return_to_parent' => 'Retornar à diretoria anterior',
    'return_to_parent_label' => 'Acima ..',
    'nothing_selected' => 'Nenhum item selecionado.',
    'multiple_selected' => 'Múltiplos itens selecionados.',
    'uploading_file_num' => 'Enviando :number ficheiro(s)...',
    'uploading_complete' => 'Envio finalizado',
    'uploading_error' => 'Falha no envio',
    'type_blocked' => 'O tipo de ficheiro utilizado é bloqueado por motivos de segurança.',
    'order_by' => 'Ordenar por',
    'direction' => 'Direção',
    'direction_asc' => 'Ascendente',
    'direction_desc' => 'Descendente',
    'folder' => 'Pasta',
    'no_files_found' => 'Nenhum ficheiro encontrado.',
    'delete_empty' => 'Por favor, selecione itens para apagar.',
    'delete_confirm' => 'Deseja apagar o(s) ficheiro(s) selecionado(s)?',
    'error_renaming_file' => 'Erro ao renomear o ficheiro.',
    'new_folder_title' => 'Nova pasta',
    'folder_name' => 'Nome da pasta',
    'error_creating_folder' => 'Erro ao criar a pasta',
    'folder_or_file_exist' => 'Uma pasta ou ficheiro já existe com o nome especificado.',
    'move_empty' => 'Por favor, selecione os itens para mover.',
    'move_popup_title' => 'Mover ficheiros ou pastas',
    'move_destination' => 'Pasta destino',
    'please_select_move_dest' => 'Por favor, selecione a pasta de destino.',
    'move_dest_src_match' => 'Por favor, selecione outra pasta de destino.',
    'empty_library' => 'A biblioteca de multimédia, está vazia. Envie ficheiros ou crie pastas para iniciar.',
    'insert' => 'Inserir',
    'crop_and_insert' => 'Cortar & Inserir',
    'select_single_image' => 'Por favor, selecione uma única imagem.',
    'selection_not_image' => 'O ficheiro selecionado não é uma imagem.',
    'restore' => 'Desfazer todas as alterações',
    'resize' => 'Redimensionar...',
    'selection_mode_normal' => 'Normal',
    'selection_mode_fixed_ratio' => 'Proporção fixa',
    'selection_mode_fixed_size' => 'Tamanho fixo',
    'height' => 'Altura',
    'width' => 'Largura',
    'selection_mode' => 'Modo de seleção',
    'resize_image' => 'Redimensionar imagem',
    'image_size' => 'Tamanho da imagem:',
    'selected_size' => 'Selecionado:',
  ],
];
