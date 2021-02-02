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
            <textarea name="description"></textarea>
        
        </div>
        <div>
            <label>Country population</label>
            <input type="number" name="population">
        
        </div> 
        <button>create</button>
        
        
        </form>
    
    </body>



</html>