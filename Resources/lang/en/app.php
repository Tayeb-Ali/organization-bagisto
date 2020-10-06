<?php

return [
    'organization' => [
        'title' => 'Organization Package',
        'client' => [
            'add-title' => 'Add client',
            'create-btn-title' => 'Create',
            'edit-title' => 'edit client',
            'edit-btn-title' => 'Add',
            'index' => 'index',
            'delete' => 'delete',
            'show' => 'show',
            'title' => 'client',
            'fields' => [
                'company_id' => 'company',
                'group_id' => 'group',
                'cust_type' => '',
                'name' => 'name',
                'contact_person' => '',
                'phone' => '',
                'fax' => '',
                'pobox' => '',
                'email' => '',
                'country' => '',
                'city' => '',
                'address' => '',
                'have_branch' => '',
                'status' => '',
                'begin_bal_credit' => '',
                'begin_bal_debit' => '',
                'curr_bal_credit' => '',
                'curr_bal_debit' => '',
                'amend_by' => '',
                'amend_date' => '',
                'acc_mgr' => '',
                'account_code' => '',
                'last_trns_date' => '',
                'last_trns_value' => '',
                'begin_bal_credit_fc' => '',
                'begin_bal_debit_fc' => '',
                'curr_bal_credit_fc' => '',
                'curr_bal_debit_fc' => '',
                'currency_code' => '',
                'allowance_days' => '',
                'mship_to_address' => '',
                'mship_to_phone' => '',
                'mship_to_fax' => '',
                'mship_to_city' => '',
                'mship_to_pobox' => '',
                'online_cust' => '',
                'analysis_code' => '',
                'sprice_list' => '',
                'vat_flag' => '',
            ],
        ],
        'clientgroup' => [
            'add-title' => '',
            'create-btn-title' => 'Create',
            'general' => '',
            'fields' =>
                [
                    'company_id' => '',
                    'group_desc' => '',
                    'account_code' => '',
                    'status' => '',
                    'amend_by' => '',
                    'amend_date' => '',
                ],
            'show' => '',
            'title' => '',
        ],
        'company' => [
            'create' => 'Create Company',
            'title' => 'Company',
            'add-title' => 'Add Company',
            'create-btn-title' => 'Create',
            'edit-title' => 'edit Company',
            'edit-btn-title' => 'edit',
            'edit' => 'Edit',
            'delete' => 'delete',
            'fields' => [
                'description' => 'Description',
                'currency' => 'currency',
                'status' => 'status',
                'gl_ac_levels' => '',
                'gl_ac_level_1_len' => '',
                'gl_ac_level_2_len' => '',
                'gl_ac_level_3_len' => '',
                'gl_ac_level_4_len' => '',
                'gl_ac_level_5_len' => '',
                'gl_ac_level_6_len' => '',
                'gl_ac_level_7_len' => '',
                'gl_ac_level_8_len' => '',
                'gl_ac_level_9_len' => '',
                'gl_ac_level_0_len' => '',
                'gl_cc_levels' => '',
                'gl_cc_level_0_len' => '',
                'gl_cc_level_1_len' => '',
                'gl_cc_level_2_len' => '',
                'gl_cc_level_3_len' => '',
                'gl_cc_level_4_len' => '',
                'gl_cc_level_5_len' => '',
                'gl_cc_level_6_len' => '',
                'gl_cc_level_7_len' => '',
                'gl_cc_level_9_len' => '',
                'gl_cc_level_10_len' => '',
                'cust_code_len' => '',
                'supp_code_len' => '',
                'bank_code_len' => '',
                'trea_code_len' => '',
                'stor_code_len' => '',
                'srep_code_len' => '',
                'expe_code_len' => '',
                'amend_by' => 'amend_by',
                'amend_date' => 'amend_date',
                'web' => 'web',
                'asset_code_len' => '',
                'locat_code_len' => '',
                'product_code_len' => '',
                'product_batch_len' => '',
                'users_code_len' => '',
                'sub_cust_code_len' => '',
                'sub_store_code_len' => '',
                'company_type' => '',
                'local_partner_percent' => '',
                'zakah_tax_formula' => 'zakah tax formula',
                'cust_code_type' => '',
                'supp_code_type' => '',
                'bank_code_type' => 'bank code type',
                'trea_code_type' => '',
                'stor_code_type' => '',
                'srep_code_type' => '',
                'expe_code_type' => '',
                'asset_code_type' => '',
                'locat_code_type' => '',
                'product_code_type' => 'product code type',
                'product_batch_type' => 'product batch type',
                'users_code_type' => 'users code type',
                'sub_cust_code_type' => '',
                'sub_store_code_type' => '',
                'short_desc' => 'Short description'
            ]
        ],
        'companybranch' => [
            'create' => '',
            'general' => '',
            'title' => '',
            'add-title' => '',
            'create-btn-title' => 'Create',
            'edit-title' => '',
            'edit-btn-title' => '',
            'edit' => '',
            'delete' => '',
            'fields' => [
                'company_id' => '',
                'short_desc' => '',
                'description' => '',
                'branch_country' => '',
                'branch_weight' => '',
                'branch_manager' => '',
                'currency' => '',
                'status' => '',
                'amend_by' => '',
                'amend_date' => '',
                'phone' => '',
                'fax' => '',
                'email' => '',
                'cost_center' => '',
                'ship_to_address' => '',
                'ship_to_phone' => '',
                'ship_to_fax' => '',
                'ship_to_city' => '',
                'ship_to_country' => '',
                'bill_to_phone' => '',
                'bill_to_address' => '',
                'bill_to_fax' => '',
                'bill_to_city' => '',
                'bill_to_country' => ''
            ]
        ],
        'supplier' => [
            'create' => '',
            'general' => '',
            'title' => '',
            'add-title' => '',
            'create-btn-title' => 'Create',
            'edit-title' => '',
            'edit-btn-title' => '',
            'edit' => '',
            'delete' => '',
            'fields' => [
                'company_id' => '',
                'group_id' => '',
                'supp_type' => '',
                'name' => '',
                'contact_person' => '',
                'phone' => '',
                'fax' => '',
                'pobox' => '',
                'email' => '',
                'country' => '',
                'city' => '',
                'address' => '',
                'have_branch' => '',
                'status' => '',
                'credit_limit' => '',
                'begin_bal_credit' => '',
                'begin_bal_debit' => '',
                'curr_bal_credit' => '',
                'curr_bal_debit' => '',
                'amend_by' => '',
                'amend_date' => '',
                'account_code' => '',
                'last_trns_date' => '',
                'last_trns_value' => '',
                'last_trns_type' => '',
                'currency_code' => '',
                'zip_code' => '',
                'begin_bal_credit_fc' => '',
                'curr_bal_credit_fc' => '',
                'begin_bal_debit_fc' => '',
                'curr_bal_debit_fc' => '',
                'allowance_days' => '',
                'analysis_code' => '',
                'active_flag' => '',
                'vat_flag' => '',
                'mship_to_address' => '',
                'mship_to_phone' => '',
                'mship_to_fax' => '',
                'mship_to_city' => '',
                'mship_to_pobox' => '',
                'billing_contact_person' => '']
        ],
        'suppliergroup' => [
            'create' => '',
            'general' => '',
            'title' => '',
            'add-title' => '',
            'create-btn-title' => 'Create',
            'edit-title' => '',
            'edit-btn-title' => '',
            'edit' => '',
            'delete' => '',
            'fields' => [
                'company_id' => '',
                'group_desc' => '',
                'account_code' => '',
                'status' => '',
                'amend_by' => '',
                'amend_date' => ''
            ]
        ]
    ],

    'admin' => [
        'main' => 'Organization',
        'index' => 'Organization'
    ],

    'acl' => [
        'admin' => [
            'main' => 'Organization',
            'index' => 'Organization'
        ],
    ],

    'widgets' => [
        'dashboard' => [
            'mainwidget' => 'Main Organization Widget'
        ]
    ],

    'ui' => [
        'datagrid' => [
            'search' => '',
            'items-per-page' => '']
    ]
];
