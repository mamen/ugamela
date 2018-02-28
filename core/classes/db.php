<?php

    /**
     * This class connects to the MySQL-Database and provides a database connection object
     */
    class Database {

        /** @var null|PDO the database connection object  */
        private $dbConnection = null;

        /**
         * Database constructor.
         * Connects to the MySQL-Database and creates a database-object
         */
        function __construct() {
            global $dbConfig;

            // if the connection was already made, return the connection-object
            if ($this->dbConnection != null) {
                return $this->dbConnection;
            }

            //            if (DEBUG) {
            //                $this->dbConnection = new LoggedPDO('mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'],
            //                    $dbConfig['user'], $dbConfig['pass']);
            //            } else {
            $this->dbConnection = new PDO('mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'],
                $dbConfig['user'], $dbConfig['pass']);
            //            }

            $this->dbConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->dbConnection;
        }

        /**
         * Prepares the given query
         * @param $query the query
         * @return PDOStatement a prepared PDO-query
         */
        function prepare($query) : PDOStatement {
            return $this->dbConnection->prepare($query);
        }

        /**
         * prints the debug-log
         */
        function printLog() {
            if (get_class($this->dbConnection) === "LoggedPDO") {
                $this->dbConnection->printLog();
            }
        }

    }
