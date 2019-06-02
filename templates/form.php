<section class="form">
	<div class="wrapper">

	<form class="contact_form" action="form.php" method="post" name="contact_form">
	    <ul>
	        <li>
	             <h2>Связаться со мной</h2>
	        </li>
	        <li>
	            <label for="first_name">Ваше имя:</label>
	            <input type="text"  placeholder="Иван Иванов"/>
	        </li>
	        <li>
	            <label for="email">Email:</label>
	            <input type="email" name="email" placeholder="ivanov1961@mail.ru" required />
	        </li>
	        <li>
	            <label for="phone">Телефон:</label>
	            <input type="text" name="phone" placeholder="+7(999)999-99-99" />
	        </li>
	        <li>
	            <label for="message">Текст сообщения:</label>
	            <textarea name="message" cols="30" rows="6" required ></textarea>
	        </li>
	        <li>
	        	<button class="submit" name="submit" type="submit">Отправить</button>
	        </li>
	    </ul>
	</form>
	</div>
</section>