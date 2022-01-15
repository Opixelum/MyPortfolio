<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="All about my experience">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Anto's portfolio</title>
  </head>

  <body>
    <?php include("Includes/header.php"); ?>

    <main>
      <h1>Hi! I'm Anto, computer science student</h1>    

      <div id="about-me">
        <h2>About me</h2>
        <p>Since I was a kid, I've always been passionate about IT, video games,
        high-tech and more, but what I'm keen on is programming ! I really like
        to code a lot, it's like having a super power. I'm interested in the web
        3.0 development for building decentralized apps on blockchains, but also
        in software and mobile development. My qualities are dedication, 
        determination and project management.</p>
      </div>
      
      <div id="professional-experience-div">
        <h2>My professional experience</h2>
        <ul id="professional-experience-ul"></ul>
      </div>

      <div id="diplomas-div">
        <h2>My diplomas</h2>
        <ul id="diplomas-ul"></ul>
      </div>

      <div id="skills-div">
        <h2>My skills</h2>
        <p>Here are what I've learnt and what I use. Those are ordered from the
        most mastered to the least.</p>
          
        <ul id="skills-ul"></ul>
      </div>

      <div id="contact-me">
        <h2>Contact me</h2>
        <form id="contact-form" accept-charset="UTF-8" action="send_message.php"
        method="POST">
          <label for="name">Name* (first/last names or company)</label><br>
          <input required type="text" id="name" name="name"
          placeholder="John Doe"><br><br>

          <label for="email">Email address*</label><br>
          <input required type="email" id="email" name="email"
          placeholder="john.doe@email.com"><br><br>

          <label for="phone">Phone number</label><br>
          <input type="tel" id="phone" name="phone"
          placeholder="06 12 34 56 78"><br><br>

          <label for="message">Your message*</label><br>
          <textarea required id="message" name="message"
          placeholder="Type your message here."></textarea><br><br>

          <input type="submit" id="send-btn" placeholder="Send message">

          <p>*: required field</p>
        </form>
      </div>
    </main>

    <?php include("Includes/footer.php"); ?>
    <script src="index.js"></script>
  </body>
</html>
