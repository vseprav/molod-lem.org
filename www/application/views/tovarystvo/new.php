<div id="contact_form">
  <h4>Додати нового члена товариства</h4>        
  <form method="post" name="contact" action="">       
    <label>Ім'я:</label> <input name="name" type="text" class="input_field" maxlength="50" />
    <div class="cleaner_h10"></div>
    
    <label>Тип членства:</label> 
	   <select name="actual">
		   <option value="1">Дійсний</option>
		   <option value="0">Асоційований</option>
	   </select>
    <div class="cleaner_h10"></div>
                            
    <label>Рід занять:</label> <input name="profession" type="text" class="input_field" maxlength="50" />
    <div class="cleaner_h10"></div>
    
    <label>E-mail:</label> <input name="email" type="text" class="input_field" maxlength="50" />
    <div class="cleaner_h10"></div>
                            
    <label>Дата народження:</label> <input name="birthday" type="text" class="input_field" maxlength="50" />
    <div class="cleaner_h10"></div>  
    
    <label>Примітки:</label> <input name="notes" type="text" class="input_field" maxlength="50" />
    <div class="cleaner_h10"></div>
                        
    <input type="submit" class="submit_btn" name="submit" id="submit" value="Відправити" />
  </form>
</div> 