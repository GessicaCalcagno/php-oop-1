<?php
class Genre
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
?>

<!-- //_________________________ -->
<!-- // class Genre
// {
//     private string $name;



//     public function setName($name)
//     {
//         if (!in_array($name, ["azione", "horror"])) {
//             throw new Exception("Il valore inserito non è consentito");
//         }

//         $this->name = $name;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }
// } -->