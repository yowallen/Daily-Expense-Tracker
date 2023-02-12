<?php
include('addInc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/200b284ebc.js" crossorigin="anonymous"></script>
    <title>My Income</title>
</head>
<body>
    <nav>
        <div class="logo">
           Daily Expense Tracker
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
           <li><a href="dashboard.html">Dashboard</a></li>
           <li><a class="active" href="#">My Income</a></li>
           <li><a href="myExpense.html">My Expenses</a></li>
           <li><a href="landpage.html">Logout <i class="fas fa-sign-out"></i></a></li>
        </ul>
     </nav>
     <section class="incomeSect">
        <div class="myTitles">
            <h1>
                My Income
            </h1>
        </div>
        <div class="incCont">
          <div class="incTransac">
            <button id="myBtn"><i class="fa-solid fa-circle-plus"></i> Add Income</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <fieldset class="incSet">
                  <legend>Add Income Category</legend>
                  <div class="incInputs">
                    <label for="source">Source:</label>
                    <input type="text" id="source" name="source" placeholder="Enter Source of Income" required>
                </div>
                  <div class="incInputs">
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" placeholder="Enter Income Amount" min="100" required>
                </div>
                <div class="incSubmit">
                  <input type="submit" name="submit">
                </div>
                </fieldset>
              </div>

            </div>
          </div>
          <br>
          <hr>
          <div class="cat">
            <span>Category</span>
            <div class="cat-list">
              
            </div>
          </div>
        </div>
     </section>
     <footer id="foot">
        <div class="footer">
         <div class="contOne">
           <h4>
             ABOUT PROJECT
           </h4>
           <p>
             Expense management refers to the systems deployed by a process, pay, and audit user-initiated expenses.
             These costs include, but are limited to expenses for tavelling and entertainment. Expense management
             includes the the policies and procedures that govern such spending, as well as the technology and
             services and analyze the data associated with it.
           </p>
           <div class="qlinks">
             <p>Quick Links:</p>
             <ul>
                 <li><a href="dashboard.html">Dashboard </a></li>
                 <li><a href="myIncome.html">My Income </a></li>
                 <li><a href="myExpense.html">My Expense</a></li>
             </ul>
           </div>
         </div>
         <hr>
         <div class="contTwo">
             <p><i class="far fa-copyright"></i>
               <a href="#">Daily Expense Tracker System</a>
               <sup><i class="fas fa-trademark"></i></sup>
               (2022) powered by: <Strong> Group 6</Strong></p>
         </div>
        </div>
        
       </footer>
       <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
</body>
</html>