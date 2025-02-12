<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="icon" href="https://carreiradocente.unifametro.edu.br/img/logo-branca.png">
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" >
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.7.0/css/colReorder.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap.css">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "q5myjuk1p4");
        </script>
      <title>Quadro de horário</title>
   </head>
   
   <body>
        <div class="container">
            <header class="d-flex mt-5 flex-column flex-md-row justify-content-between align-items-center">
                <div class="text-center">
                    <a href="/" class="d-flex mb-2">
                        <img src="{{ asset('logo.png') }}" alt="Logo Unifametro" width="262em" />
                    </a>
                    <!-- SVG e "zap" abaixo da logo em telas pequenas -->
                    <a href="https://api.whatsapp.com/send?phone=558532066418" target="_blank" >
                        <div class="d-flex align-items-center gap-2 mt-2 d-md-none justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20.4054 3.4875C18.1607 1.2375 15.1714 0 11.9946 0C5.4375 0 0.101786 5.33571 0.101786 11.8929C0.101786 13.9875 0.648214 16.0339 1.6875 17.8393L0 24L6.30536 22.3446C8.04107 23.2929 9.99643 23.7911 11.9893 23.7911H11.9946C18.5464 23.7911 24 18.4554 24 11.8982C24 8.72143 22.65 5.7375 20.4054 3.4875ZM11.9946 21.7875C10.2161 21.7875 8.475 21.3107 6.95893 20.4107L6.6 20.1964L2.86071 21.1768L3.85714 17.5286L3.62143 17.1536C2.63036 15.5786 2.11071 13.7625 2.11071 11.8929C2.11071 6.44464 6.54643 2.00893 12 2.00893C14.6411 2.00893 17.1214 3.0375 18.9857 4.90714C20.85 6.77679 21.9964 9.25714 21.9911 11.8982C21.9911 17.3518 17.4429 21.7875 11.9946 21.7875ZM17.4161 14.3839C17.1214 14.2339 15.6589 13.5161 15.3857 13.4196C15.1125 13.3179 14.9143 13.2696 14.7161 13.5696C14.5179 13.8696 13.95 14.5339 13.7732 14.7375C13.6018 14.9357 13.425 14.9625 13.1304 14.8125C11.3839 13.9393 10.2375 13.2536 9.08571 11.2768C8.78036 10.7518 9.39107 10.7893 9.95893 9.65357C10.0554 9.45536 10.0071 9.28393 9.93214 9.13393C9.85714 8.98393 9.2625 7.52143 9.01607 6.92679C8.775 6.34821 8.52857 6.42857 8.34643 6.41786C8.175 6.40714 7.97679 6.40714 7.77857 6.40714C7.58036 6.40714 7.25893 6.48214 6.98571 6.77679C6.7125 7.07679 5.94643 7.79464 5.94643 9.25714C5.94643 10.7196 7.0125 12.1339 7.15714 12.3321C7.30714 12.5304 9.25179 15.5304 12.2357 16.8214C14.1214 17.6357 14.8607 17.7054 15.8036 17.5661C16.3768 17.4804 17.5607 16.8482 17.8071 16.1518C18.0536 15.4554 18.0536 14.8607 17.9786 14.7375C17.9089 14.6036 17.7107 14.5286 17.4161 14.3839Z" fill="#131414"/>
                            </svg>
                            <span class="whatsapp">Whatsapp</span>
                        </div>
                    </a>
                </div>
                <!-- SVG e "zap" ao lado da logo em telas maiores -->
                <a href="https://api.whatsapp.com/send?phone=558532066418" target="_blank" >
                    <div class="d-none d-md-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20.4054 3.4875C18.1607 1.2375 15.1714 0 11.9946 0C5.4375 0 0.101786 5.33571 0.101786 11.8929C0.101786 13.9875 0.648214 16.0339 1.6875 17.8393L0 24L6.30536 22.3446C8.04107 23.2929 9.99643 23.7911 11.9893 23.7911H11.9946C18.5464 23.7911 24 18.4554 24 11.8982C24 8.72143 22.65 5.7375 20.4054 3.4875ZM11.9946 21.7875C10.2161 21.7875 8.475 21.3107 6.95893 20.4107L6.6 20.1964L2.86071 21.1768L3.85714 17.5286L3.62143 17.1536C2.63036 15.5786 2.11071 13.7625 2.11071 11.8929C2.11071 6.44464 6.54643 2.00893 12 2.00893C14.6411 2.00893 17.1214 3.0375 18.9857 4.90714C20.85 6.77679 21.9964 9.25714 21.9911 11.8982C21.9911 17.3518 17.4429 21.7875 11.9946 21.7875ZM17.4161 14.3839C17.1214 14.2339 15.6589 13.5161 15.3857 13.4196C15.1125 13.3179 14.9143 13.2696 14.7161 13.5696C14.5179 13.8696 13.95 14.5339 13.7732 14.7375C13.6018 14.9357 13.425 14.9625 13.1304 14.8125C11.3839 13.9393 10.2375 13.2536 9.08571 11.2768C8.78036 10.7518 9.39107 10.7893 9.95893 9.65357C10.0554 9.45536 10.0071 9.28393 9.93214 9.13393C9.85714 8.98393 9.2625 7.52143 9.01607 6.92679C8.775 6.34821 8.52857 6.42857 8.34643 6.41786C8.175 6.40714 7.97679 6.40714 7.77857 6.40714C7.58036 6.40714 7.25893 6.48214 6.98571 6.77679C6.7125 7.07679 5.94643 7.79464 5.94643 9.25714C5.94643 10.7196 7.0125 12.1339 7.15714 12.3321C7.30714 12.5304 9.25179 15.5304 12.2357 16.8214C14.1214 17.6357 14.8607 17.7054 15.8036 17.5661C16.3768 17.4804 17.5607 16.8482 17.8071 16.1518C18.0536 15.4554 18.0536 14.8607 17.9786 14.7375C17.9089 14.6036 17.7107 14.5286 17.4161 14.3839Z" fill="#131414"/>
                        </svg>
                        <span class="whatsapp">Whatsapp</span>
                    </div>
                </a>
            </header>
        </div>
    
        <div class="container custom-container">
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-md-5">
                    <div class="text-center d-flex align-items-center quadro">
                        <h3 class="quadro-horario">Quadro de horário</h3>
                        <div class="ms-2 rounded-circle d-flex align-items-center justify-content-center div-calendario">
                            <svg class="calendario" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 26 28" fill="none">
                                <path d="M2.88889 28C2.09444 28 1.41435 27.7258 0.848611 27.1775C0.28287 26.6292 0 25.97 0 25.2V5.6C0 4.83 0.28287 4.17083 0.848611 3.6225C1.41435 3.07417 2.09444 2.8 2.88889 2.8H4.33333V0H7.22222V2.8H18.7778V0H21.6667V2.8H23.1111C23.9056 2.8 24.5856 3.07417 25.1514 3.6225C25.7171 4.17083 26 4.83 26 5.6V25.2C26 25.97 25.7171 26.6292 25.1514 27.1775C24.5856 27.7258 23.9056 28 23.1111 28H2.88889ZM2.88889 25.2H23.1111V11.2H2.88889V25.2ZM2.88889 8.4H23.1111V5.6H2.88889V8.4ZM13 16.8C12.5907 16.8 12.2477 16.6658 11.9708 16.3975C11.694 16.1292 11.5556 15.7967 11.5556 15.4C11.5556 15.0033 11.694 14.6708 11.9708 14.4025C12.2477 14.1342 12.5907 14 13 14C13.4093 14 13.7523 14.1342 14.0292 14.4025C14.306 14.6708 14.4444 15.0033 14.4444 15.4C14.4444 15.7967 14.306 16.1292 14.0292 16.3975C13.7523 16.6658 13.4093 16.8 13 16.8ZM7.22222 16.8C6.81296 16.8 6.46991 16.6658 6.19306 16.3975C5.9162 16.1292 5.77778 15.7967 5.77778 15.4C5.77778 15.0033 5.9162 14.6708 6.19306 14.4025C6.46991 14.1342 6.81296 14 7.22222 14C7.63148 14 7.97454 14.1342 8.25139 14.4025C8.52824 14.6708 8.66667 15.0033 8.66667 15.4C8.66667 15.7967 8.52824 16.1292 8.25139 16.3975C7.97454 16.6658 7.63148 16.8 7.22222 16.8ZM18.7778 16.8C18.3685 16.8 18.0255 16.6658 17.7486 16.3975C17.4718 16.1292 17.3333 15.7967 17.3333 15.4C17.3333 15.0033 17.4718 14.6708 17.7486 14.4025C18.0255 14.1342 18.3685 14 18.7778 14C19.187 14 19.5301 14.1342 19.8069 14.4025C20.0838 14.6708 20.2222 15.0033 20.2222 15.4C20.2222 15.7967 20.0838 16.1292 19.8069 16.3975C19.5301 16.6658 19.187 16.8 18.7778 16.8ZM13 22.4C12.5907 22.4 12.2477 22.2658 11.9708 21.9975C11.694 21.7292 11.5556 21.3967 11.5556 21C11.5556 20.6033 11.694 20.2708 11.9708 20.0025C12.2477 19.7342 12.5907 19.6 13 19.6C13.4093 19.6 13.7523 19.7342 14.0292 20.0025C14.306 20.2708 14.4444 20.6033 14.4444 21C14.4444 21.3967 14.306 21.7292 14.0292 21.9975C13.7523 22.2658 13.4093 22.4 13 22.4ZM7.22222 22.4C6.81296 22.4 6.46991 22.2658 6.19306 21.9975C5.9162 21.7292 5.77778 21.3967 5.77778 21C5.77778 20.6033 5.9162 20.2708 6.19306 20.0025C6.46991 19.7342 6.81296 19.6 7.22222 19.6C7.63148 19.6 7.97454 19.7342 8.25139 20.0025C8.52824 20.2708 8.66667 20.6033 8.66667 21C8.66667 21.3967 8.52824 21.7292 8.25139 21.9975C7.97454 22.2658 7.63148 22.4 7.22222 22.4ZM18.7778 22.4C18.3685 22.4 18.0255 22.2658 17.7486 21.9975C17.4718 21.7292 17.3333 21.3967 17.3333 21C17.3333 20.6033 17.4718 20.2708 17.7486 20.0025C18.0255 19.7342 18.3685 19.6 18.7778 19.6C19.187 19.6 19.5301 19.7342 19.8069 20.0025C20.0838 20.2708 20.2222 20.6033 20.2222 21C20.2222 21.3967 20.0838 21.7292 19.8069 21.9975C19.5301 22.2658 19.187 22.4 18.7778 22.4Z" fill="#F6741C"/>
                              </svg>
                        </div>
                    </div>
        
                    <div class="input-group input-group-sm mb-3">
                        <label for="basic-url" class="form-label cpf">CPF</label>
                        <div class="d-flex flex-column flex-md-row w-100">
                            <input type="text" class="form-control" name="cpf" id="cpf" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            <span class="mt-2 mt-md-0 mr-3 w-md-auto" id="butao">
                                <a type="button" class="btn btn-success w-100 pesquisar">pesquisar</a>
                            </span>
                           
                            <select name="tipo" id="tipo" class="form-select">
                                <option value="1">ALUNO</option>
                                <option value="2">PROFESSOR</option>
                            </select>
                        </div>
                    </div>
                </div>
        
                <div class="col-12 col-md-6">
                    <div class="border border-success rounded p-3">
                        <label class="form-label nome" >Nome Completo</label>
                        <span id="Aluno" type="text" class=" mb-2 input-nome">—</span>
                        <div class="row">
                            <div class="col-4">
                                <label class="form-label matricula">Matrícula</label>
                                <span id="Matricula" type="text" class=" input-matricula">—</span> 
                            </div>
                            <div class="col-8">
                                <label class="form-label curso">Curso</label>
                                <span id="Curso" type="text" class=" input-curso">—</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div id="quadro_horario" class="w-100 mt-4"></div>
        
            <div id="aviso" class="input-group bg-light p-3 mt-3 d-flex align-items-center inseir-svg">
                <svg  xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 77 77" fill="none">
                    <path d="M40.8911 74.5112C40.3342 74.6349 39.7773 74.6968 39.2204 74.6968H37.5498C32.4142 74.6968 27.5879 73.7223 23.0711 71.7732C18.5542 69.8241 14.6251 67.179 11.2839 63.8377C7.94262 60.4965 5.29746 56.5674 3.3484 52.0505C1.39934 47.5337 0.424805 42.7074 0.424805 37.5718C0.424805 32.4362 1.39934 27.6099 3.3484 23.093C5.29746 18.5762 7.94262 14.6471 11.2839 11.3058C14.6251 7.96459 18.5542 5.31943 23.0711 3.37037C27.5879 1.42131 32.4142 0.446777 37.5498 0.446777C42.6854 0.446777 47.5117 1.42131 52.0286 3.37037C56.5454 5.31943 60.4745 7.96459 63.8158 11.3058C67.157 14.6471 69.8022 18.5762 71.7512 23.093C73.7003 27.6099 74.6748 32.4362 74.6748 37.5718V39.2424C74.6748 39.7993 74.6129 40.3562 74.4892 40.913L67.2498 38.6855V37.5718C67.2498 29.2805 64.3726 22.2577 58.6182 16.5033C52.8639 10.749 45.8411 7.87178 37.5498 7.87178C29.2586 7.87178 22.2357 10.749 16.4814 16.5033C10.727 22.2577 7.84981 29.2805 7.84981 37.5718C7.84981 45.863 10.727 52.8858 16.4814 58.6402C22.2357 64.3946 29.2586 67.2718 37.5498 67.2718H38.6636L40.8911 74.5112ZM69.1989 76.553L53.3279 60.6821L48.6873 74.6968L37.5498 37.5718L74.6748 48.7093L60.6601 53.3499L76.5311 69.2208L69.1989 76.553Z" fill="#B0B8B3"/>
                </svg>
                
                <span class="inserir" style="font-family: Montserrat; font-style: normal; font-size: 18px; color: #5e5e5e; font-weight: 400px; line-height: 28px; display: flex; align-items: center; margin-left: 10px">
                    Insira seu CPF para acessar seu quadro de horários
                </span>
            </div>

            <div id="loading-overlay" style="
                display: none;
                position: fixed;
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                z-index: 9999;
            ">
                <div id="loading" style="
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background: rgba(240, 239, 239, 0.9);
                    padding: 20px;
                    border-radius: 10px;
                    text-align: center;
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
                    width: 90%; /* Para telas pequenas */
                    max-width: 400px; /* No máximo 400px */
                ">
                    <img src="https://s3-alpha-sig.figma.com/img/208d/2a61/9cc2534bfad1405f6ebd89c03d6facaf?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=Oh9ZzYCW4f92~YTUlyYKsUKlJVTGoa-Qs0sa4lQ5pa8pPWk30BNMEi1VVyfGItZO2EG6FipnL-a55YcQmVucD2Ml69~N2-c8zcc9CNOoSw9ptMo0WlCWVCCrEvXO6IOX~GbgZ1kDQnYve29D9fF3Tu6csiLmQX21Wos8Nhb4rluje4MVgcSAilvglxGOM1a7ckN5KzRq07wSe1hMbsPm7-da7-o0HdDRWbVAHf1d9GcKuPASION0oW0p0346sJSaRXhrMneqevs6OT3HuaN0lHQBdLtbJfDwLO0jo8pNxLVqG-6qBSjcTXFTP11zY3aSUg6~YMnLmHPiPl75BncHbA__" 
                        alt="GIF" width="80" height="40" id="loading-gif">

                    <span id="loading-text" style="
                        font-family: Montserrat; 
                        font-size: 14px; 
                        color: #3B3D3C; 
                        margin-top: 10px; 
                        display: block;
                    ">
                        Organizando sua grade, aguarde um momento...
                    </span>
                </div>
            </div>
        </div>
        
        <div class="container d-flex justify-content-center flex-column flex-sm-row mt-5">
            <a href="https://portal.unifametro.edu.br/FrameHTML/Web/App/Edu/PortalEducacional/login/" target="_blank" class="custom-btn mx-2 text-center mb-3 mb-sm-0">ACESSAR PORTAL DO ALUNO</a>
            <a href="https://educacaoonline.unifametro.edu.br/login/index.php" target="_blank" class="custom-btn mx-2 text-center mb-3 mb-sm-0">ACESSAR EDUCAÇÃO ONLINE</a>
        </div>
        
        <footer class="text-white py-4" style="background: #002A11; margin-top: 50px">
            <div class="container">
                <div class="row align-items-center text-center text-md-start">
                    
                    <div class="col-12 col-md-8 d-flex justify-content-center justify-content-md-start">
                        <img src="https://lpsiteti.unifametro.edu.br/wp-content/uploads/elementor/thumbs/splash-r0fyxmab431gxxkurf8cs7wlr4o98xtznd59sjxvxk.png" alt="Unifametro" class="img-fluid" style="max-height: 50px;">
                    </div>
                   
                    <div class="col-12 d-flex flex-column align-items-center align-items-md-end footer">
                        <a href="https://play.google.com/store/apps/details?id=com.unifametro.alunounifametro" target="_blank" class="mb-2">
                            <img src="{{ asset('google.png') }}" alt="Google Play" class="img-fluid" style="max-height: 40px;">
                        </a>
                        <a href="https://apps.apple.com/br/app/unifametro-online/id6636465568">
                            <img src="{{ asset('apple.png') }}" alt="App Store" class="img-fluid" style="max-height: 40px;">
                        </a>
                    </div>
                </div>
        
                <hr class="border-light my-3">
        
                <div class="d-flex justify-content-md-end justify-content-center">
                    <div class="text-center text-md-end">
                        <a href="https://www.instagram.com/unifametro/" target="_blank" class="text-white mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="https://www.facebook.com/unifametro" target="_blank" class="text-white mx-2"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="https://www.youtube.com/unifametro" class="text-white mx-2"><i class="fab fa-youtube fa-lg"></i></a>
                        <a href="https://www.linkedin.com/company/unifametro" target="_blank" class="text-white mx-2"><i class="fab fa-linkedin fa-lg"></i></a>
                        {{-- <a href="https://www.youtube.com/unifametro" target="_blank" class="text-white mx-2"><i class="fab fa-tiktok fa-lg"></i></a> --}}
                    </div>
                </div>
                <div class="d-flex flex-column align-items-end mt-3 small text-right cetralizar">
                    <small class="nt">Desenvolvido por NTI Unifametro</small>
                    <small class="copyright">Copyright © 2025 Unifametro. Todos os direitos reservados.</small>
                </div>
            </link>
        </footer>
     
        <script src="https://code.jquery.com/jquery-3.7.0.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        <script src="https://kit.fontawesome.com/12d00c3c33.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.js" integrity="sha512-kNpUJvzoDikOSOvP7VCpuTYzq/DQ409v6Du+bN96RA70hvDlfMcfbKBM7fid6mpYHFqA08UDoSxTQgLRYxFllw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

        <script>
            
            $(document).ready(function () {
                $('#cpf').mask('99999999999');
                
                $("#butao").on("click", function() {
                    $.ajax({
                        url: "{{route('quadro.ajax')}}",
                        type: "post",
                        data: {
                            _token: '{{csrf_token()}}',
                            cpf: $("#cpf").val(),
                            tipo: $("#tipo").val(),
                        },
                        beforeSend: function() {
                            $("#aviso").attr("style", "display: none !important;");
                            $("#loading-overlay").fadeIn();
                        },
                        success: function(response) {
                            if (!response.data || response.data.length === 0) {
                                $("#aviso").attr("style", "display: flex !important;");
                                Swal.fire({
                                    html: `
                                        <div class="message mt-3 bg-light p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 53 52" fill="none">
                                                    <path d="M5.76 51.9875L0.5625 46.79L21.3525 26L0.5625 5.20995L5.76 0.0124512L26.55 20.8025L47.34 0.0124512L52.5375 5.20995L31.7475 26L52.5375 46.79L47.34 51.9875L26.55 31.1975L5.76 51.9875Z" fill="#B0B8B3"/>
                                                </svg>
                                            <div class="text-with-icon">
                                                <span class="message-text">Parece que não há disciplinas cadastradas.</span>
                                                <span class="message-text"></br><strong>Novato:</strong> Procurar o Quero ser Aluno.</span></br>
                                                <span class="message-text"><strong>Veterano:</strong> Procurar o Atendimento ao aluno.</span></br>
                                                <div class="text-with-icon">
                                                    <span class="message-text">
                                                        <strong>Ambos atendimentos ficam no primeiro andar</strong>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none">
                                                            <path d="M8 0C3.58 0 0 3.58 0 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zm.5-10H7.5v4h1v-4zm0 6H7.5v2h1v-2z" fill="#F5A623"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    `,
                                    customClass: {
                                        html: 'swal-html-content', 
                                    },
                            
                                });

                                $("#quadro_horario").html(""); 
                                return;
                            }

                            let horarios = response.data;
                            let tabelaHtml = `<div class="row">`;
                            let index = 0;

                            $.each(horarios, function(dia, registros) {
                                let backgroundClass = index % 2 === 0 ? 'bg-light' : ''; 
                                tabelaHtml += `<div class="col-12 mb-3 ${backgroundClass}"> 
                                    <div class="d-flex flex-column flex-md-row align-items-md-center">
                                        <h5 class="mb-2 mb-md-0 dia">${dia}</h5>
                                        <div class="container">
                                            <div class="d-flex flex-wrap justify-content-center justify-content-md-start mt-3">`;

                                $.each(registros, function(index, item) {
                                   
                                    $('#Aluno').text(item.ALUNO != null ? item.ALUNO : item.PROFESSOR);
                                    $('#Curso').text(item.CURSO);
                                    $('#Matricula').text(item.MATRICULA != null ? item.MATRICULA : item.CHAPA);


                                    tabelaHtml += `<div class="col-sm-4 col-md-4 col-lg-3 mb-3 d-flex card-responsivo">
                                        <div class="card flex-grow-1" style="border-radius: 16px; border: 1px solid var(--Neutral-400, #B8B8B8); margin-left: 10px;">
                                            <div class="card-body">
                                                <h6 class="card-title" style="">${item.DISCIPLINA}</h6>
                                                <p class="card-text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                        <mask id="mask0_1271_32" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                                                            <rect width="28" height="28" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_1271_32)">
                                                            <path d="M17.8497 19.4833L19.483 17.8499L15.1663 13.5333V8.16659H12.833V14.4666L17.8497 19.4833ZM13.9997 25.6666C12.3858 25.6666 10.8691 25.3603 9.44968 24.7478C8.03023 24.1353 6.79551 23.3041 5.74551 22.2541C4.69551 21.2041 3.86426 19.9694 3.25176 18.5499C2.63926 17.1305 2.33301 15.6138 2.33301 13.9999C2.33301 12.386 2.63926 10.8694 3.25176 9.44992C3.86426 8.03047 4.69551 6.79575 5.74551 5.74575C6.79551 4.69575 8.03023 3.8645 9.44968 3.252C10.8691 2.6395 12.3858 2.33325 13.9997 2.33325C15.6136 2.33325 17.1302 2.6395 18.5497 3.252C19.9691 3.8645 21.2038 4.69575 22.2538 5.74575C23.3038 6.79575 24.1351 8.03047 24.7476 9.44992C25.3601 10.8694 25.6663 12.386 25.6663 13.9999C25.6663 15.6138 25.3601 17.1305 24.7476 18.5499C24.1351 19.9694 23.3038 21.2041 22.2538 22.2541C21.2038 23.3041 19.9691 24.1353 18.5497 24.7478C17.1302 25.3603 15.6136 25.6666 13.9997 25.6666ZM13.9997 23.3333C16.5858 23.3333 18.7879 22.4242 20.6059 20.6062C22.424 18.7881 23.333 16.586 23.333 13.9999C23.333 11.4138 22.424 9.21172 20.6059 7.39367C18.7879 5.57561 16.5858 4.66659 13.9997 4.66659C11.4136 4.66659 9.21148 5.57561 7.39342 7.39367C5.57537 9.21172 4.66634 11.4138 4.66634 13.9999C4.66634 16.586 5.57537 18.7881 7.39342 20.6062C9.21148 22.4242 11.4136 23.3333 13.9997 23.3333Z" fill="#F6741C"/>
                                                        </g>
                                                    </svg> ${item.HORARIO} <br>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                        <mask id="mask0_1271_37" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                                                            <rect width="28" height="28" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_1271_37)">
                                                            <path d="M14.0003 13.9999C14.642 13.9999 15.1913 13.7714 15.6482 13.3145C16.1052 12.8576 16.3337 12.3083 16.3337 11.6666C16.3337 11.0249 16.1052 10.4756 15.6482 10.0187C15.1913 9.56172 14.642 9.33325 14.0003 9.33325C13.3587 9.33325 12.8094 9.56172 12.3524 10.0187C11.8955 10.4756 11.667 11.0249 11.667 11.6666C11.667 12.3083 11.8955 12.8576 12.3524 13.3145C12.8094 13.7714 13.3587 13.9999 14.0003 13.9999ZM14.0003 22.5749C16.3725 20.3971 18.1323 18.4187 19.2795 16.6395C20.4267 14.8603 21.0003 13.2805 21.0003 11.8999C21.0003 9.78047 20.3246 8.04506 18.9732 6.69367C17.6219 5.34228 15.9642 4.66659 14.0003 4.66659C12.0364 4.66659 10.3788 5.34228 9.02741 6.69367C7.67602 8.04506 7.00033 9.78047 7.00033 11.8999C7.00033 13.2805 7.57394 14.8603 8.72116 16.6395C9.86838 18.4187 11.6281 20.3971 14.0003 22.5749ZM14.0003 25.6666C10.8698 23.0027 8.53158 20.5284 6.98574 18.2437C5.43991 15.9589 4.66699 13.8444 4.66699 11.8999C4.66699 8.98325 5.60519 6.65964 7.48158 4.92909C9.35796 3.19853 11.5309 2.33325 14.0003 2.33325C16.4698 2.33325 18.6427 3.19853 20.5191 4.92909C22.3955 6.65964 23.3337 8.98325 23.3337 11.8999C23.3337 13.8444 22.5607 15.9589 21.0149 18.2437C19.4691 20.5284 17.1309 23.0027 14.0003 25.6666Z" fill="#FF7431"/>
                                                        </g>
                                                    </svg> ${item.UNIDADE ?? 'SEM UNIDADE'} <br>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                        <mask id="mask0_1271_42" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                                                            <rect width="28" height="28" fill="#D9D9D9"/>
                                                        </mask>
                                                        <g mask="url(#mask0_1271_42)">
                                                            <path d="M3.5 24.5V22.1667H5.83333V3.5H17.5V4.66667H22.1667V22.1667H24.5V24.5H19.8333V7H17.5V24.5H3.5ZM12.8333 15.1667C13.1639 15.1667 13.441 15.0549 13.6646 14.8313C13.8882 14.6076 14 14.3306 14 14C14 13.6694 13.8882 13.3924 13.6646 13.1688C13.441 12.9451 13.1639 12.8333 12.8333 12.8333C12.5028 12.8333 12.2257 12.9451 12.0021 13.1688C11.7785 13.3924 11.6667 13.6694 11.6667 14C11.6667 14.3306 11.7785 14.6076 12.0021 14.8313C12.2257 15.0549 12.5028 15.1667 12.8333 15.1667ZM8.16667 22.1667H15.1667V5.83333H8.16667V22.1667Z" fill="#F6741C"/>
                                                        </g>
                                                    </svg> ${item.DESCBLOCO ? ` ${item.DESCBLOCO} -` : ''} ${item.SALA ?? 'SEM SALA'} <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>`;
                                });

                                tabelaHtml += `</div></div></div></div>`;
                                index++;
                            });

                            tabelaHtml += `</div>`;

                            $("#quadro_horario").html(tabelaHtml);
                        },
                        error: function(xhr, status, error) {
                            console.error("Erro na requisição:", error);
                        },
                        complete: function() {
                            $("#loading-overlay").fadeOut(); // Oculta o loading após a resposta
                        }
                    });
                });    
            });
            
        </script>
    </body>
</html>