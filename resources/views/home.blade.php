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
      
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" >
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.7.0/css/colReorder.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap.css">
      <title>Quadro de horário</title>
   </head>
    <style>
    .auto {
        width: auto;
    }
    table.dataTable td {
        word-break: break-all;
    }
    td {
        white-space: initial;
    }
   
    /* div.container { max-width: 1200px } */
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
            <h3>QUADRO DE HORÁRIO</h3>
        </div>
    </div>

    <div class="container border border-success rounded shadow p-3 mb-3 auto">
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
            <strong>* Clique para exibir a unidade</strong>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="quadro_horario" class="display nowrap" style="width:100%" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>DIA DA SEMANA</th>
                            <th>HORÁRIO</th>
                            <th>SALA</th>
                            <th>DISCIPLINA</th>
                            <th>UNIDADE</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        
    </div>
      <script src="https://code.jquery.com/jquery-3.7.0.js"> </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/12d00c3c33.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


      {{-- <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script> --}}
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.js" integrity="sha512-kNpUJvzoDikOSOvP7VCpuTYzq/DQ409v6Du+bN96RA70hvDlfMcfbKBM7fid6mpYHFqA08UDoSxTQgLRYxFllw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

      <script>
        
        $(document).ready(function () {
            $('#cpf').mask('99999999999');
            var table = $('#quadro_horario').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                processing: true,
                serverSide: false,
                searching: false,
                paging:   false,
                responsive: true,

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
                    { "width": "20%", "word-break": "break-all", "targets": 0 },
                    { "width": "25%", "word-break": "break-all", "targets": 1 },
                    { "width": "15%", "word-break": "break-all", "targets": 2 },
                    { "width": "15%", "word-break": "break-all", "targets": 3 },
                    { "width": "10%", "word-break": "break-all", "targets": 4 },
                    { 'visible': false, 'targets': [0] }
                ],
               
                columns: [
                    { data: 'NUMEROSEMANA' },
                    { data: 'DIASEMANA' },
                    { data: 'HORARIO'},
                    { data: 'SALA' },
                    { data: 'DISCIPLINA' },
                    { data: 'UNIDADE' },
                    
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

                           $('#Aluno').val(response.data[0].ALUNO) 
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
         <div class="text-center">
            <h5><strong>Acesse aqui:</strong></h5>
            <p style="text-decoration: underline; font-size: 1.3em"><a href="https://portal.unifametro.edu.br/FrameHTML/Web/App/Edu/PortalEducacional/login/" target="_blank" class="nav-link px-2 text-muted" >Portal Acadêmico</a><p>
            <h5><strong>Acesse aqui:</strong></h5>
            <p style="text-decoration: underline; font-size: 1.3em"><a href="https://educacaoonline.unifametro.edu.br/login/index.php" target="_blank" class="nav-link px-2 text-muted" >Disciplina Online</a><p>
         </div>
        </footer>
      </div>
   </body>
</html>