<!DOCTYPE HTML>
<html>
	<head>
		<title> Word Display</title>

		<!-- HTML,CSS,BOOTSTRAP,ANGULAR JS,PHP,MYSQL are used for the creation of thiis page-->

		<link rel="stylesheet" href="bootstrap.min.css">

		<script src="bootstrap.min.js"></script>		
		<script src="angular.min.js"></script>
		<!-- CSS part is defined here within style tag-->
		<style>
		body{
			background-color:black;
			text:white;
			color:whitesmoke;
		}
			th,td,table{
				border:3px double lightgrey;
				padding:2px;
				
			}

			.containerr {
  position: relative;
  width: 100%;
}
.bb{
    border:2px double #696969;
    background-color:#696969;
    
    margin:5px 0px 0px 120px;
}

.textt {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.zz{
	color:yellow;
}

	  </style>
	  </head>
	  <!-- Body portion begins from here-->
<body ng-app>
	<header><!-- Used for the buttons displayed at the right corner side of screen-->
		<div style="float:right";>
	<a href="displayp.php">	<button type="button" class="btn btn-success">Landing Page</button></a> &nbsp;
	<a href="wordcounter.php">	<button type="button" class="btn btn-danger">Live Counter</button></a>&nbsp;

</div>
</header><br><br> 
<!-- Start of bootstrap-->
	<div class="container bb">
		<div class="row">
		
 			<div class="col-md-12">
				<br>
 <h1 align="center"><b><mark>Word Display</mark></b> </h1><br>
<hr style="border:1px dotted white";>
<!--Angular JS is used here-->
<span class="text-warning">Show/Hide Data:</span><input type="checkbox" ng-model="shww">
<div ng-show="shww">
<!--Data placed inside placeholder only for reading purpose-->
<textarea class="zz" style="background-color:black" rows="8" cols="80" placeholder="  1. Who are you?

We're Terribly Tiny Tales â€“ one of the worldâ€™s most celebrated social storytelling platforms.
We bring together a diverse pool of fantastic writers to create really short stories for a community of over 20 million readers, every day.

2. Where can I find ttt on social media?

You can find us on
Facebook (fb.com/terriblytinytales),
Instagram (@ttt_official),
Twitter (@terriblytiny),
and YouTube (youtube.com/terriblytinytalkies)

3. Where can I read all your stories? / I want to read all tales; where can I find them?

All published tales can be found across our social media platforms.

4. How do I get in touch with you?

For all submission related queries, write to us at submissions@terriblytinytales.com
For events and workshops, write to us at events@terriblytinytales.com
For potential brand collaborations, shoot us a mail from your work email address on collab@terriblytinytales.com/a>
If you have any other questions or to simply say hi, ping us at hello@terriblytinytales.com

5. Can I submit a tale too? If yes, then where?

If you have a tale to tell, weâ€™re all eyes.
You can send them at terriblytinytales.com/submit

6. I have submitted something. When will it be published?

It usually takes a while â€“ with a huge number of submissions coming our way daily, curation is tedious â€“ but a task we gladly work upon.
If itâ€™s scheduled to be published, youâ€™ll receive a mail from us saying so.

7. Will I get any feedback on my writing?

Individual feedback is logistically difficult to give. However, weâ€™re currently working on systems to get this into place.

8. If my tale gets rejected, will I be informed?

Thereâ€™s no easy way to tell you this, so here it goes â€“ Nope.

9. How do I become a Select writer with ttt?

You can become a part of our handpicked group of Select writers by taking this copy test at http://bit.ly/terribly-tiny-test

10. On your page, Iâ€™ve come across pieces that are more than 140 characters. Can I submit those too?

Currently weâ€™re accepting longer pieces only from our Select writers. To be a part of Select, get discovered today at http://bit.ly/terribly-tiny-test

11. When I write a tale, do I need to mention the word of my choice?

Yes. It makes finding your tale easier, and also lets the readers know where you began.

12. Who decides what goes up?

We have an internal curation team, working on which tale goes up, and how.
Theyâ€™re helped by our dedicated bunch of community curators who tirelessly curate Community submissions post which the internal team picks the best.

13. How can I work with ttt?

Mail us your best work, resume, and cover-letter to hello@terriblytinytales.com
You can become a part of our handpicked group of Select writers by taking the copy test at http://bit.ly/terribly-tiny-test

14. Does ttt take interns? And where can I apply?

Yes, we do. You can apply by sending us your best work, resume, and cover-letter to hello@terriblytinytales.com

15. Do you have an office?

We do.


16. If I (or the brand I represent) want to collaborate, how do I go about it?

For potential brand collaborations, shoot us a mail from your work email address on collab@terriblytinytales.com

17. How do we know about an upcoming workshop in our city?

For upcoming events and updates, keep an eye out on our here.

18. Where can I request a workshop in my city/college?

Write to us at events@terriblytinytales.com and weâ€™ll help you organize one in your city/college.

19. I attended a workshop; I havenâ€™t received my certificate yet. When will I get it?

We mail the digital certificate to the email you provide. In case you havenâ€™t received it in your inbox, let us know at events@terriblytinytales.com , and weâ€™ll get back to you.

20. Does ttt sell official merchandise? If yes, where do I find it?

Yes. You can find our merchandise at www.stttore.com. And t-shirts at www.nnnow.com/terribly-tiny-tales

21. I want a tale written for me (or gift it to someone), how do I go about it?

You can avail a Tailored Tale for you, or someone you love, at http://stttore.com/products/tailored

22. Is ttt merchandise available on any other e-commerce websites?

No, find all our exclusive merchandise only on www.stttore.com and www.nnnow.com/terribly-tiny-tales.
Oh wait. That makes two. What's the dual term for exclusive

23. What is terribly tiny talkies?

Terribly Tiny Talkies is a storytelling collective under Terribly Tiny Talkies, which brings together distinctive and talented filmmakers from across the country to craft thematic short films.
Each talkie is under five minutes, and filmed around a central keyword and idea.
TTT endures to save the fading art of the narrative, one frame at a time.

24. Where do I watch all the terribly tiny talkies?

Weâ€™re here:https://www.youtube.com/terriblytinytalkies

25. How do I work for terribly tiny talkies?

If you have a strong showreel to show or are simply interested in exploring opportunities in film, you can apply know more at .

26. Can brands collaborate for talkies?

Yes, weâ€™ve already collaborated with brands in the past to create striking films that move. Shoot us a mail at collab@terriblytinytales.com and weâ€™ll take it forward from there.

Us	FAQ	ttt
Privacy	Careers
Terms of Service	Press"></textarea><br>
<small class="text-warning"><b>Total:</b>856 Words</small>
<br><small class="text-warning"><b>Unique:</b>350 Words</small>
</div>
</div>
</div>
</div>
<div class="container bb">
	<div class="row">
		<div class="col-md-12">


 <!-- Use of PHP to take input from the user and assign it to varible num-->
<?php
$num = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = test_input($_POST["number"]);
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }

?>







<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Number of Words: <input type="number" name="number" placeholder="In numbers">
<input type="submit" name="submit" value="Submit">
</form>
<!-- Use of PHP for fetching the file and display in tabular structure-->
<?php
	$con = mysqli_connect('localhost','root','','larave');//larave is name of database
    
	$query = "SELECT * from wordcount limit $num;"; //wordcount is table name
	$run = mysqli_query($con,$query);
	$total = mysqli_num_rows($run);

	if($total != 0){

		?>

	<table class="table table-dark table-hover table-striped">
		<tr>
			<th>Id</th>
			<th>Words</th>
			<th>Frequency</th>
			
		</tr>
		<?php
			while($data = mysqli_fetch_assoc($run)){ //fetching data in tabular structure
				echo "<tr>
						<td>".$data['Id']."</td>
						<td>".$data['words']."</td>
						<td>".$data['frequency']."</td>
						
						
						
						
						
                       
					</tr>";

			}
		}else{
			echo "no record found";
		}
		?>
	</table>	
	
	</div>
	
	</div>
	</div>
	</body>
	</html>
