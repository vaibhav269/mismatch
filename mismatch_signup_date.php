
<select id="DOBDay" name="DOBDay" class="birthdate">
          <option> - Day - </option>
          <?php
               for($i=1;$i<=31;$i++)
                    {
                         echo "<option value='$i'>$i</option>";
                    }
                    ?>
     </select>


     <select id="DOBMonth" name="DOBMonth" class="birthdate">
          <option> - Month - </option>
               <option value="January">January</option>
               <option value="Febuary">Febuary</option>
               <option value="March">March</option>
               <option value="April">April</option>
               <option value="May">May</option>
               <option value="June">June</option>
               <option value="July">July</option>
               <option value="August">August</option>
               <option value="September">September</option>
               <option value="October">October</option>
               <option value="November">November</option>
               <option value="December">December</option>
     </select>

     <select id="DOBYear" name="DOBYear" class="birthdate">
          <option> - Year - </option>
          <?php
               for($i=2017;$i>=1967;$i--)
                    {
                         echo "<option value='$i'>$i</option>";
                    }
                    ?>
     </select><br>
