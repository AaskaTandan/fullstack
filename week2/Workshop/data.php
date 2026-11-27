 <?php

    $Courses = [
    [
    "title" => "Web Development", 
    "description" => "Learn HTML, CSS and JavaScript.", 
    "image" => "images/images (1).jpg","alt" => "Web development course",
    "category" => ["Level" => "Beginner", "Length" => "6 weeks"]
    ],
    
    [
    "title" => "Programming",
    "description" => "Learn programming and problem-solving.",
    "image" => "images/images (2).png","alt" => "Programming course",
    "category" => ["Level" => "Beginner","Length" => "8 weeks"]
    ],
   
    [
    "title" => "Computer Skills",
    "description" => "Improve your computer knowledge.",
    "image" => "images/images.jpg",
    "alt" => "Computer technology course",
    "category" => ["Level" => "Intermediate","Length" => "5 weeks"]
    ],
    ];

    $Courses = array_filter(
    $Courses, fn($course) => $course["category"]["Level"] === "Beginner");
?>



