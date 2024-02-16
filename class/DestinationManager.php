
<?php


class DestinationManager
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }

    public function showDestinationPrice()
    {
        $request = $this->db->query("SELECT * FROM destination");
        return $request->fetchAll();
    }

    public function findDestination($destination)
{
 var_dump($destination);
    $request = $this->db->prepare("SELECT * FROM destination WHERE destination.location = :destination ");
    $request->execute([
        ":destination" => $destination
    ]);

    return $request->fetchAll();
}
}
