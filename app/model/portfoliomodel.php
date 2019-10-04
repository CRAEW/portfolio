<?php

// Load all data and check where the file is
class PortfolioModel {

    protected $pdo; // location of date_file
    protected $inventory = []; // load all data

    public function __construct()
    {

        try {
            // $data_file = new PDO('mysql:host=www.wendyvancraen.portfolio.be;dbname=wendyvancraen','root','09wendy82');

            $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=wendyvancraen','root','09wendy82');

            } catch (PDOException $e) {
                die($e->getMessage());
            }

            
    }

    private function load()
    {
        // if(file_exists(DATA . 'cars.txt'))
        // {
        //     $this->inventory = file(DATA . 'cars.txt');
        // }

        $statement = $this->pdo->prepare('select * from portfolio');
        $statement->execute();

        $this->inventory = $statement->fetchAll(PDO::FETCH_OBJ);

        

        
    }

    // get the inventory
    public function getProjects()
    {
        $this->load();
        return $this->inventory;
    }

    // edit the inventory

    // delete the inventory

}





?>