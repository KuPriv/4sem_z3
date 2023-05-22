<link rel="stylesheet" href="style.css"></link>
<style>
<?php include 'style.css'; ?>
</style>
<div class="container">
  <form action="" method="POST">  
            <div class="aba">
                <div class="item-1">
                    <label for="fio">Имя: </label>
                    <input type="text" name="fio" id="fio" placeholder="Введите имя">
                    <label for="email">Почта: </label>
                    <input type="email" name="email" id="email" placeholder="Введите почту">
                </div>
                
                <div class="item-1">
                    <label for="year">Год рождения: </label>
                    <select name="year" id="year">
                      <?php 
                          for ($i = 1922; $i <= 2022; $i++) {
                            printf('<option value="%d">%d год</option>', $i, $i);
                          }
                        ?>
                    </select>
                </div>
                
                
                <div class="item-1">
                    <label for="gender">Пол:</label>
                    <input type="radio" name="r1[]" value="male" id="gender"> Мужской
                    <input type="radio" name="r1[]" value="female" > Женский
                </div>
    
                
                <div class="item-1">
                    <label for="limbs">Количество конечностей: </label>
                    <input type="radio" name="r2[]" value="2" id="limbs">2
                    <input type="radio" name="r2[]" value="3">3
                    <input type="radio" name="r2[]" value="4">4
                    <input type="radio" name="r2[]" value="many">больше
                </div>
    
                <div class="item-2">
                    <select multiple="multiple" name="abilities[]" id="abilities">
                        <option value="Immortality">Бессмертие</option>
                        <option value="Passing through walls">Прохождение сквозь стены</option>
                        <option value="Levitation">Левитация</option>
                        </select>
                </div>
    
                <div class="item-2">
                    <label for="biography">Биография: </label>
                    <textarea name="biography" id="biography"></textarea>
                </div>
          
                    
    
                <div class="check">
                    <input type="checkbox" name="cb" id="cb">
                    <label for="cb">Согласен с обработкой персональных данных.</label>
                </div>
      
                <div class="button">
                    <input type="submit" value="Отправить">
                </div>    
            </div>
        </form>
    </div>   