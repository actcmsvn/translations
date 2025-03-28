<?php

return [
    'name' => 'Saques',
    'edit' => 'Editar saque',
    'statuses' => [
        'canceled' => 'Cancelado',
        'completed' => 'Finalizado',
        'pending' => 'Pendente',
        'processing' => 'Processando',
        'refused' => 'Recusado',
    ],
    'amount' => 'Valor',
    'customer' => 'Cliente',
    'vendor' => 'Vendedor',
    'currency' => 'Moeda',
    'forms' => [
        'amount' => 'Valor',
        'amount_placeholder' => 'Valor para saque',
        'amount_with_balance' => 'Valor (saldo: :balance)',
        'fee' => 'Taxa',
        'fee_helper' => 'Voçê pagará a taxa de :fee ao realizar o saque',
        'transaction_id' => 'Transação ID',
        'transaction_id_placeholder' => 'Transação ID',
        'payment_channel' => 'Canal de Pagamento',
        'payment_channel_placeholder' => 'Canal de Pagamento',
        'pending_status_helper' => 'Para finalizar saque, favor atualizar status apos conclusão de processamento',
    ],
    'new_withdrawal_request_notifications' => [
        'new_withdrawal_request' => 'Nova solicitação de saque',
        'view' => 'Visualizar',
        'description' => ':customer has requested a withdrawal.',
    ],
    'invoice' => [
        'invoice_template_label' => 'Fatura de pagamento',
        'title' => 'Fatura de pagamento',
        'created_at' => 'Publicado',
        'customer_name' => 'projeto de lei para',
        'payment_method' => 'Método de pagamento',
        'earnings' => 'Ganhos',
        'fee' => 'Taxa de retirada',
        'total' => 'Total',
        'total_due' => 'Valor total devido',
        'notes' => 'Notas',
        'payment_instructions' => 'Instruções de pagamento',
        'bank_name' => 'Nome do banco',
        'bank_account_name' => 'Nome da conta',
        'bank_account_number' => 'Número de conta',
        'variables' => [
            'company_logo' => 'Logotipo da empresa',
            'company_name' => 'Nome da empresa',
            'company_address' => 'Endereço da empresa',
            'company_state' => 'Estado da empresa',
            'company_city' => 'Cidade da empresa',
            'company_zipcode' => 'CEP da empresa',
            'company_phone' => 'Telefone da empresa',
            'company_email' => 'E-mail da empresa',
            'company_tax_id' => 'ID fiscal da empresa',
            'withdrawal_id' => 'ID de retirada',
            'withdrawal_created_at' => 'Data de criação do saque',
            'withdrawal_customer_name' => 'Nome do cliente',
            'withdrawal_payment_channel' => 'Canal de pagamento',
            'withdrawal_amount' => 'Valor da retirada',
            'withdrawal_fee' => 'Taxa de retirada',
            'withdrawal_fee_percentage' => 'Porcentagem da taxa de retirada',
            'withdrawal_status' => 'Status de retirada',
            'withdrawal_description' => 'Descrição da retirada',
            'withdrawal_bank_info_name' => 'Nome do banco',
            'withdrawal_bank_info_number' => 'Número da conta bancária',
            'withdrawal_bank_info_full_name' => 'Nome do titular da conta',
        ],
    ],
];
