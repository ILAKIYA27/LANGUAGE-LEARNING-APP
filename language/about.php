<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">
   <style>
   body {
     background-image: url('https://wallpaperset.com/w/full/e/9/8/31136.jpg');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: cover;
   }
   </style>

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="https://img.freepik.com/free-vector/office-people-drinking-coffee-during-lunch-break_74855-7747.jpg?w=1060&t=st=1692340217~exp=1692340817~hmac=6d2cdf615feb7baa19d7abe49f7c9d0a7de49afd7889504bd74bbbe84117f272" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choose us for language learning because our app offers a dynamic and immersive experience. With interactive lessons, real-life conversations, and personalized progress tracking, you'll achieve fluency efficiently. Our diverse range of languages and user-friendly interface make learning enjoyable and effective. Join us to embark on a successful language journey.</p>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+5k</h3>
            <p>online courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+40k</h3>
            <p>brilliant students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2k</h3>
            <p>expert tutors</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <p>job placement</p>
         </div>
      </div>

   </div>

</section> 





<section class="reviews">

   <h1 class="heading">Student's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>"This language learning app is a game-changer! The lessons are engaging, and the interactive exercises truly helped me grasp concepts quickly. I can't believe how much progress I've made in just a few weeks. Highly recommended!" - Sarah M.</p>
         <div class="student">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Sarah.H</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"As a busy professional, this app fits perfectly into my schedule. The bite-sized lessons are easy to squeeze in during breaks, and the app's speech recognition feature ensures my pronunciation is on point.-Alex.S</p>
         <div class="student">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Alex.S</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I've tried several language apps, but this one stands out. The AI-powered conversations are incredibly realistic, making me feel confident in real-life situations. The app's quizzes and challenges keep me motivated and eager to learn more every day." - Juanita L.</p>
         <div class="student">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Juanita L</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Learning a new language was always daunting until I found this app. The interactive approach makes grammar and vocabulary enjoyable to learn. The app's cultural insights and diverse content have not only improved my language skills but also broadened my horizons." - Rahul S.</p>
         <div class="student">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Ragul.R</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I'm amazed by how personalized this app is. It understands my strengths and weaknesses, adapting lessons accordingly. The progress tracking and achievement badges make learning addictive. -Emily.S</p>
         <div class="student">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Ezhil S</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>The app's cultural insights and diverse content have not only improved my language skills but also broadened my horizons." - Rahul P.</p>
         <div class="student">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Rahul.P</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>







<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>