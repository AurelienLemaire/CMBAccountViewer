<?php

/**
 * 
 */
class OperationBancaire{

    private $_date_operation;
    private $_date_valeur;
    private $_operation;
    private $_debit;
    private $_credit;

    /**
     * 
     */
	public function __construct($arr){
        $num = count($arr);
        if( $num !== 5)
            throw new Exception ("operationBancaire : Invalid Parameter");

        $this->_date_operation  = $this->format_dates($arr[0]);
        $this->_date_valeur     = $this->format_dates($arr[1]);
        $this->_operation       = $arr[2];
        $this->_debit           = floatval(str_replace(",", ".", $arr[3]));
        $this->_credit          = floatval(str_replace(",", ".", $arr[4]));
    }
    
    /**
     * 
     */
    private function format_dates( $str ){
        $y = substr($str, 6);
        $m = substr($str, 3, 2);
        $d = substr($str, 0, 2);
        return "$y-$m-$d";
    }

    /**
     * 
     */
    public function getInsertQuery($tableName){
        $query = "INSERT INTO $tableName VALUES ('$this->_date_operation', '$this->_date_valeur', '" . SQLite3::escapeString($this->_operation) . "', '$this->_debit', '$this->_credit', '')";
        return $query;
    }

}

?>