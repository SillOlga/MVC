<?php

class CModel {
    public function GetData(){
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site',
            'DATE' => '22.06.2020',
            'AUTHOR' => 'VolDeMort',
            'IMAGE' => 'https://mirpozitiva.ru/wp-content/uploads/2019/11/1472042585_08.jpg',
            'TEXT' => 'Nulla morbi, ad pur Portwisu morbsed id, arcu vestibulum dolor conmtum ac egestas lorem elit libero.'
            
        );
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site NEW',
            'DATE' => '21.10.2021',
            'AUTHOR' => 'Igor',
            'IMAGE' => 'https://mirpozitiva.ru/wp-content/uploads/2019/11/1472042908_28.jpg',
            'TEXT' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus harum voluptas esse vel cumque culpa.'
            
        );
        return $arrayResult;
    }
}
    