<?php

return [
    'sessions' => 'セッション',
    'visitors' => '訪問者',
    'pageviews' => 'ページビュー',
    'bounce_rate' => '直帰率',
    'page_session' => 'ページ/セッション',
    'avg_duration' => '平均間隔',
    'percent_new_session' => '新しいセッションの割合',
    'new_users' => '新規訪問者',
    'visits' => '訪問',
    'views' => 'ビュー',
    'start_date_can_not_before_end_date' => 'Start date :start_date cannot be after end date :end_date',
    'not_set_up' => 'ウィジェットが設定されていません',
    'settings' => [
        'title' => 'Googleアナリティクス',
        'description' => 'Google Analyticsの認証情報を構成する',
        'analytics_property_id' => 'GA4のプロパティID',
        'analytics_property_id_description' => 'Google アナリティクス プロパティ ID (GA4)',
        'json_credential' => 'サービスアカウントの認証情報',
        'json_credential_description' => 'サービスアカウントの認証情報',
        'credential_is_not_valid' => 'Analytics credentials is not valid. Refer to the document here: :url',
        'property_id_is_invalid' => 'プロパティIDが無効です。これを確認してください: https://developers.google.com/analytics/devguides/reporting/data/v1/property-id',
        'wrong_configuration' => 'To view analytics, you need to get a Google Analytics Client ID and add it to your settings.<br />You also need JSON credentials.<br />Refer to the document here: :url',
        'google_analytics_information' => 'Google Analytics タグ ID を追加して Web サイトのトラフィックを追跡するには、「管理」→「設定」→「Web サイト追跡」にアクセスします。',
        'enable_dashboard_widgets' => 'ダッシュボードウィジェットを有効にする',
    ],
    'widget_analytics_page' => 'よくアクセスされるページ',
    'widget_analytics_browser' => 'トップブラウザ',
    'widget_analytics_referrer' => 'トップリファラー',
    'widget_analytics_general' => 'サイト分析',
    'missing_library_warning' => '分析プラグイン エラー: サードパーティ ライブラリがありません。 「composer update」を実行してインストールしてください。',
    'browser' => 'ブラウザ',
    'url' => 'URL',
];
