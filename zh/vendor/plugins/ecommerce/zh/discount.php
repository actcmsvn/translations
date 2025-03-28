<?php

return [
    'name' => '折扣',
    'create' => '创建折扣',
    'edit' => '编辑折扣',
    'invalid_coupon' => '此优惠券无效或已过期！',
    'cannot_use_same_time_with_other_discount_program' => '不能与其他折扣活动同时使用此优惠券！',
    'not_used' => '这个优惠券还没有使用！',
    'detail' => '细节',
    'used' => '已使用',
    'intro' => [
        'title' => '管理折扣/优惠券代码',
        'description' => '创建优惠券代码或促销活动以推广您的产品。',
        'button_text' => '创建折扣',
    ],
    'expired' => '过期',
    'discount_promotion' => '折扣促销',
    'can' => '可以',
    'cannot' => '不能',
    'use_with_promotion' => '可用于促销',
    'create_discount_validate_title_required_if' => '请输入促销名称',
    'create_discount_validate_code_required_if' => '请输入促销代码',
    'create_discount_validate_value_required' => '金额必须大于0',
    'create_discount_validate_target_required' => '没有选择要推广的对象',
    'enums' => [
        'type-options' => [
            'amount' => '金额 - 固定',
            'percentage' => '折扣%',
            'shipping' => '免运费',
            'same-price' => '相同价格',
        ],
        'types' => [
            'coupon' => '优惠券',
            'promotion' => '促销',
        ],
        'targets' => [
            'all-orders' => '所有订单',
            'customer' => '客户',
            'amount-minimum-order' => '最低订单金额',
            'product-variant' => '产品变体',
            'group-products' => '产品系列',
            'specific-product' => '特定产品',
            'products-by-category' => '产品按类别',
        ],
    ],
    'discount' => '折扣',
    'create_coupon_code' => '创建优惠券代码',
    'create_discount_promotion' => '创建折扣促销',
    'generate_coupon_code' => '生成优惠券代码',
    'customers_will_enter_this_coupon_code_when_they_checkout' => '顾客在结账时将输入此优惠码',
    'select_type_of_discount' => '选择折扣类型',
    'coupon_code' => '优惠码',
    'promotion' => '促销',
    'can_be_used_with_promotion' => '可以与促销一起使用吗？',
    'can_be_used_with_flash_sale' => '可以用于闪购吗？',
    'can_be_used_with_flash_sale_help' => '允许客户将优惠券应用于已经在闪购中的商品，从而实现叠加折扣。',
    'unlimited_coupon' => '无限优惠券？',
    'enter_number' => '输入数字',
    'coupon_type' => '优惠券类型',
    'percentage_discount' => '百分比折扣 (%)',
    'free_shipping' => '免运费',
    'same_price' => '相同价格',
    'apply_for' => '申请',
    'all_orders' => '所有订单',
    'order_amount_from' => '订单金额来自',
    'product_collection' => '产品系列',
    'product_category' => '产品类别',
    'product' => '产品',
    'customer' => '客户',
    'variant' => '变体',
    'search_product' => '搜索产品',
    'no_products_found' => '未找到产品！',
    'search_customer' => '搜索客户',
    'no_customer_found' => '未找到客户！',
    'one_time_per_order' => '每个订单一次',
    'one_time_per_product_in_cart' => '每个购物车中的产品只能一次',
    'number_of_products' => '所需申请的产品数量',
    'selected_products' => '选定的产品',
    'selected_customers' => '选定的客户',
    'time' => '时间',
    'start_date' => '开始日期',
    'end_date' => '结束日期',
    'never_expired' => '从未过期？',
    'save' => '保存',
    'enter_promotion_name' => '输入促销名称',
    'enter_coupon_name' => '输入优惠券名称',
    'cancel' => '取消',
    'is' => '是',
    'when_shipping_fee_less_than' => '当运费少于',
    'minimum_order_amount_error' => '您未达到使用优惠券的最低金额，您必须再添加 :add_more 件商品到您的购物车。',
    'once_per_customer' => '每位客户一次',
    'you_need_login_to_use_coupon_code' => '您需要登录才能使用此优惠码',
    'you_used_coupon_code' => '您已经使用过此优惠券代码',
    'customer_used_coupon_code' => '使用过此折扣码的客户',
    'apply_via_url' => '通过URL申请？',
    'apply_via_url_description' => '此设置将在客户访问带有参数“?coupon=code”的URL时应用优惠券代码。',
    'display_at_checkout' => '在结账页面显示优惠券代码？',
    'display_at_checkout_description' => '优惠券代码列表将在结账页面显示，客户可以选择应用。',
    'description' => '描述',
    'description_placeholder' => '折扣计划的简短描述',
    'cannot_use_same_time_with_flash_sale' => '此优惠券不能与闪购商品如 :product_name 一起使用。请从购物车中移除该商品或选择其他优惠券。',
];
