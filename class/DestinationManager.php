
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
        $request = $this->db->query("SELECT DISTINCT id,location FROM destination");
        return $this->hydrate($request->fetchAll(), 'Destination');
    }

    public function findAllLocations()
    {
        $request = $this->db->query("SELECT * FROM destination");
        return $this->hydrate($request->fetchAll(), 'Destination');
    }

    public function findDestination($destination)
    {
        //  var_dump($destination);
        $request = $this->db->prepare("SELECT * FROM destination WHERE destination.location = :destination ");
        $request->execute([
            ":destination" => $destination
        ]);

        $this->hydrate($request->fetchAll(), 'Destination');
    }

    public function hydrate(array $data, string $objectName) {
        $arrayObject = [];

        foreach($data as $object) {
            $arrayObject[] = new $objectName($object);
        }

        return $arrayObject;
    }
   
}
