 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <title>Practice Form</title>
   <link rel="stylesheet" type="text/css" href="">
 </head>
 <body>
 <form action="results.php">
         <span>Name:</span><br/>
         <input class="info" type="text" name="Name" id="name" placeholder="Full Name">
         <br/>
         <br/>

         <span>Email:</span><br/>
         <input class="info" type="text" name="Email" id="email" placeholder="Email">
         <br/>
         <span id="lNameResponse"></span>
         <br/>

     <table style="width: 600px; font-family: tahoma; margin: auto">
   	   	<tr>
   	  	    <td colspan="2"><span>Computer Science</span><input id="card" type="radio"  name="major" value="cS"></td>
   	  	    <td colspan="2"><span>Web Design and Development</span><input id="card" type="radio" name="major" value="wDD"></td>
   	  	    <td colspan="2"><span>Computer Information Technology</span><input id="card" type="radio" name="major" value="cIT"></td>
             <td colspan="2"><span>Computer Engineering</span><input id="card" type="radio" name="major" value="cE"></td>
   	    </tr>
   	 </table>

       <textarea name="comment" placeholder="Comment"></textarea>

     <table style="width: 600px; font-family: tahoma; margin: auto">
            <tr>
             <td colspan="2"><span>North America</span><br/><span></span><br/><input type="checkbox" name="nA"></td>
             <td colspan="2"><span>South America</span><br/><span></span><br/><input  type="checkbox" name="sA"></td>
             <td colspan="2"><span>Europe</span><br/><span></span><br/><input type="checkbox" name="eU"></td>
             <td colspan="2"><span>Asia</span><br/><span></span><br/><input type="checkbox" name="asia"></td>
             <td colspan="2"><span>Africa</span><br/><span></span><br/><input type="checkbox" name="aF"></td>
             <td colspan="2"><span>Antartica</span><br/><span></span><br/><input type="checkbox" name="ant"></td>
             <td colspan="2"><span>Australia</span><br/><span></span><br/><input type="checkbox" name="aU"></td>
          </tr>
       </table>

         <br/><br/>
         <input type="submit" value="Submit">
         <input type="reset" value="Reset to defaults">
         <br/>
         <br/>
         <br/>
      </form> 
   </div>

</body>
</html>