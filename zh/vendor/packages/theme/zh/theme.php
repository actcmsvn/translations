<?php

return [
    'name' => '主题',
    'theme' => '主题',
    'author' => '作者',
    'version' => '版本',
    'active_success' => '成功激活主题 :name!',
    'active' => '活跃',
    'activated' => '激活',
    'appearance' => '外观',
    'theme_options' => '主题选项',
    'save_changes' => '保存更改',
    'custom_css' => '自定义CSS',
    'custom_js' => '自定义JS',
    'custom_header_js' => 'Header JS',
    'custom_header_js_placeholder' => '在页面的头部添加JS，将其包裹在&#x3C;script&#x3E;&#x3C;/script&#x3E;中',
    'custom_body_js' => '身体 JS',
    'custom_body_js_placeholder' => '在页面主体中使用JS，将其包裹在&#x3C;script&#x3E;&#x3C;/script&#x3E;中',
    'custom_footer_js' => '页脚 JS',
    'custom_footer_js_placeholder' => '页面底部的JS，将其包裹在&#x3C;script&#x3E;&#x3C;/script&#x3E;内',
    'custom_html' => '自定义HTML',
    'custom_header_html' => '标题 HTML',
    'custom_header_html_placeholder' => '页面头部的HTML，没有特殊标签：script、style、iframe...',
    'custom_body_html' => '主体 HTML',
    'custom_body_html_placeholder' => '页面主体中的HTML，没有特殊标签：script、style、iframe...',
    'custom_footer_html' => '页脚 HTML',
    'custom_footer_html_placeholder' => '页面底部的HTML，没有特殊标签：script、style、iframe...',
    'remove_theme_success' => '成功移除主题！',
    'theme_is_not_existed' => '这个主题不存在！',
    'remove' => '移除',
    'remove_theme' => '移除主题',
    'remove_theme_confirm_message' => '你真的想要删除这个主题吗？',
    'remove_theme_confirm_yes' => '是的，去掉它！',
    'total_themes' => '总主题',
    'add_new' => '添加新内容',
    'theme_activated_already' => '主题 ":name" 已经激活！',
    'theme_inherit_not_found' => '继承主题 ":name" 未找到!',
    'missing_json_file' => '缺少文件 theme.json!',
    'theme_invalid' => '主题有效！',
    'published_assets_success' => '成功发布:themes的资产!',
    'cannot_remove_theme' => '无法删除已激活的主题，请在删除“:name”之前激活另一个主题！',
    'cannot_remove_inherit_theme' => '无法删除主题 ":name"，因为它是当前主题继承的！',
    'theme_deleted' => '主题 ":name" 已被销毁。',
    'removed_assets' => '成功移除主题 :name 的资产！',
    'go_to_dashboard' => '去仪表板',
    'theme_option_general' => '一般',
    'theme_option_general_description' => '常规设置',
    'theme_option_seo_open_graph_image' => 'SEO默认Open Graph图像',
    'theme_option_seo_index' => 'SEO索引',
    'theme_option_seo_index_helper' => '当选择“No Index”时，搜索引擎被阻止索引该网站，从而防止其出现在搜索引擎结果中。',
    'seo_index_options' => [
        'index' => '索引',
        'no_index' => '无索引',
    ],
    'theme_option_logo' => '标志',
    'theme_option_favicon' => '网站图标',
    'theme_option_breadcrumb' => '面包屑',
    'folder_is_not_writeable' => '无法写入文件！文件夹 :name 不能写入。请更改权限以使其可写！',
    'breadcrumb_enabled' => '启用面包屑导航？',
    'themes' => '主题',
    'child_of' => '":theme"的孩子',
    'typography' => '排版',
    'robots_txt_editor' => 'Robots.txt 编辑器',
    'robots_txt_content' => 'Robots.txt 内容',
    'robots_txt_not_writable' => '无法写入 robots.txt 文件！请更改权限以使其可写！(您的 robots.txt 文件位于 :path)',
    'robots_txt_content_helper' => '保存后，您可以在这里检查您的 robots.txt：:link',
    'robots_txt_file' => '上传robots.txt文件',
    'robots_txt_file_helper' => '如果您想上传 robots.txt 文件，请在此选择。',
    'email_template_logo_helper_text' => '如果不设置，它将从主题选项中的徽标获取，路径为 管理 -> 外观 -> 主题选项 -> 徽标。',
    'settings' => [
        'website_tracking' => [
            'title' => '网站追踪',
            'description' => '配置网站跟踪',
            'google_tag_id' => '谷歌标签ID',
            'google_tag_id_placeholder' => '示例：G-123ABC4567',
            'google_tag_code' => '谷歌标签代码',
        ],
    ],
    'term_and_privacy_policy_url' => '条款和隐私政策网址',
    'site_title_separator' => 'SEO标题分隔符',
];
