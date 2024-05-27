<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>

    <nav>
        <button class="hamburger" id="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>
        <div class="dragonlogo " ><a href="index.html"><img class="logo-dragon rotate" src=" <?php ["url"]?>  img/logo.png "></a></div>
            <ul class="desktop-nav">
              <a href="index.html"> <li>ABOUT</li> </a>
              <a href="d-quest.html"> <li> DAY QUEST</li> </a> 
              <a href="e-quest.html"> <li> EVENING QUEST </li> </a>
            </ul>
      </nav>

    <div class="modal" id="modal">
      <div class="modal-content">
        <div class="centered-content">
          <a href="index.html">ABOUT</a>
          <a href="d-quest.html">DAY QUEST</a>
          <a href="e-quest.html">EVENING QUEST</a>
        </div>
      </div>
    </div>
    
</head>