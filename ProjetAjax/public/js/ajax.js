$(document).ready(function()
{
    chargerRegions();

});

function chargerRegions()
{
    $.get("controller/ajaxController.php?page=regions").done(function(rep){
        var html='<option value="">selectionnez un region</option>'
        rep = JSON.parse(rep)
        for(var i=0; i<rep.lenght; i++){
            html += '<option value="'+rep[i].idR+'">'+rep[i].nomR+'</option>'
        }
       $("#divReg").html(html);
       
       $("#idR").change(function(){
           chargerDepartments($(this).val());

       });
    })
        
    

}

function chargerDepartements()
{
    $.get("controller/ajaxController.php?page=regions").done(function(rep){
        var html='<option value="">selectionnez une departement</option>'
        rep = JSON.parse(rep)
        for(var i=0; i<rep.lenght; i++){
            html += '<option value="'+rep[i].idR+'">'+rep[i].nomD+'</option>'
        }
       $("#divReg").html(html);
       
       $("#idR").change(function(){
           chargerDepartments($(this).val());

       });
    })
        
    

}
