<?php

require_once __DIR__ . "/../Utils/concatenate.php";

final class Database
{
    public function __construct()
    {
	    $this->databaseName = "handyman";
	    $this->databaseHost = "localhost";
	    $this->databaseUser = "root";
	    $this->databasePassword = "ghostlyTr1nk37";

	    // https://stackoverflow.com/questions/19272260/close-db-connection
	    $this->connection = new mysqli(
		    $this->databaseHost,
		    $this->databaseUser,
		    $this->databasePassword,
		    $this->databaseName
	    );
    }


    public function __destruct()
    {
	    $this->connection->close();
    }

    public function insert(string $table, array $query_data): void
    {
	/**
	 * This function will insert information into DB
	 *
	 * This function will put the student information into the DB,
	 * return value is void
	 *
	 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
	 * @version	3.0.0				Will get student information from DB with parameters
	 * @since	1.0.0
	 *
	 * @param string $table the table to insert the data
	 * @param array $query_data the data to insert in each field of the database
	 * */

	// https://www.sitepoint.com/community/t/how-to-generate-a-dynamic-mysqli-query/220430/3
	$query_values = count($query_data);
	$placeholders = concatenate_placeholders($query_values);

	// we can assume a string to pretty much any time
	$query_types = str_repeat('s', $query_values);

	$insert = "INSERT INTO " .$table. " VALUES (" .$placeholders. ')';

	$statement = $this->connection->prepare($insert);
	$statement->bind_param($query_types, ...$query_data);
	$statement->execute();
	$statement->close();
    }

    public function select(string $what, string $table, string $where, array $query_data): mysqli_result | bool
    {
	    /**
	     * This function will search information in DB
	     * 
	     * This function search for the student information inside the DB,
	     * 
	     * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
	     * @version	3.0.0				Will get student information from DB with parameters
	     * @since	1.0.0
	     * 
	     * @param string $what what to get from the database
	     * @param string $table the table to search to
	     * @param string $where the WHERE condition
	     * @param array $query_data the data to use in the query
	     *
	     * @return array | null
	     * */
	    $query_values = count($query_data);
	    $placeholders = concatenate_placeholders($query_values);
	    $query_types = str_repeat('s', $query_values);

	    $select = "SELECT " . $what . " FROM " . $table. " WHERE " . $where . $placeholders;

	    $statement = $this->connection->prepare($select);
	    $statement->bind_param($query_types, ...$query_data);
	    $statement->execute();
	    $result = $statement->get_result();
	    $statement->close();

	    return $result;
    }

    public function update(string $table, string $what, string $to, string $where, array $new_info): void
    {
	    $query_values = count($new_info);
	    $placeholders = concatenate_placeholders($query_values);
	    $query_types = str_repeat('s', $query_values);
	    $update = "UPDATE " . $table. " SET " . $what . " = '" . $to . "' WHERE " . $where . $placeholders;

	    $statement = $this->connection->prepare($update);
	    $statement->bind_param($query_types, ...$new_info);
	    $statement->execute();
	    $statement->close();
    }
    
    public function select_join(string $what, string $table): mysqli_result | bool
    {
	    $select = "SELECT " . $what. " FROM " . $table;
	    $data = $this->connection->query($select);
	    return $data;
    }
}
