<?php
    //echo "OOP (object oriented programing) in PHP <br>";

    class User {
        protected $name;
        public $email;
        public $age;
        public $password;

        public function __construct( $name,
                                    $email,
                                    $age,
                                    $password) {
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;

                                        
            //echo "constructor run <br>";
        }

        function set_name($name) {
            $this ->name =$name;
        }

        function get_name() {
            return $this -> name;
        }
    } //class là đối tượng khuôn mẫu để có thể tạo ra thực thể 

    $user1 = new User('join', 'jong@gmail.com' ,'23','11223');
    $user2 = new User('join1', 'jong1@gmail.com' ,'13','11224');
    $user3 = new User('join2', 'jong2@gmail.com' ,'33','11225');
    // $user1 -> name = 'Hoang';
    // $user1 -> email = 'Sunlight@gmail.com';
    // $user1 -> password = '123';
    // $user1 -> age = '12';

    // $user1 -> set_name('Hoang123');
    // $user2 -> set_name('Bob');
    // print_r($user1);
    // print_r($user2);
    // echo $user1 ->get_name()."<br>";
    // echo $user2 ->get_name()."<br>";
    // echo $user1->email;
    // echo $user2->email;
    class Employee extends User {
        public function __construct($name,
                                    $email,
                                    $age,
                                    $password,
                                    $title
                                    )
        {   parent::__construct($name, $email, $age, $password);
            $this -> title = $title;
        }
        public function get_title() {
            return $this->title; 
        }
    }
    $employee1 = new Employee('Taylor', 'taylor@gmail.com',30,'12512','sales manager');
    echo $employee1->get_title();

?>