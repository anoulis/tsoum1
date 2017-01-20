<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
  <meta name="description" content="Fan-based website about Red Hot Chili Peppers">
    <meta name="keywords" content="Red Hot Chili Peppers, RHCP, rhcp, rock, music">
    <meta name="author" content="Karampinas Nikolaos, Noulis Aristeidis, Tsikkinis Κonstantinos">
    <link rel="icon" type="image/ico" href="/images/rhcp.ico">
    <link rel="stylesheet" type="text/css" media="all" href="style.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
     <script type='text/javascript' src='comscript.js'></script>
    <title>RHCP Fans Page - Comments</title>
  </head>
<body id="news_b">
<header>
    <nav>
          <ul>
           <li><a href="index.html">Home</a></li>
           <li><a href="biography.html">Biography</a></li>
           <li><a href="discography.html">Discography</a></li>
           <li><a href="multimedia.html">Multimedia</a></li>
           <li><a href="news.html">News</a></li>
           <li><a class="active"  href="comments.php">Comments</a></li>
           <li><a href="quiz.html">Quiz</a></li>
          </ul>
</nav>
</header>
     <div id="container_quiz">
		<h2>Comments from users</h2>
		<h3>Leave your comment for RHCP</h3>
<form action="comments.php" method="POST">
			Email: <input type="email" id="email" name="email">
				<div>
				<textarea name ="comment" id="comment" required></textarea>
				</div>
			<input type="submit" name="submit1" value="Post">
		</form>

  <div class="com_section">
                                  <?php show(0);  ?>
                </div>
	 </div>

<footer class="footer">© 2016. This page was created for academic purposes on the subject of 'Web Information Systems' at the Aristotle University of Thessaloniki.</footer>
</body>
</html>
