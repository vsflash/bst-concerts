<?php


class Model_News extends Model {
    public function get_data() {
        return array(
            array(
                'title' => 'First',
                'date' => '22.05.1985',
                'text' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
            ),
            array(
                'title' => '2012',
                'date' => '15.12.2008',
                'text' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
            ),
                //TODO
        );
    }
}
