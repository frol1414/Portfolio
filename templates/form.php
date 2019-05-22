<section class="form">
	<div class="wrapper">
		<h2 class="contact-form__title">Связаться со мной<span></span></h2>

	<form class="contact_form" action="form.php" method="post" name="contact_form">
	    <ul>
	        <li>
	             <h2>Связаться со мной</h2>
	             <span class="required_notification">* Denotes Required Field</span>
	        </li>
	        <li>
	            <label for="first_name">Ваше имя:</label>
	            <input type="text"  placeholder="Иван Иванов" required />
	        </li>
	        <li>
	            <label for="email">Email:</label>
	            <input type="email" name="email" placeholder="john_doe@example.com" required />
	        </li>
	        <li>
	            <label for="phone">Телефон:</label>
	            <input type="text" name="phone" placeholder="john_doe@example.com" required />
	        </li>
	        <li>
	            <label for="message">Текст сообщения:</label>
	            <textarea name="message" cols="40" rows="6" required ></textarea>
	        </li>
	        <li>
	        	<button class="submit" name="submit" type="submit">Отправить</button>
	        </li>
	    </ul>
	</form>

	</div>
</section>