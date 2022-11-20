<!DOCTYPE html>
<html>
  <head>
  <title> Promotions Draw-VFPNG</title>
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
          <div class="modal-content modal-dialog">
              <div class="modal-header">
                  <button class="close" id="modal-1-close">&times;</button>
              </div>
              <div class="modal-body" id="modal-1-body">
              </div>
          </div>
      </div>
      <main class="container-fluid">
          <div class="header" id="header">
              <div id="varnote" class="container">
                  <img src="images/logo-footer.png">
                  <h1> Promotion Draw  Portal </h1>
                  <div class="copyright">Vodafone PNG &copy; <span id="year"></span></div>
              </div>
              <div id="main-nav">
                    <div class="d-flex justify-content-center">
                        <button type="button" class="button btn btn-outline-danger  btn-lg" id="reset">Reset</button>
                        <button type="button" class="button  btn btn-outline-secondary btn-lg" id="save-and-update">Save &amp; Update</button>
                        <button type="button" class="button  btn btn-outline-primary btn-lg" id="nameList">Entries</button>
                        <button type="button" class="button  btn btn-outline-info btn-lg" id="upload">Load Entries</button>
                        <button type="button" class="button  btn btn-outline-info btn-lg" id="shw-results">Show results</button>
                        <button type="button" class="button  btn btn-outline-success btn-lg" id="go-btn">GO &#8594;</button>
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
      <script src="./js/main.js"></script>
  </body>
</html>
