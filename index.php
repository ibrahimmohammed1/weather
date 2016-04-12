<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"> </script> 
  <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
  <div class="container">

    <div class="row">

      <div class="col-md-6 col-md-offset-3 center">
          
          <form>

            <h1 class="center white">Weather Predictor</h1>
            <p class="lead center white">Get latest weathr status for your city</p>
            
            <div class="form-group">

                <input id="city" type="text" class="form-control" name="city" placeholder="Please enter your city Eg. Lodon, San Francisco"/>

            </div>
            <button id="findmyweather" class="btn btn-success btn-lg">Find My Weather</button>
          </form>
          <div id="result"class="alert alert-success">Success!</div>
          <div id= "fail" class="alert alert-danger">sorry couldn't find weather data for this city</div>
          <div id= "nocity" class="alert alert-danger">Please Enter a city</div>
          <div id= "nolocation" class="alert alert-danger">No Location Found</div>

      </div>
      
    </div>
  </div>
<div id="map_canvas"></div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>