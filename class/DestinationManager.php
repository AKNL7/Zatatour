
<?php


class DestinationManager
{
    private $db;


    public function __construct($db)
    {
        $this->db = $db;
    }

    public function distinctLocation()
    {
        $request = $this->db->query("SELECT DISTINCT location FROM destination");
        return $this->hydrate($request->fetchAll());
    }

    public function findAllLocations()
    {
        $request = $this->db->query("SELECT * FROM destination");
        return $this->hydrate($request->fetchAll());
    }

    public function findDestination($destination)
    {
        //  var_dump($destination);
        $request = $this->db->prepare("SELECT * FROM destination WHERE destination.location = :destination ");
        $request->execute([
            ":destination" => $destination
        ]);

        $this->hydrate($request->fetchAll());
    }

    public function insertDestination($destination)
    {
        
        $insert = $this->db->prepare("INSERT INTO destination (location, price) VALUES (:location, :price)");

        $insert->execute([
            'location' => $destination['location'],
            
        ]);
    }


    public function hydrate(array $data) {
        $arrayObject = [];

        foreach($data as $object) {
            $arrayObject[] = new Destination($object);
        }

        return $arrayObject;
    }
   
  
}

