<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Signature</title>

	<!-- Bootstrap v5.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
	<!-- Fontawesome v5.10-->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />  
</head>
<body>
<div class="container">

      <!-- Move In/Out Form -->
      <form action="MovingServlet" method="post" id="moving_form" enctype="multipart/form-data">

      <div class="form_body mt-4">

        <!-- Declaration Section -->
        <section class="card mb-2">
          <div class="card-body">
            <div class="section_title"> Declaration</div>
              <div class="declaration_signa">
                <div class="row justify-content-md-start">
                  <div class="col-md-6 mt-3">
                    <div class="sign">
                      <label for="app_sign" class="form-label"
                        >Signature of Owner/Tenant</label
                      >
                      <input
                        type="text"
                        id="app_sign"
                        style="border-radius: 5px"
                      />
                    </div>
                    <div class="detail">
                      <div id="dec_name">Name:</div>
                      <div id="date_sign">Date:</div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>	
        <!-- Declaration Section End-->
      </div>
      </form>
      <!-- Move In/Out Form End-->
    </div>
    


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="js/signature.js"></script>

    <script>
        $(document).ready(function(){ 
            var owner_sign = $('#app_sign').SignaturePad({
                allowToSign: true,
                img64: 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7',
                border: '1px solid #c7c8c9',
                width: '100%',
                height: '10em',
                callback: function (data, action) {
                    $('#moving_form').append('<input type="hidden" id="app_signD" name="app_sign" value="' + data + '""/>');
                }
            });            
        })
    </script>
	


</body>
</html>
