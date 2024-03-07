<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <div class="row row_container">
      <div class="column">
        <div class="container-1">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="img/mobil1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/mobil2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/mobil3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        
      </div>
      <div class="column">
        <div class="container column-form color">
          <h4 class="heading-login">Daftar</h4>
          <p class="color-grey">Selamat datang di RentCars!</p>
        </div>
        <div class="container column-form">
          <div class="mb-3 color">
            <label for="exampleFormControlInput1" class="form-label"><b>Username</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan username">
          </div>
          <div class="mb-3 color">
            <label for="exampleFormControlInput1" class="form-label"><b>Alamat</b></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan alamat email">
          </div>
          <div class="mb-3 color">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Nomor Telepon</b></label>
            <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="(+62)">
          </div>
          <div class="mb-3 color">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Nomor SIM</b></label>
            <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="***************">
          </div>
          <div class="d-grid gap-2 btn-login">
            <button class="btn btn-primary" type="submit">Daftar</button>
            
          </div>
      </div>
      <div class="notes-register">
        <p class="color-grey">Sudah mempunyai akun? <a href='regiter.blade.php' class="color">Masuk</a></p> 
      </div>
        
      </div>
      </div>
    </div>

  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        
        
        
        <script src="" async defer></script>
    </body>
</html>