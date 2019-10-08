<?php

// Load all data and check where the file is
class PortfolioModel {

    protected $pdo; // location of date_file
    protected $inventory = []; // load all data

    public function __construct()
    {

        try {

            $this->pdo = new PDO('mysql:host=localhost;dbname=wendyv1q_wendyvancraen','wendyv1q','9ERv4hOMm6WQ');

            } catch (PDOException $e) {
                die($e->getMessage());
            }

            
    }

    private function load()
    {
        $statement = $this->pdo->prepare('select * from portfolio');
        $statement->execute();

        $this->inventory = $statement->fetchAll(PDO::FETCH_OBJ);
    }

    private function closeConnection()
    {
        $this->pdo=NULL;
    }

    // get the inventory
    public function getProjects()
    {
        $this->load();
        return $this->inventory;
        $this->closeConnection();
    }



    // edit the inventory

    // delete the inventory

}