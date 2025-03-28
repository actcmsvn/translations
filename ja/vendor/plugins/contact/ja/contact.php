<?php

return [
    'name' => '連絡先',
    'contact_form' => 'お問い合わせフォーム',
    'menu' => '接触',
    'edit' => '連絡先を表示',
    'tables' => [
        'phone' => '電話',
        'email' => '電子メール',
        'full_name' => 'フルネーム',
        'time' => '時間',
        'address' => '住所',
        'subject' => '主題',
        'content' => 'コンテンツ',
    ],
    'contact_information' => '連絡先',
    'replies' => '返信',
    'email' => [
        'header' => '電子メール',
        'title' => 'サイトからの新しい連絡先',
    ],
    'form' => [
        'name' => [
            'required' => '名前は必須です',
        ],
        'email' => [
            'required' => 'メールアドレスは必須です',
            'email' => 'メールアドレスが無効です',
        ],
        'content' => [
            'required' => '内容は必須です',
        ],
    ],
    'contact_sent_from' => 'この連絡先情報は以下から送信されます',
    'sender' => '送信者',
    'sender_email' => '電子メール',
    'sender_address' => '住所',
    'sender_phone' => '電話',
    'message_content' => 'メッセージ内容',
    'sent_from' => 'から送信されたメール',
    'form_name' => '名前',
    'form_email' => '電子メール',
    'form_address' => '住所',
    'form_subject' => '主題',
    'form_phone' => '電話',
    'form_message' => 'メッセージ',
    'form_content' => 'コンテンツ',
    'required_field' => '(<span style="color: red">*</span>) のフィールドは必須です。',
    'send_btn' => 'メッセージを送信する',
    'new_msg_notice' => '<span class="bold">:count</span> 件の新しいメッセージがあります',
    'view_all' => 'すべて見る',
    'statuses' => [
        'read' => '読む',
        'unread' => '未読',
    ],
    'phone' => '電話',
    'address' => '住所',
    'message' => 'メッセージ',
    'settings' => [
        'email' => [
            'title' => '接触',
            'description' => '連絡先メール設定',
            'templates' => [
                'notice_title' => '管理者に通知を送信する',
                'notice_description' => '新しい連絡先の送信を受信したときに管理者に通知するための電子メール テンプレート',
                'subject' => '{{ site_title }} のお問い合わせフォームからメッセージが送信されました',
                'contact_name' => '連絡先名',
                'contact_subject' => '連絡先の件名',
                'contact_email' => '連絡先メールアドレス',
                'contact_phone' => '連絡先電話番号',
                'contact_address' => '連絡先',
                'contact_content' => 'お問い合わせ内容',
                'contact_custom_fields' => 'カスタムフィールド',
                'sender_confirmation_title' => '送信者に確認を送信する',
                'sender_confirmation_description' => 'メッセージが正常に送信されたことを送信者に確認するためのメール テンプレート',
                'sender_confirmation_subject' => 'お問い合わせいただきありがとうございます。',
            ],
        ],
        'title' => '接触',
        'description' => '連絡先プラグインの設定',
        'blacklist_keywords' => 'ブラックリストに登録されたキーワード',
        'blacklist_keywords_placeholder' => 'キーワード...',
        'blacklist_keywords_helper' => 'これらのキーワードがコンテンツ フィールド (カンマで区切られている) で見つかった場合は、連絡先リクエストをブラックリストに追加します。',
        'enable_math_captcha_in_contact_form' => '問い合わせフォームの数学 CAPTCHA を有効にする',
        'receiver_emails' => '受信者のメール',
        'receiver_emails_placeholder' => '複数の電子メール アドレスを入力できます (カンマで区切ります)。',
        'receiver_emails_helper' => 'お問い合わせフォームからのメールはこれらのアドレスに送信されます。管理者の電子メール アドレスに電子メールを送信するには、このフィールドを空白のままにします。',
    ],
    'no_reply' => 'まだ返事がありません!',
    'reply' => '返事',
    'send' => '送信',
    'shortcode_name' => 'お問い合わせフォーム',
    'shortcode_description' => 'お問い合わせフォームを追加する',
    'shortcode_content_description' => 'ショートコード [contact-form][/contact-form] をエディターに追加します',
    'message_sent_success' => 'メッセージは正常に送信されました。',
    'dropdown_show_label' => '連絡先を表示',
    'display_fields' => '表示フィールド',
    'mandatory_fields' => '必須フィールド',
    'mandatory_fields_helper_text' => '空白のままにすると、これらのフィールドはデフォルト設定で検証されます。名前とメッセージは常に必須です。',
    'custom_field' => [
        'name' => 'カスタムフィールド',
        'create' => 'カスタムフィールドの作成',
        'type' => 'タイプ',
        'required' => '必須',
        'placeholder' => 'プレースホルダー',
        'order' => '注文',
        'options' => 'オプション',
        'option' => [
            'label' => 'ラベル',
            'value' => '価値',
            'add' => '新しいオプションを追加',
        ],
        'enums' => [
            'types' => [
                'text' => '文章',
                'number' => '番号',
                'dropdown' => '落ちる',
                'checkbox' => 'チェックボックス',
                'radio' => '無線',
                'textarea' => 'テキストエリア',
                'date' => '日付',
                'datetime' => '日付時刻',
                'time' => '時間',
            ],
        ],
    ],
];
