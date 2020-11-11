<?php

$superheroes = [
  [
      "id" => 1,
      "name" => "Steve Rogers",
      "image" => "./Images/cap-america.jpg",
      "alias" => "Captain America",
      "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world’s mightiest heroes and the leader of the Avengers.",
  ],
  [
      "id" => 2,
      "name" => "Tony Stark",
      "image" => "./Images/iron-man.jpeg",
      "alias" => "Ironman",
      "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man.",
  ],
  [
      "id" => 3,
      "name" => "Peter Parker",
      "image" => "./Images/spider-man.jpg",
      "alias" => "Spiderman",
      "biography" => "Bitten by a radioactive spider, Peter Parker’s arachnid abilities give him amazing powers he uses to help others, while his personal life continues to offer plenty of obstacles.",
  ],
  [
      "id" => 4,
      "name" => "Carol Danvers",
      "image" => "./Images/mrs-marvel.jpg",
      "alias" => "Captain Marvel",
      "biography" => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
  ],
  [
      "id" => 5,
      "name" => "Natasha Romanov",
      "image" => "./Images/black-widow.jpg",
      "alias" => "Black Widow",
      "biography" => "Despite super spy Natasha Romanoff’s checkered past, she’s become one of S.H.I.E.L.D.’s most deadly assassins and a frequent member of the Avengers.",
  ],
  [
      "id" => 6,
      "name" => "Bruce Banner",
      "image" => "./Images/og-hulk.jpg",
      "alias" => "Hulk",
      "biography" => "Dr. Bruce Banner lives a life caught between the soft-spoken scientist he’s always been and the uncontrollable green monster powered by his rage.",
  ],
  [
      "id" => 7,
      "name" => "Clint Barton",
      "image" => "./Images/hawk-eye.jpg",
      "alias" => "Hawkeye",
      "biography" => "A master marksman and longtime friend of Black Widow, Clint Barton serves as the Avengers’ amazing archer.",
  ],
  [
      "id" => 8,
      "name" => "T'challa",
      "image" => "./Images/black-panther.jpg",
      "alias" => "Black Panther",
      "biography" => "T’Challa is the king of the secretive and highly advanced African nation of Wakanda - as well as the powerful warrior known as the Black Panther.",
  ],
  [
      "id" => 9,
      "name" => "Thor Odinson",
      "image" => "./Images/thor.jpg",
      "alias" => "Thor",
      "biography" => "The son of Odin uses his mighty abilities as the God of Thunder to protect his home Asgard and planet Earth alike.",
  ],
  [
      "id" => 10,
      "name" => "Wanda Maximoff",
      "image" => "./Images/scarlet-witch.jpg",
      "alias" => "Scarlett Witch",
      "biography" => "Notably powerful, Wanda Maximoff has fought both against and with the Avengers, attempting to hone her abilities and do what she believes is right to help the world.",
  ], 
];


$search = $_GET["search"];
$search = filter_input(INPUT_GET, "search", FILTER_SANITIZE_STRING);

$response = "";
$result = "";

# Checks to see if any value was enter / if it is empty
if( strlen($search) > 0 ){

    # Represents the string to be displayed if the result doesn't exist
    $result = "<h5>SUPERHERO NOT FOUND.</h5>";

    foreach($superheroes as $superhero){
        if( $search === $superhero["alias"] || $search === $superhero["name"] ){

            $alias = "<h3>".$superhero["alias"]."</h3>";
            $name = "<h4>A.K.A. ".$superhero["name"]."</h4>";
            $image = '<img src="'.$superhero["image"].' " alt="Picture of hero.">';
            $bio = "<p>".$superhero["biography"]."</p>";

            $result = $alias.$name.$image.$bio;
        }
    }
}

$response = $result;

?>

<?php 
# If the variable has been edited, output it
if(strlen($response)>0): 
    echo $response;
endif; 
?>

<?php 
# If the variable has not been edited, output all names in the list
if( strlen($response) === 0 ): ?>
<ul>
    <?php foreach ($superheroes as $superhero): ?>
    <li><?= $superhero['alias']; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; 
?>

