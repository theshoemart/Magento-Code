<?php
/**
 * Process Gift Registry Data
 * @package Core\Import\GiftReg
 */
include_once "init.php";

global $pos;
//get the processor for the import catalog function
$upload = $pos->get_processor("rdi_pos_upload")->upload('gift_reg');


?>