<!DOCTYPE html>
<html>
  <head>
  <title> VF-PNG Promotions Draw</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/vf-icon.png">
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/foundation.min.css" />
    <link rel="stylesheet" href="./css/cosmo.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <script src="js/jquery-latest.min.js"></script>
  </head>
  <body>
      <div class="modal modal-open" id="modal-1">
          <div class="modal-content">
              <div class="modal-header">
                  <button class="close" id="modal-1-close">&times;</button>
              </div>
              <div class="modal-body" id="modal-1-body">
              </div>
          </div>
      </div>
      <div class="lights left-ligths">
         <p>Left</p> 
      </div>
      <div class="lights right-ligths">
        <p>Right</p>
      </div>
      <main class="container-fluid">
          <div class="header" id="header">
              <div id="varnote" class="container">
                  <img src="images/logo-footer.png">
                  <h1 class="text-capitalize"> Promotions  Draw</h1>
              </div>
              <div id="main-nav" id="row">
                    <div class="d-flex justify-content-left">
                        <button type="button" class="button  btn btn-outline-danger  btn-block" id="reset">Reset</button>
                        <button type="button" class="button  btn btn-outline-secondary btn-block" id="save-and-update">Save &amp; Update</button>
                        <button type="button" class="button  btn btn-outline-primary btn-block" id="nameList">Entries</button>
                        <button type="button" class="button  btn btn-outline-info btn-block" id="upload">Load Entries</button>
                        <button type="button" class="button  btn btn-outline-info btn-block" id="shw-results">Show results</button>
                        <button type="button" class="button  btn btn-outline-success btn-block" id="go-btn">GO &#8594;</button>
                    </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div id="dropdown">
                      <h3 style="text-align:center;margin-top:3px;"><span
                          id="entries" class="text-primary"></span></h3>
                      <p style="text-align:center;margin-top:3px;" id="headline"> </p>
                      <form action="/" id="fileLoadingForm" enctype="multipart/form-data">
                        <input type="hidden" name="upfile" value="1">
                        <input type="file" id="dataFile" name="upfile" accept=".csv,.xlsx"/>
                      </form>
                      <div class="container">
                          <div id="names" class="container"><textarea name="namesbox" id="namesbox"></textarea></div>
                      </div>
                      <div id="values"></div>
                  </div>
              </div>
      </main>
      <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted fixed-bottom">
  <!-- Copyright -->
  <div class="text-reset fw-bold text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <a class="text-reset fw-bold text-left p-4 copyright" href="https://vodafone.com.pg/" target="_blank">Vodafone PNG</a> &copy; <span id="year"></span>
    <a class="text-reset fw-bold text-right p-4" id="instructions" href="#"> Users Instruction</a>
  </div>
  <!-- Copyright -->
</footer>

      <script src="./js/main.js"></script>
  </body>
</html>
