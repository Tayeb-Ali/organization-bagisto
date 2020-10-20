<?php

return [
    'organization' => [
        'title' => 'Organization Package',
    ],
    'client' => [
        'add-title' => 'Add client',
        'create-btn-title' => 'Create',
        'edit-title' => 'edit client',
        'edit-btn-title' => 'Add',
        'index' => 'Client',
        'general' => 'Client',
        'delete' => 'delete',
        'show' => 'show',
        'title' => 'client',
        'fields' => [
            'company_id' => 'Company',
            'group_id' => 'Group',
            'cust_type' => 'Customer Type',
            'name' => 'Name',
            'contact_person' => 'Contact person',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'pobox' => 'po-box',
            'email' => 'E-mail',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'have_branch' => 'Have branch',
            'status' => 'Status',
            'credit_limit' => 'credit limit',
            'begin_bal_credit' => '',
            'begin_bal_debit' => '',
            'curr_bal_credit' => '',
            'curr_bal_debit' => '',
            'last_trns_type' => '',
            'amend_by' => 'Amend by',
            'amend_date' => 'Amend date',
            'acc_mgr' => '',
            'account_code' => 'Account code',
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
            'analysis_code' => 'Analysis code',
            'sprice_list' => '',
            'vat_flag' => 'Vat flag',
        ],
        'update-success' => 'Client update successfully',
        'delete-success' => 'Client delete successfully',
        'add-success' => 'Client add successfully',
    ],

    'clientgroup' => [
        'add-title' => 'Add client group',
        'create-btn-title' => 'Create',
        'edit-title' => 'edit client',
        'edit-btn-title' => 'Add',
        'index' => 'Client group',
        'delete' => 'delete',
        'show' => 'show',
        'title' => 'Client group',
        'general' => 'General',
        'fields' =>
            [
                'company_id' => 'Company',
                'group_desc' => 'Group description',
                'account_code' => 'Account code',
                'status' => 'status',
                'amend_by' => 'Amend by',
                'amend_date' => 'Amend date',
            ],
        'update-success' => 'client group update successfully',
        'delete-success' => 'Client group delete successfully',
        'add-success' => 'Client group add successfully',
    ],

    'company' => [
        'create' => 'Create Company',
        'title' => 'Company',
        'index' => 'Company',
        'show' => 'Company',
        'general' => 'Company Form',
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
            'has_sub_company' => 'Accept adding sub-companies?',
            'gl_ac_levels' => 'gl_ac_levels',
            'gl_ac_level_1_len' => 'gl_ac_level_1_len',
            'gl_ac_level_2_len' => 'gl_ac_level_2_len',
            'gl_ac_level_3_len' => 'gl_ac_level_3_len',
            'gl_ac_level_4_len' => 'gl_ac_level_4_len',
            'gl_ac_level_5_len' => 'gl_ac_level_5_len',
            'gl_ac_level_6_len' => 'gl_ac_level_6_len',
            'gl_ac_level_7_len' => 'gl_ac_level_7_len',
            'gl_ac_level_8_len' => 'gl_ac_level_8_len',
            'gl_ac_level_9_len' => 'gl_ac_level_9_len',
            'gl_ac_level_0_len' => 'gl_ac_level_0_len',
            'gl_cc_levels' => 'gl_cc_levels',
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
            'fields.gl_cc_level_8_len' => 'fields.gl_cc_level_8_len',
            'cust_code_len' => 'cust_code_len',
            'supp_code_len' => 'supp_code_len',
            'bank_code_len' => '',
            'trea_code_len' => '',
            'stor_code_len' => '',
            'srep_code_len' => '',
            'expe_code_len' => '',
            'amend_by' => 'Amend by',
            'amend_date' => 'Amend date',
            'web' => 'web',
            'asset_code_len' => '',
            'locat_code_len' => '',
            'product_code_len' => '',
            'product_batch_len' => '',
            'users_code_len' => '',
            'sub_cust_code_len' => '',
            'fields.curr_fin_year' => 'fields.curr_fin_year',
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
        ],
        'update-success' => 'Company update successfully',
        'delete-success' => 'Company delete successfully',
        'add-success' => 'Company add successfully',
        'delete-error1' => 'Error, it is not possible to choose a main company',
        'delete-error2' => 'A sub-company cannot be deleted',
        'delete-error3' => 'The company cannot be deleted because there are branches',
        'delete-error4' => 'لا يمكن تعديل وضع الشركة لوجود افرع',
        'delete-failure' => 'Failure',
        'sub-company' => [
            'index' => 'Main Company',
            'sub-company' => 'Select Main Company',
            'company_parent_id' => 'Select Main Company',
            'delete-sub-company' => 'Select Main Company',
            'yes' => 'Accept',
            'no' => 'No',
            'edit-btn-title' => 'Save',
            'edit-title' => 'Sub Company',
        ]
    ],

    'companybranch' => [
        'create' => 'Create Company branch',
        'general' => '',
        'title' => 'Company branch',
        'index' => 'Company branch',
        'add-title' => 'Add Company branch',
        'create-btn-title' => 'Create',
        'edit-title' => 'Edit company branch',
        'edit-btn-title' => 'Edit',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'fields' => [
            'company_id' => 'Company',
            'short_desc' => 'Short description',
            'description' => 'Description',
            'branch_country' => 'Branch country',
            'branch_weight' => 'Branch weight',
            'branch_manager' => 'Branch manager',
            'currency' => 'Currency',
            'status' => 'Status',
            'amend_by' => 'Amend by',
            'amend_date' => 'Amend date',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'E-mail',
            'cost_center' => 'Cost center',
            'ship_to_address' => 'Ship address',
            'ship_to_phone' => 'Ship  phone',
            'ship_to_fax' => 'Ship Fax',
            'ship_to_city' => 'Ship city',
            'ship_to_country' => 'Ship country',
            'bill_to_phone' => 'Bill phone',
            'bill_to_address' => 'Bill address',
            'bill_to_fax' => 'Bill fax',
            'bill_to_city' => 'Bill city',
            'bill_to_country' => 'Bill country'
        ],
        'update-success' => 'Company branch update successfully',
        'delete-success' => 'Company branch delete successfully',
        'delete-failure' => 'Failure',
        'add-success' => 'Company branch add successfully',
    ],

    'supplier' => [
        'create' => '',
        'general' => '',
        'index' => 'Supplier',
        'title' => 'Supplier',
        'add-title' => 'Add supplier',
        'create-btn-title' => 'Create',
        'edit-title' => 'Edit supplier',
        'edit-btn-title' => 'Edit',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'fields' => [
            'company_id' => 'Company',
            'group_id' => 'Group',
            'supp_type' => 'supplier Type',
            'name' => 'Name',
            'contact_person' => 'Contact person',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'pobox' => 'pobox',
            'email' => 'E-mail',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'have_branch' => 'Have branch',
            'status' => 'Status',
            'credit_limit' => 'Credit limit',
            'begin_bal_credit' => 'Begin billing credit',
            'begin_bal_debit' => 'Begin billing debit',
            'curr_bal_credit' => '',
            'curr_bal_debit' => '',
            'amend_by' => 'Amend by',
            'amend_date' => 'Amend date',
            'account_code' => 'Account code',
            'last_trns_date' => '',
            'last_trns_value' => '',
            'last_trns_type' => '',
            'currency_code' => 'Currency code',
            'zip_code' => 'Zip code',
            'begin_bal_credit_fc' => '',
            'curr_bal_credit_fc' => '',
            'begin_bal_debit_fc' => '',
            'curr_bal_debit_fc' => '',
            'allowance_days' => '',
            'analysis_code' => 'Analysis code',
            'active_flag' => 'Active flag',
            'vat_flag' => 'Vat flag',
            'mship_to_address' => '',
            'mship_to_phone' => '',
            'mship_to_fax' => '',
            'mship_to_city' => '',
            'mship_to_pobox' => '',
            'billing_contact_person' => 'Billing contact person'],
        'update-success' => 'Supplier update successfully',
        'delete-success' => 'Supplier delete successfully',
        'add-success' => 'Supplier add successfully',
    ],

    'suppliergroup' => [
        'create' => 'Create supplier group',
        'general' => 'general',
        'title' => 'Supplier group',
        'index' => 'Supplier group',
        'add-title' => 'Add supplier group',
        'create-btn-title' => 'Create',
        'edit-title' => 'Edit supplier group',
        'edit-btn-title' => 'Edit',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'fields' => [
            'company_id' => 'Company',
            'group_desc' => 'Group description',
            'account_code' => 'Account_code',
            'status' => 'Status',
            'amend_by' => 'Amend by',
            'amend_date' => 'Amend date'
        ],

        'update-success' => 'Supplier group update successfully',
        'delete-success' => 'Supplier group delete successfully',
        'add-success' => 'Supplier group add successfully',

    ],

    'employ' => [
        'add-title' => 'Add employ',
        'create-btn-title' => 'Create',
        'edit-title' => 'edit employ',
        'edit-btn-title' => 'Add',
        'index' => 'Employ',
        'delete' => 'delete',
        'show' => 'show',
        'title' => 'Employ',
        'general' => 'Employ',
        'fields' => [
            'company_id' => 'Company Name',
            'group_id' => 'Group',
            'cust_type' => 'Customer Type',
            'name' => 'Name',
            'contact_person' => 'Contact person',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'pobox' => 'po-box',
            'email' => 'E-mail',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'have_branch' => 'Have branch',
            'status' => 'Status',
            'begin_bal_credit' => 'begin_bal_credit',
            'begin_bal_debit' => 'begin_bal_debit',
            'curr_bal_credit' => 'curr_bal_credit',
            'curr_bal_debit' => 'curr_bal_debit',
            'last_trns_type' => 'last_trns_type',
            'credit_limit' => 'Credit limit',
            'amend_by' => 'Amend by',
            'amend_date' => 'Amend date',
            'acc_mgr' => 'acc_mgr',
            'account_code' => 'Account code',
            'last_trns_date' => 'last_trns_date',
            'last_trns_value' => 'last_trns_value',
            'begin_bal_credit_fc' => 'begin_bal_credit_fc',
            'begin_bal_debit_fc' => 'begin_bal_debit_fc',
            'curr_bal_credit_fc' => 'curr_bal_credit_fc',
            'curr_bal_debit_fc' => 'curr_bal_debit_fc',
            'currency_code' => 'Currency code',
            'allowance_days' => 'allowance_days',
            'mship_to_address' => 'mship_to_address',
            'mship_to_phone' => 'mship_to_phone',
            'mship_to_fax' => 'mship_to_fax',
            'mship_to_city' => 'mship_to_city',
            'mship_to_pobox' => 'mship_to_pobox',
            'online_cust' => 'online_cust',
            'analysis_code' => 'Analysis code',
            'sprice_list' => 'sprice_list',
            'vat_flag' => 'Vat flag',
        ],
        'update-success' => 'Employ update successfully',
        'delete-success' => 'Employ delete successfully',
        'add-success' => 'Employ add successfully',
    ],

    'employ-group' => [
        'add-title' => 'Add employ group',
        'create-btn-title' => 'Create',
        'edit-title' => 'edit employ',
        'edit-btn-title' => 'save',
        'index' => 'Employ group',
        'delete' => 'delete',
        'show' => 'show',
        'title' => 'Employ group',
        'general' => 'General',
        'fields' =>
            [
                'company_id' => 'Company',
                'group_desc' => 'Group description',
                'account_code' => 'Account code',
                'status' => 'status',
                'amend_by' => 'Amend by',
                'amend_date' => 'Amend date',
            ],
        'update-success' => 'Employ group update successfully',
        'delete-success' => 'Employ group delete successfully',
        'add-success' => 'Employ group add successfully',
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
            'search' => 'Search',
            'items-per-page' => 'Items per page'
        ]
    ]
];
