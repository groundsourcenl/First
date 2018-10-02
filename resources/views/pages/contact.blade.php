<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>First Post-Contact </title>
  </head>
  <body>
                <!--Ddefault Bootstrap Nav bar--> 
   
    <nav class="navbar navbar-default">
        <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">First Post</a>
            </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="/about">About</a></li>
                    <li class="active"><a href="/contact">Contact</a></li>  
                </ul>
           
            <ul class="nav navbar-nav navbar-right">
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                </li>
            </ul>
            </div>      <!-- /.navbar-collapse -->
        </div>          <!-- /.container-fluid -->
    </nav>   <!-- End of Default Bootstrap Nav bar--> 

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" >
                <h1>Contact Me</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label> <br>
                        <input type="email" id="email" name="email" class="form-control"> 
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label> <br>
                        <input type="subject" id="subject" name="subject" class="form-control"> 
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label> <br>
                        <textarea name="message" id="message" placeholder="Type your message here" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success form-control" value="Submit">
                    </div>
                </form>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery3.min.js"></script>     
   <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>