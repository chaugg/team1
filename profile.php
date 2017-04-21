<?php
include_once 'resource/session.php';
include_once 'partial/parseProfile.php';
 ?>

 <div class="container">
   <h1> Profile</h1
     <?php if (!isset($_SESSION['username'])):  ?>
       <p> Your are not authorized to view this page </p>
     <?php else: ?>
       <table>
         <tr>
           <th>Username</th> <td> <?php if(isset($username)) echo $username; ?> </td>
         </tr>
         <tr>
           <th>Email</th> <td> <?php if(isset($email)) echo $email; ?> </td>
         </tr>
         <tr>
           <th>Date Joined</th> <td> <?php if(isset($date_joined)) echo $date_joined; ?> </td>
         </tr>
         <tr>
           <th></th><td>
             <a href="edit-profile.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>">
               <span>Edit profile</span>
             </a>
           </td>
         </tr>
       </table>
     <?php endif ?>

  </div
