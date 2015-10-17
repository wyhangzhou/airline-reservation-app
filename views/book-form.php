<?php
//book-form for book-html.php
// return "
//         <div class='jumbotron' id='jumbotron-book'>
//             <div class='container'>
//                 <h1>Best place to start your journey.</h1>
//                 <p>Book your tickets in US at the lowest price.</p>
//             </div>

//             <form method='post' action='index.php?page=book' class='form-inline'>
// 				<select class='form-control' name='from'>
// 				  <option>1</option>
// 				  <option>2</option>
// 				  <option>3</option>
// 				  <option>4</option>
// 				  <option>5</option>
// 				</select>
//                 <input type='text' class='form-control' name='to' placeholder='To'/>
//                 <input type='text' class='form-control' name='date' placeholder='Date'/>

//                 <input type='submit' class='form-control' name='search' value='search' />
//             </form>
//         </div>";
return "<div class='jumbotron' id='jumbotron-book'>
            <div class='container'>
                <h1>Best place to start your journey.</h1>
                <p>Book your tickets in US at the lowest price.</p>
            </div>

            <form method='post' action='index.php?page=book' class='form-inline'>
		
		
		
		<!-- dropdown for from -->
		
		<label>
		
			<select class='form-control' name='from' id='from'>
		<option>From</option>
			  <option value='PHX'>Phoenix</option>
			  <option value='LAX'>Los Angeles</option>
			  <option value='LAS'>Las Vegas</option>
			  <option value='JFK'>New York</option>
			  
			</select>

		</label>
		
		
		
		
		<label>
			<select class='form-control'name='to' id='to'>
		<option>To</option>
			  <option value='PHX'>Phoenix</option>
			  <option value='LAX'>Los Angeles</option>
			  <option value='LAS'>Las Vegas</option>
			  <option value='JFK'>New York</option>
					
			</select>
		</label>
                <input class='form-control' type='text' placeholder='Pick a departure date'  id='date' name='date'>


        <script src='js/jquery-1.11.1.js'></script>
        <script src='js/bootstrap-datepicker.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		
		
        <script type='text/javascript'>
           
		
            $(document).ready(function () {
                
                $('#date').datepicker({
                    format: 'yyyy-mm-dd'
                });  
            
            });
        </script>
                <input type='submit' class='form-control' name='search' value='search' />
            </form>
        </div>";

