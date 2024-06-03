<?php
class Genre
{
    private string $name;


    //Crea 
    public function __construct(string $name)
    {

        //Inserisco un controllo 
        if ($name !== "Azione" && $name !== "Commedia") {
            throw new Exception("Il valore inserito non è consentito");
        }

        $this->name = $name;
    }

    // Non serve perchè non voglio che il dato venga cambiato ma solo letto tramite getter.
    // public function setName(string $name)
    // {
    //     $this->name = $name;
    // }

    //Legge l'attributo nome e non posso stamparlo se non isersco echo
    public function getName()
    {
        return $this->name;
    }
}
?>

<!-- _________________________ -->