<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="./javascript/functions.js"></script>
</head>

<body>

    <div class="container">
        <h2>Information about your rention period</h2>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="owner-first-name">owner first name</label>
                <input type="text" class="form-control" id="owner-first-name" placeholder="owner first name"
                    name="owner-first-name">
            </div>
            <div class="form-group">
                <label for="owner-last-name">owner last name</label>
                <input type="text" class="form-control" id="owner-last-name" placeholder="owner last name"
                    name="owner-last-name">
            </div>
            <div class="form-group">
                <label for="apartment-adress">apartment adress</label>
                <input type="text" class="form-control" id="apartment-adress" placeholder="apartment adress"
                    name="apartment-adress">
            </div>

            <div class="form-group">
                <label for="renting-start">renting start</label>
                <input type="date" class="form-control" id="renting-start" placeholder="renting start"
                    name="renting-start">
            </div>

            <div class="form-group">
                <label for="renting-end">renting end</label>
                <input type="date" class="form-control" id="renting-end" placeholder="renting end"
                    name="renting-end">
            </div>

            <div class="form-group">
                <label for="renting-rating">renting rating</label>
                <select name="renting-rating" id="renting-rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div> 
        
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</body>

</html>