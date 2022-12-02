 //evento de tipo submit que ejecuta la funcion sub
    $('#formulario').submit(sub);

 //funciona que toma los parametros de los inputs para actualizar tabla 
    function sub(e) {


        //objeto que tomar los valores de los inputs 
        const datosPost = {

            id: $('#idUpdate').val(), //id,  etiqueta y valor 
            titulo: $('#titulo').val(), 
            articulo: $('#articulo').val(),
            editor: $('#editor').val()
        };
        
        //metodo ajax que abre la conexion, metodo http,destino, dato a enviar y funcion que tiene como parametro la respuesta
        $.ajax({url: '../../controller/updateNoticeController.php',
                type:'POST',
                data: datosPost,
                success: function (response) {

                 console.log(response);
            
                }
        });


       //ejecucion del metodo list para que se actualice la tabla al instante
        list();
      e.preventDefault();
       
    }

 
    list();

    //metodo que muestra los  datos de la tabla
    function list() {

        //
        $.ajax({
            url: '../../controller/viewTableEditController.php',
            type: 'GET',
            success: function (response) {

                //elementos recibidos de la consulta
                let $datos = JSON.parse(response);
               
                let template = [];
                
                //llenar tabla
                $datos.forEach(element => {

                    template += `<tr taskid="${element.id}">


                    
                          

                            <td id=sub style="background-color:indigo; width:100px;">
                                 <a href="#" class="item">${element.title} </a>
                            </td>

                            <td id=sub style="background-color:white; width:100px;">
                                ${element.type}
                            </td>


                            <td id=sub style=" width:100px;">
                                ${element.date_register}
                            </td>
                            
                        </tr>`; 

                      
                        
                });

                //agregamos la plantilla a la tabla
                $('#contenido-tabla').html(template);

            }
        });
    }


        //evento click que lleva los datos a los inputs
        $(document).on('click', '.item', function (e) {

            //accedemos a la etiqueta y al elemento padre y elemento padre otra vez
            let element = $(this)[0].parentElement.parentElement;

            //de su elemento abuelo, obtenemos el id. de esta forma sabra a quien le estamos haciendo click 
            let id = $(element).attr('taskid');

            //y esto es la misma wea a cada rato 
            $.ajax({url: '../../controller/EditInnerController.php',
                    type: 'POST',
                    data: { id },
                    success: function (response) {

                console.log(id);

                //de la conexion obtenemos los resultados 
                let elementos = JSON.parse(response);

                // y esos resultados finalmente se los pasamos a las etiquetas
                $('#titulo').val(elementos.titulo);
                $('#articulo').val(elementos.tipo);
                $('#editor').val(elementos.content);
                $('#idUpdate').val(id);

                }
                

            });

            e.preventDefault();
        });



        /*desde el php la forma en que recibimos
         los datos es con post o get y devolverlos es con la paralabra reservada echo*/
    
 





