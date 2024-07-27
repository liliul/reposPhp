<?php

// class User 
// {
//     private string $name;
//     private int $age;

//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age  = $age;
//     }

//     public function info()
//     {
//         return $this->name;
//     }
// }

// $user = new User('liliu', 20);
// echo $user->info();

// class User 
// {

//     public function __construct(private string $name, private int $age)
//     {
       
//     }

//     public function info()
//     {
//         return $this->name;
//     }
// }

// $user = new User('liliu', 20);
// echo $user->info();

class User 
{

    public function info(string $name, bool $age)
    {
        if ($age) {
            return 'qual a sua idade';
        }

        return 'sem idade';
    }

}

$user = new User();
echo $user->info(name:'liliu', age:true);

?>