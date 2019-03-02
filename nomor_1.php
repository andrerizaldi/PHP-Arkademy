<?php

    function getidentity($data = array()){
        return json_encode($data,200);
    }

    $data = array(
        'name'=>'Andre Rizaldi',
        'address' => 'Citra Grand City',
        'hobbies' => array(
            'Tennis','Coding',
        ),
        'is_married' => false,
        'school' => array(
            'highSchool' => 'SMAN 15 Palaembang',
            'university' => 'Politeknik Negeri Sriwijaya'
        ),
        'skills' => array(
            [
                'PHP'=>'Laravel',
                'Javascript'=>'ReactJs',
            ]
        ),
    );

    echo getidentity($data);