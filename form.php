<!DOCTYPE html>
<html>
    <head>
        <title>New Country</title>
    </head>



    <body>
        <form  action="./process.php" method="post">
        <div>
            <label>Country Name:</label>
            <input type="text" name="name">
        
        </div>
        <div>
            <label>Country description:</label>
            <textarea name="des"></textarea>
        
        </div>
        <div>
            <label>Country population</label>
            <input type="number" name="pop">
        
        </div> 
        <button>create</button>
        
        
        </form>
    
    </body>



</html>