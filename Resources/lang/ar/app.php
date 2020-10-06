<?php

return [
    'organization' => [
        'title' => 'Organization Package',
        client=> [
            'add-title'=> '',
            'create-btn-title'=>'',
            'edit-title'=>'',
            'edit-btn-title'=>'',
            'fields'=>[
            'company_id'=>'',
            'group_id'=>'',
            'cust_type'=>'',
             'name'=>'',
            'contact_person'=>'',
              'phone'=>'',
              'fax'=>'',
               'pobox'=>'',
            'email'=>'',
             'country'=>'',
            'city'=>'',
            'address'=>'',
            'have_branch'=>'',
            'status'=>'',
            'begin_bal_credit'=>'',
             'begin_bal_debit'=>'',
            'curr_bal_credit'=>'',
             'curr_bal_debit'=>'',
            'amend_by'=>'',
             'amend_date'=>'',
            'acc_mgr'=>'',
            'account_code'=>'',
            'last_trns_date'=>'',
            'last_trns_value'=>'',
            'begin_bal_credit_fc'=>'',
             'begin_bal_debit_fc'=>'',
            'curr_bal_credit_fc'=>'',
             'curr_bal_debit_fc'=>'',
            'currency_code'=>'',
            'allowance_days'=>'',
            'mship_to_address'=>'',
            'mship_to_phone'=>'',
            'mship_to_fax'=>'',
            'mship_to_city'=>'',
            'mship_to_pobox'=>'',
            'online_cust'=>'',
            'analysis_code'=>'',
            'sprice_list'=>'',
            'vat_flag'=>'',
            ]
            ''=>'',
            ''=>'',
            ''=>'',
            ''=>'',
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
];
