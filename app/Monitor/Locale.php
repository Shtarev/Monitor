<?php

namespace App\Monitor;

class Locale
{

    public $locale = array();
    
    public function __construct($locale) {
        if($locale == 'ru'){}
		elseif($locale == 'de'){}
		else {$locale = 'en';}

        $this->$locale();
    }
    
    public function ru()
    {
        $this->locale[0]='Реальный IP клиента: ';
        $this->locale[1]=' Клиент не использует Proxy Server';
        $this->locale[2]='Статистика посещаемости';
        $this->locale[3]='Невозможно узнать IP клиента';
        $this->locale[4]='Пришёл с адреса: ';
        $this->locale[5]='Клиент зашёл с неизвестного адреса';
        $this->locale[6]='Посетил страницу: ';
        $this->locale[7]=' * время посещения: ';
        $this->locale[8]='Всего посещений: ';
        $this->locale[9]='Даты посещений  по месяцам: ';
        $this->locale[10]='Посещений на дату ';
        $this->locale[11]=' чел.';
        $this->locale[12]='Клиент № ';
        $this->locale[13]='Данные IP клиента: ';
        $this->locale[14]='Удалить';
    
    public function de()
    {
        $this->locale[0]='Echter User-IP : ';
        $this->locale[1]=' User verwendet Proxy Server nich';
        $this->locale[2]='Userstatistik';
        $this->locale[3]='User-IP ist unbekannt';
        $this->locale[4]='Ist von der Adresse: ';
        $this->locale[5]='User ist von der unbekannten Adresse gekommen';
        $this->locale[6]='Hat die Seite besucht: ';
        $this->locale[7]=' * die Zeit des Besuches: ';
        $this->locale[8]='Besuche insgesamt: ';
        $this->locale[9]='Besuchendate nach den Monaten: ';
        $this->locale[10]='Besuche auf Datum ';
        $this->locale[11]=' Mensch(en)';
        $this->locale[12]='User № ';
        $this->locale[13]='User IP-Daten ';
        $this->locale[14]='Löschen';
    }
    
    public function en()
    {
        $this->locale[0]='Real User-IP : ';
        $this->locale[1]=' User does not use Proxy Server';
        $this->locale[2]='Statistics of attendance';
        $this->locale[3]='User-IP is unknown';
        $this->locale[4]='Has come from the address: ';
        $this->locale[5]='User has come from the unknown address';
        $this->locale[6]='Has visited page: ';
        $this->locale[7]=' * Visiting time: ';
        $this->locale[8]='In total visitings: ';
        $this->locale[9]='Dates of visitings on months: ';
        $this->locale[10]='Visitings for date ';
        $this->locale[11]='people';
        $this->locale[12]='User № ';
        $this->locale[13]='User IP-Data ';
        $this->locale[14]='Delete';
    }
}
