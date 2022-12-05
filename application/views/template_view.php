<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='../../css/style.css'>
   
    
</head>

<body>

<div class="nav nav1">  
            <!--Отображаем вверху кнопки авторизации и регистрации-->
            <button class="open-button btn btn-secondary" type="button" onclick="open_formLog()">Войдите</button>        
            <button class="registration-button btn btn-outline-secondary" type="button" onclick="open_formReg()">Зарегистрируйтесь</button>
              
        </div>


        <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-1 bg-dark sidebar">
            <div class="d-flex flex-column align-items-center">
               
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Главная</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="/about" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">О нас</span></a>
                    </li>
               
                    <li>
                        <a href="/services" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Услуги</span> </a>
                    </li>

                    <li>
                        <a href="/contacts" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Контакты</span> </a>
                    </li>
                </ul>
               
                
            </div>
        </div>
        <div class="col">
        <?php include $content_view; ?>
        </div>
    </div>
</div>
 

</body> 

</html>