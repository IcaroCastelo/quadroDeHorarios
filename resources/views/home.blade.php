<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="icon" href="https://carreiradocente.unifametro.edu.br/img/logo-branca.png">
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" >
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
      <title>Quandro de Horário</title>
   </head>
    <style>
        	
    table.dataTable td {
    font-size: 15px;
    }
    </style>
   <body style="width: 100%;">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
          <div class="text-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="https://www.opovo.com.br/_midias/png/2021/12/10/logo_unifametro-17668450.png" height="150em" width="262em" />
              </a>
             
          </div>
        </header>
        <div class="text-center mb-5">
            <h3>CONSULTE SUAS DISCIPLINAS E LOCAIS DE AULAS</h3>
        </div>
    </div>

    <div class="container border border-success rounded shadow p-3 mb-3">
        <div class="row">
            <div class="col-md-4 col-8">
                <div class="input-group input-group-sm mb-3">
                    <label for="basic-url" class="form-label">CPF</label>
                    <div class="input-group">
                        <input type="text" class="form-control " name="cpf" id="cpf" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <span class="input-group-text bg-success" id="butao"><button type="button" class="btn btn-success btn-sm">Pesquisar</button></span>
                    </div>
                </div>
            </div>
        </div>   
        <div class="row">
            <div class="col-12 col-md-5">
                <label for="basic-url" class="form-label">Aluno</label>
                <div class="input-group mb-3">
                    <input id="Aluno" type="text" class="form-control" disabled aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
            <div class="col-8 col-md-5">
                <label for="basic-url" class="form-label">Curso</label>
                <div class="input-group mb-3">
                    <input id="Curso" type="text" class="form-control" disabled aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
            <div class="col-4 col-md-2">
                <label for="basic-url" class="form-label">Matrícula</label>
                <div class="input-group mb-3">
                    <input id="Matricula" type="text" class="form-control" disabled aria-label="Recipient's username" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
    <div class="container">
        
        <table id="quadro_horario" class="display compact" style="width:100%">
            <thead>
                <tr>
                    <th>UNIDADE</th>
                    <th>SALA</th>
                    <th>DIA SEMANA</th>
                    <th>HORA INICIAL</th>
                    <th>HORA FINAL</th>
                    <th>DISCIPLINA</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/12d00c3c33.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdn.datatables.net/plug-ins/1.13.4/sorting/percent.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js" integrity="sha512-OVIfkIJf755ncwio9Qw2Hu2ZplJvD/iYyy1t4SIzZqXkcdJyJSfmTEtaAevFS8Jf/seM3CSPzRjqQGkbhvasJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.js" integrity="sha512-kNpUJvzoDikOSOvP7VCpuTYzq/DQ409v6Du+bN96RA70hvDlfMcfbKBM7fid6mpYHFqA08UDoSxTQgLRYxFllw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
        
        $(document).ready(function () {
            $('#cpf').mask('99999999999');
            var table = $('#quadro_horario').DataTable({
       
                processing: true,
                serverSide: false,
                searching: false,
                paging:   false,
                ajax: {
                    url: "{{route('quadro.ajax')}}",
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        _token: '{{csrf_token()}}',
                        cpf: function(){return $("#cpf").val()},
                    },
                    
                },
                columnDefs: [
                    {className: "text-center", "targets": ['_all']},
                    { "width": "20%", "targets": 0 },
                    { "width": "25%", "targets": 1 },
                    { "width": "15%", "targets": 2 },
                    { "width": "15%", "targets": 3 },
                    { "width": "10%", "targets": 4 },
                    { "width": "25%", "targets": 5 },
                ],
                scrollX: true,
                columns: [
                    { data: 'UNIDADE' },
                    { data: 'SALA' },
                    { data: 'DIASEMANA' },
                    { data: 'HORAINICIAL' },
                    { data: 'HORAFINAL' },
                    { data: 'DISCIPLINA' },
                    
                ],
                language: {
                    url:"//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json",
                    processing: '<div class="text-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>'
                
                },

                
                    
            })

            $("#butao").on("click", function() {
                table.ajax.reload();

                $.ajax({
                    url: "{{route('quadro.ajax')}}",
                    type: "post",
                    data: {
                        _token: '{{csrf_token()}}',
                        cpf: function(){return $("#cpf").val()},
                    },
                    success: function(response) {
                        if( response.success) {
                            table.ajax.reload();

                           $('#Aluno').val(response.data[0].NOMEFANTASIA) 
                           $('#Curso').val(response.data[0].CURSO) 
                           $('#Matricula').val(response.data[0].MATRICULA) 
                        }
                    }
                });
            });

            
        });
        
      </script>
    <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="https://portal.unifametro.edu.br/FrameHTML/Web/App/Edu/PortalEducacional/login/" class="nav-link px-2 text-muted" >Portal do Aluno</a></li>
            <li class="nav-item"><a href="https://educacaoonline.unifametro.edu.br/login/index.php" class="nav-link px-2 text-muted">Disciplinas Online</a></li>
          </ul>
        </footer>
      </div>
   </body>
</html>