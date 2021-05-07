<?php
declare(strict_types=1);

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * AccountingEntries helper
 */
class AccountingEntriesHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function displayContentCell($entry){
        $type = null;

        switch($entry->accounting_entry_type_id){

            case 1:
                $type="+";
                $class="orange-font";
                break;
            case 2:
                $type="-";
                $class="purple-font";
                break;
            default:
            $type="~";
            $class="grey-font";
        }

        if($type){
           return "<td class='font-weight-bold ".$class."'>".$type.$entry->amount."</td>";
        } 
    }

    public function displayGiftIcon($entry){
        if($entry->accounting_entry_type_id == 3 || $entry->accounting_entry_type_id == 4 ){
           return "<i class='grey-font icon-gift'></i>";
        } 
    }

    public function displayEntryType($entry){
        switch($entry->accounting_entry_type_id){

            case 1:
                $type="Entrée";
                break;
            case 2:
                $type="Sortie";
                break;
            case 3:
                $type="Don matériel";
                break;
            case 4:
                $type="Don d'argent";
                break;
            default:
            $type="";
        }

        if($type){
           return "<span class='grey-font'>".$type."</span>";
        } 
    }

}
