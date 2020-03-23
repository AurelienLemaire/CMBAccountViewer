<?php

/**
 * classe de gestion des operations bancaires
 */
class ComptesCMBprocess{


    private static $_CREATE_TABLE_OPERATIONS_QUERY =
        "CREATE TABLE operations (
            date_operation	TEXT,
            date_valeur	TEXT,
            libelle	TEXT,
            debit	REAL,
            credit	REAL,
            type	TEXT
        )";

    private static $_CREATE_TABLE_MONTHLY_REPORTS_QUERY =
    "CREATE TABLE monthly_reports (
        mois	TEXT,
        type	TEXT,
        debit	REAL,
        credit	REAL
    )";


    private $_database;
    private $_inputFile;
    private $_categoriesFile = "data/categories_queries.sql";
    private $_DBG = true;
    private $_REPORT;

    /**
     * constructeur
     */
	public function __construct($db, $file){
        $this->_database = $db;
        $this->_inputFile = $file;
    }

    /**
     * 
     */
    public function createDatabase(){
        fopen($this->_database, 'w+');
        $db = new SQLite3( $this->_database );
        
        try {
            $results = $db->query( self::$_CREATE_TABLE_MONTHLY_REPORTS_QUERY );
            $results = $db->query( self::$_CREATE_TABLE_OPERATIONS_QUERY );
            $results = $db->query( "create table operations_tmp as select * from operations where false" );
        } catch (Exception $e){}
        
        $this->_REPORT = "Database created";
        $db->close();
    }

    /**
     * 
     */ 
    public function setDebug( $dbg ){
        $this->_DBG = $dbg;
    }

    public function printReport(){
        echo "-- " . $this->_REPORT ."\n";
    }
    /**
     * 
     */
    public function dropData(){
        $db = new SQLite3( $this->_database );
        
        try {
            $results = $db->query("delete from operations");
        } catch (Exception $e){}
        
        $this->_REPORT = "Data dropped";
        $db->close();
    }

    /**
     * 
     */
    public function insertOperationsIntoDb(){
        $db = new SQLite3( $this->_database );
        $cpt = 0;

        $results = $db->query("delete from operations_tmp");

        if (($handle = fopen( $this->_inputFile , "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                try {
                    $opBancaire = new OperationBancaire($data);
                    $query = $opBancaire->getInsertQuery("operations_tmp") . "\n";
                    $results = $db->query($query);
                    $cpt++;
                    if($this->_DBG) 
                        print_r($query);
                } catch (Exception $e){ 
                    if($this->_DBG){
                        echo $e ;
                        print_r ($data);
                    } 
                }
            }
            fclose($handle);
        }
        
        $this->_REPORT = $cpt . " operations inserted";

        $db->close();
    }

    /**
     * 
     */
    public function commit(){
        $db = new SQLite3( $this->_database );
        
        try {
            $results = $db->query("insert into operations select * from operations_tmp");
        } catch (Exception $e){}
        
        $this->_REPORT = "Monthly reports table filled";
        $db->close();
    }


    /**
     * 
     */
    public function categorizeOperationsIntoDb(){
        $db = new SQLite3( $this->_database );

        if (($handle = fopen( $this->_categoriesFile , "r")) !== FALSE) {
            while (($sql = fgets($handle, 1000)) !== FALSE) {
                if($this->_DBG) 
                    echo $sql; 
                if( strlen ( trim($sql) ) > 0 ){
                    try {
                        $results = $db->query($sql);
                    } catch (Exception $e){
                        if($this->_DBG){
                            echo "sql = " . $sql;
                        }
                    }
                }
            }
            fclose($handle);
        }

        $this->_REPORT = "Categories inserted";

        $db->close();
    }


    /**
     * 
     */
    public function buildMonthlyReports(){
        $db = new SQLite3( $this->_database );
        
        try {
            $results = $db->query("delete from monthly_reports");
            $results = $db->query("insert into monthly_reports select STRFTIME('%Y-%m', date_operation), type, sum(debit), sum(credit) from operations group by STRFTIME('%Y-%m', date_operation), type");

        } catch (Exception $e){}
        
        $this->_REPORT = "Monthly reports table filled";
        $db->close();
    }

}


/*
CREATE TABLE operations (
	date_operation	TEXT,
	date_valeur	TEXT,
	libelle	TEXT,
	debit	REAL,
	credit	REAL,
	type	TEXT
)


CREATE TABLE monthly_reports (
	mois	TEXT,
	type	TEXT,
	debit	REAL,
	credit	REAL
)
*/

?>