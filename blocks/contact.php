 <!-- Contact form -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
		$(document).ready (function () {
				$('#btn btn-secondary btn-block').click (function () {
					var name = $("#name").val ();
					var name = $("#email").val ();
					var name = $("#message").val ();
					$.ajax ({
						url: './ajax/feedback.php',
						type: 'POST',
						cache: false,
						data; {'name':name, 'email':email, 'message':message},
						dataType: 'html',
						success: functoin(data) {
							if(data == 'Сообщение отправленно') {
								$('#messageShow').html (data + "<div class='clear'><br></div>");
								$('#messageShow').show ();
							}
						}
					});
				});
		});
	</script>
 <div class="contact-form" id="contact-form">
	<div class="container">
	 <form>
		<div class="row">
		 <div class="col-lg-4 col-md-4 col-sm-12">
			 <h1>Свяжитесь с нами</h1> 
		 </div>
		 <div class="col-lg-8 col-md-8 col-sm-12 right">
				<div class="form-group">
					<input type="text" class="form-control form-control-lg" placeholder="Your Name" id="name" name="name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" id="email" name="email">
				</div>
				<div class="form-group">
					<textarea class="form-control form-control-lg" id="message">Мне необходимо создать <?=$site?> 
					</textarea>
				</div>
				<input type="submit" class="btn btn-secondary btn-block" value="Отправить" name="send">
		 </div>
		</div>
	 </form>
	</div>
 </div>