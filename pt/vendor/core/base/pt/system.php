<?php

return [
    'no_select' => 'Selecione pelo menos um registro para realizar esta ação!',
    'cannot_find_user' => 'Não foi possível encontrar o usuário especificado',
    'supper_revoked' => 'Acesso de superusuário revogado',
    'cannot_revoke_yourself' => 'Não é possível revogar a permissão de acesso do usuário do jantar por conta própria!',
    'cant_remove_supper' => 'Você não tem permissão para remover este superusuário',
    'cant_find_user_with_email' => 'Não foi possível encontrar o usuário com o endereço de e-mail especificado',
    'supper_granted' => 'Acesso de superusuário concedido',
    'delete_log_success' => 'Exclua o arquivo de log com sucesso!',
    'get_member_success' => 'Lista de membros recuperada com sucesso',
    'error_occur' => 'Ocorreram os seguintes erros',
    'user_management' => 'Gerenciamento de usuários',
    'user_management_description' => 'Gerenciar usuários.',
    'role_and_permission' => 'Funções e permissões',
    'role_and_permission_description' => 'Gerencie as funções disponíveis.',
    'user' => [
        'list_super' => 'Listar superusuários',
        'email' => 'E-mail',
        'last_login' => 'Último login',
        'username' => 'Nome de usuário',
        'add_user' => 'Adicionar superusuário',
        'cancel' => 'Cancelar',
        'create' => 'Criar',
    ],
    'options' => [
        'features' => 'Controle de acesso a recursos',
        'feature_description' => 'Gerencie o disponível.',
        'manage_super' => 'Gerenciamento de superusuários',
        'manage_super_description' => 'Adicionar/remover superusuários.',
        'info' => 'Informações do sistema',
        'info_description' => 'Todas as informações sobre a configuração atual do sistema.',
    ],
    'info' => [
        'title' => 'Informações do sistema',
        'description' => 'Todas as informações sobre a configuração atual do sistema.',
        'cache' => 'Cache',
        'locale' => 'Local ativo',
        'environment' => 'Ambiente',
    ],
    'disabled_in_demo_mode' => 'Você não pode fazer isso no modo de demonstração!',
    'report_description' => 'Compartilhe essas informações para solução de problemas',
    'get_system_report' => 'Obtenha relatório do sistema',
    'system_environment' => 'Ambiente do sistema',
    'framework_version' => 'Versão da estrutura',
    'timezone' => 'Fuso horário',
    'debug_mode' => 'Modo de depuração',
    'debug_mode_off' => 'Modo de depuração desativado',
    'storage_dir_writable' => 'Diretório de armazenamento gravável',
    'cache_dir_writable' => 'Cache Dir gravável',
    'app_size' => 'Tamanho do aplicativo',
    'server_environment' => 'Ambiente de servidor',
    'php_version' => 'Versão PHP',
    'php_version_error' => 'PHP must be >= :version',
    'server_software' => 'Software de servidor',
    'server_os' => 'SO do servidor',
    'database' => 'Banco de dados',
    'ssl_installed' => 'SSL instalado',
    'cache_driver' => 'Driver de cache',
    'session_driver' => 'Driver de sessão',
    'queue_connection' => 'Conexão de fila',
    'mbstring_ext' => 'Extensão Mbstring',
    'openssl_ext' => 'Extensão OpenSSL',
    'pdo_ext' => 'Extensão DOP',
    'curl_ext' => 'Extensão CURL',
    'exif_ext' => 'Extensão Exif',
    'file_info_ext' => 'Informações do arquivo Ext.',
    'tokenizer_ext' => 'Extensão do tokenizador',
    'extra_stats' => 'Estatísticas extras',
    'installed_packages' => 'Pacotes instalados e seus números de versão',
    'extra_information' => 'Informações extras',
    'copy_report' => 'Copiar relatório',
    'package_name' => 'Nome do pacote',
    'dependency_name' => 'Nome da Dependência',
    'server_ip' => 'IP do servidor',
    'version' => 'Versão',
    'cms_version' => 'Versão do CMS',
    'imagick_or_gd_ext' => 'Ext Imagick/GD',
    'updater' => 'Atualizador do sistema',
    'zip' => 'Extensão zip',
    'iconv' => 'Extensão do ícone',
    'memory_limit' => 'Limite de memória',
    'max_execution_time' => 'Tempo(s) máximo(s) de execução',
    'allow_url_fopen_enabled' => 'permitir_url_fopen ativado',
    'cleanup' => [
        'title' => 'Sistema de limpeza',
        'description' => 'Limpe seus dados não utilizados no banco de dados',
        'table' => [
            'name' => 'Nome da tabela',
            'count' => 'Registros',
        ],
        'backup_alert' => 'Faça backup do seu banco de dados e dos arquivos de script antes da limpeza, isso limpará seus dados no banco de dados.',
        'messenger_choose_without_table' => 'Opte por ignorar as tabelas que não desejam ser limpas',
        'messenger_confirm_cleanup' => 'Tem certeza de que deseja realizar uma ação de limpeza do banco de dados, isso limpará seus dados no banco de dados?',
        'submit_button' => 'Limpar',
        'success_message' => 'Dados limpos com sucesso',
        'not_enabled_yet' => 'Este recurso ainda não está ativado. <br />Adicione em .env: <code>CMS_ENABLED_CLEANUP_DATABASE=true</code> para ativar este recurso!',
    ],
    'cache_too_large_alert' => 'Sua pasta de cache é muito grande ~:size. Vá para Administração da plataforma -> Gerenciamento de cache e limpe-o para reduzir o espaço em disco.',
];
